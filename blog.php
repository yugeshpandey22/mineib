<?php include 'includes/header.php'; ?>
<?php include 'components/scripts.php'; ?>
<link rel="stylesheet" href="assets/css/inner-page.css">
<link rel="stylesheet" href="assets/css/blog.css">

<!-- Inner Banner -->
<div class="inner-page-banner">
    <div class="container">
        <h1>Blog</h1>
        <div class="breadcrumb-bar">
            <p style="color:rgba(255,255,255,0.85); font-style:italic; font-size:0.95rem; margin-bottom:5px;">Desh Aur Duniya Se Digital Khabrein</p>
            <a href="index.php">Home</a> &rsaquo; Blog
        </div>
    </div>
</div>

<section class="blog-section" style="padding:55px 0; background:#f8f9ff;">
    <div class="container">
        <div class="section-heading text-center" style="margin-bottom:40px;">
            <h2 style="color:#353275; font-weight:700; font-family:'Josefin Sans',sans-serif; margin-bottom:10px;">Latest Insights & Blogs</h2>
            <p style="color:#555; font-size:1.1rem;">Industry trends, business tips, and company updates.</p>
        </div>

        <div class="row">
            <?php
            $blogs = [
                [
                    'img' => 'https://www.webclickindia.com/public/images/blogs/twitter-new-logo.jpg',
                    'title' => 'What Does Twitter New Logo Give Hint To Digital Marketers?',
                    'desc' => 'Twitter\'s rebrand and what it means for digital marketing strategies moving forward.'
                ],
                [
                    'img' => 'https://www.webclickindia.com/public/images/blogs/conversion-tips-to-improve-your-website-for-lead-generation.jpg',
                    'title' => 'Conversion Tips To Improve Your Website For Lead Generation',
                    'desc' => 'Tips and tricks to optimize your landing pages to capture more verified leads.'
                ],
                [
                    'img' => 'https://www.webclickindia.com/public/images/blogs/vast-concept-in-digital-marketing.jpg',
                    'title' => 'Why Digital Marketing Is Next Big Thing For Your Business?',
                    'desc' => 'Understanding the vast potential of digital platforms for massive business scale.'
                ],
                [
                    'img' => 'https://www.webclickindia.com/public/images/blogs/revamp-ecommerce-website.jpg',
                    'title' => 'Is Revamping Your Ecommerce Website Can Help You Boost Business?',
                    'desc' => 'Why an outdated ecommerce design is hurting your sales and how a revamp fixes it.'
                ],
                [
                    'img' => 'https://www.webclickindia.com/public/images/blogs/digital-marketing-services-during-covid19.png',
                    'title' => 'How To Use Digital Marketing To Boost Your Business During Pandemic?',
                    'desc' => 'Adapting to the new normal with robust online marketing strategies.'
                ],
                [
                    'img' => 'https://www.webclickindia.com/public/images/blogs/webclickdigitalp202020.jpg',
                    'title' => 'Not Getting Expected Response From Your Website? These Could Be Your Reasons',
                    'desc' => 'Identify the hidden bottlenecks in your website causing high bounce rates.'
                ],
            ];
            foreach($blogs as $blog):
            ?>
            <div class="col-lg-4 col-md-6" style="margin-bottom:30px;">
                <div class="blog-card" style="background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.06); transition:transform 0.3s; height:100%;">
                    <div class="blog-image" style="height:220px; overflow:hidden;">
                        <img src="<?= $blog['img'] ?>" alt="<?= $blog['title'] ?>" style="width:100%; height:100%; object-fit:cover; transition:transform 0.5s;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    <div class="blog-content" style="padding:25px;">
                        <h3 style="font-size:1.15rem; font-weight:700; line-height:1.4; margin-bottom:12px; color:#353275; min-height:50px;">
                            <a href="#" style="color:#353275; text-decoration:none;"><?= $blog['title'] ?></a>
                        </h3>
                        <p style="color:#666; font-size:0.95rem; margin-bottom:15px; line-height:1.6;"><?= $blog['desc'] ?></p>
                        <a href="#" style="color:#6c63ff; font-weight:600; text-decoration:none; display:inline-block; transition:0.3s;" onmouseover="this.style.color='#353275'" onmouseout="this.style.color='#6c63ff'">Read More &rarr;</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'components/contact-footer.php'; ?>
<?php include 'includes/footer.php'; ?>
