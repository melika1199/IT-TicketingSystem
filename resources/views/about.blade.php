<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <!-- style sheets and other plugins -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
<!-- top of the page with nav bar and logout links -->
@extends('layout.master')
@section('title', 'about')
@section('content')
    <div>
        <!-- image of the page -->
        <img alt="About" src="about.jpg" style="width:100%; position:relative; padding-bottom: 2%;">
    </div>
    <div class="container">
        <div class="content">
            <!-- the content -->
            <div><h2>About ITS</h2></div>
            <br>
            <div class="quote">

                <p>
                    Information Technology Services (ITS) provides RMIT University with information and
                    communication technology in support of RMIT’s research, learning teaching and administrative
                    activities. Information Technology Services (ITS) help desk support is part of RMIT Service and
                    Support website which is created to help users with their general IT related enquirers and issues.
                    It offers variety of useful IT related services for students and staff including hardware,
                    software, network, password and security.
                </p>

            </div>
        </div>
    </div>
@endsection
</body>
</html>