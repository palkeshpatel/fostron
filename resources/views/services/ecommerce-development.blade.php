@extends('layouts.app')

@section('title', 'E-Commerce Development Services - Fostron')
@section('description', 'Fostron provides comprehensive e-commerce development services including custom online stores,
    payment gateway integration, inventory management, and multi-platform solutions.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">E-Commerce Development Solutions</h1>
                    <p class="hero-subtitle">Build powerful online stores that drive sales and provide exceptional shopping
                        experiences.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Started</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">View Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="service-icon mx-auto"
                            style="width: 120px; height: 120px; font-size: 3rem; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <i class="fas fa-shopping-cart"></i>
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
                    <h2 class="section-title">Complete E-Commerce Solutions</h2>
                    <p class="section-subtitle">From concept to launch, we build end-to-end e-commerce platforms that
                        convert visitors into customers.</p>
                    <p>Our e-commerce development services cover everything from custom online store development to payment
                        gateway integration, inventory management, and multi-channel selling.</p>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">E-Commerce Features</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Product catalog management</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Shopping cart & checkout</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Payment gateway integration
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Order management system</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Inventory tracking</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Customer account management
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our E-Commerce Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our E-Commerce Development Services</h2>
                    <p class="section-subtitle">Comprehensive e-commerce solutions to boost your online sales</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h4>Custom E-Commerce Development</h4>
                        <p>Tailored online stores built from scratch to meet your specific business requirements and brand
                            identity.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fab fa-shopify"></i>
                        </div>
                        <h4>Shopify Development</h4>
                        <p>Custom Shopify stores with advanced features, themes, and apps to maximize your e-commerce
                            potential.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fab fa-wordpress"></i>
                        </div>
                        <h4>WooCommerce Development</h4>
                        <p>Powerful WordPress-based e-commerce solutions with WooCommerce for complete online store
                            management.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h4>Payment Gateway Integration</h4>
                        <p>Secure payment processing with multiple payment options including credit cards, digital wallets,
                            and cryptocurrencies.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <h4>Inventory Management</h4>
                        <p>Comprehensive inventory tracking and management systems to optimize stock levels and prevent
                            overselling.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Analytics & Reporting</h4>
                        <p>Advanced analytics and reporting tools to track sales performance, customer behavior, and
                            business insights.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: var(--gradient-primary); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Launch Your Online Store?</h2>
            <p class="section-subtitle text-white">Let's build an e-commerce platform that drives sales and provides
                exceptional shopping experiences.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your E-Commerce Project</a>
        </div>
    </section>
@endsection
