<?php 
    require 'config.php';

    //filtre---faire l'action des bouttons ---début
    if(isset($_POST['action'])){
        $sql = "SELECT * FROM players WHERE post !=''";

        if(isset($_POST['post'])){
            $post = implode("','", $_POST['post']);
            $sql .="AND post IN('".$post."')";
        }

        if(isset($_POST['team'])){
            $team = implode("','", $_POST['team']);
            $sql .="AND team IN('".$team."')";
        }

        if(isset($_POST['national'])){
            $national = implode("','", $_POST['national']);
            $sql .="AND national IN('".$national."')";
        }

        //filtre---faire l'action des bouttons ---fin---//
        
        $result = $conn->query($sql);
        $output='';


        //fiche joueur ---début---//
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $output .= '<div class="col-md-3 mb-3">
                <div class="card-deck">
                 <div class="card border-dark">
                 <div class="card-header">'.$row['name'].'</div>
                 <a href= "'.$row['video'].'" target="_blank"><img src="'.$row['players_img'].'"
                   class="card-img-top"></a>

                    <div class="card-body">

                      <p>
                        Poste : '.$row['post'].'<br>
                        Team : '.$row['team'].'<br>
                        National : '.$row['national'].'<br>
                     </p>
                    </div>
                 </div>
                </div>
              </div>';
            }
        }
        //fiche joueur ---fin---//

        //affiche aucun joueur si pas de résultats//
        else{
            $output ="<h3>No Players Found!</h3>";
        }
        echo $output;
    }
?>