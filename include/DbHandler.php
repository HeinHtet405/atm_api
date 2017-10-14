<?php

class DbHandler {

    private $conn;

    function __construct() {
        require_once dirname(__FILE__) . './DbConnect.php';
        // opening db connection
        $db = new DbConnect;
        $this->conn = $db->connect();
    }

    public function getATMCount($bankName) {
        switch ($bankName) {
            case "kbz":
                $GetKbzList = "SELECT COUNT(*) FROM kbz";
                $count = $this->calculateCount($GetKbzList);
                return $count;
            case "aya":
                $GetAyaList = "SELECT COUNT(*) FROM aya";
                $count = $this->calculateCount($GetAyaList);
                return $count;
            case "cb":
                $GetCbList = "SELECT COUNT(*) FROM cb";
                $count = $this->calculateCount($GetCbList);
                return $count;
            case "uab":
                $GetUabList = "SELECT COUNT(*) FROM uab";
                $count = $this->calculateCount($GetUabList);
                return $count;
            case "mab":
                $GetMabList = "SELECT COUNT(*) FROM mab";
                $count = $this->calculateCount($GetMabList);
                return $count;
        }
    }

    public function calculateCount($Query) {
        $ExecutePagination = mysqli_query($this->conn, $Query);
        $RowPagination = mysqli_fetch_array($ExecutePagination);
        $TotalPosts = array_shift($RowPagination);
        return $TotalPosts;
    }

    public function getKbzList() {
        $link = $_SERVER['QUERY_STRING'];
        if (empty($link)) {
            $stmt = $this->conn->prepare("SELECT * FROM kbz LIMIT 0,5");
            $stmt->execute();
            $kbzAtmList = $stmt->get_result();
            $stmt->close();
            return $kbzAtmList;
        } else {
            $getPageNo = $_GET['page'];
            $page = (isset($getPageNo) && $getPageNo > 0) ? $getPageNo : 1;
            if ($page == 0 || $page < 1) {
                $ShowPostFrom = 0;
            } else {
                $ShowPostFrom = ($page * 5) - 5;
                $stmt = $this->conn->prepare("SELECT * FROM kbz LIMIT $ShowPostFrom,5");
                $stmt->execute();
                $kbzAtmList = $stmt->get_result();
                $stmt->close();
                return $kbzAtmList;
            }
        }
    }

    public function getAyaList() {
        $link = $_SERVER['QUERY_STRING'];
        if (empty($link)) {
            $stmt = $this->conn->prepare("SELECT * FROM aya LIMIT 0,5");
            $stmt->execute();
            $ayaAtmList = $stmt->get_result();
            $stmt->close();
            return $ayaAtmList;
        } else {
            $getPageNo = $_GET['page'];
            $page = (isset($getPageNo) && $getPageNo > 0) ? $getPageNo : 1;
            if ($page == 0 || $page < 1) {
                $ShowPostFrom = 0;
            } else {
                $ShowPostFrom = ($page * 5) - 5;
                $stmt = $this->conn->prepare("SELECT * FROM aya LIMIT $ShowPostFrom,5");
                $stmt->execute();
                $ayaAtmList = $stmt->get_result();
                $stmt->close();
                return $ayaAtmList;
            }
        }
    }

    public function getCbList() {
        $link = $_SERVER['QUERY_STRING'];
        if (empty($link)) {
            $stmt = $this->conn->prepare("SELECT * FROM cb LIMIT 0,5");
            $stmt->execute();
            $cbAtmList = $stmt->get_result();
            $stmt->close();
            return $cbAtmList;
        } else {
            $getPageNo = $_GET['page'];
            $page = (isset($getPageNo) && $getPageNo > 0) ? $getPageNo : 1;
            if ($page == 0 || $page < 1) {
                $ShowPostFrom = 0;
            } else {
                $ShowPostFrom = ($page * 5) - 5;
                $stmt = $this->conn->prepare("SELECT * FROM cb LIMIT $ShowPostFrom,5");
                $stmt->execute();
                $cbAtmList = $stmt->get_result();
                $stmt->close();
                return $cbAtmList;
            }
        }
    }

    public function getAgdList() {
        $link = $_SERVER['QUERY_STRING'];
        if (empty($link)) {
            $stmt = $this->conn->prepare("SELECT * FROM agd LIMIT 0,5");
            $stmt->execute();
            $agdAtmList = $stmt->get_result();
            $stmt->close();
            return $agdAtmList;
        } else {
            $getPageNo = $_GET['page'];
            $page = (isset($getPageNo) && $getPageNo > 0) ? $getPageNo : 1;
            if ($page == 0 || $page < 1) {
                $ShowPostFrom = 0;
            } else {
                $ShowPostFrom = ($page * 5) - 5;
                $stmt = $this->conn->prepare("SELECT * FROM agd LIMIT $ShowPostFrom,5");
                $stmt->execute();
                $agdAtmList = $stmt->get_result();
                $stmt->close();
                return $agdAtmList;
            }
        }
    }

    public function getUabList() {
        $link = $_SERVER['QUERY_STRING'];
        if (empty($link)) {
            $stmt = $this->conn->prepare("SELECT * FROM uab LIMIT 0,5");
            $stmt->execute();
            $uabAtmList = $stmt->get_result();
            $stmt->close();
            return $uabAtmList;
        } else {
            $getPageNo = $_GET['page'];
            $page = (isset($getPageNo) && $getPageNo > 0) ? $getPageNo : 1;
            if ($page == 0 || $page < 1) {
                $ShowPostFrom = 0;
            } else {
                $ShowPostFrom = ($page * 5) - 5;
                $stmt = $this->conn->prepare("SELECT * FROM uab LIMIT $ShowPostFrom,5");
                $stmt->execute();
                $uabAtmList = $stmt->get_result();
                $stmt->close();
                return $uabAtmList;
            }
        }
    }

    public function getMabList() {
        $link = $_SERVER['QUERY_STRING'];
        if (empty($link)) {
            $stmt = $this->conn->prepare("SELECT * FROM mab LIMIT 0,5");
            $stmt->execute();
            $mabAtmList = $stmt->get_result();
            $stmt->close();
            return $mabAtmList;
        } else {
            $getPageNo = $_GET['page'];
            $page = (isset($getPageNo) && $getPageNo > 0) ? $getPageNo : 1;
            if ($page == 0 || $page < 1) {
                $ShowPostFrom = 0;
            } else {
                $ShowPostFrom = ($page * 5) - 5;
                $stmt = $this->conn->prepare("SELECT * FROM mab LIMIT $ShowPostFrom,5");
                $stmt->execute();
                $mabAtmList = $stmt->get_result();
                $stmt->close();
                return $mabAtmList;
            }
        }
    }

}
