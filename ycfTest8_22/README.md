# HTML��ҵ

## �����û�ע��ҳ�棬��Ʊ������ݴ洢��ȥ�����������

### ���

   * class�ļ����д���ļ��ϴ������ݿ�������
   
### ʹ�ý���

   * ���user��
   
     create table user{
	    id int not null primary key auto_increment,
		userName varchar(20) not null comment '�û���',
		userPwd varchar(255) not null comment '�û�����', //��ΪҪ���м��ܣ����Ը���255�ĳ���
		userSex varchar(5) not null comment '�Ա�',
		userLikes varchar(30) not null comment '����',
		userCity varchar(50) not null comment '����',
		userPath varchar(50) not null comment '�ϴ���Ƭ��·��',
		persional text not null comment '���˼��'
	);

   * register.php������������ʱ����uploadInfor.php�н��м���֤
   
     ��֤�û����������Ƿ�Ϊ�գ������볤���Ƿ�������󳤶�
	 
   * uploadInfor.phpΪ��ͨ����֤���ύ�������ݿ�洢����ҳ��
   
     ҳ���н������ݻ�ȡ������ȡ����������MD5�������м��ܴ洢