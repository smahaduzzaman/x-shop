@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Promotional Email</h2>
        <form action="{{ route('promotional-email.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
            </div>
            <div class="form-group">
                <label for="recipients">Recipients:</label>
                <select class="form-control" id="recipients" name="recipients[]" multiple required>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }} ({{ $customer->email }})</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Send Email</button>
        </form>
    </div>
@endsection
