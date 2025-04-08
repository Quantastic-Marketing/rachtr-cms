document.addEventListener('DOMContentLoaded', function() {
    const openFormBtn =  document.querySelectorAll('#openFormBtn')
    const closeBtn = document.getElementById('closeBtn');
    const blurOverlay = document.getElementById('blurOverlay');
    const formPopup = document.getElementById('formPopup');
    const epoxyForms = document.querySelectorAll('.epoxy-form');
   
            // Open form popup
        if(openFormBtn){
            openFormBtn.forEach(btn => {
                btn.addEventListener('click', function() {
                    blurOverlay.style.display = 'block';
                    formPopup.style.display = 'block';
                });
            });
        }
        
        if(closeBtn){
            // Close form popup
            closeBtn.addEventListener('click', function() {
                blurOverlay.style.display = 'none';
                formPopup.style.display = 'none';
            });
        }

        if(openFormBtn && blurOverlay){
            // Close when clicking outside the form
            blurOverlay.addEventListener('click', function() {
                blurOverlay.style.display = 'none';
                formPopup.style.display = 'none';
               
            });
        }
   
        // Form submission
        // epoxyForm.addEventListener('submit', function(e) {
        //     e.preventDefault();
            
        //     // Validate form
        //     let isValid = true;
        //     const requiredFields = document.querySelectorAll('[required]');
            
        //     requiredFields.forEach(field => {
        //         if (!field.value.trim()) {
        //             field.classList.add('error');
        //             isValid = false;
        //         } else {
        //             field.classList.remove('error');
        //         }
        //     });
            
        //     if (isValid) {
        //         // Hide form and show success message
        //         formPopup.style.display = 'none';
        //         successMessage.style.display = 'block';
                
        //         // Auto hide success message after 3 seconds
        //         setTimeout(function() {
        //             successMessage.style.display = 'none';
        //             blurOverlay.style.display = 'none';
        //             resetForm();
        //         }, 3000);
        //     }
        // });
        
        // Reset form fields
        // function resetForm() {
        //     epoxyForm.reset();
        //     const errorFields = document.querySelectorAll('.error');
        //     errorFields.forEach(field => {
        //         field.classList.remove('error');
        //     });
        // }
        
        // Real-time validation for required fields
        if(epoxyForms.length > 0){
            const requiredInputs = document.querySelectorAll('[required]');
            requiredInputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (!this.value.trim()) {
                        this.classList.add('error');
                    } else {
                        this.classList.remove('error');
                    }
                });
                
                input.addEventListener('input', function() {
                    if (this.value.trim()) {
                        this.classList.remove('error');
                    }
                });
            });
        }
        
   

    MicroModal.init();

    let connectForm = document.getElementById("connect-form");
    if(connectForm) {
        connectForm.addEventListener("submit", function (event) {
            event.preventDefault();
            let form = this;
            let submitButton = this.querySelector("#submit-btn"); 
            submitButton.disabled = true;

            grecaptcha.ready(function() {
                grecaptcha.execute(window.RECAPTCHA_SITE_KEY, {action: 'submit'}).then(function(token) {
                let formData = new FormData(form);
                formData.append('recaptcha_token', token);
                fetch("/connect", {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById("success-message").innerText = "Form submitted successfully!";
                        MicroModal.show('success-modal'); // Show success modal
                        document.getElementById("connect-form").reset();
                    } else {
                        document.getElementById("error-message").innerText = data.message || "Failed to send data.";
                        MicroModal.show('error-modal'); // Show error modal
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    document.getElementById("error-message").innerText = "An unexpected error occurred. Please try again later.";
                    MicroModal.show('error-modal');
                })
                .finally(() => {
                    submitButton.disabled = false;
                });
            });
        });
    });
    }
    
    let uploadCV = document.getElementById("uploadcv-form");
    if(uploadCV) {
        document.getElementById("uploadcv-form").addEventListener("submit", function (event) {
            event.preventDefault();
    
            let fileInput = document.getElementById("cvUpload");

            if (fileInput && fileInput.files.length > 0) {
                let file = fileInput.files[0];
                let allowedExtensions = ["pdf", "doc", "docx"];
                let fileExtension = file.name.split('.').pop().toLowerCase();

                if (!allowedExtensions.includes(fileExtension)) {
                    document.getElementById("error-message").innerText = "Invalid file type! Please upload a PDF, DOC, or DOCX file.";
                    MicroModal.show('error-modal');
                    return;
                }
            } else {
                document.getElementById("error-message").innerText = "Please upload a file.";
                MicroModal.show('error-modal');
                return;
            }

            let submitButton = this.querySelector("#submit-btn");
            submitButton.disabled = true;     
            let form = this;

            grecaptcha.ready(function() {
                grecaptcha.execute(window.RECAPTCHA_SITE_KEY, {action: 'submit'}).then(function(token) {
                    let formData = new FormData(form);
                    formData.append('recaptcha_token', token);
                    fetch(form.action, {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById("success-message").innerText = "Application submitted successfully!";
                            MicroModal.show('success-modal');
                        
                            form.reset();
                            document.getElementById("file-name").innerText = "";
                        } else {
                            document.getElementById("error-message").innerText = data.message || "Failed to submit application.";
                            MicroModal.show('error-modal');
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        document.getElementById("error-message").innerText = "An unexpected error occurred. Please try again.";
                        MicroModal.show('error-modal');
                    })
                    .finally(() => {
                        submitButton.disabled = false;
                    });
                });
            });
        });
        document.getElementById("cvUpload").addEventListener("change", function () {
            let fileName = this.files.length > 0 ? this.files[0].name : "";
            document.getElementById("file-name").innerText = fileName;
        });
    }

    let epoxySolutionForms= document.querySelectorAll(".epoxy-form");
    if(epoxySolutionForms.length > 0){
        epoxySolutionForms.forEach(function (form) {
            form.addEventListener("submit", function (event) {
                event.preventDefault(); // Prevent default form submission
                let submitButton = this.querySelector(".submit-btn");
                if (submitButton) {
                    submitButton.disabled = true; // Disable button
                }
                grecaptcha.ready(function() {
                    grecaptcha.execute(window.RECAPTCHA_SITE_KEY, {action: 'submit'}).then(function(token) {
                    let formData = new FormData(form);
                    formData.append('recaptcha_token', token);
                    fetch(form.action, {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-CSRF-TOKEN": form.querySelector('input[name="_token"]').value
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            MicroModal.show('success-modal'); // Show success modal
                            form.reset(); // Reset form after successful submission
                        } else {
                            document.getElementById("error-message").innerText = data.message || "Failed to submit form.";
                            MicroModal.show('error-modal'); // Show error modal
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        document.getElementById("error-message").innerText = "An unexpected error occurred.";
                        MicroModal.show('error-modal');
                    })
                    .finally(() => {
                        if(submitButton)
                        submitButton.disabled = false;
                    });
                    });
                });
            });
        });
    }

    let contactForm = document.getElementById("contact-form");
    console.log(contactForm);
    if (contactForm) {
        contactForm.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent default form submission

            let submitButton = contactForm.querySelector("button[type='submit']");
            if (submitButton) {
                submitButton.disabled = true; // Disable submit button
            }
            let form = this;
            grecaptcha.ready(function() {
                grecaptcha.execute(window.RECAPTCHA_SITE_KEY, {action: 'submit'}).then(function(token) {
                    let formData = new FormData(form);
                    formData.append('recaptcha_token', token);
                    let csrfTokenInput = form.querySelector('input[name="_token"]');

                    if (!csrfTokenInput) {
                        console.error("CSRF token not found!");
                        if (submitButton) submitButton.disabled = false;
                        return;
                    }

                    fetch(form.action, {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-CSRF-TOKEN": csrfTokenInput.value
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById("success-message").innerText = "Application submitted successfully!";
                            MicroModal.show('success-modal');
                            form.reset(); 
                        } else {
                            document.getElementById("error-message").innerText = data.message || "Failed to submit form.";
                            MicroModal.show('error-modal');
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        document.getElementById("error-message").innerText = "An unexpected error occurred.";
                        MicroModal.show('error-modal');
                    })
                    .finally(() => {
                        if (submitButton) submitButton.disabled = false;
                    });
                    });
                });
            });
    }
    

});

