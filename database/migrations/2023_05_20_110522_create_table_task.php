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
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->mediumText('description');
            $table->string('img');
            $table->bigInteger('otvet_id')->unsigned();
            $table->bigInteger('sprav_id')->unsigned();
            $table->bigInteger('block_id')->unsigned();
            $table->foreign('otvet_id')
                ->references('id')->on('otvet')->onDelete('cascade');
            $table->foreign('sprav_id')
                ->references('id')->on('sprav');
            $table->foreign('block_id')
                ->references('id')->on('blocks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
