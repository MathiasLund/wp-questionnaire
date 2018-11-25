<style>
@media only screen and (max-width: 600px) {
  .outer_price h2
  {
    font-size:<?php echo get_post_meta($post_id,'header_font_size_mobile',true); ?>;
  }
}
.price_table
{
  background:<?php echo get_post_meta($post_id,'pricing_background_color',true); ?>;
}
.outer_price h2
{
  font-size:<?php echo get_post_meta($post_id,'header_font_size_desktop',true); ?>;
  color:<?php echo get_post_meta($post_id,'header_text_color',true); ?>;
}
.popl_price
{
  background:<?php echo get_post_meta($post_id,'featured_top_color',true); ?>;
}
.popl_price p
{
  color:<?php echo get_post_meta($post_id,'featured_top_text_color',true); ?>;
}
.pop_price p
{
  color:<?php echo get_post_meta($post_id,'featured_price_color',true); ?>;
}
.pop_price span
{
  color:<?php echo get_post_meta($post_id,'featured_discount_color',true); ?>;
}
.active_packet a
{
  background:<?php echo get_post_meta($post_id,'button_featured_background',true); ?> !important;
}
.choose_packet a
{
  background:<?php echo get_post_meta($post_id,'button_background',true); ?>;
}
.active_packet a
{
  color:<?php echo get_post_meta($post_id,'button_featured_color',true); ?> !important;
}
.choose_packet a
{
  color:<?php echo get_post_meta($post_id,'button_text_color',true); ?>;
  border:<?php echo get_post_meta($post_id,'button_border',true); ?> !important;
}
.control_pos
{
  background:<?php echo get_post_meta($post_id,'table_background_color',true); ?> !important;
}
.center_elpr
{
  background:<?php echo get_post_meta($post_id,'featured_table_background_color',true); ?> !important;
}
.elem_of_p
{
  border-radius:<?php echo get_post_meta($post_id,'table_border_radius',true); ?> !important;
}
.choose_packet>a:hover {
  color: <?php echo get_post_meta($post_id,'button_hover_text_color',true); ?>!important;
  background: <?php echo get_post_meta($post_id,'button_hover_background',true); ?>!important;
}
.active_packet>a:hover {
  background: <?php echo get_post_meta($post_id,'button_featured_hover_background',true); ?>!important;
}
</style>
