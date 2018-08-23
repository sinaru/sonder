<?php
/**
 * This file contains the customizer options for the theme.
 */

/**
 * @param $wp_customize WP_Customize_Manager
 */
function sonder_theme_customizer($wp_customize)
{
    // logo section
    $wp_customize->add_section('sonder_logo_section', array(
        'title' => __('Logo', 'sonder'),
        'priority' => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));
    $wp_customize->add_setting('sonder_logo', [
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sonder_logo', array(
        'label' => __('Logo', 'sonder'),
        'section' => 'sonder_logo_section',
        'settings' => 'sonder_logo',
    )));

    //-- contact details section
    $wp_customize->add_section('sonder_contact_details_section', array(
        'title' => __('Contact Details', 'sonder'),
        'priority' => 40,
    ));
    // phone number
    $wp_customize->add_setting('sonder_phone_number', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('sonder_phone_number', [
        'section' => 'sonder_contact_details_section',
        'label' => 'Phone Number',
        'priority' => 1,
        'input_attrs' => [
            'placeholder' => '+94 123 1234'
        ],
    ]);
    // email
    $wp_customize->add_setting('sonder_email', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('sonder_email', [
        'section' => 'sonder_contact_details_section',
        'priority' => 2,
        'label' => 'Email',
        'input_attrs' => [
            'placeholder' => 'my_address@site.com'
        ],
    ]);
    // github link
    $wp_customize->add_setting('sonder_github_link', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('sonder_github_link', [
        'section' => 'sonder_contact_details_section',
        'priority' => 3,
        'label' => 'GitHub Link',
        'input_attrs' => [
            'placeholder' => 'https://github.com/username'
        ],
    ]);
    // facebook link
    $wp_customize->add_setting('sonder_facebook_link', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('sonder_facebook_link', [
        'section' => 'sonder_contact_details_section',
        'priority' => 3,
        'label' => 'Facebook Link',
        'input_attrs' => [
            'placeholder' => 'https://www.facebook.com/creotex'
        ],
    ]);
    // twitter link
    $wp_customize->add_setting('sonder_twitter_link', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('sonder_twitter_link', [
        'section' => 'sonder_contact_details_section',
        'priority' => 4,
        'label' => 'Twitter Link',
        'input_attrs' => [
            'placeholder' => 'https://www.twitter.com/creotex'
        ],
    ]);
    // google_plus link
    $wp_customize->add_setting('sonder_google_plus_link', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('sonder_google_plus_link', [
        'section' => 'sonder_contact_details_section',
        'priority' => 5,
        'label' => 'Google+ Link',
        'input_attrs' => [
            'placeholder' => 'https://www.google.com/+Creotex'
        ],
    ]);
// linkedin link
    $wp_customize->add_setting('sonder_linkedin_link', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('sonder_linkedin_link', [
        'section' => 'sonder_contact_details_section',
        'priority' => 3,
        'label' => 'linkedin Link',
        'input_attrs' => [
            'placeholder' => 'Your linkedin profile'
        ],
    ]);
    // Skype link
    $wp_customize->add_setting('sonder_skype_link', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('sonder_skype_link', [
        'section' => 'sonder_contact_details_section',
        'priority' => 3,
        'label' => 'Skype Username',
        'input_attrs' => [
            'placeholder' => 'Your Skype username'
        ],
    ]);
    // youtube link
    $wp_customize->add_setting('sonder_youtube_link', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('sonder_youtube_link', [
        'section' => 'sonder_contact_details_section',
        'priority' => 3,
        'label' => 'youtube Link',
        'input_attrs' => [
            'placeholder' => 'https://www.youtube.com/user/creotex'
        ],
    ]);


    //-- copyright section section
    $wp_customize->add_section('sonder_copyright_section', array(
        'title' => __('Copyright Text', 'sonder'),
        'priority' => 50,
        'description' => 'Copyright text displayed bottom of page.'
    ));
    $wp_customize->add_setting('sonder_copyright_text', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('sonder_copyright_text', [
        'section' => 'sonder_copyright_section',
        'priority' => 1,
        'input_attrs' => [
            'placeholder' => 'Copyright ' . date('Y')
        ],
    ]);

    //-- analytics section
    $wp_customize->add_section('sonder_analytics_codes_section', array(
        'title' => __('Google Analytics', 'sonder'),
        'priority' => 50,
        'description' => 'Analytics Code'
    ));
    $wp_customize->add_setting('sonder_google_analytics_code', [
        'default'           => '',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('sonder_google_analytics_code', [
        'section' => 'sonder_analytics_codes_section',
        'priority' => 1,
    ]);
}

add_action('customize_register', 'sonder_theme_customizer');
