<?php

function categories ($categories) {
    $categories = [
        [ 
            'link' => 'index.php',
            'name' => 'Home',
    
        ],
        [
            'link' => 'about.php',
            'name' => 'About',
    
        ],
        [
            'link' => 'treatment.php',
            'name' => 'Treatment',
        ],
        [
            'link' => 'doctor.php',
            'name' => 'Doctor',
        ],
        [
            'link' => 'testimonial.php',
            'name' => 'Testimonial',
        ],
        [
            'link' => 'contact.php',
            'name' => 'Contact Us',
        ],
    ];

    foreach($categories as $category) {
        echo ' <ul class="navbar-nav  ">
        <li class="nav-item active">
          <a class="nav-link" href="' .$category['link'] . '">' .$category['name'] . '<span class="sr-only">(current)</span></a>
        </li>
      </ul>';
      }
      return $categories ;
};