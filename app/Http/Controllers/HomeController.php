<?php

namespace App\Http\Controllers;

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

        if($request->filled('search')){
            $query = strtolower(trim($request->input('search')));

            // Perform the search with the modified query string
            $books = Books::where('name', 'LIKE', "%{$query}%")->get();
        }else{
            $books = Books::where('status', 1)->get();
        }


        return view('front.index', compact( 'books' ));
    }


}
