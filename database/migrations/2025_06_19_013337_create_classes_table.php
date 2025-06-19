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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('subject', 50)->comment('Name of the subject');
            $table->string('course_code', 10)->comment('Course code (e.g., CS101)');
            $table->integer('credits')->comment('Number of credit units');
            $table->string('description', 255)->nullable()->comment('Description of the class');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
