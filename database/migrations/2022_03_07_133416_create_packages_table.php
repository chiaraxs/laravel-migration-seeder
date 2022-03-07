<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->float('total_price', 8, 2);
            $table->string('departure_airport', 100);
            $table->string('arrival_airport', 100);
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->string('hotel', 100);
            $table->string('restaurant', 100);
            $table->text('tours');
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
        Schema::dropIfExists('packages');
    }
}
