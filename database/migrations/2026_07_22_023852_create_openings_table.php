<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('openings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')
                  ->constrained('companies')
                  ->cascadeOnDelete();

            $table->string('opening_post_name');
            $table->integer('post_qty');
            $table->string('qualification');
            $table->string('location');
            $table->decimal('package', 10, 2);
            $table->date('date_to_apply');
            $table->date('date_of_interview');
            $table->boolean('enable')->default(true);
            $table->text('job_description');
            $table->text('specification');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('openings');
    }
};