<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
