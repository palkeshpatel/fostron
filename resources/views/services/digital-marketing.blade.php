@extends('layouts.app')

@section('title', 'Digital Marketing Services - Fostron')
@section('description', 'Fostron provides comprehensive digital marketing services including SEO, PPC, social media
    marketing, and content marketing to grow your online presence.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Digital Marketing Solutions</h1>
                    <p class="hero-subtitle">Grow your online presence and drive results with our comprehensive digital
                        marketing services. We help businesses reach their target audience and achieve their marketing
                        goals.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Started</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">View Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="service-icon mx-auto"
                            style="width: 120px; height: 120px; font-size: 3rem; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Strategic Digital Marketing</h2>
                    <p class="section-subtitle">Comprehensive digital marketing strategies that drive traffic, generate
                        leads, and increase conversions.</p>
                    <p>Our digital marketing services help businesses establish a strong online presence, reach their target
                        audience, and achieve measurable results. We combine data-driven strategies with creative content to
                        maximize your marketing ROI.</p>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">Marketing Services</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Search engine optimization
                                (SEO)</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Pay-per-click advertising (PPC)
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Social media marketing</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Content marketing</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Email marketing</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Analytics & reporting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Marketing Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Digital Marketing Services</h2>
                    <p class="section-subtitle">Comprehensive marketing solutions to grow your business</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4>Search Engine Optimization</h4>
                        <p>Improve your website's visibility in search results and drive organic traffic with our SEO
                            services.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-ad"></i>
                        </div>
                        <h4>PPC Advertising</h4>
                        <p>Targeted paid advertising campaigns on Google, social media, and other platforms to drive
                            immediate results.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <h4>Social Media Marketing</h4>
                        <p>Engage with your audience on social media platforms and build brand awareness and loyalty.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-pen-fancy"></i>
                        </div>
                        <h4>Content Marketing</h4>
                        <p>Create valuable, engaging content that attracts and converts your target audience.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email Marketing</h4>
                        <p>Build relationships with your audience through targeted email campaigns and automation.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h4>Analytics & Reporting</h4>
                        <p>Track performance, measure results, and optimize campaigns with comprehensive analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: var(--gradient-primary); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Grow Your Business?</h2>
            <p class="section-subtitle text-white">Let's create a digital marketing strategy that drives results and grows
                your business.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your Marketing Campaign</a>
        </div>
    </section>
@endsection
