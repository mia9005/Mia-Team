<?php
    require_once("./inc/Page.class.php");
    require_once("./inc/entities/Test.class.php");
    require_once("./inc/entities/GameRepositoryclass.php");
    require_once("./inc/FileManager.class.php");

    $result = readCustonFile("./data/test_gallery.csv");
    $list = toArray($result);
    $games = new GameRepository();
    $games->setGameList($list);
    // var_dump($list);

    echo Page::pageHead();
    echo Page::pageHeader();
    if( !empty($_GET) ){
        if(!empty($_GET['sortBy'])){
            $games->sortGame($_GET['sortBy']);
            echo Page::PageStoreCatalog($games->getGameList());
        }
    }else{
        echo Page::PageStoreCatalog($games->getGameList());
    }
    // echo Page::PageProduct($list['Cardguard']);
    echo Page::pageFooter();
    echo Page::pageEnd();
