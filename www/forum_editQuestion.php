

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
        if(isset($errorMsg)){
            echo '<p>'.$errorMsg.'</p>';
        }    
    ?>
    <?php 
         if(isset($question_content)){
     ?>    
         

<form method="POST" >

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
    <input type="text" class="form-control" name="title" value="<?= $question_title ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description de la question</label>
    <textArea class="form-control" name="description"><?= $question_description ?></textArea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contenu de la question</label>
    <textArea  class="form-control" name="content"><?= $question_content ?></textArea>
  </div>
  
  <button type="submit" class="btn btn-primary" name="validate">Modifier la question</button>
  
</form>

<?php
         }

 ?>

    </div>
