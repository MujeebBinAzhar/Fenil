 <!-- php include syntax1 -->


 <?php
 include('header.php')
 ?>


 <style>
.auto-slider-section {
    width: 100%;
    overflow: hidden;
}

article {
    display: flex;
    width: 600%;
    animation: bannermove 60s linear infinite;
}

@keyframes bannermove {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-50%);
    }
}

.slick-prev,
.slick-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 30px;
    z-index: 1;
    cursor: pointer;
}

.slick-prev {
    left: -50px;
    /* Adjust the position as needed */
}

.slick-next {
    right: -25px;
    /* Adjust the position as needed */
}

.slick-prev:before,
.slick-next:before {
    color: #6108b2;
    font-size: 30px;
}

.slick-dots li button:before {
    opacity: 0.7 !important;
    color: rgb(175 175 175) !important;
    font-size: 15px !important;
}

.slick-dots li.slick-active button:before {
    color: white !important;
}

.artical {
    margin-bottom: 80px;
}

.artical .underlined-heading {
    margin-bottom: 60px;
}

.alm-promise {
    margin: 66px 0px 100px 0px;
}

.top-award {
    margin: 88px 0px 97px 0px;
}

@media only screen and (min-width: 1399px) {
    .award-card-gallery {
        margin-top: -480px;
        z-index: -1;
        position: relative;
    }
}

@media only screen and (max-width: 768px) {
    .home-hero {
        padding-top: 100px;
    }

    .hero-para {
        width: 100%;
    }

    .hero-heading h1:nth-child(1) {
        font-size: 60px;
    }

    .hero-heading h1:nth-child(2) {
        font-size: 47px;
    }

    .hero-heading h1:nth-child(3) {
        font-size: 68px;
    }

    .story-heading h2 {
        font-size: 50px;
    }

    .slick-prev {
        left: -14px;
        /* Adjust the position as needed */
    }

    .slick-next {
        right: 20px;
        /* Adjust the position as needed */
    }

    .sub-logo {
        width: 40%;
    }

    .we-do-main {
        padding: 40px 25px;
    }

    .image-inner {
        margin-bottom: 30px;
    }

    .counting-main {
        flex-direction: column;
    }

    .testimonials {
        height: auto;
    }

    .testimonials .col-lg-4 {
        margin-bottom: 50px;
    }

    .dots {
        display: none;
    }

    .top-award {
        padding: 0px 25px;
    }

    .underlined-heading h2 {
        font-size: 33px;
    }

    .our-blog .col-lg-4 {
        margin-bottom: 80px;
    }
}

@media only screen and (max-width: 320px) {
    .hero-heading h1:nth-child(2) {
        font-size: 40px;
    }

    .underlined-heading h2::before {
        width: 380px;
    }

    .iner-link {
        width: 250px;
    }

    .blog-link {
        bottom: -115px;
    }

    .our-blog .col-lg-4 {
        margin-bottom: 100px;
    }
}
 </style>


 <section class="home-hero">
     <div class="container">
         <div class="hero-heading">
             <h1>MEET <small>THE</small> BEST</h1>
             <h1>MATCHMAKER</h1>
             <h1>PRIYA SHAH</h1>
         </div>
         <div class="hero-para">
             <p>
                 Priya Shah is a renowned matchmaker with over 30 years of
                 experience, connecting individuals and families globally. With a
                 deep passion for creating meaningful and lasting relationships, she
                 has earned numerous accolades for her exceptional matchmaking
                 services.
             </p>
         </div>
         <div class="hero-btn">
             <a href="./professional-life.php">
                 <button>Learn More</button>
             </a>
         </div>
     </div>
 </section>
 <section class="our-story">
     <div class="container">
         <div class="story-heading pb-40 text-center">
             <span class="sub"> KNOW <mark>WHAT IS </mark> </span>
             <h2>MY STORY</h2>
         </div>
         <div class="story-para pb-40">
             <p>
                 I was always determined to change the arranged marriages happened. I
                 believed that both people involved must have their say in their
                 marriage, which was contrary to the popular beliefs of those times.
             </p>
             <p>
                 Back then, people did not have the luxury of options to choose their
                 life-partners. I am lucky to have a successful married life, though.
                 I wanted people & their relationships to stay happy, so I chose this
                 role of being a Matchmaker.
             </p>
             <p>
                 What started as a free social service, gained word-of-mouth
                 publicity & eventually, I matched thousands of couples who are
                 committed to a lifetime of togetherness.
             </p>
         </div>
         <div class="hero-btn">
             <a href="./personal-life.php">
                 <button class="mx-auto">READ MORE</button>
             </a>
         </div>
     </div>
 </section>

 <section class="feature over-flow-hidden">
     <div class="container">
         <div class="underlined-heading">
             <h2>AS FEATURED IN</h2>
         </div>

         <section class="auto-slider-section">
             <article>
                 <div>
                     <div class="logo-gallery">
                         <ul class="main-ul">
                             <li class="sub-logo">
                                 <img src="./assets/images/The Times Of India Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/The Indian Express - Logo.jpg" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/FEMINA Logo.jpg" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Mid-day Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Forbes India Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Hindustan Times Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Medium Logo.png" class="img-fluid" alt="" />
                             </li>
                             <li class="sub-logo">
                                 <img src="./assets/images/The Times Of India Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/The Indian Express - Logo.jpg" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images//FEMINA Logo.jpg" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Mid-day Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Forbes India Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Hindustan Times Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Medium Logo.png" class="img-fluid" alt="" />
                             </li>
                             <li class="sub-logo">
                                 <img src="./assets/images/The Times Of India Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/The Indian Express - Logo.jpg" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images//FEMINA Logo.jpg" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Mid-day Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Forbes India Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Hindustan Times Logo.png" class="img-fluid" alt="" />
                             </li>

                             <li class="sub-logo">
                                 <img src="./assets/images/Medium Logo.png" class="img-fluid" alt="" />
                             </li>
                         </ul>
                     </div>
                 </div>
             </article>
         </section>
     </div>
 </section>

 <section class="what-we-do">
     <div class="container">
         <div class="underlined-heading">
             <h2>WHAT WE DO</h2>
         </div>
     </div>
     <div class="we-do-main">
         <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <a href="./services-1-matchmaking.php">
                     <div class="image-inner">
                         <img src="./assets/images/match-making.png" width="100%" alt="" />
                         <h2>Matchmaking</h2>
                     </div>
                 </a>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <a href="./services-2-marriage-consulting.php">
                     <div class="image-inner">
                         <img src="./assets/images/consulting.png" width="100%" alt="" />
                         <h2>Marriage Consulting</h2>
                     </div>
                 </a>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <a href="./services-3-matchmaking-for-nris.php">
                     <div class="image-inner">
                         <img src="./assets/images/nri.png" width="100%" alt="" />
                         <h2>NRI Services</h2>
                     </div>
                 </a>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <a href="./Services-4-one-to-one-sessions.php">
                     <div class="image-inner">
                         <img src="./assets/images/meeting.png" width="100%" alt="" />
                         <h2>One to One Meeting</h2>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </section>

 <section class="achivment mt-5">
     <div class="conatiner">
         <div class="container">
             <div class="underlined-heading">
                 <h2>OUR achievements</h2>
             </div>
             <div class="d-flex counting-main justify-content-around">
                 <div class="counting text-center">
                     <h2 class="counter-number">33</h2>
                     <img src="./assets/images/flower.png" alt="" class="flower" />
                     <p class="counterdetails">Years in Matchmaking</p>
                 </div>
                 <div class="counting text-center">
                     <h2 class="counter-number">2K+</h2>
                     <img src="./assets/images/flower-2.png" alt="" class="flower" />
                     <p class="counterdetails">Divorces Saved</p>
                 </div>
                 <div class="counting text-center">
                     <h2 class="counter-number">9000</h2>
                     <img src="./assets/images/flower.png" alt="" class="flower" />
                     <p class="counterdetails">Successful Marriages</p>
                 </div>
                 <div class="counting text-center">
                     <h2 class="counter-number">20+</h2>
                     <img src="./assets/images/flower-2.png" alt="" class="flower" />
                     <p class="counterdetails">Notable Awards Received</p>
                 </div>
                 <div class="counting text-center">
                     <h2 class="counter-number">100+</h2>
                     <img src="./assets/images/flower.png" alt="" class="flower" />
                     <p class="counterdetails">Media Recognitions</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="awards position-relative">
     <img src="./assets/images/doctor-img.png" width="100%" alt="" />
 </section>

 <div class="award-card-gallery">
     <div class="w-100">
         <div class="container">
             <div class="underlined-heading">
                 <h2>Awards Received</h2>
             </div>
         </div>
         <div class="we-do-main w-100">
             <div class="row">
                 <div class="col-lg-3 col-md-6 col-sm-12">
                     <div class="award-card">
                         <a target="_blank" href="#">
                             <div class="image-inner-1">
                                 <img src="./assets/images/amitab.png" width="100%" alt="" />
                                 <h2 class="px-lg-5">
                                     Priya Shah felicitating Shri Amitabh Bachchan
                                 </h2>
                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12">
                     <div class="award-card">
                         <a target="_blank" href="#">
                             <div class="image-inner-1">
                                 <img src="./assets/images/magzine.png" width="100%" alt="" />
                                 <h2 class="px-lg-4">
                                     Hema Malini launches Priya Shah’s wedding magazine
                                 </h2>
                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12">
                     <div class="award-card">
                         <a target="_blank" href="#">
                             <div class="image-inner-1">
                                 <img src="./assets/images/awrds.png" width="100%" alt="" />
                                 <h2>
                                     Awarded Most Powerful Top 20 Women in India, by Union
                                     Minister Smriti Irani
                                 </h2>
                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12">
                     <div class="award-card">
                         <a target="_blank" href="#">
                             <div class="image-inner-1">
                                 <img src="./assets/images/pareineti.png" width="100%" alt="" />
                                 <h2>
                                     Parineeti Chopra presents Golden Glory Awards, 2023 ‘Most
                                     Popular Matchmaker of the Year 2023’
                                 </h2>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <section class="alm-promise">
     <div class="container position-relative">
         <div class="text-center alm-heading">
             <h2>OUR PROMISE</h2>
         </div>
         <!-- New slider wrapper -->
         <div class="promise-slider row justify-content-center">
             <div class="col-lg-3">
                 <a class="text-black" href="./alm-promise.php">
                     <div class="alm-inner">
                         <div class="vector center">
                             <img src="./assets/images/vector-1.png" alt="" />
                         </div>
                         <div class="dtail">
                             <h3>Face-to-Face Meeting</h3>
                             <p>Personal interactions to ensure genuine connections.</p>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-lg-3">
                 <a class="text-black" href="./alm-promise.php">
                     <div class="alm-inner">
                         <div class="vector center">
                             <img src="./assets/images/vector-2.png" alt="" />
                         </div>
                         <div class="dtail">
                             <h3>Personalized Service</h3>
                             <p>
                                 Tailored matchmaking services to suit your unique needs.
                             </p>
                         </div>
                     </div>
                 </a>
             </div>

             <div class="col-lg-3">
                 <a class="text-black" href="./alm-promise.php">
                     <div class="alm-inner">
                         <div class="vector center">
                             <img src="./assets/images/vector-3.png" alt="" />
                         </div>
                         <div class="dtail">
                             <h3>Expected Life Partner</h3>
                             <p>
                                 Meeting your expectations in finding the ideal life partner.
                             </p>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-lg-3">
                 <a class="text-black" href="./alm-promise.php">
                     <div class="alm-inner">
                         <div class="vector center">
                             <img src="./assets/images/ALM Promise Icons SVG/ALM Priya's Promise Icons SVG/Save Wrong Marrige.svg"
                                 class="promis-vect-img-2" alt="" />
                         </div>
                         <div class="dtail">
                             <h3>Save Wrong Marriage</h3>
                             <p>
                                 Avoiding unsuitable matches, ensuring compatibility and
                                 harmony.
                             </p>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-lg-3">
                 <a class="text-black" href="./alm-promise.php">
                     <div class="alm-inner">
                         <div class="vector center">
                             <img src="./assets/images/ALM Promise Icons SVG/ALM Priya's Promise Icons SVG/Trust.svg"
                                 class="promis-vect-img-1" alt="" />
                         </div>
                         <div class="dtail">
                             <h3>Trust</h3>
                             <p>Upholding trust and reliability throughout the process.</p>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-lg-3">
                 <a class="text-black" href="./alm-promise.php">
                     <div class="alm-inner">
                         <div class="vector center">
                             <img src="./assets/images//ALM Promise Icons SVG/ALM Priya's Promise Icons SVG/Sucess.svg"
                                 class="promis-vect-img-1" alt="" />
                         </div>
                         <div class="dtail">
                             <h3>Success</h3>
                             <p>
                                 A track record of countless successful matches & stories.
                             </p>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-lg-3">
                 <a class="text-black" href="./alm-promise.php">
                     <div class="alm-inner">
                         <div class="vector center">
                             <img src="./assets/images//ALM Promise Icons SVG/ALM Priya's Promise Icons SVG/Happy Marriage.svg"
                                 class="promis-vect-img-1" alt="" />
                         </div>
                         <div class="dtail">
                             <h3>Happy Marriage</h3>
                             <p>Facilitating marriages that lead to lifelong happiness.</p>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-lg-3">
                 <a class="text-black" href="./alm-promise.php">
                     <div class="alm-inner">
                         <div class="vector center">
                             <img src="./assets/images//ALM Promise Icons SVG/ALM Priya's Promise Icons SVG/Best Matchmaker in India.svg"
                                 class="promis-vect-img-2" alt="" />
                         </div>
                         <div class="dtail">
                             <h3>Best Matchmaker in India</h3>
                             <p>Recognized as the leading matchmaker in India.</p>
                         </div>
                     </div>
                 </a>
             </div>
         </div>

         <!-- Add Previous and Next Buttons -->
         <button class="slick-prev" aria-label="Previous" type="button">
             Previous
         </button>
         <button class="slick-next" aria-label="Next" type="button">Next</button>
     </div>
 </section>

 <section class="artical mt-5">
     <div class="container">
         <div class="underlined-heading">
             <h2>FEATURED ARTICLES</h2>
         </div>
         <div class="articals-main">
             <div class="row">
                 <div class="col-lg-3 col-md-6 col-sm-12">
                     <a target="_blank" href="./assets/images/home-articles/Home Page Article Forbes 1.pdf">
                         <div class="artical-thumb">
                             <img src="./assets/images/artical-1.png" alt="" />
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12">
                     <a target="_blank" href="./assets/images/home-articles/Home Page Article Forbes 2.pdf">
                         <div class="artical-thumb">
                             <img src="./assets/images/artical-2.png" alt="" />
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12">
                     <a target="_blank" href="../assets/images/home-articles/Home Page Article Woman's Era 3.pdf">
                         <div class="artical-thumb">
                             <img src="./assets/images/artical-3.png" alt="" />
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12">
                     <a target="_blank" href="./assets/images/home-articles/Home Page Article Forbes 4.pdf">
                         <div class="artical-thumb">
                             <img src="./assets/images/artical-4.png" alt="" />
                         </div>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="testimonials">
     <div class="container py-5">
         <div class="testi-heading pb-5">
             <h2 class="text-center">TESTIMONIALS</h2>
         </div>
         <!-- New slider wrapper -->
         <div class="testimonial-slider row">
             <div class="col-lg-4">
                 <div class="ankr">
                     <a href="./testmonials.php">
                         <div class="inner-1">
                             <div class="person-img">
                                 <img class="testimonials-img promise-img-wid"
                                     src="./assets/images/Testimonial images/Ratan Tata.jpg" alt="" />
                             </div>
                             <div class="rating">
                                 <div class="name">
                                     <p>Ratan Tata</p>
                                     <p>Indian Industrialist</p>
                                 </div>
                                 <div class="star">
                                     <img src="./assets/images/star.png" alt="" />
                                 </div>
                             </div>
                             <div class="review">
                                 <p>
                                     Priya Shah has organized nearly 100 events at our hotel,
                                     transforming Matchmaking into grand affairs. She exudes
                                     confidence and poise.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="ankr">
                     <a href="./testmonials.php">
                         <div class="inner-1">
                             <div class="person-img">
                                 <img src="./assets/images/Testimonial images/Ashwin Dani.jpg"
                                     class="testimonials-img promise-img-wid" alt="" />
                             </div>
                             <div class="rating">
                                 <div class="name">
                                     <p>Late Mr. Ashwin Dani</p>
                                     <p>Former Chairman - Asian Paints Ltd.</p>
                                 </div>
                                 <div class="star">
                                     <img src="./assets/images/star.png" alt="" />
                                 </div>
                             </div>
                             <div class="review">
                                 <p>
                                     My wife, Ila Dani, met Priya Shah and attended her event
                                     at the Taj Hotel. She was incredibly impressed by Priya's
                                     work, confidence, and innovative ideas for helping the new
                                     generation find marriage easily. We are proud of her.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="ankr">
                     <a href="./testmonials.php">
                         <div class="inner-1">
                             <div class="person-img">
                                 <img class="testimonials-img promise-img-wid"
                                     src="./assets/images/Testimonial images/Dr Jagannathrao Hegde.jpg" alt="" />
                             </div>
                             <div class="rating">
                                 <div class="name">
                                     <p>Dr. Jagannath Hegde</p>
                                     <p>Former Sheriff of Mumbai</p>
                                 </div>
                                 <div class="star">
                                     <img src="./assets/images/star.png" alt="" />
                                 </div>
                             </div>
                             <div class="review">
                                 <p>
                                     Priya Shah is more than just a matchmaker; she has helped
                                     prevent nearly 500 divorces, demonstrating her profound
                                     dedication to society. Her work, driven by genuine
                                     compassion and sincerity, has made her a noble figure in
                                     our community.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="ankr">
                     <a href="./testmonials.php">
                         <div class="inner-1">
                             <div class="person-img">
                                 <img class="testimonials-img promise-img-wid"
                                     src="./assets/images/Testimonial images/Hema Malini.jpg" alt="" />
                             </div>
                             <div class="rating">
                                 <div class="name">
                                     <p>Hema Malini</p>
                                     <p>Actress & Film Producer</p>
                                 </div>
                                 <div class="star">
                                     <img src="./assets/images/star.png" alt="" />
                                 </div>
                             </div>
                             <div class="review">
                                 <p>
                                     Priya Shah creates a heavenly experience on earth for her
                                     clients.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="ankr">
                     <a href="./testmonials.php">
                         <div class="inner-1">
                             <div class="person-img">
                                 <img class="testimonials-img promise-img-wid"
                                     src="./assets/images/Testimonial images/Amitabh Bachchan.jpg" alt="" />
                             </div>
                             <div class="rating">
                                 <div class="name">
                                     <p>Amitabh Bachchan</p>
                                     <p>Bollywood Actor</p>
                                 </div>
                                 <div class="star">
                                     <img src="./assets/images/star.png" alt="" />
                                 </div>
                             </div>
                             <div class="review">
                                 <p>
                                     I've met Priya Shah many times. She successfully arranged
                                     marriages for my neighbors, Mr. Mehta and Mr. Barot, who
                                     are very close to my family. They praise her as the best
                                     matchmaker in India. From what I've seen, she is doing
                                     remarkable work for society, especially at such a young
                                     age.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="ankr">
                     <a href="./testmonials.php">
                         <div class="inner-1">
                             <div class="person-img">
                                 <img class="testimonials-img promise-img-wid"
                                     src="./assets/images/Testimonial images/Jiten Ajmera.jpg" alt="" />
                             </div>
                             <div class="rating">
                                 <div class="name">
                                     <p>Dr. S. R. Jindal</p>
                                     <p>Indian Industrialist</p>
                                 </div>
                                 <div class="star">
                                     <img src="./assets/images/star.png" alt="" />
                                 </div>
                             </div>
                             <div class="review">
                                 <p>
                                     Priya Shah's positive and confident approach makes her a
                                     gifted matchmaker.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="ankr">
                     <a href="./testmonials.php">
                         <div class="inner-1">
                             <div class="person-img">
                                 <img class="testimonials-img promise-img-wid"
                                     src="./assets/images/Testimonial images/Tulsi Tanti.jpg" alt="" />
                             </div>
                             <div class="rating">
                                 <div class="name">
                                     <p>Late Mr. Tusli Tanti</p>
                                     <p>Founder & MD - Suzlon Energy</p>
                                 </div>
                                 <div class="star">
                                     <img src="./assets/images/star.png" alt="" />
                                 </div>
                             </div>
                             <div class="review">
                                 <p>
                                     Priya Shah is the best matchmaker I've ever seen. She
                                     works with genuine passion and integrity. She arranged an
                                     excellent marriage in my family. God bless her.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="top-award">
     <div class="container">
         <div class="underlined-heading">
             <h2>TOP AWARDS VIDEOS</h2>
         </div>

         <div class="row overflow-hidden">
             <div class="col-lg-6">
                 <div class="video-card">
                     <iframe class="videos" src="https://www.youtube.com/embed/qkjB_1SXY3A "
                         title="YouTube video player" frameborder="0"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                         allowfullscreen>
                     </iframe>

                     <h2>Golden Glory Award Most Popular Matchmaker of the Year</h2>
                 </div>
             </div>
             <div class="col-lg-6 mt-3 mt-lg-0">
                 <div class="video-card">
                     <iframe class="videos" src="https://www.youtube.com/embed/9vTZw5rpzdA" title="YouTube video player"
                         frameborder="0"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                         allowfullscreen>
                     </iframe>

                     <h2>
                         Winning The Shakti Award 2023 For Best Matchmaking Services
                     </h2>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="our-blog mb-lg-5 pb-lg-5">
     <div class="container">
         <div class="underlined-heading">
             <h2>OUR BLOG</h2>
         </div>
         <div class="row">
             <div class="col-lg-4">
                 <div class="blog-inner">
                     <div class="blog-img">
                         <img src="./assets/images/main-blog-1.jpg" width="100%" alt="" />
                     </div>
                     <div class="blog-link">
                         <div class="iner-link">
                             <p>
                                 Finding Your Perfect Match: How Elite Matrimony Bureaus
                                 Tailor Matches to High-Profile Clients
                             </p>

                             <a href="./blog1-detail.php">
                                 Read More <i class="fa-solid fa-arrow-right"></i>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="blog-inner">
                     <div class="blog-img">
                         <img src="./assets/images/main-blog-2.jpg" width="100%" alt="" />
                     </div>
                     <div class="blog-link">
                         <div class="iner-link">
                             <p>
                                 Customized Connections: How HNI Matrimonial Services Tailor
                                 Matches to Elite Preferences
                             </p>

                             <a href="./blogs/how_hni_matrimonial_services.php">
                                 Read More <i class="fa-solid fa-arrow-right"></i>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="blog-inner">
                     <div class="blog-img">
                         <img src="./assets/images/main-blog-3.jpg" width="100%" alt="" />
                     </div>
                     <div class="blog-link">
                         <div class="iner-link">
                             <p>
                                 From Tradition to Technology: The Best Indian Marriage
                                 Bureau
                             </p>
                             <br />

                             <a href="./blogs/The Best Indian Marriage Bureau.php">
                                 Read More <i class="fa-solid fa-arrow-right"></i>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <div class="main-footeerr">
     <div class="footer-bak-img">
         <img src="./assets/images/footer 1.png" class="w-100" alt="" />
     </div>
     <div class="center text-left">
         <footer class="text-light pt-4 on-media-widthfull">
             <div class="container">
                 <div class="row">
                     <div class="col-md-3 pb-3">
                         <div class="footer-first-col">
                             <img src="./assets/images/logo.png.png" alt="Arrange Love Marriage"
                                 class="img-fluid m-0 footer-logo-img" />
                         </div>

                         <div class="d-flex flex-column mx-2 mt-3">
                             <div class="f-13 popins">© 2024 Arrange Love Marriage.</div>
                             <div class="f-13 popins">All Rights Reserved.</div>
                             <div class="f-13 popins">
                                 Made with ❤️ by
                                 <a href="tel:+91 8369019712" class="text-decoration-underline">Fenil Gala</a>.
                             </div>
                         </div>
                         <div class="social-icons mt-4">
                             <a href="https://www.instagram.com/priyashah_thematchmaker/ " target="_blank"
                                 class="text-light me-2"><i class="fab fa-instagram center pt-2"></i></a>
                             <a href="https://www.facebook.com/priyashahthematchmakerofficial" target="_blank"
                                 class="text-light me-2"><i class="fab fa-facebook-f center pt-2"></i></a>
                             <a href="https://www.linkedin.com/in/dr-priya-shah-the-match-maker" target="_blank"
                                 class="text-light me-2"><i class="fab fa-linkedin center pt-2"></i></a>
                             <a href="https://www.youtube.com/@PriyaShahTheMatchMaker" target="_blank"
                                 class="text-light"><i class="fab fa-youtube center pt-2"></i></a>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="ms-lg-5">
                             <h5 class="footer-heading">Company</h5>
                             <ul class="list-unstyled popins">
                                 <li><a href="./index.php" class="text-light">Home</a></li>
                                 <li>
                                     <a href="./personal-life.php" class="text-light">My Story</a>
                                 </li>
                                 <li>
                                     <a href="./services-1-matchmaking.php" class="text-light">Matchmaking</a>
                                 </li>
                                 <li>
                                     <a href="./award.php" class="text-light">Awards</a>
                                 </li>
                                 <li>
                                     <a href="./sucess-stories.php" class="text-light">Success Stories</a>
                                 </li>
                                 <li>
                                     <a href="./testmonials.php" class="text-light">Testimonials</a>
                                 </li>
                                 <li><a href="./blog.php" class="text-light">Blog</a></li>
                                 <li><a href="./faqs.php" class="text-light">FAQs</a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-md-2">
                         <div class="">
                             <h5 class="footer-heading">Legal</h5>
                             <ul class="list-unstyled">
                                 <li>
                                     <a href="./term-and-conditions.php" class="text-light">Terms & Conditions</a>
                                 </li>
                                 <li>
                                     <a href="./privacy-policy.php" class="text-light">Privacy Policy</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="">
                             <h5 class="footer-heading">
                                 Ready to find your <br />
                                 perfect match?
                             </h5>
                             <div>
                                 <a href="./contact.php" class="btn btn-outline-light mb-3">Contact us, Today!
                                     <span class="ms-4"><i class="fa-regular fa-paper-plane"></i></span></a>
                             </div>

                             <div class="text-light f-13">
                                 Phone: +91 70219 15552 | +91 8080210410
                             </div>

                             <div class="f-13 py-1">
                                 Email:
                                 <a class="text-decoration-underline"
                                     href="mailto:themarriagesofindia@hotmail.com">themarriagesofindia@hotmail.com</a>
                             </div>
                             <div class="f-13">Available 24x7</div>
                         </div>
                     </div>
                 </div>
             </div>
         </footer>
     </div>
 </div>
 <script type="text/javascript">
$(document).ready(function() {
    $(".testimonial-slider").slick({
        slidesToShow: 3, // Show three slides at a time
        slidesToScroll: 1, // Scroll one slide at a time
        infinite: true, // Infinite scrolling
        dots: true, // Show navigation dots
        arrows: false, // Show navigation arrows

        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});
 </script>
 <script type="text/javascript">
$(document).ready(function() {
    $(".promise-slider").slick({
        slidesToShow: 3, // Show three slides at a time
        slidesToScroll: 1, // Scroll one slide at a time
        infinite: true, // Infinite scrolling
        dots: false, // Show navigation dots
        arrows: true, // Use arrows for navigation
        prevArrow: $(".slick-prev"), // Custom previous button
        nextArrow: $(".slick-next"), // Custom next button
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});
 </script>
 </body>

 </html>