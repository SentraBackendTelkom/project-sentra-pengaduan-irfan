<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspiration</title>
</head>
<body>
    <form action="{{route('aspiration')}}" method="post">
        @csrf
        <div>
            <label for="">Nama</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">phone_number</label>
            <input type="text" name="phone_number">
        </div>
        <div>
            <label for="">address</label>
            <input type="text" name="address">
        </div>
        <div>
            <label for="">categories</label>
            <input type="number" name="categories">
        </div>
        <div>
            <label for="">title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">aspiration</label>
            <input type="text" name="aspiration">
        </div>
        <div>
            <label for="">location</label>
            <input type="text" name="location">
        </div>
        <input type="submit">
    </form>
</body>
</html>