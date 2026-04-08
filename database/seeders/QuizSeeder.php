<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\QuizResult;
use App\Models\SubChapter;
use App\Models\User;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subChapter = SubChapter::first();
        $user = User::where('role', 'learner')->inRandomOrder()->first();
        //ensure only learner seeds are connected to quiz.
        if (!$user){
            throw new \Exception('No learner found. Seed learners.');

        }

        // 1. Create Quiz
        $quiz = Quiz::create([
            'sub_chapters_id' => $subChapter->id,
            'title' => 'Irregular Verbs Quiz'
        ]);

        // 2. Question 1
        $q1 = Question::create([
            'quiz_id' => $quiz->id,
            'question_text' => 'What is the past tense of "go"?'
        ]);

        Answer::insert([
            ['question_id' => $q1->id, 'answer_text' => 'goed', 'is_correct' => false],
            ['question_id' => $q1->id, 'answer_text' => 'went', 'is_correct' => true],
            ['question_id' => $q1->id, 'answer_text' => 'gone', 'is_correct' => false],
        ]);

        // 3. Question 2
        $q2 = Question::create([
            'quiz_id' => $quiz->id,
            'question_text' => 'What is the past tense of "eat"?'
        ]);

        Answer::insert([
            ['question_id' => $q2->id, 'answer_text' => 'eated', 'is_correct' => false],
            ['question_id' => $q2->id, 'answer_text' => 'ate', 'is_correct' => true],
            ['question_id' => $q2->id, 'answer_text' => 'eaten', 'is_correct' => false],
        ]);

        // 4. Fake result (example)
        QuizResult::create([
            'user_id' => $user->id,
            'quiz_id' => $quiz->id,
            'score' => 2
        ]);
    }
}
