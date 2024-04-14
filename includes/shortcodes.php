<?php
  
  function mi_shortcode_custom($atts, $content = null) {

    $atts = shortcode_atts(
      array(
        'clase' => 'clase-custom',
        'titulo' => 'Título predeterminado',
      ),
      $atts,
      'travel_info'
    );

    $output = '<div class="' . esc_attr($atts['clase']) . '">';
    $output .= '<h2 class="place-info_placeinfo__title">' . esc_html($atts['titulo']) . '</h2>';
    $output .= '<p class="place-info_placeinfo__description">' . wp_kses_post($content) . '</p>';
    $output .= '<p class="place-info_placeinfo__icon"><svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" fill="var(--white)" class="bi bi-quote" viewBox="0 0 16 16"><path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"></path></svg></p>';
    $output .= '</div>';

    return $output;
}
add_shortcode('travel_info', 'mi_shortcode_custom');



function preparation_shortcode($atts) {
  // Obtiene los atributos del shortcode y establece los valores predeterminados
  $atts = shortcode_atts(
      array(
          'titulo' => 'Título predeterminado',
          'tiempo_preparacion' => 'Tiempo de Preparación predeterminado',
          'tiempo_coccion' => 'Tiempo de Cocción predeterminado',
          'porciones' => 'Porciones predeterminadas'
      ),
      $atts,
      'preparation'
  );

  // Genera el HTML del shortcode
  $output = '<article class="preparation">';
  $output .= '<h3>' . esc_html($atts['titulo']) . '</h3>';
  $output .= '<ul>';
  $output .= '<li class="preparation__list"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16"><path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/><path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/></svg>';
  $output .= '<p><strong>Preparación:</strong> ' . esc_html($atts['tiempo_preparacion']) . '</p>';
  $output .= '</li>';
  $output .= '<li class="preparation__list"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16"><path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/></svg>';
  $output .= '<p><strong>Cocción:</strong> ' . esc_html($atts['tiempo_coccion']) . '</p>';
  $output .= '</li>';
  $output .= '<li class="preparation__list"> <svg width="18" height="18" fill="currentColor" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g><path d="M3.5,0l-1,5.5c-0.1464,0.805,1.7815,1.181,1.75,2L4,14c-0.0384,0.9993,1,1,1,1s1.0384-0.0007,1-1L5.75,7.5 c-0.0314-0.8176,1.7334-1.1808,1.75-2L6.5,0H6l0.25,4L5.5,4.5L5.25,0h-0.5L4.5,4.5L3.75,4L4,0H3.5z M12,0 c-0.7364,0-1.9642,0.6549-2.4551,1.6367C9.1358,2.3731,9,4.0182,9,5v2.5c0,0.8182,1.0909,1,1.5,1L10,14c-0.0905,0.9959,1,1,1,1 s1,0,1-1V0z" fill="currentColor"></path> </g></svg>';
  $output .= '<p><strong>Porciones:</strong> ' . esc_html($atts['porciones']) . '</p>';
  $output .= '</li>';
  $output .= '</ul>';
  $output .= '</article>';

  return $output;
}
add_shortcode('preparation', 'preparation_shortcode');



