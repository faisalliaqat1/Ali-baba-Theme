<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Papes
 */

?>
<!DOCTYPE html>
<html data-wf-page="639afb250c5a452081b7b6a5" data-wf-site="639afb250c5a45228bb7b6a4" lang="en">
<head>
    <base href="https://www.pepes.co.uk/" />

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon" sizes="180x180" href="https://www.pepes.co.uk/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://www.pepes.co.uk/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://www.pepes.co.uk/favicon-16x16.png">
<link rel="manifest" href="https://www.pepes.co.uk/site.webmanifest">
<link rel="mask-icon" href="https://www.pepes.co.uk/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<title>Pepe's Piri Piri</title>

<meta name="description" content="The Home of Fresh Flame Grilled Pepe'licious Chicken. 167 Stores Nationwide">
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/webflow.css" rel="stylesheet" type="text/css">
<link href="css/pepes-piri-piri.webflow.css?v=dbced3f50a15694ef4d1a662b95905f5" rel="stylesheet" type="text/css">

<!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" rel="stylesheet" />
<link href="css/block-builder-new.css" rel="stylesheet">
<link href="css/custom_styles.css?v=876118e12c8ed74ab8e8a1b5827cc9a9" rel="stylesheet">
    <!--  slick slider start  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <style type="text/css">
		.big-sllider-container {color: inherit; text-decoration: none;}
        .slide-item.slick-slide.slick-active {
            position: relative;
        }
        .slide-item.slick-slide::before {
            content: "";
            display: block;
            position: absolute;
            left: -50%;
            top: 0;
            width: 50%;
            height: 100%;
            background: rgb(0, 0, 0);
            background: -moz-linear-gradient(270deg, rgba(0, 0, 0, 0.53) 0%, rgba(216, 216, 216, 0) 100%);
            background: -webkit-linear-gradient(270deg, rgba(0, 0, 0, 0.53) 0%, rgba(216, 216, 216, 0) 100%);
            background: linear-gradient(270deg, rgba(0, 0, 0, 0.53) 0%, rgba(216, 216, 216, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000", endColorstr="#d8d8d8", GradientType=1);
            transition: opacity 300ms ease;
            opacity: 0;
            z-index: 1;
        }
        .slide-item.slick-slide::after {
            content: "";
            display: block;
            position: absolute;
            right: -50%;
            top: 0;
            width: 50%;
            height: 100%;
            background: rgb(216, 216, 216);
            background: -moz-linear-gradient(270deg, rgba(216, 216, 216, 0) 0%, rgba(0, 0, 0, 0.53) 100%);
            background: -webkit-linear-gradient(270deg, rgba(216, 216, 216, 0) 0%, rgba(0, 0, 0, 0.53) 100%);
            background: linear-gradient(270deg, rgba(216, 216, 216, 0) 0%, rgba(0, 0, 0, 0.53) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#d8d8d8", endColorstr="#000000", GradientType=1);
            transition: opacity 300ms ease;
            opacity: 0;
            z-index: 1;
        }
        .slide-item.slick-slide.slick-current+.slick-active::before,
        .slide-item.slick-slide.slick-current+.slick-active::after {
            opacity: 1;
        }
        ul.slick-dots {
            display: flex;
            align-items: center;
            justify-content: center;
            list-style-type: none;
            padding: 20px 30px;
        }
        .slick-dots li button {
            font-size: 1px;
            color: #f6dc96;
            background: #f6dc96;
            border-radius: 7px;
            line-height: 1;
            display: block;
            width: 14px;
            height: 8px;
            overflow: hidden;
            margin: 0px 7px;
            transition: all 300ms ease;
        }
        .slick-dots li.slick-active button {
            background: #fff;
            width: 200px;
        }
        @media(max-width:991px) {
            .slide-item.slick-slide.slick-current+.slick-active::before,
            .slide-item.slick-slide.slick-current+.slick-active::after {
                opacity: 0;
            }
        }
        @media (max-width: 991px) {
          .slick-dots li.slick-active button {
              background: #fff;
              width: 100px;
          }
        }
        @media (max-width: 768px) {
          .slick-dots li.slick-active button {
              background: #fff;
              width: 20px;
          }
          .slick-dots li button {
            margin: 0px 4px;
          }
          .w-slider-arrow-left, .w-slider-arrow-right {
            display: none;
          }
        }
    </style>
    <!--  slick slider end  -->
    <style type="text/css">
        body {
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
        }
    </style>
    <style type="text/css">
        .wyf-bg {
            width: calc(50% + 300px);
        }
    </style>
    <!--  skew up animation script start  -->
    <style>
        .word-line {
            overflow: hidden;
        }
        .skew-up {
            opacity: 0;
        }
    </style>
    <!--  skew up animation script end  -->

    <style>
          .homepage-top.wf-section.visibility-desktop .slider-video-container {
        padding-top: 50%;
      }
      .homepage-top.wf-section.visibility-mobile .slider-video-container {
        padding-top: 0%;
      }
      .homepage-top.wf-section.visibility-mobile .slider-video-container > video {
        position: relative;
        display: block;
      }
      .slide-img-container {
        width: 100%;
        left: 0;
        top: 0;
        right: 0;
        position: relative;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .slide-img-container.sic-desktop {
        height: 650px;
      }
      .slide-img-container.sic-tablet {
        height: 400px;
      }
      @media (min-width: 1351px) {
        .slide-img-container.sic-desktop {
          display: block;
        }
        .slide-img-container.sic-tablet {
          display: none;
        }
      }
      @media (max-width: 1350px) {
        .slide-img-container.sic-desktop {
          display: none;
        }
        .slide-img-container.sic-tablet {
          display: block;
        }
      }

    </style>
<?php wp_head();?>
</head>
