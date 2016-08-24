# HTML作业

## 制作用户注册页面，设计表并将数据存储进去，密码需加密

### 简介

   * class文件夹中存放文件上传与数据库两个类
   
### 使用介绍

   * 设计user表
   
     create table user{
	    id int not null primary key auto_increment,
		userName varchar(20) not null comment '用户名',
		userPwd varchar(255) not null comment '用户密码', //因为要进行加密，所以赋予255的长度
		userSex varchar(5) not null comment '性别',
		userLikes varchar(30) not null comment '爱好',
		userCity varchar(50) not null comment '城市',
		userPath varchar(50) not null comment '上传照片的路径',
		persional text not null comment '个人简介'
	);

   * register.php表单中输入内容时交由uploadInfor.php中进行简单验证
   
     验证用户名与密码是否为空，且输入长度是否符合需求长度
	 
   * uploadInfor.php为表单通过验证后提交到的数据库存储处理页面
   
     页面中进行数据获取并将获取到的密码用MD5函数进行加密存储