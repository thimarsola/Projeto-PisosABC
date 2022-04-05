<div class="whatsapp">
   <div class="whatsapp__content">
      <?php
      $number = (is_page(['Persianas', 'Papel de Parede']) ? CONTACT["whatsapp"]["number"]["paper"] : CONTACT["whatsapp"]["number"]["store"]);
            
         echo whatsapp(formatPhone($number), CONTACT["whatsapp"]["message"]["generic"], '<span class="d-none">WhatsApp</span><i class="icon-whatsapp"></i>'); 
         ?>
   </div>
</div>

