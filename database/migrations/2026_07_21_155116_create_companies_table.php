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
    Schema::create('companies', function (Blueprint $table) {
        $table->id();
        $table->string('company_id')->unique();
        $table->string('company_name');
        $table->string('location');
        $table->string('Hr_name');
        $table->string('Hr_contact');
        $table->string('Hr_email')->unique();
        $table->string('type');
        $table->string('area');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
