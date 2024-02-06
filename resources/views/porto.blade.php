<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- icons link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css"
        integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css link -->
    <link rel="stylesheet" href="index.css">

    <!-- tittle -->
    <title>Quiz | Cashadi</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar sticky-top">
        <div class="container d-flex flex-row justify-content-between">
            <img src="img/Logo-nextcent-2.svg" alt="logo" style="width: 130px" />
            <ul class="nav d-flex flex-row gap-3">
                <li class="nav-item"><a href="">Home</a></li>
                <li class="nav-item"><a href="">Service</a></li>
                <li class="nav-item"><a href="">Feature</a></li>
                <li class="nav-item"><a href="">Product</a></li>
                <li class="nav-item"><a href="">Testimonial</a></li>
                <li class="nav-item"><a href="">FAQ</a></li>
            </ul>
            <div class="button">
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- hero section -->
    <header>
        <div class="container-lg d-flex justify-content-center hero--section">
            <!-- <div class="row"> -->
            <div class="col-lg-7">
                <div class="d-flex flex-column justify-content-center h-100 gap-1">
                    <h1>Lesson and Insights</h1>
                    <h1 style="color: #4caf4f">from 8 years</h1>
                    <p style="color: gray">
                        Where to grow your business as a photographer: site or social
                        media?
                    </p>
                    <button style="width: 150px" class="btn">Register</button>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="img/Illustration.svg" alt="" style="width: 100%; height: 380px" />
            </div>
        </div>
    </header>
    <!-- hero section -->

    <!-- our clients -->
    <div class="container mt-5 d-flex justify-content-center align-items-center flex-column clients--content">
        <h2>Our Clients</h2>
        <p>We have been working with some fortune 500+ clients</p>
        <div class="carousel col-lg-12 mb--30">
            <!-- 1 clients -->
            <div class="carousel--wrapper">
                <div class="card--brand mr--10">
                    <img src="img/cl-1.svg" alt="1" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-2.svg" alt="2" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-3.svg" alt="3" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-4.svg" alt="4" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-5.svg" alt="5" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-6.svg" alt="6" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-7.svg" alt="7" class="logo--clients" />
                </div>
            </div>
            <!-- 2 clients -->
            <div class="carousel--wrapper">
                <div class="card--brand mr--10">
                    <img src="img/cl-1.svg" alt="1" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-2.svg" alt="2" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-3.svg" alt="3" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-4.svg" alt="4" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-5.svg" alt="5" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-6.svg" alt="6" class="logo--clients" />
                </div>
                <div class="card--brand mr--10">
                    <img src="img/cl-7.svg" alt="7" class="logo--clients" />
                </div>
            </div>
        </div>
    </div>
    <!-- our clients -->

    <!-- manage community -->
    <div class="container mt-5 d-flex justify-content-center align-items-center flex-column">
        <h2>Manage your entire community</h2>
        <h2>in a single system</h2>
        <p style="color: #717171">Who is Nextcent suitable for?</p>
        <div class="container-lg d-flex row justify-content-center align-items-center mt-2">
            <!-- community 1 -->
            <div class="col-lg-4">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
                    <img src="img/c-1.svg" alt="community-1" style="width: 20%" />
                    <h4>Membership Organisations</h4>
                    <p style="color: #717171">
                        Our membership management software provides full automation of
                        membership renewals and payments
                    </p>
                </div>
            </div>
            <!-- community 2 -->
            <div class="col-lg-4">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
                    <img src="img/c-2.svg" alt="community-1" style="width: 20%" />
                    <h4>National Associations</h4>
                    <p style="color: #717171">
                        Our membership management software provides full automation of
                        membership renewals and payments
                    </p>
                </div>
            </div>
            <!-- community 3 -->
            <div class="col-lg-4">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
                    <img src="img/c-3.svg" alt="community-1" style="width: 20%" />
                    <h4>Clubs And Groups</h4>
                    <p style="color: #717171">
                        Our membership management software provides full automation of
                        membership renewals and payments
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- manage community -->

    <!-- pixel grade -->
    <div class="container-lg d-flex justify-content-center mt-5">
        <div class="col-lg-5">
            <img src="img/rafiki.svg" alt="ilustration" style="width: 100%; height: 380px" />
        </div>
        <div class="col-lg-7">
            <div class="d-flex flex-column justify-content-center h-100 gap-1">
                <h2>The unsen of spending three years at Pixelgrade</h2>
                <p style="font-size: 14px; color: #717171">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit
                    amet justo ipsum. Sed accumsan quam vitae est varius fringilla.
                    Pellentesque placerat vestibulum lorem sed porta. Nullam mattis
                    tristique iaculis. Nullam pulvinar sit amet risus pretium auctor.
                    Etiam quis massa pulvinar, aliquam quam vitae, tempus sem. Donec
                    elementum pulvinar odio.
                </p>
                <button class="btn" style="background-color: #4caf4f; width: 150px; color: #fff">
                    Learn more
                </button>
            </div>
        </div>
    </div>
    <!-- pixel grade -->

    <!-- helping local -->
    <div class="helping--local">
        <div class="container-lg d-flex justify-content-center mt-3">
            <div class="col-lg-6">
                <h2>Helping a local</h2>
                <h2 style="color: #4caf4f">business reinvent itself</h2>
                <p>We reached here with our hard work and dedication</p>
            </div>
            <div class="col-lg-3 flex-column">
                <!-- members -->
                <div class="d-flex mb-2">
                    <img src="img/r-1.svg" alt="members" style="width: 48px; height: 48px" />
                    <div class="d-flex flex-column">
                        <span style="font-size: 16px; font-weight: 700">2,245,341</span>
                        <span style="font-size: 12px; color: #717171">Members</span>
                    </div>
                </div>
                <!-- bookings -->
                <div class="d-flex mt-2">
                    <img src="img/r-2.svg" alt="bookings" style="width: 48px; height: 48px" />
                    <div class="d-flex flex-column">
                        <span style="font-size: 16px; font-weight: 700">828,867</span>
                        <span style="font-size: 12px; color: #717171">Event Bookings</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 flex-column">
                <!-- clubs -->
                <div class="d-flex mb-2">
                    <img src="img/Group 2.svg" alt="clubs" style="width: 48px; height: 48px" />
                    <div class="d-flex flex-column">
                        <span style="font-size: 16px; font-weight: 700">46,328</span>
                        <span style="font-size: 12px; color: #717171">Clubs</span>
                    </div>
                </div>
                <!-- payments -->
                <div class="d-flex mt-2">
                    <img src="img/r-4.svg" alt="payments" style="width: 48px; height: 48px" />
                    <div class="d-flex flex-column">
                        <span style="font-size: 16px; font-weight: 700">1,926,436</span>
                        <span style="font-size: 12px; color: #717171">Payments</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- helping local -->

    <!-- how to design -->
    <div class="container-lg d-flex justify-content-center mt-5">
        <div class="col-lg-5">
            <img src="img/pana.svg" alt="ilustration" style="width: 100%; height: 400px" />
        </div>
        <div class="col-lg-7">
            <div class="d-flex flex-column justify-content-center h-100 gap-1">
                <h2 style="font-size: 38px">
                    How to design your site footer like we did
                </h2>
                <p style="color: #717171; font-size: 14px">
                    Donec a eros justo. Fusce egestas tristique ultrices. Nam tempor,
                    augue nec tincidunt molestie, massa nunc varius arcu, at scelerisque
                    elit erat a magna. Donec quis erat at libero ultrices mollis. In hac
                    habitasse platea dictumst. Vivamus vehicula leo dui, at porta nisi
                    facilisis finibus. In euismod augue vitae nisi ultricies, non
                    aliquet urna tincidunt. Integer in nisi eget nulla commodo faucibus
                    efficitur quis massa. Praesent felis est, finibus et nisi ac,
                    hendrerit venenatis libero. Donec consectetur faucibus ipsum id
                    gravida.
                </p>
                <button class="btn" style="background-color: #4caf4f; width: 150px; color: #fff">
                    Learn more
                </button>
            </div>
        </div>
    </div>
    <!-- how to design -->

    <!-- all cusstomers -->
    <div class="content--all--customers">
        <div class="container-lg d-flex justify-content-center">
            <div class="col-lg-5">
                <img src="img/tesla-logo.jpg" alt="tesla-logo" style="width: 90%; height: 320px" />
            </div>
            <div class="col-lg-7">
                <div class="d-flex flex-column justify-content-center h-100 gap-1">
                    <p>
                        Maecenas dignissim justo eget nulla rutrum molestie. Maecenas
                        lobortis sem dui, vel rutrum risus tincidunt ullamcorper. Proin eu
                        enim metus. Vivamus sed libero ornare, tristique quam in, gravida
                        enim. Nullam ut molestie arcu, at hendrerit elit. Morbi laoreet
                        elit at ligula molestie, nec molestie mi blandit. Suspendisse
                        cursus tellus sed augue ultrices, quis tristique nulla sodales.
                        Suspendisse eget lorem eu turpis vestibulum pretium. Suspendisse
                        potenti. Quisque malesuada enim sapien, vitae placerat ante
                        feugiat eget. Quisque vulputate odio neque, eget efficitur libero
                        condimentum id. Curabitur id nibh id sem dignissim finibus ac sit
                        amet magna.
                    </p>
                    <h5 style="color: #4caf4f">Tim Smith</h5>
                    <p style="color: #717171">British Dragon Boat Racing Association</p>
                    <div class="d-flex">
                        <img src="img/customer-logo.svg" alt="customer-logo" style="width: 65%" />
                        <div class="d-flex align-items-center">
                            <span
                                style="
                    color: #4caf4f;
                    cursor: pointer;
                    margin-left: 20px;
                    font-size: 16px;
                    font-weight: 600;
                  ">Meet
                                all customer</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- all cusstomers -->

    <!-- caring -->
    <div class="container mt-5 d-flex justify-content-center align-items-center flex-column">
        <h2>Caring is the new marketing</h2>
        <p style="text-align: center; color: #717171">
            The Nexcent blog is the best place to read about the latest membership
            insights, trends and more. See who's joining the community, read about
            how our community are increasing their membership income and lot's more.
        </p>
        <div class="container-lg d-flex justify-content-center align-items-center mt-3">
            <!-- image 1 -->
            <div class="col-lg-4 caring--content">
                <img src="img/caring-1.png" alt="" style="width: 90%" />
                <div class="d-flex flex-column justify-content-center align-items-center card--shadow--1">
                    <p style="text-align: center">
                        Creating Streamlined Safeguarding Processes with OneRen
                    </p>
                    <div class="d-flex align-items-center">
                        <span>Readmore</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <!-- image 2 -->
            <div class="col-lg-4 caring--content">
                <img src="img/caring-2.png" alt="" style="width: 90%" />
                <div class="d-flex flex-column justify-content-center align-items-center card--shadow--1">
                    <p style="text-align: center">
                        What are your safeguarding responsibilities and how can you manage
                        them?
                    </p>
                    <div class="d-flex align-items-center">
                        <span>Readmore</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <!-- image 3 -->
            <div class="col-lg-4 caring--content">
                <img src="img/caring-3.png" alt="" style="width: 90%" />
                <div class="d-flex flex-column justify-content-center align-items-center card--shadow--1">
                    <p style="text-align: center">
                        Revamping the Membership Model with Triathlon Australia
                    </p>
                    <div class="d-flex align-items-center">
                        <span>Readmore</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- caring -->

    <!-- get a demo -->
    <div class="content--demo">
        <div class="container-lg d-flex flex-column justify-content-center align-items-center gap-2">
            <h1>Pellentesque suscipit</h1>
            <h1>fringilla libero eu.</h1>
            <button class="btn" style="background-color: #4caf4f; color: #fff">
                Get a demo <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <!-- get a demo -->

    <!-- footer -->
    <div class="content--footer">
        <div class="container-lg d-flex justify-content-center">
            <div class="col-lg-5">
                <div class="d-flex flex-column gap-5">
                    <img src="img/Logo-nextcent.svg" alt="logo" style="width: 130px" />
                    <div class="copyright--content d-flex flex-column">
                        <span>Copyright &#169; 2023 Nexcent ltd.</span>
                        <span>All rights reserved</span>
                    </div>
                    <div class="d-flex logo--social--media gap-4">
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-dribbble"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
            <!-- company -->
            <div class="col-lg-2 d-flex flex-column gap-4">
                <h5>Company</h5>
                <div class="item--footer d-flex flex-column">
                    <a href="#">About Us</a>
                    <a href="#">Blog</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Pricing</a>
                    <a href="#">Testimonials</a>
                </div>
            </div>
            <!-- support -->
            <div class="col-lg-2 d-flex flex-column gap-4">
                <h5>Support</h5>
                <div class="item--footer d-flex flex-column">
                    <a href="#">Help center</a>
                    <a href="#">Terms of service</a>
                    <a href="#">Legal</a>
                    <a href="#">Privacy policy</a>
                    <a href="#">status</a>
                </div>
            </div>
            <div class="col-lg-3 d-flex flex-column gap-2">
                <h5>Stay up to date</h5>
                <div class="input--content d-flex">
                    <input type="text" placeholder="Your email address" />
                    <i class="far fa-paper-plane" style="cursor: pointer"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
