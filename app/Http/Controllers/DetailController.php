<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($slug)
    {
        $book = Book::where('slug', $slug)->with('category')->firstOrFail();
        return view('pages.detail', [
            'book' => $book
        ]);
    }
}
