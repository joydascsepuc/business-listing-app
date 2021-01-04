<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class PagesController extends Controller
{
    public function index()
    {
    	$listings = Listing::orderBy('created_at','desc')->get();
        return view('pages.index')->with('listings', $listings);
    }
}
