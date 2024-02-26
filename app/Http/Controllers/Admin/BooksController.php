<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Books;
use App\Models\BookCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BooksController extends Controller
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

        $this->title = 'Books';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $query = DB::table('books');

        if (!empty($request->f_soft_delete)) {
            if ( $request->f_soft_delete == 1 ) {
                $query->where('deleted_at', '=', null);
            } else {
                $query->where('deleted_at', '!=', null);
            }
        }

        if ( !empty( $request->f_status ) ) {
            if ( $request->f_status == 1 ) {
                $query->where('status', 1);
            } else {
                $query->where('status', 0);
            }
        }


        $books = $query->orderByDesc('id')->get();


        if ( $request->ajax() ) {
            return DataTables::of( $books )
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
                        $html .='<li><a class="dropdown-item" href="'. route('admin.books.edit', $row->id) .'" id="edit_btn">Edit</a></li>';
                        $html .='<li><a class="dropdown-item" href="'. route('admin.books.destroy', $row->id) .'" id="delete_btn">Delete</a></li>';
                    } else {
                        $html .='<li><a class="dropdown-item" href="'. route('admin.books.restore', $row->id) .'" id="restore_btn">Restore</a></li>';
                        $html .='<li><a class="dropdown-item" href="'. route('admin.books.forcedelete', $row->id) .'" id="force_delete_btn">Hard Delete</a></li>';
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
                            '<input class="form-check-input" href="'.route('admin.books.deactive', $row->id).'" type="checkbox" role="switch" id="deactive_btn" '.($row->status == 1 ? 'checked' : '').'>&nbsp;'.
                            '<label class="form-check-label" for="SwitchCheck4"> Active</label>'.
                            '</div>';

                    if ($row->status != 1) {
                        $html = '<div class="form-check form-switch">'.
                                '<input class="form-check-input" type="checkbox" href="'.route('admin.books.active', $row->id).'" role="switch" id="active_btn">&nbsp;'.
                                '<label class="form-check-label" for="SwitchCheck4"> De-active</label>'.
                                '</div>';
                    }

                    return $html;
                })
                ->editColumn('img', function ($row) {
                    $html = '<div class="d-flex gap-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="' . asset( 'uploads/books/img/' . $row->img ) . '" alt="" class="avatar-xs rounded-circle">
                                </div>
                            </div>';

                    return $html;
                })

                ->rawColumns(['action', 'status', 'checkbox', 'img'])
                ->make(true);
        }

        $title = $this->title;

        $booksCategory = BookCategory::where( 'status', 1 )->get();

        return view( 'admin.book.index', compact( 'title', 'booksCategory' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   {
        $title = $this->title;

        $booksCategories = BookCategory::where( 'status', 1 )->get();

        return view('admin.book.create', compact( 'title', 'booksCategories' ));
   }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest $request
     * @return \Illuminate\Http\Response
     */
   public function store( StoreBookRequest $request, Books $books )
   {
        $formData = $request->validated();

        $imgFile = $request->file('img')->getClientOriginalName();

        $imgFileArr = explode('.', $imgFile);

        $imgOriginalName = $imgFileArr[0];

        $imgName = $imgOriginalName.'.'.$request->img->extension();

        $fileName = time().'.'.$request->file->extension();
        $request->img->move(public_path('uploads/books/img/'), $imgName);
        $request->file->move(public_path('uploads/books/file/'), $fileName);

        $formData['file']   = $fileName;
        $formData['img']    = $imgName;

        $books->create( $formData );

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
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit( Books $books )
    {
         $title = $this->title;
         $booksCategories = BookCategory::where( 'status', 1 )->get();
         return view( 'admin.book.edit', compact( 'books', 'title', 'booksCategories' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Books $books
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateBookRequest $request, Books $books )
    {
        $formData = $request->validated();

        if ( isset( $formData['img'] ) ) {

            $imgFile            = $request->file('img')->getClientOriginalName();
            $imgFileArr         = explode('.', $imgFile);
            $imgOriginalName    = $imgFileArr[0];
            $imgName            = $imgOriginalName .'.'. $request->img->extension();

            // unlink img
            try {
                unlink( 'uploads/books/' . $books->img );
            } catch ( Exception $ex ) {

            }

            // return
            $request->img->move( public_path('uploads/books/img/'), $imgName );
            $formData['img']    = $imgName;
        }


        if ( isset( $formData['file'] ) ) {

            $fileName = time() .'.'. $request->file->extension();

            // unlink file

            try {
                unlink( 'uploads/books/file/' . $books->file );

            } catch ( Exception $ex ) {

            }

            // return
            $request->file->move(public_path('uploads/books/'), $fileName);
            $formData['file']   = $fileName;
        }

        $books->update($formData);

        // return
        return response()->json("$this->title Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {
        $books->delete();

        return response()->json("$this->title Deleted Successfully");
    }

    /**
     * Active the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function active(Books $books)
    {
        $books->status = 1;
        $books->save();
        return response()->json("$this->title activated successfully");
    }

    /**
     * De-active the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function deactive(Books $books)
    {
        $books->status = 0;
        $books->save();
        return response()->json("$this->title de-activated successfully");
    }

    /**
     * Restore the soft deleted data.
     *
     * @param  \App\Models\Books $books
     * @return \Illuminate\Http\Response
     */

    public function restore($books)
    {
        Books::where('id', $books)->withTrashed()->restore();

        return response()->json("$this->title restored successfully");
    }

    /**
     * Force Delete the soft deleted data.
     *
     * @param  \App\Models\Books $books
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($books)
    {
        Books::where('id', $books)->withTrashed()->forceDelete();

        return response()->json('Product Category Permanently Deleted Successfully');
    }

    /**
     * Force Delete the soft deleted data.
     *
     * @param  \App\Models\Books $books
     * @return \Illuminate\Http\Response
     */
    public function destroyAll(Request $request)
    {

        $ids = $request->ids;

        $idArr = (array) $ids;

        foreach ($idArr as $key=> $id) {
            $books = Books::where('id', $id)->first();
            $books->status = 0;
            $books->save();
            $books->delete();
        }
        return response()->json("$this->title Deleted Successfully");
    }

    /**
     * Restore all the soft deleted data
     *
     * @param  \App\Models\Books $books
     * @return \Illuminate\Http\Response
     */
    public function restoreAll(Request $request)
    {

        $ids = $request->ids;

        $idArr = ( array ) $ids;

        foreach ( $idArr as $key=> $id ) {
            $books = Books::where( 'id', $id )->withTrashed()->restore();
        }

        return response()->json("$this->title restored successfully");
    }


    /**
     * Permanently Delete all the soft deleted data
     *
     * @param  \App\Models\Books $books
     * @return \Illuminate\Http\Response
     */
    public function permanentDestroyAll(Request $request)
    {

        $ids = $request->ids;

        $idArr = ( array ) $ids;

        foreach ($idArr as $key=> $id) {
            $books = Books::where('id', $id)->withTrashed()->forceDelete();
        }

        return response()->json("$this->title permanently deleted successfully");
    }
}
