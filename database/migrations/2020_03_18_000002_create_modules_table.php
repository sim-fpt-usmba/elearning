<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('ref')->nullable();
            $table->string('description')->nullable();
            $table->integer('filier_id')->unsigned()->nullable();
            $table->foreign('filier_id')
                    ->references('id')
                    ->on('filiers')
                    ->onDelete('cascade');
            $table->integer('semester_id')->unsigned()->nullable();
            $table->foreign('semester_id')
                    ->references('id')
                    ->on('semesters')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('modules');
    }
}
