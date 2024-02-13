<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Add new car</h2>
    <form method="POST" action="/cars">
        @csrf
        <input type="text" name="brand" placeholder="Brand">
        <input type="text" name="model" placeholder="Model">
        <input type="number" name="year" placeholder="Year">
        <input type="text" name="color" placeholder="Color">
        

        <button type="submit">Add</button>
    </form>
</body>
</html>