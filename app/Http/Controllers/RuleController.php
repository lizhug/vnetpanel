<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
