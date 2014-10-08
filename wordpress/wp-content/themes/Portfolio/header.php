<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Luc Matagne :: Portfolio</title>
    <meta name="description" content="Portfolio de Luc Matagne.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri () ?>/style.css">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5
            || document.write('<script src="<?php echo get_template_directory_uri() ?>/js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="menu" id="menu">
    <a href="#" class="menu--link">A propos</a>
    <a href="#" class="menu--link">Travaux</a>
    <svg id="logoSVG">
        <circle cx="115" cy="115" r="115" fill="#2ecc71"></circle>
        <g transform="translate(200,150), matrix(.8,0,0,-.8,0,0)">
            <path
                d="m 0,0 c -0.764,4.354 -1.424,9.109 -1.976,14.265 -0.556,5.152 -1.076,10.426 -1.56,15.829 -0.49,5.398 -1.147,10.244 -1.981,14.54 -0.83,4.293 -1.975,7.699 -3.431,10.215 -1.457,2.514 -3.367,3.526 -5.725,3.038 -2.08,-0.492 -4.197,-1.689 -6.347,-3.59 -2.155,-1.904 -4.269,-4.172 -6.35,-6.811 -2.08,-2.639 -4.094,-5.429 -6.035,-8.374 -1.944,-2.944 -3.746,-5.645 -5.411,-8.097 -0.279,-0.369 -0.556,0.09 -0.832,1.38 -0.28,1.288 -0.556,3.004 -0.833,5.153 -0.282,2.145 -0.521,4.601 -0.727,7.362 -0.211,2.76 -0.418,5.399 -0.625,7.914 -0.21,2.515 -0.386,4.723 -0.521,6.627 -0.14,1.901 -0.209,3.097 -0.209,3.589 -0.416,4.785 -1.113,8.743 -2.081,11.872 -0.972,3.129 -3.122,4.57 -6.453,4.326 -2.913,-1.105 -5.62,-3.13 -8.117,-6.075 -2.496,-2.945 -4.718,-6.197 -6.66,-9.754 -1.944,-3.561 -3.642,-7.18 -5.099,-10.861 -1.457,-3.68 -2.465,-6.809 -3.018,-9.387 0.137,4.906 0.345,9.232 0.625,12.976 0.276,3.742 0.519,7.272 0.728,10.584 0.208,3.313 0.416,6.471 0.625,9.48 0.208,3.006 0.312,6.226 0.312,9.663 0,1.104 -0.072,2.852 -0.208,5.246 -0.14,2.392 -0.453,4.785 -0.938,7.178 -0.487,2.393 -1.144,4.57 -1.976,6.534 -0.832,1.962 -1.873,3.13 -3.123,3.498 -2.08,0.735 -4.094,0.888 -6.035,0.459 -1.945,-0.431 -4.199,-1.264 -5.829,-2.3 -1.186,-0.755 -1.04,-1.229 -3.538,-3.682 -2.498,-2.456 -5.411,-6.013 -8.74,-10.675 -2.778,-3.929 -5.516,-8.467 -8.223,-13.621 -2.704,-5.154 -5.246,-10.276 -7.596,-15.37 -5.354,-11.607 -24.815,-56.812 -27.329,-58.08 -2.514,-1.269 -12.204,-4.972 -21.925,-6.821 -9.721,-1.848 -16.002,-1.98 -19.28,-2.307 -3.283,-0.326 -6.21,-0.111 -8.779,0.647 -2.573,0.756 -4.396,2.373 -5.473,4.85 -0.089,1.971 0.354,4.984 1.327,9.032 0.969,4.05 2.244,8.699 3.829,13.953 1.583,5.253 3.451,10.91 5.604,16.975 2.149,6.061 4.359,12.165 6.63,18.31 2.268,6.143 4.497,12.133 6.691,17.971 2.19,5.836 4.167,11.097 5.926,15.777 1.758,4.682 3.233,8.645 4.419,11.896 1.188,3.25 1.879,5.377 2.078,6.379 -1.308,0.802 -2.446,1.313 -3.42,1.535 -0.98,0.221 -1.906,0.314 -2.779,0.277 -0.878,-0.036 -1.716,-0.159 -2.522,-0.368 -0.809,-0.208 -1.694,-0.345 -2.659,-0.402 -0.253,-1.111 -0.704,-3.225 -1.354,-6.334 -0.649,-3.112 -1.835,-7.739 -3.562,-13.883 -1.725,-6.145 -4.15,-13.964 -7.266,-23.46 -3.12,-9.496 -7.248,-21.13 -12.384,-34.897 -1.777,-5.02 -3.336,-9.456 -4.676,-13.318 -1.344,-3.86 -2.471,-7.384 -3.39,-10.564 -0.919,-3.181 -1.549,-6.027 -1.891,-8.538 -0.344,-2.508 -0.283,-4.986 0.189,-7.426 2.224,-3.889 4.863,-6.121 7.912,-6.711 3.046,-0.588 7.044,-0.763 11.992,-0.526 2.219,0.384 4.894,1.053 8.029,2.007 3.13,0.953 11.368,2.17 18.811,3.682 7.444,1.512 19.746,7.585 22.621,9.563 0.359,0.092 23.496,46.518 25.233,50.935 1.733,4.417 3.85,9.172 6.348,14.265 2.497,5.09 5.166,9.938 8.013,14.54 2.841,4.602 5.828,8.588 8.95,11.965 3.122,3.373 6.208,5.613 9.263,6.718 0.691,0.121 1.108,0.184 1.249,0.184 0.134,0 0.134,-0.063 0,-0.184 -0.141,-0.124 -0.314,-0.276 -0.522,-0.461 -0.208,-0.183 -0.243,-0.338 -0.103,-0.459 0.415,-2.701 0.691,-6.414 0.832,-11.137 0.135,-4.725 0.208,-9.45 0.208,-14.172 0,-4.725 -0.036,-8.928 -0.105,-12.608 -0.071,-3.681 -0.103,-5.707 -0.103,-6.074 0,-2.945 -0.037,-5.43 -0.104,-7.454 -0.071,-2.025 -0.176,-4.45 -0.313,-7.271 0,-3.193 -0.036,-5.952 -0.104,-8.283 -0.072,-2.333 -0.176,-4.724 -0.311,-7.179 -0.14,-2.455 -0.281,-5.216 -0.417,-8.282 -0.14,-3.069 -0.416,-6.873 -0.832,-11.412 0,-0.247 -0.105,-1.565 -0.313,-3.958 -0.208,-2.391 -0.453,-5.124 -0.728,-8.19 -0.28,-3.068 -0.556,-6.014 -0.832,-8.835 -0.282,-2.824 -0.489,-4.849 -0.625,-6.073 2.357,-1.962 4.091,-3.343 5.204,-4.143 1.107,-0.797 2.704,-1.132 4.786,-1.011 -0.281,3.804 -0.488,7.085 -0.625,9.846 -0.139,2.762 -0.207,5.338 -0.207,7.732 0,2.392 0.102,4.814 0.313,7.269 0.207,2.454 0.446,5.338 0.728,8.653 0.415,2.207 0.692,4.417 0.832,6.625 0.135,2.208 0.519,4.876 1.143,8.006 0.626,3.128 1.667,6.932 3.124,11.411 1.457,4.479 3.571,10.032 6.347,16.659 0.277,0.857 0.97,2.208 2.081,4.049 1.11,1.841 2.322,3.709 3.644,5.614 1.317,1.902 2.67,3.527 4.058,4.877 1.386,1.349 2.498,1.962 3.329,1.842 0.694,-2.209 1.319,-5.462 1.874,-9.756 0.553,-4.297 1.005,-9.082 1.352,-14.357 0.347,-5.277 0.625,-10.707 0.834,-16.29 0.208,-5.584 0.344,-10.766 0.415,-15.553 0.069,-4.785 0.069,-8.806 0,-12.055 -0.071,-3.253 -0.176,-5.185 -0.311,-5.799 1.248,-1.104 2.044,-2.056 2.393,-2.852 0.345,-0.799 1.214,-1.013 2.602,-0.644 0.277,5.153 0.901,10.091 1.873,14.816 0.97,4.722 2.009,8.435 3.122,11.137 0.137,0.368 0.52,1.5 1.145,3.404 0.625,1.903 1.664,4.235 3.121,6.994 1.458,2.761 3.399,5.859 5.828,9.295 2.427,3.435 5.517,6.995 9.263,10.676 0.97,0.981 1.593,1.317 1.872,1.013 0.276,-0.308 0.762,-0.461 1.457,-0.461 0.97,-0.246 1.803,-1.505 2.498,-3.773 0.694,-2.271 1.281,-5.153 1.769,-8.651 0.485,-3.497 0.866,-7.302 1.145,-11.411 0.278,-4.113 0.554,-8.07 0.834,-11.873 C -7.737,6.41 -7.492,3.005 -7.284,0 c 0.207,-3.009 0.519,-5.126 0.937,-6.352 1.664,-0.858 3.189,-1.839 4.578,-2.944 1.386,-1.104 3.05,-1.289 4.996,-0.552 C 1.838,-7.64 0.762,-4.357 0,0"
                data--200-bottom="stroke-dashoffset:6000; opacity:0" data-end="stroke-dashoffset:0; opacity:100"
                style="fill:none;stroke:#fff;stroke-width:14;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:6000;stroke-dashoffset:0"
                id="path26">
        </g>
    </svg>
    <a href="#" class="menu--link">Blog</a>
    <a href="#" class="menu--link">Contact</a>
</nav>
<div id="skrollr-body">
    <header class="header height" id="header">
        <section class="container">
            <h1 class="header-logo"></h1>
            <nav class="header-menu">
                <a href="#" class="menu--link">A propos</a>
                <a href="#" class="menu--link">Travaux</a>
                <a href="#" class="menu--link">Blog</a>
                <a href="#" class="menu--link">Contact</a>
            </nav>
            <div class="header-about">
                <h1>Luc Matagne</h1>

                <h2>Développeur</h2>

                <h2>Graphiste</h2>

                <h2>Photographe</h2>
            </div>
        </section>
    </header>
