@extends('layout')

@section('content')
    <h1>Add Contact</h1>
    <form action="/contacts" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Contact</button>
        <a href="/contacts" class="btn btn-secondary">Back to Contacts</a>
    </form>
@endsection
