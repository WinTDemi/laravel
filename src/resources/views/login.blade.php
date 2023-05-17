<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form action="{{ route('your-rule') }}" method="POST">
        @csrf
        <select name="rule">
            <option value="1">1</option>
            <option value="0">0</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>