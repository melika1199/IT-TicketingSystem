<!DOCTYPE html>
<html>
<head>
    <title>Frequently Asked Questions</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
<!-- top of the page including nav bar, logout link and img  -->
@extends('layout.master')
@section('title', 'FAQ')
@section('content')
    <div>
    <img alt="RMIT University" src="faq.jpg" style="width:100%; position:relative;">
    </div>
    <div class="container">
        <div class="content">
            <!-- contents -->
            <div class="quote" style="padding-top: 2rem; padding-bottom: 2rem">
                <h4>What is Information Technology Services(ITS)?</h4>
                <p>Information Technology Services (ITS) provides RMIT University
                    with information and communication technology in support of RMIT’s
                    research, learning teaching and administrative activities.</p>

                <br>
                <h4>I am receiving pop up errors when trying to open files, what should I do?</h4>
                <p>Refer to your toolbar and temporarily disable the pop up blocker.</p>

                <br>
                <h4>How to reset my password?</h4>
                <p>If you have already logged in before, just go to the login page and click on "Forgot Password" option and follow the
                instructions.</p>

                <br>
                <h4>I'm new to RMIT; What's my password?</h4>
                <p>If you are new to RMIT, your RMIT ID (username) is the letter ‘s’ followed
                    by your student number (excluding any additional letters)and your initial password is the letter 'p'
                    followed by your date of birth backwards, with an exclamation mark '!' at the end. You are able to
                    change this password later</p>

                <br>
                <h4>How can I access RMIT's computer applications and programs?</h4>
                <p>To access RMIT's computer aplications for free, log into My Desktop. You can access MyDesktop through My RMIT.
                You can also <a href="https://mydesktop.rmit.edu.au/RMITRemote/"><u>click here</u></a> to go to MyDesktop.
                </p>

            </div>
        </div>
    </div>
@endsection
</body>
</html>