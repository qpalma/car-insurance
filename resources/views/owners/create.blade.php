@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Owner</h2>

        <form method="POST" action="{{ route('owners.store') }}">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Surname</label>
                <input type="text" name="surname" class="form-control">
            </div>

            <button class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
