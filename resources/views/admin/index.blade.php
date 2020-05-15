@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adminstrator Dashboard</div>
                
               
                <div class="card-body">
    <h1>List Of Register Users</h1>
    
    @if(count($users) > 0)
        @foreach($users as $user)
            <div class="well">
                <div class="row">
                    
                    <div class="col-md-8 col-sm-8">
                        <ul class="list-group mt-3"> 
                           
                            
                            
                            <li class="list-group-item"><h4>Username:</h4> <h4>{{$user->username}}</h4></li>
                            <li class="list-group-item"> <h4>Upline Referal Id:</h4> <h4>{{$user->referrer_id}}</h4></li>
                            
                            
                         
                        </ul>
                        
                    </div>
                </div>
            </div>
        @endforeach
       
    @else
        <p>No users found</p>
    @endif
    
@endsection