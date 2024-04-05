<?php 

function travels_list_hotels( $quantity = -1 ) {
  ?>
    <?php
      $args = array(
        'post_type' => 'travels_hoteles',
        'post_status' => 'publish',
        'posts_per_page' => $quantity,
        'orderby' => 'date',
        'order' => 'ASC'
      );
      $hotels = new WP_Query($args);
      
      while( $hotels->have_posts() ) {
        $hotels->the_post(); ?>

        <article class="card-hotel">

          <header class="card-hotel__header">

            <?php $calificacion_estrellas = get_field('hotel_calificacion_de_estrellas');
              if( $calificacion_estrellas > 0 ) { ?>
                <div class="card-hotel__stars">
                  <?php 
                    $calificacion_estrellas = get_field('hotel_calificacion_de_estrellas');
                    for ($i = 1; $i <= 5; $i++) {
                      $color = $i <= $calificacion_estrellas ? '#FFB900' : '#CCCCCC';
                      echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="' . $color . '" class="bi bi-star-fill" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>';
                    }
                  ?>
              </div>
            <?php } ?>

            <div class="card-hotel__gallery main-carousel">
              <?php if( get_field('galeria_imagen_principal') ) : ?>
                <div class="carousel-cell">
                  <img data-flickity-lazyload="<?php the_field('galeria_imagen_principal') ?>" alt="imagen <?php the_title(); ?> 1" class="card-hotel__gallery-img" />
                </div>
              <?php endif; ?>
              
              <?php if( get_field('galeria_imagen_1') ) : ?>
                <div class="carousel-cell">
                  <img data-flickity-lazyload="<?php the_field('galeria_imagen_1') ?>" alt="imagen <?php the_title(); ?> 1" class="card-hotel__gallery-img" />
                </div>
              <?php endif; ?>

              <?php if( get_field('galeria_imagen_2') ) : ?>
                <div class="carousel-cell">
                  <img data-flickity-lazyload="<?php the_field('galeria_imagen_2') ?>" alt="imagen <?php the_title(); ?> 2" class="card-hotel__gallery-img" />
                </div>
              <?php endif; ?>

              <?php if( get_field('galeria_imagen_3') ) : ?>
                <div class="carousel-cell">
                  <img data-flickity-lazyload="<?php the_field('galeria_imagen_3') ?>" alt="imagen <?php the_title(); ?> 3" class="card-hotel__gallery-img" />
                </div>
              <?php endif; ?>
              
              <?php if( get_field('galeria_imagen_4') ) : ?>
                <div class="carousel-cell">
                  <img data-flickity-lazyload="<?php the_field('galeria_imagen_4') ?>" alt="imagen <?php the_title(); ?> 4" class="card-hotel__gallery-img" />
                </div>
              <?php endif; ?>
            </div>


          </header>

          <div class="card-hotel__body">
            <?php the_title('<h2 class="card-hotel__title">', '</h2>'); ?>
            <div class="card-hotel__qualification">

              <?php if( get_field('hotel_numero_de_calificacion') ) : ?>
                <div class="card-hotel__box"><?php the_field('hotel_numero_de_calificacion') ?></div>
              <?php endif; ?>

              <div class="card-hotel__text">
                <?php if( get_field('hotel_texto_de_calificacion') ) : ?>
                  <span class="card-hotel__text-top"><?php the_field('hotel_texto_de_calificacion') ?></span>
                <?php endif; ?>

                <?php if( get_field('hotel_calificacion_de_usuarios') ) : ?>
                  <span class="card-hotel__text-bottom"><?php the_field('hotel_calificacion_de_usuarios') ?></span>
                <?php endif; ?>
              </div>
            </div>

            <div class="card-hotel__amenities">
              <ul class="card-hotel__amenities_list">
                <?php if( get_field('distancia_del_centro') ) : ?>
                  <li class="card-hotel__amenities_item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="var(--alternative-color)" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                      <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"></path></svg> 
                      <?php the_field('distancia_del_centro') ?>
                  </li>
                <?php endif; ?>
                
                <?php if( get_field('distancia_de_la_playa') ) : ?>
                  <li class="card-hotel__amenities_item">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="var(--alternative-color)" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 10C5.48276 10 7.34483 7 7.34483 7C7.34483 7 9.2069 10 11.6897 10C14.1724 10 16.6552 7 16.6552 7C16.6552 7 19.1379 10 21 10" fill="var(--alternative-color)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 17C5.48276 17 7.34483 14 7.34483 14C7.34483 14 9.2069 17 11.6897 17C14.1724 17 16.6552 14 16.6552 14C16.6552 14 19.1379 17 21 17" fill="var(--alternative-color)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> 
                    <?php the_field('distancia_de_la_playa') ?>
                  </li>
                <?php endif; ?>
                
                <?php if( get_field('piscina_al_aire_libre') ) : ?>
                  <li class="card-hotel__amenities_item">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="var(--alternative-color)" xmlns="http://www.w3.org/2000/svg"><path d="M23.097 21.71c-.896.187-1.71-.114-2.442-.76a4.629 4.629 0 0 1-.74-.837.75.75 0 0 0-1.272-.004 3.557 3.557 0 0 1-2.925 1.661 2.98 2.98 0 0 1-2.559-1.608.75.75 0 0 0-1.26-.11 4.418 4.418 0 0 1-3.286 1.719c-1.121-.058-2.216-.68-2.876-1.677a.75.75 0 0 0-1.214-.05 6.17 6.17 0 0 1-1.125 1.033c-.833.588-1.677.85-2.49.675a.75.75 0 1 0-.315 1.466c1.285.276 2.526-.107 3.67-.915a7.084 7.084 0 0 0 1.438-1.33l-1.214-.05a5.257 5.257 0 0 0 4.126 2.346c1.807-.084 3.417-.926 4.476-2.303l-1.26-.11a4.49 4.49 0 0 0 3.892 2.414 5.07 5.07 0 0 0 4.192-2.361l-1.272-.004c.192.308.533.739 1.022 1.17 1.057.931 2.32 1.4 3.74 1.104a.75.75 0 0 0-.306-1.468zm0-4.5c-.896.187-1.71-.114-2.442-.76a4.629 4.629 0 0 1-.74-.837.75.75 0 0 0-1.272-.004 3.557 3.557 0 0 1-2.925 1.661 2.98 2.98 0 0 1-2.559-1.608.75.75 0 0 0-1.26-.11 4.418 4.418 0 0 1-3.286 1.719c-1.121-.058-2.216-.68-2.876-1.677a.75.75 0 0 0-1.214-.05 6.17 6.17 0 0 1-1.125 1.033c-.833.588-1.677.85-2.49.675a.75.75 0 1 0-.315 1.466c1.285.276 2.526-.107 3.67-.915a7.084 7.084 0 0 0 1.438-1.33l-1.214-.05a5.257 5.257 0 0 0 4.126 2.346c1.807-.084 3.417-.926 4.476-2.303l-1.26-.11a4.49 4.49 0 0 0 3.892 2.414 5.07 5.07 0 0 0 4.192-2.361l-1.272-.004c.192.308.533.739 1.022 1.17 1.057.931 2.32 1.4 3.74 1.104a.75.75 0 0 0-.306-1.468zm-1.722-8.64a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0zm1.5 0a3.375 3.375 0 1 0-6.75 0 3.375 3.375 0 0 0 6.75 0zM7.777 14.636l3.831-2.4a.75.75 0 0 0 .166-1.13L8.964 7.9a2.25 2.25 0 0 1 .687-3.494l4.264-2.135a.751.751 0 1 1 .686 1.333l-.01.006-3.405 1.702a1.502 1.502 0 0 0-.448 2.334l5.375 6.142a.75.75 0 1 0 1.128-.988l-5.377-6.145-.002-.003v-.001l3.394-1.697.027-.013A2.25 2.25 0 0 0 13.238.93L8.98 3.065a3.749 3.749 0 0 0-1.144 5.824l2.81 3.206.166-1.13-3.831 2.4a.75.75 0 0 0 .796 1.272z"></path></svg>
                    <?php the_field('piscina_al_aire_libre') ?>
                  </li>
                <?php endif; ?>

                <?php if( get_field('horario_de_recepcion') ) : ?>
                  <li class="card-hotel__amenities_item">
                    <svg width="17" height="17" fill="transparent" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.096"></g><g id="SVGRepo_iconCarrier"> <path d="M3 18H21M12 7V4M12 4H10M12 4H14M5 15V12C5 9.23858 7.23858 7 10 7H14C16.7614 7 19 9.23858 19 12V15H5Z" stroke="var(--alternative-color)" stroke-width="1.392" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> 
                    <?php the_field('horario_de_recepcion') ?>
                  </li>
                <?php endif; ?>

                <?php if( get_field('servicio_de_wifi') ) : ?>
                  <li class="card-hotel__amenities_item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="var(--alternative-color)" class="bi bi-wifi" viewBox="0 0 16 16">
                      <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"></path>
                      <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"></path>
                    </svg> 
                    <?php the_field('servicio_de_wifi') ?>
                  </li>
                <?php endif; ?>

                <?php if( get_field('aire_acondicionado') ) : ?>
                  <li class="card-hotel__amenities_item">
                    <svg width="16" height="16" fill="var(--alternative-color)" id="Capa_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 219.781 219.781"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> 
                      <path d="M202.314,154.591l-22.322-12.888l19.345-11.407c3.568-2.104,4.755-6.702,2.651-10.27c-2.105-3.568-6.701-4.753-10.271-2.651 l-26.646,15.713l-15.683-9.054V95.747l15.674-9.05l26.656,15.712c1.196,0.705,2.507,1.039,3.802,1.039 c2.568,0,5.069-1.32,6.468-3.693c2.104-3.568,0.916-8.166-2.652-10.27l-19.349-11.405l22.327-12.891 c3.587-2.071,4.816-6.658,2.745-10.245c-2.07-3.587-6.659-4.816-10.245-2.745L172.49,65.088l-0.202-22.461 c-0.037-4.142-3.432-7.495-7.567-7.432c-4.143,0.037-7.47,3.425-7.433,7.567l0.278,30.941l-15.68,9.053L117.39,68.612V50.511 l26.936-15.224c3.605-2.038,4.877-6.613,2.839-10.22c-2.038-3.606-6.615-4.878-10.22-2.839L117.39,33.281V7.5 c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v25.781L82.834,22.229c-3.607-2.04-8.183-0.767-10.22,2.839 c-2.038,3.606-0.767,8.182,2.839,10.22l26.937,15.224v18.103L77.895,82.757l-15.682-9.054l0.278-30.94 c0.037-4.142-3.29-7.53-7.433-7.567c-0.024,0-0.046,0-0.068,0c-4.11,0-7.462,3.313-7.499,7.433l-0.202,22.459L24.968,52.2 c-3.59-2.072-8.176-0.842-10.245,2.745c-2.071,3.587-0.842,8.174,2.745,10.245l22.327,12.891L20.443,89.486 c-3.569,2.103-4.757,6.701-2.653,10.27c1.398,2.373,3.899,3.693,6.468,3.693c1.294,0,2.606-0.335,3.801-1.039l26.659-15.712 l15.676,9.051v28.286l-15.684,9.056L28.06,117.376c-3.567-2.104-8.164-0.917-10.27,2.651c-2.104,3.568-0.916,8.166,2.651,10.27 l19.347,11.407l-22.32,12.887c-3.587,2.071-4.816,6.658-2.745,10.245c1.39,2.406,3.91,3.751,6.502,3.751 c1.272,0,2.563-0.325,3.743-1.006l22.321-12.887l0.202,22.461c0.037,4.119,3.388,7.433,7.499,7.433c0.022,0,0.046,0,0.068-0.001 c4.142-0.037,7.47-3.425,7.433-7.567l-0.279-30.943l15.682-9.054l24.496,14.144v18.105l-26.937,15.224 c-3.605,2.038-4.877,6.613-2.839,10.22c1.379,2.44,3.92,3.811,6.536,3.811c1.25,0,2.518-0.313,3.684-0.972l19.556-11.052v25.779 c0,4.142,3.357,7.5,7.5,7.5s7.5-3.358,7.5-7.5v-25.779l19.556,11.052c1.166,0.659,2.434,0.972,3.684,0.972 c2.616,0,5.157-1.371,6.536-3.811c2.038-3.607,0.767-8.182-2.839-10.22l-26.936-15.224v-18.104l24.497-14.145l15.68,9.052 l-0.286,30.942c-0.038,4.142,3.289,7.531,7.431,7.569c0.023,0.001,0.047,0.001,0.07,0.001c4.11,0,7.461-3.313,7.499-7.431 l0.208-22.466l22.325,12.89c1.182,0.682,2.471,1.006,3.743,1.006c2.592,0,5.113-1.346,6.502-3.751 C207.13,161.249,205.9,156.662,202.314,154.591z M85.394,95.748l24.498-14.145l24.496,14.145v28.285l-24.496,14.145l-24.498-14.145 V95.748z"></path> </g>
                    </svg> 
                    <?php the_field('aire_acondicionado') ?>
                  </li>
                <?php endif; ?>

                <?php if( get_field('habitaciones_familiares') ): ?>
                  <li class="card-hotel__amenities_item"><svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="-46.08 -46.08 604.16 604.16" fill="var(--alternative-color)" stroke-width="0.00512"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> 
                    <path d="M78.641,118.933c22.88,0,41.416-18.551,41.416-41.414c0-22.887-18.536-41.423-41.416-41.423 c-22.887,0-41.422,18.536-41.422,41.423C37.218,100.382,55.754,118.933,78.641,118.933z"></path> <path d="M255.706,228.73v0.062c0.101,0,0.194-0.031,0.294-0.031c0.101,0,0.194,0.031,0.294,0.031v-0.062 c15.562-0.317,28.082-12.976,28.082-28.601c0-15.648-12.52-28.299-28.082-28.616v-0.063c-0.101,0-0.194,0.031-0.294,0.031 c-0.1,0-0.193-0.031-0.294-0.031v0.063c-15.563,0.317-28.082,12.968-28.082,28.616C227.623,215.754,240.143,228.413,255.706,228.73 z"></path> <path d="M433.359,118.933c22.887,0,41.423-18.551,41.423-41.414c0-22.887-18.536-41.423-41.423-41.423 c-22.88,0-41.416,18.536-41.416,41.423C391.944,100.382,410.48,118.933,433.359,118.933z"></path> <path d="M470.097,138.553h-36.312h-18.404c-21.106,0-40.432,11.831-50.033,30.622l-33.494,97.967 c-1.154,2.246-3.298,3.84-5.792,4.282c-2.493,0.442-5.048-0.309-6.914-2.036l-20.836-18.04c-6.233-5.769-14.408-8.973-22.902-8.973 H256h-19.41c-8.494,0-16.669,3.204-22.902,8.973l-20.835,18.04c-1.866,1.727-4.421,2.478-6.914,2.036 c-2.492-0.442-4.637-2.036-5.791-4.282l-33.495-97.967c-9.6-18.791-28.926-30.622-50.032-30.622H78.215H41.902 C21.834,138.553,0,160.387,0,180.464v139.211c0,10.034,8.13,18.171,18.164,18.171c4.939,0,0,0,12.682,0l6.906,118.725 c0,10.676,8.664,19.332,19.34,19.332c4.506,0,12.814,0,21.122,0c8.308,0,16.616,0,21.122,0c10.676,0,19.34-8.656,19.34-19.332 l6.906-118.725l-0.085-84.766c0-1.339,0.914-2.493,2.222-2.818c1.309-0.31,2.648,0.309,3.26,1.502l26.572,65.401 c3.206,6.256,9.152,10.654,16.074,11.885c6.922,1.231,14.022-0.844,19.186-5.613l25.426-18.729 c0.852-0.782,2.083-0.984,3.136-0.542c1.061,0.473,1.743,1.518,1.743,2.663l0.093,73.508l4.777,82.187 c0,7.387,6.001,13.379,13.395,13.379c3.113,0,8.865,0,14.618,0c5.753,0,11.506,0,14.618,0c7.394,0,13.394-5.992,13.394-13.379 l4.778-82.187l0.093-73.508c0-1.146,0.681-2.19,1.742-2.663c1.053-0.442,2.284-0.24,3.136,0.542l25.427,18.729 c5.164,4.769,12.264,6.844,19.186,5.613c6.922-1.231,12.868-5.629,16.073-11.885l26.573-65.401 c0.611-1.192,1.951-1.812,3.259-1.502c1.309,0.325,2.222,1.478,2.222,2.818l-0.085,84.766l6.906,118.725 c0,10.676,8.664,19.332,19.341,19.332c4.507,0,12.814,0,21.122,0c8.308,0,16.616,0,21.121,0c10.677,0,19.342-8.656,19.342-19.332 l6.906-118.725c12.682,0,7.742,0,12.682,0c10.034,0,18.164-8.137,18.164-18.171V180.464 C512,160.387,490.166,138.553,470.097,138.553z"></path> </g> </g>
                    </svg> 
                    <?php the_field('habitaciones_familiares') ?>
                  </li>
                <?php endif; ?>

                <?php if( get_field('parking') ): ?>
                  <li class="card-hotel__amenities_item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="var(--alternative-color)" class="bi bi-p-circle" viewBox="0 0 16 16"><path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.5 4.002h2.962C10.045 4.002 11 5.104 11 6.586c0 1.494-.967 2.578-2.55 2.578H6.784V12H5.5zm2.77 4.072c.893 0 1.419-.545 1.419-1.488s-.526-1.482-1.42-1.482H6.778v2.97z"></path></svg> 
                    <?php the_field('parking') ?>
                  </li>
                <?php endif; ?>

                <?php if( get_field('habitaciones_sin_humo') ): ?>
                  <li class="card-hotel__amenities_item">
                    <svg viewBox="-20.48 -20.48 552.96 552.96" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="var(--alternative-color)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill="var(--alternative-color)" points="384 316.118 416 348.118 416 240 384 240 384 316.118"></polygon> <rect width="32" height="120" x="440" y="240" fill="var(--alternative-color)"></rect> 
                      <path fill="var(--alternative-color)" d="M363.451,114.055a64.1,64.1,0,0,0-4.649,76.993L364.77,200h38.46l-17.8-26.7a31.982,31.982,0,0,1,2.32-38.418,63.745,63.745,0,0,0,3.479-78.69L385.377,48H348.8l-1.82,1.3,18.208,25.49A31.808,31.808,0,0,1,363.451,114.055Z"></path> <path fill="var(--alternative-color)" d="M435.451,114.055a64.1,64.1,0,0,0-4.649,76.993L436.77,200h38.46l-17.8-26.7a31.982,31.982,0,0,1,2.32-38.418,63.745,63.745,0,0,0,3.479-78.69L457.377,48H420.8l-1.82,1.3,18.208,25.49A31.808,31.808,0,0,1,435.451,114.055Z"></path> 
                      <path fill="var(--alternative-color)" d="M262.627,240l-224-224H16V38.627L217.373,240H16V360H337.373l136,136H496V473.373ZM48,328V272H249.373l56,56Z"></path> </g>
                    </svg> 
                    <?php the_field('habitaciones_sin_humo') ?>
                  </li>
                <?php endif; ?>

                <?php if( get_field('desayuno') ): ?>
                  <li class="card-hotel__amenities_item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="var(--alternative-color)" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2 2 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5M2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175"></path>
                      <path d="m4.4.8-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 3.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 6.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 9.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8"></path>
                    </svg> 
                    <?php the_field('desayuno') ?>
                  </li>
                <?php endif; ?>
                
                <?php if( get_field('restaurante') ): ?>
                  <li class="card-hotel__amenities_item">
                    <svg width="18" height="18" fill="var(--alternative-color)" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g><path d="M3.5,0l-1,5.5c-0.1464,0.805,1.7815,1.181,1.75,2L4,14c-0.0384,0.9993,1,1,1,1s1.0384-0.0007,1-1L5.75,7.5 c-0.0314-0.8176,1.7334-1.1808,1.75-2L6.5,0H6l0.25,4L5.5,4.5L5.25,0h-0.5L4.5,4.5L3.75,4L4,0H3.5z M12,0 c-0.7364,0-1.9642,0.6549-2.4551,1.6367C9.1358,2.3731,9,4.0182,9,5v2.5c0,0.8182,1.0909,1,1.5,1L10,14c-0.0905,0.9959,1,1,1,1 s1,0,1-1V0z" fill="var(--alternative-color)"></path> </g></svg> 
                    <?php the_field('restaurante') ?>
                  </li>
                <?php endif; ?>
                
                <?php if( get_field('bar') ): ?>
                  <li class="card-hotel__amenities_item">
                    <svg width="18" height="18" fill="var(--alternative-color)" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><path d="M8.252 24h6a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5zm3.75-.75v-9a.75.75 0 0 0-1.5 0v9a.75.75 0 0 0 1.5 0zm7.5-16.19a1.5 1.5 0 0 0-1.06-2.56H4.062a1.5 1.5 0 0 0-1.06 2.56l7.72 7.72a.75.75 0 0 0 1.06 0l7.72-7.72zM18.44 6l-7.72 7.72h1.061L4.062 6h14.379zM.752 1.5h2.822a.75.75 0 0 1 .671.415l1.836 3.67a.75.75 0 1 0 1.342-.67L5.587 1.244A2.25 2.25 0 0 0 3.574 0H.752a.75.75 0 1 0 0 1.5zm15.81 3.603a2.997 2.997 0 1 1 1.511 2.038.75.75 0 0 0-.713 1.319 4.497 4.497 0 1 0-2.268-3.06.75.75 0 1 0 1.47-.297z"></path></svg>
                    <?php the_field('bar') ?>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
          
          <footer class="card-hotel__footer">
            <a class="button button--primary" href="<?php the_field('link_url_hotel'); ?>" target="_blank" rel="noopener noreferrer">
              Revisar Alojamiento
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
              </svg>
            </a>
          </footer>

        </article>

      <?php }
      wp_reset_postdata();
    ?>
  <?php
}