<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\raised_issue;
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
            'image'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'latitude'    => 'nullable|numeric',
            'longitude'   => 'nullable|numeric',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('issues', 'public');
        }

        // Save issue to database
        raised_issue::create([
            'headline'    => $request->input('headline'),
            'description' => $request->input('description'),
            'category'    => $request->input('category'),
            'status'      => 'Not resolved', // Optional, already defaulted
            'image_path'  => $imagePath,
            'latitude'    => $request->input('latitude'),
            'longitude'   => $request->input('longitude'),
        ]);

        return redirect()->back()->with('success', 'Issue submitted successfully!');
    }
}
