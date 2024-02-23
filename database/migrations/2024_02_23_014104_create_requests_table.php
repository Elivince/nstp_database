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
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('request_id');
            $table->date('date');
            $table->string('name');
            $table->string('component');
            $table->string('campus');
            $table->string('course');
            $table->year('graduation_year');
            $table->string('serial_no')->nullable();
            $table->string('remarks')->nullable();
            $table->string('issued_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
