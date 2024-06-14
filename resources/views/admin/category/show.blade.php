<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Show Category</h1>
        <p><b>Category Name:</b> {{ $category->name }}</p>
        <p><b>Description:</b> {{ $category->description }}</p>
        <hr>
        <h2>Services in this Category:</h2>
        <ul>
            @foreach($services as $service)
                <li>{{ $service->name }}</li>
            @endforeach
        </ul>
        <hr>
        <a class="btn btn-primary" href="{{ route('categories.index') }}">Back</a>
    </div>
</body>
</html>
