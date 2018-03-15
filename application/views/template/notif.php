<?php
if (isset($_GET['msg'])) {
 ?>
<script type="text/javascript">
swal({
  title: "<?php echo hex2bin($_GET['msg']); ?>",
  text: "Data Tersimpan.",
  showConfirmButton: true,
  type: 'success'
});
</script>

<?php }  ?>
