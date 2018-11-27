<!DOCTYPE html>
<html>
<head>
    <title>Contact Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
<!-- top of the page including the nav bar and logout links and page image -->
@extends('layout.master')
@section('title', 'Contact')
@section('content')
        <img alt="RMIT University" src="contact.jpg" style="width:100%; position:relative;">
    <div class="container">
        <div class="content">
            <!-- content -->
            <br>
            <div class="title"><h4>For any IT related enquiries, fill out the form below and we will contact you soon! </h4></div>
            <br>
            <div class="quote"></div>

            <!-- error message upon wrong input -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- success message upon successful submission -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <!--  contact form which stores the data via the contact controller into the DB -->
            {!! Form::open(['action' => 'ContactController@store']) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- first name -->
            <div class="form-group {{ $errors->has('firstName') ? 'has-error' : '' }}">
                {!! Form::label('firstName', 'First Name (required)') !!}
                {!! Form::text('firstName', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'First Name')) !!}
                <span class="text-danger">{{ $errors->first('firstName') }}</span>
            </div>

            <!-- lastname -->
            <div class="form-group {{ $errors->has('lastName') ? 'has-error' : '' }}">
                {!! Form::label('lastName', 'Last Name (required)') !!}
                {!! Form::text('lastName', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Last Name')) !!}
                <span class="text-danger">{{ $errors->first('lastName') }}</span>
            </div>

            <!-- email -->
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email', 'E-mail Address (required)') !!}
                {!! Form::text('email', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'e-mail address')) !!}
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>

            <!-- operating system -->
            <div class="form-group {{ $errors->has('OS') ? 'has-error' : '' }}">
                {!! Form::label('OS', 'Operating System Used (required)') !!}
                {!! Form::select('OS', ['Windows' => 'Windows', 'iOS' => 'iOS', 'MAC OS X' => 'MAC OS X',
                                 'Linux' => 'Linux', 'Android' => 'Android'], 'Please Select',
                                 array('class' => 'form-control')) !!}
                <span class="text-danger">{{ $errors->first('OS') }}</span>
            </div>

            <!-- software issue -->
            <div class="form-group {{ $errors->has('softwareIssue') ? 'has-error' : '' }}">
                {!! Form::label('softwareIssue', 'Software Issue (required)') !!}
                {!! Form::text('softwareIssue', null,
                array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Software Issue')) !!}
                <span class="text-danger">{{ $errors->first('softwareIssue') }}</span>
            </div>

            <!-- comments and details -->
            <div class="form-group {{ $errors->has('additionalComments') ? 'has-error' : '' }}">
                {!! Form::label('additionalComments', 'Details (required)') !!}
                {!! Form::textarea('additionalComments', null,
                array(
                            'class'=>'form-control',
                          'placeholder'=>' Any Additional Comments...')) !!}
                <span class="text-danger">{{ $errors->first('additionalComments') }}</span>
            </div>

            <!-- form submission -->
            <div class="form-group">
                {!! Form::submit('Submit',
                  array('class'=>'btn btn-success')) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
</body>
</html>