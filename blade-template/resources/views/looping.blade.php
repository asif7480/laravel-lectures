<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Iterating for loop using blade template engine</h2>
    @for($i=10; $i>=1; $i--)
        <br>
        {{ $i }}
    @endfor
    
    <h2>Iterating for loop using blade template engine</h2>
    @php
        $i = 1
    @endphp
    @while($i<=10)
        {{ $i }}
    @php $i++; @endphp
    
    @endwhile

</body>
</html>