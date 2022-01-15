<?php
function loadModel($name)
{
    // $name = ucfirst(strtolower($name));
    $pathModel = 'Models/' . $name . '.php';
    if (file_exists($pathModel)) {
        include_once($pathModel);
        $modelclass = new $name;
        return $modelclass;
    } else return null;
}

//load module / teamplate
function loadModule($name)
{
    $pathModule = 'Views/modules/' . $name . '.php';
    if (file_exists($pathModule)) {
        include($pathModule);
    }
}

function loadTemplate($name)
{
    $pathTemplate = 'Views/template/' . $name . '.php';
    if (file_exists($pathTemplate)) {
        include($pathTemplate);
    } else {
        echo 'Template ' . $name . ' not exits';
    }
}

function loadComponent()
{
    $pathcom = 'Views/components/';
    
    if (isset($_REQUEST['option'])) {
        $pathcom = $pathcom . $_REQUEST['option'] . '/';
        if (isset($_REQUEST['chapter'])) {
            $pathcom = $pathcom . 'readbook.php';
        } else if (isset($_REQUEST['sub_option'])) {
            $pathcom = $pathcom . $_REQUEST['sub_option'] . '.php';
        } else {
            $pathcom = $pathcom . 'index.php';
        }
    } else {
        $pathcom = $pathcom . 'home/index.php';
    }
    
    if (file_exists($pathcom)) {
        include_once($pathcom);
    } else {
        echo $pathcom . ' not exits';
    }
}
//load class
function loadClass($name)
{
    $name = ucfirst(strtolower($name));
    $pathClass = 'core/' . $name . '.php';
    if (file_exists($pathClass)) {
        include_once($pathClass);
        $nameclass = new $name;
        return $nameclass;
    } else return null;
}
function loadMenu()
{
    $pathMenu = 'Views/modules/';


    if (isset($_SESSION['user'])) {
        if (isset($_REQUEST['option'])) {
            if ($_REQUEST['option'] == "login") {
                $pathMenu = $pathMenu . 'menu_home.php';
            } else {
                $pathMenu = $pathMenu . 'menu_login.php';
            }
        } else
        $pathMenu = $pathMenu . 'menu_login.php';
    } else
        $pathMenu = $pathMenu . 'menu_home.php';
    if (file_exists($pathMenu)) {
        include($pathMenu);
    } else {
        echo 'Not exist';
    }
}
function loadHrefBook($idSach)
{
    $href = 'index.php?option=book&';
    
        $href = $href . 'idSach=' . $idSach;
    echo $href;
}
function loadHrefCategory($idDanhmuc)
{
    $href = 'index.php?';
        $href = $href . 'category=' . $idDanhmuc;
    echo $href;
}
function loadHrefReadBook()
{
    $book = loadModel('Book');
    $ten = $book->FirstChapter($_REQUEST['idSach']);
    if (isset($_SESSION['user']))
    echo 'index.php?option=book&idSach=' . $_REQUEST['idSach'] . '&chapter=' . $ten . '&page=1&kitu=0';
    else
        echo '';
}
function LoadTirtle()
{
    if (isset($_REQUEST['bookname']))
        return $_REQUEST['bookname'];
    return 'Three Owls Books';
}
function loadUserBoard() {
    
}


// load modules admin
function loadModuleAdmin($name)
{
    $pathModule = 'Views/admin/bar' . $name . '.php';
    if (file_exists($pathModule)) {
        include($pathModule);
    }
}