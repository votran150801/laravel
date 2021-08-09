@extends('website.layouts.homeWeb');
@section('titleWeb' , 'sản phẩm')
@section('contentWeb')
<!-- Bread Crumb -->
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="breadcrumb-link">
                    <a href="#">Home</a>
                    <a href="#">san pham</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Bread Crumb -->

<!-- Page Content -->
<section class="content-page">
    <div class="container">
        <div class="row">

            <!-- Product Content -->
            <div class="col-md-9 push-md-3">
                <!-- Title -->
                <div class="list-page-title">
                    <h2 class="">Sản phẩm<small>120 Products</small></h2>
                </div>
                <!-- End Title -->

                <!-- Product Filter -->
                <div class="product-filter-content">
                    <div class="product-filter-content-inner">

                        <!--Product Filter Button-->
                        <div class="product-filter-dropdown-btn "><a href="javascript:void(0)" data-toggle-target="filter-slide-toggle" class="btn btn-sm btn-gray slide-toggle-btn"><i class="fa fa-bars left" aria-hidden="true"></i>Filter</a></div>

                        <!--Product Sort By-->
                      
                        <!--Product Show-->
                        <form class="product-show">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="keyword"  class="form-control">
                                    </div>
                                </div>


                                <div class="col-6 ">
                                    <button class="btn btn-sm btn-primary" type="submit">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>



                        <!--Product List/Grid Icon-->
                        <div class="product-view-switcher">
                            <label>View</label>
                            <div class="product-view-icon product-grid-switcher product-view-icon-active">
                                <a class="" href="#"><i class="fa fa-th" aria-hidden="true"></i></a>
                            </div>
                            <div class="product-view-icon product-list-switcher">
                                <a class="" href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Product Filter -->

                <!-- Product filters Toggle-->
                <div class="container product-filter-dropdown toggle-content" id="filter-slide-toggle">
                    <div class="row col mlr-0">
                        <!-- Shop Categories -->
                        <!-- <div class="widget-sidebar col-sm-12 col-md-6 col-lg-3">
                                        <h6 class="widget-title">Categories</h6>
                                        <ul class="widget-content widget-product-categories jq-accordian">
                                            <li>
                                                <a href="#">Accessories</a>
                                            </li>
                                            <li>
                                                <a class="javascript:void(0)">Clothings<span class="jq-accordionIcon"></span></a>
                                                <ul class="children" style="display: none;">
                                                    <li><a href="#">All</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">Sportswear</a></li>
                                                    <li><a href="#">Swimwear</a></li>
                                                    <li><a href="#">Trousers</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Man<span class="jq-accordionIcon"></span></a>
                                                <ul style="display: none;">
                                                    <li><a href="#">All</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">Sportswear</a></li>
                                                    <li><a href="#">Swimwear</a></li>
                                                    <li><a href="#">Trousers</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Jacket</a></li>
                                            <li><a href="#">New arrivals</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="sdsd">Socks</a></li>
                                        </ul>
                                    </div> -->
                        <!-- End Shop Categories -->

                        <!-- Filter Price -->
                        <!-- <div class="widget-sidebar widget-filter-price col-sm-12 col-md-6 col-lg-3">
                                        <h6 class="widget-title">Select Price</h6>
                                        <ul class="widget-content">
                                            <li>
                                                <a href="#">All</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>0.00</span>
                                                    -
                                                <span class="amount"><span class="currencySymbol">$</span>500.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>500.00</span>
                                                    -
                                                <span class="amount"><span class="currencySymbol">$</span>1100.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>1100.00</span>
                                                    -
                                                <span class="amount"><span class="currencySymbol">$</span>1600.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>1600.00</span>
                                                    -
                                                <span class="amount"><span class="currencySymbol">$</span>2100.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>2100.00</span>
                                                    -
                                                <span class="amount"><span class="currencySymbol">$</span>2600.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>2600.00</span>
                                                    +
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->
                        <!-- End Filter Price -->

                        <!-- Filter Color -->
                        <!-- <div class="widget-sidebar widget-filter-color col-sm-12 col-md-6 col-lg-3">
                                        <h6 class="widget-title">Select Color</h6>
                                        <ul class="widget-content">
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #ff4040"></span></div>
                                                    Red</a>
                                                <span class="color-count">(9)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #000"></span></div>
                                                    Black</a>
                                                <span class="color-count">(112)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #ff9000"></span></div>
                                                    Orange</a>
                                                <span class="color-count">(56)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #ffcf3d"></span></div>
                                                    Yellow</a>
                                                <span class="color-count">(24)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #55b0da"></span></div>
                                                    Blue</a>
                                                <span class="color-count">(18)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #9ada55"></span></div>
                                                    Green</a>
                                                <span class="color-count">(72)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #7a463b"></span></div>
                                                    Brown</a>
                                                <span class="color-count">(5)</span>
                                            </li>
                                        </ul>
                                    </div> -->
                        <!-- End Filter Color -->

                        <!-- Filter Size -->
                        <!-- <div class="widget-sidebar widget-filter-size col-sm-12 col-md-6 col-lg-3">
                                        <h6 class="widget-title">Select Size</h6>
                                        <ul class="widget-content ">
                                            <li>
                                                <a href="#">L</a>
                                                <span>(24)</span>
                                            </li>
                                            <li>
                                                <a href="#">M</a>
                                                <span>(34)</span>
                                            </li>
                                            <li>
                                                <a href="#">S</a>
                                                <span>(45)</span>
                                            </li>
                                            <li>
                                                <a href="#">X</a>
                                                <span>(102)</span>
                                            </li>
                                            <li>
                                                <a href="#">XL</a>
                                                <span>(60)</span>
                                            </li>
                                            <li>
                                                <a href="#">XS</a>
                                                <span>(78)</span>
                                            </li>
                                            <li>
                                                <a href="#">XXL</a>
                                                <span>(35)</span>
                                            </li>
                                        </ul>
                                    </div> -->
                        <!-- End Filter Size -->
                    </div>
                </div>
                <!-- End Product filters Toggle-->

                <!-- Product Grid -->
                <div class="row product-list-item">
                    <!-- item.1 -->
                    @foreach($plane as $p)
                    <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                        <!--Product Item-->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <img src="{{asset('storage/' . $p->image )}}" alt="">
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="{{route('sanpham.detail', ['id' => $p->id,'brand' => $p->brand->id])}}">{{$p->name}}</a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                    {{$p->desc}}
                                </p>
                                <h5 class="item-price"></h5>
                            </div>
                        </div>
                        <!-- End Product Item-->
                    </div>
                    @endforeach
                </div>
                <!-- End Product Grid -->

                <div class="pagination-wraper">
                    <div>{{$plane->links()}}</div>
                </div>

            </div>
            <!-- End Product Content -->

            <!-- Sidebar -->
            <div class="sidebar-container col-md-3 pull-md-9">

                <!-- Categories -->
                <!-- <div class="widget-sidebar">
                                <h6 class="widget-title">Shop Categories</h6>
                                <ul class="widget-content widget-product-categories jq-accordian">
                                    <li>
                                        <a href="#">Accessories</a>
                                    </li>
                                    <li>
                                        <a>Clothings</a>
                                        <ul class="children">
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Coats & Jackets</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sportswear</a></li>
                                            <li><a href="#">Swimwear</a></li>
                                            <li><a href="#">Trousers</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Man</a>
                                        <ul>
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Coats & Jackets</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sportswear</a></li>
                                            <li><a href="#">Swimwear</a></li>
                                            <li><a href="#">Trousers</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Jacket</a></li>
                                    <li><a href="#">New arrivals</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="sdsd">Socks</a></li>
                                </ul>
                            </div> -->

                <!-- Filter By Price -->
                <div class="widget-sidebar widget-price-range">
                    <h6 class="widget-title">Filter By Price</h6>
                    <form class="widget-content" method="get" action="#">
                        <div class="price-range-slider"></div>
                        <div class="price-range-amount">
                            <input id="price_range_min" name="price_range_min" value="" data-min="140" placeholder="Min price" style="display: none;" type="text">
                            <input id="price_range_max" name="price_range_max" value="" data-max="1100" placeholder="Max price" style="display: none;" type="text">
                            <div id="price-range-from-to">
                            </div>
                        </div>
                        <button class="btn btn-xs btn-black pull-right" type="submit">Filter</button>
                    </form>
                </div>

                <!-- Filter By Color -->
                <!-- <div class="widget-sidebar widget-filter-color">
                                <h6 class="widget-title">Filter By Color</h6>
                                <ul class="widget-content">
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #ff4040"></span></div>
                                            Red</a>
                                        <span class="color-count">(9)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #000"></span></div>
                                            Black</a>
                                        <span class="color-count">(112)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #ff9000"></span></div>
                                            Orange</a>
                                        <span class="color-count">(56)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #ffcf3d"></span></div>
                                            Yellow</a>
                                        <span class="color-count">(24)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #55b0da"></span></div>
                                            Blue</a>
                                        <span class="color-count">(18)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #9ada55"></span></div>
                                            Green</a>
                                        <span class="color-count">(72)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #7a463b"></span></div>
                                            Brown</a>
                                        <span class="color-count">(5)</span>
                                    </li>
                                </ul>
                            </div> -->

                <!-- Filter By Size -->
                <!-- <div class="widget-sidebar widget-filter-size">
                                <h6 class="widget-title">Filter By Size</h6>
                                <ul class="widget-content">
                                    <li>
                                        <a href="#">L</a>
                                        <span>(24)</span>
                                    </li>
                                    <li>
                                        <a href="#">M</a>
                                        <span>(34)</span>
                                    </li>
                                    <li>
                                        <a href="#">S</a>
                                        <span>(45)</span>
                                    </li>
                                    <li>
                                        <a href="#">X</a>
                                        <span>(102)</span>
                                    </li>
                                    <li>
                                        <a href="#">XL</a>
                                        <span>(60)</span>
                                    </li>
                                    <li>
                                        <a href="#">XS</a>
                                        <span>(78)</span>
                                    </li>
                                    <li>
                                        <a href="#">XXL</a>
                                        <span>(35)</span>
                                    </li>
                                </ul>
                            </div> -->

                <!-- Filter By Tag -->
                <!-- <div class="widget-sidebar widget-filter-tag">
                                <h6 class="widget-title">Popular Tag</h6>
                                <ul class="widget-content">
                                    <li>
                                        <a href="#">Shirt</a>
                                    </li>
                                    <li>
                                        <a href="#">Bag</a>
                                    </li>
                                    <li>
                                        <a href="#">Vintage</a>
                                    </li>
                                    <li>
                                        <a href="#">Sweaters</a>
                                    </li>
                                    <li>
                                        <a href="#">t-shirt</a>
                                    </li>
                                    <li>
                                        <a href="#">white</a>
                                    </li>
                                    <li>
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <a href="#">New</a>
                                    </li>
                                    <li>
                                        <a href="#">Popular</a>
                                    </li>
                                </ul>
                            </div> -->

                <!-- Widget Product -->
                <div class="widget-sidebar widget-product">
                    <h6 class="widget-title">Sản Phẩm Mới Nhất</h6>
                    <ul class="widget-content">
                        @foreach($spmoinhat as $spmoi)
                        <!--Item-->
                        <li>
                            <a class="product-img" href="#">
                                <img src="{{asset('storage/' . $spmoi->image)}}" alt="">
                            </a>
                            <div class="product-content">
                                <a class="product-link" href="#">{{$spmoi->name}}</a>
                                <div class="star-rating">
                                    <span style="width: 80%;"></span>
                                </div>
                            </div>
                        </li>
                        @endforeach


                    </ul>
                </div>



            </div>
            <!-- End Sidebar -->

        </div>
    </div>
</section>
<!-- End Page Content -->

@endsection