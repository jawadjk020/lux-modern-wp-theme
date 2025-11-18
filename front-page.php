<?php
/**
 * Front Page Template (Home Page)
 * 
 * @package LuxModern
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero hero-gradient">
    <div class="hero-container">
        <div class="hero-content">
            <span class="hero-badge animate-fade-in-down">
                🚀 New Feature Launch
            </span>
            <h1 class="hero-title animate-fade-in-up delay-200">
                Build Stunning Websites in <span style="background: var(--gradient-primary); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Minutes</span>
            </h1>
            <p class="hero-subtitle animate-fade-in-up delay-400">
                The most powerful WordPress theme for modern businesses. Fast, flexible, and incredibly beautiful with premium design that converts.
            </p>
            <div class="hero-actions animate-fade-in-up delay-600">
                <a href="#get-started" class="btn btn-primary btn-lg">Start Free Trial</a>
                <a href="#demo" class="btn btn-ghost btn-lg">Watch Demo</a>
            </div>
        </div>
    </div>
    
    <!-- Decorative Gradient Orbs -->
    <div style="position: absolute; width: 400px; height: 400px; top: 10%; left: -10%; background: var(--gradient-primary); border-radius: 50%; filter: blur(80px); opacity: 0.4; animation: float 8s ease-in-out infinite;"></div>
    <div style="position: absolute; width: 500px; height: 500px; bottom: 10%; right: -10%; background: var(--gradient-fire); border-radius: 50%; filter: blur(80px); opacity: 0.4; animation: float 8s ease-in-out infinite; animation-delay: 2s;"></div>
</section>

<!-- Trust Bar -->
<section class="section-sm" style="background: white;">
    <div class="container">
        <p class="text-center" style="color: var(--neutral-600); font-size: var(--text-sm); margin-bottom: var(--space-6);">
            TRUSTED BY 10,000+ COMPANIES WORLDWIDE
        </p>
        <div style="display: flex; justify-content: center; align-items: center; gap: var(--space-16); flex-wrap: wrap; opacity: 0.6;">
            <div style="font-size: var(--text-2xl); font-weight: var(--font-bold); color: var(--neutral-400);">Google</div>
            <div style="font-size: var(--text-2xl); font-weight: var(--font-bold); color: var(--neutral-400);">Microsoft</div>
            <div style="font-size: var(--text-2xl); font-weight: var(--font-bold); color: var(--neutral-400);">Amazon</div>
            <div style="font-size: var(--text-2xl); font-weight: var(--font-bold); color: var(--neutral-400);">Meta</div>
            <div style="font-size: var(--text-2xl); font-weight: var(--font-bold); color: var(--neutral-400);">Apple</div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title scroll-reveal">Powerful Features for Modern Websites</h2>
        <p class="section-subtitle scroll-reveal">Everything you need to build a professional website that stands out</p>
        
        <div class="grid grid-cols-3">
            <!-- Feature Card 1 -->
            <div class="card card-service scroll-reveal">
                <div class="card-icon">
                    <svg class="icon icon-xl" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <h3 class="card-title">Lightning Fast</h3>
                <p class="card-description">Optimized for speed with Core Web Vitals scores of 90+. Your site loads in under 2 seconds.</p>
                <a href="#" class="card-link">
                    Learn More
                    <svg class="icon icon-sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            
            <!-- Feature Card 2 -->
            <div class="card card-service scroll-reveal" style="animation-delay: 100ms;">
                <div class="card-icon">
                    <svg class="icon icon-xl" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                        <path d="M3 9h18M9 21V9"/>
                    </svg>
                </div>
                <h3 class="card-title">50+ Templates</h3>
                <p class="card-description">Pre-built pages and sections for every use case. Import with one click and customize easily.</p>
                <a href="#" class="card-link">
                    Explore Templates
                    <svg class="icon icon-sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            
            <!-- Feature Card 3 -->
            <div class="card card-service scroll-reveal" style="animation-delay: 200ms;">
                <div class="card-icon">
                    <svg class="icon icon-xl" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3 class="card-title">Page Builder Ready</h3>
                <p class="card-description">Works seamlessly with Elementor and Gutenberg. Build anything without code.</p>
                <a href="#" class="card-link">
                    View Components
                    <svg class="icon icon-sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section" style="background: var(--gradient-primary); color: white;">
    <div class="container">
        <div class="grid grid-cols-3">
            <div class="stat scroll-reveal" style="text-align: center;">
                <div class="stat-number" style="color: white; font-size: var(--text-5xl); font-weight: var(--font-bold); margin-bottom: var(--space-2);">10K+</div>
                <div class="stat-label" style="color: rgba(255, 255, 255, 0.8);">Active Users</div>
            </div>
            <div class="stat scroll-reveal" style="animation-delay: 100ms; text-align: center;">
                <div class="stat-number" style="color: white; font-size: var(--text-5xl); font-weight: var(--font-bold); margin-bottom: var(--space-2);">98%</div>
                <div class="stat-label" style="color: rgba(255, 255, 255, 0.8);">Satisfaction Rate</div>
            </div>
            <div class="stat scroll-reveal" style="animation-delay: 200ms; text-align: center;">
                <div class="stat-number" style="color: white; font-size: var(--text-5xl); font-weight: var(--font-bold); margin-bottom: var(--space-2);">24/7</div>
                <div class="stat-label" style="color: rgba(255, 255, 255, 0.8);">Support Available</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title scroll-reveal">What Our Customers Say</h2>
        <p class="section-subtitle scroll-reveal">Join thousands of satisfied customers worldwide</p>
        
        <div class="grid grid-cols-3">
            <div class="testimonial scroll-reveal">
                <div class="testimonial-quote">
                    "This theme transformed our business. The design is stunning and performance is incredible. Best purchase ever!"
                </div>
                <div class="testimonial-author">
                    <img src="https://i.pravatar.cc/150?img=1" alt="Sarah Johnson" class="testimonial-avatar">
                    <div>
                        <div class="testimonial-name">Sarah Johnson</div>
                        <div class="testimonial-role">CEO, TechCorp</div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial scroll-reveal" style="animation-delay: 100ms;">
                <div class="testimonial-quote">
                    "Outstanding support and documentation. We launched our site in just 2 days. Highly recommended!"
                </div>
                <div class="testimonial-author">
                    <img src="https://i.pravatar.cc/150?img=2" alt="Michael Chen" class="testimonial-avatar">
                    <div>
                        <div class="testimonial-name">Michael Chen</div>
                        <div class="testimonial-role">Founder, StartupHub</div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial scroll-reveal" style="animation-delay: 200ms;">
                <div class="testimonial-quote">
                    "Beautiful animations and modern design. Our conversion rate increased by 45% after switching!"
                </div>
                <div class="testimonial-author">
                    <img src="https://i.pravatar.cc/150?img=3" alt="Emily Rodriguez" class="testimonial-avatar">
                    <div>
                        <div class="testimonial-name">Emily Rodriguez</div>
                        <div class="testimonial-role">Marketing Director, Growth Co</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--neutral-900); color: white;">
    <div class="container" style="text-align: center;">
        <h2 class="scroll-reveal" style="font-size: var(--text-5xl); font-weight: var(--font-bold); margin-bottom: var(--space-4); color: white;">
            Ready to Transform Your Website?
        </h2>
        <p class="scroll-reveal" style="font-size: var(--text-xl); color: rgba(255, 255, 255, 0.8); margin-bottom: var(--space-8); max-width: 600px; margin-left: auto; margin-right: auto;">
            Join 10,000+ companies using Lux Modern to create stunning websites that convert
        </p>
        <div class="scroll-reveal" style="display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap;">
            <a href="#get-started" class="btn btn-primary btn-lg">Start Free Trial</a>
            <a href="#contact" class="btn btn-ghost btn-lg" style="border-color: white; color: white;">Contact Sales</a>
        </div>
    </div>
</section>

<?php
get_footer();
?>
