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
<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2>See What Our Agency <em>Offers</em> &amp; What We <span>Provide</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <a href="#">
                    <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="hidden-content">
                            <h4>SEO Analysis</h4>
                            <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                        </div>
                        <div class="showed-content">
                            <img src="{{url('assets/images/portfolio-image.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="#">
                    <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="hidden-content">
                            <h4>Website Reporting</h4>
                            <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                        </div>
                        <div class="showed-content">
                            <img src="{{url('assets/images/portfolio-image.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="#">
                    <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="hidden-content">
                            <h4>Performance Tests</h4>
                            <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                        </div>
                        <div class="showed-content">
                            <img src="{{url('assets/images/portfolio-image.png')}}" alt="">
                        </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-sm-6">
        <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="hidden-content">
                    <h4>Data Analysis</h4>
                    <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                </div>
                <div class="showed-content">
                    <img src="{{url('assets/images/portfolio-image.png')}}" alt="">
                </div>
            </div>
        </a>
    </div>
</div>
</div>
</div>
<br><br><br><br><br>
@extends('layouts/footer')