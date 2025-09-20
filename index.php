<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>G mayne - Technology Solutions</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="alternate" hreflang="en" href="https://yourdomain.com/index.php" />
<link rel="alternate" hreflang="ar" href="https://yourdomain.com/Ar.php" />
<script src="assets/js/language-switcher.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>

      .swiper-pagination {
            bottom: 30px !important;
        }
        
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: white;
            opacity: 0.6;
            transition: all 0.3s ease;
        }
        
        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #11A7A5;
            transform: scale(1.3);
        }
    /* Contact section styles */
    .contact-section {
      padding: 80px 0;
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .contact-container {
      max-width: 900px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .contact-form {
      background: white;
      padding: 3rem;
      border-radius: 25px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      border: 1px solid rgba(0, 0, 0, 0.03);
      transform: translateY(0);
      transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .contact-form:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(16, 185, 129, 0.2);
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
      margin-bottom: 2rem;
    }

    .form-group {
      position: relative;
      margin-bottom: 2rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: #1e293b;
      font-size: 1rem;
      transition: color 0.3s ease;
    }

    .form-control {
      width: 100%;
      padding: 1rem 1.5rem;
      border: 2px solid #e5e7eb;
      border-radius: 50px;
      font-size: 1rem;
      background: #f8fafc;
      transition: all 0.3s ease;
      position: relative;
      z-index: 1;
    }

    .form-control:focus {
      outline: none;
      border-color: #10b981;
      box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.15);
      background: white;
      transform: scale(1.01);
    }

    .form-control::placeholder {
      color: #94a3b8;
      opacity: 0.7;
      transition: opacity 0.3s ease;
    }

    .form-control:focus::placeholder {
      opacity: 0.5;
    }

    textarea.form-control {
      min-height: 200px;
      resize: vertical;
      border-radius: 15px;
    }

    .btn-submit {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 1.2rem 3rem;
      background: linear-gradient(135deg, #10b981, #06b6d4);
      color: white;
      border: none;
      border-radius: 50px;
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      transition: all 0.4s ease;
      letter-spacing: 0.5px;
      box-shadow: 0 6px 20px rgba(16, 185, 129, 0.3);
      width: 100%;
      position: relative;
      overflow: hidden;
    }

    .btn-submit::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      transition: width 0.6s ease, height 0.6s ease;
    }

    .btn-submit:hover::before {
      width: 300px;
      height: 300px;
    }

    .btn-submit:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(16, 185, 129, 0.4);
    }

    .btn-submit:active {
      transform: translateY(0);
      box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
    }

    /* Back to Top Button */
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, #10b981, #06b6d4);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 24px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 1000;
    }

    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
      animation: pulse 2s infinite;
    }

    .back-to-top:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 16px rgba(16, 185, 129, 0.4);
    }

    .back-to-top:active {
      transform: scale(1);
      box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    /* Responsive Design */
    @media (max-width: 992px) {
      .form-row {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {
      .contact-form {
        padding: 2rem;
      }
      .back-to-top {
        width: 40px;
        height: 40px;
        font-size: 20px;
        bottom: 20px;
        right: 20px;
      }
    }

    .team-section .team-social .social-link {
      background: var(--primary) !important;
      color: white !important;
      box-shadow: 0 4px 8px rgba(16, 185, 129, 0.3);
    }

    .team-section .team-social .social-link:hover {
      background: var(--dark) !important;
      color: white !important;
    }

    /* SweetAlert2 custom styles */
    .animated-swal {
      border-radius: 20px;
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.25);
    }
    .swal-title {
      font-size: 1.5rem;
      color: #333;
      font-weight: 700;
    }
    .swal-text {
      font-size: 1rem;
      color: #555;
    }
    .swal-button {
      border-radius: 25px;
      padding: 10px 30px;
      font-weight: 600;
      transition: all 0.3s;
    }
    .swal-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Form validation styles */
    .was-validated .form-control:valid {
      border-color: #10b981;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2310b981' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    }

    .was-validated .form-control:invalid {
      border-color: #dc3545;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath d='m5.8 3.6.4.4.4-.4'/%3e%3cpath d='M6 7v2.5'/%3e%3c/svg%3e");
    }

    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 0.875em;
      color: #dc3545;
    }

    .was-validated .form-control:invalid ~ .invalid-feedback {
      display: block;
    }
    /* أنماط زر تبديل اللغة */
.language-toggle {
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.language-toggle:hover {
    transform: scale(1.05);
    border-color: #10b981;
}

.language-toggle:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.3);
}

/* أنماط للنسخة العربية */
[dir="rtl"] .language-toggle {
    margin-left: 0;
    margin-right: 1rem;
}

/* تحسين للهواتف */
@media (max-width: 768px) {
    .language-toggle {
        padding: 0.5rem;
        font-size: 0.9rem;
    }
    
    .mobile-language-item {
        display: block !important;
        text-align: center;
        padding: 1rem;
        border-top: 1px solid #e5e7eb;
    }
}

  .case-studies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .case-study-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .case-study-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        .case-study-image {
            height: 220px;
            overflow: hidden;
        }
        
        .case-study-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .case-study-card:hover .case-study-image img {
            transform: scale(1.05);
        }
        
        .case-study-content {
            padding: 25px;
        }
        
        .case-study-content h3 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .case-study-content p {
            color: #7f8c8d;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .tech-tag {
            background-color: #e8f5e9;
            color: #2c3e50;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .case-study-btn {
            display: inline-block;
            background-color: #10b981;
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease;
            text-align: center;
            width: 100%;
        }
        
        .case-study-btn:hover {
            background-color: #0d9669;
        }
        
        @media (max-width: 768px) {
            .case-studies-grid {
                grid-template-columns: 1fr;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
  </style>
</head>
<body>
  <nav class="navbar" role="navigation" aria-label="Main navigation">
    <a href="#" class="logo" aria-label="G Mayne Homepage">
      <div class="logo-icon">
        <span class="logo-g">G</span>
      </div>
      <span class="logo-text">mayne</span>
    </a>

    <ul class="nav-links" role="menubar">
      <li role="none"><a href="#home" class="active" role="menuitem" aria-current="page">Home</a></li>
      <li role="none"><a href="#about" role="menuitem">About</a></li>
      <li role="none"><a href="#content" role="menuitem">Solutions</a></li>
      <li role="none"><a href="#contact" role="menuitem">Contact</a></li>
      <li role="none"><a href="#team" role="menuitem">My Expertise</a></li>
      <li role="none"><a href="#case-studies" role="menuitem">Case Studies</a></li>
      <li class="mobile-language-item" role="none" style="display: none;">
        <button class="mobile-language-toggle" id="mobileLanguageToggle" aria-label="Toggle language">
          <span class="mobile-language-flag" id="mobileLanguageFlag">🇺🇸</span>
          <span id="mobileLanguageText">English</span>
        </button>
      </li>
    </ul>

    <div class="nav-actions">
    <button class="language-toggle" id="languageToggle" 
        aria-label="Switch to Arabic language" 
        onclick="switchLanguage('ar')">
    <span class="language-flag" id="languageFlag">🇺🇸</span>
    <span id="languageText">EN</span>
</button>
    </div>

    <div class="menu-toggle" role="button" aria-label="Toggle menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
<section class="hero-section" id="home">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"></div>
                <div class="slide-content">
                    <h1>Professional PowerPoint Presentation Design</h1>
                    <p>Showcase your presentation talent with stunning, professionally designed PowerPoint presentations that effectively convey your message.</p>
                    <a href="#contact" class="btn-hero" >Order Your Design Now <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80');"></div>
                <div class="slide-content">
                    <h1>Database Design and Development</h1>
                    <p>Build integrated and robust databases that meet your project needs with high professionalism and excellent efficiency.</p>
                    <a href="#" class="btn-hero" onclick="showComingSoon(event)">Order a Database <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"></div>
                <div class="slide-content">
                    <h1>User Interface and User Experience Design</h1>
                    <p>Design attractive and easy-to-use user interfaces that enhance the user experience and increase engagement with your application.</p>
                    <a href="#contact" class="btn-hero" >Order a Design <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1517430816045-df4b7de11d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80');"></div>
                <div class="slide-content">
                    <h1>Web Application and Website Development</h1>
                    <p>Build comprehensive and fast-responsive web applications and websites that meet all your technical needs.</p>
                    <a href="#contact" class="btn-hero" >Order an Application</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1523966211575-eb4a01e7dd51?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1440&q=80');"></div>
                <div class="slide-content">
                    <h1>Educational and Training Platform Design</h1>
                    <p>Create integrated educational platforms that provide a unique and easy learning experience for students and trainees.</p>
                    <a href="#contact" class="btn-hero" >Order a Platform</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1563207153-f403bf289096?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80');"></div>
                <div class="slide-content">
                    <h1>Completion of Graduation Theses and Research</h1>
                    <p>Get specialized assistance in completing graduation theses and scientific research with high quality and extreme accuracy.</p>
                    <a href="#contact" class="btn-hero" >Order the Service <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1620712943543-bcc4688e7485?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1465&q=80');"></div>
                <div class="slide-content">
                    <h1>Providing Innovative Technical Solutions</h1>
                    <p>Develop your projects with innovative and customized technical solutions that meet your requirements and keep up with the latest technological developments.</p>
                    <a href="#contact" class="btn-hero" >Order a Solution</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80');"></div>
                <div class="slide-content">
                    <h1>Virtual and Augmented Reality Experience Design</h1>
                    <p>Create immersive experiences using virtual and augmented reality technologies that transport your users to new worlds.</p>
                    <a href="#" class="btn-hero" onclick="showComingSoon(event)">Design Your Experience <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"></div>
                <div class="slide-content">
                    <h1>Mobile Application Development</h1>
                    <p>Design and develop innovative and easy-to-use mobile applications for Android and iOS that meet your users' needs.</p>
                    <a href="#contact" class="btn-hero" >Order an Application <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1535223289827-42f1e9919769?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80');"></div>
                <div class="slide-content">
                    <h1>Visual Identity and Logo Design</h1>
                    <p>Design a distinctive visual identity and creative logos that represent your brand and attract your customers' attention.</p>
                    <a href="#" class="btn-hero" >Order a Design</a>
                </div>
            </div>
        </div>
        <!-- Pagination and Navigation Buttons -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<section class="about-section" id="about">
    <div class="container">
      <div class="section-title">
        <h2>Who I Am</h2>
        <p>Learn about the journey and experience in the world of technology</p>
      </div>
      
      <div class="about-container">
        <div class="about-image">
    <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="فريق تقني 7" class="card-img">
</div>
<div class="about-content">
          <h2>Hello, I am <span style="color: #10b981;">Abdel moumin Boussag </span></h2>
          <p>I am a technology expert and passionate innovator with over 5 years of experience in creating innovative digital solutions for businesses of all sizes.</p>
          
          <div class="about-highlights">
            <div class="highlight-item">
              <div class="highlight-icon">
                <i class="fas fa-lightbulb"></i>
              </div>
              <p>Innovator of innovative and user-friendly technological solutions</p>
            </div>
            <div class="highlight-item">
              <div class="highlight-icon">
                <i class="fas fa-rocket"></i>
              </div>
              <p>I specialize in turning ideas into reality using the latest technologies</p>
            </div>
            <div class="highlight-item">
              <div class="highlight-icon">
                <i class="fas fa-handshake"></i>
              </div>
              <p>I build long-term partnerships with clients</p>
            </div>
          </div>
          
          <p>I believe that technology should enable businesses to achieve their goals more efficiently. My mission is to provide advanced solutions that drive growth and innovation.</p>
          
          <div class="about-stats">
            <div class="stat-item">
              <span class="stat-number">5+</span>
              <span class="stat-text">Years of Experience</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">25+</span>
              <span class="stat-text">Completed Projects</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">96%</span>
              <span class="stat-text">Client Satisfaction</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="content-section" id="solutions">
    <div class="container">
      <div class="section-title">
        <h2>Why Choose me ? </h2>
        <p>I deliver exceptional value through innovation, quality, and an unwavering commitment to my clients' success.</p>
      </div>
      
      <div class="features">
        <div class="feature-card" style="--order: 1;">
          <div class="feature-icon">
            <i class="fas fa-brain"></i>
          </div>
          <h3>AI-Powered Solutions</h3>
          <p>Leverage the power of artificial intelligence to optimize processes and drive innovation in your projects.</p>
        </div>
        
        <div class="feature-card" style="--order: 2;">
          <div class="feature-icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3>Application and Platform Development</h3>
          <p>Design and develop comprehensive web applications and digital platforms that meet your business needs.</p>
        </div>
        
        <div class="feature-card" style="--order: 3;">
          <div class="feature-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3>Enterprise-Level Security</h3>
          <p>Comprehensive security solutions to protect your data and digital assets from threats.</p>
        </div>
        
        <div class="feature-card" style="--order: 4;">
          <div class="feature-icon">
            <i class="fas fa-file-powerpoint"></i>
          </div>
          <h3>Professional PowerPoint Presentations</h3>
          <p>Design interactive and professional presentations that enhance your pitches and important meetings.</p>
        </div>
        
        <div class="feature-card" style="--order: 5;">
          <div class="feature-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3>Web and Mobile Development</h3>
          <p>Build fast-responsive web applications and cross-platform mobile apps using advanced technologies.</p>
        </div>
        
        <div class="feature-card" style="--order: 6;">
          <div class="feature-icon">
            <i class="fas fa-database"></i>
          </div>
          <h3>Database Design</h3>
          <p>Develop efficient and secure databases that support your applications and ensure your data integrity.</p>
        </div>
      </div>
    </div>
  </section>
<!-- Contact Section -->
<section id="contact" class="contact-section">
  <div class="contact-container">
    <div class="section-title text-center">
      <h2>Contact Us</h2>
      <p>We're here to help you with your projects. Fill out the form below to get in touch!</p>
    </div>
    <form id="contactForm" class="contact-form needs-validation" novalidate action="https://formspree.io/f/mzzanwoy" method="POST">
      <div class="form-row">
        <div class="form-group">
          <label for="name">Your Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required pattern="[A-Za-z\s\-']+">
          <div class="invalid-feedback">Please enter a valid name (letters, spaces, hyphens, or apostrophes only).</div>
        </div>
        <div class="form-group">
          <label for="email">Your Email</label>
          <input type="email" class="form-control" id="email" name="_replyto" placeholder="Your Email" required>
          <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="_subject" placeholder="Subject" required>
        <div class="invalid-feedback">Please enter a subject.</div>
      </div>
      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea class="form-control" id="message" name="message" placeholder="Your Message" required></textarea>
        <div class="invalid-feedback">Please enter a message.</div>
      </div>
      <button type="submit" class="btn-submit" id="submitBtn">Send Message</button>
    </form>
  </div>
</section>



<section class="team-section" id="team">
    <div class="container">
      <div class="section-title">
        <h2>My Areas of Expertise</h2>
        <p>Discover the technical fields I excel in and where I provide innovative solutions</p>
      </div>
      
      <div class="team-slider">
        <div class="swiper team-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=715&q=80" alt="Web Application Development">
                </div>
                <div class="team-content">
                  <h3 class="team-name">Web Application Development</h3>
                  <span class="team-role">Comprehensive Design and Development</span>
                  <div class="team-skills">
                    <span class="skill-tag">React</span>
                    <span class="skill-tag">Vue.js</span>
                    <span class="skill-tag">Node.js</span>
                  </div>
                  <p>Building modern, fast-responsive web applications using advanced technologies.</p>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Digital Platform Development">
                </div>
                <div class="team-content">
                  <h3 class="team-name">Digital Platform Development</h3>
                  <span class="team-role">Integrated Platforms</span>
                  <div class="team-skills">
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">Django</span>
                    <span class="skill-tag">MySQL</span>
                  </div>
                  <p>Designing integrated digital platforms that meet various business needs.</p>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1543286386-713bdd548da4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Professional Presentations">
                </div>
                <div class="team-content">
                  <h3 class="team-name">Presentations</h3>
                  <span class="team-role">Professional Design</span>
                  <div class="team-skills">
                    <span class="skill-tag">PowerPoint</span>
                    <span class="skill-tag">Animation</span>
                  </div>
                  <p>Creating interactive and professional presentations that enhance your pitches and meetings.</p>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Databases">
                </div>
                <div class="team-content">
                  <h3 class="team-name">Databases</h3>
                  <span class="team-role">Design and Management</span>
                  <div class="team-skills">
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">MongoDB</span>
                    <span class="skill-tag">Oracle</span>
                  </div>
                  <p>Designing efficient and secure databases that support your various applications.</p>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Graduation Theses">
                </div>
                <div class="team-content">
                  <h3 class="team-name">Graduation Theses</h3>
                  <span class="team-role">Comprehensive Academic Design</span>
                  <div class="team-skills">
                    <span class="skill-tag"> Research</span>
                    <span class="skill-tag"> Methodology</span>
                  </div>
                  <p>Creating professional graduation theses according to international academic standards.</p>
                </div>
              </div>
            </div>
            
            
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </section>

   <section class="case-studies-section" id="case-studies">
        <div class="container">
            <div class="section-title">
                <h2>Technical Projects</h2>
                <p>Discover how I can help you successfully implement your technical projects.</p>
            </div>
            
            <div class="case-studies-grid">
                <div class="case-study-card">
                    <div class="case-study-image">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="E-commerce Platform">
                    </div>
                    <div class="case-study-content">
                        <h3>E-commerce Platforms</h3>
                        <p>Developing integrated e-commerce platforms using Laravel and React.</p>
                        <div class="tech-tags">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                        <a href="ecommerce-platformss.html" class="case-study-btn">View Projects</a>
                    </div>
                </div>
                
                <div class="case-study-card">
                    <div class="case-study-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1415&q=80" alt="Mobile Applications">
                    </div>
                    <div class="case-study-content">
                        <h3>Mobile Applications</h3>
                        <p>Building cross-platform mobile applications using React Native.</p>
                        <div class="tech-tags">
                            <span class="tech-tag">React Native</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">MongoDB</span>
                        </div>
                        <a href="#" onclick="showComingSoon(event)" class="case-study-btn">View Projects</a>
                    </div>
                </div>
                
                <div class="case-study-card">
                    <div class="case-study-image">
                        <img src="https://images.unsplash.com/photo-1543286386-713bdd548da4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="PowerPoint Presentations">
                    </div>
                    <div class="case-study-content">
                        <h3>Professional  Presentations</h3>
                        <p>Designing interactive and professional presentations that enhance your pitches .</p>
                        <div class="tech-tags">
                            <span class="tech-tag">PowerPoint</span>
                            <span class="tech-tag">Graphic Design</span>
                        </div>
                        <a href="#" onclick="showComingSoon(event)" class="case-study-btn">View Presentations</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <footer class="footer-section">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-about">
          <h3>G Mayne</h3>
          <p>Empowering businesses with cutting-edge AI and innovative technology solutions.</p>
          <div class="footer-social">
            <a href="https://web.facebook.com/mouman.boussag.9" target="blank" class="social-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link"><i class="fab fa-github"></i></a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="footer-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#technologies">Technologies</a></li>
            <li><a href="#case-studies">Case Studies</a></li>
          </ul>
        </div>

        <div class="footer-contact">
          <h3>Contact Info</h3>
          <ul>
            <li><i class="fas fa-envelope"></i> <a href="mailto:momayne10@gmail.com">momayne10@gmail.com</a></li>
            <li><i class="fas fa-phone-alt"></i> <a href="tel:+966123456789">+213 667-12-39-87</a></li>
            <li><i class="fas fa-map-marker-alt"></i> Msila, Algeria</li>
          </ul>
        </div>

        <div class="footer-about">
          <h3>Our Mission</h3>
          <p>Driving digital transformation through innovative technologies like AI, mobile apps, and cloud solutions to create lasting impact.</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2025 G Mayne. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script>
  // Disable default alert notifications
window.alert = function() {};

(function () {
  'use strict';
  var forms = document.querySelectorAll('.needs-validation');
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
        Swal.fire({
          icon: 'error',
          title: 'Input Error',
          text: 'Please fill in all fields correctly.',
          background: '#fff4f4',
          iconColor: '#dc3545',
          timer: 5000,
          timerProgressBar: true,
          showConfirmButton: false,
          position: 'center',
          customClass: {
            popup: 'animated-swal',
            title: 'swal-title',
            content: 'swal-text'
          },
          showClass: {
            popup: 'animate__animated animate__bounceIn'
          },
          hideClass: {
            popup: 'animate__animated animate__bounceOut'
          }
        });
      }
      form.classList.add('was-validated');
    }, false);
  });
})();

document.querySelectorAll('#name').forEach(input => {
  input.addEventListener('input', function () {
    this.value = this.value.replace(/[^A-Za-z\s\-']/g, '');
  });
});

function showComingSoon(event) {
  event.preventDefault();
  Swal.fire({
    icon: 'info',
    title: 'Exciting Things Are Coming! 😊',
    text: 'This section is under construction. Stay tuned for an amazing experience!',
    background: 'linear-gradient(135deg, #ffffff, #f8f9fa)',
    iconColor: '#11A7A5',
    timer: 3000,
    timerProgressBar: true,
    showConfirmButton: false,
    position: 'center',
    customClass: {
      popup: 'animated-swal',
      title: 'swal-title',
      content: 'swal-text'
    },
    showClass: {
      popup: 'animate__animated animate__fadeInDown'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
  });
}

// Back to Top Button Functionality
const backToTopButton = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
  if (window.scrollY > 300) {
    backToTopButton.classList.add('visible');
  } else {
    backToTopButton.classList.remove('visible');
  }
});

backToTopButton.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

// Handle contact form submission with AJAX
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  if (!this.checkValidity()) {
    e.stopPropagation();
    this.classList.add('was-validated');
    return;
  }
  
  const submitBtn = document.getElementById('submitBtn');
  const originalText = submitBtn.innerHTML;
  submitBtn.disabled = true;
  submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
  
  const formData = new FormData(this);
  
  fetch('https://formspree.io/f/mzzanwoy', {
    method: 'POST',
    body: formData,
    headers: {
      'Accept': 'application/json'
    }
  })
  .then(response => {
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status} ${response.statusText}`);
    }
    return response.json();
  })
  .then(data => {
    if (data.ok) {
      Swal.fire({
        icon: 'success',
        title: 'Message Sent!',
        text: 'Your message has been sent successfully! We will contact you soon.',
        background: '#f4f9ff',
        iconColor: '#28a745',
        timer: 3000,
        timerProgressBar: true,
        showConfirmButton: false,
        position: 'center',
        customClass: {
          popup: 'animated-swal',
          title: 'swal-title',
          content: 'swal-text'
        },
        showClass: {
          popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
        }
      });
      document.getElementById('contactForm').reset();
      document.getElementById('contactForm').classList.remove('was-validated');
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: data.error || 'Failed to send the message. Please try again.',
        background: '#fff4f4',
        iconColor: '#dc3545',
        timer: 5000,
        timerProgressBar: true,
        showConfirmButton: false,
        position: 'center',
        customClass: {
          popup: 'animated-swal',
          title: 'swal-title',
          content: 'swal-text'
        },
        showClass: {
          popup: 'animate__animated animate__bounceIn'
        },
        hideClass: {
          popup: 'animate__animated animate__bounceOut'
        }
      });
    }
  })
  .catch(error => {
    console.error('Fetch error:', error.message);
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: `An error occurred while sending the message: ${error.message}. Please try again or contact support.`,
      background: '#fff4f4',
      iconColor: '#dc3545',
      timer: 5000,
      timerProgressBar: true,
      showConfirmButton: true,
      confirmButtonText: 'OK',
      position: 'center',
      customClass: {
        popup: 'animated-swal',
        title: 'swal-title',
        content: 'swal-text',
        confirmButton: 'swal-button'
      },
      showClass: {
        popup: 'animate__animated animate__bounceIn'
      },
      hideClass: {
        popup: 'animate__animated animate__bounceOut'
      }
    });
  })
  .finally(() => {
    submitBtn.disabled = false;
    submitBtn.innerHTML = originalText;
  });
});

  </script>
</body>
</html>