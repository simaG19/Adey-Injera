@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Package</h1>

        <form action="{{ route('vehicle.update', $vehicle->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="make">Type</label>
                <input type="text" name="make" id="make" class="form-control" value="{{ old('make', $vehicle->make) }}" required>
            </div>

            <div class="form-group">
                <label for="model">Amount</label>
                <input type="text" name="model" id="model" class="form-control" value="{{ old('model', $vehicle->model) }}" required>
            </div>

            <div class="form-group">
                <label for="year">Price</label>
                <input type="text" name="year" id="year" class="form-control" value="{{ old('year', $vehicle->year) }}" required>
            </div>

           
            <div class="mb-3">
                <label for="license_plate" class="form-label">Market Type</label>
                <select class="form-control" id="license_plate" name="license_plate" required>
                    <option value="" disabled>Select market type</option>
                    <option value="export" {{ old('license_plate', $vehicle->license_plate) == 'export' ? 'selected' : '' }}>Export</option>
                    <option value="local" {{ old('license_plate', $vehicle->license_plate) == 'local' ? 'selected' : '' }}>Local</option>
                </select>
            </div>
            

            <button type="submit" class="btn btn-primary">Update Package</button>
        </form>
    </div>
@endsection
