<!-- resources/views/cars/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>List of Cars</title>
</head>
<body>
    <h1>List of Cars</h1>
    <ul>
        @foreach ($cars as $car)
            <li>
                {{ $car->make }} {{ $car->model }} ({{ $car->year }})
                @if ($car->color)
                    - Color: {{ $car->color }}
                @endif



                @if($car->file_path)
                <h1>Displaying Image</h1>
                <img src="{{ asset("storage/".$car->file_path) }}" alt="Example Image">
                @endif

                @if ($car->price)
                    - Price: {{ $car->price }}
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>
