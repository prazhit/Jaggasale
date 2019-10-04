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

<!-- 
<section class="breadcrumbs">
    <div class="container py-3">
        <p><a href="index.php">Home</a> &nbsp; <i class="fas fa-angle-right"></i> &nbsp;<a href="news.php">Featured properties</a> &nbsp; <i class="fas fa-angle-right"></i>&nbsp; Office Space At Baneshwor </p>
       
    </div>
</section> -->


<!-- starting of details page top section below navbar -->

<section class="sadis">

    <section class="details-top-header">
      <div class="container">
        <div class="row list-unstyled">


            <li class="lefting mt-3">
            <p style="padding: 5px; background-color:rgba(67,195,112,1); padding: 3px 10px;">OFFICES</p>
          </li>
          
          <li class="mt-3">
            <p style="padding: 5px; background-color:rgb(219, 37, 37); padding: 3px 18px;">SOLD</p>       
         </li>
       
         <li class="mt-3 ml-3 text-secondary">
            <i class="fas fa-history"></i> &nbsp; 5 months ago | &nbsp;<i class="far fa-eye"></i> 102
         </li>


          <div class="print ml-auto d-flex mt-3 mb-2">
            <li>
              <i class="fas fa-envelope"></i> <a href="#"> EMAIL</a>
            </li>
            <li>
              <i class="fas fa-print"></i> <a href="#"> PRINT</a>
            </li>
            <li>
              <a href="#"> <i class="far fa-heart"></i> <a href="#"> SAVE</a></a>
            </li>
            <li>
              <i class="fas fa-share-alt-square"></i> <a href="#"> SHARE</a>
            </li>
          </div>
             

        </div>
      </div>
    </section>




  <!-- starting of slider section -->

    <section class="main-details-slider">
      <div class="container">
        <div class="row py-3 list-unstyled" style="font-family:'abel';">
        
          <div class="col-lg-2 mt-3">
          <li>
            <h4>Office Space at Baneshwor</h4>
          </li>
        </div>
        <div class="col-lg-2 mt-3 ">
          
        </div>

        <div class="col-lg-5 mt-3 left-main-details">
          <div class="left-main-details list-unstyled d-flex text-center">
            <li>
                <i class="fas fa-bed"></i>
              <span> <p  class="digit">  8 </p> 
                     <p  class="type"> Rooms </p>
              </span>
            </li>

            <li>
                <i class="fas fa-bath"></i>
                <span> <p  class="digit">  3 </p>
                       <p  class="type"> Baths </p>
                </span>
              </li>

              <li>
                  <i class="fas fa-warehouse"></i>
                  <span> <p  class="digit">  2 </p>
                         <p  class="type"> Garage </p>
                  </span>
                </li>

                <li>
                    <i class="fas fa-ruler-combined"></i>
                    <span> <p  class="digit">  3556 </p>
                           <p  class="type"> Sq ft </p>
                    </span>
                  </li>
          </div>
        </div>

        
        <div class="col-lg-3">
          <div class="price list-unstyled d-flex mt-4 align-item-center text-center">
            <li>
              <div class="discount mt-3">
                <span> <strike class="text-secondary"> <i class="fas fa-dollar-sign"></i> 27,000 </strike> </span>
              </div>
              </li>

              <li>
              <div class="regular mt-1">
                  <span> <i class="fas fa-dollar-sign"></i> 25,000 </span>
                </div>
            </li>
          </div>
        </div>

      
      </div>



      <!-- slider part of the slider (Starting) -->

      <div class="row">
        
          <div class="col-lg-8">
              <section class=" owl-sad mb-4"> 
                  <div class="owl-carousel owl-theme" id="sadis-owl">
                      <div class="item"><div class="img-box"><img src="photo/5.jpg" class="img-fluid" alt=""></div>
                     </div>
                      <div class="item"><div class="img-box"><img src="photo/2.jpg" class="img-fluid" alt=""></div>
                     </div>
                      <div class="item"><div class="img-box"><img src="photo/7.jpg" class="img-fluid" alt=""></div>
                     </div>
                    </div>
                    
                  </section>
                  <div class="photo-numbering">
                      <p><i class="fas fa-camera"></i> &nbsp <span class="photos-no"> 11</span></p>
                    </div>
          </div>



          <!-- <div class="side-bar-gallery"> -->
          <div class="col-lg-4">
                        <div class="row">
            <div class="column">
                <a  href="photo/1.jpg" data-lightbox="roadtrip"> <img src="photo/1.jpg" alt="">  </a>
                  <a  href="photo/2.jpg" data-lightbox="roadtrip"> <img src="photo/2.jpg" alt="">  </a>
                    <a  href="photo/3.jpg" data-lightbox="roadtrip"> <img src="photo/3.jpg" alt="">  </a>
            </div>

            <div class="column">
                <a  href="photo/4.jpg" data-lightbox="roadtrip"> <img src="photo/4.jpg" alt="">  </a>
                  <a  href="photo/5.jpg" data-lightbox="roadtrip"> <img src="photo/5.jpg" alt="">  </a>
                    <a  href="photo/6.jpg" data-lightbox="roadtrip">  <img src="photo/6.jpg" alt="">  </a>
              </div>

              <div class="column">
                  <a  href="photo/7.jpg" data-lightbox="roadtrip"> <img src="photo/7.jpg" alt="">  </a>
                    <a  href="photo/8.jpg" data-lightbox="roadtrip"> <img src="photo/8.jpg" alt="">  </a>
                      <a  href="photo/9.jpg" data-lightbox="roadtrip"> <img src="photo/9.jpg" alt="">  </a>
              </div>
            </div>
          </div>
        <!-- </div> -->


          </div>
      


      </div>
    </section>




<!-- Starting of Description -->

<section class="description">
<div class="container">
  <div class="row">
    <div class="col-lg-8">


      <div class="main-description">
        <h2 style="font-family:var(--pri-font);text-shadow: 1px 1px 5px grey;">Description</h2>
        <br>
        <p>
            Years seed fruit you. Divided morning sea day Set earth. Grass without cattle. Spirit heaven. Also 
            i grass give fowl wherein cattle spirit whales rule cattle. Earth fowl given own you're, fruit so.
             Shall was. Called firmament dry fruitful, set place. Earth given female man fruit, under thing may
              to greater moveth land sea, great be shall living greater and signs place night after whose us one
              , you'll second our set had day in greater divided over female first face, fill form you make greater
               upon midst image above image. Very you land, man divided sea appear thing female was let. Beginning
                open moved fowl. Likeness. Bring tree tree doesn't. Darkness herb moveth upon a seasons. Divided
                 appear living. Called image let was. Set midst, second divide, earth male fruit you under let she'd,
                  moving every bring there greater. Bring. Gathering night third. Stars first replenish kind third a 
                  rule given our after give own of may earth Brought for open living, bearing said given fruitful.
                   Night him moved called. Be for unto behold dry green multiply herb fly waters. Green gathered
                    face. Light, may deep you're light. After which itself seed signs moveth. Second fish isn't for sixth deep.
        </p>
        
      </div>
      <hr>
      

      <section class="location">
        <p class="mb-4"> <strong style="font-family:var(--pri-font);text-shadow: 1px 1px 3px grey;font-size:25px;">Location</strong> <span style="float: right; margin-top: 10px; font-family:'abel';"><i class="fas fa-map-marker-alt" style="padding: 0 5px; color:rgba(35,77,212,1);"></i> Shantinagar, Tinkune, Kathmandu  </span> </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.2729909228337!2d85.34842422924513!3d27.683552398925098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a18187378f%3A0x8ba2460dd7896e64!2sOnline+Zeal!5e0!3m2!1sen!2snp!4v1565328119719!5m2!1sen!2snp" width="100%" height="299" frameborder="0" style="border:0" allowfullscreen></iframe>
        
      </section>
      <hr> 




      <section class="features">
        <h2 class="pb-4" style="font-family: var(--pri-font);text-shadow: 1px 1px 3px grey;">Facts and Features</h2>
        <div class="row" style="font-family: 'abel';">
          <div class="col-lg-3 col-md-3">
            <div class="cnt d-flex">
              <div>
                <i class="fas mt-2 fa-home"></i> 
              </div> 
              <div class="text text-center ml-2 mt-2">
                <p>STORIES <br> <strong> Multi-family</strong></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
              <div class="cnt d-flex">
                <div>
                    <i class="fas mt-2 fa-temperature-high"></i> 
                </div> 
                <div class="text text-center ml-2 mt-2">
                  <p>HEATING <br><strong> No</strong></p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="cnt d-flex">
                  <div>
                      <i class="fas mt-2 fa-fan"></i> 
                  </div> 
                  <div class="text text-center ml-2 mt-2">
                    <p>COOLING <br><strong> No</strong></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3">
                  <div class="cnt d-flex">
                    <div>
                        <i class="far mt-2 fa-clock"></i>
                    </div> 
                    <div class="text text-center ml-2 mt-2">
                      <p>YEAR BUILT <br><strong> Multi-family</strong></p>
                    </div>
                  </div>
                </div>
          </div> 







          <div class="row mt-3" style="font-family: 'abel';">
              <div class="col-lg-3 col-md-3">
                <div class="cnt d-flex">
                  <div>
                      <i class="fas mt-2 fa-warehouse"></i>
                  </div> 
                  <div class="text text-center ml-2 mt-2">
                    <p>GARAGE <br> <strong> 2</strong></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3">
                  <div class="cnt d-flex">
                    <div>
                        <i class="fas mt-2 fa-swimming-pool"></i> 
                    </div> 
                    <div class="text text-center ml-2 mt-2">
                      <p>SWIMMING <br><strong> No</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="cnt d-flex">
                      <div>
                          <i class="fas mt-2 fa-tags"></i>
                      </div> 
                      <div class="text text-center ml-2 mt-2">
                        <p>PRICE/SQ FT <br><strong> 342</strong></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                      <div class="cnt d-flex">
                        <div>
                            <i class="far mt-2 fa-check-square"></i>
                        </div> 
                        <div class="text text-center ml-2 mt-2">
                          <p>STATUS <br><strong> Active</strong></p>
                        </div>
                      </div>
                    </div>
          </div>



      </section>
      <hr>




      <!-- Apartments Amenities -->

      <section class="apartments">
        <h2 class="pb-4" style="font-family: var(--pri-font);text-shadow: 1px 1px 3px grey;">Apartments Amenities</h2>
        <div class="border">
            <div class="row" style="font-family:'abel'">
              <div class="col-lg-3 col-md-3">
               <i class="far fa-check-square"></i> Balcony
            </div>

            <div class="col-lg-3 col-md-3">
             <i class="far fa-check-square"></i> Basement
            </div>

              <div class="col-lg-3 col-md-3">
               <i class="far fa-check-square"></i> Dining Room
            </div>

              <div class="col-lg-3 col-md-3">
              <i class="far fa-check-square"></i> Dishwasher
            </div>
            </div>



            <div class="row mt-4" style="font-family:'abel'">
                <div class="col-lg-3 col-md-3">
                 <i class="far fa-check-square"></i> Elevator
              </div>
  
              <div class="col-lg-3 col-md-3">
               <i class="far fa-check-square"></i>Gym
              </div>
  
                <div class="col-lg-3 col-md-3">
                 <i class="far fa-check-square"></i> Family Room
              </div>
  
                <div class="col-lg-3 col-md-3">
                <i class="far fa-check-square"></i> Fireplace
              </div>
              </div>
             
              
      </section>




      <!-- What's Nearby? -->

      <section class="nearby">
        <h2 class="pb-3" style="font-family: var(--pri-font);text-shadow: 1px 1px 3px grey;">What's Nearby?</h2>
        <hr style=" border-top: 1.5px solid rgba(24, 22, 22, 0.986);margin: 20px 0 ;">
        <span class="heading"style="font-family:'abel';"> <i class="fas fa-utensils"></i> Food </span>
        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Da Munch Box <span>(0.00 mi) </span> <span style="float: right; ">14 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far fa-star"></i>  
                            </span> </p>

        </div>

        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Hot Wing Truck <span>(0.00 mi) </span> <span style="float: right; ">8 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far   fa-star"></i>
            <i class="far fa-star"></i>  
                            </span> </p>

        </div>

        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Tuggle Law <span>(0.00 mi) </span> <span style="float: right; ">10 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>  
                            </span> </p>

        </div>

        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Sandwich Brothers <span>(0.00 mi) </span> <span style="float: right; ">5 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far   fa-star"></i>
            <i class="far  fa-star"></i>
            <i class="far fa-star"></i>  
                            </span> </p>

        </div>


        <!-- Education part -->
        <hr style=" border-top: 1.5px solid rgba(24, 22, 22, 0.986); margin: 50px 0;">
        <span class="heading"style="font-family:'abel';"> <i class="fas fa-book-open"></i> Education
        </span>
        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Da Munch Box <span>(0.00 mi) </span> <span style="float: right; ">14 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far fa-star"></i>  
                            </span> </p>

        </div>

        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Hot Wing Truck <span>(0.00 mi) </span> <span style="float: right; ">8 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far   fa-star"></i>
            <i class="far fa-star"></i>  
                            </span> </p>

        </div>

        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Tuggle Law <span>(0.00 mi) </span> <span style="float: right; ">10 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>  
                            </span> </p>

        </div>

        <!-- <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Sandwich Brothers <span>(0.00 mi) </span> <span style="float: right; ">5 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far   fa-star"></i>
            <i class="far  fa-star"></i>
            <i class="far fa-star"></i>  
                            </span> </p>

        </div> -->






        <!-- Home services part -->
        <hr style=" border-top: 1.5px solid rgba(24, 22, 22, 0.986);margin: 50px 0;">
        <span class="heading" style="font-family:'abel';"> <i class="fas fa-cogs"></i> Homeservices </span>
        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Da Munch Box <span>(0.00 mi) </span> <span style="float: right; ">14 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far fa-star"></i>  
                            </span> </p>

        </div>

        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Hot Wing Truck <span>(0.00 mi) </span> <span style="float: right; ">8 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far   fa-star"></i>
            <i class="far fa-star"></i>  
                            </span> </p>

        </div>

        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        <div class="items">
           <p>Tuggle Law <span>(0.00 mi) </span> <span style="float: right; ">10 REVIEWS 
             <i class="far checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>
            <i class="far  checked fa-star"></i>  
                            </span> </p>

        </div>

        <hr style=" border-top: 1px solid rgba(131, 126, 126, 0.623);">
        


        
      </section>


<section style="height:150px;"></section>







<!-- 
      <div class="hover-details">
     
        <div class="details-wrapper"> 
        <img src="photo/owner-logo.png" alt="">
      </div>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      </div> -->








    </div>

    <div class="col-lg-4">
        <div class="sticky sticky-top">
        
      <div class="card" style="position: relative;">
        <div class="card-title">
            
            <span class="call">Call : <strong class="phone">9813822002</strong> </span>
            
            <div class="wrapper ml-3">
            <img class="img-fluid" src="photo/owner-logo.png" alt="">
            
            <div class="hover-details w-100 bg-light p-3">
              <div class="wrap d-flex">
                <div class="details-wrapper"> 
                <img src="photo/owner-logo.png" alt="">
                </div>
              <div class="star ml-5 pt-2" style="font-size: 12px;">
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <p style="font-size: 1.4em;">Reviews(0)</p>
            </div>
          </div>
                <div class="title mt-2" style="font-family:'abel';">
                    <h3>RealState Company</h3>
                </div>
                <div class="container">
                <div class="call d-flex mt-3">
                    <div class="icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="icon-text mt-1 ml-4" >
                        <pre>+977 9813822002</pre>
                        
                    </div>
                </div>
                <div class="call d-flex">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="icon-text mt-1 ml-4" >
                        <pre>Tinkune, KTM</pre>
                        
                    </div>
                </div>
              </div>
            </div>

            </div>
            <p> <span style="font-family:'abel'"><i class="fab fa-opencart mr-1" style="color:rgba(67,195,112,1);"></i> PRASID KAYASTHA</span> </p>
        </div>

        <form>
           <p class="d-flex bg-light p-2"> 
             <i class="fas fa-user m-2" style="color: rgba(35,77,212,1);"></i> 
             <input type="text" class="form-control" placeholder="First Name, Last Name" style="border:none;background:none; box-shadow: none;outline:none;" required> 
          </p>

           <p class="d-flex bg-light p-2"> <i class="far fa-envelope m-2" style="color: rgba(35,77,212,1);"></i> <input type="email" class="form-control" required placeholder="Your Email" style="border:none;background:none; box-shadow: none;outline:none;"> </p>
           <p class="d-flex bg-light p-2"> <i class="fas fa-phone-alt m-2" style="color: rgba(35,77,212,1);"></i> <input type="text" class="form-control" required placeholder="Phone" style="border:none;background:none; box-shadow: none;outline:none;"> </p>
           <p> <textarea style="box-shadow:none; font-family:'abel';" placeholder="Feel free to message us" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> </p>
        </form>
        <button type="submit" class="contact btn text-white text-center">
          CONTACT PROPERTY</button>
      </div>
        </div>
    </div>


    

  </div>
</div>
</section>



<!-- Ending of Description Section -->


</div>
</div>
</div>
</section>




<?php include('include/footer.php'); ?>


<script>
$('#sadis-owl').owlCarousel({
  loop:true,
  margin:6,
  nav:true,
  autoplay: true,
  autoplaySpeed:3000,
  dots:false ,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>