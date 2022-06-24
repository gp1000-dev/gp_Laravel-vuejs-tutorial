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
}
