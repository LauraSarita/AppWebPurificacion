<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-09-04 15:43:15 --> Query error: Table 'test.ea_settings' doesn't exist - Invalid query: SELECT *
FROM `ea_settings`
WHERE `name` = 'company_name'
ERROR - 2018-09-04 17:38:57 --> Could not find the language line "apple"
ERROR - 2018-09-04 17:51:57 --> Could not find the language line "customers"
ERROR - 2018-09-04 22:30:36 --> Email could not been sent. Mailer Error (Line 179): Could not instantiate mail function.
ERROR - 2018-09-04 22:30:36 --> #0 C:\xampp\htdocs\EA\application\controllers\Appointments.php(575): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text))
#1 C:\xampp\htdocs\EA\system\core\CodeIgniter.php(532): Appointments->ajax_register_appointment()
#2 C:\xampp\htdocs\EA\index.php(353): require_once('C:\\xampp\\htdocs...')
#3 {main}
