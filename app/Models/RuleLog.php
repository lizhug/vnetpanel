<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
