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
                'student_name' => 'Arjun Kapoor',
                'class_teacher_id' => 5,
                'class' => '6B',
                'admission_date' => Carbon::parse('2019-04-30'),
                'yearly_fees' => 42000,
            ],
            [
                'student_name' => 'Rahul Sharma',
                'class_teacher_id' => 3,
                'class' => '5A',
                'admission_date' => Carbon::parse('2020-06-15'),
                'yearly_fees' => 38000,
            ],
            [
                'student_name' => 'Priya Singh',
                'class_teacher_id' => 4,
                'class' => '7C',
                'admission_date' => Carbon::parse('2018-03-20'),
                'yearly_fees' => 45000,
            ],
            [
                'student_name' => 'Amit Verma',
                'class_teacher_id' => 2,
                'class' => '8A',
                'admission_date' => Carbon::parse('2017-07-10'),
                'yearly_fees' => 48000,
            ],
            [
                'student_name' => 'Neha Gupta',
                'class_teacher_id' => 6,
                'class' => '9B',
                'admission_date' => Carbon::parse('2021-05-05'),
                'yearly_fees' => 50000,
            ],
            [
                'student_name' => 'Suresh Kumar',
                'class_teacher_id' => 1,
                'class' => '10A',
                'admission_date' => Carbon::parse('2016-02-14'),
                'yearly_fees' => 55000,
            ],
            [
                'student_name' => 'Anjali Mehta',
                'class_teacher_id' => 7,
                'class' => '6A',
                'admission_date' => Carbon::parse('2019-09-25'),
                'yearly_fees' => 41000,
            ],
            [
                'student_name' => 'Vikram Patel',
                'class_teacher_id' => 8,
                'class' => '7B',
                'admission_date' => Carbon::parse('2020-11-18'),
                'yearly_fees' => 43000,
            ],
            [
                'student_name' => 'Meera Das',
                'class_teacher_id' => 9,
                'class' => '8C',
                'admission_date' => Carbon::parse('2018-01-30'),
                'yearly_fees' => 47000,
            ],
            [
                'student_name' => 'Rohit Malhotra',
                'class_teacher_id' => 10,
                'class' => '10B',
                'admission_date' => Carbon::parse('2015-12-10'),
                'yearly_fees' => 52000,
            ],
            [
                'student_name' => 'Simran Kaur',
                'class_teacher_id' => 11,
                'class' => '6C',
                'admission_date' => Carbon::parse('2019-07-14'),
                'yearly_fees' => 41500,
            ],
            [
                'student_name' => 'Karan Johar',
                'class_teacher_id' => 12,
                'class' => '7A',
                'admission_date' => Carbon::parse('2020-09-08'),
                'yearly_fees' => 43500,
            ],
            [
                'student_name' => 'Deepika Rao',
                'class_teacher_id' => 13,
                'class' => '8B',
                'admission_date' => Carbon::parse('2017-06-22'),
                'yearly_fees' => 46000,
            ],
            [
                'student_name' => 'Manish Tiwari',
                'class_teacher_id' => 14,
                'class' => '9A',
                'admission_date' => Carbon::parse('2018-05-17'),
                'yearly_fees' => 49000,
            ],
            [
                'student_name' => 'Alia Bhatt',
                'class_teacher_id' => 15,
                'class' => '10C',
                'admission_date' => Carbon::parse('2016-08-12'),
                'yearly_fees' => 53000,
            ],
            [
                'student_name' => 'Harsh Vardhan',
                'class_teacher_id' => 16,
                'class' => '6A',
                'admission_date' => Carbon::parse('2019-12-20'),
                'yearly_fees' => 40000,
            ],
            [
                'student_name' => 'Ritika Sinha',
                'class_teacher_id' => 17,
                'class' => '7B',
                'admission_date' => Carbon::parse('2021-01-15'),
                'yearly_fees' => 44500,
            ],
            [
                'student_name' => 'Pankaj Jindal',
                'class_teacher_id' => 18,
                'class' => '8C',
                'admission_date' => Carbon::parse('2017-04-05'),
                'yearly_fees' => 47500,
            ],
            [
                'student_name' => 'Shraddha Kapoor',
                'class_teacher_id' => 19,
                'class' => '9B',
                'admission_date' => Carbon::parse('2016-10-30'),
                'yearly_fees' => 51000,
            ],
            [
                'student_name' => 'Varun Dhawan',
                'class_teacher_id' => 20,
                'class' => '10A',
                'admission_date' => Carbon::parse('2015-11-28'),
                'yearly_fees' => 56000,
            ],
        ];
        students::insert($students);
    }
}
