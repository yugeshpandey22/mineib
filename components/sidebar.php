<?php
/**
 * Inner Page Sidebar — Reusable for all service pages
 * Usage: <?php include 'components/sidebar.php'; ?>
 * Set $sidebar_service before including to highlight active item
 */
?>
<div class="col-md-4 sidebar-section">

    <!-- Quick Enquiry Form -->
    <div class="sidebar-enquiry">
        <h3>Quick Enquiry</h3>
        <form method="post" action="contact-us.php">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name *" required>
            </div>
            <div class="form-group">
                <input type="text" name="mobile" class="form-control" placeholder="Phone Number *"
                    onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 43"
                    minlength="10" maxlength="15" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
                <select name="service" class="form-control">
                    <option value="">Select Service</option>
                    <option value="Website Designing" <?= (isset($sidebar_service) && $sidebar_service == 'Website Designing') ? 'selected' : '' ?>>Website Designing</option>
                    <option value="Website Development" <?= (isset($sidebar_service) && $sidebar_service == 'Website Development') ? 'selected' : '' ?>>Website Development</option>
                    <option value="SEO Services" <?= (isset($sidebar_service) && $sidebar_service == 'SEO Services') ? 'selected' : '' ?>>SEO Services</option>
                    <option value="Digital Marketing" <?= (isset($sidebar_service) && $sidebar_service == 'Digital Marketing') ? 'selected' : '' ?>>Digital Marketing</option>
                    <option value="Ecommerce Designing">Ecommerce Designing</option>
                    <option value="Portal Development">Portal Development</option>
                    <option value="Mobile App Development">Mobile App Development</option>
                </select>
            </div>
            <div class="form-group">
                <textarea name="message" class="form-control" rows="4" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn-enquiry">Submit Enquiry</button>
        </form>
    </div>

    <!-- Our Services Links -->
    <div class="sidebar-services">
        <h4>Our Services</h4>
        <ul>
            <li><a href="website-designing.php" <?= (isset($sidebar_service) && $sidebar_service == 'Website Designing') ? 'class="active"' : '' ?>>Website Designing</a></li>
            <li><a href="web-development.php" <?= (isset($sidebar_service) && $sidebar_service == 'Website Development') ? 'class="active"' : '' ?>>Website Development</a></li>
            <li><a href="seo.php" <?= (isset($sidebar_service) && $sidebar_service == 'SEO Services') ? 'class="active"' : '' ?>>SEO Services</a></li>
            <li><a href="digital-marketing.php" <?= (isset($sidebar_service) && $sidebar_service == 'Digital Marketing') ? 'class="active"' : '' ?>>Digital Marketing</a></li>
            <li><a href="contact-us.php">Ecommerce Web Designing</a></li>
            <li><a href="contact-us.php">Portal Development</a></li>
            <li><a href="contact-us.php">Mobile App Development</a></li>
        </ul>
    </div>

    <!-- Contact Info Box -->
    <div class="sidebar-contact-box">
        <h4>Contact Us</h4>
        <p><i class="fa fa-phone"></i> <a href="tel:18008903506">18008903506</a></p>
        <p><i class="fa fa-envelope"></i> <a href="mailto:support@webclickindia.com">support@webclickindia.com</a></p>
        <p><i class="fa fa-skype"></i> <a href="skype:webclickindia?call">webclickindia</a></p>
    </div>

</div>
