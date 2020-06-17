<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->char('menu_prefix', 1)->nullable();
            $table->integer('menu_number');
            $table->char('menu_suffix', 1)->nullable();
            $table->string('item_name');
            $table->float('price');
            $table->text('description')->nullable();
            $table->integer('spiciness_scale')->default(0);
            $table->timestamps();
            $table->unique(array('menu_prefix', 'menu_number', 'menu_suffix'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
