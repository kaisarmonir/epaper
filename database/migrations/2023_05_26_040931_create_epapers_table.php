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
        Schema::create('epapers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('E-paper');
            $table->string('meta')->default('Read epaper easily');
            $table->string('catagory')->default('Grneral');
            $table->string('image')->default('img.jpg');
            $table->string('thumbnail')->default('img.jpg');
            $table->string('pdf')->nullable();
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
        Schema::dropIfExists('epapers');
    }
};
