<!DOCTYPE html>
    <html>

    <head>
        <title>@yield('title')</title>
        <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Bootstrap JS and Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <style>
            .navbar {
                background: green !important;
            }
            .navbar-brand{
                color: white !important;
                font-family: inherit;
    font-weight: bold;
    text-transform: unset;
    font-size: 25px;


            }
            .nav-item a {
                color: white !important;
    font-size: 15px;
    font-weight: 500;
}
            .header {
                width: 100%;
                background: green !important;
                border: none;
                box-shadow: 0 2px 0 0 #f5f5f5;
                /* height: 54px; */
                margin-bottom: 20px;
            }

            .navbar-text a {
                color: #fff !important;
                text-decoration: none;
                font-size: large;
                font-weight: bold;
                text-transform: uppercase;

            }

            .h1 {
                font-family: 'system-ui';
                color: black;
                font-size: 36px !important;
            }
            .su-button {
    color: #FFFFFF;
    background-color: #ff392f;
    border-color: #cc2e26;
    border-radius: 12px;
}
.inside-article a, .paging-navigation a, .comments-area a, .page-header a {
    color: var(--accent-2);
}
.su-button-style-3d {
    border-bottom-style: solid;
    border-bottom-width: 6px;
}
.su-button {
    display: inline-block !important;
    text-align: center;
    text-decoration: none !important;
    box-sizing: content-box !important;
    transition: all .2s;
}

#toc_container {
    background: #f9f9f9;
    border: 1px solid #aaa;
    padding: 10px;
    margin-bottom: 1em;
    width: auto;
    display: table;
    font-size: 95%;
}
#toc_container p.toc_title {
    text-align: center;
    font-weight: 700;
    margin: 0;
    padding: 0;
}
#toc_container p.toc_title+ul.toc_list {
    margin-top: 1em;
}
#toc_container.no_bullets li, #toc_container.no_bullets ul, #toc_container.no_bullets ul li, .toc_widget_list.no_bullets, .toc_widget_list.no_bullets li {
    background: 0 0;
    list-style-type: none;
    list-style: none;
}
#toc_container li, #toc_container ul {
    margin: 0;
    padding: 0;
}
#toc_container a {
    text-decoration: none;
    text-shadow: none;
}

.su-box {
    border-color: #004200;
    border-radius: 3px;
    margin: 0 0 1.5em;
    border-width: 2px;
    border-style: solid;
}

.su-box-title {
background-color: #067506;
    color: #FFFFFF;
    border-top-left-radius: 1px;
    border-top-right-radius: 1px;
    display: block;
    padding: .5em 1em;
    font-weight: 700;
    font-size: 1.1em;
}

.su-box-content {
    background-color: #fff;
    color: #444;
    padding: 1em;
}

.su-u-trim>:first-child {
    margin-top: 0;
}

.su-u-trim>:first-child {
    margin-top: 0;
}
table {
    margin: 0 0 1.5em;
    width: 100%;
}
table {
    border-collapse: separate;
    border-spacing: 0;
    border-width: 1px 0 0 1px;
    margin: 0 0 1.5em;
    width: 100%;
}
table, td, th {
    border: 1px solid rgba(0, 0, 0, .1);
}
td {
    border-width: 0 1px 1px 0;
    padding: 10px;
}
.su-note {
    margin: 0 0 1.5em;
    border-color: #9ae095;
    border-width: 1px;
    border-style: solid;
}
.su-note-inner {
    padding: 1em;
    border-width: 1px;
    border-style: solid;
}
h2 {
    font-weight: 600;
    font-size: 30px;
}
.sub-note{
background-color: #ffffff;
    border-color: #ffffff;
    color: #000000;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
}
.su-note-inner {
    padding: 1em;
    border-width: 1px;
    border-style: solid;
}

#snippet-box {
    color: #333333;
    background: #f5f5f5;
    border: 1px solid #acacac;
    font-family: inherit;
    font-size: 13px;
    padding: 0;
    margin: 0 0 15px;
    width: 100%;
    max-width: 600px;
    display: block;
}

.snippet-title {
    background: #E4E4E4;
    color: #333333;
    border-bottom: 1px solid #ACACAC;
    display: block;
    position: relative;
    font-family: inherit;
    font-size: 14px;
    font-weight: 700;
    background: #e4e4e4;
    border-bottom: 1px solid #acacac;
    clear: both;
    padding: .5em 1em;
    width: 100%;
}

.ratings {
    position: absolute;
    right: 1em;
    top: 50%;
    transform: translateY(-50%);
}
.star-rating-control div.rating-cancel, .star-rating-control div.star-rating {
    float: left;
    width: 17px;
    height: 17px;
    text-indent: -999em;
    cursor: pointer;
    display: block;
    background: 0 0;
    overflow: hidden;
}
div.star-rating a {
    display: block;
    width: 16px;
    height: 100%;
    background-position: 0 -38px;
    border: 0;
}

div.star-rating, div.star-rating a {
    background: url({{ asset('/img/star.png') }}) no-repeat 0 0;
}


.aio-info {
    width: calc(100% - 200px);
    display: inline-block;
    vertical-align: top;
}
.snippet-label-img {
    width: 40%;
    display: inline-block;
    text-align: right;
    font-size: 13px;
    font-weight: 700;
    margin: 0;
    padding: .3em .5em;
    vertical-align: top;
}

.site-info a{
  color: black;
  text-decoration: none;
}
.site-info {
    text-align: center;
    font-size: 15px;
}.site-info {
    text-align: center;
    font-size: 15px;
}
.inside-site-info {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px 40px;
}

.grid-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 1200px;
}

    

            #ScrollToTop {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 999999999;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: #222;
                color: white;
                cursor: pointer;
                border-radius: 3px;
                width: 40px;
                height: 40px;
                text-align: center;
                line-height: 35px;
                vertical-align: middle;
            }

            .fa-angle-double-up:before {
                content: "\f102";
            }

            #ScrollToTop i {
                line-height: 40px;
            }

            h2 {
                font-size: 24px !important;
                line-height: 32px !important;
                font-weight: bold;
                margin: 10px 0;
                color: black;
            }
          h3 {
            font-size: 20px;
            margin-bottom: 20px;
            line-height: 1.2em;
            font-weight: 400;
            text-transform: none;
        }

        .su-list ul li>i {
    color: #dd100a;
    position: absolute;
    left: 0;
    top: 4px;
    width: 1.3em;
    height: 1.3em;
    line-height: 1.3em;
    text-align: center;
}

.custom-list {
            list-style-type: none !important; /* Remove default bullets */
            padding: 0;
        }
        ul.custom-list li {
            position: relative;
            padding-left: 20px; /* Space for the symbol */
        }
        ul.custom-list li::before {
            content: '>'; /* The symbol to use */
            position: absolute;
            left: 0;
            color: red; /* Color of the symbol */
            /* background: red; */
            /* border-radius: 100%; */
        }

        /* about us page */
        .aboutpage{
            text-decoration: none;
        }
    
        </style>
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

        <div class="container" >
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
            • We are not associated with WhatsApp Messenger by any means. WhatsApp is a registered trademark of WhatsApp Inc. &amp; we just share independent work and make ends meet with the ad displayed on our site • </div>
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
