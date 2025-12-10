<?php
// Define page title and description for SEO
$page_title = "God's Angels Junior School";
$page_description = "Providing a Christ-centered education that develops the whole child in a safe, nurturing environment.";
$page_keywords = "primary school, christian education, god's angels, junior school, safe learning";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --cream: #fdf8f0;
            --soft-cream: #f8efd8;
            --white: #ffffff;
            --blue: #4a6fa5;
            --light-blue: #87ceeb;
            --dark-blue: #2c3e50;
            --text-dark: #333333;
            --text-light: #666666;
            --accent: #4a6fa5;
            --primary: #2c3e50;
            --accent-light: #e3f2fd;
            --primary-blue: #3498db;
            --primary-green: #2ecc71;
            --primary-purple: #9b59b6;
            --primary-orange: #e67e22;
            --gold: #d4af37;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--cream) 0%, var(--soft-cream) 100%);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(10px);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 60px;
            margin-right: 15px;
        }
        
        .logo h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--dark-blue);
            background: linear-gradient(to right, var(--dark-blue), var(--blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .logo span {
            font-weight: 700;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 25px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: var(--dark-blue);
            font-weight: 500;
            font-size: 1.1rem;
            transition: color 0.3s;
            position: relative;
            padding: 5px 0;
        }
        
        nav ul li a:hover {
            color: var(--blue);
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--blue);
            transition: width 0.3s;
        }
        
        nav ul li a:hover::after {
            width: 100%;
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-blue);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            padding: 150px 0 100px;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, transparent 20%, var(--primary) 150%);
            opacity: 0.1;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .hero h2 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            margin-bottom: 20px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
            animation: fadeInDown 1s ease;
        }
        
        .hero p {
            font-size: 1.4rem;
            margin-bottom: 30px;
            color: var(--white);
            text-shadow: 0 1px 3px rgba(0,0,0,0.5);
            animation: fadeInUp 1s ease 0.2s forwards;
            opacity: 0;
        }
        
        .btn {
            display: inline-block;
            background: var(--blue);
            color: var(--white);
            padding: 14px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            border: 2px solid var(--blue);
            margin: 0 10px;
            box-shadow: 0 4px 15px rgba(74, 111, 165, 0.4);
        }
        
        .btn:hover {
            background: transparent;
            color: var(--blue);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(74, 111, 165, 0.6);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--blue);
            border: 2px solid var(--blue);
        }
        
        .btn-outline:hover {
            background: var(--blue);
            color: var(--white);
        }
        
        /* Sections */
        section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .section-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            color: var(--dark-blue);
            position: relative;
            display: inline-block;
            padding-bottom: 20px;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--blue);
            border-radius: 2px;
        }
        
        .section-subtitle {
            font-size: 1.2rem;
            color: var(--text-light);
            max-width: 700px;
            margin: 20px auto 0;
        }
        
        /* About Section */
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h3 {
            font-size: 2rem;
            margin-bottom: 25px;
            color: var(--blue);
            position: relative;
            padding-left: 30px;
        }
        
        .about-text h3::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 3px;
            background: var(--blue);
        }
        
        .about-text p {
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        
        .about-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            position: relative;
            transform: perspective(1000px) rotateY(-5deg);
            transition: transform 0.5s ease;
        }
        
        .about-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        
        .about-image:hover img {
            transform: scale(1.05);
        }
        
        /* Features */
        .features {
            background: var(--white);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .features::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: var(--blue);
            opacity: 0.05;
            z-index: 0;
        }
        
        .features::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -10%;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: var(--blue);
            opacity: 0.05;
            z-index: 0;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            position: relative;
            z-index: 2;
        }
        
        .feature-card {
            background: var(--cream);
            padding: 40px 30px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.4s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--blue);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }
        
        .feature-card:hover::before {
            transform: scaleX(1);
        }
        
        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--blue), #6b8cbc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: var(--white);
            font-size: 2.2rem;
            box-shadow: 0 5px 15px rgba(74, 111, 165, 0.3);
        }
        
        .feature-card h3 {
            margin-bottom: 15px;
            color: var(--dark-blue);
            font-size: 1.5rem;
        }
        
        /* Programs */
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
        }
        
        .program-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s;
            position: relative;
        }
        
        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .program-image {
            height: 220px;
            overflow: hidden;
        }
        
        .program-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }
        
        .program-card:hover .program-image img {
            transform: scale(1.1);
        }
        
        .program-content {
            padding: 30px;
        }
        
        .program-content h3 {
            margin-bottom: 15px;
            color: var(--dark-blue);
            font-size: 1.6rem;
            position: relative;
            padding-left: 30px;
        }
        
        .program-content h3::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 3px;
            background: var(--blue);
        }
        
        .program-content p {
            margin-bottom: 20px;
            color: var(--text-light);
        }
        
        /* Academic Resources */
        .academic-section {
            background: var(--white);
            position: relative;
            overflow: hidden;
        }
        
        .academic-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background: linear-gradient(90deg, rgba(253, 248, 240, 0.2) 0%, rgba(248, 239, 216, 0.4) 100%);
            z-index: 0;
        }
        
        .academic-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            position: relative;
            z-index: 2;
        }
        
        .tab-btn {
            padding: 15px 30px;
            background: var(--cream);
            border: none;
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            margin: 8px;
            border-radius: 30px;
            position: relative;
            overflow: hidden;
            color: var(--dark-blue);
        }
        
        .tab-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--blue);
            z-index: -1;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s ease;
        }
        
        .tab-btn:hover::before {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .tab-btn.active, .tab-btn:hover {
            color: white;
        }
        
        .tab-btn.active::before {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .tab-content {
            display: none;
            position: relative;
            z-index: 2;
        }
        
        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .curriculum-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
        }
        
        .curriculum-card {
            background: var(--cream);
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .curriculum-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--blue);
        }
        
        .curriculum-card:hover {
            transform: translateY(-10px);
        }
        
        .curriculum-card h3 {
            color: var(--blue);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            font-size: 1.5rem;
        }
        
        .curriculum-card h3 i {
            margin-right: 15px;
            color: var(--blue);
            font-size: 1.8rem;
        }
        
        .platform-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .platform-card {
            background: var(--cream);
            padding: 35px 25px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .platform-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: var(--blue);
            opacity: 0.1;
            transition: height 0.4s ease;
        }
        
        .platform-card:hover::before {
            height: 100%;
        }
        
        .platform-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .platform-icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--blue), #6b8cbc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: white;
            font-size: 2.2rem;
            box-shadow: 0 5px 15px rgba(74, 111, 165, 0.3);
        }
        
        .platform-card h3 {
            margin-bottom: 15px;
            font-size: 1.4rem;
            color: var(--dark-blue);
        }
        
        /* Safety & Security Section */
        .safety-section {
            background: var(--soft-cream);
            position: relative;
        }
        
        .safety-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 Q50,20 100,0 L100,100 Q50,80 0,100 Z" fill="rgba(74,111,165,0.05)"/></svg>');
            background-size: cover;
            opacity: 0.5;
            z-index: 0;
        }
        
        .safety-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            position: relative;
            z-index: 2;
        }
        
        .safety-card {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s;
            border-top: 4px solid var(--blue);
        }
        
        .safety-card:nth-child(2) {
            border-top-color: var(--primary-green);
        }
        
        .safety-card:nth-child(3) {
            border-top-color: var(--primary-purple);
        }
        
        .safety-card:hover {
            transform: translateY(-10px);
        }
        
        .safety-icon {
            width: 70px;
            height: 70px;
            background: var(--blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 1.8rem;
        }
        
        .safety-card:nth-child(2) .safety-icon {
            background: var(--primary-green);
        }
        
        .safety-card:nth-child(3) .safety-icon {
            background: var(--primary-purple);
        }
        
        .safety-card h3 {
            margin-bottom: 15px;
            color: var(--dark-blue);
        }
        
        /* Testimonials Section */
        .testimonials-section {
            background: var(--white);
            padding: 100px 0;
        }
        
        .testimonials-container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        
        .testimonial {
            background: var(--cream);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            text-align: center;
            display: none;
        }
        
        .testimonial.active {
            display: block;
            animation: fadeIn 0.8s;
        }
        
        .testimonial img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 3px solid var(--blue);
        }
        
        .testimonial p {
            font-style: italic;
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: var(--text-dark);
        }
        
        .testimonial h4 {
            color: var(--blue);
            margin-bottom: 5px;
        }
        
        .testimonial .role {
            color: var(--text-light);
            font-size: 0.9rem;
        }
        
        .testimonial-nav {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        .testimonial-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ddd;
            margin: 0 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .testimonial-dot.active {
            background: var(--blue);
        }
        
        /* Faculty Section */
        .faculty-section {
            background: var(--soft-cream);
        }
        
        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .faculty-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        
        .faculty-card:hover {
            transform: translateY(-10px);
        }
        
        .faculty-image {
            height: 250px;
            overflow: hidden;
        }
        
        .faculty-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .faculty-card:hover .faculty-image img {
            transform: scale(1.1);
        }
        
        .faculty-content {
            padding: 25px;
            text-align: center;
        }
        
        .faculty-content h3 {
            color: var(--dark-blue);
            margin-bottom: 5px;
        }
        
        .faculty-content .role {
            color: var(--blue);
            font-size: 0.9rem;
            margin-bottom: 15px;
            display: block;
        }
        
        .faculty-content p {
            color: var(--text-light);
            font-size: 0.95rem;
        }
        
        .social-links-faculty {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
        }
        
        .social-links-faculty a {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: var(--cream);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--blue);
            transition: all 0.3s;
        }
        
        .social-links-faculty a:hover {
            background: var(--blue);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Gallery Section */
        .gallery-section {
            background: var(--white);
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .gallery-item {
            height: 250px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            cursor: pointer;
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(74, 111, 165, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .gallery-overlay i {
            color: white;
            font-size: 2rem;
        }
        
        /* Administrative Section */
        .admin-section {
            background: var(--cream);
            position: relative;
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            position: relative;
            z-index: 2;
        }
        
        .news-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s;
        }
        
        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .news-image {
            height: 200px;
            overflow: hidden;
        }
        
        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .news-card:hover .news-image img {
            transform: scale(1.1);
        }
        
        .news-content {
            padding: 25px;
        }
        
        .news-date {
            color: var(--blue);
            font-size: 0.95rem;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            font-weight: 500;
        }
        
        .news-date i {
            margin-right: 10px;
        }
        
        .news-content h3 {
            margin-bottom: 15px;
            font-size: 1.4rem;
            color: var(--dark-blue);
        }
        
        /* Community Section */
        .community-content {
            display: flex;
            gap: 50px;
            align-items: center;
        }
        
        .community-text {
            flex: 1;
        }
        
        .community-text h3 {
            font-size: 2rem;
            margin-bottom: 25px;
            color: var(--blue);
            position: relative;
            padding-left: 30px;
        }
        
        .community-text h3::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 3px;
            background: var(--blue);
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .value-card {
            background: var(--white);
            padding: 35px 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            border-top: 4px solid var(--blue);
            transition: transform 0.3s;
        }
        
        .value-card:hover {
            transform: translateY(-10px);
        }
        
        .value-card h3 {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 1.4rem;
        }
        
        .value-card h3 i {
            margin-right: 15px;
            color: var(--blue);
            font-size: 1.8rem;
        }
        
        .community-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            position: relative;
            transform: perspective(1000px) rotateY(5deg);
            transition: transform 0.5s ease;
        }
        
        .community-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }
        
        .community-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        
        .community-image:hover img {
            transform: scale(1.05);
        }
        
        /* Events */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
        }
        
        .event-card {
            background: var(--white);
            border-radius: 15px;
            padding: 35px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-left: 5px solid var(--blue);
            transition: transform 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .event-card:hover {
            transform: translateY(-10px);
        }
        
        .event-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 5px;
            background: var(--blue);
            transition: width 0.5s ease;
        }
        
        .event-card:hover::before {
            width: 100%;
        }
        
        .event-date {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            color: var(--blue);
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .event-date i {
            margin-right: 12px;
            font-size: 1.2rem;
        }
        
        .event-card h3 {
            margin-bottom: 15px;
            font-size: 1.5rem;
            color: var(--dark-blue);
        }
        
        /* Contact */
        .contact-container {
            display: flex;
            gap: 50px;
        }
        
        .contact-info {
            flex: 1;
        }
        
        .contact-info h3 {
            margin-bottom: 30px;
            color: var(--blue);
            font-size: 1.8rem;
            position: relative;
            padding-left: 30px;
        }
        
        .contact-info h3::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 3px;
            background: var(--blue);
        }
        
        .contact-detail {
            display: flex;
            margin-bottom: 30px;
            padding: 15px;
            background: var(--cream);
            border-radius: 10px;
            transition: transform 0.3s;
        }
        
        .contact-detail:hover {
            transform: translateX(10px);
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--blue), #6b8cbc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            margin-right: 20px;
            flex-shrink: 0;
            font-size: 1.5rem;
            box-shadow: 0 5px 15px rgba(74, 111, 165, 0.3);
        }
        
        .contact-form {
            flex: 1;
            background: var(--white);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }
        
        .contact-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--blue);
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: var(--dark-blue);
            font-size: 1.05rem;
        }
        
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--blue);
            outline: none;
            box-shadow: 0 0 0 3px rgba(74, 111, 165, 0.2);
        }
        
        .form-group textarea {
            height: 160px;
            resize: vertical;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--primary), #1a2530);
            color: var(--white);
            padding: 80px 0 40px;
            position: relative;
            overflow: hidden;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--blue);
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
            position: relative;
            z-index: 2;
        }
        
        .footer-column h3 {
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 12px;
            font-size: 1.4rem;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--blue);
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 15px;
        }
        
        .footer-column ul li a {
            color: #bbb;
            text-decoration: none;
            transition: all 0.3s;
            display: flex;
            align-items: center;
        }
        
        .footer-column ul li a i {
            margin-right: 10px;
            color: var(--blue);
            width: 20px;
        }
        
        .footer-column ul li a:hover {
            color: var(--blue);
            transform: translateX(5px);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: var(--white);
            transition: all 0.3s;
            font-size: 1.2rem;
        }
        
        .social-links a:hover {
            background: var(--blue);
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(74, 111, 165, 0.4);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #bbb;
            font-size: 0.95rem;
            position: relative;
            z-index: 2;
        }
        
        .copyright a {
            color: var(--blue);
            text-decoration: none;
        }
        
        .copyright a:hover {
            text-decoration: underline;
        }
        
        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h2 {
                font-size: 3rem;
            }
            
            .about-content,
            .community-content {
                flex-direction: column;
            }
            
            .about-image,
            .community-image {
                transform: none !important;
            }
        }
        
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
            
            nav ul {
                position: fixed;
                top: 80px;
                left: 0;
                background: var(--white);
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
                transform: translateY(-150%);
                transition: transform 0.3s;
            }
            
            nav ul.active {
                transform: translateY(0);
            }
            
            nav ul li {
                margin: 15px 0;
            }
            
            .hero h2 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .contact-container {
                flex-direction: column;
            }
            
            .academic-tabs {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                display: block;
                margin: 15px auto;
                width: 80%;
            }
            
            .section-title h2 {
                font-size: 2.3rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                padding: 120px 0 80px;
            }
            
            .hero h2 {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .tab-btn {
                width: 100%;
                margin: 8px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <h1>God's <span>Angels</span> Junior School</h1>
            </div>
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#academics">Academics</a></li>
                    <li><a href="#safety">Safety</a></li>
                    <li><a href="#faculty">Faculty</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#admin">Administration</a></li>
                    <li><a href="#community">Community</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <h2>Nurturing Young Minds with Love & Excellence</h2>
            <p>Providing a Christ-centered education that develops the whole child in a safe, nurturing environment.</p>
            <div class="hero-buttons">
                <a href="#admissions" class="btn">Enroll Now</a>
                <a href="#academics" class="btn btn-outline">Explore Academics</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>About Our School</h2>
                <p class="section-subtitle">Discover our mission, vision, and commitment to Christian education</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Where Faith and Learning Unite</h3>
                    <p>Founded in 1998, God's Angels Junior School has been providing quality Christian education for over two decades. Our mission is to inspire students to reach their God-given potential through academic excellence, spiritual growth, and character development.</p>
                    <p>Our dedicated faculty creates a nurturing environment where each child is known, valued, and challenged to achieve their best. We maintain a low student-teacher ratio to ensure personalized attention for every learner.</p>
                    <p>At God's Angels, we believe that education extends beyond academics to include moral and spiritual development, preparing students to be compassionate leaders and responsible citizens.</p>
                    <a href="#community" class="btn">Our Community</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="School Building">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us</h2>
                <p class="section-subtitle">We provide an exceptional learning environment that nurtures the whole child</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Academic Excellence</h3>
                    <p>Our rigorous curriculum meets and exceeds national standards, fostering critical thinking and problem-solving skills.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-praying-hands"></i>
                    </div>
                    <h3>Christian Values</h3>
                    <p>Christ-centered education that integrates biblical principles into all aspects of learning and school life.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Small Class Sizes</h3>
                    <p>Low student-teacher ratio ensures personalized attention and support for every student.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Holistic Development</h3>
                    <p>Focus on developing the whole child - spiritually, academically, socially, emotionally, and physically.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Academics Section -->
    <section id="academics" class="academic-section">
        <div class="container">
            <div class="section-title">
                <h2>Academic Resources</h2>
                <p class="section-subtitle">Comprehensive tools and platforms to support student learning</p>
            </div>
            
            <div class="academic-tabs">
                <button class="tab-btn active" data-tab="curriculum">Curriculum</button>
                <button class="tab-btn" data-tab="platforms">Online Platforms</button>
                <button class="tab-btn" data-tab="resources">Learning Resources</button>
            </div>
            
            <div id="curriculum" class="tab-content active">
                <div class="curriculum-grid">
                    <div class="curriculum-card">
                        <h3><i class="fas fa-book"></i> Core Subjects</h3>
                        <p>Our comprehensive curriculum includes Language Arts, Mathematics, Science, Social Studies, and Biblical Studies. We follow national standards while integrating Christian principles throughout all subjects.</p>
                        <p><strong>Assessment:</strong> Regular evaluations, portfolios, and standardized testing to track progress.</p>
                    </div>
                    <div class="curriculum-card">
                        <h3><i class="fas fa-paint-brush"></i> Enrichment Programs</h3>
                        <p>Students participate in specialized classes including:</p>
                        <ul style="padding-left: 20px; margin-top: 10px;">
                            <li>Visual Arts & Music</li>
                            <li>Physical Education</li>
                            <li>Technology & Coding</li>
                            <li>Foreign Language (Spanish)</li>
                            <li>Drama & Public Speaking</li>
                        </ul>
                    </div>
                    <div class="curriculum-card">
                        <h3><i class="fas fa-graduation-cap"></i> Academic Approach</h3>
                        <p>We employ a balanced approach combining:</p>
                        <ul style="padding-left: 20px; margin-top: 10px;">
                            <li>Project-Based Learning</li>
                            <li>Collaborative Group Work</li>
                            <li>Individualized Instruction</li>
                            <li>Hands-On Experiments</li>
                            <li>Character Education Integration</li>
                        </ul>
                        <p>Class sizes average 15 students to ensure personal attention.</p>
                    </div>
                </div>
            </div>
            
            <div id="platforms" class="tab-content">
                <div class="platform-grid">
                    <div class="platform-card">
                        <div class="platform-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h3>Google Classroom</h3>
                        <p>Our primary learning management system for assignments, communication, and resource sharing.</p>
                        <a href="#" class="btn btn-outline" style="margin-top: 15px;">Access Portal</a>
                    </div>
                    <div class="platform-card">
                        <div class="platform-icon">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <h3>Reading Plus</h3>
                        <p>Personalized reading improvement program that adapts to each student's level.</p>
                        <a href="#" class="btn btn-outline" style="margin-top: 15px;">Access Portal</a>
                    </div>
                    <div class="platform-card">
                        <div class="platform-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h3>Mathletics</h3>
                        <p>Engaging mathematics practice and assessment platform aligned with our curriculum.</p>
                        <a href="#" class="btn btn-outline" style="margin-top: 15px;">Access Portal</a>
                    </div>
                    <div class="platform-card">
                        <div class="platform-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3>ZOOM Classes</h3>
                        <p>For remote learning days and special virtual events with guest speakers.</p>
                        <a href="#" class="btn btn-outline" style="margin-top: 15px;">Join Class</a>
                    </div>
                </div>
            </div>
            
            <div id="resources" class="tab-content">
                <div class="curriculum-grid">
                    <div class="curriculum-card">
                        <h3><i class="fas fa-file-alt"></i> Student Resources</h3>
                        <p>Access to a variety of academic support materials:</p>
                        <ul style="padding-left: 20px; margin-top: 10px;">
                            <li>Online textbooks and e-books</li>
                            <li>Research databases and encyclopedias</li>
                            <li>Interactive learning games</li>
                            <li>Writing and grammar tools</li>
                            <li>Math practice worksheets</li>
                        </ul>
                        <p>All resources are accessible through our student portal.</p>
                    </div>
                    <div class="curriculum-card">
                        <h3><i class="fas fa-chalkboard-teacher"></i> Teacher Resources</h3>
                        <p>Our faculty utilizes:</p>
                        <ul style="padding-left: 20px; margin-top: 10px;">
                            <li>Professional development platforms</li>
                            <li>Curriculum planning tools</li>
                            <li>Assessment and grading software</li>
                            <li>Christian education resource libraries</li>
                            <li>Collaborative planning spaces</li>
                        </ul>
                    </div>
                    <div class="curriculum-card">
                        <h3><i class="fas fa-users"></i> Parent Resources</h3>
                        <p>Parents can access:</p>
                        <ul style="padding-left: 20px; margin-top: 10px;">
                            <li>Real-time grade reports</li>
                            <li>Attendance records</li>
                            <li>Assignment calendars</li>
                            <li>Educational support guides</li>
                            <li>Parent-teacher communication tools</li>
                        </ul>
                        <p>Visit our Parent Portal for login information.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Safety & Security Section -->
    <section id="safety" class="safety-section">
        <div class="container">
            <div class="section-title">
                <h2>Safety & Security</h2>
                <p class="section-subtitle">Your child's safety is our top priority</p>
            </div>
            <div class="safety-grid">
                <div class="safety-card">
                    <div class="safety-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Campus Security</h3>
                    <p>Our campus is secured with controlled access gates, security cameras, and 24/7 monitoring. All visitors must check in at the main office and wear identification badges.</p>
                </div>
                <div class="safety-card">
                    <div class="safety-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3>Trained Staff</h3>
                    <p>All faculty and staff undergo background checks and receive regular training in child safety, first aid, and emergency procedures. We maintain a 1:10 teacher-to-student ratio in all classes.</p>
                </div>
                <div class="safety-card">
                    <div class="safety-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Health & Wellness</h3>
                    <p>On-site nurse available during school hours. Regular health screenings, flu vaccinations, and a comprehensive wellness program ensure students stay healthy and active.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-title">
                <h2>What Parents Say</h2>
                <p class="section-subtitle">Hear from our school community</p>
            </div>
            <div class="testimonials-container">
                <div class="testimonial active">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Parent">
                    <p>"God's Angels has been a blessing for our family. The teachers truly care about each child's development, and the Christian values are beautifully integrated into the curriculum."</p>
                    <h4>Sarah Johnson</h4>
                    <div class="role">Parent of 2 students</div>
                </div>
                <div class="testimonial">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Parent">
                    <p>"The small class sizes and individualized attention have helped my son thrive academically and socially. We couldn't be happier with our choice of school."</p>
                    <h4>Michael Thompson</h4>
                    <div class="role">Parent of 3 students</div>
                </div>
                <div class="testimonial">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Parent">
                    <p>"The nurturing environment and strong emphasis on character development have made such a difference in our daughter's confidence and love for learning."</p>
                    <h4>Emily Rodriguez</h4>
                    <div class="role">Parent of 1 student</div>
                </div>
                <div class="testimonial-nav">
                    <div class="testimonial-dot active" data-index="0"></div>
                    <div class="testimonial-dot" data-index="1"></div>
                    <div class="testimonial-dot" data-index="2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faculty Section -->
    <section id="faculty" class="faculty-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Faculty</h2>
                <p class="section-subtitle">Meet our dedicated and experienced educators</p>
            </div>
            <div class="faculty-grid">
                <div class="faculty-card">
                    <div class="faculty-image">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Principal">
                    </div>
                    <div class="faculty-content">
                        <h3>Mrs. Elizabeth Harper</h3>
                        <span class="role">Principal</span>
                        <p>20 years of educational leadership with a focus on creating nurturing environments for children.</p>
                        <div class="social-links-faculty">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="faculty-card">
                    <div class="faculty-image">
                        <img src="https://images.unsplash.com/photo-1594751543129-5ff900b4e4d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Teacher">
                    </div>
                    <div class="faculty-content">
                        <h3>Mr. David Chen</h3>
                        <span class="role">Mathematics Teacher</span>
                        <p>Passionate about making math engaging and accessible for all students through creative problem-solving.</p>
                        <div class="social-links-faculty">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="faculty-card">
                    <div class="faculty-image">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Teacher">
                    </div>
                    <div class="faculty-content">
                        <h3>Mrs. Rachel Williams</h3>
                        <span class="role">Language Arts Teacher</span>
                        <p>Dedicated to fostering a love of reading and writing through creative storytelling and literature.</p>
                        <div class="social-links-faculty">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="faculty-card">
                    <div class="faculty-image">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Teacher">
                    </div>
                    <div class="faculty-content">
                        <h3>Mr. James Miller</h3>
                        <span class="role">Science Teacher</span>
                        <p>Believes in hands-on learning and inquiry-based exploration to spark curiosity in young scientists.</p>
                        <div class="social-links-faculty">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="section-title">
                <h2>School Gallery</h2>
                <p class="section-subtitle">A glimpse into our school life</p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="School Building">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Classroom">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Playground">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Science Fair">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Library">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1523237172940-6dd3e0f3e0e1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Sports">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs">
        <div class="container">
            <div class="section-title">
                <h2>Our Programs</h2>
                <p class="section-subtitle">Designed to nurture the unique potential in every child</p>
            </div>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Early Years">
                    </div>
                    <div class="program-content">
                        <h3>Early Years (3-5 years)</h3>
                        <p>Our nurturing early childhood program focuses on play-based learning, social development, and foundational skills in a Christ-centered environment.</p>
                        <a href="#" class="btn btn-outline" style="margin-top: 15px;">Learn More</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Primary School">
                    </div>
                    <div class="program-content">
                        <h3>Primary School (6-11 years)</h3>
                        <p>A comprehensive curriculum that develops critical thinking, creativity, and character through project-based learning and core academic subjects.</p>
                        <a href="#" class="btn btn-outline" style="margin-top: 15px;">Learn More</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="Enrichment">
                    </div>
                    <div class="program-content">
                        <h3>Enrichment Programs</h3>
                        <p>Specialized programs in music, art, sports, and technology that complement our academic curriculum and develop students' talents.</p>
                        <a href="#" class="btn btn-outline" style="margin-top: 15px;">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Administrative Section -->
    <section id="admin" class="admin-section">
        <div class="container">
            <div class="section-title">
                <h2>School Administration</h2>
                <p class="section-subtitle">Stay updated with school news, policies, and administrative information</p>
            </div>
            
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="School News">
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i class="far fa-calendar-alt"></i>
                            <span>November 10, 2025</span>
                        </div>
                        <h3>Annual Science Fair Success</h3>
                        <p>Our students showcased incredible projects at this year's science fair, with several winning regional competitions. Special thanks to our dedicated science teachers!</p>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="School News">
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i class="far fa-calendar-alt"></i>
                            <span>November 5, 2025</span>
                        </div>
                        <h3>New Library Resources</h3>
                        <p>We've expanded our library with 500+ new books and digital resources to support our curriculum and foster a love of reading among students.</p>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1523237172940-6dd3e0f3e0e1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="School News">
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <i class="far fa-calendar-alt"></i>
                            <span>October 28, 2025</span>
                        </div>
                        <h3>Parent-Teacher Conference Dates</h3>
                        <p>Mark your calendars! Parent-teacher conferences will be held November 20-22. Sign-up sheets will be available through the parent portal next week.</p>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="#" class="btn" style="display: inline-block;">View All News</a>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section id="community">
        <div class="container">
            <div class="section-title">
                <h2>Our School Community</h2>
                <p class="section-subtitle">Building a nurturing environment where families grow together</p>
            </div>
            <div class="community-content">
                <div class="community-text">
                    <h3>Building a Nurturing Community Together</h3>
                    <p>At God's Angels Junior School, we believe that education happens not just in the classroom, but through a strong partnership between school, family, and community. Our school community is built on Christian values of love, respect, and service.</p>
                    <p>We foster a sense of belonging through regular events, volunteer opportunities, and meaningful connections between families. Our Parent-Teacher Fellowship plays a vital role in enhancing school life and supporting our students.</p>
                    
                    <div class="values-grid">
                        <div class="value-card">
                            <h3><i class="fas fa-heart"></i> Love</h3>
                            <p>We create a warm, caring environment where every child feels valued and secure.</p>
                        </div>
                        <div class="value-card">
                            <h3><i class="fas fa-hands-helping"></i> Service</h3>
                            <p>Students participate in community service projects that develop compassion and social responsibility.</p>
                        </div>
                        <div class="value-card">
                            <h3><i class="fas fa-star"></i> Excellence</h3>
                            <p>We encourage all members of our community to strive for their personal best in all endeavors.</p>
                        </div>
                        <div class="value-card">
                            <h3><i class="fas fa-pray"></i> Faith</h3>
                            <p>Biblical principles guide our interactions, decisions, and educational approach.</p>
                        </div>
                    </div>
                </div>
                <div class="community-image">
                    <img src="https://images.unsplash.com/photo-1523579858882-4a0e472b394c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" alt="School Community">
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>Upcoming Events</h2>
                <p class="section-subtitle">Join us for these special community gatherings and celebrations</p>
            </div>
            <div class="events-grid">
                <div class="event-card">
                    <div class="event-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>November 20, 2025 | 9:00 AM</span>
                    </div>
                    <h3>Parent-Teacher Conference</h3>
                    <p>Meet with your child's teachers to discuss their progress and development.</p>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>December 5, 2025 | 2:00 PM</span>
                    </div>
                    <h3>Christmas Celebration</h3>
                    <p>Annual Christmas program featuring performances by our students.</p>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>January 15, 2026 | 10:00 AM</span>
                    </div>
                    <h3>Open House Day</h3>
                    <p>Prospective families are invited to tour our facilities and meet our staff.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p class="section-subtitle">We'd love to hear from you and answer any questions</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4>Address</h4>
                            <p>123 Education Lane, Grace City, GC 10001</p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4>Phone</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p>info@godsangels.edu</p>
                            <p>admissions@godsangels.edu</p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4>Office Hours</h4>
                            <p>Monday-Friday: 8:00 AM - 4:00 PM</p>
                            <p>Saturday: 9:00 AM - 12:00 PM (Administrative)</p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-bus"></i>
                        </div>
                        <div>
                            <h4>Transportation</h4>
                            <p>We offer school bus services to surrounding neighborhoods. Contact our transportation office for routes and schedules.</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="admission">Admission Inquiry</option>
                                <option value="academic">Academic Question</option>
                                <option value="general">General Information</option>
                                <option value="feedback">Feedback</option>
                                <option value="transportation">Transportation</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>God's Angels Junior School</h3>
                    <p>Providing Christ-centered education that nurtures minds, hearts, and spirits since 1998.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="#about"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="#academics"><i class="fas fa-chevron-right"></i> Academics</a></li>
                        <li><a href="#safety"><i class="fas fa-chevron-right"></i> Safety</a></li>
                        <li><a href="#faculty"><i class="fas fa-chevron-right"></i> Faculty</a></li>
                        <li><a href="#gallery"><i class="fas fa-chevron-right"></i> Gallery</a></li>
                        <li><a href="#admin"><i class="fas fa-chevron-right"></i> Administration</a></li>
                        <li><a href="#community"><i class="fas fa-chevron-right"></i> Community</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Academics</h3>
                    <ul>
                        <li><a href="#academics"><i class="fas fa-chevron-right"></i> Curriculum</a></li>
                        <li><a href="#academics"><i class="fas fa-chevron-right"></i> Online Platforms</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Academic Calendar</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Library Resources</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Faculty Directory</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Student Handbook</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Admissions</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Admission Process</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Tuition & Fees</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Scholarships</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Enrollment Form</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> FAQ</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> School Tours</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> God's Angels Junior School. All Rights Reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('nav ul');
        
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileMenuBtn.innerHTML = navMenu.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });
        
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (navMenu.classList.contains('active')) {
                        navMenu.classList.remove('active');
                        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                    }
                }
            });
        });
        
        // Academic Tabs
        const tabBtns = document.querySelectorAll('.tab-btn');
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                tabBtns.forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked button
                btn.classList.add('active');
                
                // Show corresponding content
                const tabId = btn.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });
        
        // Form Submission
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                const formData = new FormData(contactForm);
                const formObject = {};
                for (let [key, value] of formData.entries()) {
                    formObject[key] = value;
                }
                
                // In a real implementation, you would send this data to a PHP backend
                console.log('Form Data:', formObject);
                
                // Show success message
                alert('Thank you for your message! We will get back to you soon.');
                
                // Reset form
                contactForm.reset();
            });
        }
        
        // Animation on scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.feature-card, .program-card, .event-card, .news-card, .value-card, .safety-card, .faculty-card').forEach(card => {
            observer.observe(card);
        });
        
        // Testimonial Slider
        const testimonials = document.querySelectorAll('.testimonial');
        const dots = document.querySelectorAll('.testimonial-dot');
        let currentTestimonial = 0;
        
        function showTestimonial(index) {
            testimonials.forEach(testimonial => testimonial.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            testimonials[index].classList.add('active');
            dots[index].classList.add('active');
            currentTestimonial = index;
        }
        
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = parseInt(dot.getAttribute('data-index'));
                showTestimonial(index);
            });
        });
        
        // Auto-rotate testimonials
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }, 5000);
        
        // Gallery Lightbox (simplified)
        const galleryItems = document.querySelectorAll('.gallery-item');
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const imgSrc = item.querySelector('img').src;
                alert('In a real implementation, this would open a lightbox with the image: ' + imgSrc);
            });
        });
        
        // Initialize animations
        window.addEventListener('load', () => {
            document.querySelector('.hero p').style.animationDelay = '0.2s';
            document.querySelector('.hero p').style.opacity = '1';
        });
    </script>
</body>
</html>