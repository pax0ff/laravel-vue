<template>
    <div class="container-fluid bg-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="" />
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">Acasa <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="/companies">Companies</a>
                    <a class="nav-item nav-link" href="/users">Users</a>
                    <a class="nav-item nav-link" href="/users/login">Login</a>
                    <a class="nav-item nav-link" href="/users/register">Register</a>
                    <a class="nav-item nav-link" href="/dashboard">Dashboard</a>
                    <a class="nav-item nav-link" href="/store">Store</a>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Navbar",
}
</script>

<style scoped>

</style>
