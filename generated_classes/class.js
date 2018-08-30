$scope.class = {"ListID": $scope.ListID,
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
data: {"ListID": $scope.class.ListID,
"TimeCreated": $scope.class.TimeCreated,
"TimeModified": $scope.class.TimeModified,
"EditSequence": $scope.class.EditSequence,
"Name": $scope.class.Name,
"FullName": $scope.class.FullName,
"IsActive": $scope.class.IsActive,
"ParentRef_ListID": $scope.class.ParentRef_ListID,
"ParentRef_FullName": $scope.class.ParentRef_FullName,
"Sublevel": $scope.class.Sublevel,
"Status": $scope.class.Status,
{$scope.class.ListID = data.ListID;
$scope.class.TimeCreated = data.TimeCreated;
$scope.class.TimeModified = data.TimeModified;
$scope.class.EditSequence = data.EditSequence;
$scope.class.Name = data.Name;
$scope.class.FullName = data.FullName;
$scope.class.IsActive = data.IsActive;
$scope.class.ParentRef_ListID = data.ParentRef_ListID;
$scope.class.ParentRef_FullName = data.ParentRef_FullName;
$scope.class.Sublevel = data.Sublevel;
$scope.class.Status = data.Status;
