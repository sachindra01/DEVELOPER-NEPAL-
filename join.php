<!DOCTYPE html>
<html>
<head>
  <title></title>


  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="join.css">

</head>
<body>
<div class="body-content">
  <div class="module">
    <h1>Join us</h1>
    <form class="form" action="joindatabase.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="phone" name="phone" autocomplete="new-phone" required/>
      <input type="text" placeholder="address" name="address" autocomplete="new-address" required />
      <!--<div class="avatar"><label>upload cv: </label><input type="file" name="avatar" accept="image/*" required /></div>-->
      <input type="submit" value="send" name="send" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>
</html>


