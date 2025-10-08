<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greater Seeds Richmaris Academy - Kuje, Abuja</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="logo">
                        <h2>Greater Seeds Richmaris Academy</h2>
                    </div>
                    <ul class="nav-menu" id="navMenu">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#programs">Programs</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <div class="hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section id="home" class="hero-slider">
        <div class="slider-container">
            <div class="slide active">
                <div class="slide-content">
                    <h1>Nurturing Future Leaders</h1>
                    <p>Excellence in Education, Character in Life</p>
                    <a href="#about" class="btn">Learn More</a>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <h1>Quality Education for Every Child</h1>
                    <p>Building Strong Academic Foundations</p>
                    <a href="#contact" class="btn">Enroll Now</a>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <h1>Shaping Tomorrow's Innovators</h1>
                    <p>Where Learning Meets Excellence</p>
                    <a href="#programs" class="btn">Our Programs</a>
                </div>
            </div>
        </div>
        <button class="slider-btn prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="slider-btn next" onclick="moveSlide(1)">&#10095;</button>
        <div class="slider-dots">
            <span class="dot active" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
    </section>

    <section id="about" class="welcome-section">
        <div class="container">
            <div class="section-header">
                <h2>Welcome to Greater Seeds Richmaris Academy</h2>
                <div class="underline"></div>
            </div>
            <div class="welcome-content">
                <div class="welcome-text">
                    <h3>About Our School</h3>
                    <p>Greater Seeds Richmaris Academy is a premier educational institution dedicated to nurturing young minds and building strong academic foundations. Located in the heart of Kuje, Abuja, we provide quality education in a safe, supportive, and inspiring environment.</p>
                    <p>Our commitment is to develop well-rounded students who excel academically while growing in character, leadership, and social responsibility.</p>
                </div>
                <div class="school-stats">
                    <div class="stat-card">
                        <h3>500+</h3>
                        <p>Students</p>
                    </div>
                    <div class="stat-card">
                        <h3>50+</h3>
                        <p>Qualified Teachers</p>
                    </div>
                    <div class="stat-card">
                        <h3>15+</h3>
                        <p>Years of Excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vision-mission">
        <div class="container">
            <div class="vm-grid">
                <div class="vm-card">
                    <div class="vm-icon">🎯</div>
                    <h3>Our Vision</h3>
                    <p>To be a leading educational institution that raises exceptional leaders and professionals who will make positive impacts in society through quality education and character development.</p>
                </div>
                <div class="vm-card">
                    <div class="vm-icon">💡</div>
                    <h3>Our Mission</h3>
                    <p>To provide excellent, holistic education that develops academic excellence, moral integrity, and leadership skills in every child through innovative teaching methods and nurturing environment.</p>
                </div>
                <div class="vm-card">
                    <div class="vm-icon">⭐</div>
                    <h3>Our Values</h3>
                    <p>Excellence, Integrity, Innovation, Respect, and Community. We instill these core values in our students to prepare them for success in life and leadership.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="programs" class="programs-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Academic Programs</h2>
                <div class="underline"></div>
            </div>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-icon">🧸</div>
                    <h3>Nursery Section</h3>
                    <p>Early childhood education focusing on foundational learning through play-based activities, creativity, and social development.</p>
                    <ul>
                        <li>Age-appropriate curriculum</li>
                        <li>Safe learning environment</li>
                        <li>Experienced caregivers</li>
                    </ul>
                </div>
                <div class="program-card">
                    <div class="program-icon">📚</div>
                    <h3>Primary Section</h3>
                    <p>Building strong academic foundations with comprehensive curriculum covering core subjects and character development.</p>
                    <ul>
                        <li>Core academic subjects</li>
                        <li>Extra-curricular activities</li>
                        <li>Modern learning tools</li>
                    </ul>
                </div>
                <div class="program-card">
                    <div class="program-icon">🎓</div>
                    <h3>Secondary Section</h3>
                    <p>Preparing students for higher education and future careers with rigorous academic programs and leadership training.</p>
                    <ul>
                        <li>WAEC/NECO preparation</li>
                        <li>Science & Arts programs</li>
                        <li>Career guidance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="events" class="events-section">
        <div class="container">
            <div class="section-header">
                <h2>Upcoming Events & Announcements</h2>
                <div class="underline"></div>
            </div>
            <div class="events-grid">
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">15</span>
                        <span class="month">Nov</span>
                    </div>
                    <div class="event-details">
                        <h3>Inter-House Sports Competition</h3>
                        <p>Annual sports day featuring athletics, football, and other sporting events.</p>
                    </div>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">20</span>
                        <span class="month">Nov</span>
                    </div>
                    <div class="event-details">
                        <h3>Parents-Teachers Meeting</h3>
                        <p>Quarterly meeting to discuss student progress and school development.</p>
                    </div>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">10</span>
                        <span class="month">Dec</span>
                    </div>
                    <div class="event-details">
                        <h3>End of Term Celebration</h3>
                        <p>Prize giving day and cultural performances by students.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="section-header">
                <h2>Our School Gallery</h2>
                <div class="underline"></div>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <p>School Building</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <p>Classrooms</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <p>Laboratory</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <p>Library</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <p>Sports Field</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <p>Computer Lab</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
                <div class="underline"></div>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="info-card">
                        <div class="info-icon">📍</div>
                        <h3>Our Location</h3>
                        <p>Opposite Airport Guest Inn<br>Along GGSSS Road, Kuje<br>Abuja, Nigeria</p>
                    </div>
                    <div class="info-card">
                        <div class="info-icon">📞</div>
                        <h3>Phone</h3>
                        <p>+234 XXX XXX XXXX<br>+234 XXX XXX XXXX</p>
                    </div>
                    <div class="info-card">
                        <div class="info-icon">✉️</div>
                        <h3>Email</h3>
                        <p>info@greaterseedsacademy.edu.ng<br>admissions@greaterseedsacademy.edu.ng</p>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <?php
                    if (isset($_GET['status'])) {
                        if ($_GET['status'] == 'success') {
                            echo '<div class="alert alert-success">Thank you! Your message has been sent successfully.</div>';
                        } elseif ($_GET['status'] == 'error') {
                            echo '<div class="alert alert-error">Sorry, there was an error sending your message. Please try again.</div>';
                        } elseif ($_GET['status'] == 'invalid_email') {
                            echo '<div class="alert alert-error">Please enter a valid email address.</div>';
                        }
                    }
                    ?>
                    <form method="POST" action="contact.php">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <input type="text" name="subject" placeholder="Subject" required>
                        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Greater Seeds Richmaris Academy</h3>
                    <p>Nurturing Future Leaders Through Quality Education</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#programs">Programs</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p>Opposite Airport Guest Inn<br>GGSSS Road, Kuje, Abuja</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Greater Seeds Richmaris Academy. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
