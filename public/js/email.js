/**
 * Created by will on 2015/7/5.
 */
/**
 * Created by will on 2015/7/5.
 */

var mailer= (function(){
    var
        getCode,
        init,
        urls,
        mailer,
        isEmail
        ;

    urls={};
    mailer={}
    urls.getCode='/email/code';


    mailer.urls=urls;
    mailer.getCode=getCode=function(email,success,fail)
    {
        $.get(mailer.urls.getCode,{email:email},function(ret){
            if(ret.status)
            {
                $.isFunction(success)&&success();
            }
            else
            {
                $.isFunction(fail)&&fail();
            }
        })
    }
    mailer.isEmail=isEmail=function(email)
    {
        var reg = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
        return reg.test(email);
    }
    return mailer;
})();