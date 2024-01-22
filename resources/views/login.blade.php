@extends('layouts.app')
@section('title', 'Log in')
@section('content')
<section class="login-form">
            <div class="imgBx">
                <img src="/img/bg.jpg">
            </div>
            <div class="contentBx">
                <div class="formBx">
                    <h2>Login</h2>
                    <form action="{{route('login')}}" method="POST">
		@csrf
                        <div class="inputBx">
                            <span>Email</span>
                            <input type="email" name="email">
                        </div>
                        <div class="inputBx">
                            <span>Password</span>
                            <input type="password" name="password">
                        </div>
                        <div class="remember">
                            <label><input type="checkbox" name="" >Remember me </label>
                        </div>
                        <div class="inputBx">
                            <input type="submit" value="Sign in" name="">
                        </div>
                        <div class="inputBx">
                            <p>Need help? <a href="#">Contact Us</a></p>
                        </div>
                        <div class="inputBx">
                            <p>Don't have an account? <a href="{{('register')}}">Signup</a></p>
                        </div>
                    </form>
                    <h3>Login with social media</h3>
                    <ul class="sci">
                        <li><img src="img/facebook.png"></li>
                        <li><img src="img/google.png"></li>
                        <li><img src="img/linkedin.png"></li>
                    </ul>
                </div>
            </div>
        </section>
@endsection