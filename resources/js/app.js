/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
import { createApp } from "vue";
import TodotopComponent from './components/TodotopComponent.vue';


createApp({
    components:{
        TodotopComponent
    },
    // data(){
    //     return {
    //     message: 'hello V',
    //     };
    // },
}).mount('#todo')

const appdata = {
    // props（method）
    // ↓defined function(method)
    data(){
        return {
            // ↓object(defined values)(props)
            // basically the value is defined like the return value.
            message2: '',
        }
    },
    // ↑ Need [ , ] divide methods

    // ↓ Run when the processes is generated
    created(){
        this.message2 = 'Count: 0',
        this.count = 0
    },

    // ↓Run (defined action to be performed when action is included)
    mounted(){
        // Interval(function, msec)
        timer = setInterval(() => {
            this.count++,
            this.message2 = 'Count: ' + this.count
        }, 1000)
    }
}
Vue.createApp(appdata).mount('#counter')

// window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// ↓vue2の書き方
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('todotop-component', require('./components/TodotopComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
