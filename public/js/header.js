class HeaderComponent extends HTMLElement{
    constructor(){
        super();
        this.innerHTML=` <header class="header">
        <div class="header_inner">
           <figure class="mobile mobile_nav desktop_hide">
              <img class="lazyload" data-src ="assets/images/mobile_menu.svg" alt="menu"/>
           </figure>
           <figure class="header_brandlogo">
              <a href="/"> <img class="lazyload" data-src ="assets/images/logo.svg" alt="Little Dentist"/></a>
           </figure>
           <a href="#ourClinic" class="find_outline_btn btn_effect desktop_hide">
              <img src="assets/images/search_outline.svg" />
              Find Clinic
           </a>
           <nav>
              <div class="mob_menu_head">
                 <img  data-src ="assets/images/logo.svg" alt="close" class="lazyload mob_logo desktop_hide"/>
                 <img  data-src ="assets/images/close_menu.svg" alt="close" class="lazyload close_menu desktop_hide"/>
              </div>
              <ul>
                 <li><a href="/">Home</a></li>
                 <li><a href="/Services">Services</a></li>
                 <li><a href="/For-Parents">Super Parents</a></li>
                 <li><a href="/blog">Blogs</a></li>
                 <li><a href="/Contact-Us">Contact Us</a></li>
                 <li> <a href="#ourClinic" class="find_outline_btn btn_effect">
                    <img src="assets/images/search_outline.svg" />
                    Find Clinic
                 </a></li>
                 <li><a href="tel:7982902103" class="number_btn btn_effect">
                       <img src="assets/images/call_icon_blue.svg" />
                    +91 7982902103</a></li>
              </ul>

             



              <div class="social_icon nav_icon desktop_hide">
                     <ul>
                          <li> 
                             <a href="https://www.facebook.com/TheLittleDentist.co"> 
                                <img src="assets/images/fb.svg"  alt="Facebook"/>
                             </a>
                          </li>
                          <li> 
                             <a href="https://instagram.com/thelittledentist.co"> 
                                <img src="assets/images/insta.svg"  alt="instagram"/>
                             </a>
                          </li>
                          <li> 
                             <a href="https://api.whatsapp.com/send?phone=917982902103&text=Hi%20we%20need%20help%20regarding%20something"> 
                                <img src="assets/images/whatsapp.svg"  alt="whatsapp"/>
                             </a>
                          </li>
                     </ul>
              </div>
           </nav>
         
        </div>
     </header>`;
    }
}

window.customElements.define('header-component',HeaderComponent);




class FooterComponent extends HTMLElement{
    constructor(){
        super();
        this.innerHTML=`    <section class="our_clinic" id="ourClinic">
        <div class="custom_container">
           <h2 class="new_title">Our Clinic’s</h2>

              <div class="flex_row align_center h_center">
                    <div class="flex_col_sm_6">
                          <div class="clinic_card">
                             <div class="frow">
                                         <p class="location">Delhi - New Friends Colony</p>
                                            <a href="https://goo.gl/maps/w7pEWsMQTqgL3h7m6" target="_blank" class="location_pin">
                                                  <img src="assets/images/location_icon_white.svg" />
                                            </a>
                              </div>      
                                <div class="frow">
                                   <p class="address">B-465 Block B, New Friends Colony, 
                                      Delhi, 110025</p>
                                   </div>
                                <div class="frow">
                                   <button class="outline_btn" data-target="#p_filter_popup" data-toggle="modal">Book Appointment</button>
                                   <span class="city">Delhi</span>
                                </div>
                               
                          </div>
                    </div>

                    <div class="flex_col_sm_6">
                       <div class="clinic_card">
                                <div class="frow">
                                      <p class="location">South Delhi - Safdarjung Enclave</p>
                                      <a href="https://goo.gl/maps/TATuWTUxnTW43mwR8" target="_blank" class="location_pin">
                                         <img src="assets/images/location_icon_white.svg" />
                                      </a>
                                </div>
                             <div class="frow">
                                <p class="address">B4/220 Safdarjung Enclave,
                                    Krishna Nagar, Safdarjung Enclave, New Delhi, Delhi 110029</p>
                             </div>
                             <div class="frow">
                                <button class="outline_btn" data-target="#p_filter_popup" data-toggle="modal">Book Appointment</button>
                                <span class="city">Delhi</span>
                             </div>
                       </div>
                 </div>


                 <div class="flex_col_sm_6">
                    <div class="clinic_card">
                       <div class="frow"> 
                         <p class="location">Gurgaon - Sushant Lok 1</p>
                         <a href="https://goo.gl/maps/xYhumSkZmJVSwhbu6" target="_blank" class="location_pin">
                             <img src="assets/images/location_icon_white.svg" />
                         </a>
                       </div>
                       <div class="frow">
                          <p class="address">House number 1050, opposite vyapar kendar, 
                             Block C, Sushant Lok Phase I, Gurugram</p>
                       </div>
                       <div class="frow">
                          <button class="outline_btn" data-target="#p_filter_popup" data-toggle="modal">Book Appointment</button>
                          <span class="city">Gurgaon</span>
                       </div>
                        
                    </div>
                 </div>

                 <div class="flex_col_sm_6">
                    <div class="clinic_card">
                       <div class="frow"> 
                           <p class="location">Gurgaon - Sector 9</p>
                           <a href="https://goo.gl/maps/HqKDyydaDuSyDAPV6" target="_blank" class="location_pin">
                             <img src="assets/images/location_icon_white.svg" />
                           </a>
                       </div>
                       <div class="frow">  <p class="address">799, opposite ESI hospital, 
                          Sector 9A, Sector 9, Gurugram, 
                          Haryana</p></div>
                       <div class="frow"> 
                          <button class="outline_btn" data-target="#p_filter_popup" data-toggle="modal">Book Appointment</button>
                          <span class="city">Gurgaon</span>
                       </div>
                    </div>
                 </div>

                 <div class="flex_col_sm_6">
                    <div class="clinic_card">
                       <div class="frow">  
                           <p class="location">Gurgaon - DLF Phase 3, Sector 24</p> 
                       
                           <a href=" https://goo.gl/maps/1wnC7RMF2afXMvmL7" target="_blank" class="location_pin">
                             <img src="assets/images/location_icon_white.svg" />
                           </a>
                       </div>
                       <div class="frow">    <p class="address">U 1/5, U Block, DLF Phase 3, Sector 24, 
                          Gurugram, Haryana</p> </div>
                       <div class="frow">
                          <button class="outline_btn" data-target="#p_filter_popup" data-toggle="modal">Book Appointment</button>
                          <span class="city">Gurgaon</span>
                       </div>
                          
                          
                    </div>
                 </div>


              </div>

        </div>
      </section> 
      <section class="getin_touch">
            <div class="custom_container">
               <h2 class="new_title">Contact us</h2>
             
               <div class="contact_card">
                  <div class="flex_row">
                     <div class="flex_col_sm_6">
                        <div class="card">
                           <figure class="card_icon">
                              <img class="lazyload" data-src ="assets/images/call-card.svg" alt="Call" />
                           </figure>
                           <span class="card_title">Book an Appointment</span>
                           <p class="card_para">
                              Interested in booking an appointment for your child. Connect with us anytime.
                           </p>
                           <a href="tel:7982902103" class="card_link">7982902103</a>
                        </div>
                     </div>
                     <div class="flex_col_sm_6">
                        <div class="card" >
                           <figure class="card_icon">
                              <img class="lazyload" data-src ="assets/images/whats-app.png" alt="whats-app" />
                           </figure>
                           <span class="card_title">Connect On Chat</span>
                           <p class="card_para">
                              Have an appointment or consultation- related query? Press to chat.
                           </p>
                        
                           <a href="https://api.whatsapp.com/send?phone=917982902103&text=Hi%20we%20need%20help%20regarding%20something" class="card_link">Click Here </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <footer class="footer">
         <div class="custom_container text-center">
            <div class="footer_wrap">
               <figure class="footer_wrap_logo">
                  <img class="lazyload" data-src ="assets/images/logo.svg" alt="little dentist"/>
               </figure>
               <div class="footer_wrap_nav">
                  <ul>
                     <li><a href="/">Home</a></li>
                     <li><a href="/Services">Services</a></li>
                     <li><a href="/For-Parents">Super Parents</a></li>
                     <li><a href="/blog">Blogs</a></li>
                     <li><a href="/Contact-Us">Contact Us</a></li>
                  </ul>
               </div>
               <div class="flex_row">
                  <div class="flex_col_sm_6 centers_location">
                     <span class="f_location"><img src="assets/images/centers_pin.svg" alt=""> Gurgaon</span>
                        <ul>
                           <li><a href="https://thelittledentist.co/best-pediatric-dentist-in-gurgaon">Pediatric Dentist In Gurgaon</a></li>

                     </ul></div> 
                  <div class="flex_col_sm_6 centers_location">
                     <span class="f_location"><img src="assets/images/centers_pin.svg" alt=""> Delhi</span>
                     <ul> 
                        <li><a href="https://thelittledentist.co/best-pediatric-dentist-in-new-friends-colony">Pediatric Dentist In New Friends Colony</a></li>
                        <li><a href="https://thelittledentist.co/best-pediatric-dentist-in-safdarjung-enclave">Pediatric Dentist In Safdarjung Enclave</a></li>
                 </ul></div>        
                     
            </div>

               <p class="footer_wrap_copyright">
                  Copyright © 2021, TheLittleDentist. All rights reserved
               </p>
                          
               <div class="social_icon">
                      <ul>
                           <li> 
                              <a href="https://www.facebook.com/TheLittleDentist.co"> 
                                 <img src="assets/images/fb.svg"  alt="Facebook"/>
                              </a>
                           </li>
                           <li> 
                              <a href="https://instagram.com/thelittledentist.co"> 
                                 <img src="assets/images/insta.svg"  alt="instagram"/>
                              </a>
                           </li>
                           <li> 
                              <a href="https://api.whatsapp.com/send?phone=917982902103&text=Hi%20we%20need%20help%20regarding%20something"> 
                                 <img src="assets/images/whatsapp.svg"  alt="whatsapp"/>
                              </a>
                           </li>
                      </ul>
               </div>

            </div>
         </div>
      </footer>
      `;
    }
}

window.customElements.define('footer-component',FooterComponent);