/**
 * Created by wmj on 15-8-1.
 */

function CommentController($scope,$http,Comment)
{
    $scope.comments=Comment.get();
}

angular.module('blogComment',['ngRoute,ngResource']).
    controller('CommentController',CommentController).
    config(['$routeProvider',function($routeProvider){

    }]).
    factory('Comment',function($resource){
        return $resource('comment/:id',{},{
            get:{method:'GET',params:{id:''},isArray:true}
        })
    })

