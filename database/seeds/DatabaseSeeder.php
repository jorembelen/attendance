<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\AppUser;
use App\Models\Department;
use App\Models\Position;
use App\Models\CheckIn;
use App\Models\CheckOut;
use App\Models\Attendance;
use App\Models\Employee;
use App\Models\Setting;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jorem Belen',
            'email' => 'jorembelen@gmail.com',
            'role' => '1',
            'password' => bcrypt('admin@jorem'),
        ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'role' => '1',
            'password' => bcrypt('admin123'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
        ]);

        AppUser::create([
            'name' => 'Admin User',
            'user_name' => 'admin',
            'access_code' => '1234',
        ]);

        Employee::create([
            'name' => 'Peter Parker',
            'department' => 'HR',
            'position' => 'HR Manager',
            'checkIn_time' => '07:40:00',
            'checkOut_time' => '17:20:00',
        ]);

        Employee::create([
            'name' => 'Allen Iverson',
            'department' => 'Admin',
            'position' => 'Clerk',
            'checkIn_time' => '07:40:00',
            'checkOut_time' => '17:20:00',
        ]);

        Department::create([
            'dep_name' => 'HR',
        ]);

        Department::create([
            'dep_name' => 'Admin',
        ]);

        Position::create([
            'pos_name' => 'Clerk',
        ]);

        Position::create([
            'pos_name' => 'HR Manager',
        ]);

        CheckIn::create([
            'rule_name' => 'Late Rule1',
            'checkIn_time' => '7:40:00',
        ]);

        CheckOut::create([
            'rule_name' => 'Early Check Out Rule1',
            'checkOut_time' => '17:20:00'
            
        ]);

        // Setting::create([
        //     'key' => 'app_name',
        //     'value' => 'Attendance | App'
        // ]);


        // Setting::create([
        //     'key' => 'app_description',
        //     'value' => 'This is my Attendance App'
        // ]);
    }

    }

