 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/js/js.js" />
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
    <!-- fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.cdnfonts.com/css/seasons" rel="stylesheet" />

    <!-- fonts -->
    <title>The Marriages of India</title>


    <style>
        .img-thumbnail {
            /* cursor: pointer; */
            border: none !important;
            border-radius: 10px !important;
            padding: 0px !important;
        }


        .img-75-width {
            width: 33%;
            border-radius: 10px;
            margin: 10px;
        }

        .to-sec-img {
            width: 70%;
            border-radius: 10px;
        }

        .image-1 img {
            width: 70%;
            border-radius: 10px;
        }

        .image-2 img {
            width: 48%;
            border-radius: 10px;
        }

        .modal-body img {
            width: 100%;
        }

        figure a {
            cursor: auto !important;
        }
        .magzin-background{
            background-color: #F7EEFF; margin: 60px 0px;
        }
        @media only screen and (max-width: 550px) {
        #image-container img{
            margin: 7px!important;
        }
        .to-sec-img {
            width: 99%;
            margin-bottom: 20px;
        }
        .med-wid{
            width: 100% !important;
        }
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

    <section class=" overflow-hidden pt-5">

        <div class="container">
            <div class="row">
                <h1 class="color-purpel f-60 text-center pb-3 poppins-font" style="font-weight: 900; text-transform: uppercase;">
                    magazine Launch</h1>
                <div class="col-lg-12">
                    <div class="sec-4-content">
                        <p>15th Feb. 2004, an evening at the J.W. Marriott Hotel, Mumbai celebrated the launch of "The
                            Marriages of India" a magazine of substance. Publisher and Editor Ms. Priya Shah hosted the
                            party wearing ethnic bridal wear. Famous Bollywood mehendi queen Veena Nagda had applied
                            patterns of mehendi on Ms. Priya Shah's hands to compliment the look. The makeup of Priya
                            Shah was done by the famous beautician Jayavant Thakre.
                        </p>
                        <p>
                            At the launch event of the magazine, Priya Shah expressed her joy by saying that the birth
                            of this magazine gave her as much pleasure as a mother giving birth to a child. "Bringing a
                            new creation into the world".
                        </p>
                        <p>
                            The invitation cards for the function were made very artistically just like a wedding card.
                            The invitees for the occasion were welcomed by an exotically decorated elephant with his
                            mahavat at the entrance of the hotel. Diyas were lit at the entrance to give a traditional
                            look along with an attractive fresh flower rangoli.
                        </p>
                        <p>
                            The chief guests for the evening was Padmashri Hema Malini, actress, Member of Parliament
                            and Editor of ‘New Woman’ dressed in a beautiful red saree adding colour to the evening
                            celebration. There were various other renowned personalities to grace the occasion,
                            including Shri Dr. Jagannath Hegde - Sheriff of Mumbai, Shri Bharat Shah - Diamond King,
                            Shri Deepchand Gardi - Jain Philanthropist, Shri Kundan Shah & Tinu Verma - Film Producers,
                            Shri A.H. Rizvi - Builder, Shri Prashant Jhaveri - Secretary of All India Patrakar, Shri
                            Mahesh Abhichandani - Producer.

                        </p>

                    </div>
                </div> 
                <div class="col-lg-12 ">
                    <div class=" text-center">
                        <div class=" d-flex flex-wrap-prop">
                            <img src="./assets/images/Magazine Launch Event/1.png" class="img-75-width" alt="">
                            <img src="./assets/images/Magazine Launch Event/10.png" class="img-75-width" alt="">
                            <img src="./assets/images/Magazine Launch Event/11.png" class="img-75-width" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" py-5 magzin-background" >
        <div class="container">
            <div class="d-flex flex-wrap w-100 py-4 ">
                <div class="col-lg-6 center">
                    <img src="./assets/images/Magazine Launch Event/2.png" class="to-sec-img" alt="">
                </div>
                <div class="col-lg-6 center">
                    <p style="width: 100%; text-align: left!important;">
                        Chief Guest Hema Malini & Mr. Bharat Shah accompanied by Editor Priya Shah performed the ‘Diya
                        Ceremony’ on the stage. Hema Malini inaugurated the magazine and in the speech said, "Marriages
                        are made in heaven, but it seems Priya Shah has got the heaven on Earth today". She also
                        commented positively on the topics taken in the magazine and appreciated Priya Shah for helping
                        society at large.

                    </p>
                </div>
            </div>
            <div class="d-flex flex-wrap w-100  py-4 mt-3" >
                <div class="col-lg-6 center">
                    <p class="med-wid" style="width: 70%; text-align: left!important;">
                        A bridal fashion show by Ojasvita featuring diamond jewellery by Urja Creations Pvt. Ltd. added
                        glitter and glamour to the evening.
                    </p>
                </div>
                <div class="col-lg-6 center">
                    <img src="./assets/images/Magazine Launch Event/12.png" class="to-sec-img" alt="">
                </div>
                </p>
            </div>
        </div>
    </section>
   






    <section class="">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-12">
                    <div class="center">
                        <div class="text">
                            <p>Sheriff of Mumbai Dr. Jagannath Hegde came on stage and complimented Priya Shah for her
                                remarkable courage and determination. Five years ago, Sejal & Bhavesh were married with
                                the
                                guidance and help of Priya Shah. This couple along with their one-and-a-half year old
                                son
                                performed the mangal pheras on stage that evening. They expressed their joy of marriage
                                and
                                heartily thanked Priya Shah for their marital bond while a large number of invitees
                                watched the
                                emotional scene, enjoying the launch of the magazine - The Marriages of India. Those who
                                missed
                                the event, missed an event of a lifetime.</p>
                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="col-lg-12 ">
                    <div class=" text-center">
                        <div class=" d-flex flex-wrap-prop">
                            <img src="./assets/images/Magazine Launch Event/7.png" class="img-75-width" alt="">
                            <img src="./assets/images/Magazine Launch Event/8.png" class="img-75-width" alt="">
                            <img src="./assets/images/Magazine Launch Event/9.png" class="img-75-width" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>





    <div class="container my-3 my-lg-5 text-center">
        <p clas="">After the Programme a lavish dinner was spread for the invitees. There were photographers & print
            media from all respectable channels and newspapers to cover one of the most memorable evenings of the year.
        </p>
        <div class="row center px-3" id="image-container"></div>
        <div class="text-center my-4">

            <div id="load-more" class=""></div>
        </div>
    </div>

    <!-- Modal for displaying larger images -->
    <!-- <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modal-img" class="modal-img" src="" alt="Image">
                </div>
            </div>
        </div>
    </div> -->


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
                  <ul class="list-unstyled popins">
                    <li><a href="./index.php" class="text-light">Home</a></li>
                    <li>
                      <a href="./personal-life.php" class="text-light"
                        >My Story</a
                      >
                    </li>
                    <li>
                      <a href="./services-1-matchmaking.php" class="text-light"
                        >Matchmaking</a
                      >
                    </li>
                    <li>
                      <a href="./award.php" class="text-light">Awards</a>
                    </li>
                    <li>
                      <a href="./sucess-stories.php" class="text-light"
                        >Success Stories</a
                      >
                    </li>
                    <li>
                      <a href="./testmonials.php" class="text-light"
                        >Testimonials</a
                      >
                    </li>
                    <li><a href="./blog.php" class="text-light">Blog</a></li>
                    <li><a href="./faqs.php" class="text-light">FAQs</a></li>
                  </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                        <div class="col-md-3">
                            <div class="">
                                <h5 class="footer-heading">
                                    Ready to find your perfect match?
                                </h5>
                                <a href="#" class="btn btn-outline-light mb-3">Contact us, Today!
                                    <span class="ms-4"><i class="fa-regular fa-paper-plane"></i></span></a>
                                <div class="f-13">Phone:</div>
                                <div>+91 70219 15552 | +91 9619600059</div>
                                <div class="f-13 email-under py-1">
                                    themarriagesofindia@hotmail.com
                                </div>
                                <div class="f-13">Business Hours: 10 A.M. to 6 P.M.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
        let imagesLoaded = 0;
        const imagesPerLoad = 8; // Update this to match the number of images per load, which is 8 in this case
        const totalImages = 8; // Total number of images is 8

        function loadImages() {
            const container = document.getElementById('image-container');
            for (let i = 0; i < imagesPerLoad; i++) {
                if (imagesLoaded >= totalImages) {
                    document.getElementById('load-more').style.display = 'none';
                    break;
                }
                const img = document.createElement('img');
                img.src = `./assets/images/Magazine Launch Event/New folder/${imagesLoaded + 1}.png`; // Updated image path
                img.className = 'col-12 col-sm-6 col-md-4 col-lg-3 m-3 img-thumbnail';
                img.alt = `marriages-of-india${imagesLoaded + 1}`;
                img.setAttribute('data-bs-toggle', 'modal');
                img.setAttribute('data-bs-target', '#imageModal');
                img.onclick = function () {
                    document.getElementById('modal-img').src = this.src;
                };
                container.appendChild(img);
                imagesLoaded++;
            }
        }

        document.getElementById('load-more').addEventListener('click', loadImages);

        // Load initial images
        loadImages();

    </script>
</body>

</html>