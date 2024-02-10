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
        Schema::create('napi_arak', function (Blueprint $table) {
            $table->id('ar_id');
            $table->string('megnevezes');
            $table->integer('ar');
            $table->date('mikortol');
            $table->foreignId('tipus')->references('id')->on('tipus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('napi_arak');
    }
};
