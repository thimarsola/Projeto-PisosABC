<section class="doubtsCta py-10 text-white-500 t-center">
    <div class="container">
        
        <!-- header -->
         <header class="doubtsCta__header mb-2">
             <h2 class="f-6">Você está com dúvidas?</h2>
         </header> 
        <!-- end of header -->
        
        <!-- content -->
         <div class="doubtsCta__content">
             <p class="mb-7">Clique no botão abaixo e tire todas as suas dúvidas com nossa equipe!</p>

             <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]["store"]), CONTACT["whatsapp"]["message"]["generic"], 'Quero conversar', 'btn btn-primary-500', 'Vamos conversar?'); ?>
         </div> 
        <!-- end of content -->
        
    </div>
</section>