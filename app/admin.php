<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);

  // logo section
  $wp_customize->add_section('logo_section', array(
    'title' => __('Logo', 'sage'),
    'priority' => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
  ));
  $wp_customize->add_setting('logo', [
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ]);
//  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
//    'label' => __('Logo', 'sage'),
//    'section' => 'logo_section',
//    'settings' => 'logo',
//  )));

  //-- contact details section
  $wp_customize->add_section('contact_details_section', array(
    'title' => __('Contact Details', 'sage'),
    'priority' => 40,
  ));
  // phone number
  $wp_customize->add_setting('phone_number', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ]);
  $wp_customize->add_control('phone_number', [
    'section' => 'contact_details_section',
    'label' => 'Phone Number',
    'priority' => 1,
    'input_attrs' => [
      'placeholder' => '+94 123 1234'
    ],
  ]);
  // email
  $wp_customize->add_setting('email', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ]);
  $wp_customize->add_control('email', [
    'section' => 'contact_details_section',
    'priority' => 2,
    'label' => 'Email',
    'input_attrs' => [
      'placeholder' => 'my_address@site.com'
    ],
  ]);
  // github link
  $wp_customize->add_setting('github_link', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ]);
  $wp_customize->add_control('github_link', [
    'section' => 'contact_details_section',
    'priority' => 3,
    'label' => 'GitHub Link',
    'input_attrs' => [
      'placeholder' => 'https://github.com/username'
    ],
  ]);
  // facebook link
  $wp_customize->add_setting('facebook_link', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ]);
  $wp_customize->add_control('facebook_link', [
    'section' => 'contact_details_section',
    'priority' => 3,
    'label' => 'Facebook Link',
    'input_attrs' => [
      'placeholder' => 'https://www.facebook.com/creotex'
    ],
  ]);
  // twitter link
  $wp_customize->add_setting('twitter_link', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ]);
  $wp_customize->add_control('twitter_link', [
    'section' => 'contact_details_section',
    'priority' => 4,
    'label' => 'Twitter Link',
    'input_attrs' => [
      'placeholder' => 'https://www.twitter.com/creotex'
    ],
  ]);
  // google_plus link
  $wp_customize->add_setting('google_plus_link', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ]);
  $wp_customize->add_control('google_plus_link', [
    'section' => 'contact_details_section',
    'priority' => 5,
    'label' => 'Google+ Link',
    'input_attrs' => [
      'placeholder' => 'https://www.google.com/+Creotex'
    ],
  ]);
// linkedin link
  $wp_customize->add_setting('linkedin_link', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ]);
  $wp_customize->add_control('linkedin_link', [
    'section' => 'contact_details_section',
    'priority' => 3,
    'label' => 'linkedin Link',
    'input_attrs' => [
      'placeholder' => 'Your linkedin profile'
    ],
  ]);
  // Skype link
  $wp_customize->add_setting('skype_link', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ]);
  $wp_customize->add_control('skype_link', [
    'section' => 'contact_details_section',
    'priority' => 3,
    'label' => 'Skype Username',
    'input_attrs' => [
      'placeholder' => 'Your Skype username'
    ],
  ]);
  // youtube link
  $wp_customize->add_setting('youtube_link', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ]);
  $wp_customize->add_control('youtube_link', [
    'section' => 'contact_details_section',
    'priority' => 3,
    'label' => 'youtube Link',
    'input_attrs' => [
      'placeholder' => 'https://www.youtube.com/user/creotex'
    ],
  ]);


  //-- copyright section section
  $wp_customize->add_section('copyright_section', array(
    'title' => __('Copyright Text', 'sage'),
    'priority' => 50,
    'description' => 'Copyright text displayed bottom of page.'
  ));
  $wp_customize->add_setting('copyright_text', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ]);
  $wp_customize->add_control('copyright_text', [
    'section' => 'copyright_section',
    'priority' => 1,
    'input_attrs' => [
      'placeholder' => 'Copyright ' . date('Y')
    ],
  ]);

  //-- analytics section
  $wp_customize->add_section('analytics_codes_section', array(
    'title' => __('Google Analytics', 'sage'),
    'priority' => 50,
    'description' => 'Analytics Code'
  ));
  $wp_customize->add_setting('google_analytics_code', [
    'default'           => '',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ]);
  $wp_customize->add_control('google_analytics_code', [
    'section' => 'analytics_codes_section',
    'priority' => 1,
  ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});
