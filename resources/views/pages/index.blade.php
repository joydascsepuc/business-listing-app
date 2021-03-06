@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Listings List</h3>
                    @if(count($listings) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Company Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listings as $list)
                                    <tr>
                                        <td><a href="/listings/{{$list->id}}">{{ $list->name }}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>You don't have any Listings Yet..</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
