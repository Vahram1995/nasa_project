<template>
  <div>
  <li class="list-group-item" :class="className"> <slot></slot> <span id="time">{{time}}</span> </li>
  <small class="badge float-lg-right" :class="badgeClass"> {{user}}</small>
  </div>
</template>

<script>
    export default {
      props: [
        'color',
          'user',
          'time'
      ],
      computed:{
        className(){
          return 'list-group-item-'+this.color;
        },
        badgeClass(){
          return 'badge-'+this.color;
        }
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
#time{
  font-size: 9px;
  color: black;
  margin-top: 10px;

}
</style>
