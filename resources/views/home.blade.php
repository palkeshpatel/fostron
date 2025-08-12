@extends('layouts.app')

@section('title', 'Fostron - Engineering Your Digital Tomorrow')
@section('description',
    'Fostron delivers innovative software solutions including mobile apps, web development, AI
    solutions, and cloud services.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Engineering Your Digital Tomorrow</h1>
                    <p class="hero-subtitle">We combine effective, innovative, and feasible solutions with outstanding
                        creativity to transform your business through cutting-edge technology.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Started</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">View Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="service-icon mx-auto"
                            style="width: 120px; height: 120px; font-size: 3rem; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <i class="fas fa-cube"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">What We Do?</h2>
                    <p class="section-subtitle">We provide comprehensive software solutions that help businesses thrive in
                        the digital age.</p>
                </div>
            </div>

            <!-- Services Carousel -->
            <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <h4>Mobile Development</h4>
                                    <p>Native iOS and Android apps, cross-platform solutions with React Native and Flutter.
                                    </p>
                                    <a href="{{ route('services.mobile') }}" class="btn btn-outline-primary mt-3">Learn
                                        More</a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-globe"></i>
                                    </div>
                                    <h4>Web Development</h4>
                                    <p>Custom websites, Progressive Web Apps, Single Page Applications, and headless CMS.
                                    </p>
                                    <a href="{{ route('services.web') }}" class="btn btn-outline-primary mt-3">Learn
                                        More</a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-brain"></i>
                                    </div>
                                    <h4>AI Solutions</h4>
                                    <p>AI-powered applications, chatbots, recommendation engines, and predictive analytics.
                                    </p>
                                    <a href="{{ route('services.ai') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                    <h4>Cloud Solutions</h4>
                                    <p>Cloud-native development, DevOps automation, serverless architecture, and migration.
                                    </p>
                                    <a href="{{ route('services.cloud') }}" class="btn btn-outline-primary mt-3">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-link"></i>
                                    </div>
                                    <h4>Blockchain Development</h4>
                                    <p>Smart contracts, NFT platforms, cryptocurrency wallets, and decentralized
                                        applications.</p>
                                    <a href="{{ route('services.blockchain') }}" class="btn btn-outline-primary mt-3">Learn
                                        More</a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-palette"></i>
                                    </div>
                                    <h4>UI/UX Design</h4>
                                    <p>User interface design, user experience optimization, branding, and visual design.</p>
                                    <a href="{{ route('services.design') }}" class="btn btn-outline-primary mt-3">Learn
                                        More</a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <h4>E-Commerce Development</h4>
                                    <p>Custom online stores, payment gateway integration, inventory management solutions.
                                    </p>
                                    <a href="{{ route('services.ecommerce') }}" class="btn btn-outline-primary mt-3">Learn
                                        More</a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h4>Cybersecurity</h4>
                                    <p>Penetration testing, data protection, network security, and security consulting.</p>
                                    <a href="{{ route('services.cybersecurity') }}"
                                        class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-vr-cardboard"></i>
                                    </div>
                                    <h4>AR/VR Development</h4>
                                    <p>Immersive experiences for gaming, education, healthcare, and enterprise applications.
                                    </p>
                                    <a href="{{ route('services.ar-vr') }}" class="btn btn-outline-primary mt-3">Learn
                                        More</a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-wifi"></i>
                                    </div>
                                    <h4>IoT Development</h4>
                                    <p>Smart device applications, sensor integration, and connected solutions for
                                        industries.</p>
                                    <a href="{{ route('services.iot') }}" class="btn btn-outline-primary mt-3">Learn
                                        More</a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <h4>Digital Marketing</h4>
                                    <p>SEO, PPC, social media marketing, and content marketing to grow your online presence.
                                    </p>
                                    <a href="{{ route('services.marketing') }}" class="btn btn-outline-primary mt-3">Learn
                                        More</a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 text-center p-4">
                                    <div class="service-icon">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                    <h4>SaaS Development</h4>
                                    <p>Scalable software-as-a-service applications for HR, finance, project management, and
                                        CRM.</p>
                                    <a href="{{ route('services.saas') }}" class="btn btn-outline-primary mt-3">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">About Fostron</h2>
                    <p class="section-subtitle">At Fostron, we combine effective, innovative, and feasible solutions with
                        outstanding creativity.</p>
                    <p>Fostron has custom solutions for a diverse array of industries including Education, Government,
                        Travel, Financial and Insurance, Publications, Multi Level Marketing, Human Resource,
                        Telecommunications, Retail, Software and Electronics, among others.</p>
                    <p>This extensive background demonstrates our understanding of business principles that apply across
                        industries, as well as the ability and initiative to understand problems and solutions that apply to
                        specific companies.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">50+</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">98%</h3>
                                <p>Client Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card text-center p-3">
                                <i class="fas fa-rocket text-primary mb-2" style="font-size: 2rem;"></i>
                                <h5>Fast Delivery</h5>
                                <p class="small">Quick turnaround times</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card text-center p-3">
                                <i class="fas fa-shield-alt text-primary mb-2" style="font-size: 2rem;"></i>
                                <h5>Secure Code</h5>
                                <p class="small">Enterprise-grade security</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card text-center p-3">
                                <i class="fas fa-headset text-primary mb-2" style="font-size: 2rem;"></i>
                                <h5>24/7 Support</h5>
                                <p class="small">Round-the-clock assistance</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card text-center p-3">
                                <i class="fas fa-chart-line text-primary mb-2" style="font-size: 2rem;"></i>
                                <h5>Scalable Solutions</h5>
                                <p class="small">Growth-ready applications</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Technologies We Use</h2>
                    <p class="section-subtitle">We leverage cutting-edge technologies to deliver exceptional results.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Frontend Technologies -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-react text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>React</h6>
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

                <!-- Backend Technologies -->
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
                        <i class="fab fa-php text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>PHP</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-java text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Java</h6>
                    </div>
                </div>

                <!-- Mobile Technologies -->
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
                        <i class="fab fa-react text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>React Native</h6>
                    </div>
                </div>


                <!-- Database Technologies -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-database text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>MySQL</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-database text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>PostgreSQL</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-database text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>MongoDB</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-database text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Redis</h6>
                    </div>
                </div>

                <!-- Cloud & DevOps -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-aws text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>AWS</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-google text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Google Cloud</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-microsoft text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Azure</h6>
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
                        <i class="fab fa-github text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>GitHub</h6>
                    </div>
                </div>

                <!-- AI & Machine Learning -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-brain text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>TensorFlow</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-brain text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>PyTorch</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-robot text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>OpenAI</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-chart-line text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Pandas</h6>
                    </div>
                </div>

                <!-- Blockchain & Web3 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-ethereum text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Ethereum</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-link text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Solidity</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-cube text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Web3.js</h6>
                    </div>
                </div>

                <!-- CMS & E-commerce -->

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-shopify text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Shopify</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-magento text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Magento</h6>
                    </div>
                </div>

                <!-- Testing & Tools -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-vial text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Jest</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-bug text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Selenium</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-tools text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Webpack</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-cog text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Jenkins</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section-padding">
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

    <!-- CTA Section -->
    <section class="section-padding"
        style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Start Your Project?</h2>
            <p class="section-subtitle text-white">Let's discuss how we can help transform your business with innovative
                technology solutions.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get In Touch</a>
        </div>
    </section>
@endsection
