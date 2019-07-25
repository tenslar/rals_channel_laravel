<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [];
        for ($i = 0; $i < 10; $i++) {
            $records[] = [
                'user_id' => Str::random(),
                'email' => Str::random(10) . '@ralschannel.com',
                'password' => Str::random(10)
            ];
        }
        DB::table('admin')->insert($records);
    }
}
