<!doctype html>
<html lang="en">
<head>
    <title>Dashboard - {{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{mix('scss/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            </button>
        </div>
        <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
            <div class="user-logo">
                <div class="img" style="background-image: url(images/logo.jpg);"></div>
                <h3>Catriona Henderson</h3>
            </div>
        </div>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
            </li>
            <li>
                <a href="{{route('quiz.index')}}"><span class="fa fa-book-open mr-3"></span> Your Quiz</a>
            </li>

            <li>
                <a href="#"><span class="fa fa-gift mr-3"></span> Gift Code</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <span class="fa fa-running mr-3"></span> Sign Out</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   {{$slot}}

                </div>
            </div>


        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
