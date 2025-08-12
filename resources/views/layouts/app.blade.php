<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fostron - Engineering Your Digital Tomorrow')</title>
    <meta name="description" content="@yield('description', 'Fostron delivers innovative software solutions including mobile apps, web development, AI solutions, and cloud services.')">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #1e40af;
            --secondary-color: #1e3a8a;
            --accent-color: #3b82f6;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --white: #ffffff;
            --light-gray: #f8f9fa;
            --gradient-primary: linear-gradient(135deg, #1e40af, #3b82f6);
            --gradient-secondary: linear-gradient(135deg, #1e3a8a, #1e40af);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        .navbar {
            background: var(--white) !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 1rem 0;
            color: var(--text-dark);
            border-bottom: 1px solid #e5e7eb;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary-color) !important;
        }

        .navbar-brand img {
            height: 75px;
            width: auto;
            object-fit: contain;
            filter: brightness(0) saturate(100%);
            background: transparent;
            padding: 0;
            border-radius: 0;
            box-shadow: none;
        }

        .navbar-nav .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: var(--gradient-primary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        .btn-primary {
            background: var(--gradient-primary);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(30, 64, 175, 0.3);
        }

        .btn-primary:hover {
            background: var(--gradient-secondary);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(30, 64, 175, 0.4);
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            background: transparent;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: var(--gradient-primary);
            border-color: transparent;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(30, 64, 175, 0.3);
        }

        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 3rem;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
            box-shadow: 0 8px 25px rgba(30, 64, 175, 0.3);
            transition: all 0.3s ease;
        }

        .service-icon:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(30, 64, 175, 0.4);
        }

        .footer {
            background-color: var(--text-dark);
            color: var(--white);
            padding: 60px 0 30px;
        }

        .footer h5 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .footer h5 img {
            height: 75px;
            width: auto;
            object-fit: contain;
            filter: brightness(0) saturate(100%) invert(100%);
            background: transparent;
            padding: 0;
            border-radius: 0;
        }

        .footer a {
            color: var(--white);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--primary-color);
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }

        .hero-section {
            background: var(--gradient-primary);
            color: white;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        /* Services Carousel Styles */
        #servicesCarousel {
            position: relative;
            padding-bottom: 60px;
        }

        #servicesCarousel .carousel-control-prev,
        #servicesCarousel .carousel-control-next {
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.8;
        }

        #servicesCarousel .carousel-control-prev {
            left: -25px;
        }

        #servicesCarousel .carousel-control-next {
            right: -25px;
        }

        #servicesCarousel .carousel-control-prev:hover,
        #servicesCarousel .carousel-control-next:hover {
            opacity: 1;
            background: var(--secondary-color);
        }

        #servicesCarousel .carousel-indicators {
            bottom: 0;
        }

        #servicesCarousel .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: var(--primary-color);
            border: 2px solid var(--primary-color);
            margin: 0 5px;
        }

        #servicesCarousel .carousel-indicators button.active {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        #servicesCarousel .carousel-item {
            transition: transform 0.6s ease-in-out;
        }

        #servicesCarousel .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        #servicesCarousel .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Fostron Logo" class="me-2">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('services.mobile') }}">Mobile Development</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('services.web') }}">Web Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.ai') }}">AI Solutions</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.cloud') }}">Cloud Solutions</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('services.blockchain') }}">Blockchain
                                    Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.design') }}">UI/UX Design</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.ar-vr') }}">AR/VR Development</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('services.ecommerce') }}">E-Commerce
                                    Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.iot') }}">IoT Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.cybersecurity') }}">Cybersecurity</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('services.marketing') }}">Digital Marketing</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('services.saas') }}">SaaS Development</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-primary" href="{{ route('contact') }}">Get Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="margin-top: 80px;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5><img src="{{ asset('assets/img/logo.png') }}" alt="Fostron Logo" class="me-2"></h5>
                    <p class="mb-3">Engineering Your Digital Tomorrow with innovative software solutions,
                        cutting-edge
                        technology, and exceptional service delivery.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('services.mobile') }}">Mobile Development</a></li>
                        <li><a href="{{ route('services.web') }}">Web Development</a></li>
                        <li><a href="{{ route('services.ai') }}">AI Solutions</a></li>
                        <li><a href="{{ route('services.cloud') }}">Cloud Solutions</a></li>
                        <li><a href="{{ route('services.blockchain') }}">Blockchain Development</a></li>
                        <li><a href="{{ route('services.design') }}">UI/UX Design</a></li>
                        <li><a href="{{ route('services.ar-vr') }}">AR/VR Development</a></li>
                        <li><a href="{{ route('services.ecommerce') }}">E-Commerce Development</a></li>
                        <li><a href="{{ route('services.iot') }}">IoT Development</a></li>
                        <li><a href="{{ route('services.cybersecurity') }}">Cybersecurity</a></li>
                        <li><a href="{{ route('services.marketing') }}">Digital Marketing</a></li>
                        <li><a href="{{ route('services.saas') }}">SaaS Development</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Contact Info</h5>
                    <p><i class="fas fa-envelope me-2"></i>hello@fostron.com</p>
                    <p><i class="fas fa-phone me-2"></i>+1 (555) 123-4567</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i>123 Tech Street, Digital City, DC 12345</p>
                </div>
            </div>
            <hr class="my-4" style="border-color: #444;">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Fostron. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="me-3">Privacy Policy</a>
                    <a href="#" class="me-3">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- jQuery Validation Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom JavaScript -->
    <script>
        // Initialize Services Carousel
        document.addEventListener('DOMContentLoaded', function() {
            var servicesCarousel = new bootstrap.Carousel(document.getElementById('servicesCarousel'), {
                interval: 5000,
                wrap: true,
                pause: 'hover'
            });

            // Add smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });

        // Contact Form AJAX Submission
        $(document).ready(function() {
            $('#contactForm').validate({
                rules: {
                    first_name: {
                        required: true,
                        minlength: 2
                    },
                    last_name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        phoneUS: true
                    },
                    service_interested_in: {
                        required: true
                    },
                    project_details: {
                        required: true,
                        minlength: 10
                    }
                },
                messages: {
                    first_name: {
                        required: "Please enter your first name",
                        minlength: "First name must be at least 2 characters"
                    },
                    last_name: {
                        required: "Please enter your last name",
                        minlength: "Last name must be at least 2 characters"
                    },
                    email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    phone: {
                        phoneUS: "Please enter a valid phone number"
                    },
                    service_interested_in: {
                        required: "Please select a service"
                    },
                    project_details: {
                        required: "Please provide project details",
                        minlength: "Project details must be at least 10 characters"
                    }
                },
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form) {
                    var $form = $(form);
                    var $submitBtn = $('#submitBtn');
                    var $spinner = $submitBtn.find('.spinner-border');
                    var $btnText = $submitBtn.contents().filter(function() {
                        return this.nodeType === 3;
                    });

                    // Show loading state
                    $submitBtn.prop('disabled', true);
                    $spinner.removeClass('d-none');
                    $btnText[0].textContent = ' Sending...';

                    $.ajax({
                        url: $form.attr('action'),
                        type: 'POST',
                        data: $form.serialize(),
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                // Show success message
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Message Sent Successfully!',
                                    text: response.message,
                                    confirmButtonColor: '#293799',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    // Reset form
                                    $form[0].reset();
                                    $form.find('.is-invalid').removeClass(
                                        'is-invalid');
                                });
                            } else {
                                // Show error message
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: response.message ||
                                        'Something went wrong. Please try again.',
                                    confirmButtonColor: '#293799',
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error: function(xhr) {
                            var errorMessage = 'Something went wrong. Please try again.';

                            if (xhr.responseJSON && xhr.responseJSON.errors) {
                                // Display validation errors
                                $.each(xhr.responseJSON.errors, function(field, errors) {
                                    var $field = $('#' + field);
                                    $field.addClass('is-invalid');
                                    $field.siblings('.invalid-feedback').text(
                                        errors[0]);
                                });
                            } else if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON.message;
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: errorMessage,
                                confirmButtonColor: '#293799',
                                confirmButtonText: 'OK'
                            });
                        },
                        complete: function() {
                            // Reset button state
                            $submitBtn.prop('disabled', false);
                            $spinner.addClass('d-none');
                            $btnText[0].textContent = ' Send Message';
                        }
                    });

                    return false;
                }
            });

            // Custom phone validation
            $.validator.addMethod("phoneUS", function(phone_number, element) {
                if (phone_number === '') return true; // Allow empty
                phone_number = phone_number.replace(/\s+/g, "");
                return this.optional(element) || phone_number.length > 9 && phone_number.match(
                    /^(\+?1-?)?(\([0-9]{3}\)|[0-9]{3})-?[0-9]{3}-?[0-9]{4}$/);
            }, "Please enter a valid phone number");
        });
    </script>
</body>

</html>
