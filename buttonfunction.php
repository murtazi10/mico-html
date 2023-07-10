<?php
function  button($carouselButton) {
    $carouselButton = [
        'span2' => ['Previous'],
        'span3' => ['Next'],
        'arrow-left' => ['images/prev.png'],
        'arrow-right' => ['images/next.png'],
    
    ];
    for ($i = 0;$i < 1;$i++) {
        echo '<div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <img src="' . $carouselButton ['arrow-left'][$i] . '" alt="">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <img src="' . $carouselButton ['arrow-right'][$i] . '" alt="">
          <span class="sr-only"' . $carouselButton ['span3'][$i] . '</span>
        </a>
      </div>';
       }

       return ($carouselButton ) ;
}