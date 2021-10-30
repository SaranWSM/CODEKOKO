<?php $session = session(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-navbar">
  <a class="nav-link nav-home" href="/Home">หน้าหลัก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <?php $checkname = $session->get('name');
    if(isset($checkname)) { ?>
        <a class="nav-link" href="/result">ผลการลงทะเบียน</a>
        <a class="nav-link" href="/adddata">กรอกแบบฟอร์ม</a>
    <?php }else{ ?>
      <a class="nav-link" onclick="alertmsg();" style="cursor: pointer;">ผลการลงทะเบียน</a>
        <a class="nav-link" onclick="alertmsg();" style="cursor: pointer;">กรอกแบบฟอร์ม</a>
      <?php } ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php
      if(isset($checkname)) {?>
        <a href="/username" class="pr-4" style="color:black; text-decoration:none;"><?php echo $session->get('name')?></a>
        <a href="/Logout/logout" class="btn btn-outline-light my-2 my-sm-0">ออกจากระบบ</a>
      <?php }else { ?>
        <a href="/login" class="btn btn-outline-light my-2 my-sm-0 mr-3">เข้าสู่ระบบ</a>
        <a href="/register" class="btn btn-outline-light my-2 my-sm-0">สมัครสมาชิก</a>
      <?php } ?>
    </form>
  </div>
</nav>
<script>
  function alertmsg() {
    alert("โปรดลงชื่อเข้าใช้ เพื่อกรอกแบบฟอร์มลงทะเบียนวิ่ง");
  }
</script>