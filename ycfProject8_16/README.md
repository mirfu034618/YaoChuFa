该网站实现了对数据库的读取并显示在页面中，后台操作完成增删改以及cookie类的调用，整合前面所学，完成网站

（1）

     index.php为主页面，info为资讯列表页面，article为文章详细内容页面，guestbook为留言页面

     aboutUs为公司简介页面，contactUs为公司联系信息页面，productList为产品列表页面

（2）

     admin文件夹中存放的页面为后台php页面，其中transFile文件中存放的是一些相对应页面操作数据库的执行php文件

     login登录时跳转到judge进行登陆验证，验证不成功则不允登录，newsEdit为文章
     
     编辑页面，productInsert页面中调用文件上传UploadFileClass类，实现图片上传并获取路径，在调用mysql类进行上传文件路径的存储
     
     userEdit为管理员编辑，当添加新管理员时，检查数据库，若有管理员名存在，则提示该用户名已存在
     
（3）class文件夹存放4个类cookie类，mysql类，字符串处理类，文件上传类
