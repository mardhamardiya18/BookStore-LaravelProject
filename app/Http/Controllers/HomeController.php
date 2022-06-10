<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->latest()->limit(4)->get();
        $books_popular = Book::with('category')->orderBy('views', 'desc')->limit(4)->get();
        $banners = Banner::latest()->get();
        return view('pages.homepage', [
            'books' => $books,
            'books_popular' => $books_popular,
            'banners' => $banners
        ]);
    }

    public function popular()
    {
        $books_popular = Book::with('category')->orderBy('views', 'desc')->get();
        return view('pages.popular', [
            'books_popular' => $books_popular
        ]);
    }

    public function post()
    {
        $books = Book::with('category')->latest()->get();
        return view('pages.book', [
            'books' => $books
        ]);
    }

    public function seller()
    {
        $books_seller = Book::with('category')->orderBy('sales_amount', 'desc')->get();
        return view('pages.bestseller', [
            'books_seller' => $books_seller
        ]);
    }
}
