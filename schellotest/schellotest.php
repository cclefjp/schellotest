<?php
/*
Plugin Name: schellotest
Plugin URI: https://notes.cclef-dev.net/posts/174
Description: simple shortcode test plugin
Version: 1.0
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

/* ショートコード部に挿入されるフォーム出力の記載 */
function schello_func($atts) {

    if (array_key_exists('echoback', $_POST)) {
       
        $schello_pre = 'schelloショートコードによりユーザーが入力した文章は ';
        $schello_user = $_POST['echoback'];
        $schello_post = ' です。';

        return sanitize_text_field($schello_pre . $schello_user . $schello_post);

    } else {
        $formstatement = '<form action="' . get_permalink() . '" method="post">
                    エコーバック: <input type="text" name="echoback" />
                    <input type="submit" />
                    </form>';
        return $formstatement;
    }
}

/* [schello]ショートコードを登録する */
add_shortcode('schello', 'schello_func');
?>