<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Loged in with FitBit</title>
        <meta name="description" content="Civic - CV Resume" />
        <meta name="keywords" content="resume, civic, onepage, creative, html" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://colorlib.com/preview/theme/civic/img/favicon.ico" rel="shortcut icon" />
        <link href="/fitbit/css" rel="stylesheet" />
        <link rel="stylesheet" href="/fitbit/bootstrap.min.css" />
        <link rel="stylesheet" href="/fitbit/font-awesome.min.css" />
        <link rel="stylesheet" href="/fitbit/flaticon.css" />
        <link rel="stylesheet" href="/fitbit/owl.carousel.css" />
        <link rel="stylesheet" href="/fitbit/magnific-popup.css" />
        <link rel="stylesheet" href="/fitbit/style.css" />
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script data-dapp-detection="">
            (function(){let alreadyInsertedMetaTag=false function __insertDappDetected(){if (!alreadyInsertedMetaTag){const meta=document.createElement('meta') meta.name='dapp-detected' document.head.appendChild(meta) alreadyInsertedMetaTag=true}}if (window.hasOwnProperty('web3')){// Note a closure can't be used for this var because some sites like // www.wnyc.org do a second script execution via eval for some reason. window.__disableDappDetectionInsertion=true // Likely oldWeb3 is undefined and it has a property only because // we defined it. Some sites like wnyc.org are evaling all scripts // that exist again, so this is protection against multiple calls. if (window.web3===undefined){return}__insertDappDetected()}else{var oldWeb3=window.web3 Object.defineProperty(window, 'web3',{configurable: true, set: function (val){if (!window.__disableDappDetectionInsertion) __insertDappDetected() oldWeb3=val}, get: function (){if (!window.__disableDappDetectionInsertion) __insertDappDetected() return oldWeb3}})}})()
        </script>
    </head>
    <body>
        <div id="preloder" style="display: none;"><div class="loader" style="display: none;"></div></div>

        <section class="hero-section spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero-text">
                                    <h2>{{$profile['fullName']}}</h2>
                                    @if(isset($profile['aboutMe']))
                                      <p>{{$profile['aboutMe']}}</p>
                                    @endif
                                </div>
                                <div class="hero-info">
                                    <h2>General Info</h2>
                                    <ul>
                                        <li><span>Date of Birth</span>{{$profile['dateOfBirth']}}</li>
                                        <li><span>Height </span>{{$profile['height']}}</li>
                                        <li><span>Weight </span>{{$profile['weight']}}</li>
                                        <li><span>Steps </span>{{$profile['averageDailySteps']}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <figure class="hero-image"><img src="{{$profile['avatar640']}}" alt="5" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="social-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="social-link-warp">
                            <div class="social-links">
                                <a href="https://colorlib.com/preview/theme/civic/"><i class="fa fa-pinterest"></i></a><a href="https://colorlib.com/preview/theme/civic/"><i class="fa fa-linkedin"></i></a>
                                <a href="https://colorlib.com/preview/theme/civic/"><i class="fa fa-instagram"></i></a><a href="https://colorlib.com/preview/theme/civic/"><i class="fa fa-facebook"></i></a>
                                <a href="https://colorlib.com/preview/theme/civic/"><i class="fa fa-twitter"></i></a>
                            </div>
                            <h2 class="hidden-md hidden-sm">My Recent Badges</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-section">
            <div class="container text-center">
                <div class="copyright">
                    Copyright ©
                    <script type="text/javascript">
                        document.write(new Date().getFullYear());
                    </script>
                    2020 CareBubble All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://carebubble.site/" target="_blank">CareBubble</a>
                </div>
            </div>
        </footer>
        <script src="/fitbit/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="/fitbit/bootstrap.min.js" type="text/javascript"></script>
        <script src="/fitbit/owl.carousel.min.js" type="text/javascript"></script>
        <script src="/fitbit/magnific-popup.min.js" type="text/javascript"></script>
        <script src="/fitbit/circle-progress.min.js" type="text/javascript"></script>
        <script src="/fitbit/main.js" type="text/javascript"></script>
        <script async="" src="/fitbit/js" type="text/javascript"></script>
    </body>
</html>
