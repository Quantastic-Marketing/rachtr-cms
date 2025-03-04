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
        <link rel="stylesheet" href="css/uploadCV.css">
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
        
       <section class="cv-banner">
        <div class="row g-0">
        <div class="col-lg-12">  
            <div class="banner-section">
                <div class="image-wrapper">
                    <img src="images/uploadbg.jpeg" alt="img background">
                   
                </div>
                <div class="banner-content">
                        <h2 class="heading-holder">Submit your CV</h2>
                </div>
            </div>                   
          </div>
         
        </div>
       </section>
       <!-- -->

    <section class="upload-cv-form py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <h2 class="">Apply Now: Share Your Details</h2>
                    <p class="fs-6">We receive a high number of resumes from applicants. To enhance your chances of finding a suitable opportunity, please explore and apply for a position here.</p>
                </div>

                <div class="col-12 col-lg-8 ms-lg-2">
                    <div class="apply-section py-4">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Phone" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="City" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Pincode" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" required>
                                    <option value="" disabled selected>Position</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Manager">Manager</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                            <!-- Hidden file input -->
                                <input type="file" id="cvUpload" accept=".pdf,.doc,.docx" style="display: none;">
                                <!-- Custom Upload Button -->
                                <button type="button" class="btn btn-submit btn-upload" onclick="document.getElementById('cvUpload').click();">
                                    + Upload CV
                                </button>
                                <p id="file-name" class="file-name text-center"></p>

                            </div>
                            <button type="submit" class="btn btn-submit">SUBMIT APPLICATION</button>
                        </form>
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

