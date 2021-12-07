@extends('layouts.app')

@section('title-of-page')
    Admin
@endsection

@section('content')
    <h1 class="display-5 fw-bold text-center">Admin</h1>
    @foreach($data as $elem)
            <div class="container py-3 alert alert-dark">
                <div class="row py-3">
                    <div class="col border border-info mx-2">
                        <h5>{{ $elem->firstname }}</h5>
                    </div>
                    <div class="col border border-info mx-2">
                        <h5>{{ $elem->lastname }}</h5>
                    </div>
                    <div class="col border border-info mx-2">
                        <h5>{{ $elem->nickname }}</h5>
                    </div>
                    <div class="col border border-info mx-2">
                        <h5>{{ $elem->email }}</h5>
                    </div>
                    <div class="col border border-info mx-2">
                        <h5>{{ $elem->topic }}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col border border-info mx-2">
                        <h5>{{ $elem->message }}</h5>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-2 border border-info mx-2">
                        <h6>{{ $elem->created_at }}</h6>
                    </div>
                </div>
            </div>
    @endforeach
@endsection
