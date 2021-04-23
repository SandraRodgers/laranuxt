<template>
  <nav class="flex fixed items-center justify-between flex-wrap bg-red-600 p-6 w-screen border-b border-white">
    <div class="flex items-center flex-shrink-0 mr-6 h-16">
      <Logo/>
      <span class="font-semibold text-xl tracking-tight text-white">Laranuxt</span>
    </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div @click="checkRoute" class="lg:flex-grow">
      <nuxt-link to="current" :class="currentRoute ==='current' ? 'text-xl' : ''" class="block mt-4 lg:inline-block lg:mt-0 text-green-300  hover:text-white mr-4">
        Current Profile
      </nuxt-link>
      <nuxt-link to="update" :class="currentRoute ==='update' ? 'text-xl' : ''" class="block mt-4 lg:inline-block lg:mt-0 text-green-300 hover:text-white mr-4">
        Update
      </nuxt-link>
      <nuxt-link :class="currentRoute ==='delete' ? 'text-xl' : ''" to="delete" class="block mt-4 lg:inline-block lg:mt-0 text-green-300 hover:text-white">
        Delete
      </nuxt-link>
    </div>
    <div @click="checkRoute">
      <nuxt-link to="/" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white mt-4 lg:mt-0">Home</nuxt-link>
    </div>
  </div>
</nav>
</template>

<script>
export default {
    data(){
      return {
        currentRoute: ""
      }
    },
    methods:{
      checkRoute(){
        if($nuxt.$route.path === '/current'){
          this.currentRoute = "current"
        } else if ($nuxt.$route.path === '/update'){
            this.currentRoute = "update"
        } else if ($nuxt.$route.path === '/delete') {
            this.currentRoute = "delete"
        } else {
          this.currentRoute = ""
        }
      }
    },
    mounted(){
      console.log($nuxt.$route.path)
    }
}
</script>

