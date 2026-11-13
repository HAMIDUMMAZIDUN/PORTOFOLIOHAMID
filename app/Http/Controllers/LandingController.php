<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Timeline;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the public landing page.
     */
    public function index()
    {
        // Ambil semua portofolio untuk galeri dan filter di homepage
        $portfolios = Portfolio::latest()->get();
        return view('welcome', compact('portfolios'));
    }

    /**
     * Display the pricing packages page.
     */
    public function pricing()
    {
        $packages = \App\Models\PricingPackage::all();
        return view('pricing', compact('packages'));
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
        $services = Service::where('category', 'Sosmed')->orderBy('order')->get();
        return view('social-media', compact('services'));
    }

    /**
     * Display the blog page.
     */
    public function blog()
    {
        $posts = \App\Models\BlogPost::latest()->get();
        return view('blog', compact('posts'));
    }

    /**
     * Display the about us page.
     */
    public function about()
    {
        $timelines = Timeline::orderBy('order')->orderBy('year')->get();
        return view('about', compact('timelines'));
    }
}
