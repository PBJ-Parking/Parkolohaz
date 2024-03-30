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
        Schema::create('parkolohely', function (Blueprint $table) {
            $table->id('hely_id');
            
            $table->foreignId('hely_tipusa')->references('id')->on('tipus');
            $table->char('statusz',1)->default('s');
            $table->smallInteger('emelet');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parkolohely');
    }
};
