<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <!-- form送信時にsubmitメソッドを発火する-->
                <!-- v-on:イベント名="メソッド名($event)" -->
                <!-- [prevent] イベントにデフォルトで設定されている処理を実行しない -->
                <form v-on:submit.prevent="submit">
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <!-- taskオブジェクトのtitleをv-model（双方向）で操作する -->
                        <!-- 双方向バインディング -->
                        <!-- [v-model=""] html側とscript側の変更を双方向で動的に反映する -->
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-model="task.id">
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <!-- taskオブジェクトのtitleをv-model（双方向）で操作する -->
                        <!-- 双方向バインディング -->
                        <!-- [v-model=""] html側とscript側の変更を双方向で動的に反映する -->
                        <input type="text" class="col-sm-9 form-control" id="title" v-model="task.title">
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-3 col-form-label">Content</label>
                        <!-- taskオブジェクトのtitleをv-model（双方向）で操作する -->
                        <!-- 双方向バインディング -->
                        <!-- [v-model=""] html側とscript側の変更を双方向で動的に反映する -->
                        <input type="text" class="col-sm-9 form-control" id="content" v-model="task.content">
                    </div>
                    <div class="form-group row">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">Person In Charge</label>
                        <!-- taskオブジェクトのtitleをv-model（双方向）で操作する -->
                        <!-- 双方向バインディング -->
                        <!-- [v-model=""] html側とscript側の変更を双方向で動的に反映する -->
                        <input type="text" class="col-sm-9 form-control" id="person-in-charge" v-model="task.person_in_charge">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    /* [エクスポート] 他のコンポーネントで使用できる様に外部参照を可能にする */
    // [export default] 処理をコンポーネント化して 指定要素で実施する
    export default {
        // propsオプションを定義する
        // [props] 親コンポーネントが子コンポーネントへデータを渡す際には，propsオプションを利用します
        props: {
            taskId: String
        },
        // アプリケーションで使用するデータを定義する
        data: function () {
            return {
                // オブジェクト型の変数taskを定義する
                task: {}
            }
        },
        // メソッドオプションを定義する
        methods: {
            // 該当IDのタスクを取得するメソッドを定義する
            getTask() {
                // Laravelで作成したタスク一覧APIから該当IDのデータにアクセスする
                // [axios.get()] HTTP通信(API通信)でサーバーからデータを取得する
                axios.get('/api/tasks/' + this.taskId)
                // データの取得に成功した場合に実行する
                .then((res) => {
                    //帰ってきたjsonをこのコンポーネントが持っている変数taskに登録する
                    this.task = res.data;
                });
            },
            // タスクを更新するメソッドを定義する
            submit() {
                // Laravelで作成したタスク一覧APIにアクセスする
                // [axios.put()] HTTP通信(API通信)でサーバーへ更新データを送信する
                axios.put('/api/tasks/' + this.taskId, this.task)
                // データの送信に成功した場合に実行する
                .then((res) => {
                    // タスク一覧ページにリダイレクトする
                    // [$router.push] 指定したリンクにページ遷移できる
                    this.$router.push({name: 'task.list'})
                });
        }
        },
        // ライフサイクルフックを定義する
        // dataオブジェクトをリアクティブにする
        // ここでのリアクティブとは（APIなどで）値の更新を行うと更新が反映されること
        mounted() {
            //描画時にgetTask()を実行する
            this.getTask();
        }
    }
</script>
