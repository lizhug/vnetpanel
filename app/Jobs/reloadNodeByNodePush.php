<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
