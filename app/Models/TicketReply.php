<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
