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
        Schema::create("tbl_role", function (Blueprint $table) {
            $table->id('role_id');
            $table->string('role_name');
            $table->string('description');
        });

        DB::table('tbl_role')->insert([
            ['role_id' => 1024, 'role_name' => 'ACCOUNTANT', 'description' => 'You are responsible for all the changes to the users account'],
            ['role_id' => 124,'role_name' => 'PAYEE', 'description' => 'Auditors are responsible for taking care of the receipts and other expenses information'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("tbl_role");
    }
};
