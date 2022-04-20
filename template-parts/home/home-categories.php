<section class="categories py-10">
    <div class="container">
        
        <!-- row -->
         <div class="categories__row grid">
             
             <!-- header -->
              <header class="categories__row__header">
                  <h2 class="f-7 mb-2">Nossos Produtos</h2>
                  <p class="t-justify mb-4">Invista em produtos de qualidade e originais de fábrica, aqui você pode confiar!</p>
                  <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]["store"]), CONTACT["whatsapp"]["message"]["generic"], 'Conheça mais', 'btn btn-primary-500', 'Conheça mais sobre a ' . SITE['name']); ?>
              </header> 
             <!-- end of header -->
             
             <?php
             
             $jsonCategories = file_get_contents(__DIR__ . '/../../includes/categories.json');
             $categoriesList = json_decode($jsonCategories, true);
             
             foreach ($categoriesList['categories'] as $category):
             ?>
             
             <!-- card -->
              <article class="categories__row__card">
                  <a href="<?= get_the_permalink(get_page_by_title($category['title']));  ?>" title="Conheça essa nossa linha de produtos">
                      <?= picture($category['image'], 'Conheça essa nossa linha de produtos', 'img-fluid'); ?>
                      
                      <!-- header -->
                       <header class="categories__row__card__header f-3">
                           <h3><?= $category['title'] ?></h3>
                       </header> 
                      <!-- end of header -->
                  </a>
              </article> 
             <!-- end of card -->
             
             <?php endforeach; ?>
             
         </div> 
        <!-- end of row -->
        
    </div>
</section>