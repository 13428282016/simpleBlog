/**
 * Created by will on 2015/7/5.
 */

var button=(function(){
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