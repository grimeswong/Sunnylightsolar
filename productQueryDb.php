<?php

   class MyDB extends SQLite3
   {
      function __construct()
      {
            $this->open('solarProducts.db');
      }
   }

   function getPanels($searchTerm = null) {

      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }

      if(!$searchTerm) {
         //$sql ='SELECT * from PANELS;';
      } else {
         $sql ='SELECT * FROM PANELS WHERE SIZE LIKE "'.$searchTerm.'"';
         /*$sql ='SELECT * FROM PANELS WHERE PRODUCTNAME LIKE "'.$searchTerm.'" OR MANUFCATURER LIKE "'.$searchTerm.'" OR DESCRIPTION LIKE "'.$searchTerm.'" OR PRICE LIKE "'.$searchTerm.'"'; */
      }
      $ret = $db->query($sql);
      if(!$ret){
        // echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
      }
   }


   function getInverters($searchTerm = null) {
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }

        if(!$searchTerm) {
         //$sql ='SELECT * from INVERTERS;';
      } else {
         $sql ='SELECT * FROM INVERTERS WHERE SIZE LIKE "'.$searchTerm.'"';
         /*$sql ='SELECT * FROM EVENTS WHERE EVENTNAME LIKE "'.$searchTerm.'" OR DESCRIPTION LIKE "'.$searchTerm.'" OR LOCATION LIKE "'.$searchTerm.'" OR DATE LIKE "'.$searchTerm.'"';*/
      }
      $ret = $db->query($sql);
      if(!$ret){
        // echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
      }
   }

?>
