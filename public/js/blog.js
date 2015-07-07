/**
 * Created by will on 2015/7/5.
 */

var blog= (function(){
    var
        drop,
        init,
        urls,
        blog,
        comment,
        getComments
        ;

    urls={};
    blog={}
    urls.drop='/ucenter/blog';
    urls.index='/ucenter/blog';
    urls.comment='/comment/';
    urls.comments='/comment'

    blog.urls=urls;
    blog.drop=drop=function(id)
    {
        $.post(blog.urls.drop+'/'+id,{_method:'DELETE'},function(ret){
            if(ret.status)
            {
                location.href=blog.urls.index;
            }
            else
            {

            }
        })
    }
    blog.comment=comment=function(id,content,success,fail)
    {
        $.post(blog.urls.comment,{id:id,content:content},function(ret){
            if(ret.status==401)
            {
                location.href='/auth/login';
            }
           else if(ret.status)
            {
                $.isFunction(success)&&success(ret);
            }
            else
            {
                $.isFunction(fail)&&success(fail);
            }
        })
    }
    blog.getComments=getComments=function(id,callback)
    {
        $.get(blog.urls.comments,{id:id},callback);


    }
    return blog;
})();