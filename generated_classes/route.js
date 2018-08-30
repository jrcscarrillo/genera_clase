$scope.route = {"listID": $scope.listID,
"timeCreated": $scope.timeCreated,
"timeModified": $scope.timeModified,
"editSequence": $scope.editSequence,
"name": $scope.name,
"isActive": $scope.isActive,
"description": $scope.description,
"address": $scope.address,
"phone": $scope.phone,
"email": $scope.email,
"tipoId": $scope.tipoId,
"numeroId": $scope.numeroId,
"customField1": $scope.customField1,
"customField2": $scope.customField2,
"customField3": $scope.customField3,
"status": $scope.status,
data: {"listID": $scope.route.listID,
"timeCreated": $scope.route.timeCreated,
"timeModified": $scope.route.timeModified,
"editSequence": $scope.route.editSequence,
"name": $scope.route.name,
"isActive": $scope.route.isActive,
"description": $scope.route.description,
"address": $scope.route.address,
"phone": $scope.route.phone,
"email": $scope.route.email,
"tipoId": $scope.route.tipoId,
"numeroId": $scope.route.numeroId,
"customField1": $scope.route.customField1,
"customField2": $scope.route.customField2,
"customField3": $scope.route.customField3,
"status": $scope.route.status,
{$scope.route.listID = data.listID;
$scope.route.timeCreated = data.timeCreated;
$scope.route.timeModified = data.timeModified;
$scope.route.editSequence = data.editSequence;
$scope.route.name = data.name;
$scope.route.isActive = data.isActive;
$scope.route.description = data.description;
$scope.route.address = data.address;
$scope.route.phone = data.phone;
$scope.route.email = data.email;
$scope.route.tipoId = data.tipoId;
$scope.route.numeroId = data.numeroId;
$scope.route.customField1 = data.customField1;
$scope.route.customField2 = data.customField2;
$scope.route.customField3 = data.customField3;
$scope.route.status = data.status;
