<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    function store() {
        $store1 = (object) ["img" => "img/about.jpg", "title" => "Come On In", "subtitle" => "We're Open", "closed" => "Closed", "schedule1" => "7:00 AM to 8:00 PM", "schedule2" => "9:00 AM to 5:00 PM", "loca1" => "1116 Orchard Street", "loca2" => "Golden Valley, Minnesota", "call" => "Call Anytime", "phone" => "(317) 585-8468"];

        $store2 = (object) ["title" => "Strong Coffee, Strong Roots" , "subtitle" => "About Our Cafe" , "para1" => "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee
        sourced from artisan farmers in various regions of South and Central America. We are
        dedicated to travelling the world, finding the best coffee, and bringing back to you here in
        our cafe.", "para2" => "We guarantee that you will fall in lust with our decadent blends the moment you walk inside until you finish your last sip. Join us
        for your daily routine, an outing with friends, or simply just to enjoy some alone time."];

        return view('pages.store', compact('store1', 'store2'));
    }
}
