<template>
  <div class="container p-2 lg:p-8 flex flex-col">
    <div class="m-8 flex items-center justify-center mt-40">
      <Logo />
    </div>
    <div class="text-center mt-4">
      <span>provided by endpoint</span><span>&nbsp;</span>
      <a class="text-blue-400" :href="`${$config.apiUrl}/example?count=9`">/example</a>
      <span>&nbsp;</span>
      <span class="text-gray-400 text-sm">(2 second delay)</span>
    </div>
    <div class="text-center mt-4">
      <span class="mr-4">nuxt-tailvue kitchen sink:</span>
      <button-group>
        <push-button group="left" to="/modal">
          Modals
        </push-button>
        <push-button group="middle" to="/toast">
          toasts
        </push-button>
        <push-button group="middle" to="/button">
          buttons
        </push-button>
        <push-button group="right" to="/icon">
          icons
        </push-button>
      </button-group>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'
import { Users } from '@/types/api'
export default Vue.extend({
  data () {
    const users:Users = []
    const count:number = 9

    return {
      users,
      count,
    }
  },
  mounted () {
    this.get(this.count)
  },
  methods: {
    async get (count: number): Promise<void> {
      await this.$sleep(2000)
      this.users = (
        await this.$axios.get('example', { params: { count } })
      ).data.data as Users
    },
    total (count: number): void {
      this.users = []
      this.count = count
      this.get(this.count)
    },
  },
})
</script>