<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Reviews;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio',compact('portfolio'));

    }

    public function store(Request $request){

        $review = new Portfolio();
        $review->name = $request->name;
        $review->title = $request->title ;
        $review->size = $request->size ;
        $review->year = $request->year ;
        $review->link = $request->link ;

        if ($request->hasFile('image')) {
            $review->image ='storage/'. $request->file('image')->store('reviews/images', 'public');
        }

        $review->save();

        return redirect()->back()->with('success', 'Portfolio stored successfully!');
    }

    public function update(Request $request, $id){


        $review = Portfolio::find($id);
        $review->name = $request->name;
        $review->title = $request->title ;
        $review->size = $request->size ;
        $review->year = $request->year ;
        $review->link = $request->link ;

        if ($request->hasFile('image')) {
            $review->image ='storage/'. $request->file('image')->store('uploads', 'public');
        }

        $review->save();

        return redirect()->back()->with('success', 'Portfolio Update successfully!');
    }

    public function delete(Request $request, $id){
        $review = Portfolio::find($id);
        if($review){
            $review->delete();

            return redirect()->back()->with('success', 'Portfolio deleted successfully!');
        }
        return redirect()->back()->with('error', 'Portfolio not found!');
    }
}
