@extends('layouts.app')
    @section('content')




			<!--VIEWED CATEGORIZE-->
			<br />
			<br />
			<!--TECH-->
			
			<!--MAIN-->
			<div class="main-container w3-center border-center w3-text-black">
					<div class="main w3-center borders-center w3-round-xxxlarge">
					
								<br />
										<b class="w3-left w3-text-black">@php echo strtoupper($menutitle); @endphp</b>
												
										<div class="w3-border borderlng"></div>
												<form class="filterform">
														<select class="filterselect w3-border-white w3-border-large w3-padding">
																<option value="" selected>Filter</option>
																<option value="">Recent</option>
																<option value="">Low-High</option>
																<option value="">High-Low</option>
																<!--<option value="">Newest</option>
																<option value="">Newest</option>-->
														</select>
												</form>
										<div class="w3-border borderlng"></div>
										
								<br />
								



                                @if(count($menus)>=1)
                                    @foreach($menus as $menu)
                                            <div class="product-list w3-round-xxlarge w3-padding w3-display-container">
                                                        <img src="/storage/product/{{$menu->image1}}" alt="" class="product-img w3-round w3-margin"></img>
                                                        <br />
                                                        <br />
                                                        <a href="/products/{{$menu->id}}" style="text-decoration: none;"><b class=""><i class="product-title">{{$menu->name}}</i>
                                                            <br /><i style="">{{$menu->description}}</i>
                                                            <div class="w3-text-red price-tag w3-display-bottomright w3-padding-xxlarge">&#8358;{{$menu->price}}</div></b></a>
                                                </div>
                                            <br />
                                    @endforeach
                                @endif
                                

    @endsection