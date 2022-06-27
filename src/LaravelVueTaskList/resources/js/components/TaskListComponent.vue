<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Person In Charge</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
                <!-- タスクのリストレンダリング(反復表示) -->
                <!-- [v-for]配列やオブジェクトの中身を反復表示させるディレクティブ -->
                <!-- [v-bind:key] リストのアイテムを識別可能にする（keyにitem.nameを指定） -->
                <tr v-for="(task, index) in tasks" :key="index">
                    <th scope="row">{{ task.id }}</th>
                    <td>{{ task.title }}</td>
                    <td>{{ task.content }}</td>
                    <td>{{ task.person_in_charge }}</td>
                    <td>
                        <!-- クリック時に該当タスクIDの詳細ページに遷移する -->
                        <!-- [v-bind] タグ属性の値をVueインスタンス内で定義した変数で表現する -->
                        <!-- [to="{ name: 'ルート名', params: { taskId: 値 }}"] /taskId/task.id の形で名前付きルートを呼び出す -->
                        <router-link v-bind:to="{name: 'task.show', params: {taskId: task.id }}">
                            <button class="btn btn-primary">Show</button>
                        </router-link>
                    </td>
                    <td>
                        <!-- クリック時に該当タスクIDの編集ページに遷移する -->
                        <!-- [v-bind] タグ属性の値をVueインスタンス内で定義した変数で表現する -->
                        <!-- [to="{ name: 'ルート名', params: { taskId: 値 }}"] /taskId/task.id の形で名前付きルートを呼び出す -->
                        <router-link v-bind:to="{name: 'task.edit', params: {taskId: task.id }}">
                            <button class="btn btn-success">Edit</button>
                        </router-link>
                    </td>
                    <td>
                        <!-- クリックイベントでdeleteTaskメソッドを発火する -->
                        <!-- v-on:イベント名="メソッド名($event)" -->
                        <!-- [prevent] イベントにデフォルトで設定されている処理を実行しない -->
                        <button class="btn btn-danger" v-on:click="deleteTask(task.id)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    /* [エクスポート] 他のコンポーネントで使用できる様に外部参照を可能にする */
    // [export default] 処理をコンポーネント化して 指定要素で実施する
    export default {
        // アプリケーションで使用するデータを定義する
        data: function () {
            return {
                // 配列tasks[]を定義する
                tasks: []
            }
        },
        // メソッドオプションを定義する
        methods: {
            // タスクを全て取得するメソッドを定義する
            getTasks() {
                // Laravelで作成したタスク一覧APIにアクセスする
                // [axios.get()] HTTP通信(API通信)でサーバーからデータを取得する
                axios.get('/api/tasks')
                // データの取得に成功した場合に実行する
                .then((res) => {
                    //帰ってきたjsonをこのコンポーネントが持っているtasks配列に登録する
                    this.tasks = res.data;
                });
            },
            // タスクを削除するメソッドを定義する
            deleteTask(id) {
                // Laravelで作成したタスク一覧APIにアクセスする
                // [axios.delete()] HTTP通信(API通信)でサーバーからデータを削除する
                axios.delete('/api/tasks/' + id)
                // データの取得に成功した場合に実行する
                .then((res) => {
                    // getTasksメソッドを実行してタスク一覧を再取得する
                    this.getTasks();
                });
            }
        },
        // ライフサイクルフックを定義する
        // dataオブジェクトをリアクティブにする
        // ここでのリアクティブとは（APIなどで）値の更新を行うと更新が反映されること
        mounted() {
            //描画時にgetTasks()を実行する
            this.getTasks();
        }
    }
</script>
