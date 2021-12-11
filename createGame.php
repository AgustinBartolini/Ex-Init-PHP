<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>createGame</title>
</head>

<body>
    <main id="createGameMain">
        <form action="index.php" method="post">
            <h2>Game Title</h2>
            <input type="text" name="game-title" id="game-title" required>

            <div>
             <input type="radio" id="game-wishlist" name="wishlist" value="wishlist">
             <label for="game-wishlist">Add to your wishlist</label>
            </div>

            <div>
             <input class="form-check-input" type="checkbox" name="DLCs" value="DLCs">
             <label class="form-check-label">DLC's</label>
            </div>

            <button type="submit" class="btn btn-primary">Add Game Title</button>
        </form>
    </main>
</body>
</html>