<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary'  => base_path('vendor/snappypdf/usr/binwkhtmltopdf'),
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary'  => base_path('vendor/snappypdf/usr/bin/wkhtmltoimage'),
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),


);
