@extends('layouts/header')
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ url('home') }}" class="logo">
                <h4>AROBIDSH<span> ID</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
                <li class="scroll-to-section"><a href="{{ url('home') }}">Home</a></li>
                <li class="scroll-to-section"><a href="{{ url('about-us') }}">About Us</a></li>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle  text-dark" data-bs-toggle="dropdown">Product</a>
                  <div class="dropdown-menu m-2">
                      <a href="{{url('/product/web')}}" class="dropdown-item">Website Analysis</a>
                      <a href="{{url('/product/seo')}}" class="dropdown-item">SEO Reports</a>
                      <a href="{{url('/product/page')}}" class="dropdown-item">Page Optimizations</a>
                  </div>
              </div>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">Program</a>
                  <div class="dropdown-menu m-2">
                      <a href="{{url('/program/seo-analysis')}}" class="dropdown-item">SEO Analysis</a>
                      <a href="{{url('/program/website-reporting')}}" class="dropdown-item">Website Reporting</a>
                      <a href="{{url('/program/performance-tests')}}" class="dropdown-item">Performance Tests</a>
                      <a href="{{url('/program/data-analysis')}}" class="dropdown-item">Data Analysis</a>
                  </div>
              </div>
                <li class="scroll-to-section"><a href="{{ url('news') }}">News</a></li> 
                <li class="scroll-to-section"><a href="{{ url('about-us') }}">Message Us</a></li> 
                <li class="scroll-to-section"><div class="main-red-button"><a href="{{('contact-us')}}">Contact Now</a></div></li> 
              </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
    </html>
  </header>

<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <div class="section-heading">
                    <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore et dolores</p>
                    <div class="phone-info">
                        <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="#">010-020-0340</a></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                            </fieldset>
                        </div>
                    </div>
                    <div class="contact-dec">
                        <img src="assets/images/contact-decoration.png" alt="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@extends('layouts/footer')