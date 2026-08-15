<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the public landing page.
     */
    public function index()
    {
        // Ambil semua portofolio terbaru untuk ditampilkan di landing page
        $portfolios = Portfolio::latest()->take(6)->get(); // Ambil 6 teratas untuk landing page
        
        return view('welcome', compact('portfolios'));
    }

    /**
     * Display the pricing packages page.
     */
    public function pricing()
    {
        return view('pricing');
    }

    /**
     * Display the full portfolio page.
     */
    public function portfolio()
    {
        $portfolios = Portfolio::latest()->get();
        return view('portfolio', compact('portfolios'));
    }

    /**
     * Display the social media management service page.
     */
    public function socialMedia()
    {
        return view('social-media');
    }

    /**
     * Display the blog page.
     */
    public function blog()
    {
        return view('blog');
    }
}
