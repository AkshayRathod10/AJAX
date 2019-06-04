<?php



$str = $_GET['q'];

$str;


function searchArray($str){
    // $input = preg_quote($str, '~'); // don't forget to quote input string!
    // $data = array('orange', 'blue', 'green', 'red', 'pink', 'brown', 'black');
    require_once "array.php";
    
    foreach($data as $single){
        
        // $result[] = preg_grep('~' . $input . '~', $single);
        if(preg_match('/'.$str.'/',$single['name'])):?>
                
                <h3><?php echo $single['name']; ?></h3>
                <h4><?php echo $single['country']; ?></h4>
                <h4><?php echo $single['company']; ?></h4>
                <h4><?php echo $single['email']; ?></h4>
                <hr>
    <?php endif;?>
   <?php        
    }

    
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    // echo "<hr>";

    // echo "<pre>";
    // print_r($result1);
    // echo "</pre>";
    
}


searchArray($str);