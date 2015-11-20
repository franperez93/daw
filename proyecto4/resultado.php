
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <?php
        
      include 'menu.php';
        
        if(isset($_POST)){
          
            if($_POST['oper']=='+'&&$_POST['dado1']==$_POST['hidden1']&&$_POST['dado2']==$_POST['hidden2']){
                
               $result =  $_POST['dado1'] + $_POST['dado2'];
               echo "<div class='alert alert-success'><h2>Genial!</h2><br>";
               echo "<h3>El resultado de ".$_POST['dado1']." ".$_POST['oper']." ".$_POST['dado2']." es: ".$result."</h2>";
               
            }else if($_POST['oper']=='-'&&$_POST['dado1']==$_POST['hidden1']&&$_POST['dado2']==$_POST['hidden2']){
                
                $result =  $_POST['dado1'] - $_POST['dado2'];
                echo "<div class='alert alert-success'><h2>Genial!</h2><br>";
                echo "<h3>El resultado de ".$_POST['dado1']." ".$_POST['oper']." ".$_POST['dado2']." es: ".$result."</h2>";
                
            }else{
                
                
                 echo  " <div class='alert alert-danger'><h2>Error!</h2><h3>
                    Dado 1: ".$_POST['hidden1']."<br>Dado 2: ".$_POST['hidden2'].
                    "<br>No coinciden con los datos introducidos por el usuario: 
                        Dado 1: ".$_POST['dado1']."  Dado 2: ".$_POST['dado2']."</h3></div>";
               
                
            } 
            
            
        }
  
    ?>
          
            
  