<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assessment_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assessment_session_id')
                ->constrained()
                ->restrictOnDelete();
            $table->string('item_code', 10);
            $table->unsignedInteger('answer_value');
            $table->timestamps();

            $table->unique(['assessment_session_id', 'item_code']);
            $table->index('item_code');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assessment_answers');
    }
};
