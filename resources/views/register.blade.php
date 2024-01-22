@extends('layouts.app')
@section('title', 'Registration')
@section('content')
        <section class="register-form">
            <div class="imgBx">
                <img src="{{ asset('img/registration.jpg') }}">
            </div>
            <div class="contentBx">
                <div class="formBx">
			        @if(Session::has('success'))
            			<div class="alert alert-success" role="alert">
                			{{Session::get('success')}}
            			</div>
        		    @endif
                        <form action="{{route('register')}}" method="POST">
			            @csrf
                            <h2>Register</h2>
                            <div class="inputBx">
                                <span>First Name</span>
                                <input type="text" name="firstName">
                            </div>
                            <div class="inputBx">
                                <span>Last Name</span>
                                <input type="text" name="lastName">
                            </div>
                            <div class="inputBx">
                                <span>Primary Email</span>
                                <input type="text" name="primaryEmail">
                                <h4>Please note that your primary email will be your user name when signing into your BDI account.<br></h4>
                            </div>
                            <div class="update">
                                <label><input type="checkbox" name="" >I would like to receive updates about PMI products, services, and events.</label>
                            </div>
                            <br>
                        <h4>TELL US MORE ABOUT YOU</h4>
                        <p>We want to better understand you so we can customize your experience, deliver relevant content and develop products to support you at every stage of your career.</p>
                        <p>Please tell us more about yourself:</p>
                        <br>

                        <div class="inputBx">
                            <span>Company Name</span>
                            <input type="text" name="companyName">
                        </div>
                        <div class="inputBx">
                            <span>What year were you born? (YYYY)</span>
                            <input type="number" min="1900" max="2099" step="1" value="1990" name="yearBorn"/>
                        </div>
                        <div class="inputBx">
                            <span>How many total years of full-time work experience do you currently have?</span>
                            <input type="number" min="0" max="50" step="1" value="0" name="fulltimeExp"/>
                        </div>
                        <div class="inputBx">
                            <span>How many years of experience do you have involve in data analysis project that last over 4 weeks?</span>
                            <input type="number" min="0" max="50" step="1" value="0" name="yearExp"/>
                        </div>
                        <div class="inputBx">
                            <span>Which best describes how you view big data as it relates to your career?</span>
                            <input type="text" name="descBigdata">
                        </div>
                        <div class="inputBx">
                            <span>Primary Organization Focus (optional)</span>
                            <input type="text" name="orgFocus">
                        </div>
                        <div class="inputBx">
                            <span>Area of Focus (optional)</span>
                            <input type="text" name="areaFocus">
                        </div>
                        <div class="inputBx">
                            <span>Password</span>
                            <input type="password" name="password">
                            5-50 characters. Can include any letter, number, or special character excluding spaces or angle brackets
                        </div>
                        <div class="inputBx">
                            <span>Confirm Password</span>
                            <input type="password" name="confirmPassword">
                        </div>
                        <div class="inputBx">
                            <span>Security Question</span>
                            <input type="text" name="secQuestion">
                        </div>
                        <div class="inputBx">
                            <span>Answer</span>
                            <input type="text" name="secAnswer">
                        </div>
                        <div class="update">
                            <label><input type="checkbox" name="" >I have read and agree to BDI's Privacy Policy.</label>
                        </div>



                        <div class="inputBx">
                            <input type="submit" value="Sign up" name="">
                        </div>
                        <div class="inputBx">
                            <p>Need help? <a href="#">Contact Us</a></p>
                        </div>

                        <h3>This will create your login credentials.</h3>
                        <h3>Already have a BDI username and password?<a href="{{('login')}}">Log In</a></h3>
                    </form>
                    
                </div>
            </div>
        </section>
@endsection