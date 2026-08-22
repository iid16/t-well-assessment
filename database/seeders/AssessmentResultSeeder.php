<?php

namespace Database\Seeders;

use App\Models\AssessmentResult;
use Illuminate\Database\Seeder;

class AssessmentResultSeeder extends Seeder
{
    public function run(): void
    {
        AssessmentResult::create([
            'assessment_code' => 'TW-TEST-001',
            'screen_time' => 95,
            'x_score' => 78.50,
            'y2_score' => 76.00,
            'x_category' => 'High',
            'y2_category' => 'Good',
            'interpretation' => 'This is a test assessment result. The data shown here is dummy data used only to test the T-Well Assessment system.',
        ]);
    }
}