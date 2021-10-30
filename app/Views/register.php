<!DOCTYPE html>
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
  <style>
  body{
    background-image: url("https://www.img.in.th/images/e2e5e94872a46f17a9c89df7fbe6e6e2.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
  }
</style>
</head>
<body>
<?php require('navbar.php'); ?>
<div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <h1>ลงทะเบียน</h1>
                    <hr>
                    <?php if(isset($validation)): ?>
                        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                    <?php endif; ?>
                    <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">หมายเลขบัตรประชาชน</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?= set_value('id_card'); ?>" placeholder="ระบุหมายเลขบัตรประชาชน">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">ชื่อ - นามสกุล</label>
                        <input type="text" name="name" class="form-control" id="inputforname" value="<?= set_value('name'); ?>" placeholder="ระบุชื่อจริง และนามสกุล">
                    </div>
                    <div class="mb-3">
                        <label for="inputage" class="form-label">อายุ</label>
                        <input type="text" name="age" class="form-control" id="inputforage" value="<?= set_value('age'); ?>" placeholder="ระบุอายุ">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">ที่อยู่อีเมล</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>" placeholder="ระบุที่อยู่อีเมล">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label">รหัสผ่าน</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword" placeholder="ระบุรหัสผ่าน">
                    </div>
                    <div class="mb-3">
                        <label for="inputconfpassword" class="form-label">ยืนยันรหัสผ่าน</label>
                        <input type="password" name="confpassword" class="form-control" id="inputforconfpassword" placeholder="ระบุรหัสผ่านอีกครั้ง">
                    </div>
                    <center><button type="submit" class="btn btn-success" style="width:100px;">ยืนยัน</button>
                    <a href="/Home.php" class="btn btn-danger me-1" style="width:100px;">ยกเลิก</a></center>
                </form>
                </div>
            </div>
        </div>
</body>
</html>