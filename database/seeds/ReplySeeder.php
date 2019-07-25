<?php

use Illuminate\Database\Seeder;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [];
        for ($i = 1; $i <= 10; $i++) {
        for ($n = 1; $n <= 10; $n++) {
            $records[] = [
                'thread_id' => $i,
                'reply_no' => $n,
                'user_id' => Str::random(7),
                'handle_name' => Str::random(5) . '的名無しさん',
                'host_name' => Str::random(10).'.com.test',
                'ip' => rand(1,254) . '.'.rand(1,254).'.'.rand(1,254).'.'.rand(1,254) ,
                'message' => Str::random() . 'と思います謝謝',
                'created_at' => date('Y-m-d H:i:s')
            ];
        }}
        DB::table('reply')->insert($records);
    }
}
