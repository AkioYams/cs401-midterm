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
        Schema::table('teachers', function (Blueprint $table) {
            $table->string('first_name')->after('id')->nullable()->comment('Teacher first name');
            $table->string('last_name')->after('first_name')->nullable()->comment('Teacher last name');
            $table->string('email', 50)->after('last_name')->nullable()->comment('Teacher email');
            $table->string('department', 10)->after('email')->nullable()->comment('Teacher department');
            $table->dateTime('birthday')->after('department')->nullable()->comment('Teacher birthday');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn([
                'first_name',
                'last_name',
                'email',
                'department',
                'birthday',
            ]);
        });
    }
};
