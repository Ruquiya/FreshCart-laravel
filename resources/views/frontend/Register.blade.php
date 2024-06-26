@extends('frontend.layout.main')

@section('main-container')
<div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
        <div class="front">
            <img src="{{url('frontend/Assets/FreshCart.png')}}" alt="">
        </div>
        <div class="back">
            <img src="{{url('frontend/Assets/FreshCart.png')}}" alt="">
        </div>
    </div>
    <div class="forms">
        <div class="form-content">
            <div class="login-form">
                <div class="title">Login</div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="text"><a href="#">Forgot password?</a></div>
                        <div class="button input-box">
                            <input type="submit" value="Submit">
                        </div>
                        <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
                    </div>
                </form>
            </div>
            <div class="signup-form">
                <div class="title">Signup</div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-phone"></i>
                            <input type="number" name="phone" placeholder="Enter your phone" required>
                        </div>
                        <div class="button input-box">
                            <input type="submit" value="Submit">
                        </div>
                        <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
