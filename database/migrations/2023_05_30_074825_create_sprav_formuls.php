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
        Schema::create('sprav_formuls', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sparv_id')->unsigned();
            $table->foreign('sparv_id')
                ->references('id')->on('sprav');
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
        Schema::dropIfExists('sprav_formuls');
    }
};
