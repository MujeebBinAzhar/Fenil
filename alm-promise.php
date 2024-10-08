<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ALM Promise</title>
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
                    <a class="dropdown-item" href="./media-video.php">Videos</a>
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

    <div class="container promise-container">
      <div class="mb-5 pb-4">
        <h1 class="color-purpel f-60 poppins-font" style="font-weight: 900">
          OUR PROMISE
        </h1>
        <div class="center">
          <div
            class="peera"
            style="
              font-size: 18px;
              font-family: 'Poppins', sans-serif !important;
            "
          >
            The ALM Promise, where your journey to finding the perfect life
            partner begins with unwavering commitment and trust. At Arrange Love
            Marriage Matchmaking, I am dedicated to ensuring your happiness and
            satisfaction throughout the matchmaking process. Here, you'll
            discover a set of promises that I uphold to every candidate, guiding
            you towards a lifetime of love and fulfillment. From personalized
            service to high-quality matches, each promise is crafted to make
            your experience seamless and successful.
          </div>
        </div>
      </div>
      <div class="center w-100">
        <div class="all-promise-width">
          <div class="row">
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image.png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Face-to-Face Meeting
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Personal interactions to ensure genuine connections.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (1).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Take Your Own Time
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      The time and space you need to make the right decision.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (2).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Quality
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      High-quality matches that meet your specific criteria
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (3).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Trust
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Upholding trust and reliability throughout the process.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (4).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Goodwill
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Maintaining positive relationships with all my clients.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (5).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Progress
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Steady progress toward finding your perfect match.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/Featured icon (1).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Personalized Service
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Tailored matchmaking services to suit your unique needs.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (6).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Success
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      A track record of countless successful matches & stories.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (7).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Professional Touch
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      A professional approach for a smooth and efficient
                      process.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (8).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Confidential
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Keeping all your information strictly private and
                      confidential.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (9).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Happy Marriage
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Facilitating marriages that lead to lifelong happiness.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (10).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Save Divorce
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Helping prevent future marital issues by finding the right
                      match.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (11).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Save Wrong Marriage
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Avoiding unsuitable matches, ensuring compatibility and
                      harmony.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (12).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Wider Choice
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      A broad selection of potential partners to increase your
                      chances.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (13).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Good References
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Thorough background checks and references for peace of
                      mind.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (14).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Similar Choice
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Matching you with partners who share similar values and
                      lifestyles.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (15).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Avoid Net or Online Chatting
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Authentic connections, avoiding superficial online
                      interactions.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (16).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Serious About Marriage
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Catering to individuals genuinely committed to finding a
                      life partner
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (17).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Avoid Risk
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      A vetted process to minimize risks and ensure a safe
                      experience.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (18).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Expected Life Partner
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Meeting your expectations in finding the ideal life
                      partner.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (19).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Save Time
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      An efficient, streamlined process that saves you valuable
                      time.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (20).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Easy Communication
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Smooth communication throughout the matchmaking journey.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (21).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Help to Society
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Contributing positively to society by promoting happy
                      marriages.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (22).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Expert Opinion
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Guidance with my expertise every step of the way.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (23).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      No Compromise at All for Life Partner
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      You will not have to compromise in finding your perfect
                      match.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 promise-card">
              <div
                class="card h-100 text-center"
                style="border: none; border-radius: 10px"
              >
                <div class="promise-card-body d-flex">
                  <div class="promise-icon center">
                    <div class="service-icon">
                      <div class="">
                        <img
                          src="./assets/images/blog image (24).png"
                          class="promise-img-wid"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="text-left ms-3 mt-2">
                    <div
                      class="card-title promise-card-title m-0 p-0 color-purpel mt-1"
                    >
                      Best Matchmaker in India
                    </div>
                    <div class="promise-card-text m-0 p-0">
                      Recognized as the leading matchmaker in India.
                    </div>
                  </div>
                </div>
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
