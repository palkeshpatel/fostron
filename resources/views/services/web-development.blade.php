@extends('layouts.app')

@section('title', 'Web Development - Fostron')
@section('description', 'Professional web development services including custom websites, Progressive Web Apps, Single Page Applications, and headless CMS solutions.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">Web Development</h1>
            <p class="hero-subtitle">Custom websites, Progressive Web Apps, Single Page Applications, and headless CMS solutions for modern businesses.</p>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Build Powerful Web Solutions</h2>
                    <p class="section-subtitle">Create stunning, high-performance websites that drive business growth and user engagement.</p>
                    <p>We specialize in developing modern, responsive websites that not only look great but also perform exceptionally well. Our web development team uses the latest technologies and best practices to create websites that are fast, secure, and scalable.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">200+</h3>
                                <p>Websites Built</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">99.9%</h3>
                                <p>Uptime Guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">Why Choose Our Web Development?</h4>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Responsive Design</h6>
                                        <small class="text-muted">Works on all devices</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">SEO Optimized</h6>
                                        <small class="text-muted">Search engine friendly</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Fast Performance</h6>
                                        <small class="text-muted">Optimized for speed</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Secure & Reliable</h6>
                                        <small class="text-muted">Enterprise-grade security</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Web Development Types -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Web Development Services</h2>
                    <p class="section-subtitle">Comprehensive web development solutions for all business needs.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100 p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="service-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Custom Website Development</h4>
                                <p>Tailored websites designed to meet your specific business requirements and goals.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Responsive Design</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Custom Functionality</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>SEO Optimization</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Content Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card h-100 p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="service-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Progressive Web Apps (PWA)</h4>
                                <p>Web applications that offer native app-like experience with offline capabilities.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Offline Functionality</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Push Notifications</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>App-like Experience</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Fast Loading</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card h-100 p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="service-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Single Page Applications (SPA)</h4>
                                <p>Dynamic web applications that provide seamless user experience without page reloads.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>React.js Development</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Angular Applications</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Vue.js Solutions</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Fast Navigation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card h-100 p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="service-icon">
                                    <i class="fas fa-database"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Headless CMS Solutions</h4>
                                <p>Flexible content management systems with API-driven architecture for modern web applications.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Strapi CMS</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Contentful Integration</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>API-First Approach</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Multi-channel Publishing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Website Types -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Types of Websites We Build</h2>
                    <p class="section-subtitle">Specialized web solutions for various business domains and purposes.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-building text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Corporate Websites</h5>
                        <p>Professional business websites with company information, services, and contact details.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-shopping-cart text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>E-Commerce Websites</h5>
                        <p>Online stores with product catalogs, shopping carts, and secure payment processing.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-newspaper text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Blog & News Sites</h5>
                        <p>Content-driven websites with publishing systems and social media integration.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-graduation-cap text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Educational Platforms</h5>
                        <p>Learning management systems with course content, assessments, and student tracking.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-users text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Community Forums</h5>
                        <p>Interactive platforms for user discussions, knowledge sharing, and community building.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-chart-line text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Business Applications</h5>
                        <p>Custom web applications for CRM, project management, and business process automation.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-calendar-alt text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Booking Systems</h5>
                        <p>Online reservation platforms for appointments, services, and event management.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-portfolio text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Portfolio Websites</h5>
                        <p>Showcase websites for creative professionals, artists, and service providers.</p>
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
                    <h2 class="section-title">Our Web Development Process</h2>
                    <p class="section-subtitle">A systematic approach to deliver high-quality web solutions.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h5>Discovery & Analysis</h5>
                        <p>Understanding requirements, target audience, and business objectives to plan the perfect solution.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <h5>Design & Prototyping</h5>
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
                        <h5>Launch & Maintenance</h5>
                        <p>Deployment, testing, launch management, and ongoing support and maintenance.</p>
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
                    <p class="section-subtitle">Cutting-edge technologies for building robust web applications.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-react text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>React</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-laravel text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Laravel</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-node-js text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Node.js</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-angular text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Angular</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-vuejs text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Vue.js</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-wordpress text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>WordPress</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-php text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>PHP</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-js text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>JavaScript</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-html5 text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>HTML5</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-css3-alt text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>CSS3</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-bootstrap text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Bootstrap</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-mysql text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>MySQL</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Build Your Website?</h2>
            <p class="section-subtitle text-white">Let's discuss your web development needs and create a powerful online presence for your business.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your Project</a>
        </div>
    </section>
@endsection
