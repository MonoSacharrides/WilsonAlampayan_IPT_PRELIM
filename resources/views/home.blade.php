<a href="{{ route('items') }}">Item Page</a>
<a href="{{ route('pictures') }}">Picture Page</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f8ff;
        }
        .nav-links a {
            margin-right: 15px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-primary">Home Page</h1>
        <nav class="nav-links">
            <a href="{{ route('items') }}" class="btn btn-primary">Item Page</a>
            <a href="{{ route('pictures') }}" class="btn btn-primary">Picture Page</a>
        </nav>
    </div>
</body>
</html>
