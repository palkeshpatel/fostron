@extends('layouts.app')

@section('title', 'About Us - Fostron')
@section('description', 'Learn about Fostron, our mission, team, and commitment to delivering innovative software solutions.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">About Fostron</h1>
            <p class="hero-subtitle">Engineering Your Digital Tomorrow with innovative solutions and exceptional service delivery.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Our Mission</h2>
                    <p class="section-subtitle">At Fostron, we combine effective, innovative, and feasible solutions with outstanding creativity.</p>
                    <p>We are passionate about transforming businesses through cutting-edge technology solutions. Our mission is to help organizations thrive in the digital age by providing comprehensive software development services that drive growth, efficiency, and innovation.</p>
                    <p>With years of experience across diverse industries, we understand the unique challenges businesses face and deliver tailored solutions that exceed expectations.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">5+</h3>
                                <p>Years Experience</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">50+</h3>
                                <p>Projects Delivered</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">Our Values</h4>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-lightbulb text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Innovation</h6>
                                        <small class="text-muted">Cutting-edge solutions</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-handshake text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Integrity</h6>
                                        <small class="text-muted">Trust and transparency</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-users text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Collaboration</h6>
                                        <small class="text-muted">Team-based approach</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-star text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Excellence</h6>
                                        <small class="text-muted">Quality delivery</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Industries We Serve</h2>
                    <p class="section-subtitle">Fostron has custom solutions for a diverse array of industries.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-graduation-cap text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Education</h5>
                        <p>Learning management systems, student portals, and educational apps.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-university text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Government</h5>
                        <p>Digital transformation, citizen portals, and administrative systems.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-plane text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Travel</h5>
                        <p>Booking platforms, travel apps, and tourism management systems.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-chart-line text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Finance</h5>
                        <p>Banking apps, fintech solutions, and financial management systems.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-newspaper text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Publications</h5>
                        <p>Content management systems, digital publishing platforms.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-network-wired text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Telecommunications</h5>
                        <p>Communication apps, network management, and customer portals.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-shopping-cart text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Retail</h5>
                        <p>E-commerce platforms, inventory management, and retail analytics.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-microchip text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Technology</h5>
                        <p>Software development, SaaS solutions, and tech infrastructure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Team</h2>
                    <p class="section-subtitle">Meet the talented professionals behind Fostron's success.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>Alex Johnson</h5>
                        <p class="text-muted">CEO & Founder</p>
                        <p>Visionary leader with 10+ years of experience in software development and business strategy.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>Sarah Chen</h5>
                        <p class="text-muted">CTO</p>
                        <p>Technology expert specializing in AI, cloud architecture, and scalable software solutions.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>Mike Rodriguez</h5>
                        <p class="text-muted">Lead Developer</p>
                        <p>Full-stack developer with expertise in React, Laravel, and mobile app development.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>Emily Davis</h5>
                        <p class="text-muted">UX/UI Designer</p>
                        <p>Creative designer focused on user experience and modern interface design.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>David Kim</h5>
                        <p class="text-muted">DevOps Engineer</p>
                        <p>Infrastructure specialist with expertise in AWS, Docker, and CI/CD pipelines.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>Lisa Wang</h5>
                        <p class="text-muted">Project Manager</p>
                        <p>Experienced project manager ensuring timely delivery and client satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Why Choose Fostron?</h2>
                    <p class="section-subtitle">We deliver results that redefine success for our clients.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card p-4 text-center">
                        <i class="fas fa-rocket text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Fast Delivery</h5>
                        <p>We understand the importance of time-to-market and deliver projects on schedule without compromising quality.</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card p-4 text-center">
                        <i class="fas fa-shield-alt text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Secure & Reliable</h5>
                        <p>Enterprise-grade security and robust architecture ensure your applications are safe and scalable.</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card p-4 text-center">
                        <i class="fas fa-headset text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock technical support and maintenance to keep your applications running smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Work With Us?</h2>
            <p class="section-subtitle text-white">Let's discuss your project and how we can help bring your vision to life.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get In Touch</a>
        </div>
    </section>
@endsection
