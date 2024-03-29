<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\Books;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( Request $request )
    {

        if( $request->filled('search') && $request->filled('category') ){
            $query = strtolower(trim($request->input('search')));

            // Perform the search with the modified query string
            $books = Books::where('books_category_id', '=', $request->input('category'))->where('name', 'LIKE', "%{$query}%")->get();
        } elseif( $request->filled('category') ) {
            $books = Books::where('books_category_id', '=', $request->input('category'))->get();
        } elseif($request->filled('search') ){
            $query = strtolower(trim($request->input('search')));

            $books = Books::where('name', 'LIKE', "%{$query}%")->get();

        }else{
            $books = Books::where('status', 1)->get();
        }

        $categories = BookCategory::all();
        return view('front.index', compact( 'books', 'categories' ));
    }


}
