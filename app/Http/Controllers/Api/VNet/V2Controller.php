<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
