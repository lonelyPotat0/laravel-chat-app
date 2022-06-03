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
                    <form action="{{ route ('signup') }}" method="post" name="signup">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="username" class="form-control my-input" id="username" placeholder="Username" value="{{old('username')}}">
                        </div>
                        @error('username')
                            <p class="error_message">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <input type="text" name="name" class="form-control my-input" id="name" placeholder="Name" value="{{old('name')}}">
                        </div>
                        @error('name')
                            <p class="error_message">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <input type="password" min="0" name="password" id="password" class="form-control my-input" value="{{old('password')}}"
                                placeholder="Password">
                        </div>
                        @error('password')
                            <p class="error_message">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <input type="password" min="0" name="password_confirmation" id="password_confirmation" class="form-control my-input" value="{{old('password_confirmation')}}"
                                placeholder="Confirm password">
                        </div>
                        <div class="text-center form-group">
                            <button type="submit" class=" btn btn-block send-button tx-tfm">Create Your Free Account</button>
                        </div>

                        <div class="col-md-12 ">
                            <div class="login-or">
                               <hr class="hr-or">
                               <span class="span-or">or</span>
                            </div>
                         </div>
                         <div class="form-group">
                            <a class="btn btn-block g-button" href=" {{ route ('login') }}">
                            <i class="fa fa-google"></i> Go to signin
                            </a>
                         </div>

                        <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a
                                href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    @endsection
