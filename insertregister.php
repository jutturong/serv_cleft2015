<?php
    require("configDB.php");
     /*
      * INSERT INTO `cleft`.`cleft_register` 
      * (`id_register`, `title`, `lastname`, `firstname`, `email`, `phone`, `fax`, `organization`, `address`, `notaddress`, `city`, `zipcode`, `country`, `payment`) 
      * VALUES (NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
      */
    
    $title=stripslashes($_REQUEST["title"]);
    $lastname=stripslashes($_REQUEST["lastname"]);
    $firstname=stripslashes($_REQUEST["firstname"]);
    $email=stripslashes($_REQUEST["email"]);
    $phone=stripslashes($_REQUEST["phone"]);
    $fax=stripslashes($_REQUEST["fax"]);
    $organization=stripslashes($_REQUEST["organization"]);
    $address=stripslashes($_REQUEST["address"]);
    $notaddress=stripslashes($_REQUEST["notaddress"]);
    $city=stripslashes($_REQUEST["city"]);
    $zipcode=stripslashes($_REQUEST["zipcode"]);
    $country=stripslashes($_REQUEST["country"]);
    $payment=stripslashes($_REQUEST["payment"]); //Possible payment method are  1=Credit cards,2=Bank Tranfers
    $course=stripslashes($_REQUEST["course1"]);
    $id_course2=stripslashes($_REQUEST["id_course2"]);
    //total_fee
    
    
    #ประเภทของการลงทะเบียน-------
            $id_course=$_REQUEST["id_course"]; //ประเภทของผู้ลงทะเบียน   กำหนดชื่อฟิว class_register
            $id_course2=$_REQUEST["id_course2"];  //ประเภทของผู้ลงทะเบียน
            
            
/*
 1; //Physician/Dentist
 2; //Multidisciplinary ( Non physician / Non dentist )
 3; //Trainee
 4; //keyonote speaker | Invited speaker วิทยากร
 0 ไม่ชัดเจน
 */
            
            if( strlen($id_course) > 0  &&  strlen($id_course2) == 0  )
            {
                   $class_register=$id_course;
            }
            elseif(  strlen($id_course) == 0  &&  strlen($id_course2) > 0   )
            {
                  $class_register=$id_course2;
            }
            elseif( strlen($id_course) > 0  &&   strlen($id_course2) > 0  )
            {
                  $class_register=0;        
            }
            elseif(  strlen($id_course2) == 0  &&  strlen($id_course2) == 0   )
            {
                   $class_register=0;
            } 
            
   
            
            /*
            switch ( $id_course )
            {
                case 11:
                      $class_register=1; //Physician/Dentist
                    break;
                case 12:
                     $class_register=2; //Multidisciplinary ( Non physician / Non dentist )
                    break;
                 case 13:
                     $class_register=3; //Trainee
                    break;
                 default :
                     $class_register=4; //keyonote speaker | Invited speaker วิทยากร
                 
            }
             * 
             */
            
            /*
             
            switch ( $id_course2 )
            {
                case 21:
                      $class_register=1; //Physician/Dentist
                    break;
                case 22:
                     $class_register=2; //Multidisciplinary ( Non physician / Non dentist )
                    break;
                 case 23:
                     $class_register=3; //Trainee
                    break;
                
                case 31:
                      $class_register=1; //Physician/Dentist
                    break;
                case 32:
                     $class_register=2; //Multidisciplinary ( Non physician / Non dentist )
                    break;
                 case 33:
                     $class_register=3; //Trainee
                    break;
                
                case 41:
                      $class_register=1; //Physician/Dentist
                    break;
                case 42:
                     $class_register=2; //Multidisciplinary ( Non physician / Non dentist )
                    break;
                 case 43:
                     $class_register=3; //Trainee
                    break;

                 default :
                     $class_register=4; //keyonote speaker | Invited speaker วิทยากร
                 
            }
             * 
             */
   
   
    
     $status_register=  stripslashes($_REQUEST["status_register"]); 
     
     $total_fee=stripslashes($_REQUEST["total_fee"]); //105 USD / 3500 Baht
   
    /*
    if(  $total_fee != ''  )
    {
        $ex=explode(" ".$total_fee);
        $fee=$ex[0];
    }
   */
   
     if(  !empty($total_fee)  )
    {
           $a = explode(" ",$total_fee);
           $fee  = $a[0];
    }
    
    
    
    
    
    $tb= " `cleft_register` ";
    $strchk="SELECT  firstname,lastname  FROM  $tb WHERE  firstname='$firstname'  AND  lastname='$lastname'   ; ";  
    $chquery=mysql_query($strchk)  or  die(mysql_error());
    $chkrows = mysql_num_rows($chquery);
    if(   $chkrows == 0  )
    {
        
        
    $strq="INSERT INTO $tb
       (`id_register`, `title`, `lastname`, `firstname`, `email`, `phone`, `fax`, `organization`, `address`, `notaddress`, `city`, `zipcode`, `country`, `payment` ,  `course` ,  `status_register`,`class_register` ) 
        VALUES (NULL, '$title', '$lastname', '$firstname', '$email', '$phone', '$fax','$organization', '$address' , '$notaddress' , '$city' , '$zipcode' , '$country' , '$payment' , '$fee' , '$status_register','$class_register' );";  
        $check =mysql_query($strq) or  die(" Can't QUERY !! ");
         mysql_close();
         
         
         
               
$To="kanvol@kku.ac.th,nirpat@kku.ac.th,p-suteera@hotmail.com,tumdiv2@hotmail.com,palmy8514@gmail.com,kae_kanittha@hotmail.co.th,supitcha_u@hotmail.com,golf_surgery@hotmail.com,nonglukprom@gmail.com,jutturongcharoenrit@gmail.com,basic.soft@hotmail.com,thaicleft2015@gmail.com";
#$To="jutturongcharoenrit@gmail.com,basic.soft@hotmail.com"; #test  for  email   
$Subject="Update! I-SAN register and information system for cleft problems $title$name $lastname";
$Massage=" 
---------------------------------- REGISTRATION    thaicleft2015.org   ------------------------------------ 
    register  thaicleft2015.org  success .......
    Registration   by  $firstname  $lastname   email $email  tel $phone
    Print Report  to  link  http://www.thaicleft2015.org/report_pdf/report_cleft.php?lastname=$lastname&firstname=$firstname&id_course1=$id_course&id_course2=$id_course2&total_fee=$total_fee    
     
---------------------------------------------------------------------------------------   
";
$From="thaicleft2015@gmail.com";
$check=mail($To,$Subject,$Massage,$From); 



# send report
//http://127.0.0.1/report_pdf/report_cleft.php?lastname=Pradubwong&firstname=Suteera&id_course1=1&id_course2=2&total_fee=90%20USD%20/%203000%20Baht
#http://www.thaicleft2015.org/report_pdf/report_cleft.php?lastname=Pradubwong&firstname=Suteera&id_course1=1&id_course2=2&total_fee=90%20USD%20/%203000%20Baht
#Print Report  to  link  http://www.thaicleft2015.org/report_pdf/report_cleft.php?lastname=$lastname&firstname=$firstname&id_course1=$id_course&id_course2=$id_course2&total_fee=$total_fee 
    }

?>

