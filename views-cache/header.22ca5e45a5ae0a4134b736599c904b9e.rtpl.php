<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>E.E Professor Abel Freire Coelho </title>

    <!-- Favicon -->
    <link rel="icon" href="/views/img/icon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="/views/style.css">
    
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
  
    -->
  
    <link rel="icon" href="/views/img/core-img/icon2.png">
  
    <link rel="stylesheet" href="/views/adm/admin/dist/css/skins/skin-blue.min.css">

    <style>
        .input-group{
               width: 70%;
               margin-left: 15%;
               margin-bottom: 8%;

        }
        .form-control{
            border-radius: 16px 0 0 16px;
            border-right: white;
        }
        .btn{
            border-radius: 0  16px  16px 0;
            background: none;
            border-width: 1px;
            border-color: gainsboro;
            border-left: white;
        }



        #img_bib{
            width: 110px;
            height: 164px;
            overflow: hidden;
          
        }
        .row_books{
            background-color: rgb(240, 240, 240);
            margin: 0 10px 20px 0;
            width: 560px;
            height: 164px;

            border-radius: 0 4px 4px 0;
            
        }
        .row .row_books .label_books{

            /* width: 100%; */
            color: #1b2cc5;
            margin: none;
            

        }
        .div_img{
            /* margin-right: 4px; */
            display: inline-block;
        }
        .div_label{
            margin-top: 10px;
            display: inline-block;
            margin-left: 10px;
            margin-right: 10px;
            width:  15%;
            position: absolute;
            

        }
        .div_label_2{
            margin-top: 10px;
            display: inline-block;
            margin-left: 230px;
            width: 13%;
            
            position: absolute;
        }

        #row-grid-scroll{
        font-family: "Montserrat", sans-serif;
        font-size: 14px;
    }

    #row-grid-scroll::-webkit-scrollbar {
        width: 13px;
        background: #e9ebff;
    }

    #row-grid-scroll::-webkit-scrollbar-thumb {
        background: #1b2cc1;
        border-radius: 10px;
    }
    #row-grid-scroll{
      overflow-y: scroll;
      height:350px;
    }

    #row-grid{
      /* overflow-y: scroll;  */
      height:70%;
    } 
    
    #row-pages{

      height: 5px;

      position: relative;

    }
    /* Breadcumb Area CSS */

.breadcumb-area {
    position: relative;
    z-index: 10;
    width: 100%;
    height: 200px;
}

.breadcumb-area .bradcumbContent {
    width: 500px;
    height: 110px;
    background: #1b2cc5;
    background: -webkit-linear-gradient(to right, #1b2cc5, #1b2cc5);
    background: linear-gradient(to right, #1b2cc5, #1b2cc5);
    position: absolute;
    bottom: -60px;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    left: 50%;
    z-index: 30;
}

@media only screen and (max-width: 767px) {
    .breadcumb-area .bradcumbContent {
        width: 280px;
    }
}

.breadcumb-area .bradcumbContent h2 {
    text-align: center;
    line-height: 110px;
    font-size: 36px;
    color: #ffffff;
}

@media only screen and (max-width: 767px) {
    .breadcumb-area .bradcumbContent h2 {
        font-size: 24px;
    }
}


/* About Us Content Area CSS */

.about-slides {
    position: relative;
    z-index: 1;
}

.about-slides .owl-prev,
.about-slides .owl-next {
    background: #1b2cc5;
    background: -webkit-linear-gradient(to right, #1b2cc5, #1b2cc5);
    background: linear-gradient(to right, #1b2cc5, #1b2cc5);
    width: 56px;
    height: 56px;
    line-height: 56px;
    color: #ffffff;
    top: 50%;
    margin-top: -28px;
    left: 5%;
    position: absolute;
    z-index: 10;
    text-align: center;
    font-size: 22px;
    font-weight: 700;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}

@media only screen and (max-width: 767px) {
    .about-slides .owl-prev,
    .about-slides .owl-next {
        width: 36px;
        height: 36px;
        line-height: 36px;
        margin-top: -18px;
    }
}

.about-slides .owl-next {
    left: auto;
    right: 5%;
}


/* Teachers Area CSS */

.single-teachers-area {
    position: relative;
    z-index: 1;
}

.single-teachers-area .teachers-info h5 {
    font-weight: 400;
    margin-bottom: 3px;
}

.single-teachers-area .teachers-info span {
    color: #1b2cc5;
    font-size: 14px;
}


/* Blog Area CSS */

@media only screen and (max-width: 767px) {
    .academy-blog-sidebar {
        margin-top: 100px;
    }
}

.single-blog-post {
    background-color: #eef3f6;
    padding: 30px;
}

.single-blog-post .post-title {
    font-size: 24px;
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}

.single-blog-post .post-title:hover,
.single-blog-post .post-title:focus {
    color: #1b2cc5;
}

.single-blog-post .post-meta {
    margin-bottom: 30px;
}

.single-blog-post .post-meta p {
    font-size: 12px;
    color: #1b2cc5;
    margin-bottom: 0;
}

.single-blog-post .post-meta p a {
    font-size: 12px;
    color: #1b2cc5;
    font-weight: 500;
}

.academy-pagination-area .pagination .page-item .page-link {
    width: 36px;
    height: 36px;
    background-color: #eef3f6;
    display: block;
    padding: 0;
    border: none;
    margin-right: 10px;
    color: #242424;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    line-height: 36px;
}

.academy-pagination-area .pagination .page-item .page-link:hover,
.academy-pagination-area .pagination .page-item .page-link:focus {
    background-color: #1b2cc5;
    color: #ffffff;
}

.academy-pagination-area .pagination .page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.academy-pagination-area .pagination .page-item:last-child .page-link {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.academy-pagination-area .pagination .page-item.active .page-link {
    background-color: #1b2cc5;
    color: #ffffff;
}

.blog-post-search-widget form {
    position: relative;
    z-index: 1;
}

.blog-post-search-widget form input {
    width: 100%;
    height: 48px;
    border: none;
    background-color: #eef3f6;
    padding: 0 30px;
    font-size: 12px;
    font-style: italic;
}

.blog-post-search-widget form button {
    position: absolute;
    top: 0;
    right: 0;
    width: 55px;
    height: 48px;
    background-color: #1b2cc5;
    border: none;
    z-index: 10;
    cursor: pointer;
    color: #ffffff;
}

.blog-post-categories {
    background-color: #eef3f6;
    padding: 30px;
}

.blog-post-categories h5 {
    font-size: 18px;
    margin-bottom: 30px;
}

.blog-post-categories ul {
    padding-left: 30px;
}

.blog-post-categories ul li a {
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 10px;
    display: block;
}

.blog-post-categories ul li a:hover,
.blog-post-categories ul li a:focus {
    color: #1b2cc5;
}

.latest-blog-posts {
    background-color: #eef3f6;
    padding: 30px;
}

.latest-blog-posts h5 {
    font-size: 18px;
    margin-bottom: 30px;
}

.latest-blog-posts .latest-blog-post-thumb {
    flex:(0 0 66px);
    max-width: 66px;
    width: 66px;
    margin-right: 15px;
}

.latest-blog-posts .latest-blog-post-content .post-title h6 {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    font-weight: 500;
    margin-bottom: 3px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .latest-blog-posts .latest-blog-post-content .post-title h6 {
        font-size: 14px;
    }
}

.latest-blog-posts .latest-blog-post-content .post-title h6:hover,
.latest-blog-posts .latest-blog-post-content .post-title h6:focus {
    color: #1b2cc5;
}

.latest-blog-posts .latest-blog-post-content .post-date {
    font-size: 12px;
    color: #1b2cc5;
}

.map-area {
    position: relative;
    z-index: 2;
}

.map-area #googleMap {
    width: 100%;
    height: 650px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .map-area #googleMap {
        height: 500px;
    }
}


/* Contact Area CSS */

.contact-content {
    background-color: #eef3f6;
    padding: 100px 50px;
    position: relative;
    z-index: 15;
    top: -200px;
    margin-bottom: -100px;
}

@media only screen and (max-width: 767px) {
    .contact-content {
        padding: 50px 30px;
    }
}

.contact-content .section-heading {
    margin-bottom: 30px !important;
}

.contact-content .contact-social-info a {
    color: #1b2cc5;
    display: inline-block;
    margin-right: 30px;
}

.contact-content .contact-icon i {
    padding-top: 5px;
    display: inline-block;
    color: #1b2cc5;
}

.contact-content .contact-form-area {
    padding: 40px 20px;
    background-color: #ffffff;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .contact-content .contact-form-area {
        margin-top: 100px;
    }
}

@media only screen and (max-width: 767px) {
    .contact-content .contact-form-area {
        margin-top: 50px;
    }
}

.contact-content .contact-form-area .form-control {
    height: 55px;
    width: 100%;
    background-color: #eef3f6;
    font-size: 12px;
    font-style: italic;
    margin-bottom: 15px;
    border: none;
    border-radius: 0;
    padding: 15px 25px;
}

.contact-content .contact-form-area textarea.form-control {
    height: 200px;
}

.elements-title h2 {
    font-weight: 500;
}

.elements-title span {
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    display: block;
    color: #8e8e8e;
    margin-bottom: 15px;
}

.single-pie-bar h6 {
    font-weight: 500;
}

.single-cool-fact {
    position: relative;
    z-index: 1;
}

.single-cool-fact i {
    font-size: 45px;
    margin-bottom: 30px;
    display: block;
    color: #1b2cc5;
}

.single-cool-fact h3 {
    font-size: 48px;
    font-weight: 400;
    margin-bottom: 5px;
}

.single-cool-fact p {
    font-size: 16px;
    margin-bottom: 0;
}


/* Accordians */

.single-accordion.panel {
    background-color: #ffffff;
    border: 0 solid transparent;
    border-radius: 4px;
    box-shadow: 0 0 0 transparent;
    margin-bottom: 15px;
}

.single-accordion:last-of-type {
    margin-bottom: 0;
}

.single-accordion h6 {
    margin-bottom: 0;
    text-transform: uppercase;
}

.single-accordion h6 a {
    background-color: #f5f7fa;
    border-radius: 0;
    color: #141414;
    display: block;
    margin: 0;
    padding: 20px 60px 20px 20px;
    position: relative;
    font-size: 14px;
    text-transform: capitalize;
    font-weight: 500;
}

.single-accordion h6 a span {
    font-size: 10px;
    position: absolute;
    right: 20px;
    text-align: center;
    top: 23px;
}

.single-accordion h6 a span.accor-open {
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
}

.single-accordion h6 a.collapsed {
    background: #1b2cc5;
    background: -webkit-linear-gradient(to right, #1b2cc5, #1b2cc5);
    background: linear-gradient(to right, #1b2cc5, #1b2cc5);
    color: #ffffff;
}

.single-accordion h6 a.collapsed span.accor-close {
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
}

.single-accordion h6 a.collapsed span.accor-open {
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
}

.single-accordion .accordion-content {
    border-top: 0 solid transparent;
    box-shadow: none;
}

.single-accordion .accordion-content p {
    padding: 20px 15px 5px;
    margin-bottom: 0;
}


    </style>

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="/views/index.html"><img src="/views/img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/">Inicio</a></li>
                                    <li><a href="#">Sobre</a>
                                        <ul class="dropdown">
                                            <li><a href="/aboutus">Espaços</a></li>
                                            <li><a href="/course">Informações</a></li>
                                            <li><a href="/ensinomedio">Ensino</a></li>
                                            <li><a href="/contatos">Contatos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/eventos">Eventos</a></li>
                                    <li><a href="/radio">Rádio</a></li>
                                    <li><a href="/contact">Biblioteca</a></li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                        <!-- Rede sociais-->
                        <div class="redesSociais">
                            <table>
                             <tr>   
                            <td><div class="redes">
                                    <a href="https://www.facebook.com/pages/Escola-Estadual-Professor-Abel-Freire-Coelho/693309054135861" target="_blank"><img src="/views/img/core-img/iconf2.png" alt="" width="50" height="50" style="border-radius: 15px;"></a>
                            </div></td>
                            <td><div class="redes">
                                    <a href="https://www.instagram.com/geam_ac/?hl=pt-br" target="_blank"><img src="/views/img/core-img/iconi.png" alt="" width="50" height="50" style="border-radius: 15px;"></a>
                            </div></td>
                            </tr>
                            </table>
                        </div>
                        <!--Redes fim-->
                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(84) 3315-5668 </span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->