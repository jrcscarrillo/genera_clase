$scope.modelos = {"id": $scope.id,
"modelName": $scope.modelName,
"actionName": $scope.actionName,
"modelType": $scope.modelType,
"modelDes": $scope.modelDes,
"menuName": $scope.menuName,
"menuOrder": $scope.menuOrder,
data: {"id": $scope.modelos.id,
"modelName": $scope.modelos.modelName,
"actionName": $scope.modelos.actionName,
"modelType": $scope.modelos.modelType,
"modelDes": $scope.modelos.modelDes,
"menuName": $scope.modelos.menuName,
"menuOrder": $scope.modelos.menuOrder,
{$scope.modelos.id = data.id;
$scope.modelos.modelName = data.modelName;
$scope.modelos.actionName = data.actionName;
$scope.modelos.modelType = data.modelType;
$scope.modelos.modelDes = data.modelDes;
$scope.modelos.menuName = data.menuName;
$scope.modelos.menuOrder = data.menuOrder;
