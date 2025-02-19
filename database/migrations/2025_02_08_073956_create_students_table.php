<?php

use Database\Seeders\StudentDataSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->unsignedBigInteger('class_teacher_id'); // Ensure it matches teachers.id
            // $table->foreign('class_teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->string('class');
            $table->date('admission_date');
            $table->decimal('yearly_fees', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });
       $students= new StudentDataSeeder();
       $students->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
