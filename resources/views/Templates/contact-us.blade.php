<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>{{ $page->title }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="css/hover-min.css" type="text/css">-->
        <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
        <link rel="stylesheet" href="css/slick.css" type="text/css">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="css/responsive.css" type="text/css" rel="stylesheet">
        <!-- <link  href="css/epoxy.css" type="text/css" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="css/epoxyCost.css"> -->
        <link href="css/puFloor.css" type="text/css" rel="stylesheet">
        <link href="css/contractual.css" type="text/css" rel="stylesheet">
        <link href="css/contact.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css/architect.css">
        <link rel="shotcut icon" type="image/x-icon" href="images/favicon.ico">
        
    </head>
<body>
    <!-- This is a wrapper open -->
    <div class="wrapper"> 
      <!-- This is a header open -->
        @if($page->header_id && $page->header->name)
            @include('CommonTemplates.' . $page->header->name)
        @endif
       <!-- This is a banner open -->
        
       <section class="contact-banner banner">
        <div class="row g-0">
        <div class="col-lg-12">  
            <div class="banner-section">
                <div class="image-wrapper">
                    <img src="images/contactUs.jpeg" alt="img background">
                   
                </div>
                <div class="heading-holder">
                    <h2>CONTACT US</h2>
                </div>
            </div>                   
          </div>
         
        </div>
    </section>

    <section class="contact-form pt-5">
        <div class="container contact-section">
            <div class="row">
                <div class="col-md-12 col-lg-9 col-xl-7">
                    <h2 class="text-center fw-bold">Reach Out To Us</h2>
        
                    <div class="row mt-4">
                        <!-- Left Side: Contact Info -->
                        <div class="col-md-5 d-none d-md-block">
                            <div class="contact-box p-3 shadow-sm rounded-4">
                                <div class="d-flex align-items-start">
                                    <i class="fa fa-map-marker fs-4 me-2"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">HEAD OFFICE ADDRESS:</h6>
                                        <p class="mb-0">
                                            RachTR Chemicals Private Limited,<br>
                                            4th Floor, Unit No 413/414, Spaze Boulevard, Above Kia Showroom,<br>
                                            Sector 47, Gurgaon - 122018<br>
                                            Call Us: <a href="tel:+911244453999">+91-124-4453999</a>, <a href="tel:+917827191824">+91-7827191824</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="contact-box p-3 shadow-sm rounded-4 mt-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa fa-map-marker fs-4 me-2"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">MANUFACTURING & RESEARCH CENTER:</h6>
                                        <p class="mb-0">
                                            G1-586, RIICO Industrial Area, Khushkhera - 301707, Bhiwadi, Rajasthan
                                        </p>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="contact-box p-3 shadow-sm rounded-4 mt-3">
                                <div class="d-flex align-items-start">
                                    <i class="fa fa-envelope-o fs-4 me-2"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">EMAIL ADDRESS:</h6>
                                        <p class="mb-0">
                                            <a href="mailto:marketing@rachtr.com">marketing@rachtr.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Right Side: Contact Form -->
                        <div class="col-md-7">
                            <div class="contact-box p-4 shadow-sm rounded-4">
                                <form class="contact-form">
                                    <div class="mb-2">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="mb-2">
                                        <input type="tel" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                    <div class="mb-2">
                                        <select class="form-control">
                                            <option value="" disabled selected>Profession</option>
                                            <option>Student</option>
                                            <option>Engineer</option>
                                            <option>Business</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <input type="email" class="form-control" placeholder="Email id" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <input type="text" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <textarea class="form-control" placeholder="Message"></textarea>
                                    </div>
                                    <div class="d-flex  w-md-50 me-md-0">
                                        <button type="submit" class="btn btn-primary w-100 ">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <div class="d-none d-md-block" style="border-top: 2px dotted black; width: 100%; margin: 20px 0;"></div>


    </div>
    <section class="contact-map py-5 d-none d-md-block">
        <div class="container">
            <div class="row div">
                <div class="col-12 col-md-6 p-4">
                    <div class="ratio ratio-16x9"> <!-- Responsive embed -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7037.680914959619!2d76.789226!3d28.120892!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d4b99c8cd2a4f%3A0x774a31d052b97d27!2sRachTR%20Chemicals%20Pvt%20Ltd%20%7C%20Epoxy%20Flooring%20%7C%20Tile%20Adhesives%20%7C%20Epoxy%20Grout%20%7C%20Marble%20Sealers%2C%20Polish%20%26%20Protection%20Chemicals!5e0!3m2!1sen!2sin!4v1739867357350!5m2!1sen!2sin" 
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>               
                </div>
                <div class="col-12 col-md-6 p-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7018.07150760237!2d77.040755!3d28.418178!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0319846ab45d%3A0xcebbb501e5193504!2sRachTR%20Chemicals%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1739867428225!5m2!1sen!2sin" 
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mobile-order-sec d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12 py-2">
                    <div class="contact-box p-3 shadow-sm rounded-4">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa fa-map-marker fs-4 m-0"></i>
                            <div >
                                <h6 class="fw-bold mb-1">HEAD OFFICE ADDRESS:</h6>
                                <p class="mb-0">
                                    RachTR Chemicals Private Limited,<br>
                                    4th Floor, Unit No 413/414, Spaze Boulevard, Above Kia Showroom,<br>
                                    Sector 47, Gurgaon - 122018<br>
                                    Call Us: <a href="tel:+911244453999">+91-124-4453999</a>, <a href="tel:+917827191824">+91-7827191824</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-2">
                    <div class="ratio ratio-16x9"> <!-- Responsive embed -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7037.680914959619!2d76.789226!3d28.120892!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d4b99c8cd2a4f%3A0x774a31d052b97d27!2sRachTR%20Chemicals%20Pvt%20Ltd%20%7C%20Epoxy%20Flooring%20%7C%20Tile%20Adhesives%20%7C%20Epoxy%20Grout%20%7C%20Marble%20Sealers%2C%20Polish%20%26%20Protection%20Chemicals!5e0!3m2!1sen!2sin!4v1739867357350!5m2!1sen!2sin" 
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-12 py-3 ">
                    <div class="contact-box p-3 shadow-sm rounded-4 mt-3">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa fa-map-marker fs-4 m-0"></i>
                            <div>
                                <h6 class="fw-bold mb-1">MANUFACTURING & RESEARCH CENTER:</h6>
                                <p class="mb-0">
                                    G1-586, RIICO Industrial Area, Khushkhera - 301707, Bhiwadi, Rajasthan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-2">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7018.07150760237!2d77.040755!3d28.418178!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0319846ab45d%3A0xcebbb501e5193504!2sRachTR%20Chemicals%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1739867428225!5m2!1sen!2sin" 
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-12 py-2">
                    <div class="contact-box p-3 shadow-sm rounded-4 mt-3">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa fa-envelope-o fs-4 m-0"></i>
                            <div class="ms-0">
                                <h6 class="fw-bold mb-1">EMAIL ADDRESS:</h6>
                                <p class="mb-0">
                                    <a href="mailto:marketing@rachtr.com">marketing@rachtr.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       
     
    <!-- This is a section-9 open --> 
        @if($page->footer_id && $page->footer->name)
            @include('CommonTemplates.' . $page->footer->name)
       @endif
    <!-- This is a section-9 close -->     
   </div>
    <!-- This is a wrapper close -->
<script src="js/jquery.min.js" type="text/jscript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/slick.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/custom.js"></script>  
  
<script type="text/javascript">
    $('#showLeft').click(function(){
	$(this).toggleClass('open');
	$(".nav").slideToggle();	
});
</script> 

    
    
</body>   
</html>

