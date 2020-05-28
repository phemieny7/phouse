<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Photo;
use App\Category;
use App\Type;
use App\Feature;
use App\Partner;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
      {
               $slides = Property::where('featured', 1)
                     ->orderBy('created_at', 'asc')
                     ->take(4)
                     ->get();

               $featured = Property::where('featured', 1)
                     ->orderBy('created_at', 'desc')
                     ->take(1)
                     ->first();

                $deals = Property::where('featured', 1)
                      ->orderBy('price', 'asc')
                      ->take(6)
                      ->get();

                $latests = Property::latest()
                          ->take(4)
                          ->get();

                $partners = Partner::all()
                            ->take(8);
          
              return view('home', compact('slides','featured','deals','latests', 'partners'));
      }


      public function listing()
      {  
            $listings = Property::where('status_id',1)
            ->orWhere('status_id',2)
            ->orWhere('status_id',3)
            ->orderBy('created_at', 'desc')
            ->paginate(6);

            $populars = Property::where('featured',0)
                        ->orderBy('created_at', 'desc')
                        ->take(4)
                        ->get();

             $features = Property::where('featured',1)
                        ->orderBy('created_at', 'desc')
                        ->take(4)
                        ->get();

            
            return view('list', compact('listings','populars', 'features'));
      }

      public function show($id){
            $property = Property::find($id);

            return view('property', compact('property'));
      }
}
