<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Go Fish Game</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="gamescreen-body">
    <div class="game-board">
      <!-- Checkbox to control the "Deal" button -->
      <input type="checkbox" id="deal-toggle" class="deal-toggle" />

      <!-- Label acting as "Deal" button -->
      <label for="deal-toggle" class="deal-button">Deal</label>

      <!-- Opponent Section -->
      <div class="opponent">
        <div class="name-label">Billy</div>
        <div class="turn-indicator">Your turn</div>
        <div class="face">😊</div>
        <div class="card-hand" id="opponent-cards">
          <!-- TODO Implement Opponent Cards -->
        </div>
      </div>

      <!-- user section -->
      <div class="player">
        <div class="name-label">You</div>
        <div class="face">😊</div>
        <div class="card-hand" id="player-cards">
          <?php include 'game.php'; ?>
        </div>
        <button class="ask-button" id="ask-button">Ask</button>
      </div>
    </div>
  </body>
</html>
