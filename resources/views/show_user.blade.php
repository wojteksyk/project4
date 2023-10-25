<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Dane uzytkownika</h3>
    {{ print_r($user)}}<br>
    Imie i nazwisko: {{ $user['fname'] }} {{ $user['lname'] }}<br>
    Miasto {{ $user['city']}}<br>
    hobby: 
    {{ print_r($user['hobby']) }}<br>
    hobby 1: {{ $user['hobby'][0]}}
</body>
</html>