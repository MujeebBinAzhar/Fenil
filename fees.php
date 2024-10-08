 



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fees</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/js/js.js" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <!-- bootstrap 5.3.3 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    
  <style>
    p{
        font-size: 18px !important;
        font-family: "Poppins", sans-serif;
    }
    .card-upper-blue {
        font-family: "Poppins", sans-serif;
        background-color: #E01A77;
        color: white;
        font-size: 18px;
        text-align: center;
        padding: 10px;
        height: 100px;
        font-weight: 700;
        border-top-left-radius: 0.4rem !important;
        border-top-right-radius: 0.4rem !important;
    }

    .card-upper-red {
        font-family: "Poppins", sans-serif;
        background-color: #6108B2; 
        color: white;
        height: 120px;
        font-size: 18px;
        text-align: center;
        padding: 10px;
        font-weight: 700;
        border-top-left-radius: 0.4rem !important;
        border-top-right-radius: 0.4rem !important;
    }

    .card-lower-white-1 {
        font-family: "Poppins", sans-serif;
        background-color: white;
        color: black;
        height: 100px;
        border-radius: 0.4rem !important;
        color: #6108B2;
        font-weight: 600;
    }

    .card-lower-white-2 {
        font-family: "Poppins", sans-serif;
        background-color: white;
        color: black;
        height: 100px;
        border-radius: 0.4rem !important;
        color: #E01A77; 
        font-weight: 600;
    }

    .card-custom {
        margin-bottom: 20px;
        border-radius: 0.4rem !important;
    }

    .card-custom .card {
        border-radius: 0.4rem !important;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>


  </head>




<body>


    <div class="container">
        <div class="row py-4 align-items-center nav-marg-top">
            <div class="col">
                <img src="./assets/images/logo.png.png" alt="" class="main-logo-width">
            </div>
            <div class="col media-text-end">
                <a href="./contact.php">
                    <button class="bg-transparent  cont-btn-margn ">Contact Now</button>
                </a>
            </div>
        </div>
    </div>
    <div class="nav-start">
        <nav class="container navbar navbar-expand-lg navbar-light">
            <div class="container nav-media-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <img src="./assets/icons/menu-alt-01-svgrepo-com.svg" alt="">
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav gap-4 ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="./personal-life.php">Personal</a></li>
                                <li><a class="dropdown-item" href="./professional-life.php">Professional</a></li>
                                <li><a class="dropdown-item" href="./30-years-of-matchmaking.php">30 Year Journey</a>
                                </li>
                                <li><a class="dropdown-item" href="./the-marriages-of-india.php">The Marriages of India
                                    </a></li>
                                <li><a class="dropdown-item" href="./biography.php">Biography </a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="./services-1-matchmaking.php">Matchmaking</a></li>
                                <li><a class="dropdown-item" href="./services-2-marriage-consulting.php">Marriage
                                        Consulting</a></li>
                                <li><a class="dropdown-item" href="./services-3-matchmaking-for-nris.php">Matchmaking
                                        For NRIs</a></li>
                                <li><a class="dropdown-item" href="./Services-4-one-to-one-sessions.php">One-To-One
                                        Sessions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./award.php">Awards</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Media
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="./articles.php">Articles </a></li>
                                <li><a class="dropdown-item" href="./media-video.php">Videos</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white " href="./sucess-stories.php">Success Stories</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Events
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="./magazine-launch.php">Magazine Launch</a></li>
                                <li><a class="dropdown-item" href="./get-together.php">Get-Togethers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./testmonials.php">Testimonials</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="./gallery.php">Gallery</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="./faqs.php">FAQs</a></li>
                                <li><a class="dropdown-item" href="./alm-promise.php">Our Promise</a></li>
                                <li><a class="dropdown-item" href="./blog.php">Blogs</a></li>
                                <li><a class="dropdown-item" href="./well-wisher.php">Well Wishers </a></li>
                                <li><a class="dropdown-item" href="./fees.php">Fees</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container" style="display: flex; justify-content: center; align-items: center; ">
        <div class="" style="width: 100%; max-width: 1100px;">
            <div class="">
                <div class="row">
                    <div class="text-center">
                        <div class="mt-5">
                            <div class="Award-content tex mb-4">
                                <h2>FEES</h2>
                            </div>

                            <p>Important Message for Parents
                                Finding the right life partner for your son or daughter is a crucial step toward their
                                lifelong happiness. While it’s common to invest substantial amounts of money in wedding
                                celebrations, the true foundation of a successful marriage lies in choosing the right
                                partner. This is where the expertise of a professional matchmaker becomes invaluable.
                                Hiring matchmaker, Priya Shah, ensures your children meet potential partners who align
                                with
                                their values, background, and aspirations. With access to carefully vetted profiles,
                                your
                                children will have the opportunity to select from among 20 eligible candidates, allowing
                                love and compatibility to flourish. Investing in a matchmaker is an investment in your
                                child’s future happiness, far more enduring than any grand wedding celebration.
                                Priya Shah provides comprehensive background checks, offering insights into up to three
                                generations of both families, ensuring transparency and trustworthiness.
                            </p>
                           
                            <p class="fee-para">Our memberships offer personalized and confidential matchmaking
                                services, tailored to
                                different social and economic backgrounds</p>
                            <div class="fee-card">
                                <div class="row justify-content-center">
                                    <!-- First Row with 4 Cards -->
                                    <div class="col-md-3 col-sm-6 card-custom">
                                        <div class="card">
                                            <div
                                                class="card-upper-blue d-flex align-items-center justify-content-center">
                                                Upper Middle Class, Professionally Qualified:
                                            </div>
                                            <div
                                                class="card-lower-white-2 d-flex align-items-center justify-content-center">
                                                ₹3.50 Lacs ($4,194)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 card-custom">
                                        <div class="card">
                                            <div
                                                class="card-upper-blue d-flex align-items-center justify-content-center">
                                                High Profile, Professionally Qualified:
                                            </div>
                                            <div
                                                class="card-lower-white-2 d-flex align-items-center justify-content-center">
                                                ₹5.50 Lacs ($6,591)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 card-custom">
                                        <div class="card">
                                            <div
                                                class="card-upper-blue d-flex align-items-center justify-content-center">
                                                Elite Class, Professionally Qualified:
                                            </div>
                                            <div
                                                class="card-lower-white-2 d-flex align-items-center justify-content-center">
                                                ₹11 Lacs ($13,182)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 card-custom">
                                        <div class="card">
                                            <div
                                                class="card-upper-blue d-flex align-items-center justify-content-center">
                                                Ultra-Rich Family, Professionally Qualified:
                                            </div>
                                            <div
                                                class="card-lower-white-2 d-flex align-items-center justify-content-center">
                                                ₹25 Lacs ($29,961)
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <!-- Second Row with 3 Cards -->
                                    <div class="col-md-3 col-sm-6 card-custom">
                                        <div class="card">
                                            <div
                                                class="card-upper-red d-flex align-items-center justify-content-center">
                                                Top 1000 Families in India &amp; Abroad, Professionally Qualified
                                                (Hindus Only):
                                            </div>
                                            <div
                                                class="card-lower-white-1 d-flex align-items-center justify-content-center">
                                                ₹50 Lacs ($59,922)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 card-custom">
                                        <div class="card">
                                            <div
                                                class="card-upper-red d-flex align-items-center justify-content-center">
                                                Top 100 Families in India &amp; Abroad, Professionally Qualified (Hindus
                                                Only):
                                            </div>
                                            <div
                                                class="card-lower-white-1 d-flex align-items-center justify-content-center">
                                                ₹75 Lacs
                                                ($89,883)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 card-custom">
                                        <div class="card">
                                            <div
                                                class="card-upper-red d-flex align-items-center justify-content-center">
                                                Indian Royal Family Members:
                                            </div>
                                            <div
                                                class="card-lower-white-1 d-flex align-items-center justify-content-center">
                                                ₹1 Crore ($119,837)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <ul>
                            <li> </li>
                            <li> ₹5.50 Lacs ($6,591)</li>
                            <li>Elite Class, Professionally Qualified: ₹11 Lacs ($13,182)</li>
                            <li>Ultra-Rich Family, Professionally Qualified: ₹25 Lacs ($29,961)</li>
                            <li>Top 1000 Families in India & Abroad, Professionally Qualified (Hindus Only): ₹50 Lacs
                                ($59,922)</li>
                            <li>Top 100 Families in India & Abroad, Professionally Qualified (Hindus Only): ₹75 Lacs
                                ($89,883)</li>
                            <li>Indian Royal Family Members: ₹1 Crore ($119,837)</li>

                        </ul> -->

                        <p>
                            Priya Shah has the privilege of successfully arranging marriages within India's royal
                            families
                            over the past 32 years. She maintains personal connections with royal families across India,
                            ensuring an elite and bespoke matchmaking service.</p>
                        <p>
                            To get started, please email the biodata and pictures to themarriagesofindia@hotmail.com.
                            Note: Membership fees are non-refundable.
                        </p>
                      <div class="py-2">
                        <b style="text-align: center; font-size: 30px; font-weight: bold; color: #6108B2; ">Ensuring the Perfect Match</b>
                      </div>
                        <p>The categorization of memberships is essential to ensure compatibility in terms of social
                            status
                            and lifestyle. Priya Shah treats all prospective partners as family, carefully considering
                            family background and lifestyle to facilitate perfect matches. This personalized approach
                            ensures that each match leads to a harmonious and happy marriage.</p>
                       








                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="main-footeerr">
        <div class="pt-3">
          <div class="upper-footer-background section-5">
            <div class="upper-footer appointment">
              <h1 class="ubuntu-font mb-4 ">
                Find your perfect match for a lifetime of happiness. Contact us, Today!
              </h1>
              <a href="./contact.php" class="">
                <button>Contact Now</button>
              </a>
            </div>
          </div>
        </div>
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
                    <div class="f-13">© 2024 Arrange Love Marriage.</div>
                    <div class="f-13">All Rights Reserved.</div>
                    <div class="f-13">Made with ❤️ by Fenil Gala.</div>
                  </div>
                  <div class="social-icons mt-4">
                    <a href="#" class="text-light me-2"><i class="fab fa-instagram center pt-2"></i></a>
                    <a href="#" class="text-light me-2"><i class="fab fa-facebook-f center pt-2"></i></a>
                    <a href="#" class="text-light me-2"><i class="fab fa-twitter center pt-2"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-youtube center pt-2"></i></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="ms-lg-5">
                    <h5 class="footer-heading">Company</h5>
                    <ul class="list-unstyled">
                      <li><a href="./index.php" class="text-light">Home</a></li>
                      <li><a href="./personal-life.php" class="text-light">Our Story</a></li>
                      <li><a href="./services-1-matchmaking.php" class="text-light">Services</a></li>
                      <li><a href="./award.php" class="text-light">Awards</a></li>
                      <li><a href="./sucess-stories.php" class="text-light">Success Stories</a></li>
                      <li><a href="./testmonials.php" class="text-light">Testimonials</a></li>
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
                      <li><a href="./privacy-policy.php" class="text-light">Privacy Policy</a></li>
                       
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="">
                    <h5 class="footer-heading">
                      Ready to find your <br> perfect match?
                    </h5>
                    <a href="#" class="btn btn-outline-light mb-3">Contact us, Today!
                      <span class="ms-4"><i class="fa-regular fa-paper-plane"></i></span></a>
    
                    <div class="text-light f-13">
                      Phone: +91 70219 15552 | +91 9619600059
                    </div>
    
                    <div class="f-13 py-1">
                      Email:
                      <a class="text-decoration-underline"
                        href="mailto:themarriagesofindia@hotmail.com">themarriagesofindia@hotmail.com</a>
                    </div>
                    <div class="f-13">Business Hours: 10 A.M. to 6 P.M.</div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>

</body>

</html>