<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
