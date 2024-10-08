<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Well Wishers</title>
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
      .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        grid-gap: 1rem;

        > .div {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
            0 6px 20px 0 rgba(0, 0, 0, 0.19);
          padding: 1rem;
          display: grid;
          place-items: center;

          &::before {
            content: "";
            display: block;
            padding-bottom: 100%;
            grid-area: 1 / 1 / 2 / 2;
          }

          img {
            width: 100%;

            grid-area: 1 / 1 / 2 / 2;
          }
        }
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="row py-4 align-items-center nav-marg-top">
        <div class="col">
          <img
            src="./assets/images/logo.png.png"
            alt=""
            class="main-logo-width"
          />
        </div>
        <div class="col media-text-end">
          <a href="./contact.php">
            <button class="bg-transparent cont-btn-margn">Contact Now</button>
          </a>
        </div>
      </div>
    </div>
    <div class="nav-start">
      <nav class="container navbar navbar-expand-lg navbar-light">
        <div class="container nav-media-end">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <img src="./assets/icons/menu-alt-01-svgrepo-com.svg" alt="" />
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav gap-4">
              <li class="nav-item">
                <a
                  class="nav-link text-white"
                  aria-current="page"
                  href="./index.php"
                  >Home</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  About
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li>
                    <a class="dropdown-item" href="./personal-life.php"
                      >Personal</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="./professional-life.php"
                      >Professional</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="./30-years-of-matchmaking.php"
                      >30 Year Journey</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="./the-marriages-of-india.php"
                      >The Marriages of India
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./biography.php"
                      >Biography
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Services
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li>
                    <a class="dropdown-item" href="./services-1-matchmaking.php"
                      >Matchmaking</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="./services-2-marriage-consulting.php"
                      >Marriage Consulting</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="./services-3-matchmaking-for-nris.php"
                      >Matchmaking For NRIs</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="./Services-4-one-to-one-sessions.php"
                      >One-To-One Sessions</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="./award.php">Awards</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Media
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li>
                    <a class="dropdown-item" href="./articles.php">Articles </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./media-video.php"
                      >Videos</a
                    >
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link text-white" href="./sucess-stories.php"
                  >Success Stories</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Events
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li>
                    <a class="dropdown-item" href="./magazine-launch.php"
                      >Magazine Launch</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="./get-together.php"
                      >Get-Togethers</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="./testmonials.php"
                  >Testimonials</a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link text-white" href="./gallery.php">Gallery</a>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  More
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li><a class="dropdown-item" href="./faqs.php">FAQs</a></li>
                  <li>
                    <a class="dropdown-item" href="./alm-promise.php"
                      >Our Promise</a
                    >
                  </li>
                  <li><a class="dropdown-item" href="./blog.php">Blogs</a></li>
                  <li>
                    <a class="dropdown-item" href="./well-wisher.php"
                      >Well Wishers
                    </a>
                  </li>
                  <li><a class="dropdown-item" href="./fees.php">Fees</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="container my-5">
      <div class="Award-content tex mb-4">
        <h2 style="text-transform: uppercase">Well Wishers</h2>
      </div>
      <div class="grid">
        <div class="div">
          <img src="./assets/images/Well Wishers/c1.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c2.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c3.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c4.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c5.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c6.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c7.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c8.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c9.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c10.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c11.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c12.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c13.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c14.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c15.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c16.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c17.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c18.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c19.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c20.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c21.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c22.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c23.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c24.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c25.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c26.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c27.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c28.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c29.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c30.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c31.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c32.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c33.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c34.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c35.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c36.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c37.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c38.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c39.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c40.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c41.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c42.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c43.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c44.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c45.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c46.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c47.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c48.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c49.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c50.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c51.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c52.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c53.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c54.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c55.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c56.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c57.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c58.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c59.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c60.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c61.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c62.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c63.jpg" alt="" />
        </div>
        <div class="div">
          <img src="./assets/images/Well Wishers/c64.jpg" alt="" />
        </div>
      </div>
    </div>

    <div class="main-footeerr">
      <div class="pt-3">
        <div class="upper-footer-background section-5">
          <div class="upper-footer appointment">
            <h1 class="ubuntu-font m-0 pb-5">
              Find your perfect match for a lifetime of happiness. Contact us,
              Today!
            </h1>
            <div class="pt-4">
              <a href="./contact.php">
                <button>Contact Now</button>
              </a>
            </div>
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
                  <img
                    src="./assets/images/logo.png.png"
                    alt="Arrange Love Marriage"
                    class="img-fluid m-0 footer-logo-img"
                  />
                </div>

                <div class="d-flex flex-column mx-2 mt-3">
                  <div class="f-13 popins">© 2024 Arrange Love Marriage.</div>
                  <div class="f-13 popins">All Rights Reserved.</div>
                  <div class="f-13 popins">
                    Made with ❤️ by
                    <a
                      href="tel:+91 8369019712"
                      class="text-decoration-underline"
                      >Fenil Gala</a
                    >.
                  </div>
                </div>
                <div class="social-icons mt-4">
                  <a
                    href="https://www.instagram.com/priyashah_thematchmaker/ "
                    target="_blank"
                    class="text-light me-2"
                    ><i class="fab fa-instagram center pt-2"></i
                  ></a>
                  <a
                    href="https://www.facebook.com/priyashahthematchmakerofficial"
                    target="_blank"
                    class="text-light me-2"
                    ><i class="fab fa-facebook-f center pt-2"></i
                  ></a>
                  <a
                    href="https://www.linkedin.com/in/dr-priya-shah-the-match-maker"
                    target="_blank"
                    class="text-light me-2"
                    ><i class="fab fa-linkedin center pt-2"></i
                  ></a>
                  <a
                    href="https://www.youtube.com/@PriyaShahTheMatchMaker"
                    target="_blank"
                    class="text-light"
                    ><i class="fab fa-youtube center pt-2"></i
                  ></a>
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
              <div class="col-md-2">
                <div class="">
                  <h5 class="footer-heading">Legal</h5>
                  <ul class="list-unstyled">
                    <li>
                      <a href="./term-and-conditions.php" class="text-light"
                        >Terms & Conditions</a
                      >
                    </li>
                    <li>
                      <a href="./privacy-policy.php" class="text-light"
                        >Privacy Policy</a
                      >
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
                    <a href="./contact.php" class="btn btn-outline-light mb-3"
                      >Contact us, Today!
                      <span class="ms-4"
                        ><i class="fa-regular fa-paper-plane"></i></span
                    ></a>
                  </div>

                  <div class="text-light f-13">
                    Phone: +91 70219 15552 | +91 8080210410
                  </div>

                  <div class="f-13 py-1">
                    Email:
                    <a
                      class="text-decoration-underline"
                      href="mailto:themarriagesofindia@hotmail.com"
                      >themarriagesofindia@hotmail.com</a
                    >
                  </div>
                  <div class="f-13">Available 24x7</div>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
