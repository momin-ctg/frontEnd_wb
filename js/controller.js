var pmsFile = {
    "records": [

        {
            "code": "Process Yellow",
            "hcolor":"#f7e214"
        },
        {
            "code": "100",
            "hcolor":"#f4ed7c"
        },
        {
            "code": "101"
        },
        {
            "code": "102"
        },
        {
            "code": "Pantone Yellow"
        },
        {
            "code": "103"
        }

    ]
};

var app = angular.module('colorApp', []);
app.controller ('pmsColor', function ($scope) {
    $scope.colors = pmsFile.records;
});