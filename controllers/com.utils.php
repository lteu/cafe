<?php
function getRealIpAddr() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// function linkMaker($id) {
//     if (is_numeric($id)) {
//         $mk2 = getOneRowFromDB("select name,link from meta_bookmaker where id = '$id'");
//         $rlt = $mk2[0];
//     }else{
//          $mk2 = getOneRowFromDB("select name,link from meta_bookmaker where name = '$id'");
//          $rlt = $mk2[0];
//     }
    
//     if ($mk2[1] !== null && $mk2[1] != "") {
//         $rlt = "<a href='{$mk2[1]}' target='_blank'>{$mk2[0]}</a>";
//     }
     
//     return $rlt;
// }

// function isIn($table, $id) {
//     $in = false;
//     $query = " SELECT * FROM $table WHERE id = '$id' ";
//     $result = mysql_query($query);

//     if (!$result) {
//         die("errore SQL in controllo presenza query:$query ");
//     } else {
//         $row = mysql_fetch_row($result);
//         if ($row[0] == null) { //articolo non presente
//             $in = false;
//         } else {
//             $in = true;
//         }
//     }
//     return $in;
// }

// function isAdmin($nm, $pwd) {
//     $in = false;
//     $query = " SELECT * FROM users WHERE name = '$nm' and pwd='$pwd' ";
//     $result = mysql_query($query);

//     if (!$result) {
//         die("errore SQL in controllo presenza query:$query ");
//     } else {
//         $row = mysql_fetch_row($result);
//         if ($row == null) { //articolo non presente
//             $in = false;
//         } else {
//             $in = true;
//         }
//     }
//     return $in;
// }

// function isInByFieldValue($table, $field,$id) {
//     $in = false;
//     $query = " SELECT * FROM $table WHERE $field = '$id' ";
//     $result = mysql_query($query);

//     if (!$result) {
//         die("errore SQL in controllo presenza query:$query ");
//     } else {
//         $row = mysql_fetch_row($result);
//         if ($row[0] == null) { //articolo non presente
//             $in = false;
//         } else {
//             $in = true;
//         }
//     }
//     return $in;
// }

// function isInByMatchidOddtypeMaker($mid, $type, $maker,$val3) {
//     $in = false;
//     if($type == 1 || $type == 2 || $type == 5 || $type ==6)//
//     $query = " SELECT * FROM odds WHERE idMatch=$mid AND idBookmaker =$maker AND idType=$type";
//     else{
//         $query = " SELECT * FROM odds WHERE idMatch=$mid AND idBookmaker =$maker AND idType=$type AND valuex='$val3' ";
//     }$result = mysql_query($query);

//     if (!$result) {
//         die("errore SQL in controllo presenza query:$query ");
//     } else {
//         $row = mysql_fetch_row($result);
//         if ($row[0] == null) { //articolo non presente
//             // echo "no present \n";
//             $in = false;
//         } else {
//             //   echo "present \n";
//             $in = array(
//                 "id"=>$row[0],
//                 "tp"=>$row[1],
//                 "mk"=>$row[2],
//                 "v1"=>$row[3],
//                 "v2"=>$row[4],
//                 "v3"=>$row[5],
//                 "mt"=>$row[6],
//                 "tm"=>$row[7]  
//             );
//         }
//     }
//     return $in;
// }


// function getOneItemFromDB($query) {
//     $rltct = mysql_query($query);
//     if ($rltct) {
//         $cts = mysql_fetch_row($rltct);
//         $ct = $cts[0];
//         return $ct;
//     } else {
//         echo "\n getOneItem: query errore $query \n";
//         return null;
//     }
// }

// function getOneRowFromDB($query) {
//     $rltct = mysql_query($query);
//     if ($rltct) {
//         $cts = mysql_fetch_row($rltct);
//         return $cts;
//     } else {
//         echo "\n getOneItem: query errore $query \n";
//         return null;
//     }
// }

// /**
//  * Calculate the payout of the odds from a bookmaker
//  * @param type $a
//  * @param type $b
//  * @param type $c
//  * @return type
//  */
// function payout($a, $b, $c) {

//     $a = (float)$a;
//     $b = (float)$b;
   
//     $rlt = ($c !== null) ? round(1 / (1 / $a + 1 / $b + 1 / $c), 2) * 100 : round(1 / (1 / $a + 1 / $b), 2) * 100;

//     return $rlt;
// }

// /**
//  *    UTILITIES !!!!!
//  */

// /**
//  * YYYYmmdd -> dd.mm.YYYY
//  * @param type $data
//  * @return type
//  */
// function preciseUTCdate2LocaltimeObj($data) {
//     global $timezone_offset;
     
//     $y = substr($data, 0, 4);
//     $m = substr($data, 4, 2);
//     $d = substr($data, 6, 2);
    
//     $h = substr($data, 8, 2);
//     $i = substr($data, 10, 2);
    
    
    
//     $return = mktime(($h + $timezone_offset), $i, 0, $m, $d, $y);

//     return $return;
// }

// /**
//  * YYYYmmdd -> dd.mm.YYYY
//  * @param type $data
//  * @return type
//  */
// function date2formatted($data) {
//     $y = substr($data, 0, 4);
//     $m = substr($data, 4, 2);
//     $d = substr($data, 6, 2);

//     return "$d.$m.$y";
// }

// /**
//  * YYYYmmdd -> array(YYYY,mm,dd)
//  * @param type $data
//  * @return type
//  */
// function date2array($data) {
//     $y = substr($data, 0, 4);
//     $m = substr($data, 4, 2);
//     $d = substr($data, 6, 2);

//     $array = array($y, $m, $d);
//     return $array;
// }

// /**
//  * YYYYmmdd -> time object
//  * @param type $data
//  * @return type
//  */
// function date2time($data) {
//     $fdl = date2array($data);
//     $xdt = strtotime("$fdl[2]-$fdl[1]-$fdl[0]");
//     return $xdt;
// }

// /**
//  * 
//  * @param type $data dd.mm.YYYY
//  * @return type
//  */
// function fdate2array($fdata) {
//     $set = split('\.', $fdata);
//     $array = array($set[2], $set[1], $set[0]);
//     return $array;
// }

// /**
//  * For download the xml datas
//  * @param type $url
//  * @return null
//  */
// function download($url) {

//     $ch = curl_init();    // initialize curl handle
//     curl_setopt($ch, CURLOPT_URL, $url); // set url to post to
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // return into a variable
//     curl_setopt($ch, CURLOPT_TIMEOUT, 40); // times out after 30s
//     $prexml = @curl_exec($ch);
//     if ($prexml) {
//         return $prexml;
//     }
//     return null;
// }

// /**
//  * CONVERT TO LOCAL TIME -> PREPARED ARRAY
//  * @param type $data YYYYmmdd format
//  * @param type $ora HH:ii format
//  */
// function convertTime($ora, $data) {

//     $timeobject = convertByTimezone($ora, $data);
//     $hi = date("H:i", $timeobject);
//     $ymd = date("Ymd", $timeobject);

//     $array = array($hi, $ymd);
//     return $array;
// }

// /**
//  * CONVERT TO LOCAL TIME -> OBJ
//  * @param type $data YYYYmmdd format
//  * @param type $ora HH:ii format
//  */
// function convertByTimezone($ora, $data) {
//     global $timezone_offset;

//     $y = substr($data, 0, 4);
//     $m = substr($data, 4, 2);
//     $d = substr($data, 6, 2);

//     $set = split(':', $ora);

//     $h = $set[0];
//     $i = $set[1];

//     $return = mktime(($h + $timezone_offset), $i, 0, $m, $d, $y);

//     return $return;
// }
// /**
//  * UTO TO LOCAL TIME -> TIME OBJECT
//  * @return type TIME OBJECT
//  */
// function getTodayObj() {
//     $conObj = convertByTimezone(date("H:i", time()), date("Ymd", time()));
//     return $conObj;
// }

// function getTodayStr() {
//     return date("d M Y",getTodayObj());
// }

// /**
//  * GET UTC INTERVAL FOR LOCAL TIME->PREPARED ARRAY
//  * @global type $timezone_offset
//  * @return type
//  */
// function local2utc() {
//     global $timezone_offset;
    
//     $offset = (date("H",time()) + $timezone_offset)%24;
   
    
//     $from = mktime(date("H",time())-$offset, date("i",time()), 0, date("m",time()), date("d",time()), date("Y",time()));
//     $to = mktime(date("H",time())-$offset, date("i",time()), 0, date("m",time()), date("d",time())+1, date("Y",time()));
    
//     $fromday = date("Ymd",$from);
//     $today = date("Ymd",$to);
//     $fromhour = date("H",$from);
//     $tohour = date("H",$to);
    
//     return array($fromday, $fromhour ,$today ,$tohour);
// }

// /**
//  * GET THE NEXT 7 UTC DAYS FOR A LOCAL TIME
//  * @param type $date YYYYmmdd
//  * @param type $hour HH
//  */
// function local2utc7days() {
//     global $timezone_offset;
    
//     $offset = (date("H",time()) + $timezone_offset)%24;
   
    
//     $from = mktime(date("H",time())-$offset, date("i",time()), 0, date("m",time()), date("d",time()), date("Y",time()));
//     $to = mktime(date("H",time())-$offset, date("i",time()), 0, date("m",time()), date("d",time())+8, date("Y",time()));
    
//     $fromday = date("Ymd",$from);
//     $today = date("Ymd",$to);
//     $fromhour = date("H",$from);
//     $tohour = date("H",$to);
    
//     return array($fromday, $fromhour ,$today ,$tohour);
// }
// /**
//  * GET UTC INTERVAL FOR A LOCAL DATE
//  * @global type $timezone_offset
//  * @param type $date
//  * @return type
//  */
// function date2utc($date) {
//     global $timezone_offset;
    
//     $y = substr($date, 0, 4);
//     $m = substr($date, 4, 2);
//     $d = substr($date, 6, 2);
    
//     $from = mktime(0-$timezone_offset,0,0,$m,$d,$y);
//     $to = mktime(0-$timezone_offset,0,0,$m,$d+1,$y);
    
//     $fromday = date("Ymd",$from);
//     $today = date("Ymd",$to);
//     $fromhour = date("H",$from);
//     $tohour = date("H",$to);
    
//     return array($fromday, $fromhour ,$today ,$tohour);
// }


?>
