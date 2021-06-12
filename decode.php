<?php
const TOKEN = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxMjMsInJvbGVzIjpbIlJPTEVfQURNSU4iLCJST0xFX1VTRVIiXSwiZW1haWwiOiJjb250YWN0QGRlbW8uZnIiLCJpYXQiOjE2MjM1MDIxMzgsImV4cCI6MTYyMzUwMjE5OH0.fk5_pPeO-gITVsRk9Aijv8h3upq32e3cnpFGCpyi1eY';

require_once 'includes/config.php';
require_once 'classes/JWT.php';

$jwt = new JWT();
var_dump($jwt->isValid(TOKEN));