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
        Schema::create('announcement_skill', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('skill_id');
            $table->unsignedBigInteger('announcement_id');


            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('announcement_id')->references('id')->on('announcements')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcement_skill');
    }
};
