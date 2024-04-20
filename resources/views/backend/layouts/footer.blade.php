<div class="row" style="background-color: #171717; color:white; padding-left:30px; padding-right:30px; margin-top:170px">
        <div class="col">
            <div class="row mr-5 mb-2" style="margin-right: 10px;">
                <div class="col-md-4">
                    <div class="flex items-center ml-5">
                        <svg width="400" height="180" viewBox="0 0 1080 1080" version="1.1" xmlns="http://www.w3.org/2000/svg" 
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" 
                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;
                        ">
                                <g transform="matrix(3.09279,0,0,3.09279,-3195.42,-1157.15)">
                                    <path d="M1206.99,489.852L1168.17,489.852L1168.17,662.02L1097.95,662.02L1097.95,489.852L1063.25,489.852L1063.25,
                                    437.203L1206.99,437.203L1274.86,437.203L1277.21,437.203L1277.21,474.061L1278.09,474.061C1289.07,450.366 1308.39,
                                    435.446 1332.99,435.446C1339.14,435.446 1344.41,435.446 1352.31,437.203L1352.31,498.636C1346.6,497.758 1342.65,
                                    497.319 1337.82,497.319C1306.2,497.319 1277.21,517.083 1277.21,557.515L1277.21,662.02L1270.67,662.02C1270.18,
                                    662.056 1269.73,662.055 1269.31,662.02L1206.99,662.02L1206.99,489.852Z" 
                                    style="fill:white;"/>
                                </g>
                        </svg>
                        <svg height="50" width="1500">
                                <text x="10" y="40" fill="white" font-size="40" font-weight="bold">Oval Evolution</text>
                        </svg>
                    </div>
                </div>
                <style>
                    .helo {
                        color : #979797;
                    }
                    .helo:hover {
                        color:#D1D1D1;
                    }
                </style>
            </div>
            <div class="row">
                <div class="col-md-2" style=" margin-left:50px">
                    <div class="row mb-4" style="font-size:22px">
                        <div class="col">
                            Account
                        </div>
                    </div>
                    @if (!Auth::user())
                    <div class="row mb-4" style="font-size:18px">
                        <div class="col">
                            <a href="/login-option" class="helo">
                                Login
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4" style="font-size:18px">
                        <div class="col">
                            <a href="/register-option" class="helo">
                                Register
                            </a>
                        </div>
                    </div>
                    @endif
                    <div class="row mb-4" style="font-size:18px">
                        <div class="col">
                            <a href="/profile" class="helo">
                                My Profile
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4" style="font-size:18px">
                        <div class="col">
                            <a href="/myorders/all-order" class="helo">
                                My Order
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4" style="font-size:18px">
                        <div class="col">
                            <a href="/add-to-cart" class="helo">
                                My Cart
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row mb-4" style="font-size:22px">
                        <div class="col">
                            Menu
                        </div>
                    </div>
                    <div class="row mb-4" style="font-size:18px">
                        <div class="col">
                            <a href="/" class="helo">
                                Food
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4" style="font-size:18px">
                        <div class="col">
                            <a href="/drinks" class="helo">
                                Drink
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row mb-4" style="font-size:22px">
                        <div class="col">
                            Share review
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div id="custom-tweet-button" style="font-size:20px; cursor:pointer" class="helo"><i class="fab fa-twitter"></i> Tweet</div>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="mt-5 ml-4 mr-4"style="border-bottom: 1px solid white;"></div>
            <div class="row ml-4" style="margin-top:55px">
                <div class="col">
                    <a href="https://twitter.com/OvalEvolution?ref_src=twsrc%5Etfw" id="twitter-custom-follow-button" style="font-size:25px; background-color: white; color:black; padding:5px; border-radius:50%" data-show-count="false"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/ovalevolution.shop/" class="ml-4" style="font-size:25px; background-color: white; color:black; padding-left:8px; padding-top:5px;padding-bottom:5px; padding-right:8px; border-radius:45%"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.pinterest.fr/ovalevolution/"class="ml-4" style="font-size:25px; background-color: white; color:black; padding-left:8px; padding-top:5px;padding-bottom:5px; padding-right:8px; border-radius:50%"><i class="fab fa-pinterest"></i></a>
                    <a href="https://www.linkedin.com/in/oval-evolution-7719b7284/" class="ml-4" style="font-size:25px; background-color: white; color:black; padding-left:8px; padding-top:5px;padding-bottom:5px; padding-right:8px; border-radius:50%"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="row ml-4 mt-5 mb-3">
                <div class="col" style="font-size:16px">
                    © 2023 Oval Evolution. All rights reserved.
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('custom-tweet-button').addEventListener('click', function() {
            var tweetText = "🍽️ Check out the delicious dishes and cozy ambiance at Oval Evolution! 😋 #Foodies #Restaurant #DiningExperience";
            var tweetUrl = " https://ovalevolution.shop";
            var viaUsername = "OvalEvolution";
            var showCount = "false";
            var tweetUrl = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(tweetText) + "&url=" + encodeURIComponent(tweetUrl) + "&via=" + encodeURIComponent(viaUsername) + "&count=" + showCount;
            window.open(tweetUrl, "_blank");
        });
    </script>    
    <script>
        document.getElementById('twitter-custom-follow-button').addEventListener('click', function() {
            var twitterUrl = "https://twitter.com/OvalEvolution?ref_src=twsrc%5Etfw";
            window.open(twitterUrl, "_blank");
        });
    </script>
    <script type="text/javascript">
        (function (d) {
            var f = d.getElementsByTagName('SCRIPT')[0],
            p = d.createElement('SCRIPT');
            p.type = 'text/javascript';
            p.async = true;
            p.src = '//assets.pinterest.com/js/pinit.js';
            f.parentNode.insertBefore(p, f);
        })(document);
    </script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>