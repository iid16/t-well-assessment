<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('assessment_results', function (Blueprint $table) {
            $table->foreignId('assessment_session_id')->nullable()->after('id');
            $table->foreign('assessment_session_id')
                ->references('id')
                ->on('assessment_sessions')
                ->restrictOnDelete();
            $table->unique('assessment_session_id');

            $table->unsignedInteger('screen_time')->nullable()->change();
            $table->decimal('x_score', 5, 2)->nullable()->change();
            $table->decimal('y2_score', 5, 2)->nullable()->change();
            $table->string('x_category')->nullable()->change();
            $table->string('y2_category')->nullable()->change();
            $table->text('interpretation')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('assessment_results', function (Blueprint $table) {
            $table->dropForeign(['assessment_session_id']);
            $table->dropUnique(['assessment_session_id']);
            $table->dropColumn('assessment_session_id');

            $table->unsignedInteger('screen_time')->nullable(false)->change();
            $table->decimal('x_score', 5, 2)->nullable(false)->change();
            $table->decimal('y2_score', 5, 2)->nullable(false)->change();
            $table->string('x_category')->nullable(false)->change();
            $table->string('y2_category')->nullable(false)->change();
            $table->text('interpretation')->nullable(false)->change();
        });
    }
};
