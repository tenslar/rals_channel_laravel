<?php

use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
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
                'category_id' => rand(1, 10),
                'title' => Str::random(10) . 'についての議題',
                'handle_name_template' => Str::random(10) . '的名無しさん',
                'created_at' => date('Y-m-d H:i:s')
            ];
        }
        DB::table('thread')->insert($records);
    }
}
