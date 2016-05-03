<?php

$token = '80a657e0c1aeba09e3cef2a337a6d4bb';
$domainname = 'http://162.243.212.232';

$functionname = 'core_enrol_get_enrolled_users';

// REST RETURNED VALUES FORMAT
$restformat = 'json';

$params = array('courseid'=>2, 'options'=>array());

/// REST CALL
header('Content-Type: text/plain');
$serverurl = $domainname . '/webservice/rest/server.php'. '?wstoken=' . $token . '&wsfunction='.$functionname;
require_once('./curl.php');
$curl = new curl;
//if rest format == 'xml', then we do not add the param for backward compatibility with Moodle < 2.2
$restformat = ($restformat == 'json')?'&moodlewsrestformat=' . $restformat:'';
$resp = $curl->post($serverurl . $restformat, $params);
print_r($resp);
