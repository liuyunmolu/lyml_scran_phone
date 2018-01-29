import urllib.request
import urllib.parse
import time
from random import randrange,randint
import linecache
import urllib.error
import json


post_data = {
    'realname'  : '',
    'phone'     : '',
    'prov'      : '',
    'city'      : '',
    'area'      : '',
    'address'   : '',
    'skin_problem'  : '【产品：套餐一（一瓶，送密发梳）128元】',
    'customid'  : 0,
    'goods'     : '凌美美发粉',
    'goodsnum'  : 1,
    'price'     : 128,
    'paytype'   : 1,
    'activitytype'  : 1,
    'weixinnum'  : '',
    'templateid' : 'jianyuan3',
}

data_text = "./log/data_%s.txt" % time.strftime('%Y-%m-%d')

#设置代理源
#single_proxy_dict = {'http':'127.0.0.1:8888'}
#proxyHandler = urllib.request.ProxyHandler(single_proxy_dict)
#print("proxyHandler=",proxyHandler)
#生成代理源
#proxyOpener = urllib.request.build_opener(urllib.request.HTTPHandler,proxyHandler)


#f = proxyOpener.open('http://localhost/phpcsv/get_data.php')
#print(f.read())


#print("proxyOpener=",proxyOpener)
#安装代理源
#urllib.request.install_opener(proxyOpener)





first_name	= [
    "李","王","张","刘","陈","杨","赵","黄","周","吴",  
	"徐","孙","胡","朱","高","林","何","郭","马","罗",  
	"梁","宋","郑","谢","韩","唐","冯","于","董","萧",  
	"程","曹","袁","邓","许","傅","沈","曾","彭","吕",  
	"苏","卢","蒋","蔡","贾","丁","魏","薛","叶","阎",  
	"余","潘","杜","戴","夏","锺","汪","田","任","姜", 
	"范","方","石","姚","谭","廖","邹","熊","金","陆",  
	"郝","孔","白","崔","康","毛","邱","秦","江","史",  
	"顾","侯","邵","孟","龙","万","段","雷","钱","汤",  
	"尹","黎","易","常","武","乔","贺","赖","龚","文",
];

second_name = [
    "含","嘉","秋","煜","翠","城","忆","懿","梦","烨","苑","伟","晓","熠","代","鸿","海","涵",
	"恨","涛","忆","烨","静","烨","绮","煜","紫","智","正","昊","凝","明","香","杰","千","梦",
	"冷","立","飞","立","天","峻","翠","弘","秋","熠","鸿","煊","初","烨","雅","哲","代","寄",
	"如","致","南","俊","紫","雨","冰","烨","语","磊","晟","天","翠","文","语","修","碧","海",
	"痴","远","凝","旭","从","尧","白","鸿","白","伟","荣","越","慕","浩","雅","瑾","念","傲",
	"半","轩","从","擎","怀","擎","怜","志","代","睿","楷","子","若","弘","芷","文","以","夜",
	"南","雨","恨","鑫","梦","修","初","伟","巧","建","晋","鹏","凌","天","惜","绍","问","灵",
	"沛","明","幼","健","白","鹏","初","昊","绮","强","伟","博","寻","君","秋","子","凌","迎",
	"映","鹏","含","炎","寒","彬","友","鹤","忆","越","风","靖","巧","明","恨","高","秋","寻",
	"问","华","灵","国","春","冠","又","晗","丹","涵","翰","翰","孤","昊","紫","乾","凡","雪",
	"傲","和","傲","弘","友","宏","灵","鸿","曼","华","华","灿","问","嘉","思","坚","若","尔",
	"问","金","念","锦","诗","瑾","翠","晋","寒","鹏","经","景","冷","靖","平","君","凡","夜",
	"幻","季","紫","开","凌","济","芷","凯","之","康","乐","力","思","良","白","理","凡","丹",
	"如","彦","采","敏","沛","明","惜","朋","水","彭","鹏","濮","语","溥","听","心","半","夜",
	"念","浦","冰","奇","思","祺","凝","荣","问","锐","睿","慈","向","绍","笑","圣","思","天",
	"之","思","元","斯","以","泰","采","天","绿","佑","同","奕","问","祺","绿","文","平","巧",
	"迎","懿","碧","轩","思","伟","白","博","怜","泽","彤","煊","雁","霖","梦","华","雨","妙",
	"乐","宸","寒","豪","凝","然","书","诚","白","轩","辉","熙","恨","文","平","彤","初","映",
	"慕","瀚","半","鹏","醉","远","天","驰","雅","泽","睿","佑","飞","昊","恨","洁","巧","青",
	"南","航","芷","涛","祺","轩","幻","泽","冰","宇","瑜","苍","诗","宇","飞","泽","访","元",
];



three_name = [
    "渊","晓","瑞","轩","瀚","泽","磊","杰","诚","冬","辉","磊",
	"辉","洋","轩","柏","煊","宸","超","浩","骞","容","辉","博",
	"涛","轩","彬","华","琪","诚","格","源","宇","容","昱","立",
	"润","飞","海","博","安","博","恺","朗","奥","丹","慕","鑫",
	"秉","明","鑫","程","瑜","赋","同","琪","昊","柳","明","黎",
	"同","安","成","语","勤","哲","群","博","达","春","义","皓",
	"泽","举","存","瑜","泽","邃","祥","轩","达","旋","祺","哲",
	"杰","睿","源","年","宁","巍","伟","温","虹","白","笛","泽",
	"明","烟","海","春","曼","梅","柳","香","蓝","曼","珊","南",
	"光","凝","荷","丹","芙","兰","安","丝","雁","珍","萱","梦",
	"浩","卉","风","露","易","凡","雪","蓉","玉","岚","风","萱",
	"建","薇","雁","柏","真","琴","真","荷","珊","雪","柏","香",
	"俊","菡","旋","梦","雪","枫","云","梅","露","凝","柔","蕊",
	"茂","枫","晴","之","寒","翠","波","春","夏","春","海","珍",
	"璞","旋","芹","萱","凝","露","海","玉","香","芹","柳","风",
	"晟","柏","真","雁","松","珊","雪","柏","柏","风","蝶","文",
	"向","莲","柏","儿","容","枫","丝","凝","蕊","丝","枫","菱",
	"祺","巧","梅","寒","双","霜","香","蕾","阳","玉","彤","柔",
	"霖","灵","珊","夏","波","蝶","南","双","波","雁","莲","晴",
	"昕","灵","容","柳","岚","儿","玉","儿","凡","海","莲","蓉",
	"博","邦","材","渊","达","轩","华","福","轩","裕","胜","轩",
	"毅","灿","鸿","兴","国","遥","宇","承","伟","翎","永","图",
	"云","君","玮","杰","雄","霖","帆","凯","春","书","翔","元",
	"乾","平","信","国","耀","远","阳","玄","博","德","佑","瀚",
	"远","依","颜","来","轩","鸿","风","银","辉","伦","春","博",
	"涛","运","翔","刚","新","瀚","依","毅","涛","承","帆","志",
	"灿","瑞","泉","星","欧","宝","韵","祖","春","宇","耀","靖",
	"浩","驰","驰","逸","舟","杰","南","邦","君","辰","畅","城",
	"羽","宇","翰","博","楠","伟","邦","瑞","勤","松","轩","辰",
	"颜","晖","福","瑾","尘","岳","石","杉","承","健","诚","新",
	"智","天","枝","君","漾","逸","菲","泰","永","瀚","裕","顺",
	"奥","川","德","诚","宏","奇","瞻","仁","皓","龙","锐","瑞",
	"燕","柏","素","壁","娇","英","卉","梅","香","昕","烟","盈",
	"槐","娅","兰","莲","柳","旋","熙","珊","雅","虹","雪","珍",
	"萍","茵","娟","爽","柔","芍","柔","呜","语","瑾","筠","涵",
	"婉","双","雪","倚","竹","美","钰","梨","楠","巧","芳","雪",
	"云","瑶","春","荷","红","卉","霞","梦","芹","虹","萱","芳",
	"凤","怡","莉","柏","慧","曦","盈","绿","丹","真","薇","儿",
	"春","碧","琴","柳","香","燕","超","姗","昕","芹","琪","雅",
	"蝶","嫣","紫","雅","彤","菱","蕾","玫","蕊","瑶","缦","菲",
	"雅","彤","亦","葵","颖","春","雪","春","怡","芳","璇","怡",
];


first_count    = len(first_name) -1
second_count   = len(second_name) -1
three_count    = len(three_name) -1


'''
*   
*  自动生成手机号码 ok
*
'''
def random_phone() :
    m_phone    = [13,18];
    phone      = str(m_phone[randrange(2)]) + str(randrange(500000000,999999999))
    return phone;

'''
*
* 生成地址
*
'''
def rand_city() :
	linenum = randint(1,80000)
	city = linecache.getline('./address/all.csv',linenum)
	citys = city.split(',')
	address = '%s' % (citys[-1])
	return {"prov" : citys[0],"city" : citys[1],"address":address}
	
'''
*
* 连接代理，支持 http
*
'''
def connect_proxy(ip) :
	#设置代理源
	single_proxy_dict = {'http':ip}
	proxyHandler = urllib.request.ProxyHandler(single_proxy_dict)
	#生成代理源
	proxyOpener = urllib.request.build_opener(urllib.request.HTTPHandler,proxyHandler)
	#安装代理源
	urllib.request.install_opener(proxyOpener)
	start_proxy = 0
	print('set proxy ip : %s ok' % ip)



user_agents	= [
	'Mozilla/5.0 (iPhone; CPU iPhone OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1',
	'Mozilla/5.0 (iPad; CPU OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1',
	'Mozilla/5.0 (Linux; U; Android 5.0.2; zh-cn; X900 Build/CBXCNOP5500912251S) AppleWebKit/533.1 (KHTML, like Gecko)Version/4.0 MQQBrowser/5.4 TBS/025489 Mobile Safari/533.1 V1_AND_SQ_6.0.0_300_YYB_D QQ/6.0.0.2605 NetType/WIFI WebP/0.3.0 Pixel/1440',
	'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36 MicroMessenger/6.5.2.501 NetType/WIFI WindowsWechat',
	'Mozilla/5.0 (iPhone; CPU iPhone OS 5_1_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9B206 Safari/7534.48.3',
	'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A403 Safari/8536.25',
	'Mozilla/5.0 (iPod; U; CPU like Mac OS X; en) AppleWebKit/420.1 (KHTML, like Gecko) Version/3.0 Mobile/3A100a Safari/419.3',
	'Mozilla/5.0 (iPod; U; CPU iPhone OS 2_1 like Mac OS X; ja-jp) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5F137 Safari/525.20',
	'Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A403 Safari/8536.25',
	'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; KDDI-TS01; Windows Phone 6.5.3.5)',
	'Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; FujitsuToshibaMobileCommun; IS12T; KDDI)',
	'Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; ja) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.74 Mobile Safari/534.11+',
	'Opera/9.80 (BlackBerry; Opera Mini/6.1.25376/26.958; U; en) Presto/2.8.119 Version/10.54',
]
len_uesr_agent = len(user_agents) - 1

t_cookie	= "PHPSESSID=bbr6mottkrocmhkni4qp3osqp7; CNZZDATA1260442654=940000994-1476341123-%7C1476407211"
user_agent 	= "Mozilla/5.0 (iPhone; CPU iPhone OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1"

icounter	= 0

record_url	= "http://address.eavn.cn/record.php?"
#记录到远程主机
start_proxy	= 2


ch_fp	= open('./ipdata.txt','r')

while True :

		if start_proxy >= 2 :
			ip = ch_fp.readline()
			ip = ip.strip("\n")
			if ip != "" :
				connect_proxy(ip)
			else :
				sys.exit('end file')
		#失败30次更新cookie的值
		if icounter == 30:
			print('reading cookie  ')
			with urllib.request.urlopen('http://weiqc.com/57d7fb972a2b1') as ff :
				cookies = ff.getheader("Set-Cookie")
				if cookies != None :
						t_cookie = cookies
						icounter = 0
				print(cookies)
				print('read cookie ok ')
		user_agent = user_agents[randint(0,len_uesr_agent)]
		
		req_url     = 'http://kh.wqc.so/Fansfirst/Addcashondelivery.html'
		req_dist    = urllib.request.Request(req_url)

		#添加头部信息
		req_dist.add_header('Accept','application/json, text/javascript, */*; q=0.01')
		req_dist.add_header('Accept-Language','zh-CN,zh;q=0.8')
		req_dist.add_header('Connection','keep-alive')
		req_dist.add_header('Upgrade-Insecure-Requests','1e')

		req_dist.add_header('Content-Type','application/x-www-form-urlencoded; charset=UTF-8')
		req_dist.add_header('Cookie',t_cookie)
		req_dist.add_header('Content-Type','application/x-www-form-urlencoded')
			

		#应该有做源头设置
		req_dist.add_header('Host','kh.wqc.so')
		req_dist.add_header('Origin','kh.wqc.so')
		req_dist.add_header('X-Requested-With','XMLHttpRequest')
		req_dist.add_header('User-Agent',user_agent)
		
		post_data['realname'] = first_name[randrange(0,first_count)] + second_name[randrange(0,second_count)] + three_name[randrange(0,three_count)]
		post_data['phone'] = random_phone()
		citys = rand_city()

		post_data["prov"] = citys['prov'].strip()
		post_data['city'] = citys['city'].strip()
		post_data['address'] = citys['address'].strip()
		
		data = urllib.parse.urlencode(post_data)
		data = data.encode('ascii')
		
		try	:
			with urllib.request.urlopen(req_dist,data) as f :
				tips = json.loads(f.read().decode('utf-8-sig'))
				if tips['tip'] == "success" :
					print('writeing...')
					w_string = "%s,%s,%s,%s,%s,%s,%s" % (tips['ordernum'],post_data['realname'],post_data['phone'],post_data["prov"],post_data['city'],post_data['address'],time.strftime('%Y-%m-%d %H:%M:%S'))
					fp = open(data_text,"a+")
					fp.write(w_string)
					fp.write("\n")
					fp.close()
					print('ok %s sleep 3s ....'  % tips)
					suc_fp 		= open('success.txt','a+')
					suc_fp.write(ip + '\n')
					suc_fp.close()

					icounter	= 0
					time.sleep(3)
					post_data['ordernum']	= tips['ordernum']
					post_data['tip']		= 'ok'
					record_data = urllib.parse.urlencode(post_data)
					record_data = record_data.encode('ascii')
					with urllib.request.urlopen(record_url + "%s" % record_data ) as rf :
						print(rf.read().decode('utf-8-sig'))
					
				else :
					icounter	= icounter + 1
					print('no ok sleep 3s ....')
					time.sleep(3)
				start_proxy = start_proxy + 1
		except urllib.error.HTTPError as e:
			start_proxy = start_proxy + 1
			print(e.code)
			print(e.read().decode("utf8"))
		except urllib.error.URLError as e :
			print(e)
			print(e.errno)
		except :
			print("未知错误，无法处理先")
		
	













#
#
# 1. 设置代理访问，使用以后的网络都使用代理
# 2. 正常post请求
#
# 3. 重复  1.2.
#

'''
with urllib.request.urlopen("http://localhost/phpcsv/get_data.php", data) as f:
	print(f.read().decode('utf8'))
'''













