<?php

// Use an autoloader!
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

// Library
require 'libs/Database.php';
require 'libs/Session.php';

require 'config/paths.php';
require 'config/database.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$app = new Bootstrap();
