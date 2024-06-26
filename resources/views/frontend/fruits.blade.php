@extends('frontend.layout.main')

@section('main-container')
<section class="upper" id="upper">
    <div class="content">
        <h3>Fresh Fruits</h3>
        <p><a href="{{ url('/') }}">Home >> </a>Fruits</p>
    </div>
</section>

<section class="products" id="products">
    <h1 class="heading1">Fresh <span>Fruits</span></h1>
    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/fruits/Apple.png') }}" alt="" />
                <h3>Apple</h3>
                <div class="price">Rs 150 per kg/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Apple">
                    <input type="hidden" name="price" value="150">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/fruits/mango.jpg') }}" alt="" />
                <h3>Mango</h3>
                <div class="price">Rs 160 per kg/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Mango">
                    <input type="hidden" name="price" value="160">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/fruits/strawberry.jpeg') }}" alt="" />
                <h3>Strawberry</h3>
                <div class="price">Rs 190 per kg/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Strawberry">
                    <input type="hidden" name="price" value="190">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/fruits/dates.webp') }}" alt="" />
                <h3>Dates</h3>
                <div class="price">Rs 50 per kg/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="ADATES">
                    <input type="hidden" name="price" value="50">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="swiper-slide box">
                <img src="{{ url('frontend/Assets/fruits/melon.webp') }}" alt="" />
                <h3>Sweet Melon</h3>
                <div class="price">Rs 100 per kg/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Sweet Melon">
                    <input type="hidden" name="price" value="100">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide box">
                        <img src="{{ url('frontend/Assets/fruits/Banana.avif') }}" alt="" />
                        <h3>Banana</h3>
                        <div class="price">Rs 130 per dozen/-</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="item_name" value="Banana">
                    <input type="hidden" name="price" value="130">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                        </form>
                    </div>

                    <div class="swiper-slide box">
                        <img src="{{ url('frontend/Assets/fruits/Orange.jpeg') }}" alt="" />
                        <h3>Orange</h3>
                        <div class="price">Rs 90 per dozen/-</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="item_name" value="Orange">
                    <input type="hidden" name="price" value="90">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                        </form>
                    </div>

                    <div class="swiper-slide box">
                        <img src="{{ url('frontend/Assets/fruits/coconut.jpeg') }}" alt="" />
                        <h3>Coconut</h3>
                        <div class="price">Rs 120 per dozen/-</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="item_name" value="Coconut">
                    <input type="hidden" name="price" value="120">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
