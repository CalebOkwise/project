<?php
    
    if (isset($_POST['gastroentorlogy'])){
        $gastroentrology = $_POST['gastroentrology'];
    } else {
        $gastroentrology = "";
    }

    if (ISSET($_POST['dermatology'])){
        $dermatology = $_POST['dermatology'];
    } else {
        $dermatology = "";
    }

    if(isset($_POST['spam'])){
        $to = "gmail@gmail.com";
    }else{
        $to = "thegastrodermclinic@yahoo.com";
    }

    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phonenumber']) && isset($_POST['reasonforappointment'])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phn_number = $_POST['phonenumber'];
    $reasonforappointment = $_POST['reasonforappointment'];

    

    $body = "";
    $body .= "From: ". $firstname . " " . $lastname . "\r\n";
    $body .= "Phone Number: ". $phn_number . "\r\n";
    $body .= "Service Package: " . $gastroentrology . ", " . $dermatology . "\r\n";
    $body .= "Reason for appointment: ". $reasonforappointment . "\r\n";

    $subject = "NEW APPOINTMENT LEAD";
    
    mail($to, $subject, $body);

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--JQUERY CLASS-->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
       <!--FONT AWESOME CSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="css/style.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <!--INTERNATIONAL NUMBERS DROP DOWN
        <link rel="stylesheet" href="css/intlTelInput.css">
        <script src="./scripts/intlTelInput.min.js"></script>
        <script src="./scripts/intlTelInput-jquery.min.js"></script>
        ENDS HERE-->
        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="css/pidie-0.0.8.css">
        <link href="css/others.css" rel="stylesheet">
        <link rel="stylesheet" href="css/glide.core.min.css">
        <title>Gastroderm Clinic</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon1.svg">
    </head>
    <body id="body" class="body">

        <main>
            
            <div class="overlay off">
                <img src="images/overlaystroke.svg" alt="">
            </div>

            <div class="overlay2 off">
                <img src="images/phonecancel.svg" class="phoneclose" alt="">
                <ul class="mobilenav">
                    <li class="bknappointment">
                        Book an appointment
                    </li>
                    <li>
                        <a href="#our-medical-services" class="mobilenavlink">Medical Services</a>
                    </li>
                    <li>
                        <a href="#Meet-our-Doctors" class="mobilenavlink">Our Doctors</a>
                    </li>
                    <li>
                        <a href="#doctors-journal" class="mobilenavlink">Doctors Journal</a>
                    </li>
                </ul>
                  </div>
            <div class="overlay3 off">
                <div class="mobileform">
                    <img src="images/phonecancel.svg" class="closerbtn" alt="">
                <p class="overlay3header">Book an appointment</p>
                <form action="index.php" method="post" name="" class="mblform">
                    <input type="text" placeholder="First Name" name="firstname" class="mobileforminput">
                    <input type="text"  placeholder="Last Name" name="lastname" class="mobileforminput">
                    <input type="text" name="spam" class="off">
                    <div class="container mt-4">
                    <div class="pd-telephone-input">
                    <input type="tel"  placeholder="Phone number" name="phonenumber" class="mobileforminput form-control" id="telephone">
                </div>
            </div>
                    <p> Choose your service package</p>
                    
                    <div class="checkboxcon">

                        <label class="checks"> <p>Gastroentrology</p>
                            <input type="checkbox" checked="checked" name="gastroentrology" value="gastroentrology">
                            <span class="checkmark"></span>
                          </label>

                          <label class="checks"> <p> Dermatology </p>
                            <input type="checkbox" name="dermatology" value="dermatology">
                            <span class="checkmark"></span>
                          </label>
                    
                        <!-- <div class="checks">
                    <input type="checkbox" id="servicepackage1" name="gastroentrology" value="gastroentrology" class="labelcheck">
                    <span class="checkmark"></span>
                    <label for="servicepackage1" class="checkslabel">Gastroentrology</label><br>
                        </div>

                    <div class="checks">
                    <input type="checkbox" id="servicepackage2" name="dermatology" value="dermatology" class="labelcheck">
                    <span class="checkmark"></span>
                    <label for="dermatology" class="checkslabel">Dermatology</label><br>
                </div>
            -->

                    </div>
                    <input type="textarea" placeholder="Enter reason for appointment" name="reasonforappointment" class="mobileforminput textareainput">
                    <input type="submit" class="submitter" value="">
                    </form>
            </div>
        </div>
            
            <nav class="nav">
                <div class="navcontainer">
               <a href="#hero"><img src="images/navlogo.svg"></a>
                    <div class="navlist">
                    <ul class="navlistul">
                        <li>
                            <a class="l1" href="#our-medical-services">Medical Services</a>
                        </li>
                        <li>
                            <a class="l2" href="#Meet-our-Doctors">Our Doctors</a>
                        </li>
                        <li>
                            <a class="l3" href="#doctors-journal">Doctor's Journal</a>
                        </li>
                       </ul>
                    <a><div class="navbtn trigger">Book appointment <img src="images/favicon.png"></div></a>
                </div>
            <button class="hamburger mobiletxt"><img src="images/hamburger.svg"></button>
            </div>
            </nav>
            
            <section id="hero">
                
                <div class="herofirstrow">
                <div class="herocolumn1">
                    <p class="herotextfirst"> We care</p>
                    <p class="herotextsecond"> about your health</p>
                    <p class="hero-body">Good health is the state of mental, physical and social well
being and it does not just mean absence of diseases.</p>
<div id="herobtn1" class="herobtn1 trigger">Want to meet a doctor? <img src="images/favicon.png"></div>
<div id="herobtn2" class="herobtn4 mobileformpopup">Book an appointment? <img src="images/favicon.png"></div>

              </div>

              <div class="herocolumn2" style="cursor: default;">
                <img class="heroimg" src="images/herosectionimg.svg">
              </div>
            </div>
            <div id="animate" class="herorow2">
                <div class="popupheader">
                <p class="herorow2text">Book an appointment</p>
                <button class="cancelbtn off">
                    <img src="images/close.svg" alt="click to close">
                </button>
            </div>
            <form action="index.php" method="post" id="theForm">
                <div class="row2form">
                    <div class="firstline">
                <input type="text" placeholder="First name" name="firstname" class="row2input">
                <input type="text" placeholder="Last name" name="lastname" class="row2input">
                <input type="text" name="spam" class="off">
                <div class="containerp mt-4">
                    <div class="pd-telephone-input">
                <input type="tel" placeholder="Phone number" name="phonenumber" class="row2input form-control" id="telephone">
                </div>
                </div>
                <div class="row2trigger trigger">
                    NEXT <img src="images/ddarrows.png" class="trgimg">
                </div>
            </div>
            <div class="row2form2 off">
                <div class="toggleswitch">
                <div class="check1">
                    Gastroentrology
                <label class="switch">
                    <input type="checkbox" checked value="gastroentrology" name="gastroentrology">
                    <span class="slider round"></span>
                  </label>
                  </div>
                  <div class="check2">
                  Dermatology
                <label class="switch">
                    <input type="checkbox" name="dermatology" value="dermatology">
                    <span class="slider round"></span>
                  </label>
                </div>
                </div>
                <input type="textarea" name="reasonforappointment" placeholder="Reason for appointment" class="reasonforappointment">
                </div>
                </div>
                <div>
                <button class="herobtn off">
                    Book appointment <img src="images/favicon.png">   
                    </button>
                </div>
                </form>
                
                

                
                
                </div>
                <div class="down-arrow">
                    <img src="images/union-1.svg">
                </div>
                <a href="https://wa.link/yh2wft"><img src="images/watermark.svg" class="herowatermark pctxt"></a>
                <!--<img src="images/watermark.svg" class="herowatermark mobileformpopup mobiletxt">-->
            </section>
            
            <section id="our-medical-services">
            <p class="section-head"> Our Medical Services </p>
            <p class="section-sub-head pctxt">
                Modern clinical facility using state of the art medical technology for the best
                <br/>medical services
            </p>
            <p class="section-sub-head mobiletxt">
                Modern clinical facility using state of the art medical technology for the best medical services
            </p>
            <div class="medical-services">
                <div class="container">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                    <div class="med-service">
                    <p class="medservice-title">GASTROENTEROLOGY</p>
                    <p class="medservice-body"> Hepatitis, Peptic ulcer, diarrhoea, abdominal pain, 
                        irritable bowel diseases, food intolerance, 
                        inflammatory bowel disease, Gall bladder, alcoholic liver, 
                        fatty liver and other liver diseases </p>
                </div>
            </li>
                <li class="glide__slide">
                <div class="med-service swiper-slide">
                    <p class="medservice-title">DERMATOLOGY</p>
                    <p class="medservice-body"> Surgery, Medical dermatology, Aesthetic 
                         dermatology, Acne,  Keloids, Psoriasis, Warts, 
                        Atopic dermatitis and other skin diseases, 
                        Bags under the eyes and dark patches around the eyes

                    </p>
                </div>
            </li>
                

                <li class="glide__slide">
                <div class="med-service swiper-slide">
                    <p class="medservice-title">LASER TREATMENT</p>
                    <p class="medservice-body"> Tattoo removal, hair removal, 
                        permanent hair reduction, 
                        facial rejuvenation, treatment of dilated veins and arteries, 
                        acne, warts, bumps on the face, nail infections, 
                        benign superficial lesions, vascular disorders, skin tightening etc.
                    </p>
                </div>
            </li>
                <li class="glide__slide">
                <div class="med-service swiper-slide">
                    <p class="medservice-title">FIBROSCAN</p>
                    <p class="medservice-body"> An innovative 
                        non-invasive diagnostic tool for liver diseases. Liver scan and examiniation.
                    </p>
                    <br/>
                    <br/>
                </div>
            </li>
                <li class="glide__slide">
                <div class="med-service swiper-slide">
                    <p class="medservice-title">AESTHETIC DERMATOLOGY</p>
                    <p class="medservice-body"> Cosmelan treatment, Chemical  peels, Botox injections, fillers, 
                        Anti-aging treatments. Treatments for post acne hyperpigmentation and melasma
                    </p>
                </div>
            </li>
        </ul>    
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
            <button class="glide__bullet" data-glide-dir="=3"></button>
            <button class="glide__bullet" data-glide-dir="=4"></button>
            </div>
            </div>
        </div>
            <button href="" class="medservice-bottom pctxt trigger" id="medservicebtn"> Want some medical advise? </button>
            <button href="" class="medservice-bottom mobiletxt mobileformpopup" id="medservicebtn"> Want some medical advise? </button>
            </section>

        <section id="Meet-our-Doctors">
            <p class="section-head"> Meet our Doctors </p>
            <p class="section-sub-head pctxt">
                
               <span style="color:#231f20;"> Gastroderm clinic </span> is a team of qualified, certified and <span style="color:#231f20;">experienced </span> 
                <br /> medical professionals in an <span style="color:#231f20;"> ultramodern clinical facility</span>
                delivering the best medical<br /> service in our specialty. 

            </p>

            <p class="section-sub-head mobiletxt">
                <span style="display: block;">
                <span style="color:#231f20;"> Gastroderm clinic </span> is a team of qualified, certified and <span style="color:#231f20;">experienced </span> 
                  medical professionals in an <span style="color:#231f20;"> ultramodern clinical facility</span>
                 delivering the best medical service in our specialty. 
                </span>
             </p>
            <div class="our-doctors">
                <div class="doctor-box">
                    <img src="images/dr1.svg" class="doc-image">
                    <p class="doctors-name">Dr. E L Anaba</p>
                    <p class="doctors-speciality">Dermatologist, Skin care specialist</p>

                    <div>
                        <p class="doctor-box-about">About</p>
                        <p class="doctor-box-about-text">A trained dermatologist with several years of practice in
                            internal medicine, dermatology (aesthetic and medical), and diagnostic dermatopathology.</p>
                    </div>

                    <a href="https://www.linkedin.com/in/ehiaghe-anaba-a97ba652" class="doctor-box-see-more">See more</a>
                </div>

                <div class="doctor-box">
                    <img src="images/dr2.svg" class="doc-image">
                    <p class="doctors-name">Dr. G L Oyeleke</p>
                    <p class="doctors-speciality">Gastroenterologist, Internal medicine</p>

                    <div>
                        <p class="doctor-box-about">About</p>
                        <p class="doctor-box-about-text">A trained Gastroenterologist and Hepatologist with several years of experience in internal medicine, 
                            hepatology (with keen interest in the treatment of hepatitis B and C Viral diseases), gastroenterology and nutrition.</p>
                    </div>

                    <a href="#" class="doctor-box-see-more">See more</a>
                </div>
            </div>
        </section>

        <section id="homepage-image">
            <iframe src="https://www.youtube.com/embed/Yg-gXN2SQaE?&mute=1" class="section-image">
            </iframe>
    </section>

    <section id="doctors-journal">
        <p class="section-head">Doctors Journal</p>
        <div class="journal-con pctxt">
            <div class="journal-box">
                <img src="images/dj1.svg" class="djimages">
                <p class="djimagecaption">Premium Skin Care
                    </p>
                <p class="dj-p">Premium skin care is about maintaining a
                    healthy and glowing skin all through your
                    life. As you grow older, your body’s natural
                    skin care mechanisms become weaker. </p>
                    
                    
                    <div class="db-bottom">
                    <span class="bottom-icon"><i class="fa-regular fa-clock"></i></span> 1st July, 2020
                        </div>
                
            </div>

            <div class="journal-box">
                
                <img src="images/dj2.svg" class="djimages">
                <div class="djimagecaption">Hydrafacial, Cosmean peels & Fillers</div>
            
    
                <p class="dj-p">The Hydrafacial MD exfoliates infuses
                    moisture into the skin infuses vitamins
                    into the skin removes excess oil from
                    the skin microdermabrasion. </p>
                    
                    <div class="db-bottom">
                        <span class="bottom-icon"><i class="fa-regular fa-clock"></i></span>
                     2nd December, 2020 
                </div>
            </div>
            
            <div class="journal-box">
                <img src="images/dj3.png" class="djimages">
                <div class="djimagecaption"><span class="twotopmargin"> Liver Fibroscan</span>
                                        
                    </div>
                <p class="dj-p">A Liver fibroscan is an innovative diagnostic tool for the assessment of liver fibrosis.
                    It is a non-invasive, quick, painless and reliable alternative liver biopsy/examination. </p>
                    
                    <div class="db-bottom">
                        <span class="bottom-icon"><i class="fa-regular fa-clock"></i></span>
                    4th July, 2021 
                </div>
            </div>

        </div>
        <div class="container">
        <div class="journalcon mobiletxt">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
            <div class="journal-box">
                <img src="images/dj1.svg" class="djimages">
                <p class="djimagecaption">Premium Skin Care
                    <span class="journalspace">.</span>
                </p>
                <p class="dj-p">Premium skin care is about maintaining a
                    healthy and glowing skin all through your
                    life. As you grow older, your body’s natural
                    skin care mechanisms become weaker. </p>
                    
                    
                    <div class="db-bottom">
                    <span class="bottom-icon"><i class="fa-regular fa-clock"></i></span> 1st July, 2020
                        </div>
                
            </div>
        </li>
            <li class="glide__slide">
            <div class="journal-box">
                
                <img src="images/dj2.svg" class="djimages">
                <div class="djimagecaption">Hydrafacial, Cosmean peels & Fillers</div>
                
                <p class="dj-p">The Hydrafacial MD exfoliates infuses
                    moisture into the skin infuses vitamins
                    into the skin removes excess oil from
                    the skin microdermabrasion. </p>
                    
                    <div class="db-bottom">
                        <span class="bottom-icon"><i class="fa-regular fa-clock"></i></span>
                     2nd December, 2020 
                </div>
            </div>
        </li>
            <li class="glide__slide">
            <div class="journal-box">
                <img src="images/dj3.png" class="djimages">
                <div class="djimagecaption"><span class="twotopmargin"> Liver Fibroscan</span>
                    <br/>
                    <span class="journalspace">.</span>
                    </div>
                <p class="dj-p">A Liver fibroscan is an innovative diagnostic tool for the assessment of liver fibrosis.
                    It is a non-invasive, quick, painless and reliable alternative liver biopsy/examination. </p>
                    
                    <div class="db-bottom">
                        <span class="bottom-icon"><i class="fa-regular fa-clock"></i></span>
                    4th July, 2021 
                </div>
            </div>
            </li>
            </ul>
            </div>

            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
                </div>

        </div>
    </div>
    </section>

    <section id="homepagelast">
        
        <p class="lastsection-subhead">Do you want an efficient skin care?</p>
        <p class="section-head pctxt" style="color:#ffffff;">Use our Medical Services</p>
        <p class="section-head mobiletxt adjsize" style="color:#ffffff;">Use our Medical Services</p>
        <button class="hmepagecloserbutton trigger pctxt">Book an appointment <img src="images/Group 77.png"></button>
        <button class="hmepagecloserbutton mobileformpopup mobiletxt">Book an appointment <img src="images/Group 77.png"></button>
        <img src="images/watermark.svg" alt="" class="watermark trigger pctxt">
        <img src="images/watermark.svg" alt="" class="watermark mobileformpopup mobiletxt">
    </section>
</main>
<footer>
    <div class="footerrow1 pctxt pctxt2">
        <div class="r1c1">
            <img src="images/logo.png">
        </div>
        
        <div class="r1c2">
            <img src="images/msgicon.svg" alt="">
            <div class="icon-texts">
                <p class="ftwhitetext">
                    Call us
                </p>
                <p class="ftemphasis">
                    (+234) 8184478211 <br/>
012904415
                </p>
            </div>
        </div>

        <div class="r1c2">
            <img src="images/callicon.svg" alt="">
            <div class="icon-texts">
                <p class="ftwhitetext">
                    Email us
                </p>
                <p class="ftemphasis">
                    thegastrodermclinic@yahoo.com
                </p>
            </div>
        </div>

        <div class="r1c4">
            <img src="images/instagram.svg" alt="">
            <img src="images/facebook.svg" alt="">
            <img src="images/twitter.svg" alt="">
        </div>

    </div>

    <div class="footerrow1 mobiletxt mobiletxt2">
        <div class="r1">
        <div class="r1c1">
            <img src="images/logo.png">
        </div>

        <div class="r1c4">
            <img src="images/instagram.svg" alt="">
            <img src="images/facebook.svg" alt="">
            <img src="images/twitter.svg" alt="">
        </div>
    </div>
        
    <div class="ftrow2">
        <div class="r1c2">
            <img src="images/msgicon.svg" alt="">
            <div class="icon-texts">
                <p class="ftwhitetext">
                    Call us
                </p>
                <p class="ftemphasis">
                    (+234)08184478211  &nbsp; 012904415
                </p>
            </div>
        </div>

        <div class="r1c2">
            <img src="images/callicon.svg" alt="">
            <div class="icon-texts">
                <p class="ftwhitetext">
                    Email us
                </p>
                <p class="ftemphasis">
                    thegastrodermclinic@yahoo.com
                </p>
            </div>
        </div>

        </div>

        

    </div>

    <img src="images/borderbottom.svg" alt="" class="footerdivider">
    <div class="footerrow2 pctxt">
        <div class="r2c1">
            <p>©Copyright The Gastroderm Clinic. All rights reserved.
                Website by Da Vinci D’ designer.</p>
        </div>
        <div class="r2c2">
            <p>Book Appointment</p>
            <p>Terms and Conditions</p>
            <p>Privacy Policy</p>
        </div>
    </div>

    <div class="footerrow2 mobiletxt">
        <div class="r2c1">
            <p>©Copyright The Gastroderm Clinic. All rights reserved.
                Website by Da Vinci D’ designer.</p>
        </div>
        <div class="r2c2">
            <p>Book Appointment</p>
            <p>Terms and Conditions</p>
            <p>Privacy Policy</p>
        </div>
    </div>
</footer>
<script src="./scripts/homepagescript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
        const config2 = {
            type: 'carousel',
            perView: 1,
            autoplay: 10000
        };
        const config = {
            type: 'carousel',
            perView: 3,
            gap: 45,
            focusAt: 1,
            autoplay: 10000,
            breakpoints: {
                1440: {
                    perView: 3
                },
                
                1024: {
                    perView: 2
                },

                768: {
                    perView: 1
                }
            }
        };
        new Glide('.glide', config).mount();
        new Glide('.journalcon', config2).mount();
      </script>
      <script src="./scripts/pidie-0.0.8.js"></script>
      <script>
        new Pidie();
      </script>
      <!--<script>
        $("#telephone").intlTelInput({
            utilsScript: "scripts/utils.js"
        });
  </script> -->
    </body>
    </html>