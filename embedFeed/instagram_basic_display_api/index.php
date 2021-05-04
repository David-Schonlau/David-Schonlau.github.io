<?php
  require_once ('instagram_basic_display_api');

  $params = array(
    'get_code' => isset($_GET['code']) ? $_GET['code'] : ''
  );
  $ig = new instagram_basic_display_api($params);
 ?>
<h1>Instagram Basic Display API</h1>
 <a href="<?php $ig->authorizationUrl; ?>">
   Mit Instagram authorisieren
 </a>
