
@extends('frontend.layout.main')
@section('main-container')

          <section class="upper" id="upper">
          <div class="content">
          <h3>Contact Us</h3>
          <p><a href="{{url('/')}}">Home >> </a>Contact</p>
        </div>
      </section>
        <section class="contact">
           <div class="icon-container">
             <div class="icons">
              <i class="fas fa-phone"></i>
              <h3>Our Number</h3>
              <p>+92 9876543210</p>
              <p>+92 0334123567</p>
            </div>
            <div class="icons">
              <i class="fas fa-envelope"></i>
              <h3>Our Email</h3>
              <p>abc@gmail.com</p>
              <p>123@gmail.com</p>
            </div>
            <div class="icons">
              <i class="fas fa-map-marker-alt"></i>
              <h3>Our Address</h3>
              <p>Islamabad, Pakistan - 00403</p>
            </div>
          </div>
          <div class="row">
            
            <form action="">
              <h3>Get in Touch</h3>
              <div class="inputbox">
                <input type="text" placeholder="Enter Your Name" class="box">
                <input type="email" placeholder="Enter Your Email" class="box">
              </div>
              <div class="inputbox">
                <input type="number" placeholder="Enter Your Number" class="box">
                <input type="text" placeholder="Enter Your Text" class="box">
              </div>
              <textarea placeholder="Your Message" cols="30" rows="10"></textarea>
              <input type="submit"  value="send message" class="btn">
            </form>
            <iframe class="map" src="{{url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425290.65516825527!2d73.08610799999997!3d33.616116250000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd07891722f%3A0x6059515c3bdb02b6!2sIslamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!5e0!3m2!1sen!2s!4v1714160562908!5m2!1sen!2s')}}"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </section>
      </section>
@endsection