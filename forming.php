<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function multiplechoice($subject) {   
 


$con = new mysqli("localhost", "root", "", "diligent");

//uncommment the line of code below to see if connection to the database is a success

//echo "\nSuccess... " . mysqli_get_host_info($con) . "\n";

if(mysqli_connect_errno()){
    
    echo 'Failed to connect to database' .  mysqli_connect_error();
}

$query = "SELECT * FROM questions join diligent.categories on questions.category_id = categories.category_id WHERE categories.category = '$subject' ORDER BY RAND() limit 1"; //the query to be passed the mysqli_query function
$result = mysqli_query($con, $query);

////uncommment the line of code below to see if the query worked
//var_dump($result);

//echo '<table>;
while($row = mysqli_fetch_array($result))
        {   //Creates a loop to loop through results
		return "<tr><td>" . $row['question'] 
                . "</td></tr><tr><td><form action='correct.php'>" 
                ."<input type='radio' name='answer' value=" .$row['answer_1'] ."/>". $row['answer_1']  ."<br />" 
                ."<input type='radio' name='answer' value=" .$row['answer_2'] ."/>". $row['answer_2']  ."<br />" 
                ."<input type='radio' name='answer' value=" .$row['answer_3'] ."/>". $row['answer_3']  ."<br />" 
                ."<input type='radio' name='answer' value=" .$row['answer_4'] ."/>". $row['answer_4']  ."<br /><br />"
                //."<input type='submit' value='Submit' />"
                ."<small>Answer</small>:".$row['correct_answer']
                ."</td></tr></td></tr>";  //$row['index'] the index here is a field name
                
        }
       
       // echo '</table>'; // end the table

    
 mysqli_close($con);// make sure the database connection is closed
  

}
