<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreBookCategoryRequest;
use App\Http\Requests\UpdateBookCategoryRequest;
use App\Models\BookCategory;

class BooksCategoryController extends Controller
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


        $this->title = 'Books Category';


   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(Request $request)
   {
        $query = DB::table('book_categories');

        if (!empty($request->f_soft_delete)) {
            if ($request->f_soft_delete == 1) {
                $query->where('deleted_at', '=', null);
            } else {
                $query->where('deleted_at', '!=', null);
            }
        }

        if ( !empty( $request->f_status ) ) {
            if ($request->f_status == 1){
                $query->where('status', 1);
            }else{
                $query->where('status', 0);
            }
        }


        $categories = $query->orderByDesc('id')->get();


        if ( $request->ajax() ) {
            return DataTables::of( $categories )
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
                        $html .='<li><a class="dropdown-item" href="'. route('book.category.edit', $row->id) .'" id="edit_btn">Edit</a></li>';
                        $html .='<li><a class="dropdown-item" href="'. route('book.category.destroy', $row->id) .'" id="delete_btn">Delete</a></li>';
                    } else {
                        $html .='<li><a class="dropdown-item" href="'. route('book.category.restore', $row->id) .'" id="restore_btn">Restore</a></li>';
                        $html .='<li><a class="dropdown-item" href="'. route('book.category.forcedelete', $row->id) .'" id="force_delete_btn">Hard Delete</a></li>';
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
                            '<input class="form-check-input" href="'.route('book.category.deactive', $row->id).'" type="checkbox" role="switch" id="deactive_btn" '.($row->status == 1 ? 'checked' : '').'>&nbsp;'.
                            '<label class="form-check-label" for="SwitchCheck4"> Active</label>'.
                            '</div>';

                    if ($row->status != 1) {
                        $html = '<div class="form-check form-switch">'.
                                '<input class="form-check-input" type="checkbox" href="'.route('book.category.active', $row->id).'" role="switch" id="active_btn">&nbsp;'.
                                '<label class="form-check-label" for="SwitchCheck4"> De-active</label>'.
                                '</div>';
                    }

                    return $html;
                })

                ->rawColumns(['action', 'status', 'checkbox'])
                ->make(true);
        }

        $title = $this->title;

        return view('admin.category.index', compact( 'title' ));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
        $title = $this->title;
        return view('admin.category.create', compact( 'title' ));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreBookCategoryRequest $request
    * @return \Illuminate\Http\Response
    */
   public function store( StoreBookCategoryRequest $request, BookCategory $bookCategory )
   {
        $formData = $request->validated();

        $bookCategory->create( $formData );

        return response()->json("$this->title created successfully");
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\BookCategory $bookCategory
    * @return \Illuminate\Http\Response
    */
   public function show( BookCategory $bookCategory )
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\BookCategory  $bookCategory
    * @return \Illuminate\Http\Response
    */
   public function edit( BookCategory $bookCategory )
   {
        $title = $this->title;
        return view('admin.category.edit', compact('bookCategory', 'title'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateBookCategoryRequest  $request
    * @param  \App\Models\BookCategory $bookCategory
    * @return \Illuminate\Http\Response
    */
   public function update(UpdateBookCategoryRequest $request, BookCategory $bookCategory)
   {
        $formData = $request->validated();

        $bookCategory->update($formData);

        return response()->json("$this->title Updated Successfully");
    }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\BookCategory $bookCategory
    * @return \Illuminate\Http\Response
    */
   public function destroy(BookCategory $bookCategory)
   {
        $bookCategory->delete();

        return response()->json("$this->title Deleted Successfully");
   }


   /**
     * Active the specified resource from storage.
     *
     * @param  \App\Models\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function active(BookCategory $bookCategory)
    {
        $bookCategory->status = 1;
        $bookCategory->save();
        return response()->json("$this->title activated successfully");
    }


    /**
     * De-active the specified resource from storage.
     *
     * @param  \App\Models\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function deactive(BookCategory $bookCategory)
    {
        $bookCategory->status = 0;
        $bookCategory->save();
        return response()->json("$this->title de-activated successfully");
    }

    /**
     * Restore the soft deleted data.
     *
     * @param  \App\Models\BookCategory $bookCategory
     * @return \Illuminate\Http\Response
     */

    public function restore($bookCategory)
    {
        BookCategory::where('id', $bookCategory)->withTrashed()->restore();

        return response()->json("$this->title restored successfully");
    }



    /**
     * Force Delete the soft deleted data.
    *
    * @param  \App\Models\BookCategory $bookCategory
    * @return \Illuminate\Http\Response
    */

    public function forceDelete($bookCategory)
    {
        BookCategory::where('id', $bookCategory)->withTrashed()->forceDelete();

        return response()->json('Product Category Permanently Deleted Successfully');
    }


    /**
     * Force Delete the soft deleted data.
    *
    * @param  \App\Models\BookCategory $bookCategory
    * @return \Illuminate\Http\Response
    */

    public function destroyAll(Request $request)
    {

        $ids = $request->ids;

        $idArr = (array) $ids;

        foreach ($idArr as $key=> $id) {
            $bookCategory = BookCategory::where('id', $id)->first();
            $bookCategory->status = 0;
            $bookCategory->save();
            $bookCategory->delete();
        }
        return response()->json('Product Category Deleted Successfully');
    }


    /**
     * Restore all the soft deleted data
    *
    * @param  \App\Models\BookCategory $bookCategory
    * @return \Illuminate\Http\Response
    */

    public function restoreAll(Request $request)
    {

        $ids = $request->ids;

        $idArr = (array) $ids;

        foreach ($idArr as $key=> $id) {
            $bookCategory = BookCategory::where('id', $id)->withTrashed()->restore();
        }

        return response()->json("$this->title restored successfully");

    }


    /**
     * Permanently Delete all the soft deleted data
    *
    * @param  \App\Models\BookCategory $bookCategory
    * @return \Illuminate\Http\Response
    */

    public function permanentDestroyAll(Request $request)
    {

        $ids = $request->ids;

        $idArr = (array) $ids;

        foreach ($idArr as $key=> $id) {
            $bookCategory = BookCategory::where('id', $id)->withTrashed()->forceDelete();
        }

        return response()->json("$this->title permanently deleted successfully");

    }
}
