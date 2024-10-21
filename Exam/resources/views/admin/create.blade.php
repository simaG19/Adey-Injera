@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Package</h1>

        <form action="{{ route('vehicle.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="make" class="form-label">Type</label>
                <input type="text" class="form-control" id="make" name="make" required>
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Amount</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Price</label>
                <input type="text" class="form-control" id="year" name="year" required>
            </div>
            <div class="mb-3">
                <label for="license_plate" class="form-label">Market Type</label>
                <select class="form-control" id="license_plate" name="license_plate" required>
                    <option value="" disabled selected>Select market type</option>
                    <option value="export">Export</option>
                    <option value="local">Local</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Create Package</button>
        </form>
    </div>
@endsection
