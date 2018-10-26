<html>
<head>
  <title>Database</title>
  <link rel="stylesheet" href="salon.css">
</head>
<body>

  <div class="container">
    <h2><center>DATA PESERTA</center></h2>
    <table class="tabel" align="center">
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Fullname</th>
    <th>Aksi</th>
  </tr></div>
  <?php
  include('koneksi.php');
  $sql_tampil ="SELECT * FROM tabel_kelas";
  $peserta=mysqli_query($conn,$sql_tampil);
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    ?>
    <tr>
      <td><?php echo $baris_data['id']; ?></td>
      <td><?php echo $baris_data['username']; ?></td>
      <td><?php echo $baris_data['password']; ?></td>
      <td><?php echo $baris_data['level']; ?></td>
      <td><?php echo $baris_data['fullname']; ?></td>
      <td>
      <a class="edit" href="edit.php?id=<?php echo $baris_data['Id']; ?>">Edit</a> |
      <a class="hapus" href="delete.php?id=<?php echo $baris_data['Id']; ?>">Hapus</a>
      </td>
    </tr>
<?php } ?>
</body>
</html>