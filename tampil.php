<?php 
include 'koneksi.php';

$tangkap = mysqli_query($db,"SELECT * FROM user order by id desc");

?>
<?php foreach($tangkap as $t): ?>
    <div class="box" style="margin-bottom: 30px;">
            <div class="ces kiri">
                 <i class="bi bi-chat-left-heart"></i>
            </div>
            <div class="ces">
                    <strong><?php echo $t['name'] ?></strong> <span><i class="bi bi-check"></i> <?php echo $t['hadir'] ?></span>
                    <p><?php echo $t['komentar'] ?></p>
                </div>
          </div>
  <?php endforeach; ?>
