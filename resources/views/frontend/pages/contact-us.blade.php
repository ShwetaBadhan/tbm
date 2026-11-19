@extends('frontend.layouts.master')
@section('title', 'Contact Us')




@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner/breadcroumb-img.jpg);">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp">
                    <li> <i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Contact Us</li>
                </ul>
                <h1 class="breadcrumb-title split-title">Contact Us</h1>
            </div>
        </div>
    </section>

    <!-- Contact Section Start -->
    <section class="contact-section fix section-padding">
        <div class="container">
            <div class="contact-top">
                <div class="section-title text-center">
                    <span class="sub-title sub-title tz-sub-tilte tz-sub-anim tx-subTitle justify-content-center">
                        <img src="assets/img/sub-title-1.svg" alt="img">Contact Us
                    </span>
                    <h2 class="split-title">Contact Us for Your Help</h2>
                </div>
                <div class="row">
                    <!-- Contact Info Boxes -->
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-box-items-inners">
                            <div class="icon"><img src="assets/img/inner/contact-icon-01.png" alt="img"></div>
                            <div class="content">
                                <p>Call Us 7/24</p>
                                <h3 class="title"><a href="tel:+917657999786">+91 7657999786</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-box-items-inners">
                            <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="content">
                                <p>Location</p>
                                <h3 class="title">Office No. 3, Second Floor, D-185, Phase 8B, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar (Mohali)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon-box-items-inners">
                            <div class="icon"><img src="assets/img/inner/contact-icon-03.png" alt="img"></div>
                            <div class="content">
                                <p>Make a Quote</p>
                                <h3 class="title">
                                    <a href="mailto:info@thebossmedia.co.in" class="link">info@thebossmedia.co.in</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-middle-items">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp">
                        <form action="{{ route('contact-us.submit') }}" method="POST" id="contact-form" class="contact-form-box">
                            @csrf
                            <h3 class="split-title">Get In Touch</h3>
                            <div class="row g-4 align-items-center justify-content-center">
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" autocomplete="name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="form-clt">
                                        <input type="email" name="email" id="email2" placeholder="Email Address" value="{{ old('email') }}" autocomplete="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="form-clt">
                                        <input type="tel" name="phone" id="phone" placeholder="Phone number" value="{{ old('phone') }}" autocomplete="tel">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <input type="text" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="form-clt">
                                        <textarea name="message" id="message" rows="5" placeholder="Write a message...">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                    <div class="contact-button">
                                        <button type="submit" class="theme-btn" id="submit-btn">
                                            <span class="btn-arrow-left"><i class="fa-solid fa-arrow-up-right"></i></span>
                                            <span class="btn-title">Submit</span>
                                            <span class="btn-arrow-right"><i class="fa-solid fa-arrow-up-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="google-map-items">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.263792104758!2d76.68356267466059!3d30.710983686685093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fefaaa4a7fc21%3A0xf66a04b4a94e20ac!2sProsperity%20Square!5e0!3m2!1sen!2sin!4v1788503233283!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ✅ Intl Tel Input JS + utils -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const phoneInputField = document.querySelector("#phone");
            let phoneInput = null;

            // ✅ 1. Initialize Intl Tel Input safely
            if (typeof window.intlTelInput === "function") {
                phoneInput = window.intlTelInput(phoneInputField, {
                    initialCountry: "in",
                    separateDialCode: true,
                    preferredCountries: ["in", "us", "gb", "ca", "au"],
                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js",
                });
            }

            // ✅ 2. Real-time special char block (Name)
            const nameInput = document.getElementById('name');
            if (nameInput) {
                nameInput.addEventListener('input', function () {
                    this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
                });
            }

            // ✅ 3. Real-time special char block (Subject)
            const subjectInput = document.getElementById('subject');
            if (subjectInput) {
                subjectInput.addEventListener('input', function () {
                    this.value = this.value.replace(/[^a-zA-Z0-9\s\-\.]/g, '');
                });
            }

            // ✅ 4. AJAX Form Submission (🔥 YE PAGE REFRESH ROKTA HAI)
            const form = document.querySelector("#contact-form");
            if (form) {
                form.addEventListener("submit", function (e) {
                    e.preventDefault(); // 🔥 Default submission (page refresh) ko roko

                    // Phone number validation check
                    if (phoneInput && !phoneInput.isValidNumber()) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Invalid Phone Number',
                            text: 'Please enter a valid phone number with the correct country code.',
                            confirmButtonColor: '#dc3545'
                        });
                        return;
                    }

                    // Phone number ko international format mein convert karo (e.g., +91...)
                    if (phoneInput) {
                        phoneInputField.value = phoneInput.getNumber();
                    }

                    const formData = new FormData(form);
                    const submitBtn = document.getElementById('submit-btn');
                    const originalBtnText = submitBtn.innerHTML;

                    // Button ko disable karo taaki user baar-baar click na kare
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="btn-title">Sending...</span>';

                    // AJAX Request bhejo
                    fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(async response => {
                        const data = await response.json().catch(() => ({}));

                        if (!response.ok) {
                            if (response.status === 422) {
                                throw { type: 'validation', errors: data.errors };
                            }
                            if (response.status === 429) {
                                throw { type: 'rate_limit', message: 'Too many attempts. Please wait a minute.' };
                            }
                            throw { type: 'server', message: data.message || 'Server error occurred.' };
                        }
                        return data;
                    })
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: data.message,
                                confirmButtonColor: '#28a745'
                            });
                            form.reset(); // Form clear karo
                            if (phoneInput) phoneInput.setNumber(""); // Phone input clear karo
                        }
                    })
                    .catch(error => {
                        if (error.type === 'validation') {
                            // Laravel validation errors ko list mein dikhao
                            let errorList = '<ul style="text-align: left; margin-top: 10px; padding-left: 20px;">';
                            for (const [key, messages] of Object.entries(error.errors)) {
                                messages.forEach(msg => {
                                    errorList += `<li style="margin-bottom: 5px; color: #dc3545;">${msg}</li>`;
                                });
                            }
                            errorList += '</ul>';

                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Failed',
                                html: errorList,
                                confirmButtonColor: '#dc3545'
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: error.message || 'An unexpected error occurred.',
                                confirmButtonColor: '#dc3545'
                            });
                        }
                    })
                    .finally(() => {
                        // Button ko wapas normal state mein lao
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    });
                });
            }
        });
    </script>
@endpush