/*$(function(){
  $('#login-form').submit(function(e){
    e.preventDefault();

      $.ajax({
        type:'POST',
        url:'/loginme',
        data:$(this).serialize(),     /*{
          username:$("#username").val(),
          password:$("#password").val(),
          _token:$("#csrf").val()
        },
        success:function(Response){
          console.log(Response);
        /*  if(Response.replace('"', '').replace('"', '') == "success"){
            window.location.href="/loginme";
          }
       $('#messages').html(Response);
        }
      });

  });
});*/



$(function(){
  $('#login-form').submit(function(e){
    e.preventDefault();
    if($( "#username" ).val().trim()==""){
      alert("Username Field Required");
      e.preventDefault();
    }
    else if($("#password").val().trim()==""){
      alert("Password Field Required");
      e.preventDefault();
    }
    else{
      $.ajax({
        url: "/loginme",
        data: {
          username:$("#username").val(),
          password:$("#password").val(),
          _token:$("#csrf").val()
        },
        type: "POST",
        success:function(Response){
          console.log(Response);
          var result = JSON.parse(Response);
            $('#messages').html(result.Name);
          }
      });
    }
  });
});

/*    .done(function( json ) {
      $( "<h1>" ).text( json.title ).appendTo( "body" );
      $( "<div class=\"content\">").html( json.html ).appendTo( "body" );
    })
      // Code to run if the request fails; the raw request and
      // status codes are passed to the function
    .fail(function( xhr, status, errorThrown ) {
        alert( "Sorry, there was a problem!" );
        console.log( "Error: " + errorThrown );
        console.log( "Status: " + status );
        console.dir( xhr );
    })
      // Code to run regardless of success or failure;
    .always(function( xhr, status ) {
    alert( "The request is complete!" );
  });       */
