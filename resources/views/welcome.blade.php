<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>
    </head>
    <body>
        <h1>Hello from Casablanca</h1>
        <p>It's currently {{date("H:i:s")}} PM.</p>
        <footer><p>&copy; Copyright {{date("Y")}}. &middot;<a href="#">About Us</a></p></footer>
    </body>
</html>