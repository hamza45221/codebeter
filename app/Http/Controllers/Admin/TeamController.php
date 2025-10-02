<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::all();
        return view('admin.team',compact('team'));

    }

    public function store(Request $request){


        $t = new Team();

        $t->name = $request->name;
        $t->title = $request->title;
        $t->desc = $request->desc;
        if ($request->hasFile('image')) {
            $t->image ='storage/'. $request->file('image')->store('uploads', 'public');
        }
        $t->facebook_link = $request->facebook_link;
        $t->linkedIn_link = $request->linkedIn_link;

        $t->save();

        return redirect()->back()->with('success', 'Team Member stored successfully!');
    }

    public function update(Request $request, $id){


        $t= Team::find($id);
        $t->name = $request->name;
        $t->title = $request->title;
        $t->desc = $request->desc;

        // File upload
        if ($request->hasFile('image')) {
            $t->image ='storage/'. $request->file('image')->store('uploads', 'public');
        }

        $t->facebook_link = $request->facebook_link;
        $t->linkedIn_link = $request->linkedIn_link;

        $t->update();

        return redirect()->back()->with('success', 'Team Member stored successfully!');
    }

    public function delete(Request $request, $id){
        $review = Team::find($id);
        if($review){
            $review->delete();

            return redirect()->back()->with('success', 'Team Member deleted successfully!');
        }
        return redirect()->back()->with('error', 'Team Member not found!');
    }
}
