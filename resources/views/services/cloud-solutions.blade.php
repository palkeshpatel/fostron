@extends('layouts.app')

@section('title', 'Cloud Solutions - Fostron')
@section('description', 'Cloud-native development, DevOps automation, serverless architecture, and cloud migration services for scalable applications.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">Cloud Solutions</h1>
            <p class="hero-subtitle">Cloud-native development, DevOps automation, serverless architecture, and cloud migration services.</p>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Scale Your Business with Cloud</h2>
                    <p class="section-subtitle">Leverage cloud technologies to build scalable, reliable, and cost-effective applications.</p>
                    <p>Our cloud solutions help businesses modernize their infrastructure, improve performance, and reduce operational costs. We specialize in cloud-native development, DevOps practices, and serverless architectures that enable rapid scaling and deployment.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">100+</h3>
                                <p>Cloud Projects</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">99.9%</h3>
                                <p>Uptime SLA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">Why Choose Our Cloud Solutions?</h4>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Scalable Architecture</h6>
                                        <small class="text-muted">Auto-scaling solutions</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Cost Optimization</h6>
                                        <small class="text-muted">Pay-as-you-use model</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">High Availability</h6>
                                        <small class="text-muted">Multi-region deployment</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Security First</h6>
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

    <!-- Cloud Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Cloud Services</h2>
                    <p class="section-subtitle">Comprehensive cloud solutions for modern applications.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100 p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="service-icon">
                                    <i class="fas fa-cloud"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Cloud-Native Development</h4>
                                <p>Build applications designed specifically for cloud environments with microservices architecture.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Microservices Architecture</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Container Orchestration</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>API-First Design</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Auto-scaling</li>
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
                                    <i class="fas fa-cogs"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>DevOps & Automation</h4>
                                <p>Implement CI/CD pipelines, infrastructure as code, and automated deployment processes.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>CI/CD Pipelines</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Infrastructure as Code</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Automated Testing</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Monitoring & Alerting</li>
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
                                    <i class="fas fa-bolt"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Serverless Architecture</h4>
                                <p>Build applications using serverless functions for cost-effective and scalable solutions.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Function as a Service</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Event-driven Architecture</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Pay-per-use Model</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Zero Maintenance</li>
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
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Cloud Migration</h4>
                                <p>Seamlessly migrate existing applications to cloud platforms with minimal downtime.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Lift & Shift Migration</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Refactoring Services</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Data Migration</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Performance Optimization</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cloud Platforms -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Cloud Platforms We Work With</h2>
                    <p class="section-subtitle">Expertise across major cloud providers and platforms.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fab fa-aws text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>AWS</h5>
                        <p>Amazon Web Services - EC2, Lambda, S3, RDS, and comprehensive AWS ecosystem.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fab fa-google text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Google Cloud</h5>
                        <p>Google Cloud Platform - Compute Engine, Cloud Functions, and BigQuery services.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fab fa-microsoft text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Azure</h5>
                        <p>Microsoft Azure - Virtual Machines, Functions, and enterprise-grade cloud services.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fab fa-digital-ocean text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>DigitalOcean</h5>
                        <p>Developer-friendly cloud platform with droplets, managed databases, and Kubernetes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DevOps Tools -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">DevOps Tools & Technologies</h2>
                    <p class="section-subtitle">Modern tools and practices for efficient cloud operations.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-docker text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Docker</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-kubernetes text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Kubernetes</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-jenkins text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Jenkins</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-github text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>GitHub Actions</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-terraform text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Terraform</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-ansible text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Ansible</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Benefits of Cloud Solutions</h2>
                    <p class="section-subtitle">Why businesses choose cloud-native development and DevOps practices.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-chart-line text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Scalability</h5>
                        <p>Auto-scaling capabilities to handle traffic spikes and growth without manual intervention.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-dollar-sign text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Cost Efficiency</h5>
                        <p>Pay-as-you-use model reduces infrastructure costs and eliminates upfront investments.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-shield-alt text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Security</h5>
                        <p>Enterprise-grade security with built-in compliance and data protection measures.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-rocket text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Faster Deployment</h5>
                        <p>Automated CI/CD pipelines enable rapid development and deployment cycles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Move to the Cloud?</h2>
            <p class="section-subtitle text-white">Let's discuss your cloud migration strategy and build scalable solutions for your business.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your Cloud Journey</a>
        </div>
    </section>
@endsection
