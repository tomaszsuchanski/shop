<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Login.css">
</head>
<body>

<main class="form-signin text-center">
    <svg width="64px" height="64px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>file_type_light_codeclimate</title><path d="M20.745,8.2,15.4,13.517l3.173,3.173,2.174-2.174,6.111,6.14L30,17.484Zm-6.317,6.287-3.144-3.143-8.05,8.05L2,20.627,5.173,23.8l1.234-1.263,4.084-4.055.793-.793,3.144,3.144L17.4,23.8l3.173-3.173L17.6,17.66l-3.173-3.173Z" style="fill:#000000"></path></g></svg>
    <form action="../php/Registration.php" method="POST">
        <h1 class="h3 mb-3 fw-normal">Please register</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com" required>
            <label for="username">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
</main>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
