 <!-- Main content -->
 <section class="content">
 <?php
 include "../config/koneksi.php";
if($_GET['page']=='home')
{
?>
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"> crud</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
 <p> Assalamu'alaikum Warahmatullahi Wabarakatuh 

<p>Selamat siang kawan-kawan 
<p>Sehubung akan di laksanakan acara silaturahmi, yaitu Bukber maka di harapkan untuk kehadiran kawan² 🙌🏻, pada:

<p>Hari/Tanggal: Sabtu, 30 Maret 2024
<p>Waktu :  14:00 - Selesai WITA
<p>Tempat: Rumah Faraz
<p>Dress Code: Bebas Pantas

<p>Sekian, Terimakasih🙏🏻✨

 <p>Wassalamu'alaikum Warahmatullahi Wabaratuh
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    by 
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
<?php
}
else if($_GET['page']=='jurusan') 
{
?>
<h2>data jurusan</h2>
  <div class="card">
  <div class="card-header">
    <h3 class="card-title"> jurusan</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <?php
  $hasil=$db->query("
select id_jurusan, nama_jurusan, visi, misi 
from jurusan
");
if (!$hasil)
echo "ada masalah ".$db->error;
?>
<table id="example1" id="example2" class="table table-bordered table-hover">
<thead>
    <tr>
      <th>id jurusan</th>
      <th>nama jurusan</th>
      <th>visi</th>
      <th>misi</th>
</tr>
</thead>
<tbody>
<?php
while ( $d = $hasil->fetch_assoc())
{
?>
<tr>
    <td> <?php  echo $d['id_jurusan']; ?> </td>
    <td> <?php  echo $d['nama_jurusan']; ?> </td>
    <td> <?php  echo $d['visi']; ?> </td>
    <td> <?php  echo $d['misi']; ?> </td>
</tr>
<?php
}
?>
</tbody>
</table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    by anu
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
<?php
}
else if($_GET['page']=='prodi') 
{
?>
<h2>data prodi</h2>
<div class="card">
  <div class="card-header">
    <h3 class="card-title"> data prodi</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <?php
  $hasil=$db->query("
select id_prodi, nama_prodi, tgl_berdiri, ket
from prodi_2034
");
if (!$hasil)
echo "ada masalah ".$db->error;
?>
<table id="example1" id="example2" class="table table-bordered table-hover">
<thead>
    <tr>
      <th>id prodi</th>
      <th>nama prodi</th>
      <th>tgl berdiri</th>
      <th>ket</th>
</tr>
</thead>
<tbody>
<?php
while ( $d = $hasil->fetch_assoc())
{
?>
<tr>
    <td> <?php  echo $d['id_prodi']; ?> </td>
    <td> <?php  echo $d['nama_prodi']; ?> </td>
    <td> <?php  echo $d['tgl_berdiri']; ?> </td>
    <td> <?php  echo $d['ket']; ?> </td>
</tr>
<?php
}
?>
<tbody>
</table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    by anu
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
<?php
}
else if($_GET['page']=='laboratorium') 
{
?>
<h2>data lab</h2>
<div class="card">
  <div class="card-header">
    <h3 class="card-title"> laboratorium</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <?php
  $hasil=$db->query("
select id_lab, id_jurusan, nama_lab, deskripsi
from laboratorium
");
if (!$hasil)
echo "ada masalah ".$db->error;
?>
<table id="example1" id="example2" class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>id lab</th>
      <th>id jurusan</th>
      <th>nama lab</th>
</tr>
</thead>
<tbody>
<?php
while ( $d = $hasil->fetch_assoc())
{
?>
<tr>
    <td> <?php  echo $d['id_lab']; ?> </td>
    <td> <?php  echo $d['id_jurusan']; ?> </td>
    <td> <?php  echo $d['nama_lab']; ?> </td>
</tr>
<?php
}
?>
</tbody>
</table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    by sianu
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
}