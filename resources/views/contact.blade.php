@extends('layouts.app')

@section('title', 'Contact Us - Fostron')
@section('description',
    'Get in touch with Fostron for your software development needs. Contact us for mobile apps, web
    development, AI solutions, and cloud services.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">Contact Us</h1>
            <p class="hero-subtitle">Ready to start your project? Let's discuss how we can help transform your business with
                innovative technology solutions.</p>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title">Get In Touch</h2>
                    <p class="section-subtitle">We'd love to hear from you. Send us a message and we'll respond as soon as
                        possible.</p>

                    <form id="contactForm" class="mt-4" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">First Name *</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name *</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <label for="service_interested_in" class="form-label">Service Interested In *</label>
                                <select class="form-select" id="service_interested_in" name="service_interested_in"
                                    required>
                                    <option value="">Select a service</option>
                                    <option value="Mobile Development">Mobile Development</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="AI Solutions">AI Solutions</option>
                                    <option value="Cloud Solutions">Cloud Solutions</option>
                                    <option value="Blockchain Development">Blockchain Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="AR/VR Development">AR/VR Development</option>
                                    <option value="E-Commerce Development">E-Commerce Development</option>
                                    <option value="IoT Development">IoT Development</option>
                                    <option value="Cybersecurity">Cybersecurity</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="SaaS Development">SaaS Development</option>
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <label for="project_budget" class="form-label">Project Budget</label>
                                <select class="form-select" id="project_budget" name="project_budget">
                                    <option value="">Select budget range</option>
                                    <option value="Under $10,000">Under $10,000</option>
                                    <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                                    <option value="$25,000 - $50,000">$25,000 - $50,000</option>
                                    <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                                    <option value="Over $100,000">Over $100,000</option>
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <label for="project_timeline" class="form-label">Project Timeline</label>
                                <select class="form-select" id="project_timeline" name="project_timeline">
                                    <option value="">Select timeline</option>
                                    <option value="1-3 months">1-3 months</option>
                                    <option value="3-6 months">3-6 months</option>
                                    <option value="6-12 months">6-12 months</option>
                                    <option value="Over 12 months">Over 12 months</option>
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <label for="project_details" class="form-label">Project Details *</label>
                                <textarea class="form-control" id="project_details" name="project_details" rows="5"
                                    placeholder="Tell us about your project requirements, goals, and any specific features you need..." required></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                                    <span class="spinner-border spinner-border-sm d-none" role="status"
                                        aria-hidden="true"></span>
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="card p-4">
                        <h4 class="mb-4">Contact Information</h4>

                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <div>
                                <h6 class="mb-0">Email</h6>
                                <p class="mb-0">hello@fostron.com</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone text-primary me-3"></i>
                            <div>
                                <h6 class="mb-0">Phone</h6>
                                <p class="mb-0">+1 (555) 123-4567</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <div>
                                <h6 class="mb-0">Address</h6>
                                <p class="mb-0">123 Tech Street<br>Digital City, DC 12345</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <i class="fas fa-clock text-primary me-3"></i>
                            <div>
                                <h6 class="mb-0">Business Hours</h6>
                                <p class="mb-0">Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 2:00 PM</p>
                            </div>
                        </div>

                        <h5 class="mb-3">Follow Us</h5>
                        <div class="social-links">
                            <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Find Us</h2>
                    <p class="section-subtitle">Visit our office or get in touch with us. We're here to help bring your
                        ideas to life.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="map-container" style="height: 400px; width: 100%;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986532929688!3d40.69714941978941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703123456789!5m2!1sen!2sin"
                                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="text-center">
                        <i class="fas fa-map-marker-alt text-primary mb-3" style="font-size: 2rem;"></i>
                        <h5>Office Location</h5>
                        <p class="mb-0">123 Tech Street<br>Digital City, DC 12345<br>United States</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <i class="fas fa-clock text-primary mb-3" style="font-size: 2rem;"></i>
                        <h5>Business Hours</h5>
                        <p class="mb-0">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 2:00 PM<br>Sunday:
                            Closed</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <i class="fas fa-phone text-primary mb-3" style="font-size: 2rem;"></i>
                        <h5>Contact Info</h5>
                        <p class="mb-0">Phone: +1 (555) 123-4567<br>Email: hello@fostron.com<br>Support:
                            support@fostron.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Why Choose Fostron?</h2>
                    <p class="section-subtitle">We deliver results that redefine success for our clients.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-rocket text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Fast Delivery</h5>
                        <p>We understand the importance of time-to-market and deliver projects on schedule without
                            compromising quality.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-shield-alt text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Secure & Reliable</h5>
                        <p>Enterprise-grade security and robust architecture ensure your applications are safe and scalable.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-headset text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock technical support and maintenance to keep your applications running smoothly.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-chart-line text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Scalable Solutions</h5>
                        <p>Growth-ready applications that can scale with your business needs and handle increased traffic.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-subtitle">Common questions about our services and process.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h5>What is your development process?</h5>
                        <p>We follow an agile development process with regular client communication, iterative development,
                            and continuous feedback to ensure your project meets your expectations.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card p-4">
                        <h5>How long does a typical project take?</h5>
                        <p>Project timelines vary based on complexity and requirements. Simple websites may take 2-4 weeks,
                            while complex applications can take 3-6 months or more.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card p-4">
                        <h5>Do you provide ongoing support?</h5>
                        <p>Yes, we offer comprehensive maintenance and support services including bug fixes, updates,
                            security patches, and 24/7 technical support.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card p-4">
                        <h5>What technologies do you use?</h5>
                        <p>We use modern, cutting-edge technologies including React, Laravel, Node.js, Python, AWS, and
                            more, depending on your project requirements.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card p-4">
                        <h5>Do you work with startups?</h5>
                        <p>Absolutely! We love working with startups and offer flexible engagement models to accommodate
                            different budgets and timelines.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card p-4">
                        <h5>Can you help with existing projects?</h5>
                        <p>Yes, we can help improve, maintain, or scale existing applications. We'll analyze your current
                            system and provide recommendations for optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding"
        style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Start Your Project?</h2>
            <p class="section-subtitle text-white">Let's discuss your requirements and create something amazing together.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="tel:+15551234567" class="btn btn-light btn-lg">
                    <i class="fas fa-phone me-2"></i>Call Us
                </a>
                <a href="mailto:hello@fostron.com" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-envelope me-2"></i>Email Us
                </a>
            </div>
        </div>
    </section>
@endsection
