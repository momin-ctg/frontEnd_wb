var pmsFile = {
    "records": [

        {
            "code": "Process Yellow",
            "hcolor": "#f7e214"
        },
        {
            "code": "100",
            "hcolor": "#f4ed7c"
        },
        {
            "code": "101",
            "hcolor": "#f4ed47"
        },
        {
            "code": "Pantone Yelloow",
            "hcolor": "#f9e814"
        },
        {
            "code": "103",
            "hcolor": "#c6ad0f"
        },
        {
            "code": "104",
            "hcolor": "#ad9b0c"
        },
        {
            "code": "105",
            "hcolor": "#82750f"
        },
        {
            "code": "106",
            "hcolor": "#f7e859"
        },
        {
            "code": "107",
            "hcolor": "#f9e526"
        },
        {
            "code": "108",
            "hcolor": "#f7dd16"
        },
        {
            "code": "109",
            "hcolor": "#f9d616"
        },
        {
            "code": "110",
            "hcolor": "#d8b511"
        },
        {
            "code": "111",
            "hcolor": "#d8b511"
        },
        {
            "code": "112",
            "hcolor": "#99840a"
        }, {
            "code": "113",
            "hcolor": "#f9e55b"
        }, {
            "code": "114",
            "hcolor": "#f9e24c"
        },
        {
            "code": "115",
            "hcolor": "#f9e04c"
        }, {
            "code": "116",
            "hcolor": "#fcd116"
        }, {
            "code": "117",
            "hcolor": "#c6a00c"
        },
        {
            "code": "118",
            "hcolor": "#aa8e0a"
        }, {
            "code": "119",
            "hcolor": "#aa8e0a"
        },
        {
            "code": "120",
            "hcolor": "#f9e27f"
        },
        {
            "code": "121",
            "hcolor": "#f9e070"
        },
        {
            "code": "122",
            "hcolor": "#fcd856"
        },
        {
            "code": "123",
            "hcolor": "#ffc61e"
        },
        {
            "code": "124",
            "hcolor": "#e0aa0f"
        },
        {
            "code": "125",
            "hcolor": "#b58c0a"
        },
        {
            "code": "1205",
            "hcolor": "#f7e8aa"
        },
        {
            "code": "1215",
            "hcolor": "#f9e08c"
        },{
            "code": "1225",
            "hcolor": "#ffcc49"
        },
        {
            "code": "1235",
            "hcolor": "#fcb514"
        },
        {
            "code": "1245",
            "hcolor": "#bf910c"
        },
        {
            "code": "1255",
            "hcolor": "#a37f14"
        },
        {
            "code": "1265",
            "hcolor": "#7c6316"
        },
        {
            "code": "127",
            "hcolor": "#f4e287"
        },
        {
            "code": "128",
            "hcolor": "#f4db60"
        },
        {
            "code": "129",
            "hcolor": "#f2d13d"
        },
        {
            "code": "130",
            "hcolor": "#eaaf0f"
        },
        {
            "code": "131",
            "hcolor": "#c6930a"
        },
        {
            "code": "132",
            "hcolor": "#9e7c0a"
        },
        {
            "code": "133",
            "hcolor": "#705b0a"
        }


    ]
};

var app = angular.module('colorApp', []);
app.controller('pmsColor', function ($scope) {
    $scope.colors = pmsFile.records;
});