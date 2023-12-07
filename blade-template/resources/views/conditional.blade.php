<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($value == "")
        {{ "you didn't enter any value in the url" }}
    @elseif($value == 56)
        {{ "King Babar" }}
    @else
        {{ "value is $value"}}
    @endif

    <br>
    @isset($value)
        {{ "$value is not null"}}
    @endisset
</body>
</html>