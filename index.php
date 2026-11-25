<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AI Freelance | AI Projects and Services</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #ffffff;
            color: #17251f;
        }

        a {
            text-decoration: none;
        }

        .container {
            width: 86%;
            max-width: 1200px;
            margin: auto;
        }

        /* NAVIGATION */

        .navbar {
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            background: white;
            border-bottom: 1px solid #eeeeee;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 23px;
            font-weight: bold;
            color: #202d27;
        }

        .logo span {
            color: #2eb872;
        }

        .logo small {
            display: block;
            font-size: 9px;
            font-weight: normal;
            color: #777;
            letter-spacing: .5px;
        }

        .nav-links {
            display: flex;
            gap: 27px;
        }

        .nav-links a {
            color: #444;
            font-size: 13px;
            transition: .3s;
        }

        .nav-links a:hover,
        .nav-links .active {
            color: #2eb872;
        }

        .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .nav-buttons a {
            padding: 11px 22px;
            border-radius: 5px;
            font-size: 13px;
        }

        .login-btn {
            border: 1px solid #999;
            color: #333;
        }

        .signup-btn {
            background: #2eb872;
            color: white;
        }

        /* COMMON BUTTONS */

        .btn{
            display: inline-block;
            padding: 13px 23px;
            border-radius: 5px;
            font-size: 13px;
            font-weight: bold;
            transition: .3s;
            background: #2eb872;
            color: white;
        }


        .btn:hover {
            background: #23975c;
        }


        /* HERO SECTION */

        .hero {
            min-height: 510px;
            display: flex;
            align-items: center;
            padding: 65px 9%;

            background-image:url(Images/hero-image.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .hero-content {
            max-width: 550px;
            color: white;
        }

        .hero h1 {
            font-size: 44px;
            line-height: 1.15;
            margin-bottom: 18px;
        }

        .hero p {
            font-size: 15px;
            line-height: 1.7;
            color: white;
            max-width: 470px;
            margin-bottom: 25px;
        }

        .hero-buttons {
            display: flex;
            gap: 13px;
        }


        /* SECTION COMMON STYLES */

        section.content-section {
            padding: 75px 0;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-heading span {
            color: #2eb872;
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-heading h2 {
            font-size: 30px;
            margin: 12px 0;
        }

        .section-heading p {
            color: #777;
            font-size: 14px;
            line-height: 1.7;
        }

        /* AI SERVICES */

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 23px;
        }

        .service-card {
            padding: 27px;
            border: 1px solid #eeeeee;
            border-radius: 9px;
            background: white;
            transition: .3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,.07);
            border-color: #2eb872;
        }

        .service-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e8f8ef;
            color: #2eb872;
            border-radius: 9px;
            font-size: 23px;
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 17px;
            margin-bottom: 12px;
        }

        .service-card p {
            font-size: 13px;
            line-height: 1.7;
            color: #777;
            margin-bottom: 17px;
        }

        .service-card a {
            color: #2eb872;
            font-size: 13px;
            font-weight: bold;
        }

        /* HOW IT WORKS */

        .how-section {
            background: #f5f8fa;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            text-align: center;
        }

        .step {
            padding: 25px;
        }

        .step-number {
            width: 55px;
            height: 55px;
            background: #2eb872;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            font-weight: bold;
            margin: 0 auto 20px;
        }

        .step h3 {
            font-size: 18px;
            margin-bottom: 12px;
        }

        .step p {
            font-size: 13px;
            line-height: 1.7;
            color: #777;
        }

        /* FEATURED PROJECTS */

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 23px;
        }

        .project-card {
            border: 1px solid #eeeeee;
            border-radius: 9px;
            overflow: hidden;
            background: white;
            transition: .3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,.07);
        }

        .project-card img {
            width: 100%;
            height: 175px;
            object-fit: cover;
        }

        .project-info {
            padding: 22px;
        }

        .project-category {
            color: #2eb872;
            font-size: 12px;
            font-weight: bold;
        }

        .project-info h3 {
            font-size: 17px;
            margin: 12px 0;
        }

        .project-info p {
            color: #777;
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .project-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #eeeeee;
            padding-top: 15px;
        }

        .project-footer strong {
            color: #2eb872;
            font-size: 15px;
        }

        .project-footer a {
            color: #444;
            font-size: 12px;
            font-weight: bold;
        }

        /* WHY CHOOSE US */

        .why-section {
            background: #f5f8fa;
        }

        .why-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .why-image img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 10px;
        }

        .why-content h2 {
            font-size: 30px;
            line-height: 1.3;
            margin-bottom: 18px;
        }

        .why-content > p {
            color: #777;
            line-height: 1.7;
            font-size: 14px;
            margin-bottom: 22px;
        }

        .why-point {
            display: flex;
            gap: 14px;
            margin-bottom: 20px;
        }

        .check {
            color: #2eb872;
            font-size: 20px;
            font-weight: bold;
        }

        .why-point h4 {
            margin-bottom: 6px;
            font-size: 15px;
        }

        .why-point p {
            color: #777;
            font-size: 13px;
            line-height: 1.6;
        }

        /* TESTIMONIALS */

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 23px;
        }

        .testimonial-card {
            padding: 27px;
            border: 1px solid #eeeeee;
            border-radius: 9px;
        }

        .stars {
            color: #e7a52b;
            margin-bottom: 15px;
        }

        .testimonial-card p {
            font-size: 13px;
            line-height: 1.8;
            color: #666;
            margin-bottom: 20px;
        }

        .testimonial-card h4 {
            font-size: 14px;
        }

        .testimonial-card small {
            color: #888;
            display: block;
            margin-top: 5px;
        }


        /* FOOTER */

        footer {
            background: #17251f;
            color: white;
            padding: 55px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 35px;
            margin-bottom: 40px;
        }

        .footer-about p {
            color: #bdc7c1;
            font-size: 13px;
            line-height: 1.8;
            margin-top: 15px;
            max-width: 280px;
        }

        footer h3 {
            font-size: 15px;
            margin-bottom: 18px;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-links a {
            color: #bdc7c1;
            font-size: 13px;
        }

        .footer-links a:hover {
            color: #2eb872;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #39453f;
            color: #bdc7c1;
            font-size: 12px;
        }

    </style>
</head>

<body>

<!-- NAVIGATION BAR -->

<header class="navbar">

    <div class="logo">
        <span>AI</span> Freelance
        <small>AI Projects & Services Platform</small>
    </div>

    <nav class="nav-links">
        <a href="index.php" class="active">Home</a>
        <a href="client/">Hire Talent</a>
        <a href="freelancer/">Find Work</a>
    </nav>

    <div class="nav-buttons">
        <a href="login.php" class="login-btn">Log In</a>
        <a href="register.php" class="signup-btn">Sign Up</a>
    </div>

</header>


<!-- HERO SECTION -->

<section class="hero">

    <div class="hero-content">

        <div>
            Quality AI services at a fair price.
        </div>

        <h1 style="color:#bdc7c1;">
            Specialized, Efficient,
            and Reliable AI Solutions
        </h1>

        <p>
            Find talented AI freelancers, explore innovative
            solutions, and bring your projects to life.
            Connect with the right expertise while saving
            time, effort, and costs.
        </p>

        <div class="hero-buttons">
            <a href="auth/register.php" class="btn">
                Get Started Now
            </a>
        </div>

        

    </div>

</section>


<!-- AI SERVICES -->

<section class="content-section" id="services">

    <div class="container">

        <div class="section-heading">
            <span>Our Services</span>
            <h2>Explore AI Services</h2>
            <p>
                Discover professional AI solutions for
                different business and technology needs.
            </p>
        </div>

        <div class="services-grid">

            <div class="service-card">
                <div class="service-icon">ML</div>
                <h3>Machine Learning</h3>
                <p>
                    Develop intelligent models that learn from
                    data and support better decision-making.
                </p>
                <a href="auth/register.php">Explore Services →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">DL</div>
                <h3>Deep Learning</h3>
                <p>
                    Build advanced neural networks for
                    complex prediction and recognition tasks.
                </p>
                <a href="auth/register.php">Explore Services →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">NLP</div>
                <h3>Natural Language Processing</h3>
                <p>
                    Create chatbots, language models,
                    text analysis and intelligent assistants.
                </p>
                <a href="auth/register.php">Explore Services →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">CV</div>
                <h3>Computer Vision</h3>
                <p>
                    Develop image recognition, object detection
                    and visual intelligence solutions.
                </p>
                <a href="auth/register.php">Explore Services →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">GAI</div>
                <h3>Generative AI</h3>
                <p>
                    Build AI-powered applications for
                    content generation and automation.
                </p>
                <a href="auth/register.php">Explore Services →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">DA</div>
                <h3>Data Analytics</h3>
                <p>
                    Transform raw data into meaningful
                    insights using advanced analytics.
                </p>
                <a href="auth/register.php">Explore Services →</a>
            </div>

        </div>

    </div>

</section>


<!-- HOW IT WORKS -->

<section class="content-section how-section">
    <div class="container">

        <div class="section-heading">
            <span>Simple Process</span>
            <h2>How Our Platform Works</h2>
            <p>
                Getting started with AI projects has never
                been easier.
            </p>
        </div>

        <div class="steps-grid">

            <div class="step">
                <div class="step-number">01</div>
                <h3>Create an Account</h3>
                <p>
                    Register as a client or freelancer
                    and create your professional profile.
                </p>
            </div>

            <div class="step">
                <div class="step-number">02</div>
                <h3>Connect and Collaborate</h3>
                <p>
                    Clients post projects while freelancers
                    explore opportunities and submit proposals.
                </p>
            </div>

            <div class="step">
                <div class="step-number">03</div>
                <h3>Complete Projects</h3>
                <p>
                    Select suitable freelancers, track project
                    progress and manage payments.
                </p>
            </div>

        </div>

    </div>

</section>




<!-- WHY CHOOSE US -->

<section class="content-section why-section" id="about">

    <div class="container why-grid">

        <div class="why-image">
            <img
                src="Images/working-together.jpg"
                alt="Professionals collaborating">
        </div>

        <div class="why-content">

            <div class="section-heading" style="text-align:left; margin-bottom:20px;">
                <span>Why Choose Us</span>
                <h2>Connecting AI Talent with Great Opportunities</h2>
            </div>

            <p>
                Our platform brings clients and skilled AI
                professionals together in one convenient place.
                We make it easier to discover talent and manage
                AI-related projects.
            </p>

            <div class="why-point">
                <div class="check">✓</div>
                <div>
                    <h4>Skilled AI Professionals</h4>
                    <p>
                        Discover freelancers with expertise
                        across different AI technologies.
                    </p>
                </div>
            </div>

            <div class="why-point">
                <div class="check">✓</div>
                <div>
                    <h4>Efficient Project Management</h4>
                    <p>
                        Post projects, review proposals and
                        track project progress conveniently.
                    </p>
                </div>
            </div>

            <div class="why-point">
                <div class="check">✓</div>
                <div>
                    <h4>Transparent Reviews</h4>
                    <p>
                        Review ratings and feedback to make
                        informed collaboration decisions.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- FOOTER -->

<footer id="contact">

    <div class="container">

        <div class="footer-grid">

            <div class="footer-about">
                <div class="logo" style="color:white;">
                    <span>AI</span> Freelance
                </div>

                <p>
                    Connecting clients and AI professionals
                    through innovative projects and services.
                    Find opportunities, share expertise and
                    build intelligent solutions.
                </p>
            </div>

            <div>
                <h3>Quick Links</h3>

                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <a href="#about">About Us</a>
                    <a href="#services">Services</a>
                
                </div>
            </div>

            <div>
                <h3>For Users</h3>

                <div class="footer-links">
                    <a href="client/">Hire Talent</a>
                    <a href="freelancer/">Find Work</a>
                    <a href="auth/login.php">Log In</a>
                    <a href="auth/register.php">Register</a>
                </div>
            </div>

            <div>
                <h3>Contact</h3>

                <div class="footer-links">
                    <a href="mailto:info@example.com">Email Us</a>
                    <a href="#contact">Contact Support</a>
                </div>
            </div>

        </div>

        <div class="copyright">
            © <?php echo date("Y"); ?> AI Freelance.
            All Rights Reserved.
        </div>

    </div>

</footer>

</body>
</html>
