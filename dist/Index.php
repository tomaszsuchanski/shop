<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Bytes</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Style.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand d-md-none" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
            Digital Bytes
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasLabel">Digital Bytes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="Index.php">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="Smartphone.php">Smartphones</a></li>
                    <li class="nav-item"><a class="nav-link" href="Laptop.php">Laptops</a></li>
                    <li class="nav-item"><a class="nav-link" href="Computer.php">Computers</a></li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link d-none d-sm-inline-block" href="#" role="button" id="moreDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="moreDropdown">
                                <li><a class="dropdown-item teststyle" href="../php/Dashboard.php">Dashboard</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="Login.php">  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#8e8e8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M20.5899 22C20.5899 18.13 16.7399 15 11.9999 15C7.25991 15 3.40991 18.13 3.40991 22" stroke="#8e8e8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="Checkout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <svg width="64px" height="64px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>file_type_light_codeclimate</title><path d="M20.745,8.2,15.4,13.517l3.173,3.173,2.174-2.174,6.111,6.14L30,17.484Zm-6.317,6.287-3.144-3.143-8.05,8.05L2,20.627,5.173,23.8l1.234-1.263,4.084-4.055.793-.793,3.144,3.144L17.4,23.8l3.173-3.173L17.6,17.66l-3.173-3.173Z" style="fill:#000000"></path></g></svg>
                <p class="lead">Welcome to our online shop! Dive into a world of practicality and innovation with our carefully selected range of laptops, phones, and more. Whether you're a student, professional, or casual user, we've got the perfect device to suit your needs. Upgrade your digital experience today and stay ahead of the curve with our cutting-edge technology.</p>
            </div>
        </div>
    </section>
    <div class="gray container-fluid">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../images/Index/phone.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 lh-1 mb-3">Smartphones</h1>
                    <p class="lead">Discover the perfect balance of style and functionality with our curated selection of smartphones, designed to keep you seamlessly connected to the world and people around you.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
                <h1 class="display-5 lh-1 mb-3">Laptops</h1>
                <p class="lead">Your Gateway to Limitless Connectivity and Performance! Dive into a world of seamless computing with our selection of cutting-edge laptops. Designed for both work and play, these portable powerhouses deliver unmatched flexibility and efficiency. Experience the freedom to work from anywhere and create without boundaries.</p>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
               <img src="../images/Index/laptop.webp" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"  loading="lazy">
            </div>
        </div>
    </div>

    <div class="gray container-fluid">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../images/Index/pc.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 lh-1 mb-3">Computers</h1>
                    <p class="lead">Unleash Your Potential with Ultimate Performance! Transform your workspace into a productivity hub with our top-of-the-line PC desktops. Engineered for unrivaled speed, reliability, and customization. Whether you're tackling intensive projects, gaming at the highest level, or simply seeking a seamless computing experience, our desktops are up to the task. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
                <h1 class="display-5 lh-1 mb-3">Accessories</h1>
                <p class="lead"> Elevate Your Setup with Precision and Performance! Enhance your computing experience with our selection of digital accessories. From ultra-responsive mice to immersive gaming headsets and ergonomic keyboards, our peripherals are designed to complement your workflow and elevate your gameplay. Dive into a world of precision, comfort, and style as you take control of your digital domain. </p>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="../images/Index/keyboard.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
            </div>
        </div>
    </div>
</main>

<footer class="footer text-muted py-5">
    <div class="container">
        <p class="float-end mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484   q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
            </svg>&nbsp; Poland &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
                <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
            </svg> &nbsp; English</p>
        <p class="mb-0 small">Copyright &copy; 2024 Tomasz Suchański</p>
        <p class="mb-0 small"> <span class="footerItem"><a href="#">About</a> </span> <span class="footerItem"><a href="#">Contact</a> </span> <span class="footerItem"><a href="#">Resources</a> </span> <span class="footerItem"><a href="Legal.html">Legal</a> </span> </p>

    </div>
</footer>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
