@extends('layouts.app')

@section('content')

    <div class="p-5 bg-dark">
    <h1 class="text-white p-2">Creating Student...</h1>
    {{$errors}}
        <form class="bg-white p-4" method="POST" action="{{ route('student.store') }}">
        @csrf
            <div class="form-group mb-4">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Type name">
            </div>
            <div class="form-group mb-4">
                <label for="">Score</label>
                <input type="number" class="form-control" name="score" placeholder="Score">
            </div>
            <div class="form-group mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection