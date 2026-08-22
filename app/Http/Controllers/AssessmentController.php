<?php

namespace App\Http\Controllers;

use App\Models\AssessmentResult;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function show(Request $request)
    {
        $request->validate([
            'assessment_code' => [
                'required',
                'string',
                'max:20',
            ],
        ], [
            'assessment_code.required' => 'Please enter your assessment code.',
            'assessment_code.max' => 'The assessment code is too long.',
        ]);

        $code = strtoupper(trim($request->assessment_code));

        $assessment = AssessmentResult::where(
            'assessment_code',
            $code
        )->first();

        if (!$assessment) {
            return back()
                ->withInput()
                ->withErrors([
                    'assessment_code' => 'Assessment code not found. Please check your code and try again.',
                ]);
        }

        return view('result', [
            'assessment' => $assessment,
        ]);
    }
}