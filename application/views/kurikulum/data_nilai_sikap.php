<table class="table table-hover table-bordered table-responsive">
  <thead>
    <tr class="bg-blue" align="center">
      <th>No</th>
      <th>Wali Kelas</th>
      <th>Kelas</th>
      <th>Nama Siswa</th>
      <th>Jenis Sikap</th>
      <th>Nilai</th>
      <th>Deskripsi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no =1; foreach ($tb_nilai_sikap as $input_nilai_sikap):?>
      <tr>
        <td><?php echo @$input_nilai_sikap->id_nilai_sikap ?></td>
        <td><?php echo @$input_nilai_sikap->nama_guru?></td>
        <td><?php echo @$input_nilai_sikap->tingkat?><?php echo @$input_nilai_sikap->nama_kelas?></td>
        <td><?php echo @$input_nilai_sikap->nama_siswa?></td>
        <td><?php echo @$input_nilai_sikap->jenis_deskripsi_sikap?></td>
        <!-- <td><?php echo $input_nilai_sikap->nilai_akhir?></td> -->
        <td><span class='span-nilai caption' data-id='<?php echo $input_nilai_sikap->id_nilai_sikap; ?>'>
          <?php echo $input_nilai_sikap->nilai_akhir?></span>
          <input style="display:none;width:50px" type='text' class='field-nilai form-control editor' value='<?php echo $input_nilai_sikap->nilai_akhir?>' data-id='<?php echo $input_nilai_sikap->id_nilai_sikap; ?>' /></td>
        <td><?php echo @$input_nilai_sikap->deskripsi?></td>
        <td>
          <form class="" action="<?php echo base_url('admin/delete_nilai_sikap') ?>" method="post">
            <!-- Kelima-->
            <!-- <button type="button" class="btn btn-warning" onclick="edit_nilai_sikap('<?php echo $input_nilai_sikap->id_nilai_sikap; ?>')">
              <i class="fa fa-edit"></i>
            </button> -->
            <input type="hidden" name="id_nilai_sikap" value="<?php echo $input_nilai_sikap->id_nilai_sikap; ?>">
            <button type="submit" class="btn btn-danger" name="delete_nilai_sikap" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
              <i class="fa fa-trash-o"></i>
            </button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php $this->load->view('template/javascript') ?>
<script type="text/javascript">
var id_kelas = document.getElementById('id_kelas').value;
var jenis_deskripsi_sikap = document.getElementById('jenis_deskripsi_sikap').value;
$(function(){
$.ajaxSetup({
	type:"post",
	cache:false,
	dataType: "json"
})
$(document).on("click","td",function(){
$(this).find("span[class~='caption']").hide();
$(this).find("input[class~='editor']").fadeIn().focus();
});

$(document).on("keydown",".editor",function(e){
if(e.keyCode==13){
var target=$(e.target);
var value=target.val();
var id=target.attr("data-id");
var data={id:id,value:value};
if(target.is(".field-nilai")){
data.modul="nilai_akhir";
}

// $.ajax({
// 	data:data,
// 	url:"<?php echo base_url('kurikulum/update_nilai_sikap'); ?>",
// 	success: function(a){
// 	 target.hide();
// 	 target.siblings("span[class~='caption']").html(value).fadeIn();
//    console.log(data);
//    //window.location.reload();
// 	}
// })

$.ajax({
    type: "POST",
    url: "<?php echo base_url('kurikulum/update_nilai_sikap');?>",
    data: data,
    success: function(msg) {
    	 target.hide();
    	 target.siblings("span[class~='caption']").html(value).fadeIn();
       //console.log(msg);
       //window.location.reload();
       $.ajax({
         url:"<?php echo base_url('kurikulum/data_nilai_sikap'); ?>",
         type:"POST",
         data: {
           id_kelas : '<?php echo $id_kelas; ?>',
           jenis_deskripsi_sikap : '<?php echo $jenis_deskripsi_sikap; ?>'
         },
         dataType:"JSON",
         beforeSend: function(){
              $(".overlay").show();
              document.getElementById("datanya").innerHTML = "";
          },
         success:function(response){
           console.log(response);
           $(".overlay").hide();
           $("#datanya").html(response.content);
         }
       })
    }
});
}
});
});
</script>
