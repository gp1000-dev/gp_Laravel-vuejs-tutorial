<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task; //Modelsの中にTaskモデルがある
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * tasksTable用テストデータを作成する
     *
     * @return void
     */
    public function run()
    {
        // ToDoListに10回分のテストデータを挿入する
        for ($i = 1; $i <= 10; $i++) {
            // tasksテーブルにレコードを追加する
            // [Task::create()] インスタンスの生成 -> データの保存 の一連の処理を行う
            Task::create([
                // titleに "title + 数字" を代入する
                'title' => 'title' . $i,
                // contentに "content + 数字" を代入する
                'content' => 'content' . $i,
                // person_in_chargeに "person_in_charge + 数字" を代入する
                'person_in_charge' => 'person_in_charge' . $i,
            ]);
        }
    }
}
