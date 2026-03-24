<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sticky Header</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- 🔹 MAIN HEADER WRAPPER -->
<header class="main-header" id="mainHeader">
  
  <!-- 🔹 NAVIGATION BAR -->
  <nav class="navbar" id="navbar">
    <div class="container nav-inner">

      <!-- Logo -->
      <div class="logo">
        <img src="images/logo.png" alt="Mangalam Pipes">
      </div>

      <!-- Menu -->
      <nav class="menu">
        <ul>
          <li><a href="#">About Us</a></li>

          <!-- Dropdown -->
          <li class="dropdown">
            <a href="#">Products ▾</a>
            <ul class="dropdown-menu">
              <li><a href="#">HDPE Pipes</a></li>
              <li><a href="#">PVC Pipes</a></li>
            </ul>
          </li>

          <li>
            <a href="#" class="contact-btn">Contact Us</a>
          </li>
        </ul>
      </nav>

    </div>
  </nav>
</header>

<div class="section-divider"></div>


<!-- Product secction  -->
<section class="product-section">

  <div class="container product-page">

    <!-- LEFT: IMAGE GALLERY -->
    <div class="left">

      <div class="gallery">
        <div class="main-image-container" id="imageContainer">
          <img id="mainImage" src="images/image-asset.webp" alt="Product">
          <div id="lens" class="lens"></div>
        </div>
        
        <!-- Zoom Preview Panel -->
        <div class="zoom-preview" id="zoomPreview"></div>

        <button class="nav prev">&#10094;</button>
        <button class="nav next">&#10095;</button>

        <div class="thumbnails">
          <img src="images/image-asset.webp" class="thumb active">
          <img src="images/image-asset.webp" class="thumb">
          <img src="images/image-asset.webp" class="thumb">
          <img src="images/image-asset.webp" class="thumb">
          <img src="images/image-asset.webp" class="thumb">
          <img src="images/image-asset.webp" class="thumb">
        </div>
      </div>

    </div>

    <!-- RIGHT: CONTENT -->
    <div class="right">

      <!-- Breadcrumb -->
      <div class="breadcrumb">
        Products > Two For One Twister
      </div>

      <!-- Certifications -->
      <div class="badges">
        <span>🔺 BIS Certified</span>
        <span>📦 ISO Certified</span>
        <span>✔ CE Certified</span>
      </div>

      <!-- Title -->
      <h1>
        Premium HDPE Pipes & Coils for Modern Infrastructure
      </h1>

      <!-- Features -->
      <ul class="features">
        <li>Leak-Proof Fusion Joints</li>
        <li>Chemical Resistance</li>
        <li>50+ Year Service Life</li>
        <li>Flexible Installation</li>
        <li>Flexible Installation</li>
      </ul>

      <!-- Price Box -->
      <div class="price-box">
        <p class="label">Price Range</p>
        <h2>₹4,80,000 - 7,90,000</h2>

        <div class="tags">
          <span>Shipping: 6-12 days</span>
          <span>Returns: If returned within 7 days</span>
        </div>

        <p class="cert">
          Certifications: ISO Certified, BIS Certified
        </p>
      </div>

      <!-- Buttons -->
      <div class="actions">
        <button class="btn-primary" onclick="openModal('quoteModal')">Get Custom Quote</button>
        <button class="btn-outline">View Technical Specs →</button>
      </div>

    </div>

  </div>

  <div class="trust-strip">

  <p class="trust-text">
    Trusted by Hundreds of Companies Globally
  </p>

  <div class="trust-logos">
    <img src="images/logo-com.png">
    <img src="images/logo-com.png">
    <img src="images/logo-com.png">
    <img src="images/logo-com.png">
    <img src="images/logo-com.png">
    <img src="images/logo-com.png">
  </div>

</div>

</section>

<div class="section-divider"></div>

<!-- tex=ch-specs-section  -->
<section class="tech-specs-section">

  <div class="container">

    <!-- Heading -->
    <div class="tech-header">
      <h2>Technical Specifications at a Glance</h2>
      <p>
        Comprehensive performance data demonstrating our commitment to quality and engineering excellence.
      </p>
    </div>

    <!-- Table -->
    <div class="table-wrapper">
      <table class="spec-table">
        <thead>
          <tr>
            <th>PARAMETER</th>
            <th>SPECIFICATION</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Pipe Diameter Range</td>
            <td>20mm to 1600mm (3/4” to 63”)</td>
          </tr>
          <tr>
            <td>Pressure Ratings</td>
            <td>PN 2.5, PN 4, PN 6, PN 8, PN 10, PN 12.5, PN 16</td>
          </tr>
          <tr>
            <td>Standard Dimension Ratio</td>
            <td>SDR 33, SDR 26, SDR 21, SDR 17, SDR 13.6, SDR 11</td>
          </tr>
          <tr>
            <td>Operating Temperature</td>
            <td>-40C to +80C (-40F to +176F)</td>
          </tr>
          <tr>
            <td>Service Life</td>
            <td>50+ Years (at 20°C, PN 10)</td>
          </tr>
          <tr>
            <td>Material Density</td>
            <td>0.95 - 0.96 g/cm³</td>
          </tr>
          <tr>
            <td>Certification Standards</td>
            <td>IS 5984, ISO 4427, ASTM D3035</td>
          </tr>
          <tr>
            <td>Joint Type</td>
            <td>Butt Fusion, Electrofusion, Mechanical</td>
          </tr>
          <tr>
            <td>Coil Lengths</td>
            <td>Up to 500mm (for smaller diameters)</td>
          </tr>
          <tr>
            <td>Country of Origin</td>
            <td>
              <img src="https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg" alt="India Flag" style="width: 25px; height: auto; border: 1px solid #ddd; vertical-align: middle; margin-right: 8px;">
              India
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Button -->
    <div class="download-btn">
      <button onclick="openModal('downloadModal')">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px; vertical-align: middle;">
          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v4"></path>
          <polyline points="7 10 12 15 17 10"></polyline>
          <line x1="12" y1="15" x2="12" y2="3"></line>
        </svg>
        Download Full Technical Datasheet
      </button>
    </div>

  </div>

</section>

<div class="section-divider"></div>

<!-- features-section -->
<section class="features-section">
  <div class="container">

    <!-- Header -->
    <div class="features-header">
      <h2>Built to Last. Engineered to Perform.</h2>
      <p>
        From bulk bags to technical threads, Meera delivers precision solutions for every stage of your packaging process.
      </p>
    </div>

    <!-- Grid -->
    <div class="features-grid">

      <div class="card">
        <div class="icon">🔷</div>
        <h3>Superior Chemical Resistance</h3>
        <p>HDPE pipes resist a wide range of chemicals, acids, and alkalis. Unlike metal pipes, they won't corrode, rust, or scale, ensuring pure water quality and extended service life in aggressive environments.</p>
      </div>

      <div class="card">
        <div class="icon">✏️</div>
        <h3>Exceptional Flexibility & Durability</h3>
        <p>HDPE pipes resist a wide range of chemicals, acids, and alkalis. Unlike metal pipes, they won't corrode, rust, or scale, ensuring pure water quality and extended service life in aggressive environments.</p>
      </div>

      <div class="card">
        <div class="icon">📦</div>
        <h3>Leak-Proof Fusion Welding</h3>
        <p>HDPE pipes resist a wide range of chemicals, acids, and alkalis. Unlike metal pipes, they won't corrode, rust, or scale, ensuring pure water quality and extended service life in aggressive environments.</p>
      </div>

      <div class="card">
        <div class="icon">⚙️</div>
        <h3>Cost-Effective Long-Term Solution</h3>
        <p>HDPE pipes resist a wide range of chemicals, acids, and alkalis. Unlike metal pipes, they won't corrode, rust, or scale, ensuring pure water quality and extended service life in aggressive environments.</p>
      </div>

      <div class="card">
        <div class="icon">🌱</div>
        <h3>Environmentally Sustainable</h3>
        <p>HDPE pipes resist a wide range of chemicals, acids, and alkalis. Unlike metal pipes, they won't corrode, rust, or scale, ensuring pure water quality and extended service life in aggressive environments.</p>
      </div>

      <div class="card">
        <div class="icon">✔️</div>
        <h3>Certified Quality Assurance</h3>
        <p>HDPE pipes resist a wide range of chemicals, acids, and alkalis. Unlike metal pipes, they won't corrode, rust, or scale, ensuring pure water quality and extended service life in aggressive environments.</p>
      </div>

    </div>

    <!-- Button -->
    <div class="cta">
      <button onclick="openModal('quoteModal')">Request a Quote</button>
    </div>

  </div>
</section>

<div class="section-divider"></div>

<!-- faq-section -->
<section class="faq-section">
  <div class="container">

    <!-- Heading -->
    <h2 class="faq-title">
      <span>Frequently</span> Asked Questions
    </h2>

    <!-- FAQ ITEMS -->
    <div class="faq-list">

      <!-- Item 1 (Active) -->
      <div class="faq-item active">
        <div class="faq-question">
          What is the purpose of a laser cutter for sheet metal?
          <span class="icon">⌃</span>
        </div>
        <div class="faq-answer">
          It is designed to cut various types of sheet metal with precision, allowing for intricate designs and shapes that are essential in manufacturing processes.
        </div>
      </div>

      <!-- Item -->
      <div class="faq-item">
        <div class="faq-question">
          What are the benefits of using aluminum tubing in manufacturing?
          <span class="icon">⌄</span>
        </div>
        <div class="faq-answer">
          Aluminum tubing is lightweight, corrosion-resistant, and highly durable, making it ideal for many industries.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          How is aluminum tubing produced?
          <span class="icon">⌄</span>
        </div>
        <div class="faq-answer">
          It is produced through extrusion and drawing processes.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          What are the common applications of aluminum tubing?
          <span class="icon">⌄</span>
        </div>
        <div class="faq-answer">
          Used in construction, automotive, aerospace, and more.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          Can aluminum tubing be customized?
          <span class="icon">⌄</span>
        </div>
        <div class="faq-answer">
          Yes, it can be customized based on size, thickness, and coating.
        </div>
      </div>

    </div>

    <!-- CTA BOX -->
    <div class="faq-cta">
      <div class="cta-text">
        <h3>Want us to email the entire catalogue?</h3>
        <p>Enter your email and an expert will share the catalogue with you.</p>
      </div>

      <form action="" method="POST" class="cta-form">
        <input type="email" name="email" placeholder="Email Address" required>
        <button type="submit">Request Catalogue</button>
      </form>
    </div>

  </div>
</section>

<div class="section-divider"></div>

<!-- industry-section -->

<section class="industry">
  <div class="container">

    <!-- HEADER -->
    <div class="industry-top">
      <div class="text">
        <h2>Versatile Applications Across <br> Industries</h2>
        <p>
          From technical textiles to packaging materials, our precision-engineered machinery delivers superior performance across diverse applications.
        </p>
      </div>

      <div class="arrows">
        <button id="prev">←</button>
        <button id="next">→</button>
      </div>
    </div>

  </div> <!-- End of .container -->

  <!-- SLIDER -->
  <div class="slider-container">
    <div class="slider" id="slider">

      <!-- CARD 1 -->
      <div class="card">
        <img src="images/image-asset.webp">
        <div class="gradient"></div>
        <div class="content">
          <h3>Fishnet Manufacturing</h3>
          <p>
            High-performance twisting solutions for packaging yarn, strapping materials, and reinforcement threads.
          </p>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="card">
        <img src="images/image-asset.webp">
        <div class="gradient"></div>
        <div class="content">
          <h3>Industrial Textiles</h3>
          <p>
            Advanced machinery for producing heavy-duty fabrics and technical textiles used in aerospace and automotive.
          </p>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="card">
        <img src="images/image-asset.webp">
        <div class="gradient"></div>
        <div class="content">
          <h3>Packaging Solutions</h3>
          <p>
            Precision-engineered systems for high-speed production of durable packaging materials and tapes.
          </p>
        </div>
      </div>

      <!-- CARD 4 -->
      <div class="card">
        <img src="images/image-asset.webp">
        <div class="gradient"></div>
        <div class="content">
          <h3>Agricultural Nets</h3>
          <p>
            Specialized equipment for manufacturing high-density nets for crop protection and greenhouse shading.
          </p>
        </div>
      </div>

      <!-- CARD 5 -->
      <div class="card">
        <img src="images/image-asset.webp">
        <div class="gradient"></div>
        <div class="content">
          <h3>Construction Mesh</h3>
          <p>
            Robust solutions for twisting and weaving reinforcement fibers used in concrete and soil stabilization.
          </p>
        </div>
      </div>

      <!-- CARD 6 -->
      <div class="card">
        <img src="images/image-asset.webp">
        <div class="gradient"></div>
        <div class="content">
          <h3>Maritime Ropes</h3>
          <p>
            Heavy-duty twisting machinery designed specifically for the production of ultra-strong marine and offshore ropes.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


<div class="section-divider"></div>

<!-- process-section -->
<section class="process">
  <div class="container">

    <!-- HEADER -->
    <div class="process-header">
      <h2>Advanced HDPE Pipe Manufacturing Process</h2>
      <p>
        Our state-of-the-art extrusion technology ensures consistent quality, optimal material properties, and dimensional accuracy in every pipe we manufacture.
      </p>
    </div>

    <!-- BOX -->
    <div class="process-box">

      <!-- TABS -->
      <div class="tabs">
        <button class="tab active" data-tab="0">Raw Material</button>
        <button class="tab" data-tab="1">Extrusion</button>
        <button class="tab" data-tab="2">Cooling</button>
        <button class="tab" data-tab="3">Sizing</button>
        <button class="tab" data-tab="4">Quality Control</button>
        <button class="tab" data-tab="5">Marking</button>
        <button class="tab" data-tab="6">Cutting</button>
        <button class="tab" data-tab="7">Packaging</button>
      </div>

      <!-- CONTENT -->
      <div class="process-content">

        <!-- LEFT -->
        <div class="text">
          <h3 id="title">High-Grade Raw Material Selection</h3>
          <p id="desc">
            Vacuum sizing tanks ensure precise outer diameter while internal pressure maintains perfect roundness and wall thickness uniformity.
          </p>

          <ul id="points">
            <li>PE100 grade material</li>
            <li>Optimal molecular weight distribution</li>
          </ul>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="image-box">
          <img id="image" src="images/image-asset.webp">

          <button class="arrow left">←</button>
          <button class="arrow right">→</button>
        </div>

      </div>

    </div>

  </div>
</section>

<div class="section-divider"></div>

<!-- testimonial-section -->

<section class="testimonial-section">

  <!-- HEADER -->
  <div class="testimonial-header">
    <h2>Trusted Performance. Proven Results</h2>
    <p>
      From innovative Two-For-One Twisters to specialized heat setting machines, we deliver complete solutions for modern textile manufacturing.
    </p>
  </div>

  <!-- SLIDER -->
  <div class="slider-track">
    <div class="slider">

      <!-- CARD 1 -->
      <div class="testimonial-card">
        <div class="quote">“</div>
        <h3>Excellent support for specialized applications.</h3>
        <p>
          The durability and performance of Meera's fishnet processing equipment has significantly improved our marine product quality.
        </p>
        <div class="user">
          <div class="avatar"></div>
          <div class="user-info">
            <h4>Carlos Mendoza</h4>
            <span>Operations Manager</span>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="testimonial-card">
        <div class="quote">“</div>
        <h3>Provides the exact specifications we need!</h3>
        <p>
          Their specialized machinery provides the exact specifications we need for technical textile applications.
        </p>
        <div class="user">
          <div class="avatar"></div>
          <div class="user-info">
            <h4>Rajesh Kumar</h4>
            <span>Manufacturing Head</span>
          </div>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="testimonial-card">
        <div class="quote">“</div>
        <h3>Outstanding performance and reliability.</h3>
        <p>
          The machines deliver consistent results and have significantly improved our operational efficiency.
        </p>
        <div class="user">
          <div class="avatar"></div>
          <div class="user-info">
            <h4>Johann Mueller</h4>
            <span>Production Director</span>
          </div>
        </div>
      </div>

      <!-- DUPLICATES FOR INFINITE SCROLL -->
      <div class="testimonial-card">
        <div class="quote">“</div>
        <h3>Excellent support for specialized applications.</h3>
        <p>
          The durability and performance of Meera's fishnet processing equipment has significantly improved our marine product quality.
        </p>
        <div class="user">
          <div class="avatar"></div>
          <div class="user-info">
            <h4>Carlos Mendoza</h4>
            <span>Operations Manager</span>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="quote">“</div>
        <h3>Provides the exact specifications we need!</h3>
        <p>
          Their specialized machinery provides the exact specifications we need for technical textile applications.
        </p>
        <div class="user">
          <div class="avatar"></div>
          <div class="user-info">
            <h4>Rajesh Kumar</h4>
            <span>Manufacturing Head</span>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="quote">“</div>
        <h3>Outstanding performance and reliability.</h3>
        <p>
          The machines deliver consistent results and have significantly improved our operational efficiency.
        </p>
        <div class="user">
          <div class="avatar"></div>
          <div class="user-info">
            <h4>Johann Mueller</h4>
            <span>Production Director</span>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>

<div class="section-divider"></div>

<!-- portfolio-section -->
<section class="portfolio-section">

  <div class="container">

    <!-- HEADER -->
    <div class="header">
      <h2>Complete Piping Solutions Portfolio</h2>
      <p>
        From innovative Two-For-One Twisters to specialized heat setting machines, we deliver complete solutions for modern textile manufacturing.
      </p>
    </div>

    <!-- CARDS -->
    <div class="cards">

      <!-- CARD 1 -->
      <div class="card">
        <h3>HDPE Fittings & Accessories</h3>
        <p>
          Complete range of electrofusion and butt fusion fittings, including elbows, tees, reducers, and couplers for seamless pipe connections.
        </p>

        <img src="images/port-1.png" alt="">

        <button class="btn">Learn More</button>
      </div>

      <!-- CARD 2 -->
      <div class="card">
        <h3>Professional Installation Services</h3>
        <p>
          Expert installation and fusion welding services ensuring optimal system performance, compliance with standards, and long-term reliability.
        </p>

        <img src="images/port-2.png" alt="">

        <button class="btn">Learn More</button>
      </div>

      <!-- CARD 3 -->
      <div class="card">
        <h3>PE-RT Heating Pipes</h3>
        <p>
          Polyethylene of Raised Temperature resistance pipes ideal for underfloor heating, radiator connections, and hot water applications.
        </p>

        <img src="images/port-3.png" alt="">

        <button class="btn">Learn More</button>
      </div>

    </div>

    <!-- CTA BOX -->
    <div class="cta-box">
      <div class="cta-text">
        <h3>Didn’t find what <span>you’re looking for?</span></h3>
        <p>Talk to our experts for custom solutions and tailored guidance.</p>
      </div>

      <button class="cta-btn">📞 Talk to an Expert</button>
    </div>

  </div>

</section>


<div class="section-divider"></div>

<!-- resources-section -->
<section class="resources-section">
  <div class="container">

    <!-- HEADER -->
    <div class="resources-header">
      <h2>Resources & Downloads</h2>
      <p>
        Get all the technical documentation and resources you need to make informed decisions about our HDPE piping solutions.
      </p>
    </div>

    <!-- DOWNLOAD BOX -->
    <div class="resources-box">

      <!-- ITEM -->
      <div class="resource-item">
        <span>HDPE Pipe Installation Manual (PDF)</span>
        <a href="#">Download PDF <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-left: 4px;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg></a>
      </div>

      <div class="resource-item">
        <span>Maintenance & Inspection Handbook (PDF)</span>
        <a href="#">Download PDF <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-left: 4px;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg></a>
      </div>

      <div class="resource-item">
        <span>Engineering Specifications Sheet (PDF)</span>
        <a href="#">Download PDF <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-left: 4px;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg></a>
      </div>

    </div>

  </div>
</section>


<div class="section-divider"></div>

<!-- cta-section -->
<section class="cta-section">
  <div class="container cta-wrapper">

    <!-- LEFT CONTENT -->
    <div class="cta-left">
      <h2>Ready to Transform Your <br> Textile Manufacturing?</h2>

      <p class="cta-desc">
        Get a personalized consultation and quote for machinery solutions tailored to your specific production requirements.
      </p>

      <div class="cta-line"></div>

      <p class="cta-contact">
        For immediate assistance, feel free to give us a direct call at 
        <strong>+91-XXX-XXX-XXXX</strong>. You can also send us a quick email at 
        <a href="#">info@meeraind.com</a>
      </p>
    </div>

    <!-- RIGHT FORM -->
    <form action="" method="POST" class="cta-form">
      <h4>Contact Us Today</h4>

      <input type="text" name="full_name" placeholder="Full Name" required>
      <input type="text" name="company_name" placeholder="Company Name">
      <input type="email" name="email" placeholder="Email Address" required>

      <!-- PHONE INPUT -->
      <div class="phone-group">
        <select name="country_code">
          <option value="+91">+91</option>
          <option value="+1">+1</option>
        </select>
        <input type="text" name="phone" placeholder="7003026616" required>
      </div>

      <button type="submit">Request Custom Quote</button>
    </form>

  </div>
</section>

<div class="section-divider"></div>

<!-- footer-section -->
 <footer class="footer">

  <div class="container">

    <!-- TOP BRAND BAR -->
    <div class="footer-top">
      <div class="footer-logo">
        <img src="images/logo.png" alt="logo">
      </div>

      <div class="footer-heading">
        Premium <span>HDPE Pipes & Fittings</span><br>
        Manufacturer in South India
      </div>
    </div>

    <!-- MAIN GRID -->
    <div class="footer-grid">

      <!-- ABOUT -->
      <div class="footer-col">
        <h4>About Us</h4>
        <p>About Us</p>
      </div>

      <!-- CATEGORIES -->
      <div class="footer-col">
        <h4>Categories</h4>
        <ul>
          <li>Packaging Industry Solutions</li>
          <li>Fishnet Manufacturing</li>
          <li>PPMF/Tapes and Twines</li>
          <li>FIBC and Woven Sack</li>
          <li>Carpet and Rugs Industry</li>
          <li>Technical Textiles</li>
        </ul>
      </div>

      <!-- PRODUCTS -->
      <div class="footer-col">
        <h4>Products</h4>
        <ul>
          <li>Two For One Twister</li>
          <li>TPRS Twister Machine</li>
          <li>Ring Twisting Machines</li>
          <li>Covering Machines</li>
          <li>Heat Setting Equipment</li>
          <li>Servo Controlled Winders</li>
        </ul>
      </div>

      <!-- CONTACT -->
      <div class="footer-col contact">
        <h4>Contact</h4>

        <p>📍 2126, Road No. 2, GIDC Sachin, Surat - 394 230 Gujarat, India</p>
        <p>📞 +91-XXX-XXX-XXXX</p>
        <p>✉ info@meeraind.com</p>
        <p>🎧 support@meeraind.com</p>

        <div class="socials">
          <span>🔗</span>
          <span>✖</span>
          <span>📷</span>
        </div>
      </div>

    </div>

  </div>

  <!-- BOTTOM BAR -->
  <div class="footer-bottom">
    <div class="container bottom-flex">
      <p>Copyright © 2025 Meera Industries Limited | All Rights Reserved</p>

      <div class="links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Sitemap</a>
      </div>
    </div>
  </div>

</footer>

<script src="script.js"></script>
<!-- TRIGGER BUTTONS -->
<!-- <button onclick="openModal('quoteModal')">Request a Quote</button>
<button onclick="openModal('downloadModal')">Download Full Technical Datasheet</button> -->


<!-- ========================= -->
<!-- POPUP 1 - REQUEST QUOTE -->
<!-- ========================= -->
<div id="quoteModal" class="popup-overlay">
  <form action="" method="POST" class="popup-box">

    <div class="popup-header">
      <h3>Request a call back</h3>
      <button type="button" class="close-btn" onclick="closeModal('quoteModal')">&times;</button>
    </div>

    <div class="popup-body">
      <input type="text" name="full_name" placeholder="Full Name" required>
      <input type="text" name="company_name" placeholder="Company Name">
      <input type="email" name="email" placeholder="Email Address" required>

      <div class="phone-group">
        <select name="country_code">
          <option value="+91">+91</option>
          <option value="+1">+1</option>
        </select>
        <input type="text" name="phone" placeholder="7003026616" required>
      </div>
    </div>

    <div class="popup-footer">
      <button type="submit" class="submit-btn">Submit Form</button>
    </div>

  </form>
</div>


<!-- ========================= -->
<!-- POPUP 2 - DOWNLOAD -->
<!-- ========================= -->
<div id="downloadModal" class="popup-overlay">
  <form action="" method="POST" class="popup-box">

    <div class="popup-header">
      <h3>Let us email the entire catalogue to you</h3>
      <button type="button" class="close-btn" onclick="closeModal('downloadModal')">&times;</button>
    </div>

    <div class="popup-body">
      <label>Your Email *</label>
      <input type="email" name="email" id="emailInput" placeholder="example@gmail.com" required>

      <label>Your Contact (Optional)</label>
      <input type="text" name="phone" placeholder="+91-0000000000">
    </div>

    <div class="popup-footer">
      <button type="submit" id="downloadBtn" class="submit-btn">
        Download Brochure
      </button>
    </div>

  </form>
</div>



</body>
</html>