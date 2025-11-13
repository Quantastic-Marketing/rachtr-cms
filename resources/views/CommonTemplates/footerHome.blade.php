@php
    $pageContent = $page->content ?? '';
    $searchItems = $pageContent['popular_searches'] ?? [];
@endphp
<section class="footer"> 
        <div class="container">
            <div class="row g-0">
                @if(!empty($searchItems) && is_string($searchItems))
                <div class="popular-searches">
                    <div class="container">
                        <h5>Popular Searches</h5>     
                        <div class="search-tags">
                            {!! trim($searchItems ?? '') !!}
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-lg-6 ml-0">
                  <div class="ftr_logo pt-5 pb-4">
                     <img src=" https://www.rachtr.com/images/btm-logo.webp" alt="footer Logo" loading="lazy"/>  
                  </div>
                  <div class="form_sec mbl py-5">
                        <h3 class="fw-bold py-2">GET IN TOUCH</h3>
                        <form  action="{{ route('connect') }}" method="POST">
                        @csrf
                          <div class="row g-0">  
                              <div class="mb-2 pe-1 col">
                                 <input type="name" class="form-control" id="Name" placeholder="Name" name="Name" required>
                              </div>
                              <div class="mb-2 ps-1 col">
                                <input type="phone" class="form-control" id="Phone" placeholder="Phone" name="Phone" required>
                              </div>
                          </div>
                          <div class="row g-0">  
                              <div class="mb-2 pe-1 col">
                                <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required>
                              </div>
                              <div class="mb-2 ps-1 col">
                                <input type="massage" class="form-control" id="Message" placeholder="Message" name="Message" required>
                              </div>
                          </div>   
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>  
                  <div class="ftr_address">
                      <div class="icon">
                         <svg preserveAspectRatio="xMidYMid meet" data-bbox="42 20.5 116 159" viewBox="42 20.5 116 159" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lu9ky79g svg [data-color="1"] {fill: #EF6E25;}</style></defs>
                            <g>
                                <path d="M99.999 179.5l-4.053-4.877C93.746 171.972 42 109.349 42 78.612 42 46.569 68.018 20.5 99.999 20.5 131.985 20.5 158 46.569 158 78.612c0 30.738-51.743 93.361-53.948 96.011l-4.053 4.877zm0-148.434c-26.166 0-47.455 21.328-47.455 47.545 0 20.481 31.206 63.869 47.455 84.264 16.252-20.394 47.458-63.783 47.458-84.264-.001-26.217-21.289-47.545-47.458-47.545z" fill="#4854C7" data-color="1"></path>
                                <path d="M99.999 102.075c-12.911 0-23.419-10.525-23.419-23.464s10.507-23.466 23.419-23.466c12.914 0 23.421 10.527 23.421 23.466 0 12.939-10.507 23.464-23.421 23.464zm0-36.364c-7.097 0-12.872 5.786-12.872 12.9 0 7.112 5.775 12.899 12.872 12.899 7.1 0 12.878-5.787 12.878-12.899-.001-7.114-5.779-12.9-12.878-12.9z" fill="#4854C7" data-color="1"></path>
                            </g>
                        </svg>
                      </div>
                      <div class="adress">
                       <p class="ps-2"><strong>RachTR Chemicals Private Limited,</strong> 4th Floor, Unit No 413/414, Spaze Boulevard, Above Kia Showroom, Sector 47, Gurgaon - 122018</p>
                      </div>
                  </div>
                  <div class="contact row g-0 py-5">
                      <ul class="">
                         <li>   
                             <div class="icon">
                                   <svg preserveAspectRatio="xMidYMid meet" data-bbox="27.001 26.499 146.002 147" viewBox="27.001 26.499 146.002 147" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lu9kzg2v svg [data-color="1"] {fill: #EF6E25;}</style></defs>
                                        <g>
                                            <path d="M151.569 118.788a80.618 80.618 0 0 1-17.694-4.429c-6.259-2.364-13.376-.839-18.149 3.903l-6.221 6.252A102.071 102.071 0 0 1 75.47 90.318l6.23-6.26c4.706-4.783 6.225-11.942 3.873-18.23a81.74 81.74 0 0 1-4.414-17.823c-1.196-8.502-8.498-14.864-16.985-14.864l-.168.001H44.173c-.509 0-1.024.024-1.529.07-4.572.415-8.711 2.595-11.653 6.139-2.943 3.546-4.337 8.031-3.917 12.694 2.225 21.051 9.455 41.57 20.891 59.308 10.391 16.434 24.527 30.639 40.848 41.06 17.597 11.468 37.919 18.733 58.844 21.017.515.046 1.036.069 1.553.069h.06c9.478-.039 17.159-7.823 17.121-17.337v-19.879c.191-8.752-6.159-16.267-14.822-17.495zm6.878 17.449v19.941c.02 5.119-4.111 9.3-9.206 9.321a6.703 6.703 0 0 1-.801-.03c-19.623-2.143-38.748-8.98-55.339-19.792-15.374-9.816-28.664-23.171-38.451-38.65C43.872 90.31 37.069 71.005 34.982 51.261a9.253 9.253 0 0 1 2.107-6.779 9.172 9.172 0 0 1 6.271-3.302c.274-.025.549-.038.819-.038h19.958c4.586 0 8.512 3.417 9.149 7.948a89.818 89.818 0 0 0 4.848 19.549c1.264 3.379.448 7.222-2.063 9.773l-8.394 8.435a4.02 4.02 0 0 0-.645 4.811 110.047 110.047 0 0 0 41.147 41.349 3.951 3.951 0 0 0 4.768-.648l8.377-8.419a9.247 9.247 0 0 1 9.768-2.087 88.512 88.512 0 0 0 19.405 4.862c4.649.659 8.067 4.71 7.951 9.423l-.001.099zm-42.722-75.244c-2.153-.422-3.56-2.522-3.14-4.691.418-2.168 2.501-3.587 4.659-3.162 14.866 2.915 26.346 14.453 29.247 29.394.421 2.168-.984 4.269-3.137 4.693a3.937 3.937 0 0 1-.766.075 3.981 3.981 0 0 1-3.895-3.234c-2.278-11.728-11.293-20.786-22.968-23.075zm53.748 26.218a3.983 3.983 0 0 1-4.392-3.528c-2.917-26.076-23.08-46.31-49.034-49.208-2.181-.244-3.753-2.221-3.511-4.416.242-2.196 2.207-3.781 4.386-3.535 29.67 3.312 52.721 26.449 56.055 56.263.245 2.196-1.324 4.176-3.504 4.424z" fill="#000001" data-color="1"></path>
                                        </g>
                                    </svg>
                             </div>
                             <div class="txt">
                                 <a href="tel:+91-124-4453999" target="_blank">+91-124-4453999</a>
                             </div>
                          </li>
                          <li>
                             <div class="icon">
                                   <svg preserveAspectRatio="xMidYMid meet" data-bbox="-0.02 0 223.21 224.21" viewBox="-0.02 0 223.21 224.21" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
                                        <g>
                                            <g>
                                                <path d="M110.19 0h4c3.58.37 7.16.72 10.74 1.12 44.63 5.09 82.63 37.7 94.21 81.07 1.74 6.5 2.72 13.2 4.05 19.81v19c-.39 2.25-.82 4.49-1.16 6.74-11.31 74.57-91.66 116.57-159.5 83.49a13.26 13.26 0 0 0-8.35-.91c-15.79 3.89-31.47 8.2-47.2 12.33-2.15.57-4.34 1-7 1.56.36-1.76.5-2.72.76-3.65 4.49-16.5 9.09-33 13.37-49.52a11.37 11.37 0 0 0-.75-7.36A113.58 113.58 0 0 1 .93 103.44C4.33 54.3 40.76 12.57 89.12 2.92 96.06 1.54 103.16 1 110.19 0ZM26.25 198.3c10.78-2.85 20.69-5.4 30.56-8.14a10 10 0 0 1 8.36 1.09c19.25 11.24 40 15.18 62 11.48 52.3-8.81 86.83-59.37 74.83-111.19-8.61-37.4-32.63-61.55-70-70-36.57-8.27-68 3.05-91.91 32-25.65 31-27.89 72.14-7 106.59a9.9 9.9 0 0 1 1.2 8.82c-2.78 9.34-5.18 18.83-8.04 29.35Z"></path>
                                                <path d="M140.68 164.88A91.27 91.27 0 0 1 98 148.13C83.19 137.54 71.44 124 62.1 108.39c-5.33-8.9-8.36-18.43-6-29a30.28 30.28 0 0 1 9.81-16.49 11.93 11.93 0 0 1 19 4.42c2.17 5.22 3.91 10.66 6.56 15.62 2.54 4.78 1.46 8.41-1.58 12.3-7 8.92-6.9 9-.1 18.26a74.9 74.9 0 0 0 32.3 25.11c3.08 1.29 5.36 1 7.42-1.65s4.64-5.28 6.56-8.18c2.33-3.52 4.94-4.48 8.8-2.54 6.68 3.37 13.57 6.34 20.12 9.93a7.37 7.37 0 0 1 3.09 5.37c.31 12.61-10.3 22.38-24.91 23.34-.82.05-1.66 0-2.49 0Z"></path>
                                            </g>
                                        </g>
                                    </svg>
                             </div> 
                             <div class="txt">
                                 <a href="tel:+91 78271 91824" target="_blank">+91 78271 91824</a>
                             </div>
                          </li>
                          <li>
                             <div class="icon">
                                 <svg preserveAspectRatio="xMidYMid meet" data-bbox="53.5 64.6 93.4 62.1" viewBox="53.5 64.6 93.4 62.1" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
                                    <g>
                                        <path d="M56.7 126.7h87c1.8 0 3.2-1.5 3.2-3.2V67.8c0-1.8-1.5-3.2-3.2-3.2h-87c-1.8 0-3.2 1.5-3.2 3.2v55.7c0 1.7 1.4 3.2 3.2 3.2zm3.3-6.5V73.6l38.3 22.9c.5.3 1.1.5 1.7.5s1.2-.2 1.7-.5l38.9-23.3v47H60zM68.3 71h63.1L99.9 89.9 68.3 71z"></path>
                                    </g>
                                 </svg>  
                             </div>
                             <div class="txt">
                                 <a href="mailto:marketing@rachtr.com" target="_blank">marketing@rachtr.com</a>
                             </div>
                          </li>
                       </ul> 
                       <i class="clear"></i>
                    </div>
                  <div class="copyright py-4">
                        <span><a href="{{ asset('pdfFile/ISO_RachTR.pdf')}}" target="_blank">>> ISO 9001:2015</a></span>
                       <p class="py-3">© 2024 RachTR. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-4 ms-0">
                    <div class="form_sec desk py-5">
                        <h3 class="fw-bold py-2">GET IN TOUCH</h3>
                        <form id="connect-form" action="{{ route('connect') }}" method="POST">
                            @csrf
                          <div class="row g-0">  
                              <div class="mb-2 pe-1 col">
                                 <input type="name" class="form-control" id="Name" placeholder="Name" name="Name" required>
                              </div>
                              <div class="mb-2 ps-1 col">
                                <input type="tel" class="form-control" id="Phone" pattern="[6-9]\d{9}" title="Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9" placeholder="Phone" name="Phone" required>
                              </div>
                          </div>
                          <div class="row g-0">  
                              <div class="mb-2 pe-1 col">
                                <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required>
                              </div>
                              <div class="mb-2 ps-1 col">
                                <input type="massage" class="form-control" id="Message" placeholder="Message" name="Message" required>
                              </div>
                          </div>  
                          <input type="hidden" name="recaptcha_token" id="recaptcha_token"> 
                          <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
                        </form>
                    </div>
                    <div class="follow_us pt-5">
                       <div class="social_icon">
                           <p class="mb-2">FOLLOW US</p>
                           <ul>
                               <li><a href="https://www.instagram.com/rachtr_/" target="_blank"><img src=" {{ asset('images/instagram.webp') }} " alt="RachTR Logo"/></a></li>
                               <li><a href="https://www.linkedin.com/company/rachtr/" target="_blank"><img src=" {{ asset('images/linkdin.webp') }} " alt="RachTR Instagram"/></a></li>
                               <li><a href="https://www.facebook.com/rachtr1" target="_blank"><img src=" {{ asset('images/facebook.webp') }} " alt="RachTR Facebook"/></a></li>
                               <li><a href="https://x.com/Rachtr1" target="_blank"><img src=" {{ asset('images/twitter.webp') }} " alt="RachTR Twitter"/></a></li>
                               <li><a href="https://www.youtube.com/channel/UCU5-owLC-ataazxOK0_sb8w" target="_blank"><img src=" {{ asset('images/youtube.webp') }}" alt="RachTR Youtube"/></a></li>
                           </ul>
                       </div>
                       <div class="careers_btn">
                       <a href="{{ url('/careers') }}" target="_blank">Join The RachTRibe</a>
                       </div> 
                       <div class="copyright-bottom pt-2">
                        <span><a href="{{ asset('pdfFile/ISO_RachTR.pdf')}}" target="_blank">>> ISO 9001:2015</a></span>
                        <p class="py-3">© 2024 RachTR. All Rights Reserved.</p>
                       </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>  

<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.key') ?? env('RECAPTCHA_SITE_KEY') }}" async defer></script>
<script async defer>
     window.RECAPTCHA_SITE_KEY = "{{ config('services.recaptcha.key') ?? env('RECAPTCHA_SITE_KEY') }}";
</script>
