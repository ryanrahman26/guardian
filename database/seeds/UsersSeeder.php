<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        // Membuat role staff/pengepul
        $staffRole = new Role();
        $staffRole->name = "staff";
        $staffRole->display_name = "Pengepul";
        $staffRole->save();

        // Membuat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        // Membuat sample admin
        $admin = new User();
        $admin->card_id = '123456789111';
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->avatar = "admin_avatar.png";
        $admin->save();
        $admin->attachRole($adminRole);

        // Membuat sample staff/pengepul
        $staff = new User();
        $staff->card_id = '123456789112';
        $staff->name = 'Pengepul';
        $staff->email = 'staff@gmail.com';
        $staff->password = bcrypt('rahasia');
        $staff->avatar = "staff_avatar.png";
        $staff->save();
        $staff->attachRole($staffRole);

        // Membuat sample member
        $member = new User();
        $member->card_id = "123456789110";
        $member->name = "Member";
        $member->email = "member@gmail.com";
        $member->password = bcrypt('rahasia');
        $member->avatar = "member_avatar.png";
        $member->save();
        $member->attachRole($memberRole);
    }
}
