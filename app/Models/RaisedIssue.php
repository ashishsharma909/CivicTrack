<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RaisedIssue extends Model
{
    use HasFactory;

    // Table name (optional if naming is conventional)
    protected $table = 'raised_issues';

    // Fillable fields for mass assignment
    protected $fillable = [
        'headline',
        'description',
        'category',
        'status',
        'location',
        'image_path',
        'latitude',
        'longitude',
    ];

    // Optional: default attribute values
    protected $attributes = [
        'status' => 'Not resolved',
    ];
}
