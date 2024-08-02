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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->boolean('alcoholic');
            $table->string('glass');
            $table->text('instructions');
            $table->string('image');
            $table->string('ingredient1')->nullable();
            $table->string('ingredient2')->nullable();
            $table->string('ingredient3')->nullable();
            $table->string('ingredient4')->nullable();
            $table->string('ingredient5')->nullable();
            $table->string('ingredient6')->nullable();
            $table->string('ingredient7')->nullable();
            $table->string('ingredient8')->nullable();
            $table->string('ingredient9')->nullable();
            $table->string('ingredient10')->nullable();
            $table->string('ingredient11')->nullable();
            $table->string('ingredient12')->nullable();
            $table->string('ingredient13')->nullable();
            $table->string('ingredient14')->nullable();
            $table->string('ingredient15')->nullable();
            $table->string('measure1')->nullable();
            $table->string('measure2')->nullable();
            $table->string('measure3')->nullable();
            $table->string('measure4')->nullable();
            $table->string('measure5')->nullable();
            $table->string('measure6')->nullable();
            $table->string('measure7')->nullable();
            $table->string('measure8')->nullable();
            $table->string('measure9')->nullable();
            $table->string('measure10')->nullable();
            $table->string('measure11')->nullable();
            $table->string('measure12')->nullable();
            $table->string('measure13')->nullable();
            $table->string('measure14')->nullable();
            $table->string('measure15')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};
