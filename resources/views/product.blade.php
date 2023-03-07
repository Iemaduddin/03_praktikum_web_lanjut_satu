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
<div id="services" class="our-services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="left-image">
                    <img src="{{url('assets/images/services-left-image.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="section-heading">
                    <h2>Grow your website with our <em>SEO</em> service &amp; <span>Project</span> Ideas</h2>
                    <p>Space Dynamic HTML5 template is free to use for your website projects. However, you are not permitted to redistribute the template ZIP file on any CSS template collection websites. Please contact us for more information. Thank you for your kind cooperation.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="first-bar progress-skill-bar">
                            <h4>Website Analysis</h4>
                            <span>84%</span>
                            <div class="filled-bar"></div>
                <div class="full-bar"></div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="second-bar progress-skill-bar">
                <h4>SEO Reports</h4>
                <span>88%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="third-bar progress-skill-bar">
                <h4>Page Optimizations</h4>
                <span>94%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<br><br>
@extends('layouts/footer')