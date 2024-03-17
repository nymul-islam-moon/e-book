<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBuySubscriptionRequest;
use App\Models\BuySubscription;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BuySubscriptionController extends Controller
{

    protected $title;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->title = 'Subscription';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $query = DB::table('buy_subscriptions');

        if (!empty($request->f_soft_delete)) {
            if ( $request->f_soft_delete == 1 ) {
                $query->where('deleted_at', '=', null);
            } else {
                $query->where('deleted_at', '!=', null);
            }
        }

        $buySubscription = $query->orderByDesc('id')->get();


        if ( $request->ajax() ) {
            return DataTables::of( $buySubscription )
                ->addIndexColumn()
                ->addColumn( 'action', function ( $row ) {

                    $html = '';

                    $html .='<div class="btn-group" role="group" aria-label="Button group with nested dropdown">';
                    $html .='<div class="btn-group" role="group">';
                    $html .='<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">';
                    $html .='Action';
                    $html .='</button>';
                    $html .='<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">';
                    if ($row->deleted_at == null) {
                        $html .='<li><a class="dropdown-item" href="'. route('admin.subscription.edit', $row->id) .'" id="edit_btn">Edit</a></li>';
                        $html .='<li><a class="dropdown-item" href="'. route('admin.subscription.destroy', $row->id) .'" id="delete_btn">Delete</a></li>';
                    } else {
                        $html .='<li><a class="dropdown-item" href="'. route('admin.subscription.restore', $row->id) .'" id="restore_btn">Restore</a></li>';
                        $html .='<li><a class="dropdown-item" href="'. route('admin.subscription.forcedelete', $row->id) .'" id="force_delete_btn">Hard Delete</a></li>';
                    }
                    $html .='</ul>';
                    $html .='</div>';
                    $html .='</div>';

                    return $html;
                })
                ->addColumn('checkbox', function ($row) {
                    $html = '';

                    $html .= '<input type="checkbox" class="checkbox_ids" name="ids" value="'. $row->id .'">';

                    return $html;

                })
                ->editColumn('user', function ($row) {

                    $user= User::select('first_name', 'last_name')
                    ->where('id', $row->user_id)
                    ->first();

                    return $user->first_name . ' ' . $user->last_name;
                })
                ->rawColumns(['action', 'checkbox', 'user'])
                ->make(true);
        }


        $title = $this->title;
        return view('admin.subscription.index', compact( 'title' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        $users = User::where('is_admin', '=', 3)->get();
        $subscriptions = Subscription::all();
        return view('admin.subscription.create', compact( 'title', 'users', 'subscriptions' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuySubscriptionRequest $request, BuySubscription $buySubscription)
    {
        $formData = $request->validated();

        // Get the current date
        $currentDate = Carbon::now();

        // Get the subscription details from the database
        $subscription = Subscription::select('month')->where('id', $formData['subscription_id'])->first();

        // Add the month from the subscription to the current date
        $expDate = $currentDate->copy()->addMonths($subscription->month);

        // Assign the formatted expiration date to the form data
        $formData['exp_date'] = $expDate->format('Y-m-d');

        if (  auth()->user()->is_admin == 3 ) {
            $formData['status'] = false;
        } else {
            $formData['status'] = true;
        }

        // dd($formData);

        // Create the buy subscription record
        $buySubscription->create($formData);

        return response()->json("$this->title created successfully");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BuySubscription $buySubscription)
    {
        $title = $this->title;

        return view('admin.subscription.edit', compact( 'title', 'buySubscription' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
