<?php

namespace App\Http\Requests;

use App\Support\AssessmentInstrument;
use Illuminate\Foundation\Http\FormRequest;

class SubmitAssessmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        $items = AssessmentInstrument::items();
        $codes = array_column($items, 'code');

        $rules = [
            'answers' => [
                'bail',
                'required',
                'array',
                'size:'.count($codes),
                'array:'.implode(',', $codes),
            ],
        ];

        foreach ($items as $item) {
            $answerRules = ['bail', 'required', 'integer'];

            if ($item['response_type'] === 'likert') {
                $answerRules[] = 'between:1,5';
            }

            $rules['answers.'.$item['code']] = $answerRules;
        }

        return $rules;
    }

    /**
     * @return array<string, int>
     */
    public function validatedAnswers(): array
    {
        return $this->validated('answers');
    }
}
