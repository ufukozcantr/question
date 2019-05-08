<?php

namespace ufukozcantr\Question\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use ufukozcantr\Question\Entities\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('123qwe'),
            ]);
        }

        for($i = 0; $i < 100; $i++) {
            $options = [
                $faker->bothify('Cevap ##??'),
                $faker->bothify('Cevap ##??'),
                $faker->bothify('Cevap ##??'),
                $faker->bothify('Cevap ##??')
            ];

            $data = [
                'options' => $options,
                'answer' => $options[array_rand($options, 1)]
            ];

            Question::create([
                'content' => $faker->text,
                'data' => json_encode($data),
                'created_by' => 1
            ]);
        }
    }
}
