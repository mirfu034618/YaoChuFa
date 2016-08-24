/**
 * Created by fufangjie on 2016/8/24.
 */

function checkFrom(from) {

    /**
     * 验证用户名是否为空
     */
    var name = from.userName.value.replace(/\s+/,'');
    if(name==""){
        alert('请输入用户名');
        from.userName.focus();
        return false;
    }else if(name.length < 6 || name.length > 18){
        alert('用户名长度不符合');
        from.userName.focus();
        return false;
    }
    /**
     * 验证密码是否为空，且两次输入的密码是否相同
     */
    var pwd = from.userPwd.value.replace(/\s+/,'');
    if(pwd==""){
        alert('请输入密码');
        from.userPwd.focus();
        return false;
    }else if(pwd.length < 6 || pwd.length > 18){
        alert('密码长度为6-18位');
        from.userPwd.focus();
        return false;
    }else if(from.userPword.value==""){
        alert('请再次输入密码');
        from.userPword.focus();
        return false;
    }else if(pwd != from.userPword.value){
        alert('两次输入的密码不一致');
        from.userPwd.focus();
        return false;
    }
    /**
     * 验证性别是否为空
     */
    var userSex = document.getElementsByName('sex');
    var sexResult = 0;
    for(var i=0;i<userSex.length;i++){
        if(userSex[i].checked){
            sexResult+=1;
        }
    }
    if(sexResult == 0){
        alert('请选择性别');
        return false;
    }
    /**
     * 验证爱好是否为空
     */
    var userLikes = document.getElementsByName('likes[]');
    var likesResult = 0;
    for(var j=0;j<userLikes.length;j++){
        if(userLikes[j].checked){
            likesResult+=1;
        }
    }
    if(likesResult == 0){
        alert('请选择爱好');
        return false;
    }
    /**
     * 验证是否选择城市
     */
    if(from.city.value==""){
        alert('请选择城市');
        from.city.focus();
        return false;
    }
    /**
     * 验证是否选择照片
     */
    if(from.pic.value==""){
        alert('请选择照片');
        from.pic.focus();
        return false;
    }
    /**
     * 验证是否填写个人简介
     */
    var company = from.company.value.replace(/\s+/,'');
    if(company==""){
        alert('请填写个人简介');
        from.company.focus();
        return false;
    }
}