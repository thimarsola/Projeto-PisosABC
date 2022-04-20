<section class="testimonials py-10">
    <div class="container">
        
        <!-- header -->
         <header class="testimonials__header mb-8 t-center">
             <h2 class="f-7 mb-2">Nossos Depoimentos</h2>
             <p class="f-bold">Veja o que os nossos clientes dizem sobre nós</p>
         </header> 
        <!-- end of header -->
        
        <!-- row -->
         <div class="testimonials__row owl-carousel mx-auto">
             <?php
             
             $jsonTestimonials = file_get_contents(__DIR__ . '/../../includes/testimonials.json');
             $testimonialsList = json_decode($jsonTestimonials, true);
             
             foreach ($testimonialsList['testimonials'] as $testimonial):             
             ?>
             
             <!-- card -->
              <div class="testimonials__row__card t-center">
                  <!-- icon -->
                   <div class="testimonials__row__card__icon text-primary-500 f-7">
                       <i class="icon-testimonial"></i>
                   </div> 
                  <!-- end of icon -->
                  
                  <!-- body -->
                   <div class="testimonials__row__card__body mt-2 mb-4">
                       <p>"<?= $testimonial['testimonial']; ?>"</p>
                   </div>
                  <!-- end of body -->
                  
                  <!-- header -->
                   <div class="testimonials__row__card__header l-small">
                       <?php for($i = 0; $i < 5; $i++): ?>
                       <i class="icon-star text-primary-500"></i>
                       <?php endfor; ?>
                       
                       <p class="mt-1 f-bold"><?= $testimonial['name']; ?></p>
                   </div> 
                  <!-- end of header -->
              </div> 
             <!-- end of card -->
             
             <?php endforeach; ?>
         </div> 
        <!-- end of row -->
        
    </div>
</section>