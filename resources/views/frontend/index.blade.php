@extends('frontend.layout.main')
@section('main-container')
    <section class="home" id="home">
      <div class="content">
        <h3>Healthy <span>Organic </span>Products on your Cart</h3>
        <p>
          Filling your cart with healthy and clean daily supplies was never this easy.Fresh supplies delivered on your click at your door steps.
        </p>
        <a href="#categories" class="btn">shop now</a>
      </div>
    </section>
    <section class="products" id="products">
      <h1 class="heading">our <span>products</span></h1>
      <div class="swiper product-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="{{url('frontend/Assets/our product/bakery.jpeg')}}" alt="" />
            <h3>Bakery</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <a href="{{url('/bakery')}}" class="btn">add to cart</a>
          </div>

          <div class="swiper-slide box">
            <img src="{{url('frontend/Assets/our product/confectionery.jpg')}}" alt="" />
            <h3>Sweet Tooth</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>

            </div>
            <a href="{{url('/bakery')}}" class="btn">add to cart</a>
          </div>

          <div class="swiper-slide box">
            <img src="{{url('frontend/Assets/our product/pulses.jpeg')}}" alt="" />
            <h3>Sunrich Pulses</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="{{url('/grocery')}}" class="btn">add to cart</a>
        </div>
        <div class="swiper-slide box">
          <img src="{{url('frontend/Assets/our product/dairy.jpeg')}}" alt="" />
          <h3>Richcow</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="{{url('/dairy')}}" class="btn">add to cart</a>
          </div>
          <div class="swiper-slide box">
            <img src="{{url('frontend/Assets/our product/flour.jpeg')}}" alt="" />
            <h3>Richflour</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <a href="{{url('/grocery')}}" class="btn">add to cart</a>
            </div>
      </div>
      
      </div>
    </section>
      <section class="banner-container0">
        <div class="banner">
          <img src="{{url('frontend/Assets/banner/banner1.png')}}" alt="">
          <div class="content">
            <h3>Special Offers</h3>
            <p>Upto 25% off</p>
            <a herf="#" class="btn">Check out</a>
          </div>
        </div>
        <div class="banner">
          <img src="{{url('frontend/Assets/banner/banner2.png')}}" alt="">
          <div class="content">
            <h3>Limited Offers</h3>
            <p>Upto 35% off</p>
            <a herf="#" class="btn">Check out</a>
          </div>
        </div>
      </section>

    <section class="categories" id="categories">
      <h1 class="heading">product <span>categories</span></h1>
      <div class="box-container">
        <div class="box">
          <img
            src="{{url('frontend/Assets/category/fruits.webp')}}" alt=""style="width: 30rem; padding-top: 6rem"/>
          <h3>Fruits</h3>
          <p>upto 10% off</p>
          <a href="{{url('/fruits')}}"class="btn">shop now</a>
        </div>
        <div class="box">
          <img src="{{url('frontend/Assets/category/dairy.jpeg')}}" alt="" style="width: 30rem" />
          <h3>Dairy Products</h3>
          <p>upto 15% off</p>
          <a href="{{url('/dairy')}}" class="btn">shop now</a>
        </div>
        <div class="box">
          <img
            src="{{url('frontend/Assets/category/vegetable.jpg')}}" alt="" style="width: 30rem; padding-top: 3.5rem" />
          <h3>Vegetables</h3>
          <p>upto 10% off</p>
          <a href="{{url('/vegetable')}}" class="btn">shop now</a>
        </div>
        <div class="box">
          <img
            src="{{url('frontend/Assets/category/meat.png')}}" alt="" style="width: 30rem; padding-top: 8.5rem"/>
          <h3>Meat</h3>
          <p>upto 5% off</p>
          <a href="{{url('/meat')}}" class="btn">shop now</a>
        </div>
		<div class="box">
			<img
			  src="{{url('frontend/Assets/category/everydaygrocery.jpg')}}" alt="" style="width: 30rem; padding-top: 8.5rem" />
			<h3>Everyday Grocery</h3>
			<p>upto 2% off</p>
			<a href="{{url('/grocery')}}" class="btn">shop now</a>
		  </div>
		  <div class="box">
			<img
			  src="{{url('frontend/Assets/category/bakery.png')}}"  alt="" style="width: 30rem; padding-top: 8.5rem"/>
			<h3>Bakery</h3>
			<p>upto 7% off</p>
			<a href="{{url('/bakery')}}" class="btn">shop now</a>
		  </div>
      </div>
    </section>


@endsection
