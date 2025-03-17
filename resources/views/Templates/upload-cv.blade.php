 <div class="wrapper"> 
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
   </div>
 