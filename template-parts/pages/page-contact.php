<section class="contact py-10">
    <div class="container">

        <!-- row -->
        <div class="contact__row grid">

            <!-- information -->
            <div class="contact__row__information">

                <!-- header -->
                <header class="contact__row__information__header d-none">
                    <h2>Informações para contato</h2>
                </header>
                <!-- end of header -->

                <!-- wrapper -->
                <div class="contact__row__information__wrapper grid">

                    <!-- card -->
                    <article class="contact__row__information__wrapper__card">
                        <!-- icon -->
                        <div class="contact__row__information__wrapper__card__icon f-6 text-primary-500">
                            <i class="icon-map"></i>
                        </div>
                        <!-- end of icon -->

                        <!-- content -->
                        <div class="contact__row__information__wrapper__card__content">

                            <!-- header -->
                            <header class="contact__row__information__wrapper__card__content__header mb-1">
                                <h3>Endereço</h3>
                            </header>
                            <!-- end of header -->

                            <!-- body -->
                            <div class="contact__row__information__wrapper__card__content__body">
                                <address>
                                    <a rel="noreferrer noopener nofollow" href="<?= CONTACT['addressLink']; ?>"
                                       class="link-neutral-500" title="Venha conhecer a <?= SITE['name']; ?>"
                                       target="_blank"><?= CONTACT['address']; ?></a>
                                </address>
                            </div>
                            <!-- end of body -->
                        </div>
                        <!-- end of content -->
                    </article>
                    <!-- end of card -->

                    <!-- card -->
                    <article class="contact__row__information__wrapper__card">
                        <!-- icon -->
                        <div class="contact__row__information__wrapper__card__icon f-5 text-primary-500">
                            <i class="icon-notification"></i>
                        </div>
                        <!-- end of icon -->

                        <!-- content -->
                        <div class="contact__row__information__wrapper__card__content">

                            <!-- header -->
                            <header class="contact__row__information__wrapper__card__content__header mb-1">
                                <h3>E-mail</h3>
                            </header>
                            <!-- end of header -->

                            <!-- body -->
                            <div class="contact__row__information__wrapper__card__content__body">
                                <address>
                                    <a rel="noreferrer noopener nofollow" href="mailto<?= CONTACT['mail']; ?>"
                                       class="link-neutral-500" title="Envie um e-mail para a <?= SITE['name']; ?>"
                                       target="_blank"><?= CONTACT['mail']; ?></a>
                                </address>
                            </div>
                            <!-- end of body -->
                        </div>
                        <!-- end of content -->
                    </article>
                    <!-- end of card -->

                    <!-- card -->
                    <article class="contact__row__information__wrapper__card">
                        <!-- icon -->
                        <div class="contact__row__information__wrapper__card__icon f-6 text-primary-500">
                            <i class="icon-phone-outline"></i>
                        </div>
                        <!-- end of icon -->

                        <!-- content -->
                        <div class="contact__row__information__wrapper__card__content">

                            <!-- header -->
                            <header class="contact__row__information__wrapper__card__content__header mb-1">
                                <h3>Telefones</h3>
                            </header>
                            <!-- end of header -->

                            <!-- body -->
                            <div class="contact__row__information__wrapper__card__content__body">
                                <ul>
                                    <li>
                                        <a rel="noreferrer noopener nofollow"
                                           href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>"
                                           class="link-neutral-500" title="Solicite seu orçamento pelo telefone"
                                           target="_blank"><?= CONTACT['phone']['01']; ?></a>
                                    </li>
                                    <li>
                                        <a rel="noreferrer noopener nofollow"
                                           href="tel:<?= formatPhone(CONTACT['phone']['02']); ?>"
                                           class="link-neutral-500" title="Solicite seu orçamento pelo telefone"
                                           target="_blank"><?= CONTACT['phone']['02']; ?></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end of body -->
                        </div>
                        <!-- end of content -->
                    </article>
                    <!-- end of card -->

                    <!-- card -->
                    <article class="contact__row__information__wrapper__card">
                        <!-- icon -->
                        <div class="contact__row__information__wrapper__card__icon f-5 text-primary-500">
                            <i class="icon-whatsapp"></i>
                        </div>
                        <!-- end of icon -->

                        <!-- content -->
                        <div class="contact__row__information__wrapper__card__content">

                            <!-- header -->
                            <header class="contact__row__information__wrapper__card__content__header mb-1">
                                <h3>WhatsApp</h3>
                            </header>
                            <!-- end of header -->

                            <!-- body -->
                            <div class="contact__row__information__wrapper__card__content__body">
                                <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]["store"]),
                                    CONTACT["whatsapp"]["message"]["generic"], CONTACT["whatsapp"]["number"]["store"],
                                    'link-neutral-500'); ?>
                            </div>
                            <!-- end of body -->
                        </div>
                        <!-- end of content -->
                    </article>
                    <!-- end of card -->

                    <!-- card -->
                    <article class="contact__row__information__wrapper__card">
                        <!-- icon -->
                        <div class="contact__row__information__wrapper__card__icon f-5 text-primary-500">
                            <i class="icon-clock-outline"></i>
                        </div>
                        <!-- end of icon -->

                        <!-- content -->
                        <div class="contact__row__information__wrapper__card__content">

                            <!-- header -->
                            <header class="contact__row__information__wrapper__card__content__header mb-1">
                                <h3>Horário de Funcionamento</h3>
                            </header>
                            <!-- end of header -->

                            <!-- body -->
                            <div class="contact__row__information__wrapper__card__content__body">
                                <p>Segunda a Sexta: 8h às 20h</p>
                                <p>Sábados: 8h às 13h</p>
                            </div>
                            <!-- end of body -->
                        </div>
                        <!-- end of content -->
                    </article>
                    <!-- end of card -->
                </div>
                <!-- end of wrapper -->

            </div>
            <!-- end of information -->

            <!-- form -->
            <div class="contact__row__form px-4 py-5 bg-gray-100">

                <!-- wrapper -->
                <div class="contact__row__form__wrapper">

                    <!-- header -->
                    <header class="contact__row__form__wrapper__header">
                        <h2 class="f-5 mb-2">Vamos conversar?</h2>
                        <p class="t-justify">Envie-nos um e-mail com seu pedido de orçamento, dúvidas e sugestões que
                            responderemos prontamente. Estamos à sua disposição por telefone e para um café em nossa
                            loja.</p>
                    </header>
                    <!-- end of header -->

                    <!-- content -->
                    <div class="contact__row__form__wrapper__content mt-4">
                        <form id="form" method="POST" enctype="multipart/form-data" autocomplete="off">
                            <!-- group -->
                            <div class="contact__row__form__wrapper__content__group">
                                <label for="name" class="d-none">Nome</label>
                                <input type="text" id="name" name="name" placeholder="Nome">
                            </div>
                            <!-- end of group -->

                            <!-- group -->
                            <div class="contact__row__form__wrapper__content__group">
                                <label for="email" class="d-none">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="E-mail">
                            </div>
                            <!-- end of group -->

                            <!-- group -->
                            <div class="contact__row__form__wrapper__content__group">
                                <label for="phone" class="d-none">Telefone</label>
                                <input type="tel" id="phone" name="phone" placeholder="Telefone">
                            </div>
                            <!-- end of group -->

                            <!-- group -->
                            <div class="contact__row__form__wrapper__content__group">
                                <label for="message" class="d-none">Escreva sua mensagem</label>
                                <textarea name="message" id="message" cols="30" rows="4"
                                          placeholder="Escreva a sua mensagem"></textarea>
                            </div>
                            <!-- end of group -->

                            <!-- status -->
                            <div class="contact__row__form__wrapper__content__status mb-1 d-none">
                                <div class="contact__row__form__wrapper__content__status--loading t-center f-5 rotate">
                                    <i class="icon-spinner text-primary-500"></i>
                                </div>
                            </div>
                            <!-- end of status -->

                            <!-- button -->
                            <div class="contact__row__form__wrapper__content__button t-center">
                                <button id="button-contact" class="btn btn-primary-500 radius" type="submit"
                                        name="submit" value="submit">Enviar mensagem <i class="icon-send"></i></button>
                            </div>
                            <!-- end of button -->

                        </form>
                    </div>
                    <!-- end of content -->

                </div>
                <!-- end of wrapper -->

            </div>
            <!-- end of form -->

        </div>
        <!-- end of row -->

    </div>
</section>