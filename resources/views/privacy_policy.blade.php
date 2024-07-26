@extends('layouts.app')

@section('title', 'Privary Policy')

@section('content')
<div class="px-5">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
    </ol>
  </nav>
  
  <h1><strong>Privacy Policy</strong></h1>
  <div id="toc_container" class="no_bullets my-5"><p class="toc_title">Contents <span class="toc_toggle"><span class="toc_brackets">[</span><a href="#">hide</a><span class="toc_brackets">]</span></span></p><ul class="toc_list"><li><a href="#Who_we_are"><span class="toc_number toc_depth_1">1</span> Who we are</a></li><li><a href="#Comments"><span class="toc_number toc_depth_1">2</span> Comments</a></li><li><a href="#Media"><span class="toc_number toc_depth_1">3</span> Media</a></li><li><a href="#Cookies"><span class="toc_number toc_depth_1">4</span> Cookies</a></li><li><a href="#Embedded_content_from_other_websites"><span class="toc_number toc_depth_1">5</span> Embedded content from other websites</a></li><li><a href="#Who_do_we_share_your_data_with"><span class="toc_number toc_depth_1">6</span> Who do we share your data with</a></li><li><a href="#How_long_we_retain_your_data"><span class="toc_number toc_depth_1">7</span> How long we retain your data</a></li><li><a href="#What_rights_you_have_over_your_data"><span class="toc_number toc_depth_1">8</span> What rights you have over your data</a></li><li><a href="#Where_your_data_is_sent"><span class="toc_number toc_depth_1">9</span> Where your data is sent</a></li></ul></div>

  <h2 class="wp-block-heading"><span id="Who_we_are">Who we are</span></h2>
  <p>Our website address is: https://gbwa.download.</p>

  <h2 class="wp-block-heading"><span id="Comments">Comments</span></h2>
  <p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p>
  <p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>
    <h2 class="wp-block-heading"><span id="Media">Media</span></h2>
    <p><strong class="privacy-policy-tutorial">&nbsp;</strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>
    <h2 class="wp-block-heading"><span id="Cookies">Cookies</span></h2>
    <p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>

    <p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>

    <p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>
    <p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>

    <h2 class="wp-block-heading"><span id="Embedded_content_from_other_websites">Embedded content from other websites</span></h2>

    <p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>
    <p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>

    
    <h2 class="wp-block-heading"><span id="Who_do_we_share_your_data_with">Who do we share your data with</span></h2>
    <p>If you request a password reset, your IP address will be included in the reset email.</p>
    <h2 class="wp-block-heading"><span id="How_long_we_retain_your_data">How long we retain your data</span></h2>
    <p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>
    <p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>
    
    <h2 class="wp-block-heading"><span id="What_rights_you_have_over_your_data">What rights you have over your data</span></h2>
    <p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>

    <h2 class="wp-block-heading"><span id="Where_your_data_is_sent">Where your data is sent</span></h2>
    
    <p>Visitor comments may be checked through an automated spam detection service.</p>

    


</div>

@endsection