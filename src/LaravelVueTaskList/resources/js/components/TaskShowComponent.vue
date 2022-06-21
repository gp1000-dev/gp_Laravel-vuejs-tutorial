<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group row border-bottom">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <!-- （単方向）バインディング -->
                        <!-- [v-bind:value] script側のtaskIdの変更を単方向で動的に反映する -->
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id"
                                v-bind:value="taskId">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="title"
                                value="title title">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="content" class="col-sm-3 col-form-label">Content</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="content"
                                value="content content">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">Person In Charge</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="person-in-charge"
                                value="Ichiro">
                    </div>
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
        }
    }
</script>
