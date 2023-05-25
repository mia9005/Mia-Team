<?php
    require_once("./inc/Page.class.php");
    require_once("./inc/entities/Test.class.php");
    require_once("./inc/FileManager.class.php");

    $result = readCustonFile("./data/test_gallery.csv");
    $list = toArray($result);
    var_dump($list);

    echo Page::pageHead();
    echo Page::pageHeader();
    echo Page::PageStoreGallery($list);
    // echo Page::PageProduct();
    echo Page::pageFooter();
    echo Page::pageEnd();
