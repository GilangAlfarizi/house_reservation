<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('location');
            $table->integer('land_area'); 
            $table->integer('building_area'); 
            $table->integer('floor_count'); 
            $table->integer('bedroom_count'); 
            $table->integer('bathroom_count'); 
            $table->decimal('price', 15, 2); 
            $table->integer('unit_count')->default(1); // Jumlah unit
            $table->string('status')->default('Available'); // Status (Available atau Sold Out)
            $table->string('image')->nullable(); // Path ke gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
};