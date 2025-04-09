<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
<div id="guestnavbar">

</div>
@include('components.admin-navbar')
@vite('resources/js/app.js')
<p class="text-3xl font-bold underline">My First Heading</p>
<p>My first paragraph.</p>

</body>
</html>
