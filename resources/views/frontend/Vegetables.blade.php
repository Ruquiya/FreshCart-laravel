@extends('frontend.layout.main')
@section('main-container')
      <section class="upper" id="upper">
        <div class="content">
        <h3>Fresh Vegetables</h3>
        <p><a href="{{url('/')}}">Home >> </a>Vegetables</p>
      </div>
    </section>
      <section class="products" id="products">
        <h1 class="heading1">Fresh<span>Vegetables</span></h1>
        <div class="swiper product-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/vegetables/Tomato.jpeg')}}" alt="" />
              <h3>Tomato</h3>
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
                    <input type="hidden" name="item_name" value="Tomato">
                    <input type="hidden" name="price" value="110">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/vegetables/onion.jpeg')}}" alt="" />
              <h3>Onion</h3>
              <div class="price">Rs 200 per kg/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
  
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Onion">
                    <input type="hidden" name="price" value="200">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/vegetables/potato.jpg')}}" alt="" />
              <h3>Potato</h3>
              <div class="price">Rs 110 per kg/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Potato">
                    <input type="hidden" name="price" value="110">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
          </div>
          <div class="swiper-slide box">
            <img src="{{url('frontend/Assets/vegetables/Carrot.png')}}" alt="" />
            <h3>Carrot</h3>
            <div class="price">Rs 110 per kg/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Carrot">
                    <input type="hidden" name="price" value="110">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/vegetables/cucumber.webp')}}" alt="" />
              <h3>Cucumber</h3>
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
                    <input type="hidden" name="item_name" value="Cucumber">
                    <input type="hidden" name="price" value="50">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
              </div>
              <div class="swiper-slide box">
                <img src="{{url('frontend/Assets/vegetables/ladyfinger.webp')}}" alt="" />
                <h3>Lady Finger</h3>
                <div class="price">Rs 90 per kg/-</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Lady Finger">
                    <input type="hidden" name="price" value="90">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="swiper product-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/vegetables/corainder.jpeg')}}" alt="" />
              <h3>corainder</h3>
              <div class="price">Rs 70/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Coriander">
                    <input type="hidden" name="price" value="70">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/vegetables/mint.jpeg')}}" alt="" />
              <h3>Mint</h3>
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
                    <input type="hidden" name="item_name" value="Mint">
                    <input type="hidden" name="price" value="30">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/vegetables/curryleaves.webp')}}" alt="" />
              <h3>Curry Leaves</h3>
              <div class="price">Rs 40/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Curry Leaves">
                    <input type="hidden" name="price" value="40">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/vegetables/parsley.jpeg')}}" alt="" />
              <h3>parsley</h3>
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
                    <input type="hidden" name="item_name" value="Parsley">
                    <input type="hidden" name="price" value="80">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
        </div>
      </section>

 @endsection