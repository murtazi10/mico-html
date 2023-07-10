<?php
function about ($hospital) {
    $hospital = [
        'img' => ['images/about-img.jpg'],
        'h2' => ['About'],
        'span' => ['Hospital'],
        'p' => [' has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors'],
        'href' => ['Read More']
    
    ];

    
    for($i = 0; $i < 1;$i++){
      echo '<div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="' .$hospital['img'][$i] . '" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>' .$hospital['h2'][$i] . ' <span>' .$hospital['span'][$i] . '</span></h2>
            </div>
            <p>' .$hospital['p'][$i] . '</p>
            <a href="">' .$hospital['href'][$i] . '</a>
          </div>
        </div>
      </div>
    </div>';
    }
    

    return $hospital;
};




// <li class="nav-item">
// <a class="nav-link" href="about.php"> About</a>
// </li>
// <li class="nav-item">
// <a class="nav-link" href="treatment.php">Treatment</a>
// </li>
// <li class="nav-item">
// <a class="nav-link" href="doctor.php">Doctors</a>
// </li>
// <li class="nav-item">
// <a class="nav-link" href="testimonial.php">Testimonial</a>
// </li>
// <li class="nav-item">
// <a class="nav-link" href="contact.php">Contact Us</a>
// </li>