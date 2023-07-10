<?php 
function treatment ($treatment) {
    $treatment = [
        'img' => ['images/treatment-side-img.jpg'],
        'img2' => ['images/t1.png'],
        'img3' => ['images/t2.png'],
        'img4' => ['images/t3.png'],
        'img5' => ['images/t3.png'],
        'h2' => ['Hospital'],
        'span' => ['Treatment'],
        'h4' => ['Nephrologist Care'],
        'heading4' => ['Eye Care'],
        'heading5' => ['Pediatrician Clinic'],
        'heading6' => ['Parental Care'],
        'p' => ['alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything'],
        'a' => ['Read More'],
        ];


        for ($i = 0; $i < 1; $i++) {
            echo '
            <div class="side_img">
              <img src= ' . $treatment['img'][$i] . '>
            </div>
            <div class="container">
              <div class="heading_container heading_center">
                <h2>
                ' . $treatment['h2'][$i] . ' <span>' . $treatment['span'][$i] . '</span>
                </h2>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-3">
                  <div class="box ">
                    <div class="img-box">
                      <img src=' . $treatment['img2'][$i] . ' alt="">
                    </div>
                    <div class="detail-box">
                      <h4>
                      ' . $treatment['h4'][$i] . '
                      </h4>
                      <p>
                      ' . $treatment['p'][$i] . '
                      </p>
                      <a href="">
                      ' . $treatment['a'][$i] . '
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="box ">
                    <div class="img-box">
                      <img src=' . $treatment['img3'][$i] . ' alt="">
                    </div>
                    <div class="detail-box">
                      <h4>
                      ' . $treatment['heading4'][$i] . '
                      </h4>
                      <p>
                      ' . $treatment['p'][$i] . '              
                      </p>
                      <a href="">
                      ' . $treatment['a'][$i] . '
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="box ">
                    <div class="img-box">
                      <img src=' . $treatment['img4'][$i] . ' alt="">
                    </div>
                    <div class="detail-box">
                      <h4>
                      ' . $treatment['heading5'][$i] . '
                      </h4>
                      <p>
                      ' . $treatment['p'][$i] . '              
                      </p>
                      <a href="">
                      ' . $treatment['a'][$i] . '
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="box ">
                    <div class="img-box">
                      <img ' . $treatment['img5'][$i] . ' alt="">
                    </div>
                    <div class="detail-box">
                      <h4>
                      ' . $treatment['heading6'][$i] . '
                      </h4>
                      <p>
                      ' . $treatment['p'][$i] . '       
                      </p>
                      <a href="">
                      ' . $treatment['a'][$i] . '
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div> ' ;
          }
          return $treatment ;
        
};