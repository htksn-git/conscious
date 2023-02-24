<?php if ( !defined( 'ABSPATH' ) ) exit;

// functions.phpを分割 ////////////////////////////////////
locate_template('functions/_general.php', true);
locate_template('functions/functions.php', true);
locate_template('functions/meta-description.php', true);
locate_template('functions/admin.php', true);
locate_template('functions/page.php', true);
locate_template('functions/search.php', true);
locate_template('functions/plugin.php', true);

?>
