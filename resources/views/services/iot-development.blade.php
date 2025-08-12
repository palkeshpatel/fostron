@extends('layouts.app')

@section('title', 'IoT Development Services - Fostron')
@section('description', 'Fostron provides comprehensive IoT development services including smart device applications,
    sensor integration, and connected solutions for various industries.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">IoT Development Solutions</h1>
                    <p class="hero-subtitle">Connect the world with intelligent IoT solutions. We build smart applications
                        that collect, analyze, and act on data from connected devices.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Started</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">View Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="service-icon mx-auto"
                            style="width: 120px; height: 120px; font-size: 3rem; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <i class="fas fa-wifi"></i>
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
                    <h2 class="section-title">Connected Device Solutions</h2>
                    <p class="section-subtitle">Transform your business with IoT technology that connects devices, collects
                        data, and provides actionable insights.</p>
                    <p>Our IoT development services help businesses create smart applications for home automation,
                        industrial monitoring, healthcare devices, and environmental sensing. We build secure, scalable IoT
                        solutions that drive efficiency and innovation.</p>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">IoT Services</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Smart device applications</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Sensor integration</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Data analytics</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Cloud connectivity</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Security implementation</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Real-time monitoring</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our IoT Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our IoT Development Services</h2>
                    <p class="section-subtitle">Comprehensive IoT solutions for connected devices</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>Smart Home Solutions</h4>
                        <p>Home automation systems, smart appliances, and connected home devices for enhanced living
                            experiences.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4>Industrial IoT</h4>
                        <p>Industrial monitoring systems, predictive maintenance, and smart manufacturing solutions.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h4>Healthcare IoT</h4>
                        <p>Medical device connectivity, patient monitoring systems, and healthcare analytics solutions.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Data Analytics</h4>
                        <p>Real-time data processing, predictive analytics, and actionable insights from IoT devices.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h4>Cloud Integration</h4>
                        <p>Secure cloud connectivity, data storage, and scalable IoT platform development.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>IoT Security</h4>
                        <p>Device security, data encryption, and secure communication protocols for IoT networks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: var(--gradient-primary); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Connect Your World?</h2>
            <p class="section-subtitle text-white">Let's build IoT solutions that transform your business and create new
                opportunities.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your IoT Project</a>
        </div>
    </section>
@endsection
