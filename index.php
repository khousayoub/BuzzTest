<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="/style.css" type="text/css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
    <title>Buzz Test</title>
  </head>
  <body>
    <div class="container">
      <form id="NameForm" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name : </label>
          <input type="text" class="form-control" id="name">
        </div>
        <button type="submit" class="btn btn-primary">Start the game</button>
      </form>
      <table class="table" id="highestScore">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Score</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
      <div class="row">
        <div class="timer">
          Time : <span id="time">60</span> sec
        </div>
        <div class="game">
        <span id="hello"></span> <span id="game"></span>
        </div>
      </div>
      <div class="row">
        <div class="col-sm hole" id="hole1">
          
        </div>
        <div class="col-sm hole" id="hole2">
          
        </div>
        <div class="col-sm hole" id="hole3">
          
        </div>
        <div class="col-sm hole" id="hole4">
          
        </div>
      </div>
      <div class="row">
        <div class="col-sm hole" id="hole5">
          
        </div>
        <div class="col-sm hole" id="hole6">
          
        </div>
        <div class="col-sm hole" id="hole7">
          
        </div>
      </div>
    </div>
  </body>
</html>

