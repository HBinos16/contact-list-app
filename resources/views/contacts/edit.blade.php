@extends('layout')

@section('content')
    <h1>Edit Contact</h1>
    <form action="/contacts/{{ $contact->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $contact->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $contact->phone }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Contact</button>
        <a href="/contacts" class="btn btn-secondary">Back to Contacts</a>
    </form>
@endsection
