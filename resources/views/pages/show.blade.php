@extends('layouts.app')

@section('content')
    <h2>View Listing</h2>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <a href="{{ route('homePage') }}" class="btn btn-primary">Go Back</a>
            <form class="form">
                @csrf
                <label for="name" class="form-label">Listing Name</label>
                <input type="text" name="name" class="form-control" value="{{$data->name}}" disabled="true">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{$data->address}}" disabled="true">
                <label for="website" class="form-label">Website</label>
                <input type="text" name="website" class="form-control" value="{{$data->website}}" disabled="true">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" class="form-control" value="{{$data->email}}" disabled="true">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{$data->phone}}" disabled="true">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control" cols="3" name="bio" disabled="true">{{$data->bio}}</textarea>
                <br>
            </form>
        </div>
        <div class="col-2"></div>
    </div>

@endsection
