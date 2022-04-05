<section class="budget py-10 text-white-500 t-center">
    <div class="container">
        
        <!-- header -->
         <header class="budget__header mb-2">
             <h2 class="f-6">Solicite já seu orçamento!</h2>
         </header> 
        <!-- end of header -->
        
        <!-- content -->
         <div class="budget__content">
             <p class="mb-7">Clique no botão abaixo e solicite seu orçamento com nossa equipe!</p>

             <?php
             $number = (is_page(['Persianas','Papel de Parede']) ? CONTACT["whatsapp"]["number"]["paper"] : CONTACT["whatsapp"]["number"]["store"]);
             
             echo whatsapp(formatPhone($number), CONTACT["whatsapp"]["message"]["budget"] . ' para ' . get_the_title(), 'Quero um orçamento', 'btn btn-primary-500', 'Solicite já o seu orçamento?'); 
             ?>
         </div> 
        <!-- end of content -->
        
    </div>
</section>