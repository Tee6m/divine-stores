<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('displays', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name')->default('Divine-Stores');
            $table->string('shop_logo')->nullable();
            $table->string('slider_bg')->default('./images/bg1.jpg');
            $table->string('slider_heading')->nullable() ->default('New Arrivals');
            $table->string('slider_text')-> nullable()->default('Groceries and More');
            $table->string('slider_pic1')->default('./images/h2.jpg');
            $table->string('slider_pic2')->default('./images/h3.jpg');
            $table->string('slider_pic3')->default('./images/bg1.jpg');
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
        Schema::dropIfExists('displays');
    }
}
