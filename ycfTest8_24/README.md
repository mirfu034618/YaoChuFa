# js作业

## 给用户注册页面添加表单验证程序，点击提交时任何一项为空弹出提示框，不能为空

### 简介

   * class文件夹中存放文件上传与数据库两个类
   
   * css为表单样式文件
   
   * js中为表单验证文件
   
### 使用介绍

   * register.php表单中输入内容时交由register.js中进行验证
   
     验证内容是否为空，且输入长度是否符合需求长度，并且使用正则排除空格影响
	 
   * uploadInfor.php为表单通过验证后提交到的数据库存储处理页面
   
     页面中进行数据获取并将获取到的密码用MD5函数进行加密存储