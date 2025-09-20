<?php
session_start();

// السماح ب CORS إذا لزم الأمر
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

// التعامل مع معلمة اللغة
$available_languages = ['en', 'ar'];
$requested_lang = $_GET['lang'] ?? '';

if (in_array($requested_lang, $available_languages)) {
    $_SESSION['preferred_language'] = $requested_lang;
    
    // حفظ في cookie لمدة 30 يوماً
    setcookie('preferred_language', $requested_lang, time() + (30 * 24 * 60 * 60), '/');
    
    // التوجيه إلى الصفحة المناسبة
    if ($requested_lang === 'ar') {
        header('Location: Ar.php');
    } else {
        header('Location: index.php');
    }
    exit();
} else {
    // اللغة غير مدعومة، التوجيه إلى اللغة الافتراضية
    $default_lang = 'en';
    $_SESSION['preferred_language'] = $default_lang;
    header('Location: index.php');
    exit();
}
?>