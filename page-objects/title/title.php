<?php
$element_type = get_sub_field('element_type');

$format = '<%1$s class="'. get_sub_field('title_size') .'">'. get_sub_field('title') .'</%1$s>';

echo sprintf($format, $element_type);
 ?>
