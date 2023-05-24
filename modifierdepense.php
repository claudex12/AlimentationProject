<!-- Get the data from the database -->

<?php 
include_once('dbconnection.php'); 


 
    //$id= isset($id) ? $id: ''; 


    $id_depense= $_GET['id_dep'];
    $query = "SELECT * FROM depense WHERE id_dep='".$id_depense."'";

    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result)){

         
        $id_depense = $row['id_dep'];
        $qte = $row['qte']; 
        $montant = $row['montant']; 
        $totale = $row['totale'];
        $desc = $row['descript'];
        $jour = $row['datee'];       
    }

 //Change and Insert the data in the database-->     
 
    if(isset($_POST['update']))
    {         
        $id_depense = $_POST['id'];       
        $qte = $_POST['qte'];
        $montant = $_POST['montant'];
        $totale = $_POST['qte'] * $_POST['montant'];
        $descript=$_POST['descript'];
        $jour=date('d-m-y H:m');
        //...........the query for update values.......................         
 
        $query = "UPDATE depense SET qte='".$qte."', montant='".$montant."', totale='".$totale."',descript='".$descript."',datee='".$jour."' WHERE id_dep='".$id_depense."'";
         
        $result = mysqli_query($con,$query);       
        
 
        if($result)
        {
            echo '
            <script>
            alert(" '.$id_depense.','.$descript.'  mis a jour!");
            window.location.assign("depense.php");
            </script>
            ';
        }
        else
        {
           echo '<script>
           alert("Non enregistré. Réessayez!");
           window.location.assign("depense.php");
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
                     Modification Depense
               </small>
                </h1>  <br><br>      

    <!-- Main content 
    <section class="content container-fluid">             
      Small boxes (Stat box) -->      
     <!--  id, image, categories, NomProduit, Marque, Performance,PA,PV,Quantite,LocalEtranger,jour -->
      <div class="row">        
           
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="margin-left: 10000%;">
                
                <div class="col-lg-12"><!--1e partie des cases -->
                    <input type="hidden" name="id" value="<?php echo $id_depense; ?>">
                     
                    <div class="col-lg-6 form-group">
                        <label>Quantite</label><br>
                      <input type="text" name="qte" value="<?php echo $qte; ?>"  class="form-control"required="required" >
                        <label>Montant</label><br>
                        <input type="number" name="montant" value="<?php echo $montant; ?>"  class="form-control"   required>                      
                    </div>               
                
                    <div class="col-lg-6 form-group">
                         <label>Totale</label><br>
                        <input type="number" name="totale" value="<?php echo $totale; ?>"  class="form-control"  disabled="" >
                        <label>Description</label><br>
                       <textarea cols="8" rows="2" <input type="text" name="descript" value="<?php echo $descript; ?>"  class="form-control"   required> </textarea>                      
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


 
 

