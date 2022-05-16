<h1 style="background: #000; color: #fff; text-align:center; margin:20px; padding:20px;">ByteBunch Live Chat</h1>
        
<form action="options.php" method="post">
    <?php
        settings_fields( 'bb_register_setting' );
        do_settings_sections( 'bb_register_setting' );
        submit_button();
    ?>
</form>