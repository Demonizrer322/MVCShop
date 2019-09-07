        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Shop</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!-- Shop Section Start -->
        <div class="shop-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-30  pb-70 pb-lg-50 pb-md-40 pb-sm-20 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Grid & List View Start -->
                                    <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                        <div class="grid-list-option d-flex">
                                            <ul class="nav">
                                                <li>
                                                    <a class="show" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                                </li>
                                            </ul>
                                            <p>Showing 1–9 of 41 results</p>
                                        </div>
                                        <!--Toolbar Short Area Start-->
                                        <div class="toolbar-short-area d-md-flex align-items-center">
                                            <div class="toolbar-shorter ">
                                                <label>Sort By:</label>
                                                <select class="wide">
                                                    <option data-display="Select">Nothing</option>
                                                    <option value="Relevance">Relevance</option>
                                                    <option value="Name, A to Z">Name, A to Z</option>
                                                    <option value="Name, Z to A">Name, Z to A</option>
                                                    <option value="Price, low to high">Price, low to high</option>
                                                    <option value="Price, high to low">Price, high to low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--Toolbar Short Area End-->
                                    </div>
                                    <!-- Grid & List View End -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="shop-product">
                                        
                                                <div id="myTabContent-2" class="tab-content">
                                                    <div id="grid" class="tab-pane fade active show">
                                                        <div class="product-grid-view">
                                                        
                                                            <div class="row">
                                                            <?php
                                                                for($a = 0; $a < 9; $a++)
                                                                {
                                                            ?>
                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <!-- <div class="product-label">
                                                                                <span>-20%</span>
                                                                            </div> -->
                                                                            <a href="/product/singleProductTabstyle3">
                                                                                <img src="http://<?=$_SERVER['HTTP_HOST']?>/assets/images/productImages/<?=$model[$a]->MainImage?>" class="main-image" alt="">                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.php"><?=$model[$a]->Name?></a></h3>
                                                                            <p class="product-price"><!--<span class="discounted-price">$</span>--> <span class="main-price">$<?=$model[$a]->Price?></span></p>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <!--  Single Grid product End -->
                                                                </div>
                                                            <?php
                                                                }
                                                            ?>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-30 mb-sm-40 mb-xs-30">
                                        <div class="col">
                                            <ul class="page-pagination">
                                                <li class="active"><a href="#">01</a></li>
                                                <li><a href="#">02</a></li>
                                                <li><a href="#">03</a></li>
                                                <li><a href="#">04</a></li>
                                                <li><a href="#">05</a></li>
                                                <li><a href="#">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Section End -->
        <!-- Newsletter Section Start -->
        <div class="newsletter-section section bg-gray-two pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h2>Subscribe Our Newsletter</h2>
                            <p>Subscribe Today for free and save 10% on your first purchase.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter-wrap">
                            <div class="newsletter-form">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" placeholder="Enter Your Email Address Here..." required>
                                    <button type="submit" value="submit">SUBSCRIBE!</button>
                                </form>

                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Section End -->