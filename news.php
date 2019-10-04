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

<section class="breadcrumbs">
    <div class="container py-3">
        <p><a href="index.php">Home</a> &nbsp; <i class="fas fa-angle-right"></i> &nbsp; News </p>
    
    </div>
</section>

<section class="news">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-9">
                <h1>News</h1>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <a href="news-detail1.php" class="card my-4">
                            <img class="img-fluid" src="pics/11.jpg">
                            <span>05 August, 2019</span>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 my-4">
                        <a class="news-title" href="news-detail1.php">Retail banks wake up to digital lending this year</a>
                        <p class="my-2">Show pony game plan, close the loop so what do you feel you would bring to the table if you were hired for this position. Powerpoint Bunny shotgun approach, nor powerPointless. We just need to put these last issues to...</p>
                        <div class="my-5"> 
                            <small class="admin">Posted by : <a href="news-detail1.php#admin">Admin</a></small>
                            <small class="category">Categories : <a href="in-the-news.php">In the news,</a><a href="real-estate.php"> Real Estate</a></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <a href="news-detail2.php" class="card my-4">
                                <img class="img-fluid" src="pics/news3.jpg">
                                <span>22 April, 2019</span>
                            </a>
                        </div>
                        <div class="col-lg-8 col-md-8 my-4">
                            <a class="news-title" href="news-detail2.php">Strategic and commercial approach with issues</a>
                            <p class="my-2">Race without a finish line this is not the hill i want to die on work flows , but deliverables, so low-hanging fruit blue sky thinking. Run it up the flag pole red flag. Diversify kpis get buy-in organic growth. Socia...</p>
                            <div class="my-5"> 
                                <small class="admin">Posted by : <a href="news-detail2.php#admin">Admin</a></small>
                                <small class="category">Categories : <a href="real-estate.php">Real Estate</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <a href="news-detail3.php" class="card my-4">
                                    <img class="img-fluid" src="pics/news1.jpg">
                                    <span>14 February, 2019</span>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-8 my-4">
                                <a class="news-title" href="news-detail3.php">Within the construction industry as their overdraft</a>
                                <p class="my-2">Waste of resources locked and loaded, programmatically dog and pony show, productize or paddle on both sides accountable talk. Social currency pipeline. Churning anomalies cannibalize this vendor is incompetent cross-...</p>
                                <div class="my-5"> 
                                    <small class="admin">Posted by : <a href="news-detail3.php#admin">Admin</a></small>
                                    <small class="category">Categories : <a href="in-the-news.php">In the news</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <a href="news-detail4.php" class="card my-4">
                                        <img class="img-fluid" src="pics/news2.jpg">
                                        <span>12 December, 2019</span>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-8 my-4">
                                    <a class="news-title" href="news-detail4.php">The Gifts We Want to Give in 2019</a>
                                    <p class="my-2">Social currency pipeline. Churning anomalies cannibalize this vendor is incompetent cross-pollination. When does this sunset? no scraps hit the floor ramp up put a record on and see who dances, so critical mass. Digit...</p>
                                    <div class="my-5"> 
                                        <small class="admin">Posted by : <a href="news-detail4.php#admin">Admin</a></small>
                                        <small class="category">Categories : <a href="b-roll.php"> Images And B-Roll, Real Estate</a></small>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="col-lg-3">
                <div class="aside">
                    <form action="#" method="POST" class="d-flex">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search ...">
                        </div>
                        <div class="form-group">
                            <button class="btn" type="submit"><i class="fas fa-search "></i></button>
                        </div>
                    </form>
                    <hr style="border:2px solid var(--sec-color);margin:30px 0">
                    <strong><em>Categories</em></strong>
                    <div class="container category bg-light mt-4">
                        <a href="real-estate.php">Real Estate</a>
                        <a href="in-the-news.php">In The News</a>
                        <a href="b-roll.php">Images & B-Roll</a>
                    </div>
                    <hr style="border:2px solid var(--sec-color);margin:30px 0">
                    <strong><em>Recent News</em></strong>
                    <div class="recent mt-4">
                    <a href="news-detail1.php">Retail banks wake up to digital lending this year</a>
                    <hr>
                    <a href="news-detail2.php">Strategic and commercial approach with issues</a>
                    <hr>
                    <a href="news-detail3.php">Within the construction industry as their overdraft</a>
                    </div>
                    <hr style="border:2px solid var(--sec-color);margin:30px 0">
                    <strong><em>See Our Gallery</em></strong>
                    <div class="gallery d-flex flex-wrap mt-3">
                        <a data-lightbox="news-gallery" href="pics/space1.jpg"><img height="90px" width="75px" src="pics/space1.jpg"></a>
                        <a data-lightbox="news-gallery" href="pics/sale2.jpg"><img height="90px" width="75px" src="pics/sale2.jpg"></a>
                        <a data-lightbox="news-gallery" href="pics/space3.jpg"><img height="90px" width="75px" src="pics/space3.jpg"></a>
                        <a data-lightbox="news-gallery" href="pics/sale5.jpg"><img height="90px" width="75px" src="pics/sale5.jpg"></a>
                        <a data-lightbox="news-gallery" href="pics/sale3.jpg"><img height="90px" width="75px" src="pics/sale3.jpg"></a>
                        <a data-lightbox="news-gallery" href="pics/sale4.jpg"><img height="90px" width="75px" src="pics/sale4.jpg"></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>






<?php include('include/footer.php'); ?> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>
