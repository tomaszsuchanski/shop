<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Login.css">
</head>
<body>

<main class="form-signin text-center test">
    <svg width="64px" height="64px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>file_type_light_codeclimate</title><path d="M20.745,8.2,15.4,13.517l3.173,3.173,2.174-2.174,6.111,6.14L30,17.484Zm-6.317,6.287-3.144-3.143-8.05,8.05L2,20.627,5.173,23.8l1.234-1.263,4.084-4.055.793-.793,3.144,3.144L17.4,23.8l3.173-3.173L17.6,17.66l-3.173-3.173Z" style="fill:#000000"></path></g></svg>
    <form action="../php/Login.php" method="post">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com" required>
            <label for="username">Login</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <br><br>
        <small>Don't have an account yet? Click <a href="Register.php">here</a> to register.</small>
    </form>
</main>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
