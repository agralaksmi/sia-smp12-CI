<table id="table-data" class="table table-hover table-bordered table-responsive">
  <thead>
    <tr class="bg-blue" align="center">
      <th>No</th>
      <th>Nama Siswa</th>
      <th>T1</th>
      <th>T2</th>
      <th>T3</th>
      <th>T4</th>
      <th>UTS</th>
      <th>UAS</th>
      <th>Hasil Akhir</th>
      <th>Predikat</th>
      <th>Deskripsi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no =1; foreach ($tb_detail_pengetahuan as $input_detail_pengetahuan):?>
      <tr data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>'>
        <td><?php echo $no++ ?></td>

        <!-- <td data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>'><?php echo $input_detail_pengetahuan->nama_guru?></td>
        <td><?php echo $input_detail_pengetahuan->nama_mapel?></td>
        <td><?php echo $input_detail_pengetahuan->tingkat?><?php echo $input_detail_pengetahuan->nama_kelas?></td> -->
        <td><?php echo $input_detail_pengetahuan->nama_siswa?></td>
        <td ><span class='span-tugas1 caption' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>'><?php echo $input_detail_pengetahuan->tugas1?></span> <input style="display:none;width:50px" type='text' class='field-tugas1 form-control editor' value='<?php echo $input_detail_pengetahuan->tugas1?>' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>' /></td>
        <td><span class='span-tugas2 caption' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>'><?php echo $input_detail_pengetahuan->tugas2?></span> <input style="display:none;width:50px" type='text' class='field-tugas2 form-control editor' value='<?php echo $input_detail_pengetahuan->tugas2?>' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>' /></td>
        <td><span class='span-tugas3 caption' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>'><?php echo $input_detail_pengetahuan->tugas3?></span> <input style="display:none;width:50px" type='text' class='field-tugas3 form-control editor' value='<?php echo $input_detail_pengetahuan->tugas3?>' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>' /></td>
        <td><span class='span-tugas4 caption' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>'><?php echo $input_detail_pengetahuan->tugas4?></span> <input style="display:none;width:50px" type='text' class='field-tugas4 form-control editor' value='<?php echo $input_detail_pengetahuan->tugas4?>' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>' /></td>
        <td><span class='span-uts caption' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>'><?php echo $input_detail_pengetahuan->uts?></span> <input style="display:none;width:50px" type='text' class='field-uts form-control editor' value='<?php echo $input_detail_pengetahuan->uts?>' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>' /></td>
        <td><span class='span-uas caption' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>'><?php echo $input_detail_pengetahuan->uas?></span> <input style="display:none;width:50px" type='text' class='field-uas form-control editor' value='<?php echo $input_detail_pengetahuan->uas?>' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>' /></td>
        <td><span class='span-ulangan_harian caption' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>'><?php echo $input_detail_pengetahuan->ulangan_harian?></span> <input style="display:none" type='text' class='field-ulangan_harian form-control editor' value='<?php echo $input_detail_pengetahuan->ulangan_harian?>' data-id='<?php echo $input_detail_pengetahuan->id_detail_pengetahuan; ?>' /></td>
        <td><?php echo $input_detail_pengetahuan->nilai?></td>
        <td><?php echo $input_detail_pengetahuan->deskripsi?></td>
        <td>
          <form class="" action="<?php echo base_url('admin/delete_detail_pengetahuan') ?>" method="post">
            <input type="hidden" name="id_detail_pengetahuan" value="<?php echo @$input_detail_pengetahuan->id_detail_pengetahuan; ?>">
              <!-- Kelima-->
              <!-- <button type="button" class="btn btn-warning" onclick="edit_detail_pengetahuan('<?php echo @$input_detail_pengetahuan->id_detail_pengetahuan; ?>')">
                <i class="fa fa-edit"></i>
              </button> -->
              <button type="submit" class="btn btn-danger" name="delete_detail_pengetahuan" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
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
var id_mapel = document.getElementById('id_mapel').value;
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
if(target.is(".field-tugas1")){
data.modul="tugas1";
}
if(target.is(".field-tugas2")){
data.modul="tugas2";
}if(target.is(".field-tugas3")){
data.modul="tugas3";
}if(target.is(".field-tugas4")){
data.modul="tugas4";
}
if(target.is(".field-uts")){
data.modul="uts";
}
if(target.is(".field-uas")){
data.modul="uas";
}
if(target.is(".field-ulangan_harian")){
data.modul="ulangan_harian";
}


$.ajax({
	data:data,
	url:"<?php echo base_url('kurikulum/update_detail_pengetahuan'); ?>",
	success: function(a){
	 target.hide();
	 target.siblings("span[class~='caption']").html(value).fadeIn();
   //window.location.reload();
   $.ajax({
     url:"<?php echo base_url('kurikulum/data_detail_pengetahuan'); ?>",
     type:"POST",
     data: {
       id_kelas : id_kelas,
       id_mapel : id_mapel
     },
     dataType:"JSON",
     beforeSend: function(){
          $(".overlay").show();
          document.getElementById("datanya").innerHTML = "";
      },
     success:function(response){
       $(".overlay").hide();
       console.log(response);
       $("#datanya").html(response.content);
     }
   })
	}
})

}

});

});

</script>
