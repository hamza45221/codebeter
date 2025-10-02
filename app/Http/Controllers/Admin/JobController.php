<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $job = Job::all();
        return view('admin.job',compact('job'));

    }

    public function store(Request $request){


        $t = new Job();

        $t->type = $request->type;
        $t->title = $request->title;
        $t->status = $request->status;
        $t->desc = $request->desc;
        $t->end_date = $request->end_date;


        $t->save();

        return redirect()->back()->with('success', 'Job Member stored successfully!');
    }

    public function update(Request $request, $id){


        $t= Job::find($id);
        $t->type = $request->type;
        $t->title = $request->title;
        $t->status = $request->status;
        $t->desc = $request->desc;
        $t->end_date = $request->end_date;

        $t->update();

        return redirect()->back()->with('success', 'Job Member stored successfully!');
    }

    public function delete(Request $request, $id){
        $review = Job::find($id);
        if($review){
            $review->delete();

            return redirect()->back()->with('success', 'Job Member deleted successfully!');
        }
        return redirect()->back()->with('error', 'Job Member not found!');
    }
}
