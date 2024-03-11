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
        Schema::create('outgoing', function (Blueprint $table) {
            $table->bigIncrements('outgoing_no');
            $table->date('date');
            $table->string('to_office');
            $table->string('for');
            $table->string('subject');
            $table->string('remarks')->nullable();
            $table->string('action')->nullable();
            $table->string('action_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outgoing');
    }
};
