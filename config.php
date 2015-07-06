<?php
    $config = Config::singleton();

    $config->set('controllersFolder', 'Controllers/');
    $config->set('modelsFolder', 'Models/');
    $config->set('xmlFolder', 'Models/xml/');
    $config->set('wsFolder', 'Models/services/');
    $config->set('viewsFolder', 'Views/');
    $config->set('templatesFolder', 'Templates/');    
    $config->set('Template', 'default.php');

    /* Base de Datos */
    $config->set('driver', 'mysql');
    $config->set('dbhost', 'localhost');
    $config->set('dbname', 'altiviao_db');
    $config->set('dbuser', 'altiviao_dbuser');
    $config->set('dbpass', 'password');

    /* Sitio Web */
    $config->set('Title', 'AltiviaOT | API');
    $config->set('BaseUrl', 'http://localhost');