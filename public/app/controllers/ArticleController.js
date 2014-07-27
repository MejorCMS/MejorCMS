define(['modules/app'], function(app){
    
    app.controller('ArticleController',['$scope', function ($scope) {
        $scope.title = 'New Article';
        $scope.article = {title:'',content:'',category_id:'',slug:'',feactured:'',published:''};
    }]);
    
});
