@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin </h1>

        <a href="{{ route('vehicle.create') }}" class="btn btn-primary">Add New Package</a>
<br/>
<br/>
@if($vehicles->count())
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>Markert</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehicles as $vehicle)
                        <tr>
                            <td>{{ $vehicle->id }}</td>
                            <td>{{ $vehicle->make }}</td>
                            <td>{{ $vehicle->model }}</td>
                            <td>{{ $vehicle->year }}</td>
                            <td>{{ $vehicle->license_plate }}</td>
                            <td>
                                <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('vehicle.destroy', $vehicle->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No Packages found.</p>
        @endif
    </div>
@endsection
