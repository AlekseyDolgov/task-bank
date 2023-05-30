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
        Schema::create('otvet_formuls', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('otvet_id')->unsigned();
            $table->foreign('otvet_id')
                ->references('id')->on('otvet');
            $table->bigInteger('formul_id')->unsigned();
            $table->foreign('formul_id')
                ->references('id')->on('formuls')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otvet_formuls');
    }
};
