<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>

<section class="services">
   <div class="container">
      <h2 class="title">НАШІ ПОСЛУГИ</h2>
      <div class="services__inner">
         <div class="services__content">
            <div class="services__content-box">
               <h6 class="services__content-title">
                  Чому ввезення авто зі США?
               </h6>
               <div class="services__content-textbox">
                  <p class="services__content-text">
                     Ми порівняли ринки США з Європейськими і зрозуміли, що покупка автомобіля в Америці вигідніша в
                     кілька
                     раз, як би
                     парадоксально це звучало. Це викликано продуманою логістикою, рівнем розвитку сервісів
                     оцінювання стану авто
                     та самим процесом купівлі автомобіля.
                  </p>
                  <p class="services__content-text">
                     Більшість громадян США беруть автомобіль у лізинг на кілька років і весь час експлуатації сама
                     лізингова компанія
                     займається постійним ТО автомобіля, внаслідок чого, машини зі США – один із найкращих виборів для
                     автолюбителів України.
                  </p>
               </div>
            </div>
            <div class="services__content-box">
               <h6 class="services__content-title">
                  Чому така низька ціна?
               </h6>
               <div class="services__content-textbox">
                  <p class="services__content-text">
                     Биті автомобілі із США викуповуються з аукціонів страхових компаній. На цих аукціонах машина
                     втрачає
                     половину ціни навіть
                     через мінімальні ушкодження. Якщо враховувати грошові витрати, а саме викуп, доставку, митницю та
                     ремонт, то ціна
                     аналогічного за станом автомобіля в Україні буде вищим на 35-50%, а нові коштуватимуть космічних
                     грошей.
                  </p>
               </div>
               <a class="button button--decor" href="#">КОНСУЛЬТАЦІЯ ЕКСПЕРТА</a>
            </div>
         </div>
         <ol class="services__list">
            <li data-wow-delay="1s" class="services__item wow animate__fadeInRight">
               <p class="services__item-title">Покупка авто</p>
               <p class="services__item-text">Підбір автомобіля та експертна перевірка</p>
            </li>
            <li data-wow-delay="1.2s" class="services__item wow animate__fadeInRight">
               <p class="services__item-title">Доставка морем</p>
               <p class="services__item-text">Розрахунок оптимальної вартості доставки авто</p>
            </li>
            <li data-wow-delay="1.4s" class="services__item wow animate__fadeInRight">
               <p class="services__item-title">Розмитнення авто</p>
               <p class="services__item-text">Проходження митного оформлення (2-3 дні)</p>
            </li>
            <li data-wow-delay="1.6s" class="services__item wow animate__fadeInRight">
               <p class="services__item-title">Ремонт авто</p>
               <p class="services__item-text">Комплексний ремонт автомобіля на СТО</p>
            </li>
            <li data-wow-delay="1.8s" class="services__item wow animate__fadeInRight">
               <p class="services__item-title">Сертифікація</p>
               <p class="services__item-text">Послуга надається за бажанням</p>
            </li>
            <li data-wow-delay="2s" class="services__item wow animate__fadeInRight">
               <p class="services__item-title">Постановка на облік</p>
               <p class="services__item-text">Оформлення автомобіля в Україні</p>
            </li>
         </ol>
      </div>
   </div>
</section>

<section class="benefits">
   <div class="container">
      <div class="benefits__inner">
         <img data-wow-delay="2s" class="benefits__images wow animate__fadeInUp"
            src="<?php bloginfo("template_url"); ?>/assets/images/car.png" alt="car">
         <div class="benefits__content">
            <h2 class="title benefits__title">ЧОМУ МИ?</h2>
            <ul class="benefits__list">
               <li class="benefits__item">
                  <p class="benefits__item-num">650</p>
                  <p class="benefits__item-title">успішно доставлених авто</p>
                  <p class="benefits__item-text">
                     великий досвід пригону автомобілів із США під ключ, усі клієнти залишилися задоволені на 100%
                  </p>
               </li>
               <li class="benefits__item">
                  <p class="benefits__item-num">5</p>
                  <p class="benefits__item-title">років на ринку України</p>
                  <p class="benefits__item-text">
                     Працюємо по всій території України, працюємо за договором із клієнтами
                  </p>
               </li>
               <li class="benefits__item">
                  <p class="benefits__item-num">100%</p>
                  <p class="benefits__item-title">довіри клієнтів</p>
                  <p class="benefits__item-text">
                     Онлайн звітність. Ви завжди знаєте статус підбору вашого авто. Фото та відео звіт
                  </p>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>

<section class="carousel">
   <div class="container">
      <h2 class="title">
         ПРИГНАНІ НАМИ АВТО
      </h2>
      <div class="carousel__inner">

         <?php
         global $post;

         $myposts = get_posts([
            'numberposts' => -1,
            // 'offset'      => 1,
            // 'category'    => 1
         ]);

         if ($myposts) {
            foreach ($myposts as $post) {
               setup_postdata($post);
               ?>
               <div class="carousel__item">
                  <div class="carousel__item-box">
                     <?php the_post_thumbnail(
                        array(380, 250),
                        array(
                           'class' => 'carousel__item-img'
                        )
                     ) ?>
                     <h4 class="carousel__item-title">
                        <?php the_title() ?>
                     </h4>
                     <p class="carousel__item-text">
                        <?php the_content() ?>
                     </p>
                  </div>
               </div>
            <?php }
         }
         wp_reset_postdata(); ?>


      </div>
   </div>
</section>

<section class="contacts">
   <div class="container">
      <div class="contacts__inner">
         <div class="contacts__info">
            <h2 class="title">
               КОНТАКТИ
            </h2>
            <ul class="contacts__list">
               <li class="contacts__item">
                  <p class="contacts__item-title">Адреса</p>
                  <p class="contacts__item-text">
                     Київ, Поділ <br>
                     вул. Костянтинівська, б.71
                  </p>
               </li>
               <li class="contacts__item">
                  <p class="contacts__item-title">Час роботи</p>
                  <p class="contacts__item-text">
                     Пн-Сб: з 9:00 до 19:00, <br>
                     Нд: вихідний
                  </p>
               </li>
               <li class="contacts__item">
                  <p class="contacts__item-title">Телефон</p>
                  <p class="contacts__item-text">
                     +38 (050) 555 66 77
                  </p>
               </li>
            </ul>
         </div>
         <form class="contacts__form">
            <h2 class="title contacts__title">Залишити заявку</h2>
            <? echo do_shortcode('[contact-form-7 id="4691ed9" title="Контактна форма"]')?>
            <!-- <input class="contacts__input" type="text" placeholder="Як вас звати?">
            <input class="contacts__input" type="tel" placeholder="Ваш номер телефону">
            <button class="contacts__btn button" type="submit">Відправити заявку</button> -->
         </form>
      </div>
   </div>
</section>

<?php get_footer(); ?>