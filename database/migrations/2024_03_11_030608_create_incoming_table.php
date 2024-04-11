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
        Schema::create('incoming', function (Blueprint $table) {
            $table->bigIncrements('incoming_no');
            $table->date('date');
            $table->string('received_by');
            $table->string('from_office');
            $table->string('subject');
            $table->string('remarks');
            $table->string('action')->nullable();
            $table->string('action_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incoming');

    }
};
