<?php
    $conn = new PDO("mysql:host=localhost;dbname=dijkstra_test", 'root');

    $query = "SELECT * FROM `aeroporti`";
    $airports = $conn->query($query);
    $arrayAirports = array();
    foreach($airports as $a) {
        $element = array(
            'codice' => $a['codice'], 
            'nome' => $a['nome']
        );
        
        $arrayAirports[$a['codice']] = $element;
    }

    $query2 = "SELECT * FROM `voli`";
    $flights = $conn->query($query2);
    $arrayFlights = array();
    foreach($flights as $f) {
        $element = array(
            'codice' => $f['codice'], 
            'departure' => $f['id_departure'], 
            'arrival' => $f['id_arrival'], 
            'costo' => $f['costo']
        );
        
        $arrayFlights[$f['codice']] = $element;
    }   

?>