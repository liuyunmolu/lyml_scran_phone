$(function(){
	/** 
	 *
	 * 1. 需要在页面新加一个  <div id="showImage" style="display:none"></div>
	 * 2. url		: 'getdata.php' 中的 getdata.php 改成相应的文件
	 *
	 *
	 */
	setTimeout(function(){
		$.ajax({
			url		: 'getdata.php',
			type	: 'get',
			dataType	: 'json'
		}).success(function(result){
			if (result.datas != '') {
				var load_images = result.datas;
				var list_images = '';
				for(i in load_images){
					list_images +='<img src="' + load_images[i] + '" >';
				}
				document.getElementById("showImage").innerHTML = list_images;
			}
		})
	},2000)
});
