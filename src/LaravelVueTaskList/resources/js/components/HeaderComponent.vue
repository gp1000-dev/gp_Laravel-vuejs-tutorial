<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                <div>
                    <!-- クリック時にページを遷移する -->
                    <!-- [v-bind] タグ属性の値をVueインスタンス内で定義した変数で表現する -->
                    <!-- [to="リンク先"] -->
                    <!-- [to="{ name: 'ルート名'}"] 名前付きルートを呼び出す -->
                    <router-link v-bind:to="{name: 'task.list'}">
                        <button class="btn btn-success">List</button>
                    </router-link>
                    <!-- クリック時にページを遷移する -->
                    <!-- [v-bind] タグ属性の値をVueインスタンス内で定義した変数で表現する -->
                    <!-- [to="リンク先"] -->
                    <!-- [to="{ name: 'ルート名'}"] 名前付きルートを呼び出す -->
                    <router-link v-bind:to="{name: 'task.create'}">
                        <button class="btn btn-success">ADD</button>
                    </router-link>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    /* [エクスポート] 他のコンポーネントで使用できる様に外部参照を可能にする */
    // [export default] 処理をコンポーネント化して 指定要素で実施する
    export default {}
</script>
