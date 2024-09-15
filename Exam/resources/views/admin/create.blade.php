@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Vehicle</h1>

        <form action="{{ route('vehicle.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="make" class="form-label">Make</label>
                <input type="text" class="form-control" id="make" name="make" required>
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control" id="year" name="year" min="1900" required>
            </div>
            <div class="mb-3">
                <label for="license_plate" class="form-label">License Plate</label>
                <input type="text" class="form-control" id="license_plate" name="license_plate" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Vehicle</button>
        </form>
    </div>
@endsection
