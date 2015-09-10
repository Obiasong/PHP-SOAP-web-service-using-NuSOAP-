
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <script type='text/javascript' src='scripts/jquery.js'></script>
        <meta charset="UTF-8">
        <title>MCQ WebService</title>
        
        <style type='text/css'>
body
{
background-color:transparent;
font-family:"Times New Roman";
font-size:20px;
text-align: left;
}
h4
{
color:darkgreen;
font-size:30px;
text-align:center;
}
h5
{
color:darkblue;
font-size:25px;
text-align:Left;
}

</style>
        
    </head>
    <body>   
        <h4>MCQCAMER SERVICE</h4>
        <div>
            <p>
            <h5>Description</h5>
                The MCQCAMER Web Service will return multiple choice question as well as its choices when a user consumes the service.<br>
                The multiple choice question will be under the subject required by the user which will be passed as an argument of type string.
            </p>
            <h5>Web Service Description Language </h5>
            View the <a href="http://localhost/phpwebserve/server.php?wsdl" target="_blank"><b>WSDL</b></a>
            for the MCQCAMER Service.
        </div>    
        <div>
            <h5>Tester</h5>
            <p>
        Here is a tester of the functionality provided by the MCQCAMER Web Service</b>
        <br>It accepts a single input which is the subject from which the service is expected to return the mcq.<br>On clicking the submit button, the service will randomly return a question from the subject that is submitted<br>
            </p>
        </div>
        <form action="client.php" method="get">
       <input type="text" placeholder="subject" name="subject"/>
    <input type="submit" />
</form>
 
<input type="submit" />
</form>

</body>
</html>
