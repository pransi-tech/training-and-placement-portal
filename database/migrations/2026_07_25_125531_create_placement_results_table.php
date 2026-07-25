<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('placement_results', function (Blueprint $table) {

            $table->id();

            $table->foreignId('student_id')
                  ->constrained('student_registrations')
                  ->cascadeOnDelete();

            $table->foreignId('company_id')
                  ->constrained('companies')
                  ->cascadeOnDelete();

            $table->foreignId('opening_id')
                  ->constrained('openings')
                  ->cascadeOnDelete();

            $table->decimal('package', 10, 2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('placement_results');
    }
};