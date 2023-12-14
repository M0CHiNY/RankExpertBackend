<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rankexperts
 */

?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Index HTML</title>
    <link rel="icon" href="favicon.ico">
</head>

<body>
    Вова привіт!
    <div class="container-big">
        <header class="header">
            <div class="container">
                <div class="header__inner">

                    <!-- logo start -->
                    <div class="logo-box">
                        <a href="#" class="logo-box__link">
                            <img class="logo-box__img" src="images/logo-header.png" alt="">
                        </a>
                    </div>
                    <!-- logo end -->

                    <div class="header__navigation">
                        <!-- navigation menu start-->
                        <div class="mob-nav" id="mob-nav">
                            <div data-ui-dialog-backdrop class="mob-nav-backdrop"></div>
                            <div data-ui-dialog-content class="mob-nav-content">
                                <div class="mob-nav-content__inner">

                                    <!-- logo start mobile-->
                                    <div class="logo-box logo-box--mobile">
                                        <a href="#" class="logo-box__link">
                                            <img class="logo-box__img" src="../images/logo-header.png" alt="">
                                        </a>
                                    </div>
                                    <!-- logo end mobile-->

                                    <button type="button" aria-label="Close" class="mob-nav-close" data-ui-dismiss>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                            viewBox="0 0 50 50" fill="none">
                                            <path d="M35.1562 16L14.8438 36.3125M14.8438 16L35.1562 36.3125"
                                                stroke="#201F1D" stroke-width="4.6875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <nav class="nav">
                                    <ul class="nav-menu">
                                        <li><a href="#">Home</a></li>
                                        <li>
                                            <a href="#">Online Marketing</a>
                                            <ul class="nav-submenu" id="level-1">
                                                <li>
                                                    <a href="#">Search Engine Advertising (SEA)</a>
                                                    <ul class="nav-submenu" id="level-2">
                                                        <li><a href="#">Food & Treats</a></li>
                                                        <li><a href="#">Toys</a></li>
                                                        <li><a href="#">Beds & Furniture</a></li>
                                                        <li><a href="#">Outdoor Supplies</a></li>
                                                        <li>
                                                            <a href="#">Clothing</a>
                                                            <ul class="nav-submenu" id="level-3">
                                                                <li><a href="#">Sweaters and Hoodies</a></li>
                                                                <li><a href="#">Raincoats</a></li>
                                                                <li><a href="#">T-Shirts</a></li>
                                                                <li><a href="#">Booties</a></li>
                                                                <li><a href="#">Hats/Caps</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <a href="#">Search Engine Optimization (SEO)</a>
                                                    <ul class="nav-submenu" id="level-2">
                                                        <li><a href="#">Food & Treats</a></li>
                                                        <li><a href="#">Toys</a></li>
                                                        <li><a href="#">Beds & Furniture</a></li>
                                                        <li><a href="#">Outdoor Supplies</a></li>
                                                        <li>
                                                            <a href="#">Clothing</a>
                                                            <ul class="nav-submenu" id="level-3">
                                                                <li><a href="#">Sweaters and Hoodies</a></li>
                                                                <li><a href="#">Raincoats</a></li>
                                                                <li><a href="#">T-Shirts</a></li>
                                                                <li><a href="#">Booties</a></li>
                                                                <li><a href="#">Hats/Caps</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <a href="#">Social Media Marketing (SMM)</a>
                                                    <ul class="nav-submenu" id="level-2">
                                                        <li><a href="#">Food & Treats</a></li>
                                                        <li><a href="#">Toys</a></li>
                                                        <li><a href="#">Beds & Furniture</a></li>
                                                        <li><a href="#">Outdoor Supplies</a></li>
                                                        <li>
                                                            <a href="#">Clothing</a>
                                                            <ul class="nav-submenu" id="level-3">
                                                                <li><a href="#">Sweaters and Hoodies</a></li>
                                                                <li><a href="#">Raincoats</a></li>
                                                                <li><a href="#">T-Shirts</a></li>
                                                                <li><a href="#">Booties</a></li>
                                                                <li><a href="#">Hats/Caps</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>

                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">Blog</a>

                                        </li>
                                        <li>
                                            <a href="#">Showcases</a>

                                        </li>
                                        <li>
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="lang-switcher-mobile">
                                    <ul class="lang-switcher-mobile__list">
                                        <li class="lang-switcher-mobile__item current">
                                            <a class="lang-switcher-mobile__link " href="">
                                                Eng
                                            </a>
                                        </li>
                                        <li class="lang-switcher-mobile__item ">
                                            <a class="lang-switcher-mobile__link" href="">
                                                Ger
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- navigation menu end-->
                        <!-- mobile btn start-->
                        <button type="button" aria-label="Navigation" class="mob-nav-toggler" data-ui-toggle="mob-nav">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.33333 37.5H41.6667C42.8125 37.5 43.75 36.5625 43.75 35.4167C43.75 34.2708 42.8125 33.3333 41.6667 33.3333H8.33333C7.1875 33.3333 6.25 34.2708 6.25 35.4167C6.25 36.5625 7.1875 37.5 8.33333 37.5ZM8.33333 27.0833H41.6667C42.8125 27.0833 43.75 26.1458 43.75 25C43.75 23.8542 42.8125 22.9167 41.6667 22.9167H8.33333C7.1875 22.9167 6.25 23.8542 6.25 25C6.25 26.1458 7.1875 27.0833 8.33333 27.0833ZM6.25 14.5833C6.25 15.7292 7.1875 16.6667 8.33333 16.6667H41.6667C42.8125 16.6667 43.75 15.7292 43.75 14.5833C43.75 13.4375 42.8125 12.5 41.6667 12.5H8.33333C7.1875 12.5 6.25 13.4375 6.25 14.5833Z"
                                    fill="#201F1D" />
                            </svg>
                        </button>
                        <!-- mobile btn end-->
                    </div>
                    <div class="header__box">
                        <button class="btn btn-modal" type="button" data-ui-toggle="my-dialog">Get started</button>
                        <ul class="lang-switcher">
                            <li class="lang-switcher__item ">
                                <a href="#" class="lang-switcher-link current">
                                    Eng
                                </a>
                            </li>
                            <li class="lang-switcher__item">
                                <a href="#" class="lang-switcher-link">
                                    Ger
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <a class="up-arrow" href="#" id="up">
                <p>&#8593;</p>
            </a>