@extends('layouts.creatingvenue')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>VENUE CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" style="background-color: black;" href="{{ route('venue.create') }}" title="Create Venue"> <i class="fas fa-plus-square"aria-hidden="true" style=""></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg" style=" margin: 25px 0;
    font-size: 0.9em;  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
        <tr>
            <th>No</th>
            <th>Name of the venue</th>
            <th>Capacity</th>
            <th>State</th>
            <th>Location</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($venues as $venue)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $venue->venue_name }}</td>
                <td>{{ $venue->capacity }}</td>
                <td>{{ $venue->state }}</td>
                <td>{{ $venue->location }}</td>
                <td>{{ date_format($project->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('venue.destroy', $venue->id) }}" method="POST">

                        <a href="{{ route('venue.show', $venue->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg" style="background-color: black;"></i>
                        </a>

                        <a href="{{ route('venue.edit', $venue->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $venues->links() !!}

@endsection
