@extends('frontend.layout.main')
@section('main-container')
      <section class="upper" id="upper">
        <div class="content">
        <h3>Dairy Products</h3>
        <p><a href="{{url('/')}}">Home >> </a>Dairy Products</p>
      </div>
    </section>
        <section class="products" id="products">
          <h1 class="heading1">Trusted<span>Dairy products</span></h1>
          <div class="swiper product-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide box">
                <img src="{{url('frontend/Assets/dairy/butter.jpeg')}}" alt="" />
                <h3>Butter</h3>
                <div class="price">Rs 240/-</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Butter">
                    <input type="hidden" name="price" value="240">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
              </div>
    
              <div class="swiper-slide box">
                <img src="{{url('frontend/Assets/dairy/cheese.jpeg')}}" alt="" />
                <h3>Cheese</h3>
                <div class="price">Rs 340/-</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
    
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Cheese">
                    <input type="hidden" name="price" value="340">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
              </div>
    
              <div class="swiper-slide box">
                <img src="{{url('frontend/Assets/dairy/yogurt.webp')}}" alt="" />
                <h3>Yogurt</h3>
                <div class="price">Rs  140/-</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-start"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Yogurt">
                    <input type="hidden" name="price" value="140">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/dairy/blueband.jpeg')}}" alt="" />
              <h3>Margarine</h3>
              <div class="price">Rs  170/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-start"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Margarine">
                    <input type="hidden" name="price" value="170">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
          </div>

          <div class="swiper product-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide box">
                <img src="{{url('frontend/Assets/dairy/milk.jpeg')}}" alt="" />
                <h3>Milk</h3>
                <div class="price">Rs 200 per liter/-</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Milk">
                    <input type="hidden" name="price" value="200">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
              </div>
    
              <div class="swiper-slide box">
                <img src="{{url('frontend/Assets/dairy/icecream.jpeg')}}" alt="" />
                <h3>icecream</h3>
                <div class="price">Rs 240 per liter/-</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
    
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Icecream">
                    <input type="hidden" name="price" value="240">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
              </div>
          </div>
          </div>
        </section>
 @endsection