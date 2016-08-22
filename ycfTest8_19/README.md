正则作业

测试方法：

    include "regularClass/RegularClass.php";

    $reg = new RegularClass();

    echo "作业1<br />";

    $array = array("Linux RedHat9.0", "Apache2.2.9", "MySQL5.0.51", "PHP5.2.6", "LAMP", "100");

    echo "<pre>";

    print_r($reg->regularArray("/^[a-zA-Z]+\S*[0-9]$/", $array));

    echo "<pre>";

    echo "<hr>";

    echo "作业2<br />";

    $search = "-^(([^:/?#]+):)?(//([^/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?-i";

    $url    = 'http://www.yaochufa.com/index.php';
    
    echo "<pre>";

    print_r($reg->regularUrl($search, $url));

    echo "<pre>";

    echo "<hr>";

    echo "作业3<br>";

    $urls = '<tr><td><a href="http://qzone.qq.com">QQ空间</a></td><td>
          <a href="http://www.ganji.com">赶 集 网</a></td><td>
          <a href="http://www.baixing.com">百 姓 网</a></td><td>
          <a href="http://www.taobao.com">淘 宝 网</a></td><td>
          <a href="http://tuan.baidu.com">百度团购</a></td><td>
          <a href="http://www.dianping.com">大众点评网</a></td></tr>';
    
    $bant = "/http:[\/]{2}[a-z]+[.]{1}[a-z\d\-]+[.]{1}[a-z\d]*[\/]*[A-Za-z\d]*[\/]*[A-Za-z\d]*/";

    echo "<pre>";
    
    print_r($reg->regularStringUrl($bant, $urls));

    echo "<pre>";
    
    echo "<hr>";

    echo "作业4<br>";

    $str  = "<html><b>你好</b><font color='red' size='7'><i><u>很好哒</u></i></font></html>";

    $preg = "/<\/?[^>]+>/i";

    echo $reg->regularHtml($preg, '', $str);
