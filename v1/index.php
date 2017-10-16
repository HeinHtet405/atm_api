<?php

require_once '../include/DbHandler.php';
require '.././libs/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/kbzAtmList', function() {
    $response = array();
    $db = new DbHandler();

    $result = $db->getKbzList();
    $count = $db->getATMCount("kbz");

    $response["error"] = false;
    $response["total"] = $count;
    $response["kbz"] = array();

    while ($kbz = $result->fetch_assoc()) {
        $tmp = array();
        $tmp["id"] = $kbz["id"];
        $tmp["name"] = $kbz["name"];
        $tmp["address"] = $kbz["address"];
        $tmp["division"] = $kbz["division"];
        $tmp["lat"] = $kbz["lat"];
        $tmp["lon"] = $kbz["lon"];
        array_push($response["kbz"], $tmp);
    }
    echoResponse(200, $response);
});

$app->get('/ayaAtmList', function() {
    $response = array();
    $db = new DbHandler();

    $result = $db->getAyaList();
    $count = $db->getATMCount("aya");

    $response["error"] = false;
    $response["total"] = $count;
    $response["aya"] = array();

    while ($aya = $result->fetch_assoc()) {
        $tmp = array();
        $tmp["id"] = $aya["id"];
        $tmp["name"] = $aya["name"];
        $tmp["address"] = $aya["address"];
        $tmp["division"] = $aya["division"];
        $tmp["lat"] = $aya["lat"];
        $tmp["lon"] = $aya["lon"];
        array_push($response["aya"], $tmp);
    }
    echoResponse(200, $response);
});

$app->get('/cbAtmList', function() {
    $response = array();
    $db = new DbHandler();

    $result = $db->getCbList();
    $count = $db->getATMCount("cb");

    $response["error"] = false;
    $response["total"] = $count;
    $response["cb"] = array();

    while ($cb = $result->fetch_assoc()) {
        $tmp = array();
        $tmp["id"] = $cb["id"];
        $tmp["name"] = $cb["name"];
        $tmp["address"] = $cb["address"];
        $tmp["division"] = $cb["division"];
        $tmp["lat"] = $cb["lat"];
        $tmp["lon"] = $cb["lon"];
        array_push($response["cb"], $tmp);
    }
    echoResponse(200, $response);
});

$app->get('/agdAtmList', function() {
    $response = array();
    $db = new DbHandler();

    $result = $db->getAgdList();
    $count = $db->getATMCount("agd");

    $response["error"] = false;
    $response["total"] = $count;
    $response["agd"] = array();

    while ($agd = $result->fetch_assoc()) {
        $tmp = array();
        $tmp["id"] = $agd["id"];
        $tmp["name"] = $agd["name"];
        $tmp["address"] = $agd["address"];
        $tmp["division"] = $agd["division"];
        $tmp["lat"] = $agd["lat"];
        $tmp["lon"] = $agd["lon"];
        array_push($response["agd"], $tmp);
    }
    echoResponse(200, $response);
});

$app->get('/uabAtmList', function() {
    $response = array();
    $db = new DbHandler();

    $result = $db->getUabList();
    $count = $db->getATMCount("uab");

    $response["error"] = false;
    $response["total"] = $count;
    $response["uab"] = array();

    while ($uab = $result->fetch_assoc()) {
        $tmp = array();
        $tmp["id"] = $uab["id"];
        $tmp["name"] = $uab["name"];
        $tmp["address"] = $uab["address"];
        $tmp["division"] = $uab["division"];
        $tmp["lat"] = $uab["lat"];
        $tmp["lon"] = $uab["lon"];
        array_push($response["uab"], $tmp);
    }
    echoResponse(200, $response);
});

$app->get('/mabAtmList', function() {
    $response = array();
    $db = new DbHandler();

    $result = $db->getMabList();
    $count = $db->getATMCount("mab");

    $response["error"] = false;
    $response["total"] = $count;
    $response["mab"] = array();

    while ($mab = $result->fetch_assoc()) {
        $tmp = array();
        $tmp["id"] = $mab["id"];
        $tmp["name"] = $mab["name"];
        $tmp["address"] = $mab["address"];
        $tmp["division"] = $mab["division"];
        $tmp["lat"] = $mab["lat"];
        $tmp["lon"] = $mab["lon"];
        array_push($response["mab"], $tmp);
    }
    echoResponse(200, $response);
});

function echoResponse($status_code, $response) {
    $app = \Slim\Slim::getInstance();
    // Http response code
    $app->status($status_code);

    $app->contentType('application/json');

    echo json_encode($response);
}

$app->run();
