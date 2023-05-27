<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('variant', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('task_1')->unsigned();
            $table->bigInteger('task_2')->unsigned();
            $table->bigInteger('task_3')->unsigned();
            $table->bigInteger('task_4')->unsigned();
            $table->bigInteger('task_5')->unsigned();
            $table->bigInteger('task_6')->unsigned();
            $table->bigInteger('task_7')->unsigned();
            $table->bigInteger('task_8')->unsigned();
            $table->bigInteger('task_9')->unsigned();
            $table->bigInteger('task_10')->unsigned();
            $table->bigInteger('task_11')->unsigned();
            $table->bigInteger('task_12')->unsigned();
            $table->bigInteger('task_13')->unsigned();
            $table->bigInteger('task_14')->unsigned();
            $table->bigInteger('task_15')->unsigned();
            $table->bigInteger('task_16')->unsigned();
            $table->bigInteger('task_17')->unsigned();


            $table->foreign('task_1')
                ->references('id')->on('task');
            $table->foreign('task_2')
                ->references('id')->on('task');
            $table->foreign('task_3')
                ->references('id')->on('task');
            $table->foreign('task_4')
                ->references('id')->on('task');
            $table->foreign('task_5')
                ->references('id')->on('task');
            $table->foreign('task_6')
                ->references('id')->on('task');
            $table->foreign('task_7')
                ->references('id')->on('task');
            $table->foreign('task_8')
                ->references('id')->on('task');
            $table->foreign('task_9')
                ->references('id')->on('task');
            $table->foreign('task_10')
                ->references('id')->on('task');
            $table->foreign('task_11')
                ->references('id')->on('task');
            $table->foreign('task_12')
                ->references('id')->on('task');
            $table->foreign('task_13')
                ->references('id')->on('task');
            $table->foreign('task_14')
                ->references('id')->on('task');
            $table->foreign('task_15')
                ->references('id')->on('task');
            $table->foreign('task_16')
                ->references('id')->on('task');
            $table->foreign('task_17')
                ->references('id')->on('task');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_variant');
    }
};
