@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Edit Car</h2>

        <p><strong>Owner:</strong> {{ $car->owner->name }} {{ $car->owner->surname }}</p>

        <form method="POST" action="{{ route('cars.update',$car) }}">
            @csrf
            @method('PUT')

            <input class="form-control mb-2" name="reg_number" value="{{ $car->reg_number }}">
            <input class="form-control mb-2" name="brand" value="{{ $car->brand }}">
            <input class="form-control mb-2" name="model" value="{{ $car->model }}">

            <select class="form-control mb-2" name="owner_id">
                @foreach($owners as $owner)
                    <option value="{{ $owner->id }}" {{ $owner->id == $car->owner_id ? 'selected' : '' }}>
                        {{ $owner->name }} {{ $owner->surname }}
                    </option>
                @endforeach
            </select>

            <button class="btn btn-success">Update</button>

        </form>

    </div>
@endsection
