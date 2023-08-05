@extends('layouts.app')

@section('content')
<div class="text-center p-4 m-0">
    <h1>Class List from Controller</h1>
</div>
    <div class="p-4 pt-0">
        @foreach($students as $student)
        <div class="p-4 bg-info mb-2">
            <p> 
                {{ $student['id'] }}. 
                {{ $student['name'] }} 
                <a href="{{ route('studentdetails', ['id' => $student['id']]) }}">details</a> 
            </p>

            <p>
                @if($student['score'] >= 30)
                <span class="text-success">Congratulations my friend you scored {{ $student['score'] }} which is a pass mark</span>
                @else
                <span class="text-danger">Oops sorry, you scored {{ $student['score'] }} which is a fail mark</span>
                @endif
            </p>
        </div>
        @endforeach
    </div>
<!-- <h2>Static Class List</h2>
        <ol>
            <li>Mosongo Adina <a href="{{ route('studentdetails', ['id' => 11]) }}">details</a></li>
            <li>Formasit Chijoh <a href="{{ route('studentdetails', ['id' => 12]) }}">details</a></li>
            <li>Fongoh Martin <a href="{{ route('studentdetails', ['id' => 13]) }}">details</a></li>
            <li>Ndalegh Noela <a href="{{ route('studentdetails', ['id' => 14]) }}">details</a></li>
            <li>Nkwetakem Bruno <a href="{{ route('studentdetails', ['id' => 15]) }}">details</a></li>
            <li>Mbi-Enow Appelgryn <a href="{{ route('studentdetails', ['id' => 16]) }}">details</a></li>
        </ol> -->
@endsection