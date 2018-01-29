<?php

/**
 *
 *
 *
 *
 */

require 'QueryList/vendor/autoload.php';
use QL\QueryList;

set_time_limit(0);
$today = date('Y-m-d');
$page_id		= 0;
$max_page_id	= 1288;
while($page_id<=$max_page_id){
	$page_id	= $page_id + 1;
	echo $url		= "http://www.kuaidaili.com/free/intr/{$page_id}/";
	$ip_data    = "./ip_data/{$today}.txt";
	$content = get_html($url);

	$ip_list = QueryList::Query($content,array(
		'ip'	=> array('#list > table > tbody > tr > td:nth-child(1)','text'),
		'port'	=> array('#list > table > tbody > tr > td:nth-child(2)','text'),
	))->getData(function($item){
		return $item;
	});

	if ($ip_list) {
		$string = '';
		foreach($ip_list as $value){
			$string	= $string . $value['ip'] . ':' . $value['port'] . "\r\n";
		}
		$time = date('Y-m-d H:i:s');
		if ($string !='') {
			 $fp	= fopen($ip_data,'a+');
			 if (flock($fp,LOCK_EX)) {
				fwrite($fp,$string);
				flock($fp,LOCK_UN);
				fclose($fp);
				echo "by  $time  ok return : " . $string . "\n" ;

			} else {
				echo "by  $time  false \n" ;
			}
		
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
    $cookie = 'channelid=bdtg_b1_b1c3; sid=1478226082217906; _gat=1; _ga=GA1.2.818870947.1478057582; Hm_lvt_7ed65b1cc4b810e9fd37959c9bb51b31=1478163200,1478164903,1478227218,1478227231; Hm_lpvt_7ed65b1cc4b810e9fd37959c9bb51b31=1478227507';
    $header = array ();
    $header [] = 'Host:www.kuaidaili.com';
   // $header [] = 'Connection: keep-alive';

	$header [] = 'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
	//$header [] = 'Accept-Encoding:gzip, deflate, sdch';
	//$header [] = 'Accept-Language:zh-CN,zh;q=0.8';
	$header [] = 'Cache-Control:max-age=0';
	$header [] = 'Connection:keep-alive';


    $header [] = 'Cookie:' . $cookie;
    $header [] = 'Content-Type:application/x-www-form-urlencoded';
    $header [] = 'X-Requested-With:XMLHttpRequest';
    $header [] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36';
    //应该有做源头设置
    $header [] = 'Origin:www.kuaidaili.com';

    curl_setopt($ch,CURLOPT_PROXY,'127.0.0.1:8888');//设置代理服务器
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);//若PHP编译时不带openssl则需要此行
    //curl_setopt($ch,CURLOPT_REFERER,'www.dianping.com');
    curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_ACCEPT_ENCODING , 'gzip, deflate, sdch');

    $content = curl_exec($ch);
	curl_error($ch);

    return $content;
}











