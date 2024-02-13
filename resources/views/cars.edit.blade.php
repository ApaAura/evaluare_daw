<!DOCTYPE html>
<html>
<head>
    <title>Edit Car</title>
</head>
<body>
    <h1>Edit Car</h1>

    <form method="POST" action="/cars/{{ $car->id }}">
        @csrf
        @method('PUT')
        <input type="text" name="make" value="{{ $car->brand }}" placeholder="Brand">
        <input type="text" name="model" value="{{ $car->model }}" placeholder="Model">
        <input type="number" name="year" value="{{ $car->year }}" placeholder="Year">
        <input type="text" name="model" value="{{ $car->color }}" placeholder="Color">


        <button type="submit">Update</button>
    </form>
</body>
</html>