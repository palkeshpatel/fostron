@extends('layouts.app')

@section('title', 'Mobile App Development - Fostron')
@section('description', 'Professional mobile app development services for iOS, Android, and cross-platform solutions. Build scalable, user-friendly mobile applications.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">Mobile App Development</h1>
            <p class="hero-subtitle">Native iOS and Android applications, cross-platform solutions with React Native and Flutter for enterprise-level applications.</p>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Transform Your Business with Mobile Apps</h2>
                    <p class="section-subtitle">In today's mobile-first world, having a powerful mobile application is crucial for business success.</p>
                    <p>We specialize in creating high-performance, user-friendly mobile applications that drive engagement and deliver measurable results. Our team of experienced mobile developers uses cutting-edge technologies to build apps that stand out in the competitive app marketplace.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">100+</h3>
                                <p>Apps Developed</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">4.8★</h3>
                                <p>Average Rating</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">Why Choose Our Mobile Development?</h4>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Native Performance</h6>
                                        <small class="text-muted">Optimized for each platform</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Cross-Platform</h6>
                                        <small class="text-muted">Single codebase, multiple platforms</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">UI/UX Focused</h6>
                                        <small class="text-muted">Intuitive user experience</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Scalable Architecture</h6>
                                        <small class="text-muted">Growth-ready solutions</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Types -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Mobile Development Services</h2>
                    <p class="section-subtitle">Comprehensive mobile app development solutions for all platforms and business needs.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fab fa-apple"></i>
                        </div>
                        <h4>iOS Development</h4>
                        <p>Native iOS applications built with Swift and SwiftUI, optimized for iPhone and iPad devices.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>Swift & SwiftUI</li>
                            <li><i class="fas fa-check text-primary me-2"></i>iPhone & iPad Apps</li>
                            <li><i class="fas fa-check text-primary me-2"></i>App Store Optimization</li>
                            <li><i class="fas fa-check text-primary me-2"></i>iOS 15+ Compatibility</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fab fa-android"></i>
                        </div>
                        <h4>Android Development</h4>
                        <p>Native Android applications using Kotlin and Jetpack Compose for modern Android development.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>Kotlin & Java</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Jetpack Compose</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Google Play Optimization</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Material Design 3</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fab fa-react"></i>
                        </div>
                        <h4>Cross-Platform Development</h4>
                        <p>React Native and Flutter applications for cost-effective development across multiple platforms.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>React Native</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Flutter Development</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Single Codebase</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Faster Development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App Types -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Types of Mobile Apps We Build</h2>
                    <p class="section-subtitle">Specialized mobile applications for various business domains and user needs.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-shopping-cart text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>E-Commerce Apps</h5>
                        <p>Online shopping platforms with secure payment gateways and inventory management.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-users text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Social Media Apps</h5>
                        <p>Community platforms with real-time messaging, content sharing, and user engagement features.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-chart-line text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Business Apps</h5>
                        <p>Enterprise solutions for CRM, project management, and business process automation.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-gamepad text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Gaming Apps</h5>
                        <p>Interactive games with engaging graphics, sound effects, and multiplayer capabilities.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-graduation-cap text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Educational Apps</h5>
                        <p>Learning platforms with interactive content, progress tracking, and personalized learning paths.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-heartbeat text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Healthcare Apps</h5>
                        <p>Medical applications for patient monitoring, telemedicine, and health data management.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-utensils text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Food Delivery Apps</h5>
                        <p>Restaurant ordering platforms with real-time tracking and payment processing.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-car text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Transportation Apps</h5>
                        <p>Ride-sharing and logistics applications with GPS tracking and route optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Process -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Mobile Development Process</h2>
                    <p class="section-subtitle">A systematic approach to deliver high-quality mobile applications.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h5>Discovery & Planning</h5>
                        <p>Understanding requirements, market research, and creating detailed project roadmap.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <h5>UI/UX Design</h5>
                        <p>Creating wireframes, mockups, and interactive prototypes for optimal user experience.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-code"></i>
                        </div>
                        <h5>Development</h5>
                        <p>Agile development with regular sprints, testing, and iterative improvements.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h5>Launch & Support</h5>
                        <p>App store submission, launch management, and ongoing maintenance support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Technologies We Use</h2>
                    <p class="section-subtitle">Cutting-edge technologies for building robust mobile applications.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-swift text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Swift</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-android text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Kotlin</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-react text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>React Native</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-google text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Flutter</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-firebase text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Firebase</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-aws text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>AWS Mobile</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Build Your Mobile App?</h2>
            <p class="section-subtitle text-white">Let's discuss your mobile app idea and bring it to life with cutting-edge technology.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your Project</a>
        </div>
    </section>
@endsection
