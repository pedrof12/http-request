<?php

use Pedrof\Http\Request;

require __DIR__."/../vendor/autoload.php";

# Iniciando o http-request informando a ele a url, e os parametros

Request::new("http://localhost:8080/v2/contact", "GET");
print_r(Request::send());
