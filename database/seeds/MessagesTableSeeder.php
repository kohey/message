<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 1; $i <= 100; ++$i) {
            DB::table('messages')->insert([
                'title' => 'test title '.$i,
                'content' => 'test content '.$i,
            ]);
        }
    }
}
