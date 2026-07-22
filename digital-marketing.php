<?php include 'includes/header.php'; ?>
<?php include 'components/scripts.php'; ?>
<link rel="stylesheet" href="assets/css/inner-page.css">
<link rel="stylesheet" href="assets/css/digital-marketing.css">

<!-- Inner Banner -->
<div class="inner-page-banner">
    <div class="container">
        <h1>Digital Marketing</h1>
        <div class="breadcrumb-bar">
            <p style="color:rgba(255,255,255,0.85); font-style:italic; font-size:0.95rem; margin-bottom:5px;">Bullet train ki speed se promotion chahie? Digital Marketing Karwaye!</p>
            <a href="index.php">Home</a> &rsaquo; Digital Marketing
        </div>
    </div>
</div>

<!-- Intro Content -->
<div style="padding:55px 0; background:#fff;">
    <div class="container">
        <h2 style="color:#353275; font-weight:700; font-family:'Josefin Sans',sans-serif; margin-bottom:20px; font-size:1.6rem;">&quot;Digital Marketing &ndash; Our Strategies Inspire You To Make A Path That Leads You To Success Over The Internet Or Intranet&quot;</h2>
        <p>Digital Marketing is a broad term for the marketing of products and services by utilizing a number of digital technologies, mainly on the internet, intranet, mobile phones, or any other digital medium. <strong>Webclick&reg; Digital Pvt. Ltd.</strong> - as one of the leading <strong><a href="digital-marketing.php" title="Digital Marketing Agency in Delhi">Digital Marketing Agency in Delhi</a></strong>, believes that the internet has the power to boost your business and not using it is like opening a store but not telling anyone, which has no worth. Before you get started with digital marketing have a glance at most of its common type used by a number of digital experts:</p>
    </div>
</div>

<!-- Digital Marketing Services List -->
<div style="padding:40px 0; background:#f8f9ff;">
    <div class="container">
        <div class="row">

            <?php
            $dmServices = [
                ['img' => 'https://www.webclickindia.com/public/images/pageitems/best-seo-company-in-india.gif', 'title' => 'Search Engine Optimization', 'subtitle' => 'Digital Marketing', 'desc' => 'One of the common types of digital marketing, which is used to increase the ranking of your website, is SEO (Search Engine Optimization), which is further classified in On Page SEO and Off Page SEO. From blogging to link building, content creation to backlinks there are various techniques involved in this strategy that is used by the SEO Experts to give you the outcome what you pay for.'],
                ['img' => 'https://www.webclickindia.com/public/images/pageitems/smo-services-in-india.gif', 'title' => 'Social Media Marketing', 'subtitle' => 'Kyunki ‘Global Village’ apne mein ek alag duniya hai', 'desc' => 'Needless to say, in today\'s time, it is the easiest place to target a wider audience. It helps you to build your brand image among various channels like Facebook, Twitter, LinkedIn, Instagram, Pinterest, Tumblr, etc. Over the past few years, this type of digital marketing is at its peak.'],
                ['img' => 'https://www.webclickindia.com/public/images/pageitems/email-marketing-services.gif', 'title' => 'Email Marketing', 'subtitle' => 'Male aur Female to theek hai, ye email ka kon jadu ki pudiya hai?', 'desc' => 'It is one of the oldest forms of digital marketing, which includes targeted messages at the correct time, which open the doors to drive a huge traffic to your website.'],
                ['img' => 'https://www.webclickindia.com/public/images/pageitems/ppc-services.gif', 'title' => 'Pay Per Click', 'subtitle' => 'Har click pe business', 'desc' => 'Another important type of Digital Marketing is PPC, which is mostly known as paid search. It will display your website on the top of the Google and the cost of every keyword depends on the competitiveness of the keyword you are bidding on.'],
            ];
            foreach($dmServices as $dm):
            ?>
            <div class="col-md-12" style="margin-bottom:30px; background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 2px 12px rgba(0,0,0,0.06); display:flex; flex-wrap:wrap; align-items:center;">
                <div class="col-md-3 text-center" style="padding:20px;">
                    <img src="<?= $dm['img'] ?>" class="img-responsive" alt="<?= $dm['title'] ?>" style="max-width:100%; margin:auto;">
                </div>
                <div class="col-md-9" style="padding:25px;">
                    <h3 style="color:#353275; font-weight:700; margin-bottom:5px; font-size:1.3rem;"><?= $dm['title'] ?></h3>
                    <p style="color:#e67e22; font-style:italic; margin-bottom:12px; font-size:0.9rem;"><?= $dm['subtitle'] ?></p>
                    <p style="color:#555;"><?= $dm['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>

            <!-- Conclusion Block -->
            <div class="col-md-12" style="margin-bottom:30px; background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 2px 12px rgba(0,0,0,0.06); display:flex; flex-wrap:wrap; align-items:center;">
                <div class="col-md-3 text-center" style="padding:20px;">
                    <img src="https://www.webclickindia.com/public/images/pageitems/digital-marketing-company-in-delhi.gif" class="img-responsive" alt="Digital Marketing Company" style="max-width:100%; margin:auto;">
                </div>
                <div class="col-md-9" style="padding:25px;">
                    <h3 style="color:#353275; font-weight:700; margin-bottom:12px; font-size:1.3rem;">Why Webclick&reg; Digital Pvt. Ltd. Is The Reliable Digital Marketing Company In Delhi?</h3>
                    <ul class="check-list">
                        <li>We have more than 5+ years of experience</li>
                        <li>Quality is our commitment</li>
                        <li>We ask, listen and understand</li>
                        <li>Our experience can boost your business</li>
                        <li>Passion, dedication, and commitment is our power</li>
                        <li>We offer around-the-clock support even after your website starts functioning</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'components/contact-footer.php'; ?>
<?php include 'includes/footer.php'; ?>
