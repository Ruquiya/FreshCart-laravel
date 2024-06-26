@extends('frontend.layout.main')
@section('main-container')
<body>
      <section class="upper" id="upper">
        <div class="content">
        <h3>Meat</h3>
        <p><a href="{{url('/')}}">Home >> </a>Meat</p>
      </div>
    </section>
      <section class="products" id="products">
        <h1 class="heading1">Fresh<span>Meat</span></h1>
        <div class="swiper product-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/meat/chickenwhole.jpeg')}}" alt="" />
              <h3>Whole Chicken</h3>
              <div class="price">Rs 430 per kg/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
  
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Whole Chicken">
                    <input type="hidden" name="price" value="430">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/meat/chickenleg.webp')}}" alt="" />
              <h3>chicken Leg pieces</h3>
              <div class="price">Rs 440 per kg/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="chicken Leg piece">
                    <input type="hidden" name="price" value="440">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
          </div>
          <div class="swiper-slide box">
            <img src="{{url('frontend/Assets/meat/chickenminced.jpeg')}}" alt="" />
            <h3>Minced Chicken</h3>
            <div class="price">Rs 510 per kg/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Minced Chicken">
                    <input type="hidden" name="price" value="510">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>

        </div>
        <div class="swiper product-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/meat/beefribs.webp')}}" alt="" />
              <h3>Beef Ribs</h3>
              <div class="price">Rs 660/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Beef Ribs">
                    <input type="hidden" name="price" value="660">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/meat/bonelessbeaf.jpeg')}}" alt="" />
              <h3>Boneless Beef</h3>
              <div class="price">Rs 620/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
  
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Boneless Beef">
                    <input type="hidden" name="price" value="620">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/meat/beefminced.jpeg')}}" alt="" />
              <h3>Minced Beef</h3>
              <div class="price">Rs 530/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Minced Beef">
                    <input type="hidden" name="price" value="530">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
        </div>
      </section>
 @endsection
