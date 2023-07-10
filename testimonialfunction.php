<?php 
function testimonial ($testimonial) {
    $testimonial = [
        'span' => ['testimonial'],
    'span1' => ['Previous'],
    'span2' => ['Next'],
    'h5' => ['Morijorch',],
    'heading2' => [' Rochak'],
    'heading3' => ['Brad Johns'],
    'h6' => ['Default model text',' Default model text', 'Default model text'],
    'paragraph' => ['editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will
     uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text,
      and a search for lorem ipsum will uncover many web sites still in their infancy. 
      Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will 
      uncover many web sites still in their infancy. Various'],
    'p' => ['Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many
     web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 
     orem ipsum will uncover many web sites still in their infancy. editors now use Lorem Ipsum
      as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy.',  'Variouseditors now use Lorem Ipsum as their
       default model text, and a search for lorem ipsum will uncover 
      many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will 
      uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover
       many web sites still in their infancy.'
    ],
];


for ($i = 0; $i < 1; $i++) {
    echo '<div class="container">
    <div class="heading_container">
      <h2>
        <span> ' . $testimonial['span'][$i] . ' </span>
      </h2>
    </div>
  </div>
  <div class="container px-0">
    <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="box">
            <div class="client_info">
              <div class="client_name">
                <h5>' . $testimonial['h5'][$i] . '</h5>
                <h6>
                ' . $testimonial['h6'][$i] . '
                </h6>
              </div>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
            <p>' . $testimonial['paragraph'][$i] . '</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="box">
            <div class="client_info">
              <div class="client_name">
                <h5>' . $testimonial['heading2'][$i] . '</h5>
                <h6>' . $testimonial['h6'][$i] . '</h6>
              </div>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
            <p>' . $testimonial['p'][$i] . '</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="box">
            <div class="client_info">
              <div class="client_name">
                <h5>' . $testimonial['heading3'][$i] . '</h5>
                <h6>' . $testimonial['h6'][$i] . '</h6>
              </div>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
            <p>' . $testimonial['p'][$i] . '</p>
          </div>
        </div>
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only"> Previous </span>
        </a>
        <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only"> Next </span>
        </a>
      </div>
    </div>
  </div> 
  ' ;
  }
  return $testimonial ;



};