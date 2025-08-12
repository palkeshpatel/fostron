@extends('layouts.app')

@section('title', 'Cybersecurity Services - Fostron')
@section('description', 'Fostron provides comprehensive cybersecurity services including penetration testing, data
    protection, network security, and security consulting.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Cybersecurity Solutions</h1>
                    <p class="hero-subtitle">Protect your digital assets with enterprise-grade cybersecurity solutions. We
                        safeguard your business from evolving cyber threats.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Started</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">View Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="service-icon mx-auto"
                            style="width: 120px; height: 120px; font-size: 3rem; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <i class="fas fa-shield-alt"></i>
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
                    <h2 class="section-title">Comprehensive Security Solutions</h2>
                    <p class="section-subtitle">Protect your business from cyber threats with our comprehensive security
                        services and expert consulting.</p>
                    <p>Our cybersecurity services help businesses identify vulnerabilities, protect sensitive data, and
                        maintain compliance with security standards. We provide proactive security measures to prevent
                        breaches and ensure business continuity.</p>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">Security Services</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Penetration testing</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Vulnerability assessment</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Security auditing</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Incident response</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Security consulting</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Compliance management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Cybersecurity Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Cybersecurity Services</h2>
                    <p class="section-subtitle">Comprehensive security solutions to protect your digital assets</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-bug"></i>
                        </div>
                        <h4>Penetration Testing</h4>
                        <p>Comprehensive security testing to identify vulnerabilities and weaknesses in your systems and
                            applications.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4>Vulnerability Assessment</h4>
                        <p>Systematic evaluation of security weaknesses in your infrastructure, applications, and networks.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h4>Data Protection</h4>
                        <p>Advanced encryption and data security measures to protect sensitive information and ensure
                            compliance.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h4>Network Security</h4>
                        <p>Comprehensive network security solutions including firewalls, intrusion detection, and monitoring
                            systems.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h4>Identity & Access Management</h4>
                        <p>Secure user authentication, authorization, and access control systems for your applications.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h4>Security Compliance</h4>
                        <p>Ensure compliance with security standards including GDPR, HIPAA, SOC 2, and industry regulations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: var(--gradient-primary); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Secure Your Digital Assets Today</h2>
            <p class="section-subtitle text-white">Protect your business from cyber threats with our comprehensive security
                solutions.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Security Assessment</a>
        </div>
    </section>
@endsection
