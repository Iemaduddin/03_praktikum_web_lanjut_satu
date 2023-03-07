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
              <li class="scroll-to-section"><a href="{{ url('about-us') }}" class="Active">About Us</a></li>
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

<div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="assets/images/about-left-image.png" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="assets/images/service-icon-01.png" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>Data Analysis</h4>
                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="assets/images/service-icon-02.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Data Reporting</h4>
                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="assets/images/service-icon-03.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Web Analytics</h4>
                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="assets/images/service-icon-04.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>SEO Suggestions</h4>
                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @extends('layouts/footer')