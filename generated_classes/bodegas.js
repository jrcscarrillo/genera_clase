$scope.bodegas = {"ListID": $scope.ListID,
"TimeCreated": $scope.TimeCreated,
"TimeModified": $scope.TimeModified,
"EditSequence": $scope.EditSequence,
"Name": $scope.Name,
"FullName": $scope.FullName,
"IsActive": $scope.IsActive,
"ParentRef_ListID": $scope.ParentRef_ListID,
"ParentRef_FullName": $scope.ParentRef_FullName,
"Sublevel": $scope.Sublevel,
"Status": $scope.Status,
"Estado": $scope.Estado,
data: {"ListID": $scope.bodegas.ListID,
"TimeCreated": $scope.bodegas.TimeCreated,
"TimeModified": $scope.bodegas.TimeModified,
"EditSequence": $scope.bodegas.EditSequence,
"Name": $scope.bodegas.Name,
"FullName": $scope.bodegas.FullName,
"IsActive": $scope.bodegas.IsActive,
"ParentRef_ListID": $scope.bodegas.ParentRef_ListID,
"ParentRef_FullName": $scope.bodegas.ParentRef_FullName,
"Sublevel": $scope.bodegas.Sublevel,
"Status": $scope.bodegas.Status,
"Estado": $scope.bodegas.Estado,
{$scope.bodegas.ListID = data.ListID;
$scope.bodegas.TimeCreated = data.TimeCreated;
$scope.bodegas.TimeModified = data.TimeModified;
$scope.bodegas.EditSequence = data.EditSequence;
$scope.bodegas.Name = data.Name;
$scope.bodegas.FullName = data.FullName;
$scope.bodegas.IsActive = data.IsActive;
$scope.bodegas.ParentRef_ListID = data.ParentRef_ListID;
$scope.bodegas.ParentRef_FullName = data.ParentRef_FullName;
$scope.bodegas.Sublevel = data.Sublevel;
$scope.bodegas.Status = data.Status;
$scope.bodegas.Estado = data.Estado;
