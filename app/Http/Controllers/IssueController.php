<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RaisedIssue;
use Illuminate\Support\Facades\Storage;


class IssueController extends Controller
{
    /**
     * Store a newly raised issue.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'headline'    => 'required|string|max:255',
            'description' => 'required|string',
            'category'    => 'required|string',
            'image'       => 'nullable|image',
            'latitude'    => 'nullable|numeric',
            'longitude'   => 'nullable|numeric',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('issues', 'public');
        }

        // Save issue to database

            $issue  = new RaisedIssue;
            $issue->headline = $request->input('headline');
            $issue->description = $request->input('description');
            $issue->category = $request->input('category');
            $issue->image_path = $imagePath;
            $issue->latitude = $request->input('latitude');
            $issue->longitude = $request->input('longitude');

            if($issue->save()){
                return redirect('/home')->with('issued reported');
            }else{
                dump('something went wrong');
            } 
    }

    public function showNearby(){

    $issues = \App\Models\RaisedIssue::latest()->get(); 
    return view('dashboard.problems', compact('issues'));
}

}
