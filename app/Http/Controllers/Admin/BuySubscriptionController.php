<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBuySubscriptionRequest;
use App\Http\Requests\UpdateBuySubscriptionRequest;
use App\Models\BuySubscription;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Exception;
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

        if ( auth()->user()->is_admin == 3 ) {
            $query->where( 'user_id', '=', auth()->user()->id );
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

                    if( auth()->user()->is_admin != 3 ) {
                        if ($row->deleted_at == null) {
                            $html .='<li><a class="dropdown-item" href="'. route('admin.buySubscription.destroy', $row->id) .'" id="delete_btn">Delete</a></li>';
                        } else {
                            $html .='<li><a class="dropdown-item" href="'. route('admin.buySubscription.restore', $row->id) .'" id="restore_btn">Restore</a></li>';
                            $html .='<li><a class="dropdown-item" href="'. route('admin.buySubscription.forcedelete', $row->id) .'" id="force_delete_btn">Hard Delete</a></li>';
                        }
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
                ->editColumn('status', function ($row) {
                    $html = '<div class="form-check form-switch">'.
                            // '<input class="form-check-input" href="'.route('admin.subscription.deactive', $row->id).'" type="checkbox" role="switch" id="deactive_btn" '.($row->status == 1 ? 'checked' : '').'>&nbsp;'.
                            '<label class="form-check-label" for="SwitchCheck4"> Approved</label>'.
                            '</div>';

                    if ($row->status != 1 && auth()->user()->is_admin != 3 ) {
                        $html = '<div class="form-check form-switch">'.
                                '<input class="form-check-input" type="checkbox" href="'.route('admin.buySubscription.active', $row->id).'" role="switch" id="active_btn">&nbsp;'.
                                '<label class="form-check-label" for="SwitchCheck4"> Waiting For Approved</label>'.
                                '</div>';
                    } elseif($row->status != 1) {
                        $html = '<div class="form-check form-switch">'.
                                '<label class="form-check-label" for="SwitchCheck4"> Waiting For Approved</label>'.
                                '</div>';
                    }

                    return $html;
                })
                ->editColumn('user', function ($row) {

                    $user= User::select('first_name', 'last_name')
                    ->where('id', $row->user_id)
                    ->first();

                    return $user->first_name . ' ' . $user->last_name;
                })
                ->rawColumns(['action', 'checkbox', 'user', 'status'])
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

        if ( auth()->user()->is_admin == 3 ) {
            $formData['user_id'] = auth()->user()->id;
        }

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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\BuySubscription $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateBuySubscriptionRequest $request, BuySubscription $buySubscription )
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuySubscription $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuySubscription $buySubscription)
    {
        $buySubscription->delete();



        return response()->json("$this->title Deleted Successfully");
    }

    /**
     * Active the specified resource from storage.
     *
     * @param  \App\Models\BuySubscription  $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function active(BuySubscription $buySubscription)
    {

        $buySubscription->status = 1;
        $buySubscription->save();
        return response()->json("$this->title activated successfully");
    }

    /**
     * De-active the specified resource from storage.
     *
     * @param  \App\Models\BuySubscription  $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function deactive(BuySubscription $buySubscription)
    {
        $buySubscription->status = 0;
        $buySubscription->save();
        return response()->json("$this->title de-activated successfully");
    }

    /**
     * Restore the soft deleted data.
     *
     * @param  \App\Models\BuySubscription $buySubscription
     * @return \Illuminate\Http\Response
     */

    public function restore($buySubscription)
    {
        BuySubscription::where('id', $buySubscription)->withTrashed()->restore();

        return response()->json("$this->title restored successfully");
    }

    /**
     * Force Delete the soft deleted data.
     *
     * @param  \App\Models\BuySubscription $buySubscription
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($buySubscription)
    {
        BuySubscription::where('id', $buySubscription)->withTrashed()->forceDelete();

        return response()->json('Product Category Permanently Deleted Successfully');
    }

    /**
     * Force Delete the soft deleted data.
     *
     * @param  \App\Models\BuySubscription $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function destroyAll(Request $request)
    {

        $ids = $request->ids;

        $idArr = (array) $ids;

        foreach ($idArr as $key=> $id) {
            $buySubscription = BuySubscription::where('id', $id)->first();
            $buySubscription->status = 0;
            $buySubscription->save();
            $buySubscription->delete();
        }
        return response()->json("$this->title Deleted Successfully");
    }

    /**
     * Restore all the soft deleted data
     *
     * @param  \App\Models\BuySubscription $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function restoreAll(Request $request)
    {

        $ids = $request->ids;

        $idArr = ( array ) $ids;

        foreach ( $idArr as $key=> $id ) {
            $buySubscription = BuySubscription::where( 'id', $id )->withTrashed()->restore();
        }

        return response()->json("$this->title restored successfully");
    }


    /**
     * Permanently Delete all the soft deleted data
     *
     * @param  \App\Models\BuySubscription $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function permanentDestroyAll(Request $request)
    {

        $ids = $request->ids;

        $idArr = ( array ) $ids;

        foreach ($idArr as $key=> $id) {
            $buySubscription = BuySubscription::where('id', $id)->withTrashed()->forceDelete();
        }

        return response()->json("$this->title permanently deleted successfully");
    }
}
