@extends('layouts.app')

@section('title', 'SaaS Development Services - Fostron')
@section('description', 'Fostron provides comprehensive SaaS development services including scalable
    software-as-a-service applications for HR, finance, project management, and CRM solutions.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">SaaS Development Solutions</h1>
                    <p class="hero-subtitle">Build scalable, subscription-based software applications that generate recurring
                        revenue and serve customers worldwide.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Started</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">View Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="service-icon mx-auto"
                            style="width: 120px; height: 120px; font-size: 3rem; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <i class="fas fa-cloud"></i>
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
                    <h2 class="section-title">Scalable SaaS Applications</h2>
                    <p class="section-subtitle">Create powerful software-as-a-service applications that scale with your
                        business and provide value to customers worldwide.</p>
                    <p>Our SaaS development services help businesses build subscription-based software applications for
                        various industries including HR, finance, project management, CRM, and more. We create scalable,
                        secure, and user-friendly SaaS solutions.</p>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">SaaS Features</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Multi-tenant architecture</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Subscription management</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>User authentication &
                                authorization</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>API development</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Analytics & reporting</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Payment integration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our SaaS Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our SaaS Development Services</h2>
                    <p class="section-subtitle">Comprehensive SaaS solutions for various industries</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>HR Management SaaS</h4>
                        <p>Comprehensive HR software for recruitment, employee management, payroll, and performance
                            tracking.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h4>Finance & Accounting SaaS</h4>
                        <p>Financial management software for invoicing, expense tracking, budgeting, and financial
                            reporting.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h4>Project Management SaaS</h4>
                        <p>Project management tools for task tracking, team collaboration, time management, and project
                            analytics.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <h4>CRM Solutions</h4>
                        <p>Customer relationship management software for lead management, sales tracking, and customer
                            support.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h4>E-commerce SaaS</h4>
                        <p>E-commerce platforms for online stores, inventory management, and order processing systems.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Analytics & BI SaaS</h4>
                        <p>Business intelligence and analytics platforms for data visualization and reporting.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: var(--gradient-primary); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Build Your SaaS Platform?</h2>
            <p class="section-subtitle text-white">Let's create a scalable SaaS application that generates recurring revenue
                and serves customers worldwide.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your SaaS Project</a>
        </div>
    </section>
@endsection
