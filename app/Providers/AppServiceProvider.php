<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
