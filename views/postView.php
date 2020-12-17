
<h1>Pages Posts</h1>

  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Post récent</h6>

<?php foreach ($allPosts as $key => $postInfo) : ?>

    <div class="media text-muted pt-3">
      <img src="https://www.gravatar.com/avatar/jjjnono?s=32&d=identicon&r=PG" class="mr-2 rounded" width="32" height="32">
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark"><?= $postInfo["titre"] ?> </strong>
        <?= $postInfo["prenom"] ?> <br>  <?= $postInfo["nom_langage"] ?>
      </p>
    </div>

 <?php endforeach ?>

    <small class="d-block text-right mt-3">
      <a href="#">All messages</a>
    </small>

  </div>
</main>

