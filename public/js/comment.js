/**
 * Created by will on 2015/7/6.
 */
/**
 * Created by will on 2015/7/5.
 */

var BLOGCOMMENT=(function(){

    var comment,
        reply,
        urls,
        drop,
        convertUrl,
        lookChats
        ;
    comment={};
    urls={};
    urls.reply='/comment/reply';
    urls.drop='/comment';
    urls.chats='/comment/chats'

    comment.urls=urls;
    comment.reply=reply=function(id,content,callback)
    {
        $.post(urls.reply,{id:id,content:content},callback);

    }
    comment.drop= drop=function(id,callback)
    {
        $.post(urls.drop+'/'+id,{_method:'DELETE'},callback);
    }
    comment.convertUrl= convertUrl=function(container,callback)
    {
        var $pages= $(container);
        var $as=$pages.find('a');
        $as.each(function(){
            var $this;
            $this=$(this);
            $this.data('url',$this.attr('href')).attr('href','javascript:void(0)');
        });

        $pages.delegate('a','click',function(){
            var $this;
            $this=$(this);
            $.get($this.data('url'),callback)
        })
    }
    comment.lookChats=lookChats=function(id,callback)
    {
        $.get(urls.chats+'/'+id,callback);
    }
    return  comment;


})();