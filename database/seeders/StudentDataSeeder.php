<?php

namespace Database\Seeders;

use App\Models\students;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        students::truncate();

        $students = [
            [
                'student_name' => 'Rahul Sharma',
                'class_teacher_id' => 1,
                'class' => '10A',
                'admission_date' => Carbon::parse('2022-06-15'),
                'yearly_fees' => 50000,
            ],
            [
                'student_name' => 'Aditi Verma',
                'class_teacher_id' => 2,
                'class' => '9B',
                'admission_date' => Carbon::parse('2021-07-20'),
                'yearly_fees' => 48000,
            ],
            [
                'student_name' => 'Vikram Singh',
                'class_teacher_id' => 3,
                'class' => '8C',
                'admission_date' => Carbon::parse('2023-08-10'),
                'yearly_fees' => 46000,
            ],
            [
                'student_name' => 'Sanya Mehta',
                'class_teacher_id' => 4,
                'class' => '7A',
                'admission_date' => Carbon::parse('2020-05-25'),
                'yearly_fees' => 45000,
            ],
            [
                'student_name' => 'Arjun Kapoor',
                'class_teacher_id' => 5,
                'class' => '6B',
                'admission_date' => Carbon::parse('2019-04-30'),
                'yearly_fees' => 42000,
            ],
        ];
        students::insert($students);
    }
}
