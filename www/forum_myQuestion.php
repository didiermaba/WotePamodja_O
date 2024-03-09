
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="forum_publishQuestion.php">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publish-question.php">Publier une question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my-questions.php">Mes questions</a>
        </li>
        <?php 
            if(isset($_SESSION['auth'])){

              ?>

              <li class="nav-item">
              <a class="nav-link" href="profile.php?id=<?= $_SESSION['id']; ?>">Mon Profil</a>
              </li>

              <li class="nav-item">
              <a class="nav-link" href="actions/users/logoutAction.php">Déconnexion</a>
              </li>
           <?php 
            }

            ?>
        
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

<br><br>

     <div class="container">

     <?php 
     
      foreach ($AllMyQuestions as $question){
        
        ?>
         <div class="card">
             <h5 class="card-header">
             
          <?= $question['titre']; ?>
      
            </h5> 
              <div class="card-body">
                    <p class="card-text">
                        <?= $question['description']; ?>
                    </p>
                    <a href="forum_article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Acceder à la question</a><!--cmt faire pr créer le lien avec le fichier f_article.phtml-->
                    <a href="forum_editQuestion.php?id=<?= $question['id']; ?>" class="btn btn-warning">Modifier la question</a>
                    <a href="controllers/forum_deleteQuestion.php?id=<?= $question['id']; ?>" class="btn btn-danger">Supprimer la question</a>
              </div>
         </div>
         <br>

        <?php } ?>
        
     </div>