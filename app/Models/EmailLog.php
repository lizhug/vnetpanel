<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
