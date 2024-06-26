@extends('layout')

@section('content')
    <h1>List of Contacts</h1>
    <a href="/contacts/create" class="btn btn-primary mb-3">Add Contact</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <center>
                        <a href="/contacts/{{ $contact->id }}" class="btn btn-info">View</a>
                        <a href="/contacts/{{ $contact->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/contacts/{{ $contact->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </center>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
