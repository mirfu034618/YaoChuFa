# 会话控制练习题

##1.封装cookie类，类位于cookieClass/CookieClass.php

   *（1）实现了cookie的设置、获取和删除功能，有待追加功能

   *（2）调用方式：$cookie = new Ycf\Lession\Cookie\CookieClass();

                 $cookie->set('test', 'yes', 5); //设置cookie的参数

                 if ($cookie->is('test')) {

                    echo $cookie->get('test'); //获取指定的cookie信息

                 }
##2.封装session类.类位于sessionClass/SessionClass.php

   *（1）实现了session的创建启动、设置和获取功能

   *（2）调用方式：$Session = new SessionClass();

                  $Session->init();

                  $Session->set("mirfu", "myname"); //传名字与值

                  echo $Session->get("mirfu");
##3.一个具有登陆和退出功能的登陆框和首页

   *（1）存放于login文件夹(login.php、judge.php、index.php)

   *（2）login.php用于用户登录录入信息

   *（3）index.php为首页，具有退出将删除用户存入cookie的用户信息

   *（4）judge.php用于判断用户登录信息是否合法