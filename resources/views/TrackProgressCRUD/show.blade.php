<!-- top of the page with navigation bar, logout link and etc -->
@extends('layout.master')
@section('content')
    <div class="container" style="padding-top: 2rem">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="titles">Request Information</h2>
            </div>

            <!-- button to go back to previous page -->
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('TrackProgressCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <!-- shows an specific ticket info -->
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Software Issue:</strong>
                {{ $ticket->softwareIssue}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Details:</strong>
                {{ $ticket->additionalComments}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Operating System:</strong>
                {{ $ticket->OS}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Status:</strong>
                {{ $ticket->status}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reply:</strong>
                {{ $ticket->Reply}}
            </div>
        </div>

    </div>
@endsection