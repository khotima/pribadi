<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Data</title>
	<meta charset="UTF-8">
	@include('inc.link')
	<meta name="viewport" content="width=device-width, initial-scale=1">
  @include('inc.header')
<form action="/klh/store" method="POST">
			{{ csrf_field() }}
			
          <div class="container bg-dark h">
              <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
								<div class="main-card col-md-10 card ">
                                    <div class="card-body m-9 ">
                                        <h2 class="card-title">FORM TAMBAH DATA KELAHIRAN</h5>
                                       
                                        <form action="/klh/store" method="POST" class="ftb mt-20" style="">                                    
                                        <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                        <select name="id_diri" id="select" class="form-control">
                                          <option value="">-Pilihan-</option>
                                          @foreach($penduduk as $p)
                                          <option value="{{$p->id}}">{{$p->nik}}</option>
                                          @endforeach
                                        </select>
                                        </div>
                                            </div>
                                                <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">No Akta</label>
                                                <div class="col-sm-10"><input name="akta" id="example" placeholder="" type="text" class="form-control" required></div>
											                      </div>

                                            <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10"><input name="nama" id="example" placeholder="" type="text" class="form-control" value=""></div>
											                      </div>
                                            <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-10"><input name="tempat_lahir" id="example" placeholder="" type="text" class="form-control" value=""></div>
											                      </div>
                                            <div class="position-relative row form-group"><label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10 "><input  class="form-control" type="date" id="start" name="tgl_lahir"
                                                value=" "
                                                min="1940-01-01" max="2019-12-31" style="" required></div> </div>
                                              <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">JK</label>
										  	                      <div class="col-sm-10">
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="jk" type="radio" class="form-check-input" value="Laki-laki" >L</label></div>
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="jk" type="radio" class="form-check-input" value="Perempuan" > P</label></div>
                                                     </div></div>
                                            <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">Anak Urutan Ke</label>
                                                <div class="col-sm-10"><input name="anak_ke" id="example" placeholder="" type="text" class="form-control" required></div>
											                        </div>
                                              <div class="position-relative row form-check">										
												                      <button type="submit" class="btn btn-primary btn-sm  " style="background-color: rgb(41, 73, 128) ,float:right">
                                                       Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm" style="background-color: rgb(146, 24, 24) ">
                                                       Reset
                                                    </button>
                                        </div>
                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  @include('inc.footer')
  <!-- <script>
  function buttonCari(){
    var nik = document.getElementByName("id_diri").value/; 
    alert(nik)
  }
  $(document).ready(function() {
    // $(".cari").click(function(){
    //   alert("aaa")			return false;
		// });
  })
  </script> -->