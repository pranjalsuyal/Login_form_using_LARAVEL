<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    </head>
    <body>


    <form class="ui form"  method="post" action="/loginme" id="login-form">
      <input type="hidden" name="_token" value="{{csrf_token()}}" id="csrf">
      <div class="field">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Username" id="username" >
      </div>
      <div class="field">
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" id="password" >
      </div>
      <button class="ui button" type="submit" name="login" value="Login">Submit</button>
    </form>
    <h1>Name:</h1><h1 id='messages'></h1>

    </div>
    </body>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous">
    </script>
    <script src="js/post.js" type="text/javascript"></script>


</html>
