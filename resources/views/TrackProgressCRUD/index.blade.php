<!-- the page that lists all the tickets -->
<!DOCTYPE html>
<html>
<head>
    <title>Track Progress</title>
</head>

<body>
<!-- top of the page with nav bars and logout and etc -->
@extends('layout.master')
@section('title', 'trackProcess')
@section('content')

    <!-- page image -->
    <img alt="Track Progress" src="trackp.jpg" style="width:100%; position:relative; margin-bottom: 5%">
    <div class="container">
        <div class="content">

            <!-- CRUD table -->
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Software Issue</th>
                    <th>Operating System</th>
                    <th>Details</th>
                    <th>Status</th>
                    <th>Reply</th>
                    <th>Action</th>
                </tr>
                <!-- loops through all the tickets in database -->
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $ticket->softwareIssue}}</td>
                        <td>{{ $ticket->OS}}</td>
                        <td>{{ $ticket->additionalComments}}</td>
                        <td>{{ $ticket->status}}</td>
                        <td>{{ $ticket->Reply}}</td>
                        <td>
                            <!-- goes to show blade view page when clicked-->
                            <a class="btn btn-info" href="{{ route('TrackProgressCRUD.show',$ticket->id) }}">Show</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $tickets->render() !!}

        </div>
    </div>


@endsection