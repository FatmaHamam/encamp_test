@extends('layouts.app')


@section('body') 
    <div class="container">
        <h1 style="margin-top:30px;">Hornbill Festival Leads</h1>
        <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone Number</th> 
                <th>Email</th>
                <th>No. of Days</th>
                <th>No. of People</th>
                <th>Message</th>
            </tr>
            </thead>
        
    @if(count($leads)>0)
        @foreach($leads as $lead)
        <tbody>
            <tr>
                <td>{{ $lead->id }}</td>
                <td>{{ $lead->name }}</td>
                <td>{{ $lead->phno }}</td>
                <td>{{ $lead->email }}</td>
                <td>{{ $lead->dayswanted }}</td>
                <td>{{ $lead->people }}</td>
                <td>{{ $lead->message }}</td>
            </tr>
        </tbody>
            @endforeach
            {{$leads->links()}}
            </table>
    @else
        <p>No posts found</p>
    @endif
</div>
<br><br><br>
@endsection