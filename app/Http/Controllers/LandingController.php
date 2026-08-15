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
        // Ambil semua portofolio terbaru untuk ditampilkan di landing page
        $portfolios = Portfolio::latest()->take(6)->get(); // Ambil 6 teratas untuk landing page
        
        // Ambil layanan bertipe Layanan
        $services = Service::where('category', 'Layanan')->orderBy('order')->get();
        
        return view('welcome', compact('portfolios', 'services'));
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
        $pillars = Service::where('category', 'Pilar')->orderBy('order')->get();
        $timelines = Timeline::orderBy('order')->orderBy('year')->get();
        return view('about', compact('pillars', 'timelines'));
    }
}
