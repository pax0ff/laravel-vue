<template>
    <div class="container">
        <h1 class="card-title">Login</h1>
        <form method="post">
            <div class="form-group col-5">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group col-5">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "LoginIndex"
}
</script>

<style scoped>

</style>
