<?php

if (!isset($_SESSION['user'])):
    header('LOCATION: ' . PUBLIC_BASE_URL . 'user/login-form');

endif;
