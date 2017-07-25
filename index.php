<!DOCTYPE html>
<html >
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <meta charset="UTF-8">
        <title>TEP login/signup</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="../vendor/jquery/jquery.min.js"></script>
         <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
         <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vendor/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="css/hlogin_1506.css">
   
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>

 <header class="header">
   <div class="header-top">
      <div class="container">
         <div class="header-brand">
            <div class="logo">
               <a href="/" title="Home">
               <img src="http://ivan.theedgeproperty.com.my/sites/all/themes/markone/logo.png" alt="Home">
               </a>
            </div>
            <div data-toggle="nav" data-target=".header" class="mobile-toggle">
               <span class="sr-only">Toggle navigation</span>
               <span class="hotdog"></span>
               <span class="hotdog"></span>
               <span class="hotdog"></span>
            </div>
         </div>
         <div class="header-panel">
            <ul class="nav nav-pills user-bar">
               <li><a id="modal_trigger" href="#modal" class="ghost p-l-20 p-r-20"><i class="ion-icon ion-person"></i><span>Sign in</span></a>
               </li>
               <li><a data-toggle="search" data-target=".header-search" role="button" class="search-toggle icon"><i class="ion-icon ion-ios-search-strong"></i></a></li>
            </ul>
         </div>
         <div class="header-nav">
            <div class="container">
               <ul class="nav nav-pills nav-link">
                  <li class="first leaf active home" data-toggle="tooltip" title="" data-original-title="Return to front page"><a href="/" title="" class="active"><span class="ion-icon ion-android-home"></span></a></li>
                  <li class="leaf"><a href="/search-property?listing_type=sale" title="">For sale</a></li>
                  <li class="leaf"><a href="/search-property?listing_type=rental" title="">To rent</a></li>
                  <li class="leaf"><a href="/agent-search" title="">Find Agent</a></li>
                  <li class="leaf"><a href="/newlaunches">New launches</a></li>
                  <li class="expanded dropdown">
                     <a title="" data-target="#" class="dropdown-toggle nolink" data-toggle="dropdown" role="button" data-hover="dropdown" aria-expanded="false">News &amp; Videos <i class="ion-caret ion-chevron-down"></i></a>
                     <ul class="dropdown-menu">
                        <li class="first leaf"><a href="/news/just-in" title="">News</a></li>
                        <li class="leaf"><a href="/pullout" title="">Digital Pullout</a></li>
                        <li class="leaf"><a href="/edgepropertytv" title="">Videos</a></li>
                        <li class="last leaf"><a href="/events" title="">Events</a></li>
                     </ul>
                  </li>
                  <li class="dropdown drop-more">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="material-icons">more_vert</i></a>
                     <ul class="dropdown-menu">
                        <li class="expanded dropdown">
                           <a title="" data-target="#" class="dropdown-toggle nolink" data-toggle="dropdown" role="button" data-hover="dropdown" aria-expanded="false">Property prices <i class="ion-caret ion-chevron-down"></i></a>
                           <ul class="dropdown-menu">
                              <li class="first leaf"><a href="/area-outlook" title="">Area Outlook</a></li>
                              <li class="leaf"><a href="/project-outlook" title="">Project Outlook</a></li>
                              <li class="leaf"><a href="/edge-reference-price" title="">Edge Reference Price</a></li>
                              <li class="last leaf"><a href="/transaction" title="">Transaction Finder</a></li>
                           </ul>
                        </li>
                        <li class="expanded dropdown">
                           <a title="" data-target="#" class="dropdown-toggle nolink" data-toggle="dropdown" role="button" data-hover="dropdown" aria-expanded="false">Tools <i class="ion-caret ion-chevron-down"></i></a>
                           <ul class="dropdown-menu">
                              <li class="first leaf"><a href="/map-search-property" title="">Search on Map</a></li>
                              <li class="expanded dropdown">
                                 <a title="" data-target="#" class="dropdown-toggle nolink" data-toggle="dropdown" role="button" data-hover="dropdown">Ask An Expert <i class="ion-caret ion-chevron-right"></i></a>
                                 <ul class="dropdown-menu">
                                    <li class="first leaf"><a href="/tips/1" title="">Feng Shui</a></li>
                                    <li class="last leaf"><a href="/tips/3" title="">Legal</a></li>
                                 </ul>
                              </li>
                              <li class="leaf"><a href="http://go.theedgeproperty.com.my/fsbo" title="">Home Owner Ad</a></li>
                              <li class="leaf"><a href="http://go.theedgeproperty.com.my/homefinder/" title="">Homefinder</a></li>
                              <li class="last leaf"><a href="/recomn" title="">Find a Pro</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
         <div class="header-search">
            <a data-toggle="search" data-target=".header-search" role="button" class="search-dismiss"><i class="ion-icon ion-ios-close-empty"></i></a>
            <div class="search-bar">
               <form id="search" action="/search" class="i-form">
                  <div class="input single animate">
                     <label><i class="ion-icon ion-ios-search-strong"></i> Enter Keywords</label>
                     <input name="search" type="text">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="header-bar"></div>
</header>


        <div class="container">
            <div id="modal" class="HloginPopupContainer center transition-slideup">
                <header class="popupHeader">
                    <span class="header_title">Sign in</span>
                    <span class="modal_close"><i class="ion-ios-close-empty"></i></span>
                </header>
                <section class="popupBody">
                    <!-- Social Login -->
                    <div class="InitialForm_pg">
                        <div class="">

                        <div class="centeredText">Joining is faster with Facebook or Google:</div>
                        
                            <a href="#" class="HloginBtn fb">
                            
                            <span class="btnText">
                            <span class="icon"><i class="fa fa-facebook"></i></span>
                            Continue with Facebook</span>
                            </a>
                            <a href="#" class="HloginBtn google">
                            <span class="btnText">
                            <span class="icon"><i class="fa fa-google"></i></span>
                            Continue with Google</span>
                            </a>
                        </div>
                        <div class="centeredText">
                            <span>or just a few extra steps using your email:</span>
                        </div>

                        <a href="#" class="RegisterForm_btn HloginBtn btnDefault">
                            
                            <span class="btnText">
                            <span class="icon"><i class="fa fa-envelope-o"></i></span>
                            Continue with email</span>
                            </a>

                             <div class="centeredText tnc">
                             By registering you agree to The Edge Property Terms of Use.
                             </div>

                             <hr>


                        <div class="centeredText m-b-0">
                        Already a member? <a href="#" class="LoginForm_btn">Sign in</a>
                        </div>
                    </div>
                   

                    <div class="LoginForm_pg">

                     <div class="centeredText">Instant sign in with Facebook or Google:</div>
                     

                     <a href="#" class="HloginBtn fb">
                            
                            <span class="btnText">
                            <span class="icon"><i class="fa fa-facebook"></i></span>
                            Continue with Facebook</span>
                            </a>
                            <a href="#" class="HloginBtn google">
                            <span class="btnText">
                            <span class="icon"><i class="fa fa-google"></i></span>
                            Continue with Google</span>
                            </a>

                            <div class="centeredText">
                                or using your email:
                            </div>

                        <form>
                            <input placeholder="Email / Username" type="text" />
                            
                            <!-- <label>Password</label> -->
                            <input placeholder="Password" type="password" />

                             <a href="#" class="HloginBtn btnDefault">
                            <span class="btnText"> 
                            Sign in</span>
                            </a>
                            

                        </form>

                        <a href="#" class="forgot_password">Forgot password?</a>

                        <hr>

                         <div class="centeredText m-b-0">
                        Not yet a member? <a href="#" class="InitialForm_btn">Register now</a>

                        </div>

                        
                    </div>
                    <!-- Register Form -->
                    <div class="RegisterForm_pg">
                        <form>
                            <input type="email" placeholder="Email" />
                            <input type="text" placeholder="First Name" />

                            <input type="text" placeholder="Last Name" />
                            
                            <input type="password" placeholder="Password" />
                            
                            
                            <a href="#" class="HloginBtn btnDefault">
                            <span class="btnText"> 
                            Register</span>
                            </a>

                            <div class="centeredText tnc">
                             By registering you agree to The Edge Property Terms of Use.
                             </div>

                             <hr>

                        </form> 

                        <div class="centeredText m-b-0">
                        Already a member? <a href="#" class="LoginForm_btn">Sign in</a>
                           <!--  Already a member? <a href="#">Sign in</a> -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script src='js/hlogin_leanModal.js'></script>
        <script src="js/hlogin_index.js"></script>
    </body>
</html>