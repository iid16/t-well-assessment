<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'assessment_session_id' => 'integer',
        'screen_time' => 'integer',
        'x_score' => 'decimal:2',
        'y2_score' => 'decimal:2',
    ];

    public function session(): BelongsTo
    {
        return $this->belongsTo(AssessmentSession::class, 'assessment_session_id');
    }
}
