<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome, {{ $name ?? 'hi' }}</h2>
    <!-- using functions using blade template engines -->

    {{ time() }}

    <br>

    <p>Day/month/year is: {{ date('d/m/y') }}</p>

    <!-- printing text with html tags -->

    {{ '<p> This is a text written in p tag</p>'}}

    {!! '<p>This is a text written in p tag</p>' !!}

    {!! "<script>alert('Hello js in laravel') </script>" !!}

    
</body>
</html>