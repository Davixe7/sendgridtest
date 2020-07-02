<template>
  <span class="file-item">
    <img :src="file.src" alt="">
    <span class="info">{{ file.file.size | asFileSize }}</span>
    <span class="remove" @click="$emit('fileRemoved', file)"></span>
  </span>
</template>

<script>
export default {
  props: ['file'],
  filters:{
    asFileSize(size){
      return size ? (size / 1000000).toString().substr(0,3) + "MB" : ""
    }
  }
}
</script>

<style lang="scss" scoped>
.file-item {
  display: inline-flex;
  align-items: center;
  margin-right: 5px;
  padding: 5px 15px 5px 5px;
  border: 1px solid gray;  
  border-radius: 25px;
  
  img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
    border: 1px solid gray;
  }
  .info {
    margin-right: 10px;
    font-weight: 600;
  }
  .remove {
    display: block;
    cursor: pointer;
    &:after {
      font-weight: 600;
      color: #000;
      content: "\00d7";
    }
  }
}
</style>
