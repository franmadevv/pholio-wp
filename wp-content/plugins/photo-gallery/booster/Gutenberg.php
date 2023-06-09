<?php

/**
 * Class TWBBWGGutenberg
 */
class TWBBWGGutenberg {
  private $booster;
  function __construct($booster) {
    $this->booster = $booster;
    add_action('enqueue_block_editor_assets', array($this, 'register_scripts'));
  }

  /**
   * Register scripts.
   *
   * @return void
   */
  public function register_scripts() {
    wp_enqueue_script(TenWebBoosterBWG::PREFIX . '-gutenberg', $this->booster->plugin_url . '/assets/js/gutenberg/gutenberg-compiled.js', array(
      'wp-plugins',
      'wp-edit-post'
    ), TenWebBoosterBWG::VERSION);
    wp_localize_script(TenWebBoosterBWG::PREFIX . '-gutenberg', 'twb', array(
      'cta_button' => $this->booster->cta_button,
      'href' => $this->booster->submenu_url,
    ));
    wp_enqueue_style(TenWebBoosterBWG::PREFIX . '-global');
    if ( $this->booster->cta_button['button_color'] || $this->booster->cta_button['text_color'] ) {
      wp_add_inline_style(TenWebBoosterBWG::PREFIX . '-global', '.twb-custom-button, .twb-custom-button:hover {background-color: ' . $this->booster->cta_button['button_color'] . ' !important; color: ' . $this->booster->cta_button['text_color'] . ' !important;}');
    }
  }
}
