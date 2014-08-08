<?php

   //require 'ip.php';

?>


<html>
   <head>
      <title>Faceit</title>
      <style>
         *{
            margin:0px;
            padding:0px;
            font:normal 14px arial;
         }
         h1{
            padding:10px;
            padding-left:50px;
            font:normal 36px arial;
            background:#003399;
            color:white;
         }
         a{
            text-decoration:none;
         }
         a:hover{
            text-decoration:underline;
         }
         .home{
            font:normal 26px arial;
            position:absolute;
            left:30px;
            top:80px;
            box-shadow:0px 0px 1px grey;
            background:#2daebf;
            color:white;
            padding:5px;
            -webkit-transition:background 1s,color 1s;
            -moz-transition:background 1s,color 1s;
            -box-transition:background 1s,color 1s;
         }
         .home:hover{
            background:rgba(255, 255,255,0.7);;
            color:grey;
         }
         a:link {text-decoration:none;color:#007d9a;}      /* unvisited link */
         a:visited {text-decoration:none;color:#007d9a;}  /* visited link */
         a:hover {text-decoration:none;color:#007d9a;}  /* mouse over link */
         a:active {text-decoration:none;color:#007d9a;}  /* selected link */

         .note {
   position:relative;
   width:30%;
   padding:1em 1.5em;
   margin:2em auto;
   color:#fff;
   background:#97C02F;
   overflow:hidden;
}

.note:before {
   content:"";
   position:absolute;
   top:0;
   right:0;
   border-width:0 16px 16px 0;
   border-style:solid;
   border-color:#fff #fff #658E15 #658E15;
   background:#658E15;
   -webkit-box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
   -moz-box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
   box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
   display:block; width:0; /* Firefox 3.0 damage limitation */
}

.note.rounded {
   -webkit-border-radius:5px 0 5px 5px;
   -moz-border-radius:5px 0 5px 5px;
   border-radius:5px 0 5px 5px;
}

.note.rounded:before {
   border-width:8px;
   border-color:#fff #fff transparent transparent;
   -webkit-border-bottom-left-radius:5px;
   -moz-border-radius:0 0 0 5px;
   border-radius:0 0 0 5px;
}


      </style>
      <script>

         <?php 

            include 'ajax.js';

         ?>

      </script>
</head>
<?php

   include 'connect.inc.php';
   include 'header.php';

   echo "<div id='info'  style='position:absolute;z-index:100;background:#EEEEEE;box-shadow:-10px 10px 15px grey;min-width:100%;' align='center'></div>";

   if (isset($_GET['type']) and isset($_GET['value'])) 
   {
      
      $type = $_GET['type'];
      $value = urldecode($_GET['value']);

      if ($type!="" and $value!="") 
      {
         $bigData = file_get_contents("data.txt");   
         $bigdataArr = explode("\n", $bigData);
         $results = array();

         foreach($bigdataArr as $singleData)
         {
            $singledataArr = explode("***", $singleData);

            if($type === "hometown")
            {  
               if(strtolower($value) === @strtolower(@$singledataArr[12]))
               {
                  array_push($results, $singledataArr);
               }
            }
            elseif($type === "hall")
            {
               if(strtolower($value) === strtolower(substr(@$singledataArr[6], 0, strpos(@$singledataArr[6], ","))))
               {
                  array_push($results, $singledataArr);
               }
            }
            elseif($type === "department")
            {
               if(strtolower($value) === strtolower(@$singledataArr[5]))
               {
                  array_push($results, $singledataArr);
               }
            }
            elseif($type === "batch")
            {
               if(strtolower($value) === "y".strtolower(substr(@$singledataArr[0], 0, 2)))
               {
                  array_push($results, $singledataArr);
               }
            }
         }

         $num = count($results);

         if ($num==0) 
         {

            echo "<div align='center' style='margin-top:30px;'>
                     <div class='note' style='display:inline-block;position:relative;top:100px;'>
                        <p style='font:bold 24px arial;'>PLEASE<br>Y U TRY TO PLAY WITH THE URL</p><br>
                        <p>Click <a href='index.php'>here</a> to go to the home page.</p>
                     </div>
                  </div>
                     ";
         }
         else
         {
            echo "<div align='center' style='margin-top:160px;'>
                  <h3 style='margin-top:20px;padding:10px;background:#003399;opacity:0.6;color:white;font-size:28px;'>$num Results</h3>";

            foreach ($results as $result) 
            { 
               $row = $result;
  
               $url = getImageGroup($row[0]);

               echo 
                     "<div id='singleimage'  style='display:inline-block;margin:30px;margin-bottom:0px;background:white;box-shadow:0px 0px 3px grey;border:3px solid white;'>
                                       <a href='profile.php?view=$row[0]'  style='color:black;text-decoration:none;'>
                                          $url<br><hr>
                                          <div style='margin:0px auto;text-align:center;background:white;font-size:13px;font-weight:normal;'>$row[2] $row[3]<br>$row[0]&nbsp;&nbsp;$row[5]</div>
                                       </a>
                                     </div>";

            }

            echo "</div>";
         }

      }
   }

?>
