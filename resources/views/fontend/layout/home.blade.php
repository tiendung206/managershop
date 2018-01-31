@extends('fontend.layout')
@section('title','Home')
@section('content')

	<div id="all">
		 <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <div class="container">
                        <div class="col-md-12">
                            <div id="main-slider">
                                @foreach($banner as $bn)
                                <div class="item">
                                    <img src="{{url('upload/images/banner/')}}/{{$bn->image}}" alt="" class="img-responsive">
                                </div>
                               @endforeach
                            </div>
                            <!-- /#main-slider -->
                        </div>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">
                    	@foreach($indexproduct as $product)
		                 	<div class="col-md-3 col-sm-4" >
	                            <div class="product" style="height: 420px">
	                                <div class="flip-container">
	                                    <div class="flipper">
	                                        <div class="front" >
	                                            	<a href="detail.html">
	                                                <img src="{{url('upload/images/product/')}}/{{$product->image}}" alt=""  class="img-responsive">
	                                            </a>
	                                        </div>
	                                        <div class="back">
	                                            <a href="detail.html">
	                                                <img src="{{url('upload/images/product/')}}/{{$product->image}}" alt="" class="img-responsive">
	                                            </a>
	                                        </div>
	                                    </div>
	                                </div>
	                                <a href="detail.html" class="invisible">
	                                    <img src="{{url('upload/images/product/')}}/{{$product->image}}" alt="" class="img-responsive">
	                                </a>
	                                <div class="text" style="">
	                                    <h3><a href="detail.html">{{$product->name}}</a></h3>
                                        @if($product->sale==0)
	                                        <p class="price"> {{number_format($product->price)}}</p>
                                        @else
                                             <p class="price"><del> {{number_format($product->price)}}</del>{{number_format($product->price -(($product->price)*($product->sale)/100))}}</p>
                                        @endif
	                                    <p class="buttons">
	                                        <a href="detail.html" class="btn btn-default">View detail</a>
	                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
	                                    </p>
	                                </div>
	                                <!-- /.text -->
                                   @if($product->sale!=0)
	                                <div class="ribbon sale">
	                                    <div class="theribbon">SALE</div>
	                                    <div class="ribbon-background"></div>
	                                </div>
	                                <!-- /.ribbon -->
                                    @endif
	                                <div class="ribbon new">
	                                    <div class="theribbon">NEW</div>
	                                    <div class="ribbon-background"></div>
	                                </div>
	                               
	                            </div>
	                            <!-- /.product -->
	                        </div>
                        @endforeach
                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->

            </div>
            <!-- /.container -->
        </div>

        </div>
@endsection