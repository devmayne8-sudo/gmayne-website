<?php
// إزالة معالجة النموذج القديم من هذا الملف
// سنعتمد على AJAX فقط للاتصال بـ send_emaul.php
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> جي ماين- حلول تكنولوجية</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="alternate" hreflang="ar" href="https://yourdomain.com/Ar.php" />
<link rel="alternate" hreflang="en" href="https://yourdomain.com/index.php" />
  <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">
  <script src="assets/js/language-switcher.js"></script>
  <link rel="stylesheet" href="assets/css/Ar.css">
  <style>

        
        /* تحسينات التصميم للشريحة */
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
        
     
        /* تصميم متجاوب */
        @media (max-width: 768px) {
            .slide-content h1 {
                font-size: 2.5rem;
            }
            
            .slide-content p {
                font-size: 1.2rem;
            }
            
            .btn-hero {
                padding: 12px 25px;
                font-size: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .slide-content h1 {
                font-size: 2rem;
            }
            
            .slide-content p {
                font-size: 1rem;
            }
            
            .btn-hero {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            
            .swiper-pagination {
                bottom: 20px !important;
            }
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
      left: 30px;
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
        left: 20px;
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

    /* تحسينات للتحقق من الصحة */
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
      text-align: right;
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
        <span class="logo-g">جي</span>
      </div>
      <span class="logo-text">ماين</span>
    </a>

    <ul class="nav-links" role="menubar">
      <li role="none"><a href="#home" class="active" role="menuitem" aria-current="page">الرئيسية</a></li>
      <li role="none"><a href="#about" role="menuitem">من نحن</a></li>
      <li role="none"><a href="#solutions" role="menuitem">الحلول</a></li>
      <li role="none"><a href="#contact" role="menuitem">اتصل بنا</a></li>
      <li role="none"><a href="#team" role="menuitem">خبرتي</a></li>
      <li role="none"><a href="#case-studies" role="menuitem">دراسات الحالة</a></li>
      <li class="mobile-language-item" role="none" style="display: none;">
        <button class="mobile-language-toggle" id="mobileLanguageToggle" aria-label="تبديل اللغة">
          <span class="mobile-language-flag" id="mobileLanguageFlag">🇸🇦</span>
          <span id="mobileLanguageText">العربية</span>
        </button>
      </li>
    </ul>

    <div class="nav-actions">
  <button class="language-toggle" id="languageToggle" 
        aria-label="التغيير إلى اللغة الإنجليزية" 
        onclick="switchLanguage('en')">
    <span class="language-flag" id="languageFlag">🇸🇦</span>
    <span id="languageText">AR</span>
</button>
    </div>

    <div class="menu-toggle" role="button" aria-label="تبديل القائمة" aria-expanded="false">
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
                    <h1>تصميم عروض بوربوينت احترافية</h1>
                    <p>أبرز موهبتك في تقديم العروض بعروض بوربوينت مذهلة ومصممة بشكل احترافي تنقل رسالتك بفعالية.</p>
                    <a href="#contact" class="btn-hero" >اطلب تصميمك الآن <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80');"></div>
                <div class="slide-content">
                    <h1>تصميم وتطوير قواعد البيانات</h1>
                    <p>أنشئ قواعد بيانات متكاملة ومحكمة تلبي احتياجات مشاريعك باحترافية عالية وكفاءة ممتازة.</p>
                    <a href="#" class="btn-hero" onclick="showComingSoon(event)">اطلب قاعدة البيانات <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"></div>
                <div class="slide-content">
                    <h1>تصميم واجهات المستخدم وتجربة المستخدم</h1>
                    <p>صمم واجهات مستخدم جذابة وسهلة الاستخدام تعزز تجربة المستخدم وتزيد من تفاعله مع تطبيقك.</p>
                    <a href="#contact" class="btn-hero" >اطلب التصميم <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1517430816045-df4b7de11d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80');"></div>
                <div class="slide-content">
                    <h1>تطوير تطبيقات ويب ومواقع إلكترونية</h1>
                    <p>أنشئ تطبيقات ويب ومواقع إلكترونية متكاملة وسريعة الاستجابة تلبي جميع احتياجاتك التقنية.</p>
                    <a href="#contact" class="btn-hero" >اطلب التطبيق</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1523966211575-eb4a01e7dd51?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1440&q=80');"></div>
                <div class="slide-content">
                    <h1>تصميم منصات تعليمية وتدريبية</h1>
                    <p>أنشئ منصات تعليمية متكاملة توفر تجربة تعلم فريدة وسهلة للطلاب والمتدربين.</p>
                    <a href="#contact" class="btn-hero" >اطلب المنصة</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1563207153-f403bf289096?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80');"></div>
                <div class="slide-content">
                    <h1>إنجاز مذكرات التخرج والبحوث</h1>
                    <p>احصل على مساعدة متخصصة في إنجاز مذكرات التخرج والبحوث العلمية بجودة عالية ودقة متناهية.</p>
                    <a href="#contact" class="btn-hero" >اطلب الخدمة <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1620712943543-bcc4688e7485?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1465&q=80');"></div>
                <div class="slide-content">
                    <h1>تقديم حلول تقنية مبتكرة</h1>
                    <p>طور مشاريعك بحلول تقنية مبتكرة ومخصصة تلبي متطلباتك وتواكب أحدث التطورات التكنولوجية.</p>
                    <a href="#contact" class="btn-hero">اطلب الحل</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80');"></div>
                <div class="slide-content">
                    <h1>تصميم تجارب واقع افتراضي ومعزز</h1>
                    <p>أنشئ تجارب غامرة باستخدام تقنيات الواقع الافتراضي والمعزز التي تنقل مستخدميك إلى عوالم جديدة.</p>
                    <a href="#contact" class="btn-hero" >صمم تجربتك <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"></div>
                <div class="slide-content">
                    <h1>تطوير تطبيقات الجوال</h1>
                    <p>صمم وطور تطبيقات جوال مبتكرة وسهلة الاستخدام لنظامي Android و iOS تلبي احتياجات مستخدميك.</p>
                    <a href="#contact" class="btn-hero" >اطلب التطبيق <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1535223289827-42f1e9919769?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80');"></div>
                <div class="slide-content">
                    <h1>تصميم هوية بصرية وشعارات</h1>
                    <p>صمم هوية بصرية مميزة وشعارات إبداعية تعبر عن علامتك التجارية وتجذب انتباه عملائك.</p>
                    <a href="#contact" class="btn-hero" >اطلب التصميم</a>
                </div>
            </div>
        </div>
        <!-- عناصر الترقيم وأزرار التنقل -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<section class="about-section" id="about">
    <div class="container">
      <div class="section-title">
        <h2>من أنا</h2>
        <p>تعرف على المسيرة والخبرة في عالم التكنولوجيا</p>
      </div>
      
      <div class="about-container">
        <div class="about-image">
    <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="فريق تقني 7" class="card-img">
        </div>
        
        <div class="about-content">
          <h2>مرحبًا، أنا <span style="color: #10b981;">عبد المؤمن بوساق</span></h2>
          <p>أنا خبير تكنولوجيا ومبتكر متحمس مع أكثر من 5 سنوات من الخبرة في إنشاء حلول رقمية مبتكرة للشركات من جميع الأحجام.</p>
          
          <div class="about-highlights">
            <div class="highlight-item">
              <div class="highlight-icon">
                <i class="fas fa-lightbulb"></i>
              </div>
              <p>مبتكر حلول تكنولوجية مبتكرة وسهلة الاستخدام</p>
            </div>
            <div class="highlight-item">
              <div class="highlight-icon">
                <i class="fas fa-rocket"></i>
              </div>
              <p>أتخصص في تحويل الأفكار إلى واقع باستخدام أحدث التقنيات</p>
            </div>
            <div class="highlight-item">
              <div class="highlight-icon">
                <i class="fas fa-handshake"></i>
              </div>
              <p>أبني شراكات طويلة الأمد مع العملاء</p>
            </div>
          </div>
          
          <p>أؤمن بأن التكنولوجيا يجب أن تمكن الشركات من تحقيق أهدافها بكفاءة أكبر. مهمتي هي تقديم حلول متطورة تدفع النمو والابتكار.</p>
          
          <div class="about-stats">
            <div class="stat-item">
              <span class="stat-number">5+</span>
              <span class="stat-text">سنوات من الخبرة</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">25+</span>
              <span class="stat-text">مشروع مكتمل</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">96%</span>
              <span class="stat-text">رضا العملاء</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <section class="content-section" id="solutions">
    <div class="container">
      <div class="section-title">
        <h2>لماذا تختار عبد المؤمن بوساق</h2>
        <p>أقدم قيمة استثنائية من خلال الابتكار والجودة والالتزام غير المشروط بنجاح عملائي.</p>
      </div>
      
      <div class="features">
        <div class="feature-card" style="--order: 1;">
          <div class="feature-icon">
            <i class="fas fa-brain"></i>
          </div>
          <h3>حلول مدعومة بالذكاء الاصطناعي</h3>
          <p>استفد من قوة الذكاء الاصطناعي لتحسين العمليات ودفع الابتكار في مشاريعك.</p>
        </div>
        
        <div class="feature-card" style="--order: 2;">
          <div class="feature-icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3>تطوير التطبيقات والمنصات</h3>
          <p>تصميم وتطوير تطبيقات ويب ومنصات رقمية متكاملة تلبي احتياجات عملك.</p>
        </div>
        
        <div class="feature-card" style="--order: 3;">
          <div class="feature-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3>الأمن على مستوى المؤسسة</h3>
          <p>حلول أمنية شاملة لحماية بياناتك وأصولك الرقمية من التهديدات.</p>
        </div>
        
        <div class="feature-card" style="--order: 4;">
          <div class="feature-icon">
            <i class="fas fa-file-powerpoint"></i>
          </div>
          <h3>عروض بوربوينت احترافية</h3>
          <p>تصميم عروض تقديمية تفاعلية ومهنية تعزز عروضك واجتماعاتك المهمة.</p>
        </div>
        
        <div class="feature-card" style="--order: 5;">
          <div class="feature-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3>تطوير الويب والجوال</h3>
          <p>بناء تطبيقات ويب سريعة الاستجابة وتطبيقات جوال متعددة المنصات بتقنيات متطورة.</p>
        </div>
        
        <div class="feature-card" style="--order: 6;">
          <div class="feature-icon">
            <i class="fas fa-database"></i>
          </div>
          <h3>تصميم قواعد البيانات</h3>
          <p>تطوير قواعد بيانات فعالة وآمنة تدعم تطبيقاتك وتضمن سلامة بياناتك.</p>
        </div>
      </div>
    </div>
  </section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
  <div class="contact-container">
    <div class="section-title text-center">
      <h2>اتصل بنا</h2>
      <p>هل لديك فكرة مشروع أو تحتاج إلى مساعدة لعملك؟ دعنا نتواصل!</p>
    </div>
    <form id="contactForm" class="contact-form needs-validation" novalidate action="https://formspree.io/f/mzzanwoy" method="POST" dir="rtl">
      <div class="form-row">
        <div class="form-group">
          <label for="name">اسمك</label>
          <input type="text" class="form-control" id="name" name="name" pattern="[\p{Arabic}a-zA-Z\s\-']+" placeholder="أدخل اسمك" required>
          <div class="invalid-feedback">يرجى إدخال اسم صالح (حروف عربية أو إنجليزية، مسافات، شرطات، أو علامات تنصيص فقط)</div>
        </div>
        <div class="form-group">
          <label for="email">البريد الإلكتروني</label>
          <input type="email" class="form-control" id="email" name="_replyto" placeholder="أدخل بريدك الإلكتروني" required>
          <div class="invalid-feedback">يرجى إدخال بريد إلكتروني صالح</div>
        </div>
      </div>
      <div class="form-group">
        <label for="subject">الموضوع</label>
        <input type="text" class="form-control" id="subject" name="_subject" placeholder="أدخل الموضوع" required>
        <div class="invalid-feedback">يرجى إدخال موضوع</div>
      </div>
      <div class="form-group">
        <label for="message">رسالتك</label>
        <textarea class="form-control" id="message" name="message" placeholder="اكتب رسالتك هنا" required></textarea>
        <div class="invalid-feedback">يرجى إدخال رسالتك</div>
      </div>
      <button type="submit" class="btn-submit" id="submitBtn">
        <i class="fas fa-paper-plane me-2"></i>إرسال الرسالة
      </button>
    </form>
  </div>
</section>

<section class="team-section" id="team">
    <div class="container">
      <div class="section-title">
        <h2>مجالات تخصصي</h2>
        <p>اكتشف المجالات التقنية التي أتميز فيها وأقدم فيها حلولاً مبتكرة</p>
      </div>
      
      <div class="team-slider">
        <div class="swiper team-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=715&q=80" alt="تطوير تطبيقات الويب">
                </div>
                <div class="team-content">
                  <h3 class="team-name">تطوير تطبيقات الويب</h3>
                  <span class="team-role">تصميم وتطوير متكامل</span>
                  <div class="team-skills">
                    <span class="skill-tag">React</span>
                    <span class="skill-tag">Vue.js</span>
                    <span class="skill-tag">Node.js</span>
                  </div>
                  <p>بناء تطبيقات ويب حديثة وسريعة الاستجابة بتقنيات متطورة.</p>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="تطوير المنصات الرقمية">
                </div>
                <div class="team-content">
                  <h3 class="team-name">تطوير المنصات الرقمية</h3>
                  <span class="team-role">منصات متكاملة</span>
                  <div class="team-skills">
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">Django</span>
                    <span class="skill-tag">MySQL</span>
                  </div>
                  <p>تصميم منصات رقمية متكاملة تلبي احتياجات العمل المختلفة.</p>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1543286386-713bdd548da4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="العروض التقديمية الاحترافية">
                </div>
                <div class="team-content">
                  <h3 class="team-name">العروض التقديمية</h3>
                  <span class="team-role">تصميم احترافي</span>
                  <div class="team-skills">
                    <span class="skill-tag">PowerPoint</span>
                    <span class="skill-tag">تصميم جرافيك</span>
                    <span class="skill-tag">الرسوم المتحركة</span>
                  </div>
                  <p>إنشاء عروض تقديمية تفاعلية ومهنية تعزز عروضك واجتماعاتك.</p>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="قواعد البيانات">
                </div>
                <div class="team-content">
                  <h3 class="team-name">قواعد البيانات</h3>
                  <span class="team-role">تصميم وإدارة</span>
                  <div class="team-skills">
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">MongoDB</span>
                    <span class="skill-tag">PostgreSQL</span>
                  </div>
                  <p>تصميم قواعد بيانات فعالة وآمنة تدعم تطبيقاتك المختلفة.</p>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="مذكرات التخرج">
                </div>
                <div class="team-content">
                  <h3 class="team-name">مذكرات التخرج</h3>
                  <span class="team-role">تصميم أكاديمي متكامل</span>
                  <div class="team-skills">
                    <span class="skill-tag">البحث العلمي</span>
                    <span class="skill-tag">التنسيق الأكاديمي</span>
                    <span class="skill-tag">المنهجية العلمية</span>
                  </div>
                  <p>إنشاء مذكرات تخرج احترافية وفق المعايير الأكاديمية العالمية.</p>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="team-card">
                <div class="team-image">
                  <img src="https://images.unsplash.com/photo-1563207153-f403bf289096?ixlib=rb-4.0.3&auto=format&fit=crop&w=1171&q=80" alt="الحلول الرقمية">
                </div>
                <div class="team-content">
                  <h3 class="team-name">الحلول الرقمية</h3>
                  <span class="team-role">ابتكار وتطوير</span>
                  <div class="team-skills">
                    <span class="skill-tag">التحول الرقمي</span>
                    <span class="skill-tag">أتمتة العمليات</span>
                    <span class="skill-tag">حلول مخصصة</span>
                  </div>
                  <p>تقديم حلول رقمية شاملة تساعد في تحويل عملك إلى العالم الرقمي.</p>
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
                <h2>المشاريع التقنية</h2>
                <p>اكتشف كيف يمكنني مساعدتك في تنفيذ مشاريعك التقنية بنجاح.</p>
            </div>
            
            <div class="case-studies-grid">
                <div class="case-study-card">
                    <div class="case-study-image">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="منصة تجارة إلكترونية">
                    </div>
                    <div class="case-study-content">
                        <h3>منصات التجارة الإلكترونية</h3>
                        <p>تطوير منصات تجارة إلكترونية متكاملة باستخدام Laravel وReact.</p>
                        <div class="tech-tags">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                        <a href="ecommerce-platforms.html" class="case-study-btn">عرض المشاريع</a>
                    </div>
                </div>
                
                <div class="case-study-card">
                    <div class="case-study-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1415&q=80" alt="تطبيقات الجوال">
                    </div>
                    <div class="case-study-content">
                        <h3>تطبيقات الجوال</h3>
                        <p>بناء تطبيقات جوال متعددة المنصات باستخدام React Native.</p>
                        <div class="tech-tags">
                            <span class="tech-tag">React Native</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">MongoDB</span>
                        </div>
                        <a href="#" onclick="showComingSoon(event)" class="case-study-btn">عرض المشاريع</a>
                    </div>
                </div>
                
                <div class="case-study-card">
                    <div class="case-study-image">
                        <img src="https://images.unsplash.com/photo-1543286386-713bdd548da4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="عروض بوربوينت">
                    </div>
                    <div class="case-study-content">
                        <h3>عروض بوربوينت احترافية</h3>
                        <p>تصميم عروض تقديمية تفاعلية ومهنية تعزز عروضك واجتماعاتك.</p>
                        <div class="tech-tags">
                            <span class="tech-tag">PowerPoint</span>
                            <span class="tech-tag">تصميم جرافيك</span>
                            <span class="tech-tag">الرسوم المتحركة</span>
                        </div>
                        <a href="#" onclick="showComingSoon(event)" class="case-study-btn">عرض العروض</a>
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
          <p>تمكين الشركات بأحدث حلول الذكاء الاصطناعي والتكنولوجيا المبتكرة.</p>
          <div class="footer-social">
            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link"><i class="fab fa-github"></i></a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="footer-links">
          <h3>روابط سريعة</h3>
          <ul>
            <li><a href="#about">من نحن</a></li>
            <li><a href="#contact">اتصل بنا</a></li>
            <li><a href="#technologies">التقنيات</a></li>
            <li><a href="#case-studies">دراسات الحالة</a></li>
          </ul>
        </div>

        <div class="footer-contact">
          <h3>معلومات الاتصال</h3>
          <ul>
            <li><i class="fas fa-envelope"></i> <a href="mailto:support@gmayne.com">Gmayne@gmail.com</a></li>
            <li><i class="fas fa-phone-alt"></i> <a href="tel:+966123456789">+213660196512</a></li>
            <li><i class="fas fa-map-marker-alt"></i> المسيلة، الجزائر</li>
          </ul>
        </div>

        <div class="footer-about">
          <h3>مهمتنا</h3>
          <p>قيادة التحول الرقمي من خلال التقنيات المبتكرة مثل الذكاء الاصطناعي وتطبيقات الجوال والحلول السحابية لخلق تأثير دائم.</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2025 G Mayne. جميع الحقوق محفوظة.</p>
      </div>
    </div>
  </footer>

  <button class="back-to-top" id="backToTop" aria-label="العودة إلى الأعلى">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="assets/js/scrip.js"></script>
  <script>
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
            title: 'خطأ في الإدخال',
            text: 'يرجى ملء جميع الحقول بشكل صحيح.',
            background: '#fff4f4',
            iconColor: '#dc3545',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false,
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
      this.value = this.value.replace(/[^A-Za-z\u0600-\u06FF\s\-']/g, '');
    });
  });

  function showComingSoon(event) {
    event.preventDefault();
    Swal.fire({
      icon: 'info',
      title: 'أمور مثيرة قادمة! 😊',
      text: 'هذا القسم تحت الإنشاء. كن على اطلاع لتجربة مذهلة!',
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

  // معالجة نموذج الاتصال باستخدام AJAX
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
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري الإرسال...';
    
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
        throw new Error(`خطأ HTTP! الحالة: ${response.status} ${response.statusText}`);
      }
      return response.json();
    })
    .then(data => {
      if (data.ok) {
        Swal.fire({
          icon: 'success',
          title: 'تم الإرسال بنجاح!',
          text: 'تم إرسال رسالتك بنجاح! سنتواصل معك قريبًا.',
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
          title: 'خطأ',
          text: data.error || 'فشل إرسال الرسالة. يرجى المحاولة مرة أخرى.',
          background: '#fff4f4',
          iconColor: '#dc3545',
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
            popup: 'animate__animated animate__bounceIn'
          },
          hideClass: {
            popup: 'animate__animated animate__bounceOut'
          }
        });
      }
    })
    .catch(error => {
      console.error('خطأ في الإرسال:', error.message);
      Swal.fire({
        icon: 'error',
        title: 'خطأ',
        text: `حدث خطأ أثناء إرسال الرسالة: ${error.message}. يرجى المحاولة مرة أخرى أو التواصل مع الدعم.`,
        background: '#fff4f4',
        iconColor: '#dc3545',
        timer: 5000,
        timerProgressBar: true,
        showConfirmButton: true,
        confirmButtonText: 'موافق',
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