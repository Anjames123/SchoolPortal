# Greater Seeds Richmaris Academy Website

## Overview

A professional school website for Greater Seeds Richmaris Academy, located opposite Airport Guest Inn, along GGSSS Road, Kuje, Abuja. Built with PHP, HTML, CSS, and JavaScript, this demo website features a modern design inspired by Aduvieportal.org with auto-rotating hero slider, school information sections, event listings, gallery, and secure contact form.

## User Preferences

Preferred communication style: Simple, everyday language.

## System Architecture

### Frontend Architecture

**Technology Stack**:
- PHP 8.2 (server-side processing)
- HTML5 (semantic structure)
- CSS3 (responsive styling)
- Vanilla JavaScript (interactivity)

**Page Sections**:
1. Fixed navigation bar with mobile hamburger menu
2. Auto-rotating hero slider (3 slides, 5-second intervals)
3. Welcome section with school statistics
4. Vision, Mission & Values cards
5. Academic programs (Nursery, Primary, Secondary)
6. Upcoming events with date displays
7. Gallery section with placeholders
8. Contact section with form and school information
9. Footer with quick links

**Design System**:
- CSS custom properties for theming
- Primary color: #1e3a8a (deep blue)
- Secondary color: #3b82f6 (bright blue)
- Accent color: #fbbf24 (amber/yellow)
- Fully responsive grid layouts
- Mobile-first approach with breakpoints at 768px and 480px

**Interactive Features**:
- Auto-play slider with manual controls
- Smooth scroll navigation
- Mobile hamburger menu toggle
- Hover effects and transitions
- Dynamic navbar shadow on scroll

### Backend Architecture

**Contact Form Processing**:
- Secure PHP form handler (contact.php)
- Email validation using filter_var()
- Header injection prevention (newline stripping)
- Fixed From address with validated Reply-To
- User feedback via query parameters (success/error/invalid_email)
- Alert message display with styled notifications

**Security Measures**:
- Input sanitization with htmlspecialchars()
- CRLF injection prevention
- Email validation
- Fixed sender address to prevent spoofing
- Trim and sanitize all user inputs

## Key Architectural Decisions

**Security-First Contact Form**:
- *Problem*: Email header injection vulnerability in PHP mail()
- *Solution*: Fixed From address, email validation, newline stripping
- *Rationale*: Prevent email relay abuse and header injection attacks
- *Pros*: Production-ready security, prevents spam relay
- *Cons*: None significant

**Auto-Rotating Slider**:
- *Problem*: Engaging hero section for school website
- *Solution*: JavaScript-based auto-slider with manual controls
- *Rationale*: Showcase school values and call-to-actions dynamically
- *Pros*: User engagement, professional appearance
- *Cons*: Requires JavaScript enabled

**Responsive Grid Layouts**:
- *Problem*: Multi-device accessibility
- *Solution*: CSS Grid with mobile breakpoints
- *Rationale*: Modern layout system for complex responsive designs
- *Pros*: Clean code, flexible layouts, mobile-friendly
- *Cons*: IE11 not supported (acceptable for modern deployment)

## File Structure

```
/
├── index.php           # Main page with all sections
├── contact.php         # Secure form handler
├── css/
│   └── style.css      # All styling and responsive design
├── js/
│   └── script.js      # Slider and navigation functionality
└── replit.md          # This documentation
```

## External Dependencies

None. The website is built entirely with:
- PHP 8.2 (built-in server)
- HTML5
- CSS3 (custom properties, grid, flexbox)
- JavaScript (ES6+)

## Deployment

**Current Setup (Development)**:
- PHP 8.4.10 built-in development server
- Running on 0.0.0.0:5000
- Command: `php -S 0.0.0.0:5000`
- Accessible via Replit webview
- Workflow: "PHP Server" configured and active

**Production Deployment**:
- Ready for Replit Deployments (autoscale recommended)
- Can be deployed to any PHP hosting service
- Requires PHP 7.4+ with mail() function support
- Recommended: Use transactional email service (SendGrid, Mailgun) for production mail() function

## Replit Environment Setup

**Installed Modules**:
- PHP 8.4 (from .replit modules)
- Web module
- Node.js 20 (for future enhancements)

**Configuration Files**:
- `.replit`: Configured with php-8.4, web, and nodejs-20 modules
- `.gitignore`: Standard PHP project ignores (vendor, env, IDE files, OS files)
- Workflow configured to run PHP development server on port 5000

## Recent Changes

**October 8, 2025** (Image Integration):
- Added authentic stock images of Black African students and school facilities
- Updated gallery section with 6 professional images:
  - School building exterior
  - Students in classroom
  - Science laboratory activities
  - Students in library
  - Sports field activities
  - Computer lab learning
- Enhanced welcome/about section with student learning image
- Implemented CSS hover effects for gallery images
- All images stored in attached_assets/stock_images/

**October 8, 2025** (Replit Import Setup):
- Set up PHP 8.4 environment in Replit
- Configured PHP development server workflow on port 5000
- Added .gitignore for PHP project
- Removed Windows Zone.Identifier files
- Verified website loads correctly in Replit webview
- Updated documentation with Replit-specific setup

**Initial Development**:
- Created complete school website demo
- Implemented secure contact form with header injection prevention
- Added responsive design for all device sizes
- Built auto-rotating hero slider
- Created all school information sections
- Added success/error feedback for contact form
- Secured all user inputs and email validation

## Future Enhancements

Once approved by school administration:
- Online admission/application forms
- Staff and faculty profiles
- Detailed academic programs and curriculum pages
- Student portal for grades and announcements
- Parent portal for communication
- Blog/news section for updates
- Integration with payment gateway for fees
- Photo/video upload to gallery
- Admin dashboard for content management
