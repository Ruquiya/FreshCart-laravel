@extends('frontend.layout.main')
@section('main-container')

      <section class="upper" id="upper">
        <div class="content">
        <h3>Everyday Grocery</h3>
        <p><a href="{{url('/')}}">Home >> </a>Grocery</p>
      </div>
    </section>
      <section class="products" id="products">
        <h1 class="heading1">Trusted<span>Grocery</span></h1>
        <div class="swiper product-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/everydaygrocery/flour.jpeg')}}" alt="" />
              <h3>Flour</h3>
              <div class="price">Rs 120 per kg/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Flour">
                    <input type="hidden" name="price" value="120">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/everydaygrocery/gramflour.jpeg')}}" alt="" />
              <h3>GramFlour</h3>
              <div class="price">Rs 80 per kg/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
  
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="GramFlour">
                    <input type="hidden" name="price" value="80">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/everydaygrocery/whiteflour.jpg')}}" alt="" />
              <h3>White Flour</h3>
              <div class="price">Rs 70 per kg/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="White Flour">
                    <input type="hidden" name="price" value="70">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
          </div>
        </div>
        <div class="swiper product-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/everydaygrocery/pulses.jpeg')}}" alt="" />
              <h3>Pulses</h3>
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
                    <input type="hidden" name="item_name" value="Pulses">
                    <input type="hidden" name="price" value="90">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/everydaygrocery/rice.jpg')}}" alt="" />
              <h3>Rice</h3>
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
                    <input type="hidden" name="item_name" value="Rice">
                    <input type="hidden" name="price" value="200">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
  
            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/everydaygrocery/sugar.jpg')}}" alt="" />
              <h3>Sugar</h3>
              <div class="price">Rs 140/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Sugar">
                    <input type="hidden" name="price" value="140">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="swiper-slide box">
              <img src="{{url('frontend/Assets/everydaygrocery/salt.jpeg')}}" alt="" />
              <h3>Salt</h3>
              <div class="price">Rs 130/-</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_name" value="Salt">
                    <input type="hidden" name="price" value="130">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
        </div>
      </section>
 @endsection