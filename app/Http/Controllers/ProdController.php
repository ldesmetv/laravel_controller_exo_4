<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdController extends Controller
{
    function prod() {
        $prod1 = (object) ["img" => "img/products-01.jpg", "title" => "Blended to Perfection", "subtitle" => "Coffees & Teas", "para" => "We take pride in our work, and it shows. Every time you order a beverage from us, we
        guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan
        Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced
        black coffee, you will be coming back for more."];

        $prod2 = (object) ["img" => "img/products-02.jpg", "title" => "Delicious Treats, Good Eats", "subtitle" => "Bakery & Kitchen", "para" => "Our seasonal menu features delicious snacks, baked goods, and even full meals
        perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever
        possible, alongside premium vendors for specialty goods."];

        $prod3 = (object) ["img" => "img/products-03.jpg", "title" => "From Around the World", "subtitle" => "Bulk Speciality Blends", "para" => "Travelling the world for the very best quality coffee is something take pride in.
        When you visit us, you'll always find new blends from around the world, mainly from regions in
        Central and South America. We sell our blends in smaller to large bulk quantities. Please visit
        us in person for more details." ];

        return view('pages.products', compact('prod1', 'prod2', 'prod3'));
    }
}
