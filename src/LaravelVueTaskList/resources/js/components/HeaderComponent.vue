<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                <div>
                    <router-link v-bind:to="{name: 'task.list'}"><!--vue-routerでtask.listと名付けたルーティングにリンクする-->
                        <button class="btn btn-success">List</button>
                    </router-link>
                    <button class="btn btn-success">ADD</button>
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
