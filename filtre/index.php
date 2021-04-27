<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Decamps Dylan">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <title>Advanced Filter</title>

    <!-- CSS -->
    <link href="styles.css" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    
    <div class="container-fluid">
        <div class="row"> 
            <div id="filtre" class="col-lg-2">
                <h5>Filtre</h5>
                <hr>

                <h6 class="text-info">Sélectionner poste</h6>
                
                <select id="section1" class="form-select players_check col-lg-8">
                <option>select post</option>
                    <?php
                        $sql="SELECT DISTINCT post FROM players ORDER BY post";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                      <option value="<?= $row['post']; ?>" id="post"><?= $row['post']; ?></option>
                   <?php }?>
                </select>
                

                <h6 class="text-info">Sélectionner National</h6>

                <select id="section2" class="form-select players_check col-lg-8">
                <option>select post</option>
                    <?php
                        $sql="SELECT DISTINCT national FROM players ORDER BY national";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                        <option value="<?= $row['national']; ?>" id="national"><?= $row['national']; ?></option>    
                   <?php }?>
                </select>
                
                
                <h6 class="text-info">Sélectionner Team</h6>
                <select id="section3" class="form-select players_check col-lg-8">
                <option>select post</option>
                    <?php
                        $sql="SELECT DISTINCT team FROM players ORDER BY team";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                        <option value="<?= $row['team']; ?>" id="team"><?= $row['team']; ?></option>    
                   <?php }?>
                </select>
            </div>

            <!--Affichage des joueurs-- début -->
            <div class="col-lg-10">
                <h5 class="text-center" id="textChange">Tout les joueur</h5>
                <hr>

                <!--Récupération des infos-- début -->            
                <div class="row" id="result">
                  <?php
                    $sql="SELECT * FROM players";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()){
                  ?>
                

                <!--Profile des joueurs en card-- début -->
                  <div class="col-md-3 mb-3">
                    <div class="card-deck">
                     <div class="card border-dark">
                         <div class="card-header"><?= $row['name']; ?></div>
                      <a href="<?= $row['video'];?>" target="_blank"><img src="<?= $row['players_img'];?>"
                       class="card-img-top"></a>
                        <div class="card-body">
                          <p>
                            <span class="text">Poste : <?= $row['post']; ?><br></span>
                            <span class="text">Team : <?= $row['team']; ?><br></span>
                            <span class="text">National : <?= $row['national']; ?></span>
                         </p>
                        </div>
                    </div>
                   </div>
                  </div>
                  <!--Profile des joueurs en card-- fin -->
                <?php } ?>
                <!--Récupération des infos-- fin -->

              </div>
            </div> 
            <!--Affichage des joueurs-- fin -->
        </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function(){

        $(".players_check").click(function(){
            $("#loader").show()

            var action = 'data';
            var name = get_filter_text('name')
            var post = get_filter_text('post')
            var team = get_filter_text('team')
            var national = get_filter_text('national')

            $.ajax({
              url:'action.php',
              method:'POST',
              data:{action:action,name:name,post:post,team:team,national:national},
              success:function(response){
                $("#result").html(response);
                $("#loader").hide();
                $("#textChange").text("Filtered Players");  
              }
            });
        });

        function get_filter_text(text_id){
            var filterData = [];
            $('#'+text_id+':checked').each(function(){
                filterData.push($(this).val());
            }); 
            return filterData; 
        }

      });
    

    </script>                  

</body>
</html>