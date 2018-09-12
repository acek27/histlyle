<?php
require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    }
     
    if (isset($_GET['act']) && isset($_GET['ref'])) {
        $act = $_GET['act'];
        $ref = $_GET['ref'];
             
        if ($act == "add") {
            if (isset($_GET['idProduk'])) {
                $idProduk = $_GET['idProduk'];
                if (isset($_SESSION['items'][$idProduk])) {
                    $_SESSION['items'][$idProduk] += 1;
                } else {
                    $_SESSION['items'][$idProduk] = 1; 
                }
            }
        } elseif ($act == "plus") {
            if (isset($_GET['idProduk'])) {
                $idProduk = $_GET['idProduk'];
                if (isset($_SESSION['items'][$idProduk])) {
                    $_SESSION['items'][$idProduk] += 1;
                }
            }
        } elseif ($act == "min") {
            if (isset($_GET['idProduk'])) {
                $idProduk = $_GET['idProduk'];
                if (isset($_SESSION['items'][$idProduk])) {
                    $_SESSION['items'][$idProduk] -= 1;
                }
            }
        } elseif ($act == "del") {
            if (isset($_GET['barang_id'])) {
                $idProduk = $_GET['idProduk'];
                if (isset($_SESSION['items'][$idProduk])) {
                    unset($_SESSION['items'][$idProduk]);
                }
            }
        } elseif ($act == "clear") {
            if (isset($_SESSION['items'])) {
                foreach ($_SESSION['items'] as $key => $val) {
                    unset($_SESSION['items'][$key]);
                }
                unset($_SESSION['items']);
            }
        } 
         
        header ("location:" . $ref);
    }
?>