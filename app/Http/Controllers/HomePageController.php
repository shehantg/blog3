<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeslider;
use App\Campaign;
use App\Event;
use App\Testimonial;
use App\Blog;
use App\Sponsor;



class HomePageController extends Controller
{
    public function show(){

    		$homeslider = Homeslider::where('status',1)->first();
    		$campaigns = Campaign::where('type','front_page')->where('status', 1)->get();
    		$featuredCampaign = Campaign::where('type','featured')->where('status', 1)->orderBy('created_at', 'desc')->first();
    		$campaignsurgents = Campaign::where('type','urgent_causes')->where('status', 1)->get();

    		$events = Event::where('status',1)->get();

    		$testimonials = Testimonial::orderBy('id', 'desc')
							             ->take(5)
							             ->get();

							             $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->take(3)
							             ->get();

							         $sponsors  = Sponsor::orderBy('id', 'asc')->take(8)
							             ->get();

							           

    		return view ('frontpage',['homeslider' => $homeslider,'campaigns' =>$campaigns,'featuredcampaign' => $featuredCampaign,'campaignsurgents' => $campaignsurgents,'events' => $events,'testimonials' => $testimonials,'blogs' => $blogs,'sponsors' => $sponsors]);
    }
}
