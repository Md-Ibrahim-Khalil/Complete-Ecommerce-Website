<?php

use Illuminate\Database\Seeder;


class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            [
                'id' => 1, 'name' => 'admin', 'type' => 'admin', 'mobile' => '01515622352', 'email' => 'admin@gmail.com', 'password' => '$2y$10$YNhEVSFcfySbbw9XAyYY0.VlXqkz254MwXSOWRgVg2NC.S.h9e09a', 'image' => '', 'status' => 1
            ],
            [
                'id' => 2, 'name' => 'Amit', 'type' => 'subadmin', 'mobile' => '01515622352', 'email' => 'amit@gmail.com', 'password' => '$2y$10$YNhEVSFcfySbbw9XAyYY0.VlXqkz254MwXSOWRgVg2NC.S.h9e09a', 'image' => '', 'status' => 1
            ],
            [
                'id' => 3, 'name' => 'Steve', 'type' => 'subadmin', 'mobile' => '01515622352', 'email' => 'steve@gmail.com', 'password' => '$2y$10$YNhEVSFcfySbbw9XAyYY0.VlXqkz254MwXSOWRgVg2NC.S.h9e09a', 'image' => '', 'status' => 1
            ],
            [
                'id' => 4, 'name' => 'John', 'type' => 'admin', 'mobile' => '01515622352', 'email' => 'john@gmail.com', 'password' => '$2y$10$YNhEVSFcfySbbw9XAyYY0.VlXqkz254MwXSOWRgVg2NC.S.h9e09a', 'image' => '', 'status' => 1
            ],
        ];
        DB::table('admins')->insert($adminRecords);
        // foreach ($adminRecords as $key => $record) {
        //     \App\Admin::create($record);
        // }
    }
}