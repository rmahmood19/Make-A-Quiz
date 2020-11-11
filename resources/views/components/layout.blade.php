<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make a Quiz</title>
    <link rel="stylesheet" href="{{mix('scss/app.css')}}">
</head>
<body>
<div class="main">
    <div class="container auth d-flex justify-content-center">
        <div class="row box">
           {{$slot}}
        </div>

    </div>
</div>
<script src="{{mix('js/app.js')}}"></script>



</body>
</html>

