<?php
function carousel ($carousel) {
    $carousel = [
        'h1' => ['Mico',],
        'span' => ['Hospital',],
        'p' => [' when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to'],
        'href' => ['Contact us',],
        'img2' =>['images/slider-img.jpg'],
    ];

    for ($i = 0;$i < 1;$i++) {
        echo ' <div class="container ">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="play_btn">
                <button>
                  <i class="fa fa-play" aria-hidden="true"></i>
                </button>
              </div>
              <h1>
              ' .$carousel['h1'][$i] . ' <br>
                <span>
                ' .$carousel['span'][$i] . '
                </span>
              </h1>
              <p>
              ' .$carousel['p'][$i] . '
              </p>
              <a href="">
              ' .$carousel['href'][$i] . '
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="' .$carousel['img2'][$i] . '" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>' ;
       }

       return $carousel ;
}