@extends('layouts.master')

@section('title')
  PM Result
@endsection

@section('content')
    <h2>Australian Prime Ministers</h2>
    <h3>Results</h3>

   

    @if (!empty($pms))
    <table class="bordered">
            <thead>
            <tr><th>No.</th><th>Name</th><th>From</th>
            <th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
            </thead>
        <tbody>
        
        
        @foreach ($pms as $pm)
        
            <tr><td>{{$pm['index']}}</td>
                <td>{{$pm['name']}}</td>
                <td>{{$pm['from']}}</td>
                <td>{{$pm['to']}}</td>
                <td>{{$pm['duration']}}</td>
                <td>{{$pm['party']}}</td>
                <td>{{$pm['state']}}</td></tr>
        @endforeach

    @endif

    @if (!empty($pms))
    Search for:
    {{$name}}
    {{$year}}
    {{$state}}

    </tbody>
    </table>
    @endif
    
    <a href='https://s5128104.elf.ict.griffith.edu.au/webAppDev/week4/assoc-laravel/public/'>Link Button</a>
    
@endsection