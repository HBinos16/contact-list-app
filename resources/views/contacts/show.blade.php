@extends('layout')

@section('content')
    <h1>Contact Details</h1>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <td>{{ $contact->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $contact->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $contact->phone }}</td>
        </tr>
    </table>
    <a href="/contacts/{{ $contact->id }}/edit" class="btn btn-warning">Edit</a>
    <form action="/contacts/{{ $contact->id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="/contacts" class="btn btn-secondary">Back to Contacts</a>
@endsection
