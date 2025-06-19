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
        Schema::table('students', function (Blueprint $table) {
            $table->string('first_name')->after('id')->nullable()->comment('Student first name');
            $table->string('last_name')->after('first_name')->nullable()->comment('Student last name');
            $table->string('program')->after('last_name')->nullable()->comment('Student program');
            $table->string('enrollment_year', 4)->after('program')->nullable()->comment('Year the student enrolled');
            $table->dateTime('birthday')->after('enrollment_year')->nullable()->comment('Student birthday');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn([
                'first_name',
                'last_name',
                'program',
                'enrollment_year',
                'birthday',
            ]);
        });
    }
};
