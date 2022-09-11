<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <div>
                <label for="">username</label>
                <input name="username" type="text">
            </div>
            <div>
                <label for="">password</label>
                <input name="password" type="password">
            </div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>