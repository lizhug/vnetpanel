<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('DBDFC5B74756CBC2AAQAAAAXAAAABJAAAACABAAAAAAAAAD/SV5L7wNXVn6W4Gskdt5/rzRPMbBBSCczZcM/093nsFam1WkZ+AQl+OTzsrVSO1ISeTJbxfGiBtR0okKIgyVaNjrP+m/il5rGby11jQMxNFKUG/CDLq1+O3rabEk4iiF7q5RIzLjaN78QNYvi+52HYg+dd80d+wd0cMFNCdzrfg+fpxCJ0HIMdllgJ/No6F0GSQAAAMgBAACgDlpK8CNjIp8AU3Pbo0IVxofoYKzWAwUdRJC+H8/ZulFYz3yPwQNYO0B5i/At6D7UZMTKKYP0ib+Lg2pV/EE2ek/fZ06TFZr94ECNkVe8vobLTMgOKRPSpRWSy8hCzLQmrBJ63liAmK1IZfwMaytfsJJPIq5DNJzjGeM0Ths/D0nEf5XFMCUdgRvuq8ghlVbRaC2FNrK0JonWQFs/jfQWK0S49hBktvyX1apgjbzPK37Z9soig/8AYR4QUFgpNGvudDO5VUuqFZHw+Fc9HHLzaXjQ4+vULSYvXJAhxYKqdcRVy6NfK0hsyA6dY5PRH+34wK3n0SX6zKmsRLuJCjSgWqJCQwjLepOFJb/ZKzSyKpxTXDOFzo7oGyUqg9J4SsTlmjaEZMo8ov4S+OJVorOOTOR6BAtp3gh0bLi9gzfHq3iZ8AgB1qpJJ5Peun5PVrsEGiw6jluiv/wBh3H3OWuq4gQgZvzwZwtWgnjWlkwr76wmqoz+MOUZxXqrjtdX1TaQBNMBc1lYmY7VJshjzSSda4R3oEJLKBDarjMKomE+LbdilbrAGsO7l069MWP319887dT88twihQXGwzV/vl7VkgU+IqTHFfpKAAAAwAEAAPQNKfqwC7xGeJ2CKX4+B6+c5zrVL4SB6/DrjJJLpJrfP1ayA+nKTN75l8F+E28K3/UVM8xwj3zFtzoIlIwPxU1mPxNcfg2yRka+KwFD+VAK7D0aK7pFVu83DND9lRu6mVkZtY/wpkWdy2bExIYaqYSVwK5rBhZyu1ZjXSrSgkFWax1CXW4V5QBt+YTc9R5PZPGY6BzPzAEKUYjlzL0yTsjklDBbAD9qZ066X1LEDEP9q20RVVntrueG7mm3YcOM7gcxlStjljePIDwQcozGTSajIsWCKrrmD5dFO8a/nYwrm8CKwYsMhEVJjvQMiB6UclEzZtlcmee859sFRHETzWQGYnZDngbBIQVd3xSuZOd2/StxSH221A0RJrbdT4S/vpCx7pFGEtIicj1bZmVoYDhCjiB6W/w9L4hAThr4JLwXO1C3iBmptRqXozekVa1EEbJp8sLLOgWWqizdlpZHbCDlhcjv+ACgXewdfKRVeE8wRYA2ZcGT54NT6DkVgXAWR8SnV0Ig43+zsmD+VzdZl+UclO4qXQOg7G3y2zOWyekraoQ844ki8+PVJpq6gGcqrb2DIs4QzdlHhT3V6XNNaasAAAAA');
