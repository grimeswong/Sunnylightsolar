<?php

   class MyDB extends SQLite3
   {
      function __construct()
      {
            $this->open('solarProducts.db');
      }
   }

   function getCustomers($searchTerm = null) {

      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }
      if(!$searchTerm) {
         $sql ='SELECT * from CUSTOMERS;';
      } else {
         $sql ='SELECT * FROM CUSTOMERS WHERE FIRSTNAME LIKE "'.$searchTerm.'" OR LASTNAME LIKE "'.$searchTerm.'" OR ADDRESS LIKE "'.$searchTerm.'" OR PHONE  LIKE "'.$searchTerm.'"';
      }
      $ret = $db->query($sql);
      if(!$ret){
        echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
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
        echo $db->lastErrorMsg();
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
        echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
      }
   }



  //  function addCustomer($fname, $lname, $address, $phone) {
   //
  //     $db = new MyDB();
  //     if(!$db){
  //        echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
  //     } else {
  //        //echo "Opened database successfully\n";
  //     }
   //
  //     $sql ='INSERT INTO CUSTOMERS (FIRSTNAME, LASTNAME, ADDRESS, PHONE) VALUES ("'.$fname.'", "'.$lname.'", "'.$address.'", "'.$phone.'");';
  //     $db->query($sql);
  //  }
   //
   //
  //  function addProduct($pname, $man, $desc, $price) {
   //
  //     $db = new MyDB();
  //     if(!$db){
  //        echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
  //     } else {
  //        //echo "Opened database successfully\n";
  //     }
   //
  //     $sql ='INSERT INTO PRODUCTS (PRODUCTNAME, MANUFACTURER, DESCRIPTION, PRICE) VALUES ("'.$pname.'", "'.$man.'", "'.$desc.'", "'.$price.'");';
  //     $db->query($sql);
  //  }
   //
   //
  //  function addEvent($ename, $loc, $desc, $date) {
   //
  //     $db = new MyDB();
  //     if(!$db){
  //        echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
  //     } else {
  //        //echo "Opened database successfully\n";
  //     }
   //
  //     $sql ='INSERT INTO EVENTS (EVENTNAME, LOCATION, DESCRIPTION, DATE) VALUES ("'.$ename.'", "'.$loc.'", "'.$desc.'", "'.$date.'");';
  //     $db->query($sql);
  //  }


?>
