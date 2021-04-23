<template>
  <div class="flex justify-center h-screen w-screen bg-red-600">
    <div class="flex flex-col justify-center items-center">
      <div class="w-screen rounded overflow-x-hidden flex snap-x" style="height: 70vh">
        <div v-for="num in 5" :key="num" class="w-full h-full flex items-center justify-center text-white flex-shrink-0" :id="`slide-${num}`">
          <profile-card :profiles="profiles" :cardNum="num"/>
        </div>
      </div>
      <div class="flex mt-8">
        <div class="" v-for="num in 5" :key="num">
          <a class="w-8 mr-1 h-8 text-white bg-indigo-700 border-2 shadow-md border-indigo-300 rounded-full bg-white flex justify-center items-center" :href="`#slide-${num}`">{{num}}</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'
import { Profiles } from '@/types/api'
import ProfileCard from '../components/cards/ProfileCard.vue'

export default Vue.extend({
  components:{ProfileCard},
  data () {
    const profiles:Profiles = []
    const count:number = 1

    return {
      profiles,
      count,
    }
  },
  mounted () {
    this.get(this.count)
  },

  methods: {
    async get (count: number): Promise<void> {
      this.profiles = (
        await this.$axios.get('profile', { params: { count } })
      ).data.data as Profiles
    },
  }, 
})
</script>

<style>
.snap-x {
    scroll-behavior: smooth;
}

</style>