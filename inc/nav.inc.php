<!-- OG DATA -->
<meta property="og:title" content="Mental Health Support and Reiki Services">
<meta property="og:description" content="Find out about how my Mental Health Support and Reiki Services can help you.">
<meta property="og:image" content="img/og.jpg">
<meta property="og:url" content="https://www.well-beingfromwithin.co.uk" />
<!--  -->
<!-- Meta Theme Color -->
<meta name="theme-color" content="#82aab3">
<!--  -->
<!-- Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q2D1Z7TWG3"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-Q2D1Z7TWG3');
</script>

<!--  -->

<link rel="stylesheet" href="css/styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Sacramento&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/3318fdaaaf.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">

</head>

<body>
    <header>
        <nav class="navcontainer">
            <div class="navbar">
                <p class="navbar-link d-none">Contact Me</p>
                <div class="navbar-brand ">

                    <!-- Check the page and determine if a logo should be shown in the nav bar or not -->
                    <?php
                    $url = $_SERVER['REQUEST_URI'];

                    

                    switch($url){
                       
                        case"/":
                            echo''; 
                            break;  
                        case "/index":
                            echo''; 
                            break;
                            default:
                            echo'<a href="index"><img src="img/logo.svg" alt="Well Being From Within Logo"></a>'; 
                    }
                 
                   

                   

                    ?>
                </div>
                <div tabindex="0" class="navbar-menu-btn">
                    <p class="menu-text">Menu</p>
                    <div class="menu-bars">

                        <div class="menu-bar bar-1"></div>
                        <div class="menu-bar bar-2"></div>
                    </div>
                </div>


            </div>
            <div class="navbar-menu-links">

                <ul class="menu">
                    <li class="menu-link"><a href="index">Home</a></li>

                    <li class="menu-link "><a href="mental-health-support">Mental Health Support</a></li>
                    <li class="menu-link"><a href="reiki-services">Reiki</a></li>
                    <li class="menu-link"><a href="services">Services</a></li>
                    <li class="menu-link"><a class="contact-link" href="contact">Contact Me</a></li>
                    <!-- <li class="menu-link"><a href="coming-soon">Coming Soon</a></li> -->

                </ul>
                <div class="menu-image">

                </div>
            </div>




        </nav>
    </header>