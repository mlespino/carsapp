@extends('layouts.app')
@section('title')
    Create New Car
@endsection
@section('content')
    <div class="d-flex justify-content-between align-item-center pt-3 pb-3 mb-3 border-bottom">
        <h2>Create a New Car</h2>
    </div>
    <form action="{{route('cars.store')}}" method="post">
        @csrf
        <div class="row form-group">
            <div class="col-md-12">
                <label form="">Make:</label>
                <input type="text" name="make" class="form-control" required />
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label form="">Model:</label>
                <input type="text" name="model" class="form-control" required />
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label form="">Produced on:</label>
                <input type="date" name="produced_on" class="form-control" required />
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success w-50 float-right">Create</button>
            </div>
        </div>
    </form>
@endsection
