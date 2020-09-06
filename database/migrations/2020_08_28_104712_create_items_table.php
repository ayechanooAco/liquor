<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
             $table->string('codeno');
            $table->string('name');
            $table->longText('photo');
            $table->string('price');
            $table->string('discount');
            $table->longText('description')->nullable();
            $table->foreignId('subcategory_id')->refrences('id')->on('subcatefories')->onDelete('cascade');


            $table->foreignId('brand_id')->refrences('id')->on('brands')->onDelete('cascade');


             $table->foreignId('volume_id')->refrences('id')->on('volumes')->onDelete('cascade');

              $table->foreignId('region_id')->refrences('id')->on('regions')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
