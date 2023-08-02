<!-- resources/views/add_car.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Add Car</title>
</head>
<body>
    <h1>Add Car</h1>
    <form action="{{ route('car.store') }}" method="post"  enctype="multipart/form-data">
        @csrf
        <label for="make">Make:</label>
        <input type="text" name="make" id="make" required>
        <br>

        <label for="model">Model:</label>
        <input type="text" name="model" id="model" required>
        <br>

        <label for="year">Year:</label>
        <input type="number" name="year" id="year" required>
        <br>

        <label for="color">Color:</label>
        <input type="text" name="color" id="color">
        <br>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price">
        <br>

        <label for="file">Car File:</label>
        <input type="file" name="file" id="file">
        <br>


        <button type="submit">Add Car</button>
    </form>
</body>
</html>
