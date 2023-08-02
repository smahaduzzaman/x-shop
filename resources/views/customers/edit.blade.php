@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Customer</h2>
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ $customer->contact_number }}" required>
            </div>
            <div class="form-group">
                <label for="other_information">Other Information:</label>
                <textarea class="form-control" id="other_information" name="other_information" rows="4">{{ $customer->other_information }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Customer</button>
        </form>
    </div>
@endsection
