   <!-- Header Section Start -->
    <header id="header-sticky" class="header-1">
      <div class="container">
        <div class="mega-menu-wrapper">
          <div class="header-main">
            <a href="{{ route('home') }}" class="logo">
              <img src="assets/img/logo/boss-logo.webp" alt="img" />
            </a>
            <div
              class="header-right d-flex justify-content-end align-items-center"
            >
              <div class="mean__menu-wrapper">
                <div class="main-menu">
                  <nav id="mobile-menu">
                    <ul>
                      <li class="active menu-thumb">
                        <a href="{{ route('home') }}">
                          Home
                         
                        </a>
                       
                      </li>
                   
                     <li>
                        <a href="javascript:void(0)">
                          Who We Are
                          <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                          <li><a href="{{ route('about-us') }}">About Us</a></li>
                          <li>
                            <a href="{{ route('our-team') }}">Our Team</a>
                          </li>
                         
                        </ul>
                      </li>
                     
                      <li>
                        <a href="{{ route('services') }}">
                          Solutions
                          <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                          <li><a href="{{ route('it-solutions') }}">IT Solutions</a></li>
                          <li>
                            <a href="{{ route('graphic-designing') }}">Graphic Designing</a>
                          </li>
                          <li>
                            <a href="{{ route('seo-optimization') }}">SEO Optimization</a>
                          </li>
                          <li>
                            <a href="{{ route('digital-marketing') }}">Digital Marketing</a>
                          </li>
                        </ul>
                      </li>
                        <li class="active menu-thumb">
                        <a href="{{ route('our-work') }}">
                          Our Work
                         
                        </a>
                       
                      </li>
                      <li>
                        <a href="{{ route('contact-us') }}">Contact Us</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
             
              <a href="{{ route('contact-us') }}" class="theme-btn header-bg"
                >Get a Quote <i class="fa-solid fa-arrow-up-right"></i
              ></a>
              <div class="header__hamburger my-auto">
                <div class="sidebar__toggle">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>