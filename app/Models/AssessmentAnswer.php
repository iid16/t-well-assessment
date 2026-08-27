<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssessmentAnswer extends Model
{
    protected $fillable = [
        'item_code',
        'answer_value',
    ];

    protected function casts(): array
    {
        return [
            'assessment_session_id' => 'integer',
            'answer_value' => 'integer',
        ];
    }

    public function session(): BelongsTo
    {
        return $this->belongsTo(AssessmentSession::class, 'assessment_session_id');
    }
}
