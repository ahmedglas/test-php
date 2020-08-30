$(document).ready(function() {
  $("form#survey").submit(function(event) {
    event.preventDefault();
    var questionInput = $("#question").val();
   
    

    $("#results").show();
    $("#survey").hide();

    $(".name").text(questionInput);
    
    // $(".color").css({
    //     "background-color" : colorInput
    // });
    $(".colorButton").css({
        "background-color" : "rgba(255,100,100,1)"
    });





  });

});
