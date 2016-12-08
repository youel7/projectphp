<?php
  
  echo "hello php/text.php";
  if(isset($_POST['submit'])){
    // process
    $text = $_POST['text'];
    
    
    $xml = simplexml_load_file("../data/info.xml") or die("erro opning xml");
    
    $feedback = $xml -> addChild("feedback");
    $feedback -> addchild('text' , $text);
    
    $xml ->asXML ("../data/info.xml");
    
  }

?>