@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Customer</h2>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" class="form-control" id="contact_number" name="contact_number" required>
            </div>
            <div class="form-group">
                <label for="other_information">Other Information:</label>
                <textarea class="form-control" id="other_information" name="other_information" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Customer</button>
        </form>
    </div>
@endsection
