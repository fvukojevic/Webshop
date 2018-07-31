@extends('layouts.app')

@section('content')
  <div class="card">
      <div class="card-header">
          <h1>Welcome to the profile page of <strong>{{auth()->user()->username}}</strong></h1>
      </div>
      <div class="card-body">
        <br>
        <h3><strong>Name : </strong>{{auth()->user()->name}}</h3>
        <br>
        <h3><strong>Email : </strong>{{auth()->user()->email}}</h3>
        <br>
      </div>
      <div class="card-footer">
        <a href="{{ route('profile.edit', ['id' => auth()->user()->id]) }}" class="btn btn-default">Edit Profile</a>
        <a class="btn btn-warning" href="{{ route('profile.pwupdate', ['id' => auth()->user()->id]) }}">Promjena lozinke</a>
        <a class="btn btn-success" href="{{route('profile.orders')}}" >Moje narudžbe</a>
      </div>
  </div>
@endsection
