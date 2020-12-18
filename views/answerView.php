    
    <h1>Pages réponses</h1>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section class="content-item" id="comments">
    <div class="container">   
    	<div class="row">
            <div class="col-sm-8">   
                <form>
                	<h3 class="pull-left">Nouveaux commentaires</h3>
                	<button type="submit" class="btn btn-normal pull-right">Envoyer</button>
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2 hidden-xs">
                            	<img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                            </div>
                            <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                <textarea class="form-control" id="message" placeholder="Ecrire ici votre réponse ici" required=""></textarea>
                            </div>
                        </div>  	
                    </fieldset>
                </form>
                
                <h3>X Comments</h3>
                
                <!-- COMMENT 1 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                   <br> <p><?= $auteurData["prenom"] ?></p></a>

                    <div class="media-body">
                        <h4 class="media-heading"><?= $postData["titre"] ?></h4>
                        <p><?= $postData["message"]?></p>
                    </div>
                </div>
                <!-- COMMENT 1 - END -->
                <?php foreach ($allAnswer as $key => $answerInfo) : ?>

                <!-- COMMENT 2 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading"> <?= $answerInfo["prenom"] ?></h4>
                        <p><?= $answerInfo["reponse"] ?></p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 2 - END -->
            <?php endforeach ?>
                
            
            </div>
        </div>
    </div>
</section>