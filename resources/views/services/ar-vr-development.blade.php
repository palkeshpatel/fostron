@extends('layouts.app')

@section('title', 'AR/VR Development Services - Fostron')
@section('description', 'Fostron provides cutting-edge AR/VR development services for immersive experiences in gaming,
    education, healthcare, and enterprise applications.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">AR/VR Development Solutions</h1>
                    <p class="hero-subtitle">Create immersive experiences with cutting-edge augmented and virtual reality
                        technology. Transform how users interact with digital content.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Started</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">View Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="service-icon mx-auto"
                            style="width: 120px; height: 120px; font-size: 3rem; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <i class="fas fa-vr-cardboard"></i>
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
                    <h2 class="section-title">Immersive Technology Solutions</h2>
                    <p class="section-subtitle">Leverage the power of AR/VR to create engaging, interactive experiences that
                        captivate your audience.</p>
                    <p>Our AR/VR development services help businesses create immersive applications for gaming, education,
                        healthcare, real estate, and enterprise training. We build experiences that bridge the gap between
                        digital and physical worlds.</p>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">AR/VR Services</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Virtual reality applications
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Augmented reality solutions
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>3D modeling & animation</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Interactive experiences</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Cross-platform development</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Performance optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our AR/VR Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our AR/VR Development Services</h2>
                    <p class="section-subtitle">Comprehensive immersive technology solutions</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-vr-cardboard"></i>
                        </div>
                        <h4>Virtual Reality Development</h4>
                        <p>Immersive VR experiences for gaming, training, education, and entertainment applications.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Augmented Reality Apps</h4>
                        <p>AR applications that overlay digital content on the real world for enhanced user experiences.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-cube"></i>
                        </div>
                        <h4>3D Modeling & Animation</h4>
                        <p>High-quality 3D assets, models, and animations for immersive AR/VR experiences.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-gamepad"></i>
                        </div>
                        <h4>Gaming & Entertainment</h4>
                        <p>Interactive VR games and entertainment applications with engaging gameplay mechanics.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Education & Training</h4>
                        <p>Immersive learning experiences and training simulations for educational institutions and
                            enterprises.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>Real Estate & Architecture</h4>
                        <p>Virtual property tours, architectural visualization, and 3D walkthroughs for real estate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: var(--gradient-primary); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Create Immersive Experiences?</h2>
            <p class="section-subtitle text-white">Let's build AR/VR applications that captivate your audience and drive
                engagement.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your AR/VR Project</a>
        </div>
    </section>
@endsection
