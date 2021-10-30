<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/navbar.css'); ?>">
</head>
<body>
<?php 
require('navbar.php'); ?>
<center><br><h2>ผลการลงทะเบียน</h2>
              <div class="container mt-4">
                        <?php 
                        $numItems = count($showregis);
                        $i = 0; 
                        if ($numItems == 0){ ?>
                        <p>ยังว่างๆอยู่นะจ๊ะ</p>
  <?php 
      }else{ ?>
        <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ไอดี</th>
            <th scope="col">รหัสบัตรประชาชน</th>
            <th scope="col">ประเภทกิจกรรม</th>
          </tr>
        </thead>
        <tbody>
          <?php
      foreach ($showregis as $k) {
      ?>
    <tr>
      <td>RUN<?php echo $k['ID']; ?></td>
      <td><?php echo $k['member']; ?></td>
      <?php
      if($k['category_run'] == 1){
        $k['category_run'] = "FUN RUN";
      }
      if($k['category_run'] == 2){
        $k['category_run'] = "MINI MARATHON";
      }
      if($k['category_run'] == 3){
        $k['category_run'] = "VIP";
      }
      if($k['category_run'] == 4){
        $k['category_run'] = "";
      }
      if($k['category_run'] == 5){
        $k['category_run'] = "Super VIP";
      }
      ?>
      <td><?php echo $k['category_run']; ?></td>
    </tr>
    <?php }} ?>
  </tbody>
</table>
</table>

              </div>
            </center>
</body>
</html>