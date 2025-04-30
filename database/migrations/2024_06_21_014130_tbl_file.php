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
        schema::create("tbl_files", function (Blueprint $table) {
            $table->id('file_id');
            $table->foreignId('user_id')->nullable()->index();
            $table->timestamp('start_date')->useCurrent();
            $table->timestamp('end_date')->nullable();
            $table->decimal('budget',10,2)->default(0);
            $table->decimal('amount',10,2)->default(0);
            $table->decimal('excess',10,2)->default(0);
            $table->string('title')->unique();
            $table->enum('status',['pending','done','archive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("tbl_file");
    }
};
