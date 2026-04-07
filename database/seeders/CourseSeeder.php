<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Chapter;
use App\Models\SubChapter;
use App\Models\Content;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Course
        $course = Course::create([
            'title' => 'English Irregular Verbs',
            'description' => 'Learn common irregular verbs in English',
            'level' => 'Beginner',
            'duration' => 120
        ]);

        //Chapter
        $chapter = Chapter::create([
            'course_id' => $course->id,
            'title' => 'Introduction to Irregular verbs',
            'description' => 'Understanding what irregular verbs are'
        ]);

        //Subchapters
        $definition = SubChapter::create([
            'chapter_id' => $chapter->id,
            'title' => 'Definition of Irregular verbs'
        ]);
        $examples = SubChapter::create([
            'chapter_id' => $chapter->id,
            'title'=>'Common Irregular verbs examples'
        ]);

        //Contents
        Content::create([
            'sub_chapters_id' => $definition->id,
            'title' => 'What are irregular verbs?',
            'body' => 'Irregular verbs do not follow the regular pattern of adding',
            'source' => 'manual'
        ]);
        Content::create([
            'sub_chapters_id' => $examples->id,
            'title' => 'Examples of irregular verbs',
            'body' => 'Go -> went -> Gone',
            'source' => 'manual'
        ]);
    }
}
