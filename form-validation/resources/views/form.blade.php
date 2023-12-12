<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="bg-dark text-white">
    <div class="mx-auto mt-5 col-4">
        <h2 class="text-center">Form validation using laravel</h2>
        <!-- <pre>
            @php
                print_r($errors->all())
            @endphp
        </pre> -->
        
        <!-- @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif -->
        <form action="{{ url('/')}}/form" method="post">
            @csrf
            <div class="mb-3">
                Name: <br>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" >
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                email: <br>
                <input class="form-control" type="text" name="email" value="{{ old('email') }}" >
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                contact: <br>
                <input class="form-control" type="number" name="contact" value="{{ old('contact') }}" >
                <span class="text-danger">
                    @error('contact')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                password: <br>
                <input class="form-control" type="text" name="pass" value="{{ old('pass') }}" >
                <span class="text-danger">
                    @error('pass')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <input type="submit" value="click me" class="btn btn-primary">
            </div>

        </form>
    </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>