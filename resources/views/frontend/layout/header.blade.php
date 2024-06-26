<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to FreshCart</title>
    <link rel="icon" href="{{ url('frontend/Assets/freshcart.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ url('frontend/Style/style.css') }}">
</head>
<body>
<header class="header">
    <a href="{{ url('/') }}" class="logo"><i class="fas fa-shopping-basket"></i> FreshCart</a>
    <nav class="navbar">
        <a href="{{ url('/') }}">Home</a>
        <a href="#products">Products</a>
        <a href="#categories">Categories</a>
        <a href="{{ url('/aboutus') }}">About Us</a>
        <a href="{{ url('/contactus') }}">Contact Us</a>
    </nav>
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>
    <form action="" class="search-form">
        <input type="text" id="search-box" placeholder="Search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>
    
    <div class="shopping-cart">
        @if(Auth::check())
            @if(Auth::user()->carts && Auth::user()->carts->isNotEmpty())
                @foreach(Auth::user()->carts as $cart)
                    <div class="box">
                        <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fas fa-trash"></button>
                        </form>
                        
                        <div class="content">
                            <h3>{{ $cart->item_name }}</h3>
                            <span class="price">Rs {{ $cart->price }}/-</span><br>
                            <span class="quantity">qty: {{ $cart->quantity }}</span>
                        </div>
                    </div>
                @endforeach
                <div class="total">Total: Rs {{ Auth::user()->carts->sum('price') }}</div>
                <a href="#" class="btn">Check Out</a>
            @else
                <div class="box">
                    <p>Your cart is empty.</p>
                </div>
            @endif
        @else
            <div class="box">
                <p>Please <a href="{{ route('login') }}">login</a> to see your cart.</p>
            </div>
        @endif
    </div>


<form action="" class="login-form">
    <h3>Login Now</h3>
    <p>Don't have an account? <a href="{{ url('/Register') }}">Create now</a></p>
</form>
</header>
</body>
</html>