<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string("crime_type");
            $table->string("victim_name");
            $table->string("victim_adresse");
            $table->string("discription")->nullable();
            $table->string("victim_image")->nullable();
            $table->date("crime_date");
            $table->foreignId('user_id')->constrained();
            $table->string("reports_status");
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
        Schema::dropIfExists('reports');
    }
}
