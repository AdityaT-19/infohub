<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Club;
use App\Models\ClubEvent;
use App\Models\DeptEvent;
use App\Models\Resource;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use App\Models\WifiForm;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // User::factory(1)->create();

        Student::factory(2)->create();
        Teacher::factory(2)->create();
        Club::factory(2)->create();
        Admin::factory(2)->create();
        Announcement::factory(3)->create();
        ClubEvent::factory(3)->create();
        DeptEvent::factory(3)->create();
        Resource::factory(5)->create();
        WifiForm::factory(3)->create();
    }
}
