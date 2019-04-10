@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Guest view</h1>

                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Mailing Address</th>
                    </tr>
                    @forelse($guests as $guest)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $guest->name }}</td>
                            <td>{{ $guest->surname }}</td>
                            <td>{{ $guest->address }}</td>
                            <td>{{ $guest->mailing_address }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No teams.</td>
                        </tr>
                    @endforelse
                </table>

            </div>
        </div>
    </div>
@endsection
