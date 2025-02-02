
    var app = angular.module("myApp", []);
    app.controller("myCtrl", function($scope) {
    $scope.records = [
        {
            "id": 1,
            "value": "Secretaría",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 2,
            "value": "Catastro",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 3,
            "value": "Reglamentos",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 4,
            "value": "Movilidad y Vía Pública",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 5,
            "value": "Economico/Agropecuario",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 6,
            "value": "Desarrollo Urbano",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 7,
            "value": "Medio Ambiente",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 8,
            "value": "Oficialia Mayor",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 9,
            "value": "Tianguis",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 10,
            "value": "Mercados",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 11,
            "value": "Registro Civil",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 12,
            "value": "Gobernación",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 13,
            "value": "Educación",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }, {
            "id": 14,
            "value": "Salud",
            "site":"services/sec.html",
            "description":"Breve descripcion del servicio mencionado"
        }]
    });

    app.controller('customersCtrl', function($scope, $http, $timeout) {
        $http.get("connections/noticesIndex.php")
        .then(function (response) {
            $scope.notices = response.data.records;
            console.log("Hola",$scope.notices)
            // $scope.notices = [];
            // function showNext(array, index){
            //   $timeout(function(x){
            //     $scope.notices.push(x);
            //     if(++index < array.length)
            //       showNext(array, index);
            //   }, 500, true, array[index])
            // }
            // showNext($scope.names, 0);
            }
        );
    });

    app.controller('noticesCtrl', function( $http) {
        $http.post("../connections/getNotices.php", { nombre: "name"});
    });

    
