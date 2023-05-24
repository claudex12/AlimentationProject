<!-- Get the data from the database -->

<?php 
include_once('dbconnection.php'); 
 
    //$id= isset($id) ? $id: '';

    $id_produit= $_GET['id_pro'];
    $query = "SELECT * FROM produit WHERE id_pro='".$id_produit."'";

    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result)){

         
        $id_produit = $row['id_pro'];
        $nom = $row['nom']; 
        $type = $row['type']; 
        $qualite = $row['qualite'];
        $qte = $row['qte'];
        $pu = $row['pu'];
        $pt = $row['pt'];
        $jour = $row['jour'];  
                
    }

 //Change and Insert the data in the database-->
     
 
    if(isset($_POST['update']))
    {         
        $id_produit = $_POST['id'];
        $nom = $_POST['nom']; 
        $type = $_POST['type']; 
        $qualite = $_POST['qualite'];
        $qte = $_POST['qte'];
        $pu = $_POST['pu'];
        $pt = $_POST['qte'] * $_POST['pu'];
        $jour=date('d-m-y H:m');
        //...........the query for update values.......................         
 
        $query = "UPDATE produit SET nom='".$nom."', type='".$type."',qualite='".$qualite."', qte='".$qte."', pu='".$pu."', pt='".$pt."',jour='".$jour."' WHERE id_pro='".$id_produit."'";
         
        $result = mysqli_query($con,$query);       
        
 
        if($result)
        {
            echo '
            <script>
            alert(" '.$nom.'  mis a jour!");
            window.location.assign("produit.php");
            </script>
            ';
        }
        else
        {
           echo '<script>
           alert("Non enregistré. Réessayez!");
           window.location.assign("produit.php");
           </script>';
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
                     Modification Produit
               </small>
                </h1>  <br><br>      

    <!-- Main content 
    <section class="content container-fluid">             
      Small boxes (Stat box) -->      
     <!--  id, image, categories, NomProduit, Marque, Performance,PA,PV,Quantite,LocalEtranger,jour -->
      <div class="row">        
           
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="margin-left: 10000%;">
                
                <div class="col-lg-12"><!--1e partie des cases -->
                    <input type="hidden" name="id" value="<?php echo $id_produit; ?>">
                     
                    <div class="col-lg-6 form-group">
                        <label>Nom</label><br>
                      <input type="text" name="nom" value="<?php echo $nom; ?>"  class="form-control"required="required" >
                        <label>Type</label><br>
                        <input type="text" name="type" value="<?php echo $type; ?>"  class="form-control"   required>
                        <label>Qualite</label><br>
                        <input type="text" name="qualite" value="<?php echo $qualite; ?>"  class="form-control"   >
                    </div>               
                
                    <div class="col-lg-6 form-group">
                        <label>Quantite</label><br>
                        <input type="number" name="qte" value="<?php echo $qte; ?>"  class="form-control"   required>
                        <label>Prix Unitaire(Pu)</label><br>
                        <input type="number" name="pu" value="<?php echo $pu; ?>"  class="form-control">
                         <label>Prix Totale(Pt)</label><br>
                        <input type="number" name="pt" value="<?php echo $pt; ?>"  class="form-control">
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


 
 

