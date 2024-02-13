<!DOCTYPE html>
<html>
<head>
    <title>List Car</title>
</head>
<body>
    <h1>List Car</h1>

    <ul>
        @foreach ($cars as $car)
            <li>{{ $car->brand }} - {{ $car->model }} ({{ $car->year }} {{$car->color}}) </li>
        @endforeach
    </ul>

    <h2>Add new car</h2>
    <form method="POST" action="/cars">
        @csrf
        <input type="text" name="brand" placeholder="Brand">
        <input type="text" name="model" placeholder="Model">
        <input type="number" name="year" placeholder="Year">
        <input type="number" name="color" placeholder="Color">
        

        <button type="submit">Add</button>
    </form>
</body>
</html>
