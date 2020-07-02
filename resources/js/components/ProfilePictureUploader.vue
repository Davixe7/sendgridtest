<template>
  <div id="profile-picture-uploader">
    <div class="profile-picture-wrapper">
      <div class="placeholder">
        <i class="material-icons">photo</i>
        <span>No profile picture uploaded</span>
      </div>
      <img :src="null" alt="#">
    </div>
    
    <div class="actions">
      <div v-if="newFile.file" class="new-file-wrapper">
        <span>
          <b>Sera remplazado por </b>
        </span>
        <FileItem v-if="newFile" :file="newFile" @fileRemoved="removeFile" class="ml-auto"/>
      </div>
      <div v-else class="input-file-wrapper">
        <input type="file" ref="fileInput" @input="loadFile">
      </div>
    </div>
  </div>
</template>

<script>
import FileItem from './FileItem.vue'
export default {
  props: ['message'],
  components: { FileItem },
  data(){return{
    newFile: {}
  }},
  methods:{
    loadFile(){
      let file = this.$refs.fileInput.files[0]
      if( file ){
        let fileReader= new FileReader()
        let that = this
        fileReader.onloadend = function(e){
          that.newFile = { src: e.currentTarget.result, file }
          that.$emit('loadend', that.newFile)
        }
        fileReader.readAsDataURL( file )
        this.$refs.fileInput.value = ""
      }
    },
    removeFile(){
      this.newFile = {}
    }
  }
}
</script>

<style lang="scss" scoped>
.profile-picture-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 240px;
  border: 1px solid gray;
  background: gray;
  .placeholder {
    text-align: center;
    color: #fff;
    i.material-icons {
      font-size: 3em;
      display: block;
      margin-bottom: 10px;
    }
    span {
      display: block;
      font-weight: 500;
    }
  }
  img {
    display: none;
    width: 100%;
  }
}
.actions {
  display: flex;
  flex-flow: column nowrap;
  justify-content: center;
  border: 1px solid gray;
  padding: 10px;
  overflow: hidden;
}
.new-file-wrapper {
  width: 100%;
  display: flex;
  align-items: center;
}
</style>
