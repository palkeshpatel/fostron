@extends('layouts.app')

@section('title', 'Portfolio - Fostron')
@section('description', 'Explore Fostron\'s portfolio of successful projects including mobile apps, web applications,
    and AI solutions.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">Our Portfolio</h1>
            <p class="hero-subtitle">Crafting Success Stories in the Digital World - Explore Our Work Portfolio!</p>
        </div>
    </section>

    <!-- Portfolio Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Work Portfolio</h2>
                    <p class="section-subtitle">With a diverse array of clients and industries, our portfolio features a wide
                        range of projects, from captivating mobile apps to finely-tuned websites designed to convert
                        visitors into loyal customers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Categories -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Portfolio Categories</h2>
                    <p class="section-subtitle">Explore our work across different technologies and industries.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-mobile-alt text-primary mb-3" style="font-size: 3rem;"></i>
                        <h4>Mobile Applications</h4>
                        <p>Native iOS and Android apps, cross-platform solutions with React Native and Flutter.</p>
                        <a href="#mobile-projects" class="btn btn-outline-primary mt-3">View Projects</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-globe text-primary mb-3" style="font-size: 3rem;"></i>
                        <h4>Web Development</h4>
                        <p>Custom websites, Progressive Web Apps, Single Page Applications, and e-commerce platforms.</p>
                        <a href="#web-projects" class="btn btn-outline-primary mt-3">View Projects</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-brain text-primary mb-3" style="font-size: 3rem;"></i>
                        <h4>AI Solutions</h4>
                        <p>AI-powered applications, chatbots, recommendation engines, and predictive analytics.</p>
                        <a href="#ai-projects" class="btn btn-outline-primary mt-3">View Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Projects -->
    <section id="mobile-projects" class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Mobile Applications</h2>
                    <p class="section-subtitle">Native and cross-platform mobile applications for various industries.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="service-icon mx-auto mb-3">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h5>E-Commerce Mobile App</h5>
                            <p class="text-muted">React Native • E-commerce • Payment Integration</p>
                            <p>A comprehensive e-commerce mobile application with product catalog, shopping cart, secure
                                payment processing, and order tracking.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary">React Native</span>
                                <span class="badge bg-secondary">E-commerce</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="service-icon mx-auto mb-3">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <h5>Food Delivery App</h5>
                            <p class="text-muted">Flutter • Food Delivery • Real-time Tracking</p>
                            <p>Food delivery application with restaurant listings, menu management, real-time order
                                tracking, and payment integration.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary">Flutter</span>
                                <span class="badge bg-secondary">Food Delivery</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="service-icon mx-auto mb-3">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h5>Learning Management App</h5>
                            <p class="text-muted">iOS • Education • Video Streaming</p>
                            <p>Educational mobile app with course content, video streaming, progress tracking, and
                                interactive assessments.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary">iOS</span>
                                <span class="badge bg-secondary">Education</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Web Projects -->
    <section id="web-projects" class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Web Development</h2>
                    <p class="section-subtitle">Custom websites and web applications for businesses and organizations.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="service-icon mx-auto mb-3">
                                <i class="fas fa-building"></i>
                            </div>
                            <h5>Corporate Website</h5>
                            <p class="text-muted">Laravel • React • Corporate</p>
                            <p>Modern corporate website with company information, services showcase, contact forms, and blog
                                management system.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary">Laravel</span>
                                <span class="badge bg-secondary">Corporate</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="service-icon mx-auto mb-3">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <h5>E-Commerce Platform</h5>
                            <p class="text-muted">Laravel • Vue.js • E-commerce</p>
                            <p>Full-featured e-commerce platform with product management, inventory control, payment
                                processing, and order management.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary">Laravel</span>
                                <span class="badge bg-secondary">E-commerce</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="service-icon mx-auto mb-3">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h5>Booking System</h5>
                            <p class="text-muted">React • Node.js • Booking</p>
                            <p>Online booking platform for appointments and services with calendar integration, payment
                                processing, and notification system.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary">React</span>
                                <span class="badge bg-secondary">Booking</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Projects -->
    <section id="ai-projects" class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">AI Solutions</h2>
                    <p class="section-subtitle">Intelligent applications powered by artificial intelligence and machine
                        learning.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="service-icon mx-auto mb-3">
                                <i class="fas fa-robot"></i>
                            </div>
                            <h5>Customer Support Chatbot</h5>
                            <p class="text-muted">Python • NLP • Chatbot</p>
                            <p>Intelligent chatbot for customer support with natural language processing, sentiment
                                analysis, and CRM integration.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary">Python</span>
                                <span class="badge bg-secondary">NLP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="service-icon mx-auto mb-3">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h5>Predictive Analytics Dashboard</h5>
                            <p class="text-muted">Python • Machine Learning • Analytics</p>
                            <p>Data analytics dashboard with predictive modeling, trend analysis, and real-time business
                                intelligence insights.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary">Python</span>
                                <span class="badge bg-secondary">ML</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="service-icon mx-auto mb-3">
                                <i class="fas fa-thumbs-up"></i>
                            </div>
                            <h5>Recommendation Engine</h5>
                            <p class="text-muted">Python • AI • Recommendations</p>
                            <p>Personalized recommendation system for e-commerce with collaborative filtering and
                                content-based algorithms.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary">Python</span>
                                <span class="badge bg-secondary">AI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">What Our Clients Say</h2>
                    <p class="section-subtitle">Don't just take our word for it - hear from our satisfied clients.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon" style="width: 50px; height: 50px; font-size: 1.5rem; margin: 0;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">John Smith</h6>
                                <small class="text-muted">CEO, TechCorp</small>
                            </div>
                        </div>
                        <p>"Fostron delivered an exceptional mobile app that exceeded our expectations. Their team was
                            professional, responsive, and delivered on time."</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon" style="width: 50px; height: 50px; font-size: 1.5rem; margin: 0;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Sarah Johnson</h6>
                                <small class="text-muted">CTO, InnovateLab</small>
                            </div>
                        </div>
                        <p>"The AI solution Fostron developed for us has revolutionized our customer service. Their
                            expertise in machine learning is outstanding."</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon" style="width: 50px; height: 50px; font-size: 1.5rem; margin: 0;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Mike Davis</h6>
                                <small class="text-muted">Founder, StartupXYZ</small>
                            </div>
                        </div>
                        <p>"Fostron's cloud migration services helped us scale our infrastructure efficiently. Their DevOps
                            expertise is world-class."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Success Metrics</h2>
                    <p class="section-subtitle">Numbers that speak for themselves.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <h3 class="text-primary fw-bold">150+</h3>
                        <p>Projects Completed</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <h3 class="text-primary fw-bold">50+</h3>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <h3 class="text-primary fw-bold">98%</h3>
                        <p>Client Satisfaction</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <h3 class="text-primary fw-bold">5+</h3>
                        <p>Years Experience</p>
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
            <p class="section-subtitle text-white">Let's discuss your project requirements and create something amazing
                together.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get In Touch</a>
        </div>
    </section>
@endsection
