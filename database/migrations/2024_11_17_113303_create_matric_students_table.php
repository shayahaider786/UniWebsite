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
        Schema::create('matric_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('dob');
            $table->string('address');
            $table->string('class');
            $table->string('bform')->nullable();
            $table->string('gender');
            $table->string('religion');
            $table->string('city');
            $table->string('province');
            $table->string('contact');
            $table->string('guardian_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matric_students');
    }
};
