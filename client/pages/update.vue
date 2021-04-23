<template>
  <div class="flex items-center flex-col bg-red-600">
    <div class="w-8/12 col-span-1 bg-white rounded-lg shadow mt-40">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
        <form class="w-full">
          <div class="flex justify-center">
            <h2 class="text-gray-900 text-lg leading-5 font-bold truncate mb-6">
              Update Current Profile
            </h2>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-2/6 ml-20">
              <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                Name
              </label>
            </div>
            <div class="md:w-5/6 mr-10">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" v-model="newName" type="text" :placeholder="profiles && profiles[0] && profiles[0].name">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-2/6 ml-20">
              <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-password">
                Current Role
              </label>
            </div>
            <div class="md:w-5/6 mr-10">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="inline-password" type="text" v-model="newJob" :placeholder="profiles && profiles[0] && profiles[0].job">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-2/6 ml-20">
              <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-password">
                Background
              </label>
            </div>
            <div class="md:w-5/6 mr-10">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="inline-password" type="text" v-model="newBackground" :placeholder="profiles && profiles[0] && profiles[0].background">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-2/6 ml-20">
              <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-password">
                Value I Bring...
              </label>
            </div>
            <div class="md:w-5/6 mr-10">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="inline-password" type="text" v-model="newValue" :placeholder="profiles && profiles[0] && profiles[0].value">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6 ">
            <div class="md:w-2/6 ml-20">
              <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-password">
                Job Experiences
              </label>
            </div>
            <div class="md:w-5/6 mr-10">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="inline-password" type="text" v-model="newJobDetails" :placeholder="profiles && profiles[0] && profiles[0].jobDetails">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-2/6 ml-20">
              <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-password">
                Confident In...
              </label>
            </div>
            <div class="md:w-5/6 mr-10">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="inline-password" type="text" v-model="newTechSkillsConfident" :placeholder="profiles && profiles[0] && profiles[0].techSkillsConfident">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-2/6 ml-20">
              <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-password">
                Somewhat Confident In...
              </label>
            </div>
            <div class="md:w-5/6 mr-10">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="inline-password" type="text" v-model="newTechSkillsSome" :placeholder="profiles && profiles[0] && profiles[0].techSkillsSome">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-2/6 ml-20">
              <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-password">
                Other Interests
              </label>
            </div>
            <div class="md:w-5/6 mr-10">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="inline-password" type="text" v-model="newOtherInterests" :placeholder="profiles && profiles[0] && profiles[0].otherInterests">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-2/6 ml-20">
              <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-password">
                Interesting Facts
              </label>
            </div>
            <div class="md:w-5/6 mr-10">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="inline-password" type="text" v-model="newInterestingFacts" :placeholder="profiles && profiles[0] && profiles[0].interestingFacts">
            </div>
          </div>
          <div class="">
            <div class="flex justify-center">
              <PushButton @click="editProfile" class="mr-2" theme="indigo">
                  Submit
              </PushButton>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="flex justify-center mt-16">
      <h2 class="text-gray-900 text-lg leading-5 font-bold truncate mb-6">
        Updates Made to Profile
      </h2>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'
import { Profiles } from '@/types/api'
import ProfileForm from '../components/forms/ProfileForm.vue'

export default Vue.extend({
  components: { ProfileForm },
  data () {
    const profiles:Profiles = []
    const count:number = 1
    const newName:string = ""
    const newJob:string = ""
    const newBackground:string = ""
    const newValue:string = ""
    const newJobDetails:string = ""
    const newTechSkillsSome:string = ""
    const newTechSkillsConfident:string = ""
    const newOtherInterests:string = ""
    const newInterestingFacts:string = ""

    return {
      profiles,
      count,
      newName,
      newJob,
      newBackground,
      newValue,
      newJobDetails,
      newTechSkillsSome,
      newTechSkillsConfident,
      newOtherInterests,
      newInterestingFacts
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
    editProfile () {
        this.$axios.put('profile1', {
            name: this.newName,
            job:this.newJob,
            background:this.newBackground,
            value:this.newValue,
            jobDetails:this.newJobDetails,
            techSkillsSome:this.newTechSkillsSome,
            techSkillsConfident:this.newTechSkillsConfident,
            otherInterests:this.newOtherInterests,
            interestingFacts:this.newInterestingFacts
        })
    }
  },
  
})
</script>
