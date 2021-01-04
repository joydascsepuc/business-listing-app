@extends('layouts.app')

@section('content')
    <h2>Create Listing Page</h2>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form class="form" action="/listings" method="post">
                @csrf
                <label for="name" class="form-label">Listing Name</label>
                <input type="text" name="name" class="form-control">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control">
                <label for="website" class="form-label">Website</label>
                <input type="text" name="website" class="form-control">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" class="form-control">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control" cols="3" name="bio" id="bio"></textarea>
                <br>
                <button class="btn btn-primary btn-block">Submit Data</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>

@endsection
