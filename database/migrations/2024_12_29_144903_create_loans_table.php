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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('borrower_id');
            $table->unsignedBigInteger('lender_id')->nullable();
            $table->decimal('amount', 10, 2);
            $table->decimal('interest_rate', 5, 2);
            $table->enum('status', ['pending', 'funded', 'repaid']);
            $table->timestamps();
            
            $table->foreign('borrower_id')->references('id')->on('users');
            $table->foreign('lender_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
