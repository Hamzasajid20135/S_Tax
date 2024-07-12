<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contactUs()
    {
        return view('contact_us');
    }

    public function blogDetails()
    {
        return view('blog_details');
    }

    public function blogListing()
    {
        return view('blog_listing');
    }

    
    public function Quotation()
    {
        return view('quotation');
    }
}
