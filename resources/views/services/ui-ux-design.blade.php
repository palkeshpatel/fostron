@extends('layouts.app')

@section('title', 'UI/UX Design Services - Fostron')
@section('description', 'Fostron provides professional UI/UX design services including user interface design, user experience optimization, branding, and visual design solutions.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">UI/UX Design Excellence</h1>
                    <p class="hero-subtitle">Create exceptional user experiences with our comprehensive design services. We transform ideas into beautiful, intuitive, and user-friendly digital products.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Started</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">View Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="service-icon mx-auto" style="width: 120px; height: 120px; font-size: 3rem; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <i class="fas fa-palette"></i>
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
                    <h2 class="section-title">User-Centered Design Solutions</h2>
                    <p class="section-subtitle">We create intuitive, engaging, and conversion-focused user experiences that delight your customers and drive business growth.</p>
                    <p>Our UI/UX design process combines user research, creative design, and technical expertise to deliver digital products that not only look stunning but also provide seamless user experiences. From wireframes to high-fidelity prototypes, we ensure every interaction is meaningful and purposeful.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-users text-primary me-3" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">User-Focused</h6>
                                    <small class="text-muted">Research-driven design</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-mobile-alt text-primary me-3" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Responsive Design</h6>
                                    <small class="text-muted">Works on all devices</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">Our Design Process</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-search text-primary me-2"></i>User Research & Analysis</li>
                            <li class="mb-2"><i class="fas fa-pencil-ruler text-primary me-2"></i>Wireframing & Prototyping</li>
                            <li class="mb-2"><i class="fas fa-palette text-primary me-2"></i>Visual Design & Branding</li>
                            <li class="mb-2"><i class="fas fa-code text-primary me-2"></i>UI Development</li>
                            <li class="mb-2"><i class="fas fa-vial text-primary me-2"></i>Usability Testing</li>
                            <li class="mb-2"><i class="fas fa-rocket text-primary me-2"></i>Launch & Iteration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Design Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our UI/UX Design Services</h2>
                    <p class="section-subtitle">Comprehensive design solutions to create exceptional digital experiences</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4>User Research</h4>
                        <p>Comprehensive user research to understand your target audience, their needs, behaviors, and pain points.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>User interviews & surveys</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Competitive analysis</li>
                            <li><i class="fas fa-check text-primary me-2"></i>User personas & journey maps</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <h4>Wireframing & Prototyping</h4>
                        <p>Create interactive wireframes and prototypes to visualize user flows and test functionality before development.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>Low & high-fidelity wireframes</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Interactive prototypes</li>
                            <li><i class="fas fa-check text-primary me-2"></i>User flow optimization</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>Visual Design</h4>
                        <p>Beautiful, modern visual designs that align with your brand identity and create memorable user experiences.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>Custom UI design</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Design systems</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Icon & illustration design</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h4>Branding & Identity</h4>
                        <p>Complete branding solutions including logo design, color palettes, typography, and brand guidelines.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>Logo & brand identity</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Brand guidelines</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Marketing collateral</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Responsive Design</h4>
                        <p>Mobile-first responsive designs that provide optimal user experiences across all devices and screen sizes.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>Mobile-first approach</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Cross-device compatibility</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Touch-friendly interfaces</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-vial"></i>
                        </div>
                        <h4>Usability Testing</h4>
                        <p>Comprehensive usability testing to identify issues, gather feedback, and optimize user experiences.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>User testing sessions</li>
                            <li><i class="fas fa-check text-primary me-2"></i>A/B testing</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Performance optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Tools -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Design Tools & Technologies</h2>
                    <p class="section-subtitle">We use industry-leading design tools and technologies</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-figma text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Figma</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-adobe text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Adobe Creative Suite</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-sketch text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Sketch</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-cube text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>InVision</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-pencil-alt text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Protopie</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-chart-bar text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Hotjar</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: var(--gradient-primary); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Create Amazing User Experiences?</h2>
            <p class="section-subtitle text-white">Let's design digital products that your users will love and that will drive your business forward.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your Design Project</a>
        </div>
    </section>
@endsection
