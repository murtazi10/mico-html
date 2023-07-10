<?php
function ourDoctors ($doctors) {
    
$doctors = [
    'img' => ['images/team1.jpg','images/team2.jpg','images/team3.jpg'],
    'name' => ['Hennry','Jenni','Morco'],
     'h6' => ['MBBS','MBBS','MBBS'],      
    ];
    for ($i = 0;$i < 3;$i++) {
        echo '<div class="item">
        <div class="box">
          <div class="img-box">
            <img src="' .$doctors['img'][$i]  . '" alt="" />
          </div>
          <div class="detail-box">
            <h5>
            ' .$doctors['name'][$i]  . '
            </h5>
            <h6>
            ' . $doctors['h6'][$i]  . '
            </h6>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>';
      }
      
      return $doctors ;
 
};