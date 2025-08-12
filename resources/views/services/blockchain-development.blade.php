@extends('layouts.app')

@section('title', 'Blockchain Development Services - Fostron')
@section('description', 'Fostron provides comprehensive blockchain development services including smart contracts, NFT platforms, cryptocurrency wallets, and decentralized applications (dApps).')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Blockchain Development Solutions</h1>
                    <p class="hero-subtitle">Transform your business with cutting-edge blockchain technology. We build secure, transparent, and decentralized solutions that drive innovation and trust.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get Started</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">View Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="service-icon mx-auto" style="width: 120px; height: 120px; font-size: 3rem; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <i class="fas fa-link"></i>
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
                    <h2 class="section-title">Revolutionary Blockchain Solutions</h2>
                    <p class="section-subtitle">Leverage the power of blockchain technology to create transparent, secure, and decentralized applications that transform industries.</p>
                    <p>Our blockchain development services encompass everything from smart contracts and cryptocurrency wallets to NFT platforms and decentralized applications (dApps). We help businesses harness the potential of blockchain technology to improve efficiency, reduce costs, and build trust with their customers.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-shield-alt text-primary me-3" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Secure & Transparent</h6>
                                    <small class="text-muted">Immutable ledger technology</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-rocket text-primary me-3" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Fast & Efficient</h6>
                                    <small class="text-muted">Optimized performance</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="mb-3">Why Choose Blockchain?</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Decentralized and transparent operations</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Enhanced security and data integrity</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Reduced transaction costs and time</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Automated smart contract execution</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Global accessibility and scalability</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Immutable audit trail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Blockchain Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Blockchain Development Services</h2>
                    <p class="section-subtitle">Comprehensive blockchain solutions tailored to your business needs</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4>Smart Contracts</h4>
                        <p>Self-executing contracts with predefined rules and conditions. Automate business processes, reduce intermediaries, and ensure trustless transactions.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>Ethereum smart contracts</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Solidity development</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Contract auditing & testing</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <h4>Cryptocurrency Wallets</h4>
                        <p>Secure digital wallets for storing, sending, and receiving cryptocurrencies. Multi-currency support with advanced security features.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>Multi-currency wallets</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Cold & hot storage</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Biometric security</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>NFT Development</h4>
                        <p>Non-fungible token platforms for digital art, collectibles, and unique assets. Create, mint, and trade NFTs with custom marketplaces.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>NFT marketplace development</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Minting platforms</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Metadata management</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-cube"></i>
                        </div>
                        <h4>DeFi Applications</h4>
                        <p>Decentralized finance applications including lending platforms, DEXs, yield farming, and liquidity pools.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>Lending & borrowing platforms</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Decentralized exchanges</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Yield farming protocols</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h4>dApp Development</h4>
                        <p>Decentralized applications that run on blockchain networks. Build user-friendly dApps with modern web3 technologies.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>Web3 integration</li>
                            <li><i class="fas fa-check text-primary me-2"></i>MetaMask connectivity</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Gas optimization</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Token Development</h4>
                        <p>Custom cryptocurrency tokens and tokenomics design. Create utility tokens, governance tokens, and security tokens.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-primary me-2"></i>ERC-20 tokens</li>
                            <li><i class="fas fa-check text-primary me-2"></i>ERC-721 NFTs</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Tokenomics design</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blockchain Technologies -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Blockchain Technologies We Use</h2>
                    <p class="section-subtitle">We work with leading blockchain platforms and frameworks</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fab fa-ethereum text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Ethereum</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-link text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Polygon</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-coins text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Binance Smart Chain</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-cube text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Solana</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-network-wired text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Polkadot</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card text-center p-3">
                        <i class="fas fa-shield-alt text-primary mb-2" style="font-size: 2rem;"></i>
                        <h6>Cardano</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: var(--gradient-primary); color: white;">
        <div class="container text-center">
            <h2 class="section-title text-white">Ready to Build on Blockchain?</h2>
            <p class="section-subtitle text-white">Let's discuss how blockchain technology can transform your business and create new opportunities.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your Blockchain Project</a>
        </div>
    </section>
@endsection
