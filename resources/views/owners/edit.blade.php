@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Owner</h2>

        <form method="POST" action="{{ route('owners.update', $owner) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ $owner->name }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Surname</label>
                <input type="text" name="surname" value="{{ $owner->surname }}" class="form-control">
            </div>

            <button class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
