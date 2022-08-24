<template>
    <div class="container-fluid bg-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="" />
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">Acasa <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="/companies">Parteneri</a>
                    <a class="nav-item nav-link" href="/users">Useri</a>
                    <a class="nav-item nav-link" href="/users/login">Intra in cont</a>
                    <a class="nav-item nav-link" href="/users/logout">Logout</a>
                    <a class="nav-item nav-link" href="/users/register">Inregistreaza-te</a>
<!--                    <a class="nav-item nav-link" href="/dashboard">Dashboard</a>-->
                    <a class="nav-item nav-link" href="/store">Produsele noastre</a>
                </div>
                <div class="position-absolute end-0">
                    <a href="/cart" class=""><i class="bi bi-cart2 h2" id="cart"></i></a>
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
