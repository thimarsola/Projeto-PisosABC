<section class="about py-10">
    <div class="container">
        
        <!-- row -->
         <div class="about__row grid">
             
             <!-- image -->
              <div class="about__row__image">
                  <?= picture('imagem-quem-somos', 'Conheça mais sobre a ' . SITE['name'],null, 'png'); ?>
              </div>
             <!-- end of image -->
             
             <!-- content -->
              <div class="about__row__content">
                  <!-- header -->
                   <header class="about__row__content__header">
                       <h2 class="f-7 mb-1">Quem somos</h2>
                       <p class="f-bold t-justify">Somos referência no Grande ABC, litoral e na Grande São Paulo!</p>
                   </header> 
                  <!-- end of header -->
                  
                  <div class="line my-3"></div>
                  
                  <!-- body -->
                   <div class="about__row__content__body mb-5 t-justify">
                       <p>A Pisos ABC veio trazer para o ABC uma loja moderna com toda infra estrutura para um atendimento diferenciado para você decorar a sua residência, escritório, comércio ou academia.</p>
                       <br>
                       <p>Nossa equipe em parceria com as melhores marcas oferece produtos modernos, diferenciados , de excelente qualidade e conforto para vc inovar sua residência ou escritório.</p>
                   </div> 
                  <!-- end of body -->
                  
                  <!-- cta -->
                   <div class="about__row__content__cta">
                       <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]["store"]), CONTACT["whatsapp"]["message"]["generic"], 'Vamos conversar?', 'btn btn-primary-500', 'Vamos conversar?'); ?>
                   </div> 
                  <!-- end of cta -->
              </div> 
             <!-- end of content -->
         </div> 
        <!-- end of row -->
        
    </div>
</section>