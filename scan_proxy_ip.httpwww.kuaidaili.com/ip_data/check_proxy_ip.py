import urllib.request


	


'''
*
* 连接代理，支持 http
*
'''
def connect_proxy(ip) :
	print('set proxy .... %s ' % ip)	
	#设置代理源
	single_proxy_dict = {'http':ip}
	proxyHandler = urllib.request.ProxyHandler(single_proxy_dict)
	#生成代理源
	proxyOpener = urllib.request.build_opener(urllib.request.HTTPHandler,proxyHandler)
	#安装代理源
	urllib.request.install_opener(proxyOpener)
	start_proxy = 0
	print('set proxy ok')


data_file	 = "2016-10-12.txt"
success_file = "success.txt"
fp	= open(data_file,'r')
i	= 0
j	= 0
t_url	= 'http://weiqc.com/57d7fb972a2b1'
while True	:
	try :
		i = i + 1
		line	= fp.readline()
		line	= line.strip('\n')
		j = j + 1
		if line :
			try :
				connect_proxy(line)
				with urllib.request.urlopen(t_url) as f :
					s_fp = open(success_file,'a+')
					s_fp.write(line + '\n')
					s_fp.close() 
			
					print('ip:%s ok %s \n' % (line,j))
				
			except	:
				#print('ip:%s  errro' % line)
				pass
		else :
			print('all end ')
			break

	except :
		print('main error')
		pass











