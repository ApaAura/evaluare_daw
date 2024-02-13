<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
    <h2>Car List</h2>
        <div class="row">
            @forelse ($cars as $car)
            <div class="col-lg-3">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{$car->brand}}</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$car->model}}</h5>
                        <p class="card-text">{{$car->year}}  {{$car->color}} </p>
                        <a href="{{ route('cars.edit', ['car'=>$car -> id]) }}" class="btn btn-warning btn-sm m-1">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning btn-sm m-1">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <li class="list-group-item">No cars</li>
            @endforelse
        </div>
    </div>
    <!--<ul>
        @foreach ($cars as $car)
            <li>{{ $car->brand }} - {{ $car->model }} ({{ $car->year }} {{$car->color}}) </li>
        @endforeach
    </ul>-->
</body>
</html>