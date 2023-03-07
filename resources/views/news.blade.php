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
                <li class="scroll-to-section"><a href="{{ url('news') }}" class="Active">News</a></li> 
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
<div id="blog" class="our-blog section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                <div class="section-heading">
                    <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
              <img src="assets/images/blog-dec.png" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
            <div class="left-image">
                <a href="#"><img src="assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
                <div class="info">
                    <div class="inner-content">
                        <ul>
                            <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>
                            <li><i class="fa fa-users"></i> TemplateMo</li>
                            <li><i class="fa fa-folder"></i> Branding</li>
                        </ul>
                        <a href="#"><h4>SEO Agency &amp; Digital Marketing</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...</p>
                        <div class="main-blue-button">
                            <a href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
            <div class="right-list">
                <ul>
              <li>
                  <div class="left-content align-self-center">
                      <span><i class="fa fa-calendar"></i> 18 Mar 2021</span>
                      <a href="#"><h4>New Websites &amp; Backlinks</h4></a>
                      <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                    </div>
                    <div class="right-image">
                        <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="left-content align-self-center">
                        <span><i class="fa fa-calendar"></i> 14 Mar 2021</span>
                        <a href="#"><h4>SEO Analysis &amp; Content Ideas</h4></a>
                        <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                    </div>
                    <div class="right-image">
                        <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="left-content align-self-center">
                        <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                        <a href="#"><h4>SEO Tips &amp; Digital Marketing</h4></a>
                        <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                    </div>
                    <div class="right-image">
                        <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
@extends('layouts/footer')