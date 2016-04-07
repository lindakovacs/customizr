<?php
/**
 * The template for displaying the headings in post lists and singular
 *
 * @package WordPress
 * @subpackage Customizr
 * @since Customizr 3.5.0
 */

/* Case we're displaying the headings of the contents such as posts/pages/attachments both as singular and as elements of lists of posts */
?>
<header class="<?php tc_echo( 'element_class' ) ?>" <?php tc_echo('element_attributes') ?>>
  <?php
    if ( tc_has('post_page_title') ) { tc_render_template('content/singles/post_page_title'); }

    if ( tc_has('post_metas_button') ) { tc_render_template( 'content/post-metas/post_metas', 'post_metas_button'); }
    elseif ( tc_has('post_metas_text') ) { tc_render_template('content/post-metas/post_metas_text', 'post_metas_text'); }
    elseif ( tc_has('post_metas_attachment') ) { tc_render_template('content/post-metas/attachment_post_metas', 'post_metas_attachment'); }
    //do_action( '__headings_content__' );
  ?>
  <?php if ( is_singular() ) : ?>
    <hr class="featurette-divider headings singular-content">
  <?php endif ?>
</header>
