   <!-- Header Section Start -->
   <header id="header-sticky" class="header-1">
       <div class="container">
           <div class="mega-menu-wrapper">
               <div class="header-main">
                   <a href="{{ route('home') }}" class="logo">
                       <img src="{{ url ('assets/img/logo/boss-logo.webp') }}" alt="img" />
                   </a>
                   <div class="header-right d-flex justify-content-end align-items-center">
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
                                               Services
                                               <i class="fa-solid fa-chevron-down"></i>
                                           </a>
                                           <ul class="submenu">
                                               <li><a href="{{ route('performance-marketing') }}">Performance
                                                       Marketing</a></li>
                                               <li>
                                                   <a href="{{ route('social-media-marketing') }}">Social Media
                                                       Marketing </a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('seo-and-aeo') }}">SEO and AEO</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('website-development') }}">Website Development</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('digital-marketing') }}">Digital Marketing</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('crm-development') }}">CRM Development</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('whatsapp-api') }}">WhatsApp API</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('political-pr') }}">Political PR</a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li>
                                           <a href="javascript:void(0)">
                                               Industries
                                               <i class="fa-solid fa-chevron-down"></i>
                                           </a>
                                           <ul class="submenu">
                                               <li><a href="{{ route('manufacturing-and-fmcg') }}">Manufacturing &
                                                       FMCG</a></li>
                                               <li>
                                                   <a href="{{ route('food-and-beverage') }}">Food & Beverage</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('education') }}">Education</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('real-estate') }}">Real Estate</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('tour-and-travel') }}">Tour & Travel</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('healthcare') }}">Healthcare</a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li class="active menu-thumb">
                                           <a href="{{ route('our-blogs') }}">
                                               Our Blogs

                                           </a>

                                       </li>
                                       <li>
                                           <a href="{{ route('contact-us') }}">Contact Us</a>
                                       </li>
                                   </ul>
                               </nav>
                           </div>
                       </div>

                       <a href="{{ route('contact-us') }}" class="theme-btn header-bg">Get a Quote <i
                               class="fa-solid fa-arrow-up-right"></i></a>
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
