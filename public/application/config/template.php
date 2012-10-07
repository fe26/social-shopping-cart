<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
$template['active_template'] = 'user';
$template['konfirmasi']['template'] = 'konfirmasi';
$template['konfirmasi']['regions'] = array(
   'header',
   'content',
   'title1',
   'title2',
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
$template['user']['parser'] = 'parser';
$template['user']['parser_method'] = 'parse';
$template['user']['parse_template'] = FALSE;

/* End of file template.php */
/* Location: ./system/application/config/template.php */