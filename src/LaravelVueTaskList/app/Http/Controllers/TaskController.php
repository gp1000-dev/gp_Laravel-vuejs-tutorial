<?php

namespace App\Http\Controllers;

use App\Models\Task;//Modelsディレクトリを指定

class TaskController extends Controller
{
    /**
     *  タスク一覧
     *  Taskモデルの全てのデータをDBから取得するコントローラー
     *  GET /tasks
     *  @return \Illuminate\Database\Eloquent\Collection
     *  @return \App\Models\Task
     */
    public function index()
    {
        // タスクを全て取得する
        // [all()] クエリを実行して、レコードの全ての結果を取得します
        return Task::all();
    }

    /**
     *  タスク詳細
     *  Taskモデルの該当ID（主キー）のデータをDBから取得するコントローラー
     *  GET /tasks/{task}
     *  @param Task $task
     *  @return \App\Models\Task
     */
    public function show(Task $task)
    {
        // 値を返す
        return $task;
    }
}
