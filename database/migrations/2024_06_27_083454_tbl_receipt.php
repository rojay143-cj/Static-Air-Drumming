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
        Schema::create("tbl_receipt", function (Blueprint $table) {
            $table->id('receipt_id');
            $table->foreignId('category_id')->nullable()->index();
            $table->foreignId('file_id')->nullable()->index();
            $table->foreignId('img_id')->nullable()->index();
            $table->decimal('total',10,2);
            $table->string('or');
            $table->date('receipt_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("tbl_receipt");
    }
};
