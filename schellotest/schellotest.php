<?php
/*
Plugin Name: schellotest
Plugin URI: https://notes.cclef-dev.net/posts/160
Description: simple shortcode test plugin
Version: 0.1
Author: Cclef Development
Author URI: https://notes.cclef-dev.net/
License: GPLv3
*/

/*
schellotest is free software: you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation, either version 3
of the License, or any later version.
 
schellotest is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.
 
You should have received a copy of the GNU General Public
License along with schellotest.
*/

/* ショートコード処理の本体 */
function schello_func($atts) {
    $schello =  'この文章は';
    $schello = $schello .  'schelloショートコードにより出力されました。';
    return $schello;
}


/* [schello]ショートコードを登録する */
add_shortcode('schello', 'schello_func');
?>