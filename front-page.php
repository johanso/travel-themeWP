<?php get_header(); ?>

  <section class="section-home container">
    <h2 class="section-title">Descubre la Belleza <span>de San Andrés y sus Encantos</span></h2>
    <p>¡Bienvenido a nuestro portal dedicado a <strong>San Andrés</strong>, la joya del Caribe colombiano! Sumérgete en la magia de esta isla paradisíaca, donde el sol, la playa y la cultura se unen para ofrecerte experiencias inolvidables.</p>
    <p>En nuestro sitio, encontrarás toda la información necesaria para planificar tus vacaciones. Desde <strong>hoteles de lujo</strong> hasta opciones más <strong>económicas</strong>, pasando por actividades emocionantes y lugares de interés, tenemos todo lo que necesitas para hacer de <strong>tu viaje</strong> una experiencia única.</p>
    <p>Explora las playas de <strong>arena blanca</strong> y <strong>aguas cristalinas</strong>, sumérgete en la rica historia y cultura de la isla, y déjate llevar por la hospitalidad de su gente. Ya sea que busques relajarte en un <strong>resort de lujo</strong> o aventurarte en emocionantes excursiones, <strong>San Andrés</strong> tiene algo para todos los gustos y presupuestos. ¡Comienza <strong>tu viaje</strong> ahora!</p>
  </section>

  <section class="section-home container">
    <div class="blog-container">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3
        );
        $query = new WP_Query($args);
        while( $query -> have_posts() ) {
          $query -> the_post();
          get_template_part('template-parts/blog-loop', 'loop');
        }
        wp_reset_postdata();
      ?>
    </div>
  </section>

  <section class="section-home container">
    <div class="place-info_placeinfo">
      <h2 class="place-info_placeinfo__title"><?php the_field('place_info'); ?></h2>
      <p class="place-info_placeinfo__description"><?php the_field('place_info_descripcion'); ?></p>
      <p class="place-info_placeinfo__icon"><svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" fill="var(--white)" class="bi bi-quote" viewBox="0 0 16 16"><path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"></path></svg></p>
    </div>
  </section>

  <section class="section-home section-home--hotels" style="background-image: url(<?php the_field('imagen_banner'); ?>);">
    <div class="container">
      <h2 class="section-title"><?php the_field('titulo_banner'); ?></h2>
      <p class="section-description"><?php the_field('texto_de_banner'); ?></p>
      <a href="<?php the_field('hero_link_del_boton'); ?>" class="button button--secondary button--large">
        Ver Hoteles
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
        </svg>
      </a>
    </div>
  </section>

  <section class="section-home container">
    <h2 class="section-title">Reserva <span>con Ventajas Exclusivas</span></h2>
    <div class="features__cards">

      <div class="features__card">
        <div class="features__card_icon">
          <img alt="icon check" loading="lazy" width="36" height="36" decoding="async" src="<?php echo get_template_directory_uri(); ?>/images/check-circle.svg">
        </div>
        <h3 class="features__card_title">Reservas Seguras</h3>
        <p>Tu seguridad es nuestra prioridad. Realiza reservas con total confianza sabiendo que tus datos están protegidos.</p>
      </div>
      
      <div class="features__card">
        <div class="features__card_icon">
          <img alt="icon ofertas" loading="lazy" width="36" height="36" decoding="async" src="<?php echo get_template_directory_uri(); ?>/images/cup-star.svg">
        </div>
        <h3 class="features__card_title">Ofertas Exclusivas</h3>
        <p>Descubre ofertas exclusivas al reservar a través de nosotros. Desde descuentos especiales hasta beneficios adicionales.</p>
      </div>

      <div class="features__card">
        <div class="features__card_icon">
          <img alt="icon app" loading="lazy" width="36" height="36" decoding="async" src="<?php echo get_template_directory_uri(); ?>/images/qr-code.svg">
        </div>
        <h3 class="features__card_title">Aplicación Móvil</h3>
        <p>Lleva la magia de San Andrés contigo. Descarga nuestra aplicación para acceder a ofertas exclusivas, recibir notificaciones importantes y llevar tus reservas en tu bolsillo.</p>
      </div>
      
      <div class="features__card">
        <div class="features__card_icon">
          <img alt="icon valoraciones" loading="lazy" width="36" height="36" decoding="async" src="<?php echo get_template_directory_uri(); ?>/images/chat-round-check.svg">
        </div>
        <h3 class="features__card_title">Comentarios y Valoraciones</h3>
        <p>Confía en las experiencias reales de otros viajeros. Lee comentarios y valoraciones para tomar decisiones sobre tus viajes.</p>
      </div>
      
      <div class="features__card">
        <div class="features__card_icon">
          <img alt="icon soporte" loading="lazy" width="36" height="36" decoding="async" src="<?php echo get_template_directory_uri(); ?>/images/dialog.svg">
        </div>
        <h3 class="features__card_title">Soporte al Cliente</h3>
        <p>Estamos aquí para ayudarte. Nuestro equipo de soporte al cliente está disponible para responder a tus preguntas y brindarte asistencia.</p>
      </div>
      
      <div class="features__card">
        <div class="features__card_icon">
          <img alt="icon proceso" loading="lazy" width="36" height="36" decoding="async" src="<?php echo get_template_directory_uri(); ?>/images/smile-circle.svg">
        </div>
        <h3 class="features__card_title">Proceso de Reserva Sencillo</h3>
        <p>Simplificamos el proceso de reserva para que puedas concentrarte en disfrutar de tu estancia. Desde la selección hasta la confirmación.</p>
      </div>

      <div class="features__app">
        <img alt="app movil" loading="lazy" width="400" height="600" decoding="async" src="<?php echo get_template_directory_uri(); ?>/images/image-app.webp">
      </div>
    </div>
  </section>
  
  <section class="section-home download-app">
    <div class="container">
      <header class="download-app__header">
        <h2 class="section-title">Descarga <span>la app</span></h2>
        <p class="download-app__text">Descarga la app para administrar tus viajes y obtener beneficios</p>
      </header>
      <div class="download-app__buttons">
        <button class="button button--light" data-size="medium">Apple Store<img alt="icon" loading="lazy" width="18" height="18" decoding="async" data-nimg="1" style="color:transparent" src="<?php echo get_template_directory_uri(); ?>/images/apple.svg"></button>
        <button class="button button--light" data-size="medium">Google Play<img alt="icon" loading="lazy" width="18" height="18" decoding="async" data-nimg="1" style="color:transparent" src="<?php echo get_template_directory_uri(); ?>/images/google-play.svg"></button>
      </div>
    </div>
  </section>

  <section class="section-home container section-faq">
    <h2 class="section-title">Preguntas Frecuentes <span>sobre la isla y Nuestra App</span></h2>
    
    <div class="faq-container">
      <details class="faq-box" open>
        <summary class="faq-header">¿Cuáles son las mejores playas para visitar en San Andrés?</summary>
        <div class="faq-content">
          <p>En San Andrés, algunas de las mejores playas para visitar son Playa Spratt Bight, Playa de San Luis y Playa de Rocky Cay. Cada una ofrece aguas cristalinas y arenas blancas ideales para relajarse y disfrutar del sol caribeño.</p>
        </div>
      </details>

      <details class="faq-box">
        <summary class="faq-header">¿Qué actividades culturales y eventos se pueden disfrutar en San Andrés?</summary>
        <div class="faq-content">
          <p>San Andrés ofrece una rica cultura caribeña que se refleja en sus festivales, música y gastronomía. Puedes disfrutar de eventos como el Festival de la Cultura Raizal, conciertos de música local y muestras de arte tradicional.</p>
        </div>
      </details>

      <details class="faq-box">
        <summary class="faq-header">¿Cuál es la gastronomía típica de la isla y dónde puedo probarla?</summary>
        <div class="faq-content">
          <p>La gastronomía de San Andrés combina influencias africanas, caribeñas y latinoamericanas. Algunos platos típicos incluyen el rondo de pescado, el guiso de cangrejo y el pan de coco. Puedes probar estos platos en restaurantes locales y puestos de comida en la isla.</p>
        </div>
      </details>
      
      <details class="faq-box">
        <summary class="faq-header"> ¿Qué beneficios ofrece nuestra aplicación para planificar un viaje a San Andrés?</summary>
        <div class="faq-content">
          <p>Nuestra aplicación ofrece acceso a ofertas exclusivas en hoteles, actividades y restaurantes en San Andrés. También te permite hacer reservas rápidas y seguras, recibir notificaciones sobre eventos y cambios en tu itinerario, y llevar toda la información de tu viaje en tu dispositivo móvil.</p>
        </div>
      </details>
      
      <details class="faq-box">
        <summary class="faq-header">¿Cómo puedo acceder a las ofertas exclusivas disponibles en nuestra aplicación?</summary>
        <div class="faq-content">
          <p>Una vez que descargues nuestra aplicación, podrás acceder a las ofertas exclusivas directamente desde la plataforma. Las ofertas estarán disponibles para su visualización y reserva, brindándote la oportunidad de ahorrar en tu viaje a San Andrés.</p>
        </div>
      </details>
      
      <details class="faq-box">
        <summary class="faq-header">¿La aplicación ofrece notificaciones sobre eventos en San Andrés?</summary>
        <div class="faq-content">
          <p>Sí, nuestra aplicación te mantiene informado sobre eventos importantes durante tu estancia en la isla, desde el clima hasta actividades culturales locales.</p>
        </div>
      </details>
    </div>
  </section>


<?php get_footer(); ?>