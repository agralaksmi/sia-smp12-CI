<table class="table table-hover table-bordered table-responsive">
  <thead>
    <tr class="bg-blue" align="center">
      <th>No</th>
      <th>Nama Siswa</th>
      <th>Nilai Praktek</th>
      <th>Nilai Folio</th>
      <th>Nilai Proyek</th>
      <th>Nilai Akhir</th>
      <th>Predikat</th>
      <th>Deskripsi Mata Pelajaran</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no =1; foreach ($tb_detail_ketrampilan as $input_detail_ketrampilan):?>
      <tr>
        <td><?php echo @$no++ ?></td>
        <td><?php echo @$input_detail_ketrampilan->nama_siswa?></td>
        <td><span class='span-nilai_praktek caption' data-id='<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>'><?php echo $input_detail_ketrampilan->nilai_praktek?></span> <input style="display:none;width:50px" type='text' class='field-nilai_praktek form-control editor' value='<?php echo $input_detail_ketrampilan->nilai_praktek?>' data-id='<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>' /></td>
        <td><span class='span-nilai_folio caption' data-id='<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>'><?php echo $input_detail_ketrampilan->nilai_folio?></span> <input style="display:none;width:50px" type='text' class='field-nilai_folio form-control editor' value='<?php echo $input_detail_ketrampilan->nilai_folio?>' data-id='<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>' /></td>
        <td><span class='span-nilai_proyek caption' data-id='<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>'><?php echo $input_detail_ketrampilan->nilai_proyek?></span> <input style="display:none;width:50px" type='text' class='field-nilai_proyek form-control editor' value='<?php echo $input_detail_ketrampilan->nilai_proyek?>' data-id='<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>' /></td>
        <td><span class='span-nilai_akhir caption' data-id='<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>'><?php echo $input_detail_ketrampilan->nilai_akhir?></span> <input style="display:none;width:50px" type='text' class='field-nilai_akhir form-control editor' value='<?php echo $input_detail_ketrampilan->nilai_akhir?>' data-id='<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>' /></td>
        <td><?php echo @$input_detail_ketrampilan->nilai?></td>
        <td><?php echo @$input_detail_ketrampilan->deskripsi?></td>
        <td>
          <form class="" action="<?php echo base_url('admin/delete_detail_ketrampilan') ?>" method="post">
            <input type="hidden" name="id_detail_ketrampilan" value="<?php echo @$input_detail_ketrampilan->id_detail_ketrampilan; ?>">
              <!-- Kelima-->
              <!-- <button type="button" class="btn btn-warning" onclick="edit_detail_ketrampilan('<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>')">
                <i class="fa fa-edit"></i>
              </button> -->
              <button type="submit" class="btn btn-danger" name="delete_detail_ketrampilan" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
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
    if(target.is(".field-nilai_praktek")){
    data.modul="nilai_praktek";
    }
    if(target.is(".field-nilai_folio")){
    data.modul="nilai_folio";
  }if(target.is(".field-nilai_proyek")){
    data.modul="nilai_proyek";
    }if(target.is(".field-nilai_akhir")){
    data.modul="nilai_akhir";
    }

  $.ajax({
    data:data,
    url:"<?php echo base_url('kurikulum/update_detail_ketrampilan'); ?>",
    success: function(a){
     target.hide();
     target.siblings("span[class~='caption']").html(value).fadeIn();
     //window.location.reload();
     $.ajax({
       url:"<?php echo base_url('kurikulum/data_detail_ketrampilan'); ?>",
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
