@extends('layouts.app')

@section('title', 'Services - Fostron')
@section('description', 'Explore Fostron\'s comprehensive software development services including mobile apps, web
    development, AI solutions, and cloud services.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">Our Services</h1>
            <p class="hero-subtitle">Comprehensive software solutions to transform your business and drive digital
                innovation.</p>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">What We Offer</h2>
                    <p class="section-subtitle">From mobile apps to AI solutions, we provide end-to-end software development
                        services.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100 p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="service-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Mobile App Development</h4>
                                <p>Native iOS and Android applications, cross-platform solutions with React Native and
                                    Flutter, and enterprise-level mobile solutions.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>iOS & Android Development</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>React Native & Flutter</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Enterprise Mobile Apps</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>App Maintenance & Support</li>
                                </ul>
                                <a href="{{ route('services.mobile') }}" class="btn btn-primary mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card h-100 p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="service-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Web Development</h4>
                                <p>Custom websites, Progressive Web Apps, Single Page Applications, and headless CMS
                                    solutions for modern businesses.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Custom Website Development</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Progressive Web Apps (PWA)</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Single Page Applications</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Headless CMS Solutions</li>
                                </ul>
                                <a href="{{ route('services.web') }}" class="btn btn-primary mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card h-100 p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="service-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>AI & Machine Learning</h4>
                                <p>AI-powered applications, chatbots, recommendation engines, and predictive analytics
                                    solutions.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>AI-Powered Applications</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Chatbots & Virtual Assistants</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Recommendation Engines</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Predictive Analytics</li>
                                </ul>
                                <a href="{{ route('services.ai') }}" class="btn btn-primary mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card h-100 p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="service-icon">
                                    <i class="fas fa-cloud"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Cloud Solutions</h4>
                                <p>Cloud-native development, DevOps automation, serverless architecture, and cloud migration
                                    services.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Cloud-Native Development</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>DevOps & Automation</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Serverless Architecture</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Cloud Migration</li>
                                </ul>
                                <a href="{{ route('services.cloud') }}" class="btn btn-primary mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Additional Services</h2>
                    <p class="section-subtitle">Comprehensive solutions to support your digital transformation journey.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-link"></i>
                        </div>
                        <h4>Blockchain Development</h4>
                        <p>Smart contracts, NFT platforms, cryptocurrency wallets, and decentralized applications (dApps).
                        </p>
                        <a href="{{ route('services.blockchain') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>UI/UX Design</h4>
                        <p>User interface design, user experience optimization, branding, and visual design solutions.</p>
                        <a href="{{ route('services.design') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h4>E-Commerce Development</h4>
                        <p>Custom online stores, payment gateway integration, inventory management, and multi-platform
                            solutions.</p>
                        <a href="{{ route('services.ecommerce') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Cybersecurity</h4>
                        <p>Penetration testing, data protection, network security, and security consulting services.</p>
                        <a href="{{ route('services.cybersecurity') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-vr-cardboard"></i>
                        </div>
                        <h4>AR/VR Development</h4>
                        <p>Immersive experiences for gaming, education, healthcare, and enterprise applications.</p>
                        <a href="{{ route('services.ar-vr') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <h4>IoT Development</h4>
                        <p>Smart device applications, sensor integration, and connected solutions for various industries.
                        </p>
                        <a href="{{ route('services.iot') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h4>Digital Marketing</h4>
                        <p>SEO, PPC, social media marketing, and content marketing to grow your online presence.</p>
                        <a href="{{ route('services.marketing') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h4>SaaS Development</h4>
                        <p>Scalable software-as-a-service applications for HR, finance, project management, and CRM
                            solutions.</p>
                        <a href="{{ route('services.saas') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-palette text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>UI/UX Design</h5>
                        <p>User-centered design, modern interfaces, and intuitive user experiences that drive engagement and
                            conversion.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-shopping-cart text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>E-Commerce Development</h5>
                        <p>Custom e-commerce platforms, payment gateway integration, and online store solutions for digital
                            commerce.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-shield-alt text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Cybersecurity</h5>
                        <p>Security audits, penetration testing, data protection, and network security solutions for your
                            applications.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-chart-line text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Digital Marketing</h5>
                        <p>SEO optimization, PPC campaigns, social media marketing, and performance marketing services.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-cogs text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Maintenance & Support</h5>
                        <p>Ongoing maintenance, bug fixes, updates, and 24/7 technical support for your applications.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-graduation-cap text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Training & Consulting</h5>
                        <p>Technical training, best practices consulting, and knowledge transfer to empower your team.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Process -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Development Process</h2>
                    <p class="section-subtitle">A proven methodology that ensures successful project delivery.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h5>Discovery</h5>
                        <p>Understanding your requirements, goals, and business objectives to create the perfect solution.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <h5>Planning</h5>
                        <p>Creating detailed project plans, architecture design, and development roadmap.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-code"></i>
                        </div>
                        <h5>Development</h5>
                        <p>Agile development process with regular updates and iterative improvements.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h5>Deployment</h5>
                        <p>Seamless deployment, testing, and launch with ongoing support and maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies We Use -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Technologies We Use</h2>
                    <p class="section-subtitle">Cutting-edge technologies to build robust and scalable solutions.</p>
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
                        <i class="fab fa-python text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Python</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-aws text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>AWS</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-docker text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Docker</h6>
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
                        <i class="fab fa-swift text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Swift</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-android text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Android</h6>
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
                        <i class="fab fa-google text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Google Cloud</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding"
        style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Get Started?</h2>
            <p class="section-subtitle text-white">Let's discuss your project requirements and find the perfect solution
                for your business.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Free Quote</a>
        </div>
    </section>
@endsection
