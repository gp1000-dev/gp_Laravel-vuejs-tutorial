<?php

namespace App\Http\Controllers;

use App\Models\Task;//Modelsディレクトリを指定
use Illuminate\Http\Request;

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

    /**
     *  タスク登録
     *  タスクを新規作成してDBに書き込む処理のコントローラー
     *  POST /tasks/create
     *  @param Request $request
     *  @return mixed
     */
    public function store(Request $request)
    {
        // タスクを新規作成する
        // モデルクラスから createメソッド を呼ぶことで、以下の一連の処理を行う
        // [return Task::create()] インスタンスの生成 -> データの保存 -> 値を返す
        // [$request->all()] リクエストからのクエリを実行して、レコードの全ての結果を取得します
        return Task::create($request->all());
    }

    /**
     *  タスク更新
     *  タスクの更新に応じてDBを更新する処理のコントローラー
     *  POST /tasks/{task}/edit
     *  @param Request $request
     *  @param Task $task
     *  @return \App\Models\Task
     */
    public function update(Request $request, Task $task)
    {
        // タスクを更新する
        // [update] データを更新する
        // [$request->all()] リクエストからのクエリを実行して、レコードの全ての結果を取得します
        $task->update($request->all());
        // 値を返す
        return $task;
    }
}
