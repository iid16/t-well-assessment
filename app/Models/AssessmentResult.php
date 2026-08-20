<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssessmentResult extends Model
{
    protected $fillable = [
        'assessment_code',
        'screen_time',
        'x_score',
        'y2_score',
        'x_category',
        'y2_category',
        'interpretation',
    ];

    protected $casts = [
        'screen_time' => 'integer',
        'x_score' => 'decimal:2',
        'y2_score' => 'decimal:2',
    ];
}