


<!-- Get the data from the database -->

<?php 
include_once('dbconnection.php'); 


 
    //$id= isset($id) ? $id: ''; 


    $id_client= $_GET['id_client'];
    $query = "SELECT * FROM client WHERE id_client='".$id_client."'";

    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result)){

         
        $id_client = $row['id_client'];
        $nom = $row['nom']; 
        $prenom = $row['prenom']; 
        $sexe = $row['sexe'];
        $nationalite = $row['nationalite'];
        $telephone = $row['telephone'];
        $addresse = $row['addresse'];
        $jour = $row['jour'];  
                
    }

 //Change and Insert the data in the database-->
     
 
    if(isset($_POST['update']))
    {         
        $id_client = $_POST['id'];
        $nom = $_POST['nom']; 
        $prenom = $_POST['prenom']; 
        $sexe = $_POST['sexe'];
        $nationalite = $_POST['nationalite'];
        $telephone = $_POST['telephone'];
        $addresse = $_POST['addresse'];
        $jour=date('d-m-y H:m');
        

         
 
        $query = "UPDATE client SET nom='".$nom."', prenom='".$prenom."',sexe='".$sexe."', nationalite='".$nationalite."', telephone='".$telephone."', addresse='".$addresse."',jour='".$jour."' WHERE id_client='".$id_client."'";

         
        $result = mysqli_query($con,$query);       
        
 
        if($result)
        {
            echo '
            <script>
            alert(" '.$nom.'  mis a jour!");
            window.location.assign("client.php");
            </script>
            ';
        }
        else
        {
           echo '<script>alert("Non enregistré. Réessayez!");window.location.assign("client.php");</script>';
        }
       }
        
    
    
?>
  

<div class="" style="" >
  <div class="">
    <div class="" >
      <div class="">                                       
          <table class="">
            <tr>
               <center>    
    
  <!-- Content Wrapper. Contains page content -->
    <div >
    <!-- Content Header (Page header) -->
            <section class="content-header">
               <small>
                <h1 class="main-header" style="margin-left:1%;margin-right:1%;background-color:#fcddcf;font-family: 'bad script',Times new Roman;">
                     Modification Client
               </small>
                </h1>  <br><br>      

    <!-- Main content 
    <section class="content container-fluid">             
      Small boxes (Stat box) -->      
     <!--  id, image, categories, NomProduit, Marque, Performance,PA,PV,Quantite,LocalEtranger,jour -->
      <div class="row">        
           
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="margin-left: 10000%;">
                
                <div class="col-lg-12"><!--1e partie des cases -->
                    <input type="hidden" name="id" value="<?php echo $id_client; ?>">
                     
                    <div class="col-lg-6 form-group">
                        <label>Nom</label><br>
                        <input type="text" name="nom" value="<?php echo $nom; ?>"  class="form-control" >
                        <label>Prénom</label><br>
                        <input type="text" name="prenom" value="<?php echo $prenom; ?>"  class="form-control"   required>
                        <label>Sexe</label><br>
                        <input type="text" name="sexe" value="<?php echo $sexe; ?>"  class="form-control"   >
                    </div>               
                
                    <div class="col-lg-6 form-group">
                        <label>nationalite</label><br>
                        <input type="text" name="nationalite" value="<?php echo $nationalite; ?>"  class="form-control"   required>
                        <label>Telephone</label><br>
                        <input type="number" name="telephone" value="<?php echo $telephone; ?>"  class="form-control">
                         <label>Addresse</label><br>
                        <input type="text" name="addresse" value="<?php echo $addresse; ?>"  class="form-control">
                    </div>   
                   
        
                  <div class="col-lg-12">                   
                      <input type="submit" name="update" class="btn btn-primary btn-flat text-bold" value="Update" style="width: 20%;" >                          
                  </div>                      
                
            </form>
   </div>
    

                      </tr>
                   </tbody>
                </table>
              </div>
           </div>
       </div>
   <!-- /.row --> 
     </div>
 <!-- /.panel-body -->

 
<!--FIN TABLEAU ET AFFICHAGE End simple table example -->           


 
 

