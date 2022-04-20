<section class="cta py-10">
	<div class="container">

		<!-- content -->
		 <div class="cta__content px-5 py-8 bg-neutral-500 text-white-500">
			 
             <!-- header -->
              <header class="cta__content__header t-uppercase">
                  <h2 class="f-5">O melhor preço e qualidade</h2>
              </header> 
             <!-- end of header -->
             
             <div class="line my-3"></div>
             
             <!-- body -->
             <div class="about__row__content__body mb-5 t-justify">
                 <p>Parcelamos em até 10x sem juros no cartão! Entregamos seu produto em até 72h!</p>
                 <br>
                 <p>Solicite já seu orçamento pelo nosso WhatsApp de forma rápida e fácil!</p>
             </div>
             <!-- end of body -->

             <!-- cta -->
             <div class="about__row__content__cta">
                 <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]["store"]), CONTACT["whatsapp"]["message"]["budget"], 'Solicite um orçamento', 'btn btn-primary-500', 'solicite já o seu orçamento'); ?>
             </div>
             <!-- end of cta -->
		 </div>
		<!-- end of content -->

	</div>
</section>