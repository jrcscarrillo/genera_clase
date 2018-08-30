$scope.paymentmethod = {"ListID": $scope.ListID,
"TimeCreated": $scope.TimeCreated,
"TimeModified": $scope.TimeModified,
"EditSequence": $scope.EditSequence,
"Name": $scope.Name,
"IsActive": $scope.IsActive,
"PaymentMethodType": $scope.PaymentMethodType,
"Status": $scope.Status,
data: {"ListID": $scope.paymentmethod.ListID,
"TimeCreated": $scope.paymentmethod.TimeCreated,
"TimeModified": $scope.paymentmethod.TimeModified,
"EditSequence": $scope.paymentmethod.EditSequence,
"Name": $scope.paymentmethod.Name,
"IsActive": $scope.paymentmethod.IsActive,
"PaymentMethodType": $scope.paymentmethod.PaymentMethodType,
"Status": $scope.paymentmethod.Status,
{$scope.paymentmethod.ListID = data.ListID;
$scope.paymentmethod.TimeCreated = data.TimeCreated;
$scope.paymentmethod.TimeModified = data.TimeModified;
$scope.paymentmethod.EditSequence = data.EditSequence;
$scope.paymentmethod.Name = data.Name;
$scope.paymentmethod.IsActive = data.IsActive;
$scope.paymentmethod.PaymentMethodType = data.PaymentMethodType;
$scope.paymentmethod.Status = data.Status;
