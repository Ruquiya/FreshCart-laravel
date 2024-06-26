@extends('frontend.layout.main')

@section('main-container')
<section class="upper" id="upper">
    <div class="content">
        <h3>Bakery</h3>
        <p><a href="{{ url('/') }}">Home >> </a>Bakery</p>
    </div>
</section>
<section class="products" id="products">
    <h1 class="heading1">Trusted <span>bakery products</span></h1>
    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/bakery/bread.jpg') }}" alt="" />
                <h3>Bread</h3>
                <div class="price">Rs 110/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Bread">
                    <input type="hidden" name="price" value="110">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/bakery/eggs.webp') }}" alt="" />
                <h3>Eggs</h3>
                <div class="price">Rs 200 per dozen/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Eggs">
                    <input type="hidden" name="price" value="200">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/bakery/cakerusk.jpeg') }}" alt="" />
                <h3>Cake Rusk</h3>
                <div class="price">Rs 90/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Cake Rusk">
                    <input type="hidden" name="price" value="90">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/bakery/cookies.jpg') }}" alt="" />
                <h3>Cookies</h3>
                <div class="price">Rs 110/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Cookies">
                    <input type="hidden" name="price" value="110">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/bakery/biscuits.jpeg') }}" alt="" />
                <h3>Biscuits</h3>
                <div class="price">Rs 180 per kg/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Biscuits">
                    <input type="hidden" name="price" value="180">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/bakery/pizza.png') }}" alt="" />
                <h3>Pizza</h3>
                <div class="price">Rs 90/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Pizza">
                    <input type="hidden" name="price" value="90">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/bakery/patties.jpg') }}" alt="" />
                <h3>Chicken Patties</h3>
                <div class="price">Rs 30/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Chicken Patties">
                    <input type="hidden" name="price" value="30">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/bakery/chickenbread.webp') }}" alt="" />
                <h3>Chicken Bread</h3>
                <div class="price">Rs 160/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Chicken Bread">
                    <input type="hidden" name="price" value="160">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/bakery/sandwich.jpeg') }}" alt="" />
                <h3>Sandwich</h3>
                <div class="price">Rs 80/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Sandwich">
                    <input type="hidden" name="price" value="80">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
