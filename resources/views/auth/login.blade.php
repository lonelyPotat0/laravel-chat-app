@extends('layouts.app')

@section('content')
    @push('styles')
        <link href="{{ asset('css/signup.css') }}" rel="stylesheet">

        <div class="col-md-6 mx-auto text-center">
            <div class="header-title">
                <h1 class="wv-heading--title">
                    Check out — it’s free!
                </h1>
                <h2 class="wv-heading--subtitle">
                    Lorem ipsum dolor sit amet! Neque porro quisquam est qui do dolor amet, adipisci velit...
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="myform form ">
                    <form action="{{ route('login') }}" method="post" name="login">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="username" class="form-control my-input" id="name" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" min="0" name="password" id="password" class="form-control my-input"
                                placeholder="Password">
                        </div>
                        <div class="text-center form-group">
                            <button type="submit" class=" btn btn-block send-button tx-tfm">Login</button>
                        </div>
                    </form>

                    <div class="col-md-12 ">
                        <div class="login-or">
                            <hr class="hr-or">
                            <span class="span-or">or</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <a class="btn btn-block g-button" href=" {{ route ('signup') }}">
                            <i class="fa fa-google"></i> Go to signup
                        </a>
                    </div>

                </div>
            </div>
        </div>
    @endsection
