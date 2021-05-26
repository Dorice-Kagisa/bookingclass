@extends('layouts.main')

@section('content')
    <div class="row" style="padding-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Venue</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('venue.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('venue.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name of the Venue:</strong>
                    <input type="text" name="venue_name" class="form-control" placeholder="Name of the Venue">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Capacity:</strong>
                    <textarea class="form-control" style="height:50px" name="capacity"
                        placeholder="Capacity"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>State:</strong>
                    <input type="text" name="state" class="form-control" placeholder="State">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location:</strong>
                    <input  name="location" class="form-control" placeholder="Location">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>News:</strong>
                    <input type="text" name="news" class="form-control" placeholder="News">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
