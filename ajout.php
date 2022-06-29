
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
</head><br><br><br><br><br>
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
     
        

<form action="insertcode.php" method="POST">
<div class="modal-body">

<div class="form-group">
    <label>Nom</label>
    <input type="text" name="fname" class="form-control"  placeholder="Entrer un nom">
  </div>

  <div class="form-group">
    <label>Prenom</label>
    <input type="text" name="pname" class="form-control"  placeholder="Entrer un prenom">
  </div>


  <div class="form-group">
    <label>Username</label>
    <input type="text" name="uname" class="form-control"  placeholder="Enter un username">
  </div>


  <div class="form-group">
    <label>Profil</label>
    <input type="text" name="profil" class="form-control"  placeholder="Entrer un profil">
  </div>


  <div class="form-group">
    <label>Password</label>
    <input type="text" name="password" class="form-control"  placeholder="Entrer un password">
  </div>

</div>



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" name="insertdata" class="btn btn-primary">Save Data</button>
      </div>

      </form>  

    </div>
  </div>
</div>


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
</body>
</html>
<?php include('partials/footer.php') ?>