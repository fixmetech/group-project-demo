<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    /** database config **/
    define('DBNAME', 'group_project_demo');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'mario#123');
    define('ROOT', 'http://localhost/MVC-tutorial/group-project-demo/public');
} else {
    /** database config **/
    define('DBNAME', 'group_project_demo');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('ROOT', 'http://group-project-demo.herokuapp.com');
}
