<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>auto config hmail.app </title>
</head>

<style>
    body {
        padding:1rem;
    }
    form {
        width:500px;
        margin:0 auto;
    }
</style>

<body>
  <noscript>
    <strong>We're sorry but <%= htmlWebpackPlugin.options.title %> doesn't work properly without JavaScript enabled.
        Please enable it to continue.</strong>
  </noscript>
  <div id="app">
    
    <form action="/autoconfig.php" method="post" class="form-example">
    <h1>hmail.app config tool for iphone devises  </h1>
  <div class="form-example">
    <label for="name">Enter your hmail address : </label>
    <input type="text" name="email" required>
  </div>
  <div class="form-example">
    <label for="email">Enter your hmail password: </label>
    <input type="password" name="password"  required>
  </div>
  <div class="form-example">
    <input type="submit" value="download .mobileconfig">
  </div>
<div style='margin-top:5rem;height: 20px;width: 100%;'>
  Created By <a href='https://www.hnsfans.com?utm_source=612&utm_medium=volunteers&utm_campaign=01'>hnsfans</a>
</div>
</form>

    </div>



</body>

</html>
