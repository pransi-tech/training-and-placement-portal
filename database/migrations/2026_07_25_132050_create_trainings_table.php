<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trainings', function (Blueprint $table) {

            $table->id();

            $table->foreignId('student_id')
                  ->constrained('student_registrations')
                  ->cascadeOnDelete();

            $table->string('academic_year');
            $table->string('training_title');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('training_organization');
            $table->string('expert_name');
            $table->string('contact_no', 15);
            $table->integer('duration');

            $table->enum('type', ['Online', 'Offline']);

            $table->enum('category', [
                'MOOC',
                'SBTP',
                'Impact',
                'MSIC',
                'Workshop',
                'Seminar'
            ]);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};