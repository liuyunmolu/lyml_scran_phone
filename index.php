<?php

/**
 *
 *
 *   info	: scan phone 
 *   target : http://www.guisd.com/ss/
 *
 *
 *
 */

require 'QueryList/vendor/autoload.php';
use QL\QueryList;

set_time_limit(0);
echo "go......\n\n\n";
$today = date('Y-m-d');
$url		= "http://www.guisd.com/ss/";
$base_url	= "http://www.guisd.com";
$content	= get_html($url);

$phone_list	= array();
$phone_content = '';
$area_list = QueryList::Query($content,array(
	'url'	=> array('body > div.wrap.s_list > dl > dd > a','href'),
	'name'	=> array('body > div.wrap.s_list > dl > dd > a','text'),
))->getData(function($item){
	$item['name']	= mb_convert_encoding($item['name'],'gbk');
	return $item;
});
unset($content);
if (!empty($area_list)) {
	$area_phone_data = "./data/";
	$tmp = "";
	foreach($area_list as $val){
		$tmp = $area_phone_data . $val['name'] . ".txt";
		//$fp = fopen($area_phone_data,'w');
		exit;
		$phone_content = get_html($base_url . $val['url']);
		$phone_list = QueryList::Query($phone_content,array(
			'phone'	=> array('dl > dd > a','text'),
		))->getData(function($item){
			$item['phone'] = mb_convert_encoding($item['phone'],'gbk');
			return $item;
		});
		$string = "";
		foreach($phone_list as $value) {
			$string = $string . $value['phone'] . "\n";
		}
		if ($phone_list) {
			echo "create data file: " . $tmp . "\n";
			$fp = fopen($tmp,'w');
			if (flock($fp,LOCK_EX)) {
				fwrite($fp,$string);
				flock($fp,LOCK_UN);
			}
			fclose($fp);
			echo "write phone ok \n\n";
		} else {
			echo "not found phone for city:" .$val['name'];
		}
	}
}

	


/**
 *
 * @param $url
 * @return mixed
 *
 */

function get_html($url) {
    $ch = curl_init();
    $cookie = 'bdshare_firstime=1476509659347; CNZZDATA30040045=cnzz_eid%3D1271070018-1476505950-null%26ntime%3D1476516887';
    $header = array ();
    $header [] = 'Host:www.guisd.com';
    $header [] = 'Connection: keep-alive';

    $header [] = 'Cookie:' . $cookie;
    $header [] = 'Content-Type:application/x-www-form-urlencoded';
    $header [] = 'X-Requested-With:XMLHttpRequest';
    $header [] = 'User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2763.0 Safari/537.36';
    //应该有做源头设置
    $header [] = 'Origin:www.guisd.com';

    curl_setopt($ch,CURLOPT_PROXY,'127.0.0.1:8888');//设置代理服务器
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);//若PHP编译时不带openssl则需要此行
    //curl_setopt($ch,CURLOPT_REFERER,'www.dianping.com');
    curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
    //curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $content = curl_exec($ch);
    curl_close($ch);

    return $content;
}











