<?php
	$loading_img	= array(
		'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_01.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_02.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_04.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_05.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_06.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_07.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_08.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_09.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_10.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_11.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_12.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_13.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_14.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_15.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_16.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_17.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_18.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_19.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_20.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_21.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_22.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_23.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_24.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_25.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_26.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_27.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_28.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_29.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_30.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_31.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_32.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_33.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_34.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_35.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/lingmei6_3_36.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/sf.jpg'
		,'http://kh.wqc.so/public/images/fansfirst/nanxiwang_bei.png'
		,'http://kh.wqc.so/public/images/fansfirst/btn-totop.png');
	//每执行一次就在当前目前
	$data_file	= 'count.data';
	if (!file_exists($data_file)) {
		touch($data_file);
	}
	$count		= file_get_contents($data_file);
	$count		= $count != '' ?  $count + 1 : 1;
	file_put_contents($data_file,$count);

	echo json_encode(array('datas'=>$loading_img));



