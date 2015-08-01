/*!
* Light Blog v0.0.1 (http://wyuol.com:81/home/9)
* Copyright 2015-2015 MingJie Wang 
* Licensed under the MIT license
*/
/**
 * Created by will on 2015/7/5.
 */

var button=(function(){
    'use strict'
    var button,
        countDown;
    button={};
    button.countDown=countDown=function(btn,seconds,text)
    {
        var $this,
            pid;
        $this=$(btn).button('loading');
        $this.text(text+' ('+seconds+'s)');
        $this.data('cur_seconds',seconds);
       pid= setInterval(function(){
            var seconds;
            seconds=$this.data('cur_seconds');
          if(seconds>1)
          {
              $this.data('cur_seconds',--seconds);
              $this.text(text+' ('+seconds+'s)');
          }
          else{
              $this.button('reset');
              $this.text(text);
              clearInterval(pid);
          }
        },1000)


    }
    return button;



})();
/**
 * Created by will on 2015/7/5.
 */
/**
 * Created by will on 2015/7/5.
 */

var mailer= (function(){
    'use strict'
    var
        getCode,

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