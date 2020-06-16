<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemHasAllergy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_has_allergy', function (Blueprint $table) {
            $table->string('allergy_name');
            $table->bigInteger('item_id')->unsigned();

            $table->foreign('allergy_name')->references('name')->on('allergies');
            $table->foreign('item_id')->references('id')->on('menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_has_allergy');
    }
}
