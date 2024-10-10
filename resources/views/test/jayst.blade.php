<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing View and Blade</title>
</head>
<body>
    @foreach (range(1,30) as $value)
        <li>{{rand(1,30)}}</li>
    @endforeach
</body>
</html>