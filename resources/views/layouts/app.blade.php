<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Character Set -->
    <meta charset="UTF-8">

    <!-- Viewport Settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Title -->
    <title>@yield('title')</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="A brief description of the page">
    <meta name="keywords" content="keyword1, keyword2, keyword3">
    <meta name="author" content="Author Name">

    <!-- Open Graph Meta Tags (for social media previews) -->
    <meta property="og:title" content="Your Page Title">
    <meta property="og:description" content="A brief description of the page">
    <meta property="og:image" content="URL to image">
    <meta property="og:url" content="URL to your page">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags (for Twitter previews) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Your Page Title">
    <meta name="twitter:description" content="A brief description of the page">
    <meta name="twitter:image" content="URL to image">

    <!-- Other Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap JS and Popper.js -->
    <!-- style.css -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</head>

<body aria-hidden="false">
    <div class="container-fluid header">
        <div class="row">
            <div class="col-md-12">
                <div class="container">

                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="{{ url('/') }}">GBWhatsApp</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#"> GBWhatsApp <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">GBWhatsApp Download</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">GB WhatsApp Pro</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>


    <div class="site-footer mt-5">
        <footer class="site-info" aria-label="Site" itemtype="https://schema.org/WPFooter" itemscope="">
            <div class="inside-site-info grid-container">
                <div class="copyright-bar">
                    © 2024 <a href="{{ url('/') }}"> GB WhatsApp</a> •
                    <a rel="nofollow" href="{{ url('/about') }}"> About Us</a> •
                    <a rel="nofollow" href="{{ url('/privacy_policy') }}"> Privacy Policy</a> •
                    <a rel="nofollow" href="{{ url('/disclaimer') }}"> Disclaimer</a>
                    • We are not associated with WhatsApp Messenger by any means. WhatsApp is a registered trademark of WhatsApp Inc. &amp; we just share independent work and make ends meet with the ad displayed on our site •
                </div>
            </div>
        </footer>
    </div>



    <!-- <div class="container mb-3">
            <div class="row">
                <div class="col-md-6 mt-3">
                    Copyright © 2024 GbApps.Org.Pk All Rights Reserved.
                </div>
                <div class="col-md-6 footerlink"
                    style="
              display: flex;
              justify-content: flex-end;
          ">
                    <a href="{{ url('/about') }}" class="mx-2">About</a>
                    <a href="{{ url('/disclaimer') }}" class="mx-2">Disclaimer</a>
                    <a href="{{ url('/privacy_policy') }}" class="mx-2">Privacy Policy</a>
                    <a href="{{ url('/download') }}" class="mx-2">Download</a>
                </div>
            </div>
        </div>  -->

    <span onclick="topFunction()" id="ScrollToTop" title="Go to top" style="display: block;">
        <i aria-label="Go to top" class="fa fa-angle-double-up"></i>
    </span>

    <script type="text/javascript">
        function show_menu_mob() {
            document.getElementById("nav_wrap").className += 'show_mob_menu';
        }

        function hide_menu_mob() {
            document.getElementById("nav_wrap").className = '';
        }

        function on_search() {
            document.getElementById("search_wrap").style.display = "block";
            document.getElementById("kwd").focus();
        }

        function off_search() {
            document.getElementById("search_wrap").style.display = "none";
        }

        var ScrollButton = document.getElementById("ScrollToTop");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (window.pageYOffset > 20) {
                ScrollButton.style.display = "block";
            } else {
                ScrollButton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollIntoView({
                behavior: "smooth"
            });
        }

        function scrollToi(id) {
            this.event.preventDefault();
            document.getElementById(id).scrollIntoView({
                behavior: "smooth"
            });


            /*const yOffset = -70; 
            const element = document.getElementById(id);
            const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
            
            window.scrollTo({top: y, behavior: 'smooth'});*/
        }

        function scrollToc(to_id) {
            this.event.preventDefault();
            var element = document.getElementById(to_id);
            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            setTimeout(function() {
                window.location.hash = to_id;
            }, 100);
        }
    </script>


</body>

</html>