$( document ).ready(function() {
    // ajax to get the top 10 highest score
    $.ajax({
        url: "getHighestScore.php"
      }).done(function(data) {
          for (var i = 0; i < data.length; i++){
            $score = "<tr><th scope='row'>"+i+"</th><th scope='col'>"+data[i]["user"]+"</th><th scope='col'>"+data[i]["score"]+"</th></tr>"
            $("#highestScore tbody").html($score);
            }
        })  
    // starting the game
    $("#NameForm").submit(function(event){
        event.preventDefault();
        myName = $("#name").val();
        console.log(myName)
        // Testing if the name input is not empty
        if (myName != ""){
            $("#game").text("");
            $("#name").css('border-color','grey')
            $("#NameForm").hide();
            $("#hello").text("Hello "+ myName)
            timer = 60;
            score = 0;
            // showing the button in the holes and counting the score
            var holeTime = setInterval(function() {
                var random = Math.floor(Math.random() * 6) + 1;
                $("#hole"+random).html("<button id='mole"+random+"'>here</button>");
                $("#mole"+random).show("fast").delay(500).fadeOut("fast");
                $("#mole"+random).click(function(){
                    score++;
                    $(this).fadeOut();
                })
            }, 1000)
            // counting the time limit of the game which is 1min
            var intTime = setInterval(function() {
                time = $("#time").text();
                timer = timer - 1;
                $("#time").text(timer);
                if (timer == 0) {
                    clearInterval(holeTime);
                    clearInterval(intTime);
                    $("#game").text("The game is over. Here is your score : "+ score);
                    $.ajax({
                        url: "controller.php",
                        data: {"user":myName, "score": score}
                      }).done(function() {
                          return 1;
                    });
                }
            }, 1000)
        }else {
            $("#game").text('Please enter your name');
            $("#game").css('color','red');
            $("#name").css('border-color','red')
        }
    });
});