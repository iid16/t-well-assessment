<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('assessment_results', function (Blueprint $table) {
        $table->id();

        $table->string('assessment_code', 20)->unique();

        $table->unsignedInteger('screen_time');

        $table->decimal('x_score', 5, 2);
        $table->decimal('y2_score', 5, 2);

        $table->string('x_category');
        $table->string('y2_category');

        $table->text('interpretation');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_results');
    }
};
