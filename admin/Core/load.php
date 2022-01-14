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
        if (isset($_REQUEST['sub_option'])) {
            $pathcom = $pathcom . $_REQUEST['sub_option'].'.php';
        
        } else if (isset($_REQUEST['child_option'])) {
            $pathcom = $pathcom . $_REQUEST['child_option'].'.php';
        
        }else{
            $pathcom = $pathcom . 'index.php';
        }
    } else {
        $pathcom = $pathcom . 'admin/index.php';
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
    if (isset($_REQUEST['condition']))     
        $pathMenu = $pathMenu . 'menu_login.php';
    else
        $pathMenu = $pathMenu . 'menu_home.php';
    if (file_exists($pathMenu)) {
        include($pathMenu);
    } else {
        echo 'Null';
    }
}
function loadHrefBook($idSach)
{
    $href = 'index.php?option=book&';
    if (isset($_REQUEST['condition']))
        $href = $href . 'condition=' . $_REQUEST['condition'] . '&idSach=' . $idSach;
    else
        $href = $href . 'idSach=' . $idSach;
    echo $href;
}
function loadHrefCategory($idDanhmuc)
{
    $href = 'index.php?';
    if (isset($_REQUEST['condition']))
        $href = $href . 'condition=' . $_REQUEST['condition'] . '&category=' . $idDanhmuc;
    else
        $href = $href . 'category=' . $idDanhmuc;
    echo $href;
}
function loadHrefReadBook()
{
    if (isset($_REQUEST['condition']))
        echo 'index.php?condition=' . $_REQUEST['condition'] . '&option=book&idSach=' . $_REQUEST['idSach'] . '&chapter=1&page=1';
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