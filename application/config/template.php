<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
$template['active_template'] = 'default';
$template['default']['template'] = 'template';
$template['default']['regions'] = array(
   'header',
   'content',
   'footer',
);

$template['user']['template'] = 'users';
$template['user']['regions'] = array(
   'header',
   'content',
   'title1',
   'title2',
   'footer',
);
$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parse_template'] = FALSE;

/* End of file template.php */
/* Location: ./system/application/config/template.php */