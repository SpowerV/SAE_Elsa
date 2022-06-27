<?php include('partials/header.php') ?>

<style>

   
    .breadcrumb
{
    background: #9e9e9e;
}

*
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        text*decoration: none;
        font-family:'Josefin Sans',sans-serif;
    }

    body
    {
        background:#f7f3ee;
    }

    .wrapper
    {
       max-width: 350px;
       width: 100%;
       height:auto;
       background: #fff;
       padding: 60px 45px;
       position: absolute;
       top: 50%;
       left: 40%;
       transform: translate(-9%, -9%);
       border-radius: 20px;

    }

    .wrapper .title 
    {
        margin-bottom: 20px;
        text-align: center;
        font-size: 26px;
        font-weight: bold;
        color: #3aaf9f;
    }

    
   
</style>
<div class="container" style="padding-top: 70px;">

<div class="starter-template">
   <h1> <span class="glyphicon glyphicon-cog"></span>Administration</h1>
   <ol class="breadcrumb">
    <li><a href="user.php">Utilisateur</a></li>
    <li><a href="#">Ajouter un utilisateur</a></li>
    

   </ol>

  

 
</div>

</div><!-- /.container -->

<div class="wrapper">
    <div class="title">
        Add User
    </div>

    <div class="form">
        <div class="input_field">
            <input type="text" placeholder="Nom" class="input">

        </div>
        <div class="input_field">
            <input type="text" placeholder="Prenom" class="input">

        </div>
        <div class="input_field">
            <input type="text" placeholder="Username" class="input">

        </div>
        <div class="input_field">
            <input type="text" placeholder="Password" class="input">

        </div>
       <div class = "btn">
       <input type="submit" value="Enregistrer" />
       </div>
       
    </div>
</div>


<?php include('partials/footer.php') ?>
