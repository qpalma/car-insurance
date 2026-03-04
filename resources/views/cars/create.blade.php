@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Add Car</h2>

        <form method="POST" action="{{ route('cars.store') }}">
            @csrf

            <input class="form-control mb-2" name="reg_number" placeholder="Reg number">
            <input class="form-control mb-2" name="brand" placeholder="Brand">
            <input class="form-control mb-2" name="model" placeholder="Model">

            <select class="form-control mb-2" name="owner_id">
                @foreach($owners as $owner)
                    <option value="{{ $owner->id }}">
                        {{ $owner->name }} {{ $owner->surname }}
                    </option>
                @endforeach
            </select>

            <button class="btn btn-success">Save</button>

        </form>

    </div>
@endsection
