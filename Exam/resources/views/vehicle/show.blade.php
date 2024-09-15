@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Vehicle Details</h1>

        <div class="card">
            <div class="card-header">
                Vehicle ID: {{ $vehicle->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $vehicle->make }} {{ $vehicle->model }}</h5>
                <p class="card-text"><strong>Year:</strong> {{ $vehicle->year }}</p>
                <p class="card-text"><strong>License Plate:</strong> {{ $vehicle->license_plate }}</p>
                <a href="{{ route('driver') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
