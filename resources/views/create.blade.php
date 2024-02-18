<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add car</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h2 class="my-4">Add new car</h2>
        <form method="POST" action="/cars" class="form-group">
            @csrf
            <input class="form-control" type="text" name="brand" placeholder="Brand"><br>
            <input class="form-control" type="text" name="model" placeholder="Model"><br>
            <input class="form-control" type="number" name="year" placeholder="Year"><br>
            <input class="form-control" type="text" name="color" placeholder="Color"><br>

            <button type="submit" class="btn btn-dark">Add</button>
        </form>
    </div>
    
</body>
</html>