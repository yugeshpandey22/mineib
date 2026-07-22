<?php include 'includes/header.php'; ?>
<?php include 'components/scripts.php'; ?>
<link rel="stylesheet" href="assets/css/inner-page.css">
<link rel="stylesheet" href="assets/css/web-development.css">

<!-- Inner Banner -->
<div class="inner-page-banner">
    <div class="container">
        <h1>Website Development</h1>
        <div class="breadcrumb-bar">
            <p style="color:rgba(255,255,255,0.85); font-style:italic; font-size:0.95rem; margin-bottom:5px;">Sirf Coding Nahi, Creativity Ki Unloading Bhi</p>
            <a href="index.php">Home</a> &rsaquo; Website Development
        </div>
    </div>
</div>

<!-- First Section — Image + Content -->
<div style="padding:55px 0; background:#fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="https://www.webclickindia.com/public/images/categories/website-development.gif"
                     class="img-responsive" alt="Website Development" title="Website Development" style="max-width:100%; margin:auto;">
            </div>
            <div class="col-md-6">
                <h2>&quot;We Believe Your Business Deserve More Than Just Web Development&quot;</h2>
                <p><strong>Webclick&reg; Digital Pvt. Ltd.</strong> is a prominent <a href="index.php" title="Website Development Company in Delhi"><strong>Website Development Company in Delhi</strong></a>, India. We fully understand the objective of web development. Whether you want to generate enquiries or just want a profile for your company or you want to sell commodities to the buyers, we do website development according to your specification.</p>
                <p>We use advanced platforms of web development like PHP, Joomla, Wordpress and Magento to offer you the best website. We have worked for more than 500 business houses since 2014. Our experienced web designing approach and advanced knowledge of website development will definitely generate new business for you on global platform of internet.</p>
            </div>
        </div>
    </div>
</div>

<!-- What We Offer + Service Icons -->
<div style="padding:50px 0; background:#1a1a6e;">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3 style="color:#fdcb6e; font-weight:700; font-family:'Josefin Sans',sans-serif; margin-bottom:8px;">What We Offer?</h3>
                <p style="color:rgba(255,255,255,0.7); font-style:italic; margin-bottom:25px;">Skills Bharpoor, Aapko Kya Chahiye Huzoor?</p>

                <?php
                $offerings = [
                    ['title' => 'CakePHP Development', 'desc' => 'Make a complex website a piece of cake with CakePHP. Enjoy all its features for unforgettable user-experience.'],
                    ['title' => 'PHP Development', 'desc' => 'An effective open source tool which helps us to develop a site which attracts more customers than any other.'],
                    ['title' => 'Joomla Development', 'desc' => 'An award winning CMS used by millions of developers and is very easy to use even for a non technical person.'],
                    ['title' => 'WordPress Development', 'desc' => 'WordPress — a worldwide famous CMS with lots of developers provides a good platform for your website.'],
                    ['title' => 'Drupal Development', 'desc' => 'One of the popular content management systems which helps to provide complete customization to your site.'],
                    ['title' => 'Magento Development', 'desc' => 'Helps to develop a flawless and effective e-store for your business.'],
                    ['title' => 'B2B Portal Development', 'desc' => 'This will help to promote your business worldwide, which in result expands your business.'],
                    ['title' => 'Custom Development', 'desc' => 'This will provide complete flexibility to your users so they can edit it as per their requirements.'],
                ];
                foreach($offerings as $o):
                ?>
                <p style="color:#fff; margin-bottom:12px;">
                    <span style="color:#fdcb6e; font-weight:700;"><i class="fa fa-arrow-right"></i> <?= $o['title'] ?>:</span>
                    <span style="color:rgba(255,255,255,0.8);"> <?= $o['desc'] ?></span>
                </p>
                <?php endforeach; ?>
            </div>

            <div class="col-md-7">
                <div class="row">
                    <?php
                    $techServices = [
                        ['img' => 'https://www.webclickindia.com/public/images/services/img-2cakephp.png', 'title' => 'CakePHP Development'],
                        ['img' => 'https://www.webclickindia.com/public/images/services/img-2php-development.png', 'title' => 'PHP Development'],
                        ['img' => 'https://www.webclickindia.com/public/images/services/img-2joomla-development.png', 'title' => 'Joomla Development'],
                        ['img' => 'https://www.webclickindia.com/public/images/services/img-2wordpress-development.png', 'title' => 'WordPress Development'],
                        ['img' => 'https://www.webclickindia.com/public/images/services/img-2drupal-development.png', 'title' => 'Drupal Development'],
                        ['img' => 'https://www.webclickindia.com/public/images/services/img-2magento-development.png', 'title' => 'Magento Development'],
                        ['img' => 'https://www.webclickindia.com/public/images/services/img-2b2b-portal-development.png', 'title' => 'B2B Portal Development'],
                        ['img' => 'https://www.webclickindia.com/public/images/services/img-2custom-development.gif', 'title' => 'Custom Development'],
                    ];
                    foreach($techServices as $ts):
                    ?>
                    <div class="col-xs-3 col-sm-3 text-center" style="margin-bottom:20px;">
                        <img src="<?= $ts['img'] ?>" alt="<?= $ts['title'] ?>" class="img-responsive" style="max-width:70px; margin:0 auto 8px;">
                        <p style="color:rgba(255,255,255,0.85); font-size:0.75rem;"><?= $ts['title'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Detail Cards -->
<div style="padding:50px 0; background:#f8f9ff;">
    <div class="container">
        <div class="row">
            <?php
            $devCards = [
                ['img' => 'https://www.webclickindia.com/public/images/pageitems/website-development-company-in-delhi.gif', 'title' => 'Advanced Technology', 'desc' => 'We use advanced web technology tools for offering best website development services to our clients. We have professionals who are well versed in CakePHP, PHP, Joomla, Magento, WordPress and other popular platforms.'],
                ['img' => 'https://www.webclickindia.com/public/images/pageitems/php-web-development-company-in-delhi.gif', 'title' => 'PHP Web Development', 'desc' => 'We offer robust PHP web development services. Our PHP developers build highly scalable and secure web applications tailored to your business needs.'],
                ['img' => 'https://www.webclickindia.com/public/images/pageitems/cms-web-development-company-in-delhi.gif', 'title' => 'CMS Web Development', 'desc' => 'We offer feature-rich CMS web development solutions that allow you to easily manage your website content without any technical knowledge.'],
            ];
            foreach($devCards as $dc):
            ?>
            <div class="col-md-4" style="margin-bottom:25px;">
                <div class="service-card" style="border-left:none; border-top:4px solid #353275; text-align:center; padding:25px 18px;">
                    <img src="<?= $dc['img'] ?>" alt="<?= $dc['title'] ?>" class="img-responsive" style="max-width:100px; margin:0 auto 15px;">
                    <h4><?= $dc['title'] ?></h4>
                    <p><?= $dc['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="row" style="margin-top:20px;">
            <div class="col-md-12">
                <h3 style="color:#353275; font-weight:700; font-family:'Josefin Sans',sans-serif; margin-bottom:20px;">Why Choose Us For Web Development?</h3>
                <ul class="check-list">
                    <li>10+ years of web development expertise in Delhi, India</li>
                    <li>Expert team of PHP, WordPress, Magento, Joomla, Drupal developers</li>
                    <li>Clean, scalable and well-documented code</li>
                    <li>100% SEO-friendly website structure from the ground up</li>
                    <li>Cross-browser compatible and fully responsive on all devices</li>
                    <li>Agile development with regular progress updates</li>
                    <li>1-year free technical support after project delivery</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'components/contact-footer.php'; ?>
<?php include 'includes/footer.php'; ?>
