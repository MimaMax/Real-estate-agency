<?php

require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=andoverie_db',
        'mysql', 'mysql' );

session_start();
