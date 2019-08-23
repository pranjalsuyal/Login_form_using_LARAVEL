$(function(){
  $('#login-form').submit(function(e){
    e.preventDefault();
    if(($( "#username" ).val().trim()=="")&&($("#password").val().trim()=="")){
      $("#username").addClass("error");
      $("#password").addClass("error");
      $(".pointing").remove();
      $("#userwrap").append("<div class='ui pointing red basic label'>Username Field Required</div>");
      $("#passwordwrap").append("<div class='ui pointing red basic label'>Password Field Required</div>");
      e.preventDefault();
    }
    else if($( "#username" ).val().trim()==""){
      $("#username").addClass("error");
      $(".pointing").remove();
      $("#password").removeClass("error");
      $("#userwrap").append("<div class='ui pointing red basic label'>Username Field Required</div>");
      e.preventDefault();
    }
    else if($("#password").val().trim()==""){
      $("#password").addClass("error");
      $("#username").removeClass("error");
      $(".pointing").remove();
      $("#passwordwrap").append("<div class='ui pointing red basic label'>Password Field Required</div>");
      e.preventDefault();
    }
    else{
      $("#username").removeClass("error");
      $("#password").removeClass("error");
      $(".pointing").remove();
      $.ajax({
        url: "/loginme",
        data: {
          username:$("#username").val(),
          password:$("#password").val(),
          _token:$("#csrf").val()
        },
        type: "POST",
        success:function(Response){
          var result = JSON.parse(Response);
          if(result === "UnSuccessful Login , Details must be wrong"){
          $('#messages').html(result);
          }
          else{

            console.log(result);
            $('#messages').html(result.Name);
          }
        }
      });
    }
  });
});
