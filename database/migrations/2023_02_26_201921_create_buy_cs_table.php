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
        Schema::create('buy_cs', function (Blueprint $table) {
            $table->id();

            $table->string('p_id');
            $table->string('u_n');
            $table->string('amount');

            $table->string('money');
            $table->string('p_n');
            $table->string('price');
            $table->string('des');
           
            $table->string('image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_cs');
    }
};
