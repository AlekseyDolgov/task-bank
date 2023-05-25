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
            $table->bigInteger('block_1')->unsigned();
            $table->bigInteger('block_2')->unsigned();
            $table->bigInteger('block_3')->unsigned();
            $table->bigInteger('block_4')->unsigned();
            $table->bigInteger('block_5')->unsigned();
            $table->bigInteger('block_6')->unsigned();
            $table->bigInteger('block_7')->unsigned();
            $table->bigInteger('block_8')->unsigned();
            $table->bigInteger('block_9')->unsigned();
            $table->bigInteger('block_10')->unsigned();
            $table->bigInteger('block_11')->unsigned();
            $table->bigInteger('block_12')->unsigned();
            $table->bigInteger('block_13')->unsigned();
            $table->bigInteger('block_14')->unsigned();
            $table->bigInteger('block_15')->unsigned();
            $table->bigInteger('block_16')->unsigned();
            $table->bigInteger('block_17')->unsigned();


            $table->foreign('block_1')
                ->references('id')->on('task');
            $table->foreign('block_2')
                ->references('id')->on('task');
            $table->foreign('block_3')
                ->references('id')->on('task');
            $table->foreign('block_4')
                ->references('id')->on('task');
            $table->foreign('block_5')
                ->references('id')->on('task');
            $table->foreign('block_6')
                ->references('id')->on('task');
            $table->foreign('block_7')
                ->references('id')->on('task');
            $table->foreign('block_8')
                ->references('id')->on('task');
            $table->foreign('block_9')
                ->references('id')->on('task');
            $table->foreign('block_10')
                ->references('id')->on('task');
            $table->foreign('block_11')
                ->references('id')->on('task');
            $table->foreign('block_12')
                ->references('id')->on('task');
            $table->foreign('block_13')
                ->references('id')->on('task');
            $table->foreign('block_14')
                ->references('id')->on('task');
            $table->foreign('block_15')
                ->references('id')->on('task');
            $table->foreign('block_16')
                ->references('id')->on('task');
            $table->foreign('block_17')
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
