<!-- header-container start -->
<div class="header-container">
{{--
@include('components.header-top')
--}}
<!-- header start -->
    <!-- classes:  -->
    <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
    <!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
    <!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
    <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
    <!-- "centered": mandatory class for the centered logo layout -->
    <!-- ================ -->
    <header class="header fixed fixed-desktop clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-auto hidden-md-down">
                    <!-- header-first start -->
                    <!-- ================ -->
                    <div class="header-first clearfix">

                        <!-- logo -->
                        <div id="logo" class="logo">
                            Etincelle<small>.rocks</small>
                        </div>

                        <!-- name-and-slogan -->
                        <div class="site-slogan">
                            Trouvez les talents dont vous avez besoin!
                        </div>

                    </div>
                    <!-- header-first end -->

                </div>
                <div class="col-lg-8 ml-auto">

                    <!-- header-second start -->
                    <!-- ================ -->
                    <div class="header-second clearfix">

                        <!-- main-navigation start -->
                        <!-- classes: -->
                        <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                        <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                        <!-- ================ -->
                        <div class="main-navigation main-navigation--mega-menu  animated">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">
                                <div class="navbar-brand clearfix hidden-lg-up">

                                    <!-- logo -->
                                    <div id="logo-mobile" class="logo">
                                        Etincelle
                                        <small>.rocks</small>
                                    </div>

                                    <!-- name-and-slogan -->
                                    <div class="site-slogan">
                                        Trouvez les talents dont vous avez besoin!
                                    </div>

                                </div>

                                <!-- header dropdown buttons -->
                            {{--
                        <div class="header-dropdown-buttons hidden-lg-up p-0 ml-auto mr-3">
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" id="header-drop-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-drop-3">
                                    <li>
                                        <form role="search" class="search-box margin-clear">
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <i class="fa fa-search form-control-feedback"></i>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @include('components.header.cart')
                        </div>
                            --}}
                            <!-- header dropdown buttons end -->

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    @include('components.header.menu')
                                </div>
                            </nav>
                        </div>
                        <!-- main-navigation end -->
                    </div>
                    <!-- header-second end -->

                </div>


                <div class="col-auto hidden-md-down">
                    <!-- header dropdown buttons -->
                    <div class="header-dropdown-buttons">
                        {{--
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret"
                                    id="header-drop-1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-search"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-animation"
                                aria-labelledby="header-drop-1">
                                <li>
                                    <form role="search" class="search-box margin-clear">
                                        <div class="form-group has-feedback">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <i class="fa fa-search form-control-feedback"></i>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        --}}
                        {{--
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" id="header-drop-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-basket"></i><span class="cart-count default-bg">8</span></button>
                            <ul class="dropdown-menu dropdown-menu-right cart dropdown-animation" aria-labelledby="header-drop-2">
                                <li>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="quantity">QTY</th>
                                            <th class="product">Product</th>
                                            <th class="amount">Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="quantity">2 x</td>
                                            <td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
                                            <td class="amount">$199.00</td>
                                        </tr>
                                        <tr>
                                            <td class="quantity">3 x</td>
                                            <td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
                                            <td class="amount">$299.00</td>
                                        </tr>
                                        <tr>
                                            <td class="quantity">3 x</td>
                                            <td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
                                            <td class="amount">$1499.00</td>
                                        </tr>
                                        <tr>
                                            <td class="total-quantity" colspan="2">Total 8 Items</td>
                                            <td class="total-amount">$1997.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="panel-body text-right">
                                        <a href="shop-cart.html" class="btn btn-group btn-gray btn-sm">View Cart</a>
                                        <a href="shop-checkout.html" class="btn btn-group btn-gray btn-sm">Checkout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        --}}
                    </div>
                    <!-- header dropdown buttons end -->
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
</div>
<!-- header-container end -->
