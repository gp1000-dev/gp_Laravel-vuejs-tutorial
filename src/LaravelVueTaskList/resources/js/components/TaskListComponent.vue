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
            <tr>
                <th scope="row">1</th>
                <td>Title1</td>
                <td>Content1</td>
                <td>Ichiro</td>
                <td>
                    <!-- クリック時にページを遷移する -->
                    <!-- [v-bind] タグ属性の値をVueインスタンス内で定義した変数で表現する -->
                    <!-- [to="{ name: 'ルート名', params: { taskId: 値 }}"] /taskId/1 の形で名前付きルートを呼び出す -->
                    <router-link v-bind:to="{name: 'task.show', params: {taskId: 1}}">
                        <button class="btn btn-primary">Show</button>
                    </router-link>
                </td>
                <td>
                    <!-- クリック時にページを遷移する -->
                    <!-- [v-bind] タグ属性の値をVueインスタンス内で定義した変数で表現する -->
                    <!-- [to="{ name: 'ルート名', params: { taskId: 値 }}"] /taskId/1/edit の形で名前付きルートを呼び出す -->
                    <router-link v-bind:to="{name: 'task.edit', params: {taskId: 1}}">
                        <button class="btn btn-success">Edit</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Title2</td>
                <td>Content2</td>
                <td>Jiro</td>
                <td>
                    <!-- クリック時にページを遷移する -->
                    <!-- [v-bind] タグ属性の値をVueインスタンス内で定義した変数で表現する -->
                    <!-- [to="{ name: 'ルート名', params: { taskId: 値 }}"] /taskId/2 の形で名前付きルートを呼び出す -->
                    <router-link v-bind:to="{name: 'task.show', params: {taskId: 2}}">
                        <button class="btn btn-primary">Show</button>
                    </router-link>
                </td>
                <td>
                    <!-- クリック時にページを遷移する -->
                    <!-- [v-bind] タグ属性の値をVueインスタンス内で定義した変数で表現する -->
                    <!-- [to="{ name: 'ルート名', params: { taskId: 値 }}"] /taskId/2/edit の形で名前付きルートを呼び出す -->
                    <router-link v-bind:to="{name: 'task.edit', params: {taskId: 2}}">
                        <button class="btn btn-success">Edit</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Title3</td>
                <td>Content3</td>
                <td>Saburo</td>
                <td>
                    <!-- クリック時にページを遷移する -->
                    <!-- [v-bind] タグ属性の値をVueインスタンス内で定義した変数で表現する -->
                    <!-- [to="{ name: 'ルート名', params: { taskId: 値 }}"] /taskId/3 の形で名前付きルートを呼び出す -->
                    <router-link v-bind:to="{name: 'task.show', params: {taskId: 3}}">
                        <button class="btn btn-primary">Show</button>
                    </router-link>
                </td>
                <td>
                    <!-- クリック時にページを遷移する -->
                    <!-- [v-bind] タグ属性の値をVueインスタンス内で定義した変数で表現する -->
                    <!-- [to="{ name: 'ルート名', params: { taskId: 値 }}"] /taskId/3/edit の形で名前付きルートを呼び出す -->
                    <router-link v-bind:to="{name: 'task.edit', params: {taskId: 3}}">
                        <button class="btn btn-success">Edit</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    /* [エクスポート] 他のコンポーネントで使用できる様に外部参照を可能にする */
    // [export default] 処理をコンポーネント化して 指定要素で実施する
    export default {}
</script>
