<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/js/js.js" />
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Slick Slider JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icons -->
    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/seasons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <!-- fonts -->
    <title><?php echo isset($title) ? $title : 'Arrange Love Marriage'; ?></title>

  
</head>

<body>
    <div class="container">
        <div class="row py-4 align-items-center nav-marg-top">
            <div class="col">
                <img src="./assets/images/logo.png.png" alt="" class="main-logo-width" />
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <img src="./assets/icons/menu-alt-01-svgrepo-com.svg" alt="" />
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav gap-4">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="./personal-life.php">Personal</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./professional-life.php">Professional</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./30-years-of-matchmaking.php">30 Year Journey</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./the-marriages-of-india.php">The Marriages of India
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./biography.php">Biography
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="./services-1-matchmaking.php">Matchmaking</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./services-2-marriage-consulting.php">Marriage
                                        Consulting</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./services-3-matchmaking-for-nris.php">Matchmaking
                                        For NRIs</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./Services-4-one-to-one-sessions.php">One-To-One
                                        Sessions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./award.php">Awards</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Media
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="./articles.php">Articles </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./media-video.php">Videos</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="./sucess-stories.php">Success Stories</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Events
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="./magazine-launch.php">Magazine Launch</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./get-together.php">Get-Togethers</a>
                                </li>
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
                                <li>
                                    <a class="dropdown-item" href="./alm-promise.php">Our Promise</a>
                                </li>
                                <li><a class="dropdown-item" href="./blog.php">Blogs</a></li>
                                <li>
                                    <a class="dropdown-item" href="./well-wisher.php">Well Wishers
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