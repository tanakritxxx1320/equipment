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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('eq_name');
            $table->string('eq_code');
            $table->boolean('eq_status')->default(0);
            $table->string('eq_sn');
            $table->string('date_receive');
            $table->string('eq_fund');
            $table->string('eq_price');
            $table->string('eq_amount');
            $table->string('eq_expire');
            $table->string('eq_place');
            $table->string('eq_ref');
            $table->string('eq_pic');
            $table->string('eq_note');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
