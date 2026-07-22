<?php include 'includes/header.php'; ?>
<?php include 'components/scripts.php'; ?>
<link rel="stylesheet" href="assets/css/inner-page.css">

<!-- ======================= Breadcrumb starts here ================================ -->
<div class="breadcrumb-blog">
   <div class="breadcrumb">
	<h1>Our Certificates</h1>
	<p class="tagline_hindi"></p>
      <ul>
         <li class="active"><a href="/" title="Home">Home</a> &nbsp; | </li>
         <li>Our Certificates</li>
      </ul>
   </div>
</div>
<div class="triangle-down"></div>
<!-- ======================= Breadcrumb ends here ================================ -->
<!-- ======================= Porfolio starts here================================-->
<div class="port">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <h2>Our Certificates</h2>

<p><img alt="ISO Certificate" src="assets/images/certificates/wci-iso.jpg" title="ISO Certificate" /></p>

<p><img alt="10 Best Startups In Website Development" src="assets/images/certificates/silicon-certificate.jpg" title="10 Best Startups In Website Development" /></p>

<p><img alt="Expert Author Certificate" src="assets/images/certificates/ezine-certi.jpg" title="Expert Author Certificate" /></p>
			<br />
			         </div>
         <div class="col-lg-4">
            
	<div class="form-wrapper" id="innerenquiry-form">
		<div class="enquiry-title">Enquiry Now</div>
		<div id="innersuccessmsg"></div>
		<div class="overlaysan"></div>
		<form name="fcontactform"  class="form" method="post" action="enquiry" >
		<input type="hidden" name="_token" value="mB0SY4pC3kvjz90iQj1DHSXWRSeqlkY4XqqNFVmy">		<input type="hidden" name="page_url" value="our-certificates.php">
		<div class="form-group">                 
		<input type="text" name="name" id="first" class="form-input" placeholder="Your Name" required />
		</div>
		<div class="form-group">                 
		<input type="email" name="email" id="last" class="form-input" placeholder="Your Email"  required />
		</div>
		<div class="form-group">            
		<input type="text"  name="company"  id="first" class="form-input" placeholder="Your Company" />
		</div>
		<div class="form-group">                
		<input type="text" name="mobile"  id="color" class="form-input" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 43 || event.charCode == 45 || event.charCode == 0" minlength="10" maxlength="15" placeholder="Contact No." required />
		</div>
		<div class="form-group">            
		<input type="text" name="address" id="first" class="form-input"  placeholder="Your Address"  />
		</div>
		<div class="form-group">            
		<textarea name="message" placeholder="Message"  class="form-input msg"></textarea>
		</div>
		<div class="form-group">
		<button type="submit" class="btn skip ">Submit</button>
		</div>
		</form>
		</div>         </div>
      </div>
   </div>
</div>


<?php include 'components/contact-footer.php'; ?>
<?php include 'includes/footer.php'; ?>
