<?php
$url	= 'http://kh.wqc.so/Fansfirst/template.html?templatid=lingmei6_3&uid=7&id=4';
$url	= 'http://1212.ip138.com/ic.asp';
$content = get_data_curl($url);

print_r($content);

/**
 *
 * 发送请求
 * @param string $url
 * @param $post
 * @return string
 *
 */
function get_data_curl($url ='',$post = array()) {
    $ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);

	//curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC); //代理认证模式
	curl_setopt($ch, CURLOPT_PROXY, "124.193.33.233"); //代理服务器地址
	curl_setopt($ch, CURLOPT_PROXYPORT, 3128); //代理服务器端口
	//curl_setopt($ch, CURLOPT_PROXYUSERPWD, ":"); //http代理认证帐号，username:password的格式
	curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); //使用http代理模式
	//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$outout	= curl_exec($ch);
	$error_no	= curl_errno($ch);
	curl_close($ch);

    return $error_no;
}