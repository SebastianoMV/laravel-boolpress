<template>
<header>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'home'}" >Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'blog'}">Blog</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'about'}">About</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'contacts'}">Contatti</router-link>
                </li>
            </ul>
        </div>
    </nav>
</header>

</template>

<script>
export default {
    name: 'HeaderComp'

}
</script>

<style lang="scss" scoped>
nav{
    background-color: #f7f7f7;
}

</style>
