/* [インポート] このファイルコンポーネントで外部のコンポーネントを使用可能にする */
// 「Vue Router」のプラグインをインポートする
import VueRouter from 'vue-router';
// HeaderComponentコンポーネントをインポートする
import HeaderComponent from "./components/HeaderComponent";
// TaskListComponentコンポーネントをインポートする
import TaskListComponent from "./components/TaskListComponent";
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

// 「Vue Router」を使えるようにする
Vue.use(VueRouter);

// ルーターインスタンスを生成する
const router = new VueRouter({
    // モードオプションを定義する（デフォルトは hash モード）
    // [historyモード] その hash を取り除くために、ページのリロード無しに URL 遷移を実現する
    mode: 'history', // historyモードを指定する
    // ルートオプションを初期化する
    routes: [
        {
            // ルートに 指定したPathでマッピングする
            path: '/tasks',
            // ルート名を定義する
            name: 'task.list',
            // コンポーネントオプションを定義する
            component: TaskListComponent // mountするコンポーネントを指定する
        },
    ]
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
/* HeaderComponentコンポーネントを定義する */
// Vue.component()で全てのVueインスタンスで有効にする
Vue.component('header-component', HeaderComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    // routerオプションを定義する
    // ルーターのインスタンスをrootとなるVueインスタンスに渡します
    router,
});
