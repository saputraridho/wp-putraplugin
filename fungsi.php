<?php
function test_menu_admin() {
    add_menu_page('setting plugin bagus','Setting Plugin','','testmenu','submenupertama','dashicons-visibility');
    add_submenu_page('testmenu','Sub Menu Setting','Sub Setting','manage_options','subtestmenu','submenupertama');
}
function fungsi_testmenu() {
    echo '<h2>Setting Plugin Keren</h2>
    <p>ini adalah fasilitas untuk setting plugin</p>';
}
function submenupertama() {
    echo '<h2>Setting Sub Menu</h2>
    <p>ini adalah submenu</p>';
}
add_action('admin_menu','test_menu_admin');

function fungsi_iklan() {
    return 'ini adalah iklan';
}

function whatsapp($atts) {
    $var = shortcode_atts(
        array(
            'nohp' => '085257255213',
            'pesan' => 'Halo!',
            'text' => 'Chat Disini'
        ),$atts
        );
        return '<a href="https://wa.me/'.$var['nohp'].'?text='.urlencode($var['pesan']).'" target="_blank">'.$var['text'].'</a>';
}

add_shortcode('iklan','fungsi_iklan');
add_shortcode('whatsapp','whatsapp');


?>