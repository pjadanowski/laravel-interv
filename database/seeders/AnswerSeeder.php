<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::factory(1000)
            ->state(new Sequence(
                fn (Sequence $sequence) => [
                    'user_id' => User::all()->random(),
                    'question_id' => Question::all()->random(),
                ],
            ))
            ->create();
    }
}
