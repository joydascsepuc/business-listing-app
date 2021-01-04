@extends('layouts.app')

@section('content')
    <h2>Edit Listing Page</h2>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form class="form" action="/listings/{{$data->id}}" method="post">
                @csrf
                @method('PUT')
                <label for="name" class="form-label">Listing Name</label>
                <input type="text" name="name" class="form-control" value="{{$data->name}}">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{$data->address}}">
                <label for="website" class="form-label">Website</label>
                <input type="text" name="website" class="form-control" value="{{$data->website}}">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" class="form-control" value="{{$data->email}}">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{$data->phone}}">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control" cols="3" name="bio">{{$data->bio}}</textarea>
                <br>
                <button class="btn btn-primary btn-block">Update Data</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>

@endsection
