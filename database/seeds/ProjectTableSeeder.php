<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,5) as $index) {
            DB::table('project')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'message' => $faker->message,
            ]);
        }
    }
}
