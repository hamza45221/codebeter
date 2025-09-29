<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Reviews::all();
        return view('admin.reviews',compact('reviews'));

    }

    public function store(Request $request){


        $review = new Reviews();
        $review->name = $request->name;
        $review->email = $request->email ;
        $review->title = $request->title ;
        $review->description = $request->description ;

        if ($request->hasFile('image')) {
            $review->image ='storage/'. $request->file('image')->store('reviews/images', 'public');
        }

        if ($request->hasFile('video')) {
            $review->video ='storage/'. $request->file('video')->store('reviews/videos', 'public');
        }

        $review->save();

        return redirect()->back()->with('success', 'Review stored successfully!');
    }

    public function update(Request $request, $id){


        $review = Reviews::find($id);
        $review->name = $request->name;
        $review->email = $request->email ;
        $review->title = $request->title ;
        $review->description = $request->description ;

        if ($request->hasFile('image')) {
            $review->image ='storage/'. $request->file('image')->store('uploads', 'public');
        }

        if ($request->hasFile('video')) {
            $review->video ='storage/'. $request->file('video')->store('uploads', 'public');
        }

        $review->save();

        return redirect()->back()->with('success', 'Review stored successfully!');
    }

    public function delete(Request $request, $id){
        $review = Reviews::find($id);
        if($review){
            $review->delete();

            return redirect()->back()->with('success', 'Review deleted successfully!');
        }
        return redirect()->back()->with('error', 'Review not found!');
    }
}
