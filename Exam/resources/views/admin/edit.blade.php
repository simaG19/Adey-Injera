@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Vehicle</h1>

        <form action="{{ route('vehicle.update', $vehicle->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="make">Make</label>
                <input type="text" name="make" id="make" class="form-control" value="{{ old('make', $vehicle->make) }}" required>
            </div>

            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" class="form-control" value="{{ old('model', $vehicle->model) }}" required>
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" class="form-control" value="{{ old('year', $vehicle->year) }}" required>
            </div>

            <div class="form-group">
                <label for="license_plate">License Plate</label>
                <input type="text" name="license_plate" id="license_plate" class="form-control" value="{{ old('license_plate', $vehicle->license_plate) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Vehicle</button>
        </form>
    </div>
@endsection
