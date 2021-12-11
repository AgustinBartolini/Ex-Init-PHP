<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP-Project</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

   <section id="First-Exercise" class="mt-4">
      <h1>First Exercise</h1>

      <?php
      $gamesList = ['Bioshock: The Collection', 'Grand Theft Auto: San Andreas', 'Dead By Daylight'];
      ?>
      
      <ul class="list-ul">
         <?php
         foreach ($gamesList as $key => $game) {
            $key++;
            $html = <<<HTML
                  <li class="list-ul-item">{$key}: {$game}</li>
            HTML;
            echo $html;
         }
         ?>
      </ul>
   </section>


   <section id="second-exercise" class="mt-4">
      <h1>Second Exercise</h1>
      <ul class="list-ul">
         <li class="list-ul-item"><a href="createGame.php">Add a new game</a></li>

         <?php
            $game = [
               "game-title" => null
            ];

            foreach ($_POST as $key => $value) {
               if (isset($key)) {
                  $game[$key] = $value;
               };
            }

            $html = <<<HTML
               <li class="list-ul-item"> 
                  {$game["game-title"]}
               </li>
            HTML;
            echo $html;
         ?>
      </ul>
   </section>


   <section id="third-exercise" class="mt-4">
      <h2>Third Exercice</h2>

      <?php
      $user = [
         "name" => "Marito",
         "citizenship" => "Italian",
         "age" => "60"]
      ?>

      <table class="table">
         <thead class="thead-dark">
            <tr>
               <th scope="col">Name</th>
               <th scope="col">Citizenship</th>
               <th scope="col">Age</th>
            </tr>
         </thead>
         
         <tbody>
            <?php
               $html = <<<HTML
                  <tr>
                     <td>{$user["name"]}</td>
                     <td>{$user["citizenship"]}</td>
                     <td>{$user["age"]}</td>
                  </tr>
                  HTML;
               echo $html;
            ?>
         </tbody>
      </table>
   </section>

   <section id="fourth-exercise" class="mt-4">
    <h2>Fourth Exercice</h2>

      <div class="d-flex"> <?php
         class Movie {
            private string $title;
            private string $poster;
            private string $description;

            public function __construct(string $title, string $poster, string $description) {
               $this->title = $title;
               $this->poster = $poster;
               $this->description = $description;
            }
            public function getTitle() {
               return $this->title;
            }
            public function getPoster() {
               return $this->poster;
            }
            public function getDescription() {
               return $this->description;
            }
         }

         require('./moviesList.php');

         foreach ($moviesList as $movie) {
            $objMovie = new Movie($movie['title'], $movie['poster'], $movie['description']);

            $html = <<<HTML
            <div class="card mr-3" style="width: 18rem;">
               <img class="card-img-top" src="{$objMovie->getPoster()}" alt="{$objMovie->getPoster()}">
               <div class="card-body">
                  <h5 class="card-title">{$objMovie->getTitle()}</h5>
                  <p class="card-text">{$objMovie->getDescription()}</p>
               </div>
            </div>
            HTML;
            echo $html;
         };
       ?>
      </div>


   </section>
</body>
</html>