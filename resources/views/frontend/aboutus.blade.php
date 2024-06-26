
@extends('frontend.layout.main')
@section('main-container')

		  <section class="upper" id="upper">
			<div class="content">
			<h3>About Us</h3>
			<p><a href="{{url('/')}}">Home >> </a>About Us</p>
		  </div>
		</section>
		  <div class = "section">
			<div class = "container-box">
				<div class = "content-section">
					<div class = "title">
						<h1 style = "font-family: 'Poppins', sans-serif;">
							About Us
						</h1>
					</div>
					<div class = "content">
						<p>If you are looking for farm fresh fruits and vegetables, world-class breads, top-quality pulses
			  and food grains, dairy products, then, <b>Fresh Cart</b> has got you covered.
			  No more getting stuck in traffic jams, paying for parking, standing in long queues and carrying heavy bags- get everything you need,
			  when you need, right at your doorstep. Right from fresh fruits and vegetables, rice and dals, meat and dairy products to packaged products-we have it all.
			  Choose from a wide range of options in every category, exclusively handpicked to help you find the best quality available at lowest prices.
			  Select a time slot for delivery and your order will be delivered right to your doorstep anywhere in Pakistan.
							Shopping online is now easy as every product on your monthly shopping list,is now available online at <b>FreshCart</b>.
							<br>
							<br>
							To go to the home page, click on the FreshCart Icon.
							<br>
							<br>
							Get in touch with us through the popular social media platforms.
						</p>
					</div>
				</div>

					<div class = "image-section">
                    <a href = "{{url('/')}}">
                        <img src = "{{url('frontend/Assets/FreshCart.png')}}" alt = 'FreshCart' style = 'cursor: pointer;'>
                    </a>
                </div>
			</div>
			</div>

@endsection