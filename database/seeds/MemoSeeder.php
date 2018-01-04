<?php

use App\Memo;
use Illuminate\Database\Seeder;

class MemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Memo::truncate();
        for ($i = 1; $i < 21; $i++){
            $memo = new Memo();
            $memo->title = $faker->name;
            $memo->content = $faker->realText(200);
            $memo->save();
        }
    }
}
