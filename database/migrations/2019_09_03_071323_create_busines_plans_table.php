<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinesPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busines_plans', function (Blueprint $table) {
            $table->bigIncrements('busines_plans_id');
            $table->string('name',100);
            $table->integer('validity')->default(365);    //  in days
            $table->enum('status', ['active', 'inactive'])->default('active');    
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('busines_plans');
    }
}
