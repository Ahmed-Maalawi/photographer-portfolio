@php use Carbon\Carbon; @endphp
<footer class="footer clearfix" data-overlay-darkgray="8">
    <div class="container">
        <!-- First footer -->
        <div class="first-footer">
            <div class="row">
                <div class="col-md-6 widget-area">
                    <h3>Sign up to get latest update </h3>
                    <p>Sign up for our monthly newsletter for the latest news & articles </p>
                </div>
                <div class="col-md-6 widget-area">
                    <form id="subscribe-form" class="newsletter-form" method="post" data-mailchimp="true">
                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                            <p>
                                <input type="email" name="email" placeholder="Enter Your Email" required=""/>
                            </p>
                            <p>
                                {{--                                <input type="submit" value="Subscribe Now " class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-squar ttm-btn-style-fill ttm-btn-color-skincolor">--}}
                                <button
                                    class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-squar ttm-btn-style-fill ttm-btn-color-skincolor"
                                    type="submit">Subscribe Now
                                </button>
                            </p>
                        </div>
                        <div id="subscribe-msg"></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Second footer -->
        <div class="second-footer">
            <div class="row">
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <div class="footer-logo"><img class="img-fluid" src="{{ asset('user_style/img/logo.png') }}"
                                                      alt=""/></div>
                        <div class="widget-text">
                            <p>Photography inila miss uman saten eliten finus vivera alacus miss the drudean seneice
                                miss notumane tonec a fermen. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title">Quick Links </h3>
                        <ul>
                            <li><a href="{{ route('user.about') }}">About </a></li>
                            <li><a href="{{ route('user.service') }}">Services </a></li>
                            <li><a href="{{ route('user.work') }}">Works </a></li>
                            <li><a href="{{ route('user.blog.index') }}">Blog </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Contact </h3>
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                    <i class="ti-mobile"></i></div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>+20 123-456-0606 </p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                    <i class="ti-email"></i></div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>info@esaam.com </p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                    <i class="ti-location-pin"></i></div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>9 St, Maadi Cairo, EGP </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom footer -->
        <div class="bottom-footer-text">
            <div class="row copyright">
                <div class="col-md-8">
                    <p class="mb-0">Copyright © {{ Carbon::now()->year }} by <a href="#">Essam Mohamed Soliman </a>. All rights
                        reserved. </p>
                </div>
                <div class="col-md-4">
                    <div class="social-icons">
                        <ul class="list-inline">
                            <li title="facebook"><a href="#"><i class="ti-facebook"></i></a></li>
                            <li title="twitter"><a href="#"><i class="ti-twitter"></i></a></li>
                            <li title="linkedin"><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li title="instagram"><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
