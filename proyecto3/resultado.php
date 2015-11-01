
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <?php
        
      include 'menu.php';
        
        if(isset($_POST)){
          
            if($_POST['oper']=='+'&&$_POST['dado1']==$_POST['hidden1']&&$_POST['dado2']==$_POST['hidden2']){
                
               $result =  $_POST['dado1'] + $_POST['dado2'];
               echo "<h2 class='ganar'>Genial!!</h2><br>";
               echo "<h3>El resultado de ".$_POST['dado1']." ".$_POST['oper']." ".$_POST['dado2']." es: ".$result."</h2>";
               
            }else if($_POST['oper']=='-'&&$_POST['dado1']==$_POST['hidden1']&&$_POST['dado2']==$_POST['hidden2']){
                
                $result =  $_POST['dado1'] - $_POST['dado2'];
                echo "<h2 class='ganar'>Genial!!</h2><br>";
                echo "<h3>El resultado de ".$_POST['dado1']." ".$_POST['oper']." ".$_POST['dado2']." es: ".$result."</h2>";
                
            }else{
                
                 echo "<h2 class='perder'>ERROR!!</h2><br>";
                 echo "<h3>Dado 1: ".$_POST['hidden1']."<br>";
                 echo "Dado 2: ".$_POST['hidden2']."</h3>";
                 echo "<h3>No coinciden con los datos introducidos por el usuario: Dado 1: ".$_POST['dado1']."  Dado 2: ".$_POST['dado2']."</h3>";
            } 
            
            
        }
  
    ?>
          
            
  