<!DOCTYPE html>
<html>
<head>
    <title>Edit Car</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1 class="my-3">Edit Car</h1>
    <form method="POST" action="/cars/{{ $car->id }}" class="form-group">
        @csrf
        @method('PUT')
        <input class="form-control my-4" type="text" name="brand" value="{{ $car->brand }}" placeholder="Brand">
        <input class="form-control my-4" type="text" name="model" value="{{ $car->model }}" placeholder="Model">
        <input class="form-control my-4" type="number" name="year" value="{{ $car->year }}" placeholder="Year">
        <input class="form-control my-4" type="text" name="color" value="{{ $car->color }}" placeholder="Color">
        <button type="submit" class="btn btn-dark">Update</button>
    </form>
    </div> 
</body>
</html>