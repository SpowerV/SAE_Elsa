
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Administrateur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>

       .text
       {
        text-align: center;
       }

    </style>
</head><br><br><br>
<body>
    


<!-- Modal -->
<div class="modal fade" id="useraddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvel Utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
        

<form action="" method="POST">
<div class="modal-body">

<div class="form-group">
    <label>Nom</label>
    <input type="text" name="nom" class="form-control"  placeholder="Entrer un nom">
  </div>

  <div class="form-group">
    <label>Prenom</label>
    <input type="text" name="prenom" class="form-control"  placeholder="Entrer un prenom">
  </div>


  <div class="form-group">
    <label>Username</label>
    <input type="text" name="uname" class="form-control"  placeholder="Entrer un username">
  </div>


  <div class="form-group">
    <label>Profil</label>
    <input type="text" name="profil" class="form-control"  placeholder="Entrer un profil">
  </div>


  <div class="form-group">
    <label>Password</label>
    <input type="text" name="mdp" class="form-control"  placeholder="Entrer un password">
  </div>

</div>



      <div class="modal-footer">
                   <button class="btn btn-primary" name="btn_enregistrer">Enregistrer</button>
                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

      </form>  

    </div>
  </div>
</div>


<!--############################################################################################################### -->
<!--Modifier modal -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
        

<form action="" method="POST">
<div class="modal-body">

<input type="hidden" name="update_id" id="update_id">

<div class="form-group">
    <label>Nom</label>
    <input type="text" name="nom" id="nom" class="form-control"  placeholder="Entrer un nom">
  </div>

  <div class="form-group">
    <label>Prenom</label>
    <input type="text" name="prenom" id="prenom" class="form-control"  placeholder="Entrer un prenom">
  </div>


  <div class="form-group">
    <label>Username</label>
    <input type="text" name="uname" id="uname" class="form-control"  placeholder="Entrer un username">
  </div>


  <div class="form-group">
    <label>Profil</label>
    <input type="text" name="profil"  id="profil" class="form-control"  placeholder="Entrer un profil">
  </div>


  <div class="form-group">
    <label>Password</label>
    <input type="text" name="mdp" id="mdp" class="form-control"  placeholder="Entrer un password">
  </div>

</div>



      <div class="modal-footer">
                   <button class="btn btn-primary" name="btn_modif">Modifier</button>
                    <button class="btn btn-danger" data-dismiss="modal">Annuler</button>
      </div>

      </form>  

    </div>
  </div>
</div>

<!--################################################################################################################ -->



<!--Supprimer modal -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer Utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
        

<form action="" method="POST">
<div class="modal-body">

<input type="hidden" name="delete_id" id="delete_id">

<h4> Voulez-vous vraiment effectuer cette suppression ??</h4>

</div>



      <div class="modal-footer">
                   <button class="btn btn-secondary" data-dismiss="modal">NON</button>
                   <button class="btn btn-primary" name="btn_delete">OUI</button>
                   
      </div>

      </form>  

    </div>
  </div>
</div>


<!--########################################################################################################-->



      <div class="container">
         <div class="jumbotron">
            <div class="card">
                <h2 class="text">Espace Administrateur</h2>
            </div>
              <div class="card">
                <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#useraddmodal">
                     ADD USER
                </button>
             </div>
          </div><br>

          <div class="card">
            <div class="card-body">

               <?php 

      require("./config/database.php");
 

       $result = $db->query('SELECT * FROM user ');

?>


            <table class="table table-white">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Username</th>
      <th scope="col">Profil</th>
      <th scope="col">Password</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  
  <tbody>
  <?php while($row = $result->fetch(PDO::FETCH_ASSOC)):?>
                      <tr>
                         
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo htmlspecialchars($row['nom']); ?></td>
                          <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                          <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                          <td><?php echo htmlspecialchars($row['profil']); ?></td>
                          <td><?php echo htmlspecialchars($row['password']); ?></td>
                          <td>
                            <button type="button" class="btn btn-success editbtn">Modifier</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger deletebtn">Supprimer</button>
                          </td>
                          
                      </tr>
                      <?php endwhile;?>
   
  </tbody>
</table>

            </div>

          </div>

         </div>   

      </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



<script>
  $(document).ready(function() {

    $('.deletebtn').on('click', function() {

      $('#deletemodal').modal('show');

             $tr = $(this).closest('tr');

             var data = $tr.children("td").map(function() {
               return $(this).text();
             }).get();

             console.log(data);

             $('#delete_id').val(data[0]);
           

    });

  });
</script>






<script>
  $(document).ready(function(){
    $('.editbtn').on('click', function() {
      $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
              return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#nom').val(data[1]);
            $('#prenom').val(data[2]);
            $('#uname').val(data[3]);
            $('#profil').val(data[4]);
            $('#mdp').val(data[5]);

    });

  });
</script>
</body>
</html>
<?php include('partials/footer.php') ?>