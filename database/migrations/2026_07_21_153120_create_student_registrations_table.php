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
    Schema::create('student_registrations', function (Blueprint $table) {
        $table->id();
        $table->string('enrollment_no')->unique();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('mobile_no');
        $table->text('address');
        $table->string('city');
        $table->date('dob');
        $table->string('semester');
        $table->string('branch');
        $table->string('area_of_expertise');
        $table->decimal('ssc_percentage', 5, 2);
        $table->decimal('hsc_percentage', 5, 2)->nullable();
        $table->boolean('consent');
        $table->decimal('diploma_cpi', 4, 2);
        $table->integer('backlog');
        $table->string('profile_pic')->nullable();
        $table->string('linkedin_id')->nullable();
        $table->timestamps();
    });
}
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_registrations');
    }
};
