require('./bootstrap');
import Vue from 'vue'

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('profile',{
  data(){return{
    namex: 'john doe'
  }},
  computed:{
    fullName(){ return "Hello" }
  },
  methods:{
    uploadFile(file){ console.log( "Oquei" ); return "Oquei";  }
  },
  template:`
  <div id="view" class="container card-container">
    <h1>Subir foto</h1>
    <div class="row">
      <div class="col-md-4">
        <slot :upload="uploadFile"></slot>
      </div>
    </div>
  </div>
  `,
})

const app = new Vue({
  el: '#app'
})