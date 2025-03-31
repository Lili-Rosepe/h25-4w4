<?php 
function theme_4w4_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  // Création d'une nouveele section dans le customizer
  $wp_customize->add_section('hero_section', array(
    'title' => __('Section Hero', 'theme_4w4'),
    'priority' => 30,
));
////////////////// ajout de la donnée de l'auteur
$wp_customize->add_setting('hero_auteur', array(
  'default' => __('Lili-Rose Perreault', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
//////////////// ajout du contrôle de la donnée de l'auteur
$wp_customize->add_control('hero_auteur', array(
  'label' => __('Auteur', 'theme_4w4'),
  'section' => 'hero_section',
  'type' => 'text',
));


////////////////// ajout de la donnée adresse
$wp_customize->add_setting('hero_adresse', array(
  'default' => __('Sherbrooke MTL', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
//////////////// ajout du contrôle de la donnée adresse
$wp_customize->add_control('hero_adresse', array(
  'label' => __('Adresse', 'theme_4w4'),
  'section' => 'hero_section',
  'type' => 'text',
));
////////////////// ajout de la donnée email
$wp_customize->add_setting('hero_email', array(
  'default' => __('@lili', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
//////////////// ajout du contrôle de la donnée email
$wp_customize->add_control('hero_email', array(
  'label' => __('Email', 'theme_4w4'),
  'section' => 'hero_section',
  'type' => 'text',
));
////////////////// ajout de la donnée téléphone
$wp_customize->add_setting('hero_telephone', array(
  'default' => __('514', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
//////////////// ajout du contrôle de la donnée téléphone
$wp_customize->add_control('hero_telephone', array(
  'label' => __('Téléphone', 'theme_4w4'),
  'section' => 'hero_section',
  'type' => 'text',
));
////////////////////Ajouter le contrôle pour la couleur
$wp_customize->add_setting('hero_couleur', array(
  'default' => '#FFFFFF', 
  'sanitize_callback' => 'sanitize_hex_color', 
));

////////////////// Ajouter le contrôle pour la couleur
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hero_couleur',array(
    'label' => __('Couleur du texte', 'theme_4w4'), 
    'section' => 'hero_section', 
)));

/////////////// ajout de la données image en background
$wp_customize->add_setting('hero_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
//////////// ajout du contrôle de la donnée background
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
  'label' => __('Image en arrière plan', 'theme_4w4'),
  'section' => 'hero_section',
)));


//////////////////////////////////////////////////////SECTION FOOTER ////////////////////////////////////////////////////////
$wp_customize->add_section('footer_section', array(
  'title' => __('Section Footer', 'theme_4w4'),
  'priority' => 30,
));
////////////////// ajout de la donnée
$wp_customize->add_setting('footer_adresse', array(
  'default' => __('Sherbrooke Montréal', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
//////////////// ajout du contrôle de la donnée
$wp_customize->add_control('footer_adresse', array(
  'label' => __('Adresse', 'theme_4w4'),
  'section' => 'footer_section',
  'type' => 'text',
));
////////////////// ajout de la donnée
$wp_customize->add_setting('footer_telephone', array(
  'default' => __('514', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
//////////////// ajout du contrôle de la donnée
$wp_customize->add_control('footer_telephone', array(
  'label' => __('Telephone', 'theme_4w4'),
  'section' => 'footer_section',
  'type' => 'text',
));
////////////////// ajout de la donnée
$wp_customize->add_setting('footer_mission', array(
  'default' => __('En route', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
//////////////// ajout du contrôle de la donnée
$wp_customize->add_control('footer_mission', array(
  'label' => __('Mission', 'theme_4w4'),
  'section' => 'footer_section',
  'type' => 'text',
));
// ///////////////////////////////////////  EREUR 404 ///////////////////////////////////////////

$wp_customize->add_section('404_section', array(
  'title' => __('Section 404', 'theme_4w4'),
  'priority' => 30,
));
//////////////////////////////// ajout text Titre 404
$wp_customize->add_setting('Titre_404', array(
  'default' => __('Erreur 404', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
 
//////////////////////////////// ajout de la donné du Titre 404
$wp_customize->add_control('Titre_404', array(
  'label' => __('Titre', 'theme_4w4'),
  'section' => '404_section',
  'type' => 'text',
));
//////////////////////////////// ajout text description 404
$wp_customize->add_setting('Texte_404', array(
  'default' => __('', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
 
//////////////////////////////// ajout de la donné du text description 404
$wp_customize->add_control('Texte_404', array(
  'label' => __('Desciption', 'theme_4w4'),
  'section' => '404_section',
  'type' => 'text',
));
 
//////////////////////////////// ajout text du bouton 404
$wp_customize->add_setting('Bouton_404', array(
  'default' => __('', 'theme_4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
 
//////////////////////////////// ajout de la donné du text du bouton 404
$wp_customize->add_control('Bouton_404', array(
  'label' => __('Bouton', 'theme_4w4'),
  'section' => '404_section',
  'type' => 'text',
));
 
//////////////////// ajout image en background 404
$wp_customize->add_setting('erreur_404_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
//////////////////// ajout image en background 404
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_404_background', array(
  'label' => __('Erreur 404 Background Image', 'theme_4w4'),
  'section' => '404_section',
)));
}
 ?>