<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEGronthosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_gronthos', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->string('subject');
            $table->string('creative_qus');
            $table->string('mcq');
            $table->string('model_test');
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
        Schema::dropIfExists('e_gronthos');
    }
}
