<div class="content py-10">
    <div class="container">

        <!-- decoration -->
        <section class="content__decoration mb-10">
            <!-- header -->
            <header class="content__decoration__header mb-3">
                <h2 class="f-7">Papel de Parede na Decoração</h2>
                <div class="line"></div>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="content__decoration__body t-justify">
                <p>O papel de parede pode ser aplicado em qualquer parte da sua casa ou escritório para garantir um visual mais bonito. É o tipo de detalhe que chama atenção positivamente e enriquece a decoração de seu espaço, seja ele qual for.</p>
            </div>
            <!-- end of body -->
        </section>
        <!-- end of decoration -->

        <!-- types -->
        <section class="content__types mb-10">
            <!-- header -->
            <header class="content__types__header mb-3">
                <h2 class="f-7">Tipos de Papel de Parede</h2>
                <div class="line"></div>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="content__types__body t-justify mb-7">
                <p>Atualmente trabalhamos com 3 tipos diferentes de papel de parede para poder suprir as necessidades da sua decoração. Cada modelo foi especialmente desenvolvido para ser aplicado em um ambiente específico, visando a maior durabilidade do papel e praticidade na aplicação.</p>
            </div>
            <!-- end of body -->

            <!-- row -->
            <div class="content__types__row grid">

                <?php
                $categories = [
                    "Adesivo",
                    "Vinílico - Aplicado com cola",
                    "3D"
                ];

                foreach ($categories as $category):
                    ?>

                    <!-- card -->
                    <article class="content__types__row__card">
                        <!-- image -->
                        <div class="content__types__row__card__image">
                            <?php
                            $image = get_the_title() . ' ' . $category;
                            echo picture(sanitize_title($image), 'Conheça essa nossa linha de produtos', 'img-fluid');
                            ?>
                        </div> 
                        <!-- end of image -->
                        
                        <!-- header -->
                        <header class="content__types__row__card__header f-3 t-center mt-2">
                            <h3><?= $category; ?></h3>
                        </header>
                        <!-- end of header -->
                    </article>
                    <!-- end of card -->

                <?php endforeach; ?>

            </div>
            <!-- end of row -->
        </section>
        <!-- end of types -->

        <!-- environment -->
        <section class="content__environment mb-10">
            <!-- header -->
            <header class="content__environment__header mb-3">
                <h2 class="f-7">Pode ser Aplicado em Todos Ambientes</h2>
                <div class="line"></div>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="content__environment__body t-justify mb-7">
                <p>A decoração com papel de parede valoriza todos os ambientes, seja colocando em apenas meia parede ou em uma parede inteira.</p>
            </div>
            <!-- end of body -->

            <!-- row -->
            <div class="content__environment__row grid">

                <?php
                $environments = [
                    "Sala",
                    "Quarto",
                    "Cozinha",
                    "Banheiro"
                ];

                foreach ($environments as $environment):
                    ?>

                    <!-- card -->
                    <article class="content__environment__row__card">
                        
                        <!-- image -->
                         <div class="content__environment__row__card__image">
                             <?php
                             $image = get_the_title() . ' ' . $environment;
                             echo picture(sanitize_title($image), 'Conheça essa nossa linha de produtos', 'img-fluid');
                             ?>
                         </div> 
                        <!-- end od image -->
                        
                        <!-- header -->
                        <header class="content__environment__row__card__header f-3 t-center mt-2">
                            <h3><?= $environment; ?></h3>
                        </header>
                        <!-- end of header -->
                    </article>
                    <!-- end of card -->

                <?php endforeach; ?>

            </div>
            <!-- end of row -->
        </section>
        <!-- end of environment -->
        
        <!-- benefits -->
         <section class="content__benefits">
             <!-- header -->
             <header class="content__benefits__header mb-3">
                 <h2 class="f-7">Vantagens dos papéis de parede</h2>
                 <div class="line"></div>
             </header>
             <!-- end of header -->

             <!-- body -->
             <div class="content__benefits__body t-justify mb-7">
                 <p>Além de mudar por completo o ambiente sem precisar de reformas, o papel de parede apresenta algumas outras vantagens.</p>
             </div>
             <!-- end of body -->
             
             <!-- row -->
              <div class="content__benefits__row grid">
                  <?php
                  
                  $jsonBenefits = file_get_contents(__DIR__ . '/../../includes/benefits.json');
                  $benefits = json_decode($jsonBenefits, true);

                  foreach ($benefits['benefits'] as $benefit):
                      ?>

                      <!-- card -->
                      <article class="content__benefits__row__card">
                          <!-- header -->
                          <header class="content__benefits__row__card__header mb-1 text-primary-500">
                              <h3><?= $benefit['title']; ?></h3>
                          </header>
                          <!-- end of header -->
                          
                          <!-- body -->
                           <div class="content__benefits__row__card__body t-small t-justify">
                               <p><?= $benefit['description']; ?></p>
                           </div> 
                          <!-- end of body -->
                      </article>
                      <!-- end of card -->

                  <?php endforeach; ?>
              </div> 
             <!-- end of row -->
         </section> 
        <!-- end of benefits -->
    </div>
</div>