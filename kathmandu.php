<?php include('include/header.php'); ?> 

<style>
    .header{
        box-shadow: 1px 1px 10px 1px grey;
    }
    .header a.hm{
        background:transparent;
    }
    .header a{
      color:black!important;
    }
    .header .listing .list a,
    .header .listing .refresh,
    .header .listing .heart,
    .header .listing .user{
        border: 1px solid var(--pri-color);
    }
    .header .listing .list a:hover{
        background: var(--pri-color);
        color:white!important;
    }
    .header .menu #bars{
        color:var(--pri-color)!important;
    }
    .header .register a{
        color:var(--pri-color)!important;
    }
    .header .register a:hover{
        color:var(--sec-color)!important;
    }
    
</style>

<div class="clearfix"></div>


<section class="new-home-category mt-3">
<div class="top-category container d-flex justify-content-between flex-wrap">
    <div class="location font-weight-bold">
        <span style="font-family:'abel';letter-spacing:1px;">KATHMANDU</span>
    </div>
    <div class="category input-box">    
        <select class="custom-select">
            <option selected disabled>Categories</option>
            <option value="1">Buy Category</option>
            <option value="2">Rent Category</option>
            <option value="3">Sold Category</option>
        </select>    
    </div>
    <div class="location input-box p-0">    
        <select class="custom-select">
            <option selected disabled>Areas</option>
            <option value="1">Baneshwor</option>
            <option value="2">Sundhara</option>
            <option value="3">Kalanki</option>
            <option value="4">Gaushala</option>
            <option value="5">Balaju</option>
        </select>    
    </div>
    <div class="price input-box">
        <button class="btn dropdown-toggle" data-toggle="dropdown">
            Price: Rs. <span id="demo1"></span>
            &ndash; 
            Rs. <span id="demo2"></span>
        </button>
        <div class="dropdown-menu p-3"style="z-index:1">
            Min Price: <input type="range" class="custom-range" min="10000" max="100000" value="50000" id="customRange1">
           
            Max Price: <input type="range" class="custom-range" min="100000" max="1000000" value="800000" id="customRange2">  
        </div>    
    </div>
    <div class="btn search">
        SEARCH
    </div>
    <div class="location">
        <a style="font-family:'abel';color:var(--pri-color);" href="new-home.php">View all Land & Property</a>
    </div>
</div>

<section class="all container-fluid p-0 mt-4" style="overflow-x:hidden;">
    <div class="row">
        <div class="col-lg-7 col-md-12 offset-lg-5 container">
            <div class="apartments d-flex flex-wrap justify-content-around pb-0 pt-0">
            <h2 style="font-family: 'abel'">Apartments</h2>
            <h6 style="cursor: pointer;"><i class="fas mt-2 fa-redo"></i> Reset Search</h6>
            <h6 style="cursor: pointer;"><i class="far mt-2 fa-heart"></i> Save Search</h6>
            <div class="new d-flex" style="width: 160px;">
                <div class="arrow d-flex mt-2 pl-2">
                    <i class="fas m-0 p-0 fa-long-arrow-alt-up"></i>
                    <i class="fas m-0 p-0 fa-long-arrow-alt-down"></i>
                </div>
                <select class="custom-select" style="border:none;box-shadow: none;cursor:pointer">
                    <option selected>Newest</option>
                    <option value="1">Price (Lo - Hi)</option>
                    <option value="2">Price (Hi - Lo)</option>
                </select>   
            </div> 
        </div>
            <hr>
        </div>
    </div>
        <div class="row" style="height: 70vh">
            <div class="col-lg-5 col-md-12">
                <iframe class="sticky-top" src="https://www.google.com/maps/d/embed?mid=1sSWxH-JSdrDridWqgD3tqzDl90XqnhUS" width="100%" frameborder="0" style="border:0;z-index:0;height:80vh;margin-top:-80px" allowfullscreen></iframe> 
            </div>
            <div class="col-lg-7 col-md-12">
            <div class="row">
            <div class="col-lg-6 col-md-6 my-3">
                <div class="cards card my-3">
                    <img src="pics/news1.jpg" width="100%" height="250px">
                    <a class="overlay" href="details.php"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="details.php">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-primary">BUY</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
                <div class="cards card my-3">
                    <img src="pics/news2.jpg" width="100%" height="250px">
                    <a class="overlay" href="details.php"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="details.php">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
                <div class="cards card my-3">
                    <img src="pics/news3.jpg" width="100%" height="250px">
                    <a class="overlay" href="#"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="#">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
                <div class="cards card my-3">
                    <img src="pics/apartment3.jpg" width="100%" height="250px">
                    <a class="overlay" href="#"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="#">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
                <div class="cards card my-3">
                    <img src="pics/apartment2.jpg" width="100%" height="250px">
                    <a class="overlay" href="#"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="#">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
                <div class="cards card my-3">
                    <img src="pics/apartment1.jpg" width="100%" height="250px">
                    <a class="overlay" href="#"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="#">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 my-3">
                <div class="cards card my-3">
                    <img src="pics/space1.jpg" width="100%" height="250px">
                    <a class="overlay" href="details.php"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="details.php">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
                <div class="cards card my-3">
                    <img src="pics/sale1.jpg" width="100%" height="250px">
                    <a class="overlay" href="details.php"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="details.php">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
                <div class="cards card my-3">
                    <img src="pics/apartment3.jpg" width="100%" height="250px">
                    <a class="overlay" href="#"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="#">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
                <div class="cards card my-3">
                    <img src="pics/apartment4.jpg" width="100%" height="250px">
                    <a class="overlay" href="#"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="#">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
                <div class="cards card my-3">
                    <img src="pics/apartment5.jpg" width="100%" height="250px">
                    <a class="overlay" href="#"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="#">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
                <div class="cards card my-3">
                    <img src="pics/apartment6.jpg" width="100%" height="250px">
                    <a class="overlay" href="#"></a>
                    <div class="img-content">
                        <a style="color:white; text-decoration:none" href="#">Office Space In New Baneshwor</a>
                        <p><strike class="mr-2 text-light">Rs. 5,50,000</strike> Rs. 4.50,000</p>
                        <i class="fas fa-bed"></i> 4 Beds
                        <span class="mx-3"><i class="fas fa-bath"></i> 3 Baths</span>
                        <i class="fas fa-ruler-combined"></i> 4210 sq.ft
                    </div>
                    <div class="home-heart">
                        <i id="home4" class="fas mx-1 py-2 fa-home"></i>
                        <i id="heart4" class="fas mx-1 py-2 fa-heart"></i>
                    </div>
                    <div class="badges">
                        <div class="badge badge1 px-2 py-1 badge-success">FEATURED</div>
                        <div class="badge badge2 px-2 py-1 badge-danger">SOLD</div>
                    </div>
                    <div class="badge camera px-2 py-1">
                        <i class="fas fa-camera"></i> 15
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
</section>

</section>
























<?php include('include/footer.php'); ?> 
