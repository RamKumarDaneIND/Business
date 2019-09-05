<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanAssociatedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_associateds', function (Blueprint $table) {
            $table->bigIncrements('plan_associateds_id');
            $table->bigInteger('plan_id'); 
            $table->bigInteger('business_id');
            $table->timestamp('activation_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_associateds');
    }
}
