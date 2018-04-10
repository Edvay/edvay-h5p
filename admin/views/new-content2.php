<?php
/**
 * Add new H5P Content.
 *
 * @package   H5P
 * @author    Joubel <contact@joubel.com>
 * @license   MIT
 * @link      http://joubel.com
 * @copyright 2014 Joubel
 */

wp_enqueue_style('h5p' . '-plugin-styles', plugins_url('h5p/h5p-php-library/styles/h5p.css'), array(), '1.10.1');

?>

<div class="wrap">
  <?php H5P_Plugin_Admin::print_messages(); ?>
  <?php if (!$contentExists || $this->current_user_can_edit($this->content)): ?>
    <form method="post" enctype="multipart/form-data" id="h5p-content-form">
      <div id="post-body-content">
        <div id="titlediv">
          <label class="" id="title-prompt-text" for="title"><?php esc_html_e('Enter title here', $this->plugin_slug); ?></label>
          <input id="title" type="text" name="title" id="title" value="<?php print esc_attr($title); ?>"/>
        </div>
        <div class="h5p-upload">
          <input type="file" name="h5p_file" id="h5p-file"/>
          <?php if (current_user_can('disable_h5p_security')): ?>
            <div class="h5p-disable-file-check">
              <label><input type="checkbox" name="h5p_disable_file_check" id="h5p-disable-file-check"/> <?php _e('Disable file extension check', $this->plugin_slug); ?></label>
              <div class="h5p-warning"><?php _e("Warning! This may have security implications as it allows for uploading php files. That in turn could make it possible for attackers to execute malicious code on your site. Please make sure you know exactly what you're uploading.", $this->plugin_slug); ?></div>
            </div>
          <?php endif; ?>
        </div>
        <div class="h5p-create"><div class="h5p-editor"><?php esc_html_e('Waiting for javascript...', $this->plugin_slug); ?></div></div>
        <?php  if ($examplesHint): ?>
          <div class="no-content-types-hint">
            <p><?php printf(wp_kses(__('It looks like there are no content types installed. You can get the ones you want by using the small \'Download\' button in the lower left corner on any example from the <a href="%s" target="_blank">Examples and Downloads</a> page and then you upload the file here.', $this->plugin_slug), array('a' => array('href' => array(), 'target' => array()))), esc_url('https://h5p.org/content-types-and-applications')); ?></p>
            <p><?php printf(wp_kses(__('If you need any help you can always file a <a href="%s" target="_blank">Support Request</a>, check out our <a href="%s" target="_blank">Forum</a> or join the conversation in the <a href="%s" target="_blank">H5P Community Chat</a>.', $this->plugin_slug), array('a' => array('href' => array(), 'target' => array()))), esc_url('https://wordpress.org/support/plugin/h5p'), esc_url('https://h5p.org/forum'), esc_url('https://gitter.im/h5p/CommunityChat')); ?></p>
          </div>
        <?php endif ?>
      </div>
   </form>
  <?php endif; ?>
</div>
