@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> Adey Enjera </h1>

        <div class="card">
            <div class="card-header">
                <h3>Enjera Package Details</h3>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Type:</strong> {{ $vehicle->make }}</p>
                <p class="card-text"><strong>Amount:</strong> {{ $vehicle->model }}</p>
                <p class="card-text"><strong>Price:</strong> {{ $vehicle->year }}</p>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactModal">
                    Order
                </button>
            </div>
        </div>

        <!-- Contact Modal -->
        <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group">
                            <a href="tel:+251900000000" class="list-group-item list-group-item-action">
                                <i class="fas fa-phone-alt"></i> +251 90 000 0000
                            </a>
                            <a href="mailto:info@adeyenjera.com" class="list-group-item list-group-item-action">
                                <i class="fas fa-envelope"></i> info@adeyenjera.com
                            </a>
                            <a href="https://www.example.com" target="_blank" class="list-group-item list-group-item-action">
                                <i class="fas fa-globe"></i> www.adeyenjera.com
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
