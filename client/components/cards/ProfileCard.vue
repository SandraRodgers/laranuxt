<template>
  <div class="bg-white rounded-lg shadow-3xl h-5/6 w-3/6 mt-16">
    <div class=" flex items-center justify-between p-6 space-x-6">
      <div class="flex-1 truncate">
        <div class="flex items-center space-x-3">
          <h2 class="flex items-center h-10 text-gray-900 text-3xl font-semibold leading-5 truncate">
            {{ profiles && profiles[0] && profiles[0].name }}
          </h2>
        </div>
      </div>
      <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"   alt="avatar" :src="profiles && profiles[0] && profiles[0].avatar" />
    </div>
    <div v-if="cardNum === 1" class="flex flex-col p-6">
      <p class="text-gray-900 font-bold text-md mb-4">
        Background
      </p>
      <p class="text-gray-900 text-md">
      {{ profiles && profiles[0] && profiles[0].background }}
      </p>
      <br/>
    </div>
    <div v-if="cardNum === 2" class="flex flex-col p-6">
      <p class="text-gray-900 font-bold text-md mb-4">
        Value I Bring
      </p>
      <p class="text-gray-900 text-md">
        {{ profiles && profiles[0] && profiles[0].value }}
      </p>
    </div>
    <div v-if="cardNum === 3" class="flex flex-col p-6">
      <p class="text-gray-900 font-bold text-md mb-4">
        Job Experiences (Past and Future)
      </p>
      <p class="text-gray-900 text-md">
        {{ profiles && profiles[0] && profiles[0].jobDetails }}
      </p>
    </div>
    <div v-if="cardNum === 4" class="flex flex-col p-6">
      <p class="text-gray-900 font-bold text-md mb-4">
        Confident In...
      </p>
      <p class="text-gray-900 text-md">
        {{ profiles && profiles[0] && profiles[0].techSkillsConfident }}
      </p>
      <br/>
      <p class="text-gray-900 font-bold text-md mb-4">
        Somewhat Confident In...
      </p>
      <p class="text-gray-900 text-md">
        {{ profiles && profiles[0] && profiles[0].techSkillsSome }}
      </p>
    </div>
    <div v-if="cardNum === 5" class="flex flex-col p-6">
      <p class="text-gray-900 font-bold text-md mb-4">
        Other Interests
      </p>
      <p class="text-gray-900 text-md">
        {{ profiles && profiles[0] && profiles[0].otherInterests }}
      </p>
    </div>
  </div>
</template>

<script lang="ts">
import { PropType } from '@nuxtjs/composition-api'
import Vue from 'vue'
import { Profiles } from '@/client/types/api'

export default Vue.extend({
  props: {
    profiles: {
      type: Array as PropType<Profiles>,
      required: true,
    },
    cardNum: {
      type: Number}
  },
})
</script>


