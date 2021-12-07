@extends('layouts.app')

@section('title-of-page')
    Form
@endsection

@section('content')
    <h6>Пользователь: {{ session()->get('nickname') }}</h6>
    <h1 class="display-5 fw-bold text-center">Form</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('problem-form') }}" method="post">
        @csrf
        <div class="container px-5">
            <div class="row px-5">
                <div class="col">
                    <label for="firstName">First name</label>
                    <input type="text" name="firstName" id="firstName" class="form-control">
                </div>
                <div class="col">
                    <label for="lastName">Last name</label>
                    <input type="text" name="lastName" id="lastName" class="form-control">
                </div>
            </div>
            <div class="row px-5">
                <div class="col py-3">
                    <label for="nickName">Nick name</label>
                    <input type="text" name="nickName" id="nickName" class="form-control">
                </div>
                <div class="col py-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="mail@example.com">
                </div>
            </div>
            <div class="row px-5">
                <div class="col-5">
                    <label for="topic">Them your problem</label>
                    <input type="text" name="topic" id="topic" class="form-control">
                </div>
            </div>
            <div class="row px-5">
                <div class="col py-3">
                    <label for="message">Describe your problem</label>
                    <textarea name="message" id="message" class="form-control"></textarea>
                </div>
            </div>
            <div class="row px-5">
                <div class="col">
                    <button type="submit" class="btn btn-primary py-2 px-5">SEND</button>
                </div>
            </div>
        </div>
    </form>
@endsection
