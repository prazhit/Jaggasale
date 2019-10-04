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
        <p><a href="index.php">Home</a> &nbsp; <i class="fas fa-angle-right"></i> &nbsp; Wishlist </p>
    </div>
</section>

<section class="wishlist">
    <div class="container d-flex text-center flex-wrap justify-content-around">
        <div class="wish-title">
            <h1 style="font-family:'abel'" class="text-center">Wishlist</h1>
        </div>
        <div class="wish-save d-flex flex-wrap pt-1 ml-auto justify-content-around">
            <div class="wish-btn">
                <a href="wishlist.php" class="btn">Wishlist &nbsp;<span class="badge badge-primary">0</span></a>
            </div>
            <div class="save-search ml-5 mt-2 mr-5">
                <a href="save-search.php">Saved Searches &nbsp;<span class="badge badge-info">0</span></a>
            </div>
        </div>
    </div>
</section>

<div class="container wish-detail d-flex justify-content-center align-items-center text-center" style="min-height:200px">
    <h1>You don't have any item in wishlist.</h1>
</div>
















<?php include('include/footer.php'); ?> 
