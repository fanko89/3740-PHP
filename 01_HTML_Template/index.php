<?php include 'header.php'; ?>


<body>
    <!-- swiper images -->
    <main>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <picture>
                <source srcset="img/slider1_small.png" media="(max-width: 600px)">
                <source srcset="img/slider1_medium.png" media="(max-width: 900px)">
        <img src="img/slider1_large.png" alt="slider">
  
        <p><b>Test image1</b> - this is just test images to see how sliders work</p>
    </picture> 
     </div>

    <div class="swiper-slide">
        <picture>
            <source srcset="img/slider2_small.png" media="(max-width: 600px)">
            <source srcset="img/slider2_medium.png" media="(max-width: 900px)">
    <img src="img/slider2_large.png" alt="slider">

    <p><b>Test image2</b> - this is just test images to see how sliders work</p>
</picture> 
</div>


<div class="swiper-slide">
    <picture>
        <source srcset="img/slider3_small.png" media="(max-width:600px)">
        <source srcset="img/slider3_medium.png" media="(max-width: 900px)">
<img src="img/slider3_large.png" alt="slider">

<p><b>Test image3</b> - this is just test images to see how sliders work</p>
</picture> 
</div>
    </div>
 <div class="swiper-pagination">

 </div>
</div>

       <!-- blog -->

 
        <section id= "blogGallery">
            <h1>Recent Blog Articles</h1>
            <div class = "flexed">

            <div class="column small-12 medium-6 large-3">
                <div class="card">
            <img src="img/img1.png" alt="get away">
                <p>How do i get away today?</p>
        
        </div>
        <div class="bottomCard">
            <a>2/23/23</a>
        </div>
    </div>

    <div class="column small-12 medium-6 large-3">
        <div class="card">
              <img src="img/img2.png" alt="plan trip">
              <p>Where can I plan my next trip?</p>
           
            </div>
            <div class="bottomCard">
                <a>2/23/23</a>
              </div>
        </div>
    
    
        <div class="column small-12 medium-6 large-3">
        <div class="card">
              <img src="img/img3.png" alt="visit places">
              <p>best places to visit</p>
         
            </div>
            <div class="bottomCard">
                <a>2/23/23</a>
              </div>
        </div>

       
            <div class="column small-12 medium-6 large-3">
                <div class="card">
              <img src="img/img4.png" alt="need for trip">
              <p>Things you might need on your trip</p>
            </div>
            <div class="bottomCard">
                <a>2/23/23</a>
                </div>
        </div>
      
</div>
    </section>
    </main>
    <?php include 'footer.php'; ?>
