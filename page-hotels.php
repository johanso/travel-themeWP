<?php
/*
* Template Name: Listado de Hoteles
*/
?>

<?php get_header(); ?>
  <div class="container">
    <h1 class="title-page">Hoteles <span>en San Andrés</span></h1>
    <?php the_content() ?>
    <div class="hotels-container">
      <?php travels_list_hotels() ?>
      <article class="card-hotel">
        <div class="more">
          <a href="https://www.booking.com/searchresults.es.html?ss=San+Andr%C3%A9s%2C+Colombia&label=san-andres-co" target="_blank" rel="noopener noreferrer">
            Ver mas hoteles en 
            <span>
              San Andres
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
              </svg>
            </span> 
          </a>
        </div>
      </article>
    </div>
  </div>
<?php get_footer(); ?>