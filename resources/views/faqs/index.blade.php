@extends('layouts.app')

@section('content')
    <h1>FAQs</h1>
    <p>Welcome to the FAQ page. Here are your frequently asked questions:</p>
    <!-- Add FAQ content here -->
@endsection

@foreach ($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @if (!$user->is_admin)
                <form action="{{ route('users.makeAdmin', $user) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success">Make Admin</button>
                </form>
            @else
                <span class="badge bg-primary">Admin</span>
            @endif
        </td>
    </tr>
@endforeach