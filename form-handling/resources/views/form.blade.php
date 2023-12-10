<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form handling in laravel</h2>

    @php
        print_r($errors->all());

    @endphp
    <form action="{{url('/')}}/form" method="post">
        @csrf   
        name: <br>
        <input type="text" name="name" id="">
        <br>
        <span style="color: red">
            @error('name')
                {{ $message }} 
            @enderror
        </span> 
        <br>

        email: <br>
        <input type="name" name="email" id=""> 
        <br>
        <span style="color: red">
            @error('email')
                {{ $message }} 
            @enderror
        </span> 
        <br>


        password: <br>
        <input type="text" name="password" id=""> 
        <br>
        <span style="color: red">
            @error('password')
                {{ $message }} 
            @enderror
        </span> 
        <br>

        
        confirm password: <br>
        <input type="text" name="confirm_password" id=""> 
        <br>
        <span style="color: red">
            @error('confirm_password')
                {{ $message }} 
            @enderror
        </span> 
        <br>

        <input type="submit" value="click me">
    </form>


    
</body>
</html>