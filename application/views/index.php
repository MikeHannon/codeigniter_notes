<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/materialize.css">
  <script src = "<?php echo asset_url();?>js/jquery-2.1.3.min.js"></script>
  <script src = "<?php echo asset_url();?>js/main.js"></script>
  <script src = "<?php echo asset_url();?>js/materialize.min.js"></script>
  <title>Document</title>
</head>
<body>
  <nav>
    <div class="nav-wrapper blue lighten-2">
      <a href="#" class="brand-logo center ">Notes</a>
    </div>
  </nav>
  <div class = "row" id = "results">
    <!-- PHP INDEX METHOD/PARTIAL INSERTS DATA HERE HERE -->
  </div>
  <div class = "row">
      <div class = "col m6 offset-m3">
        <form id = "create" method = "post" action = "#">
          <label>Title</label><input type = "text" name = "title">
          <button onclick = "create()">add a note </button>
        </form>
    </div>
  </div>

</body>
</html>
