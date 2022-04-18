<?php
   $db = new SQLite3('C:\xampp\htdocs\stage 3 program\program\sample.db');

 
if (isset($_POST['search'])){

    $projectname=$_POST['projectname'];
    $projectcode=$_POST['projectcode'];
    $client=$_POST['client'];  
    $discipline=$_POST['discipline'];
    $sector=$_POST['sector']; 
    $start=$_POST['start'];
    $completion=$_POST['completion'];
    $worktype=$_POST['worktype'];
    $info=$_POST['info'];
    $material=$_POST['material'];
    $element=$_POST['element'];
    $tag=$_POST['tag'];

    if($projectname != "" && $projectcode != "" && $client != ""
     && $discipline != "" && $sector != "" && $start != ""
      && $completion != "" && $worktype != "" && $info != ""
       && $material != "" && $element != "" && $tag != ""){
      $sql = "SELECT * FROM  metadata WHERE project=:'$projectname'
      AND projectcode=:'$projectcode' AND client=:'$client' AND discipline=:'$discipline' 
      AND sector='$sector' AND start='$start' AND completion='$completion' 
      AND worktype='$worktype' AND segment='$info' AND material='$material'
      AND element='$element' AND tag='$tag'";
      $stmt = $db->prepare($sql);
      $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE project=:'$projectname'
      AND projectcode=:'$projectcode' AND client=:'$client' AND discipline=:'$discipline' 
      AND sector='$sector' AND start='$start' AND completion='$completion' 
      AND worktype='$worktype' AND segment='$info' AND material='$material'
      AND element='$element' AND tag='$tag'")->fetchArray()[0];
      $result = $stmt->execute();
   }

   elseif($projectname != "" && $projectcode == "" && $client == ""
     && $discipline == "" && $sector == "" && $start == ""
      && $completion == "" && $worktype == "" && $info == ""
       && $material == "" && $element == "" && $tag == ""){
         $sql = "SELECT * FROM  metadata WHERE project='$projectname'";
         $stmt = $db->prepare($sql);
         $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE project='$projectname'")->fetchArray()[0];
         $result = $stmt->execute();
       }

       elseif($projectname == "" && $projectcode != "" && $client == ""
     && $discipline == "" && $sector == "" && $start == ""
      && $completion == "" && $worktype == "" && $info == ""
       && $material == "" && $element == "" && $tag == ""){
         $sql = "SELECT * FROM  metadata WHERE projectcode='$projectcode'";
         $stmt = $db->prepare($sql);
         $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE projectcode='$projectcode'")->fetchArray()[0];
         $result = $stmt->execute();
       }
       
       elseif($projectname == "" && $projectcode == "" && $client != ""
     && $discipline == "" && $sector == "" && $start == ""
      && $completion == "" && $worktype == "" && $info == ""
       && $material == "" && $element == "" && $tag == ""){
         $sql = "SELECT * FROM  metadata WHERE client=:'$client'";
         $stmt = $db->prepare($sql);
         $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE client='$client'")->fetchArray()[0];
         $result = $stmt->execute();
       }
       elseif($projectname == "" && $projectcode == "" && $client == ""
       && $discipline != "" && $sector == "" && $start == ""
        && $completion == "" && $worktype == "" && $info == ""
         && $material == "" && $element == "" && $tag == ""){
           $sql = "SELECT * FROM  metadata WHERE discipline='$discipline'";
           $stmt = $db->prepare($sql);
           $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE discipline='$discipline'")->fetchArray()[0];
           $result = $stmt->execute();
         }
         elseif($projectname == "" && $projectcode == "" && $client == ""
         && $discipline == "" && $sector != "" && $start == ""
          && $completion == "" && $worktype == "" && $info == ""
           && $material == "" && $element == "" && $tag == ""){
             $sql = "SELECT * FROM  metadata WHERE sector='$sector'";
             $stmt = $db->prepare($sql);
             $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE sector='$sector'")->fetchArray()[0];
             $result = $stmt->execute();
           }
           elseif($projectname == "" && $projectcode == "" && $client == ""
         && $discipline == "" && $sector == "" && $start != ""
          && $completion == "" && $worktype == "" && $info == ""
           && $material == "" && $element == "" && $tag == ""){
             $sql = "SELECT * FROM  metadata WHERE start='$start'";
             $stmt = $db->prepare($sql);
             $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE start='$start'")->fetchArray()[0];
             $result = $stmt->execute();
           }
           elseif($projectname == "" && $projectcode == "" && $client == ""
         && $discipline == "" && $sector == "" && $start == ""
          && $completion != "" && $worktype == "" && $info == ""
           && $material == "" && $element == "" && $tag == ""){
             $sql = "SELECT * FROM  metadata WHERE completion='$completion'";
             $stmt = $db->prepare($sql);
             $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE completion='$completion'")->fetchArray()[0];
             $result = $stmt->execute();
           }

           elseif($projectname == "" && $projectcode == "" && $client == ""
         && $discipline == "" && $sector == "" && $start == ""
          && $completion == "" && $worktype != "" && $info == ""
           && $material == "" && $element == "" && $tag == ""){
             $sql = "SELECT * FROM  metadata WHERE worktype='$worktype'";
             $stmt = $db->prepare($sql);
             $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE worktype='$worktype'")->fetchArray()[0];
             $result = $stmt->execute();
           }

           elseif($projectname == "" && $projectcode == "" && $client == ""
         && $discipline == "" && $sector == "" && $start == ""
          && $completion == "" && $worktype == "" && $info != ""
           && $material == "" && $element == "" && $tag == ""){
             $sql = "SELECT * FROM  metadata WHERE segment='$info'";
             $stmt = $db->prepare($sql);
             $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE segment='$info'")->fetchArray()[0];
             $result = $stmt->execute();
           }
           elseif($projectname == "" && $projectcode == "" && $client == ""
           && $discipline == "" && $sector == "" && $start == ""
            && $completion == "" && $worktype == "" && $info == ""
             && $material != "" && $element == "" && $tag == ""){
               $sql = "SELECT * FROM  metadata WHERE material='$material'";
               $stmt = $db->prepare($sql);
               $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE material='$material'")->fetchArray()[0];
               $result = $stmt->execute();
             }
             elseif($projectname == "" && $projectcode == "" && $client == ""
           && $discipline == "" && $sector == "" && $start == ""
            && $completion == "" && $worktype == "" && $info == ""
             && $material == "" && $element != "" && $tag == ""){
               $sql = "SELECT * FROM  metadata WHERE element='$element'";
               $stmt = $db->prepare($sql);
               $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE element='$element'")->fetchArray()[0];
               $result = $stmt->execute();
             }

             elseif($projectname == "" && $projectcode == "" && $client == ""
           && $discipline == "" && $sector == "" && $start == ""
            && $completion == "" && $worktype == "" && $info == ""
             && $material == "" && $element == "" && $tag != ""){
               $sql = "SELECT * FROM  metadata WHERE tag='$tag'";
               $stmt = $db->prepare($sql);
               $count_rows = $db->query("SELECT COUNT(*) FROM metadata WHERE tag='$tag'")->fetchArray()[0];
               $result = $stmt->execute();
             }

             else{
               $sql = "SELECT * FROM  metadata ";
               $stmt = $db->prepare($sql);
               $count_rows = $db->query("SELECT COUNT(*) FROM metadata ")->fetchArray()[0];
               $result = $stmt->execute();
             }
  }

