<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
