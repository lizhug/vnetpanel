<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
