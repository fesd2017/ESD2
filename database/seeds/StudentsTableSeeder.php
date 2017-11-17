<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 20) as $number) {
            Student::create([
                'student_id' => $number,
                'name' => 'student' . $number,
                'account' => 'account' . $number,
                'password' => 'password' . $number,
                'phone' => 'phone' . $number,
                'email' => 'email' . $number,
                'sex' => '0',
                'class' => 'class' . $number,
                'address' => 'address' . $number,
            ]);
        }
    }
}
