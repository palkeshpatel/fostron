@extends('layouts.app')

@section('title', 'AI Solutions - Fostron')
@section('description', 'AI-powered applications, chatbots, recommendation engines, and predictive analytics solutions for modern businesses.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">AI Solutions</h1>
            <p class="hero-subtitle">AI-powered applications, chatbots, recommendation engines, and predictive analytics solutions.</p>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Transform Your Business with AI</h2>
                    <p class="section-subtitle">Leverage the power of artificial intelligence to automate processes, gain insights, and enhance user experiences.</p>
                    <p>Our AI solutions help businesses harness the power of machine learning and artificial intelligence to drive innovation, improve efficiency, and create competitive advantages. We develop custom AI applications that solve real business problems.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">50+</h3>
                                <p>AI Projects</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="text-primary fw-bold">95%</h3>
                                <p>Accuracy Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">Why Choose Our AI Solutions?</h4>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Custom AI Models</h6>
                                        <small class="text-muted">Tailored to your needs</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Real-time Processing</h6>
                                        <small class="text-muted">Instant insights</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Scalable Solutions</h6>
                                        <small class="text-muted">Growth-ready AI</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Continuous Learning</h6>
                                        <small class="text-muted">Self-improving systems</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our AI Services</h2>
                    <p class="section-subtitle">Comprehensive AI solutions for various business applications.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100 p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="service-icon">
                                    <i class="fas fa-robot"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Chatbots & Virtual Assistants</h4>
                                <p>Intelligent conversational AI that provides 24/7 customer support and assistance.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Natural Language Processing</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Multi-language Support</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Integration with CRM</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Sentiment Analysis</li>
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
                                    <i class="fas fa-chart-line"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Predictive Analytics</h4>
                                <p>Data-driven insights and forecasting to make informed business decisions.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Sales Forecasting</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Risk Assessment</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Trend Analysis</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Performance Optimization</li>
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
                                    <i class="fas fa-thumbs-up"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Recommendation Engines</h4>
                                <p>Personalized content and product recommendations to increase user engagement.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Product Recommendations</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Content Personalization</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Collaborative Filtering</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Real-time Updates</li>
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
                                    <i class="fas fa-eye"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Computer Vision</h4>
                                <p>Image and video analysis for automation, quality control, and security applications.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Object Detection</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Facial Recognition</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Quality Inspection</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Document Processing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Applications -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">AI Applications by Industry</h2>
                    <p class="section-subtitle">Specialized AI solutions for different business sectors.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-shopping-cart text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>E-Commerce</h5>
                        <p>Product recommendations, inventory optimization, and customer behavior analysis.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-heartbeat text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Healthcare</h5>
                        <p>Medical diagnosis, patient monitoring, and drug discovery assistance.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-university text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Finance</h5>
                        <p>Fraud detection, credit scoring, and algorithmic trading systems.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-industry text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Manufacturing</h5>
                        <p>Predictive maintenance, quality control, and supply chain optimization.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-graduation-cap text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Education</h5>
                        <p>Personalized learning, automated grading, and student performance analysis.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-car text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Transportation</h5>
                        <p>Route optimization, autonomous vehicles, and traffic prediction systems.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-newspaper text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Media & Entertainment</h5>
                        <p>Content recommendation, automated content generation, and audience analysis.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-shield-alt text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5>Security</h5>
                        <p>Threat detection, biometric authentication, and surveillance systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">AI Technologies We Use</h2>
                    <p class="section-subtitle">Cutting-edge AI and machine learning technologies.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-python text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Python</h6>
                    </div>
                </div>
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
                        <i class="fas fa-chart-bar text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Scikit-learn</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-chart-line text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Pandas</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-chart-area text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>NumPy</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Implement AI?</h2>
            <p class="section-subtitle text-white">Let's discuss how AI can transform your business and create intelligent solutions.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your AI Project</a>
        </div>
    </section>
@endsection
