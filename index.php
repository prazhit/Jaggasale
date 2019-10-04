<?php include('include/header.php'); ?>


<!-- ----------------------------------------Start of banner section--------------------------- -->
<!-- ----------------------------------------Prasid Codes--------------------------- -->

<section class="banner">
<div class="flex-type">
<div class="container text-center text-white title">
    <div class="title-text">
        <strong>THE BEST WAY TO</strong>
        <h1>Find Your Perfect Home</h1>
    </div>
</div>

<div class="container buy-rent-sold">

<div class="nab d-flex align-items-center justify-content-center mt-5">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="true">Buy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="rent-tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="false">Rent</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="sold-tab" data-toggle="tab" href="#sold" role="tab" aria-controls="sold" aria-selected="false">Sold</a>
  </li>
</ul>
</div>

<!-- ---------------------------Buy Tab Pane--------------------------------- -->
<!-- ----------------------------------------Prasid Codes--------------------------- -->

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-4 px-3" id="buy" role="tabpanel" aria-labelledby="buy-tab">
    <div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
            <select class="custom-select pl-4" id="inputGroupSelect01" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                <option value="1">Apartments</option>
                <option value="2">Office</option>
                <option value="3">Townhome</option>
            </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
            <input type="text" spellcheck="false" class="form-control" placeholder="Search" style="border-radius: 0; height:50px; box-shadow: none;border:none;outline:none;">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-8">
                    <div class="search form-group">
                        <a href="#" class="btn text-white form-control"><i class="fas fa-search mr-1"></i><span> SEARCH</span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="advanced" class=" advance text-center text-white form-group">
                        <span style="user-select:none;transition:.5s;">Advanced Search </span><span ><i style="transition:.5s;" class="fas fa-angle-down"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="anemities" class="container text-white anemity " style="transition:1s;">
    <strong>Amenities</strong>
    <div class="row mt-3">
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="1" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="1" class="custom-control-label"> Balcony (12)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="2" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="2" class="custom-control-label"> Cleaning Service (3)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="3" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="3" class="custom-control-label"> Elevator (8)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="4" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="4" class="custom-control-label"> Hardwood Flows (6)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="5" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="5" class="custom-control-label"> Spa (5)</label>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="6" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="6" class="custom-control-label"> Basement (3)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="7" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="7" class="custom-control-label"> Dining Room (2)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="8" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="8" class="custom-control-label">Family Room (15)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="9" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="9" class="custom-control-label"> Onsite Parking (12)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="10" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="10" class="custom-control-label"> Stunning views (6)</label>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="11" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="11" class="custom-control-label"> Car garage (2)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="12" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="12" class="custom-control-label"> Unit Washer/Dryer (2)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="13" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="13" class="custom-control-label"> Dishwasher (14)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="14" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="14" class="custom-control-label"> Fireplace (16)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="15" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="15" class="custom-control-label"> Parking (10)</label>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="16" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="16" class="custom-control-label"> Central Heating (3)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="17" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="17" class="custom-control-label"> Doorman (9)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="18" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="18" class="custom-control-label"> Gym (14)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-checkbox custom-control">    
                    <input id="19" type="checkbox" class="custom-control-input">
                    <label style="user-select: none; cursor:pointer" for="19" class="custom-control-label"> Pets Allowed (11)</label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <strong>Beds</strong>
            <div class="form-group mt-3">
                <select class="custom-select pl-4" id="inputGroupSelect01" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                    <option disabled selected value="">Select Beds</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3 range">
            <label for="customRange1">Min Price: <span class="ml-3 rss" >Rs. </span><span id="demo1"></span></label>
            <input type="range" class="custom-range" min="10000" max="100000" value="50000" id="customRange1">
            <label for="customRange2">Max Price: <span class="ml-3 rss" >Rs. </span><span id="demo2"></span></label>
            <input type="range" class="custom-range" min="100000" max="1000000" value="800000" id="customRange2">
        </div>
        <div class="col-lg-4 col-md-6 mt-3 range">
            <label for="customRange3">Min Square Feet: <span class="ml-3 rss" > </span><span id="demo3"></span></label>
            <input type="range" class="custom-range" min="10" max="1000" value="400" id="customRange3">
            <label for="customRange4">Max Square Feet: <span class="ml-3 rss" > </span><span id="demo4"></span></label>
            <input type="range" class="custom-range" min="1000" max="40000" value="20000" id="customRange4">
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <strong>Region</strong>
            <div class="form-group mt-3">
                <select class="custom-select pl-4" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                    <option disabled selected value="">Select State</option>
                    <option value="1">State 1</option>
                    <option value="2">State 2</option>
                    <option value="3">State 3</option>
                    <option value="3">State 4</option>
                    <option value="3">State 5</option>
                    <option value="3">State 6</option>
                    <option value="3">State 7</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <strong>Family</strong>
            <div class="form-group mt-3">
                <select class="custom-select pl-4" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                    <option disabled selected value="">Select Type</option>
                    <option value="1">Single-Family</option>
                    <option value="2">Multi-Family</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
            <strong>Status</strong>
            <div class="form-group mt-3">
                <select class="custom-select pl-4" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                    <option disabled selected value="">Select Status</option>
                    <option value="1">Active</option>
                    <option value="2">Sold</option>
                </select>
            </div>
        </div>
    </div>
</div>
 
  </div>


 <!-- --------------------------Rent Tab pane---------------------  -->
 <!-- ----------------------------------------Prasid Codes--------------------------- -->

<div class="tab-pane fade pt-4 px-3" id="rent" role="tabpanel" aria-labelledby="rent-tab">
        <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                        <select class="custom-select pl-4" id="inputGroupSelect01" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                            <option value="1">Apartments</option>
                            <option value="2">Office</option>
                            <option value="3">Townhome</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <input type="text" spellcheck="false" class="form-control" placeholder="Search" style="border-radius: 0; height:50px; box-shadow: none;border:none;outline:none;">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="search form-group">
                                    <a href="#" class="btn text-white form-control"><i class="fas fa-search mr-1"></i><span> SEARCH</span></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div id="advanced1" class=" advance text-center text-white form-group">
                                    <span style="user-select:none;transition:.5s;">Advanced Search </span><span ><i style="transition:.5s;" class="fas fa-angle-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="anemities1" class="container text-white anemity " style="transition:1s;">
                <strong>Amenities</strong>
                <div class="row mt-3">
                    <div class="col-lg-3 col-md-4">
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="20" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="20" class="custom-control-label"> Balcony (12)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="21" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="21" class="custom-control-label"> Cleaning Service (3)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="22" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="22" class="custom-control-label"> Elevator (8)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="23" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="23" class="custom-control-label"> Hardwood Flows (6)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="24" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="24" class="custom-control-label"> Spa (5)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="25" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="25" class="custom-control-label"> Basement (3)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="26" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="26" class="custom-control-label"> Dining Room (2)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="27" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="27" class="custom-control-label">Family Room (15)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="28" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="28" class="custom-control-label"> Onsite Parking (12)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="29" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="29" class="custom-control-label"> Stunning views (6)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="30" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="30" class="custom-control-label"> Car garage (2)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="31" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="31" class="custom-control-label"> Unit Washer/Dryer (2)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="32" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="32" class="custom-control-label"> Dishwasher (14)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="33" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="33" class="custom-control-label"> Fireplace (16)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="34" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="34" class="custom-control-label"> Parking (10)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="35" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="35" class="custom-control-label"> Central Heating (3)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="36" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="36" class="custom-control-label"> Doorman (9)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="37" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="37" class="custom-control-label"> Gym (14)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="38" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="38" class="custom-control-label"> Pets Allowed (11)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <strong>Beds</strong>
                        <div class="form-group mt-3">
                            <select class="custom-select pl-4" id="inputGroupSelect01" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                                <option disabled selected value="">Select Beds</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3 range">
                        <label for="customRange5">Min Price: <span class="ml-3 rss" >Rs. </span><span id="demo5"></span></label>
                        <input type="range" class="custom-range" min="10000" max="100000" value="50000" id="customRange5">
                        <label for="customRange6">Max Price: <span class="ml-3 rss" >Rs. </span><span id="demo6"></span></label>
                        <input type="range" class="custom-range" min="100000" max="1000000" value="800000" id="customRange6">
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3 range">
                        <label for="customRange7">Min Square Feet: <span class="ml-3 rss" > </span><span id="demo7"></span></label>
                        <input type="range" class="custom-range" min="10" max="1000" value="400" id="customRange7">
                        <label for="customRange8">Max Square Feet: <span class="ml-3 rss" > </span><span id="demo8"></span></label>
                        <input type="range" class="custom-range" min="1000" max="40000" value="20000" id="customRange8">
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <strong>Region</strong>
                        <div class="form-group mt-3">
                            <select class="custom-select pl-4" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                                <option disabled selected value="">Select State</option>
                                <option value="1">State 1</option>
                                <option value="2">State 2</option>
                                <option value="3">State 3</option>
                                <option value="3">State 4</option>
                                <option value="3">State 5</option>
                                <option value="3">State 6</option>
                                <option value="3">State 7</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <strong>Family</strong>
                        <div class="form-group mt-3">
                            <select class="custom-select pl-4" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                                <option disabled selected value="">Select Type</option>
                                <option value="1">Single-Family</option>
                                <option value="2">Multi-Family</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <strong>Status</strong>
                        <div class="form-group mt-3">
                            <select class="custom-select pl-4" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                                <option disabled selected value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="2">Sold</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
</div>

<!-- ---------------------------------Sold tab Pane----------------------------- -->
<!-- ----------------------------------------Prasid Codes--------------------------- -->

<div class="tab-pane fade pt-4 px-3" id="sold" role="tabpanel" aria-labelledby="sold-tab">
        <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                        <select class="custom-select pl-4" id="inputGroupSelect01" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                            <option value="1">Apartments</option>
                            <option value="2">Office</option>
                            <option value="3">Townhome</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <input type="text" spellcheck="false" class="form-control" placeholder="Search" style="border-radius: 0; height:50px; box-shadow: none;border:none;outline:none;">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="search form-group">
                                    <a href="#" class="btn text-white form-control"><i class="fas fa-search mr-1"></i><span> SEARCH</span></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div id="advanced2" class=" advance text-center text-white form-group">
                                    <span style="user-select:none;transition:.5s;">Advanced Search </span><span ><i style="transition:.5s;" class="fas fa-angle-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="anemities2" class="container text-white anemity " style="transition:1s;">
                <strong>Amenities</strong>
                <div class="row mt-3">
                    <div class="col-lg-3 col-md-4">
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="39" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="39" class="custom-control-label"> Balcony (12)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="40" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="40" class="custom-control-label"> Cleaning Service (3)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="41" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="41" class="custom-control-label"> Elevator (8)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="42" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="42" class="custom-control-label"> Hardwood Flows (6)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="43" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="43" class="custom-control-label"> Spa (5)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="44" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="44" class="custom-control-label"> Basement (3)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="45" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="45" class="custom-control-label"> Dining Room (2)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="46" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="46" class="custom-control-label">Family Room (15)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="47" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="47" class="custom-control-label"> Onsite Parking (12)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="48" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="48" class="custom-control-label"> Stunning views (6)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="49" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="49" class="custom-control-label"> Car garage (2)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="50" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="50" class="custom-control-label"> Unit Washer/Dryer (2)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="51" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="51" class="custom-control-label"> Dishwasher (14)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="52" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="52" class="custom-control-label"> Fireplace (16)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="53" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="53" class="custom-control-label"> Parking (10)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="54" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="54" class="custom-control-label"> Central Heating (3)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="55" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="55" class="custom-control-label"> Doorman (9)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="56" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="56" class="custom-control-label"> Gym (14)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">    
                                <input id="57" type="checkbox" class="custom-control-input">
                                <label style="user-select: none; cursor:pointer" for="57" class="custom-control-label"> Pets Allowed (11)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <strong>Beds</strong>
                        <div class="form-group mt-3">
                            <select class="custom-select pl-4" id="inputGroupSelect01" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                                <option disabled selected value="">Select Beds</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3 range">
                        <label for="customRange9">Min Price: <span class="ml-3 rss" >Rs. </span><span id="demo9"></span></label>
                        <input type="range" class="custom-range" min="10000" max="100000" value="50000" id="customRange9">
                        <label for="customRange10">Max Price: <span class="ml-3 rss" >Rs. </span><span id="demo10"></span></label>
                        <input type="range" class="custom-range" min="100000" max="1000000" value="800000" id="customRange10">
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3 range">
                        <label for="customRange11">Min Square Feet: <span class="ml-3 rss" > </span><span id="demo11"></span></label>
                        <input type="range" class="custom-range" min="10" max="1000" value="400" id="customRange11">
                        <label for="customRange12">Max Square Feet: <span class="ml-3 rss" > </span><span id="demo12"></span></label>
                        <input type="range" class="custom-range" min="1000" max="40000" value="20000" id="customRange12">
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <strong>Region</strong>
                        <div class="form-group mt-3">
                            <select class="custom-select pl-4" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                                <option disabled selected value="">Select State</option>
                                <option value="1">State 1</option>
                                <option value="2">State 2</option>
                                <option value="3">State 3</option>
                                <option value="3">State 4</option>
                                <option value="3">State 5</option>
                                <option value="3">State 6</option>
                                <option value="3">State 7</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <strong>Family</strong>
                        <div class="form-group mt-3">
                            <select class="custom-select pl-4" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                                <option disabled selected value="">Select Type</option>
                                <option value="1">Single-Family</option>
                                <option value="2">Multi-Family</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <strong>Status</strong>
                        <div class="form-group mt-3">
                            <select class="custom-select pl-4" style="border-radius: 0;height:50px;box-shadow: none;border:none;outline:none; ">
                                <option disabled selected value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="2">Sold</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
</div>

</div>

</div>

</div>   
</section>

<!-- ----------------------------------------End of banner section--------------------------- -->

<!-- ----------------------------------------Prasid Codes--------------------------- -->

<!-- ---------------------------------------Start of Featured Properties------------------------------ -->

<section class="featured bg-light">

    <div class="container title d-flex mb-5" style="justify-content: space-between">
        <h1>FEATURED PROPERTIES</h1>
        <p class="mt-2">
            <span class="icon"><i class="fas fa-home"></i>1300+</span><span class="icon-text"> AVAILABLE PROPERTIES</span>
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 my-3">
                <div class="card">
                    <div class="card-img"style="position: relative;overflow:hidden;">
                        <div class="img-box"style="height:210px">
                            <img src="pics/space1.jpg" height="100%" width="100%">
                        </div>
                        <a href="details.php"><div class="img-overlay"></div></a>
                        <div class="badge badge1 px-2 py-1 badge-danger">SOLD</div>
                        <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 19</div>
                        <div class="home-heart">
                            <i id="home1" class="fas mx-1 py-2 fa-home"></i>
                            <i id="heart1" class="fas mx-1 py-2 fa-heart"></i>
                        </div>
                    </div>
                    <div class="container px-4">
                        <div class="card-title mt-3">
                            <a href="details.php" >Office Space At Baneshwor</a>
                        </div>
                        <div class="card-content mt-3">
                           <div class="row room">
                               <div class="col-lg-6">
                                   <p><i class="fas fa-home"></i> Served</p>
                               </div>
                               <div class="col-lg-6">
                                   <p><i class="fas fa-ruler-combined"></i> 3600 sq ft</p>
                               </div>
                               <div class="col-lg-6">
                                    <p><i class="fas fa-bed"></i> 10 Rooms</p>
                                </div>
                                <div class="col-lg-6">
                                    <p> <i class="fas fa-clock"></i> 2019</p>
                                </div>
                           </div>
                           <hr style="border-top:.5px solid lightgrey">
                           <div class="car-footer pb-4">
                                <strike>Rs. 40,000/mo</strike> <span style="color:black;font-weight:bold;" class="ml-3">Rs. 20,000/mo</span>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 my-3">
                    <div class="card">
                        <div class="card-img"style="position: relative;overflow:hidden;">
                            <div class="img-box"style="height:210px">
                                <img src="pics/space2.jpg" height="100%" width="100%">
                            </div>
                            <a href=""><div class="img-overlay"></div></a>
                            <div class="badge badge1 px-2 py-1 badge-danger">SOLD</div>
                            <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 12</div>
                            <div class="home-heart">
                                <i id="home2" class="fas mx-1 py-2 fa-home"></i>
                                <i id="heart2" class="fas mx-1 py-2 fa-heart"></i>
                            </div>
                        </div>
                        <div class="container px-4">
                            <div class="card-title mt-3">
                                <a href="#" >Office Space At Tinkune</a>
                            </div>
                            <div class="card-content mt-3">
                               <div class="row room">
                                   <div class="col-lg-6">
                                       <p><i class="fas fa-home"></i> Served</p>
                                   </div>
                                   <div class="col-lg-6">
                                       <p><i class="fas fa-ruler-combined"></i> 2700 sq ft</p>
                                   </div>
                                   <div class="col-lg-6">
                                        <p><i class="fas fa-bed"></i> 13 Rooms</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p> <i class="fas fa-clock"></i> 2019</p>
                                    </div>
                               </div>
                               <hr style="border-top:.5px solid lightgrey">
                               <div class="car-footer pb-4">
                                    <strike>Rs. 21,000/mo</strike> <span style="color:black;font-weight:bold;" class="ml-3">Rs. 18,000/mo</span>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 my-3">
                        <div class="card">
                            <div class="card-img"style="position: relative;overflow:hidden;">
                                <div class="img-box"style="height:210px">
                                    <img src="pics/space3.jpg" height="100%" width="100%">
                                </div>
                                <a href=""><div class="img-overlay"></div></a>
                                <div class="badge badge1 px-2 py-1 badge-success">ACTIVE</div>
                                <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 08</div>
                                <div class="home-heart">
                                    <i id="home3" class="fas mx-1 py-2 fa-home"></i>
                                    <i id="heart3" class="fas mx-1 py-2 fa-heart"></i>
                                </div>
                            </div>
                            <div class="container px-4">
                                <div class="card-title mt-3">
                                    <a href="#" >Office Space At Koteshwor</a>
                                </div>
                                <div class="card-content mt-3">
                                   <div class="row room">
                                       <div class="col-lg-6">
                                           <p><i class="fas fa-home"></i> Served</p>
                                       </div>
                                       <div class="col-lg-6">
                                           <p><i class="fas fa-ruler-combined"></i> 2000 sq ft</p>
                                       </div>
                                       <div class="col-lg-6">
                                            <p><i class="fas fa-bed"></i> 20 Rooms</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p> <i class="fas fa-clock"></i> 2019</p>
                                        </div>
                                   </div>
                                   <hr style="border-top:.5px solid lightgrey">
                                   <div class="car-footer pb-4">
                                        <strike>Rs. 50,000/mo</strike> <span style="color:black;font-weight:bold;" class="ml-3">Rs. 35,000/mo</span>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

</section>



<!-- ---------------------------------------End of Featured Properties------------------------------ -->

<!-- ----------------------------------------Prasid Codes--------------------------- -->

<!-- ----------------------------------Start of Properties For Sold----------------------------------- -->

<section class="sold-property pb-0 featured">
    <div class="container title d-flex mb-5" style="justify-content: space-between">
        <h1>PROPERTIES FOR SOLD</h1>
        <p class="mt-2">
            <span class="icon"><i style="color:var(--sec-color)" class="fas fa-hand-holding-usd"></i></span><span style="color:grey;"> ALL PROPERTIES</span><span style="color:var(--pri-color)" class="icon-text"> FOR SOLD</span>
        </p>
    </div>
    <div class="container">
    <div id="owl-sold-property" class="owl-carousel owl-theme">
        <div class="item sold-item">
            <div class="card mb-5" style="padding:15px;">
                <div class="card-img"style="position: relative;overflow:hidden;">
                    <div class="img-box">
                        <img src="pics/sale1.jpg" height="230px">
                    </div>
                    <a href=""><div class="img-overlay"></div></a>
                    <div class="badge badge1 px-2 py-1 badge-danger">SOLD</div>
                    <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 15</div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                </div>
                
                    <div class="card-title mt-3">
                        <a href="#" >House In New Road</a>
                    </div>
                    <div class="car-footer">
                        <strike>Rs. 34,00,000/mo</strike> <br> <span style="color:black;font-weight:bold;" >Rs. 2,80,000/mo</span>
                    </div>
                    <hr style="border-top:.5px solid lightgrey">
                    <div class="card-content d-flex" style="justify-content: space-between">
                        <div class="bed room">
                            <i class="fas fa-bed"></i> 5
                        </div>
                        <div class="bath room">
                            <i class="fas fa-bath"></i> 2
                        </div>
                        <div class="year room">
                            <i class="fas fa-clock"></i> 2019
                        </div>
                    </div>
                
            </div>
        </div>
        <div class="item sold-item">
            <div class="card" style="padding:15px;">
                <div class="card-img"style="position: relative;overflow:hidden;">
                    <div class="img-box">
                        <img src="pics/sale2.jpg" height="230px">
                    </div>
                    <a href="#"><div class="img-overlay"></div></a>
                    <div class="badge badge1 px-2 py-1 badge-danger">SOLD</div>
                    <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 8</div>
                    <div class="home-heart">
                        <i id="home5" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart5" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                </div>
                
                <div class="card-title mt-3">
                    <a href="#" >House In Lagankhel</a>
                </div>
                <div class="car-footer">
                    <strike>Rs. 340,000/mo</strike> <br> <span style="color:black;font-weight:bold;" >Rs. 200,000/mo</span>
                </div>
                <hr style="border-top:.5px solid lightgrey">
                <div class="card-content d-flex" style="justify-content: space-between">
                    <div class="bed room">
                        <i class="fas fa-bed"></i> 8
                    </div>
                    <div class="bath room">
                        <i class="fas fa-bath"></i> 2
                    </div>
                    <div class="year room">
                        <i class="fas fa-clock"></i> 2018
                    </div>
                </div>
                
            </div>
        </div>
        <div class="item sold-item">
            <div class="card" style="padding:15px;">
                <div class="card-img"style="position: relative;overflow:hidden;">
                    <div class="img-box">
                        <img src="pics/sale3.jpg" height="230px">
                    </div>
                    <a href=""><div class="img-overlay"></div></a>
                    <div class="badge badge1 px-2 py-1 badge-danger">SOLD</div>
                    <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 18</div>
                    <div class="home-heart">
                        <i id="home6" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart6" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                </div>
                
                <div class="card-title mt-3">
                    <a href="#" >House In Khichapokhari</a>
                </div>
                <div class="car-footer">
                    <strike>Rs. 50,00,000/mo</strike> <br> <span style="color:black;font-weight:bold;" >Rs. 45,00,000/mo</span>
                </div>
                <hr style="border-top:.5px solid lightgrey">
                <div class="card-content d-flex" style="justify-content: space-between">
                    <div class="bed room">
                        <i class="fas fa-bed"></i> 10
                    </div>
                    <div class="bath room">
                        <i class="fas fa-bath"></i> 5
                    </div>
                    <div class="year room">
                        <i class="fas fa-clock"></i> 2018
                    </div>
                </div>
                
            </div>
        </div>
        <div class="item sold-item">
            <div class="card" style="padding:15px;">
                <div class="card-img"style="position: relative;overflow:hidden;">
                    <div class="img-box">
                        <img src="pics/sale4.jpg" height="230px">
                    </div>
                    <a href=""><div class="img-overlay"></div></a>
                    <div class="badge badge1 px-2 py-1 badge-danger">SOLD</div>
                    <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 10</div>
                    <div class="home-heart">
                        <i id="home7" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart7" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                </div>
                
                <div class="card-title mt-3">
                    <a href="#" >House In Chabel</a>
                </div>
                <div class="car-footer">
                    <strike>Rs. 14,20,000/mo</strike> <br> <span style="color:black;font-weight:bold;" >Rs. 12,02,000/mo</span>
                </div>
                <hr style="border-top:.5px solid lightgrey">
                <div class="card-content d-flex" style="justify-content: space-between">
                    <div class="bed room">
                        <i class="fas fa-bed"></i> 5
                    </div>
                    <div class="bath room">
                        <i class="fas fa-bath"></i> 5
                    </div>
                    <div class="year room">
                        <i class="fas fa-clock"></i> 2019
                    </div>
                </div>
                
            </div>
        </div>
        <div class="item sold-item">
            <div class="card" style="padding:15px;">
                <div class="card-img"style="position: relative;overflow:hidden;">
                    <div class="img-box">
                        <img src="pics/sale5.jpg" height="230px">
                    </div>
                    <a href=""><div class="img-overlay"></div></a>
                    <div class="badge badge1 px-2 py-1 badge-danger">SOLD</div>
                    <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 12</div>
                    <div class="home-heart">
                        <i id="home8" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart8" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                </div>
                
                <div class="card-title mt-3">
                    <a href="#" >House In Balaju</a>
                </div>
                <div class="car-footer">
                    <strike>Rs. 5,40,000/mo</strike> <br> <span style="color:black;font-weight:bold;" >Rs. 4,20,000/mo</span>
                </div>
                <hr style="border-top:.5px solid lightgrey">
                <div class="card-content d-flex" style="justify-content: space-between">
                    <div class="bed room">
                        <i class="fas fa-bed"></i> 10
                    </div>
                    <div class="bath room">
                        <i class="fas fa-bath"></i> 3
                    </div>
                    <div class="year room">
                        <i class="fas fa-clock"></i> 2019
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</section>

<!-- ----------------------------------End of Properties For Sold----------------------------------- -->

<!-- ----------------------------------Prasid Codes----------------------------------- -->
<div class="container">
    <hr style="border-top:1px solid grey;">
</div>

<!-- ----------------------------------Start of Properties For rent----------------------------------- -->

<section class="rent-property sold-property pb-0 featured">
        <div class="container title d-flex mb-5" style="justify-content: space-between">
            <h1>PROPERTIES FOR RENT</h1>
            <p class="mt-2">
                <span class="icon"><i style="color:var(--sec-color)" class="fas fa-hand-holding-usd"></i></span><span style="color:grey;"> ALL PROPERTIES</span><span style="color:var(--pri-color)" class="icon-text"> FOR RENT</span>
            </p>
        </div>
        <div class="container">
        <div id="owl-rent-property" class="owl-carousel owl-theme">
            <div class="item rent-item">
                <div class="card mb-5" style="padding:15px;">
                    <div class="card-img"style="position: relative;overflow:hidden;">
                        <div class="img-box">
                            <img src="pics/1.jpg" height="230px">
                        </div>
                        <a href=""><div class="img-overlay"></div></a>
                        <div class="badge badge1 px-2 py-1 badge-danger">RENT</div>
                        <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 15</div>
                        <div class="home-heart">
                            <i id="home9" class="fas mx-1 py-2 fa-home"></i>
                            <i id="heart9" class="fas mx-1 py-2 fa-heart"></i>
                        </div>
                    </div>
                    
                        <div class="card-title mt-3">
                            <a href="#" >House In New Road</a>
                        </div>
                        <div class="car-footer">
                            <strike>Rs. 34,00,000/mo</strike> <br> <span style="color:black;font-weight:bold;" >Rs. 2,80,000/mo</span>
                        </div>
                        <hr style="border-top:.5px solid lightgrey">
                        <div class="card-content d-flex" style="justify-content: space-between">
                            <div class="bed room">
                                <i class="fas fa-bed"></i> 5
                            </div>
                            <div class="bath room">
                                <i class="fas fa-bath"></i> 2
                            </div>
                            <div class="year room">
                                <i class="fas fa-clock"></i> 2019
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="item rent-item">
                <div class="card" style="padding:15px;">
                    <div class="card-img"style="position: relative;overflow:hidden;">
                        <div class="img-box">
                            <img src="pics/10.jpg" height="230px">
                        </div>
                        <a href="#"><div class="img-overlay"></div></a>
                        <div class="badge badge1 px-2 py-1 badge-danger">RENT</div>
                        <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 8</div>
                        <div class="home-heart">
                            <i id="home10" class="fas mx-1 py-2 fa-home"></i>
                            <i id="heart10" class="fas mx-1 py-2 fa-heart"></i>
                        </div>
                    </div>
                    
                    <div class="card-title mt-3">
                        <a href="#" >House In Lagankhel</a>
                    </div>
                    <div class="car-footer">
                        <strike>Rs. 340,000/mo</strike> <br> <span style="color:black;font-weight:bold;" >Rs. 200,000/mo</span>
                    </div>
                    <hr style="border-top:.5px solid lightgrey">
                    <div class="card-content d-flex" style="justify-content: space-between">
                        <div class="bed room">
                            <i class="fas fa-bed"></i> 8
                        </div>
                        <div class="bath room">
                            <i class="fas fa-bath"></i> 2
                        </div>
                        <div class="year room">
                            <i class="fas fa-clock"></i> 2018
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="item rent-item">
                <div class="card" style="padding:15px;">
                    <div class="card-img"style="position: relative;overflow:hidden;">
                        <div class="img-box">
                            <img src="pics/9.jpg" height="230px">
                        </div>
                        <a href=""><div class="img-overlay"></div></a>
                        <div class="badge badge1 px-2 py-1 badge-danger">RENT</div>
                        <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 18</div>
                        <div class="home-heart">
                            <i id="home11" class="fas mx-1 py-2 fa-home"></i>
                            <i id="heart11" class="fas mx-1 py-2 fa-heart"></i>
                        </div>
                    </div>
                    
                    <div class="card-title mt-3">
                        <a href="#" >House In Khichapokhari</a>
                    </div>
                    <div class="car-footer">
                        <strike>Rs. 50,00,000/mo</strike> <br> <span style="color:black;font-weight:bold;" >Rs. 45,00,000/mo</span>
                    </div>
                    <hr style="border-top:.5px solid lightgrey">
                    <div class="card-content d-flex" style="justify-content: space-between">
                        <div class="bed room">
                            <i class="fas fa-bed"></i> 10
                        </div>
                        <div class="bath room">
                            <i class="fas fa-bath"></i> 5
                        </div>
                        <div class="year room">
                            <i class="fas fa-clock"></i> 2018
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="item rent-item">
                <div class="card" style="padding:15px;">
                    <div class="card-img"style="position: relative;overflow:hidden;">
                        <div class="img-box">
                            <img src="pics/6.jpg" height="230px">
                        </div>
                        <a href=""><div class="img-overlay"></div></a>
                        <div class="badge badge1 px-2 py-1 badge-danger">RENT</div>
                        <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 10</div>
                        <div class="home-heart">
                            <i id="home12" class="fas mx-1 py-2 fa-home"></i>
                            <i id="heart12" class="fas mx-1 py-2 fa-heart"></i>
                        </div>
                    </div>
                    
                    <div class="card-title mt-3">
                        <a href="#" >House In Chabel</a>
                    </div>
                    <div class="car-footer">
                        <strike>Rs. 14,20,000/mo</strike> <br> <span style="color:black;font-weight:bold;" >Rs. 12,02,000/mo</span>
                    </div>
                    <hr style="border-top:.5px solid lightgrey">
                    <div class="card-content d-flex" style="justify-content: space-between">
                        <div class="bed room">
                            <i class="fas fa-bed"></i> 5
                        </div>
                        <div class="bath room">
                            <i class="fas fa-bath"></i> 5
                        </div>
                        <div class="year room">
                            <i class="fas fa-clock"></i> 2019
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="item rent-item">
                <div class="card" style="padding:15px;">
                    <div class="card-img"style="position: relative;overflow:hidden;">
                        <div class="img-box">
                            <img src="pics/4.jpg" height="230px">
                        </div>
                        <a href=""><div class="img-overlay"></div></a>
                        <div class="badge badge1 px-2 py-1 badge-danger">RENT</div>
                        <div class="badge badge2 px-2 py-1"><i class="fas fa-camera"></i> 12</div>
                        <div class="home-heart">
                            <i id="home13" class="fas mx-1 py-2 fa-home"></i>
                            <i id="heart13" class="fas mx-1 py-2 fa-heart"></i>
                        </div>
                    </div>
                    
                    <div class="card-title mt-3">
                        <a href="#" >House In Balaju</a>
                    </div>
                    <div class="car-footer">
                        <strike>Rs. 5,40,000/mo</strike> <br> <span style="color:black;font-weight:bold;" >Rs. 4,20,000/mo</span>
                    </div>
                    <hr style="border-top:.5px solid lightgrey">
                    <div class="card-content d-flex" style="justify-content: space-between">
                        <div class="bed room">
                            <i class="fas fa-bed"></i> 10
                        </div>
                        <div class="bath room">
                            <i class="fas fa-bath"></i> 3
                        </div>
                        <div class="year room">
                            <i class="fas fa-clock"></i> 2019
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>




<!-- ----------------------------------End of Properties For rent----------------------------------- -->

<!-- ----------------------------------Prasid Codes-------------------------------------- -->

<!-- -----------------------------------Start of New Home-------------------- -->

<section class="new-home mt-5">

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 my-3">
            <a href="new-home.php" class="card px-4 py-5" data-mh="icon-text">
                <div class="row">
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <div class="icon">
                           <i class="fas fa-search-dollar fa-5x"></i>
                        </div>
                    </div>
                    <div class="col-lg-9 d-flex align-items-center justify-content-center">
                        <div class="icon-text">
                            <span>Looking for the new home?</span><br><br>
                            <p>10 new offers every day. 350 offers on site, trusted by a community of thousands of users.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 my-3">
            <a href="registerform.php" class="card px-4 py-5"data-mh="icon-text">
                <div class="row">
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <div class="icon">
                            <i class="fab fa-sellsy fa-5x"></i>
                        </div>
                    </div>
                    <div class="col-lg-9 d-flex align-items-center justify-content-center">
                        <div class="icon-text">
                            <span>Want to Sell your home?</span><br><br>
                            <p>10 new offers every day. 350 offers on site, trusted by a community of thousands of users. </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

</section>


<!-- -----------------------------------End of New Home-------------------- -->

<!-- ----------------------------------Prasid Codes-------------------------------------- -->

<!-- -----------------------------------Start of City Properties-------------------- -->

<section class="city-property">
    <div class="container">
        <h1 class="mb-5">PROPERTIES BY CITIES</h1>
        <div class="row">
            <div class="col-lg-6 col-md-6 my-4">
                <a href="#" class="card card">
                    <div class="card-img">
                        <img src="pics/city1.jpg" height="100%"  width="100%">
                    </div>
                    <div class="card-text text-center">
                        <h4>NAXAL</h4>
                        <p>10 PROPERTIES</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 my-4">
                <a href="#" class="card card">
                    <div class="card-img">
                        <img src="pics/city2.jpg" height="100%"  width="100%">
                    </div>
                    <div class="card-text text-center">
                        <h4>PULCHOWK</h4>
                        <p>3 PROPERTIES</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-4 col-md-4 my-4">
                <a href="#" class="card card">
                    <div class="card-img">
                        <img src="pics/city3.jpg" height="100%"  width="100%">
                    </div>
                    <div class="card-text text-center">
                        <h4>NEW ROAD</h4>
                        <p>8 PROPERTIES</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 my-4">
                <a href="#" class="card card">
                    <div class="card-img">
                        <img src="pics/city4.jpg" height="100%"  width="100%">
                    </div>
                    <div class="card-text text-center">
                        <h4>HATTISAR</h4>
                        <p>13 PROPERTIES</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 my-4">
                <a href="#" class="card card">
                    <div class="card-img">
                        <img src="pics/city5.jpg" height="100%"  width="100%">
                    </div>
                    <div class="card-text text-center">
                        <h4>RNAC</h4>
                        <p>12 PROPERTIES</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- -----------------------------------End of City Properties-------------------- -->

<!-- ------------------------------Arzun Codes---------------------------- -->

<!-- --------------------------------------Start of Why Choose Us------------------------------ -->
<section class="whychooseus">
        <div class="container">
        <h1 class="text-center">Why Choose Us</h1>

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="why d-flex" data-mh="height">
                    <i class="fas fa-users"></i>
                    <div class="text">
                    <h6>TRUSTED BY THOUSANDS</h6>
                    <p>10 new offers every day. 350 offers on site, trusted by a community of thousands of users.</p>
                     </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="why d-flex" data-mh="height">
                        <i class="fas fa-copy"></i>
                    <div class="text">
                    <h6>WIDE RANGE OF PROPERTIES</h6>
                    <p>With a robust selection of popular properties on hand, as well as leading properties from real estate experts.</p>
                </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="why  d-flex" data-mh="height">
                        <i class="fas fa-hand-holding-usd"></i>
                    <div class="text">
                    <h6> FINANCING MADE EASY</h6>
                    <p>Our stress-free finance department that can find financial solutions to save you money.</p>
                </div>
                </div>
            </div>

        </div>

        </div>
    </section>

<!-- --------------------------------------End of Why Choose Us------------------------------ -->

<!-- ------------------------------Arzun Codes---------------------------- -->

<!-- --------------------------------------Start of Becom Agent------------------------------ -->

    <section class="becomeagent">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="become d-flex">
                            <i class="fas fa-users-cog"></i>
                            <h1>Become a Real Estate Agent</h1>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="button">
                                <a href="registerform.php" class="btn"> <i class="fas fa-user"></i>Register Now</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- --------------------------------------End of Becom Agent------------------------------ -->

<!-- ------------------------------Arzun Codes---------------------------- -->

<!-- --------------------------------------Start of Our Partners------------------------------ -->


    <section class="ourpartners">
        <div class="container">
            <h1 class="text-center">Our Partners</h1>

            <div class="row images">
                <div class="col-lg-3 col-md-6 my-4">
                    <img src="images/1p.png">
                </div>

                <div class="col-lg-3 col-md-6 my-4">
                        <img src="images/2p.png">
                </div>

                <div class="col-lg-3 col-md-6 my-4">
                        <img src="images/3p.png">
                </div>

                <div class="col-lg-3 col-md-6 my-4">
                        <img src="images/4p.png">
                </div>
            </div>
        </div>
    </section>

<!-- --------------------------------------End of Our Partners------------------------------ -->





<?php include('include/footer.php'); ?>


