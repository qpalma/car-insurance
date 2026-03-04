@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Cars</h2>

        <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">
            Add Car
        </a>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Reg</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Owner</th>
                <th>Actions</th>
            </tr>

            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->reg_number }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->owner->name }}</td>

                    <td>
                        <a href="{{ route('cars.edit',$car) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('cars.destroy',$car) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
