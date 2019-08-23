<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <style>
        .error{
          border: 1px solid red !important;
        }
        </style>
    </head>
    <body>


    <form class="ui form"  method="post" action="/loginme" id="login-form">
      <input type="hidden" name="_token" value="{{csrf_token()}}" id="csrf">
      <div class="field" id="userwrap">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Username" id="username" >
      </div>
      <div class="field" id="passwordwrap">
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" id="password" >
      </div>
      <button class="ui button" type="submit" name="login" value="Login">Submit</button>
    </form>
    <p id='messages'></p>

    </div>
    </body>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"
      type="text/javascript">
    </script>
    <script src="js/post.js" type="text/javascript"></script>


</html>
