<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Data</title>
	<meta charset="UTF-8">
	@include('inc.link')
	<meta name="viewport" content="width=device-width, initial-scale=1">
  @include('inc.header')
			
			
  <div class="container bg-dark h">
            <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
								<div class="main-card col-md-10 card ">
                   <div class="card-body m-9 ">
                                        <h2 class="card-title">FORM TAMBAH DATA KEMATIAN</h5>
                                       
                                        <form action="{{route('kmt.store')}}" method="POST" class="ftb mt-20" style="">    
                                        {{ csrf_field() }}                                
                                        <div class="position-relative row form-group"><label for="" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                        <select name="id_diri" id="select" class="form-control">
                                          <option value="">-Pilih-</option>
                                        @foreach($penduduk as $p)
                                          <option value="{{$p->id}}" >{{$p->nama}}</option>
                                          @endforeach
                                        </select>
                                        </div></div>
                                        @foreach($kematians as $km)
                                        <p  href="{{route('kmt.destroy',$km->id_diri)}}">
                                        @endforeach
                                            <div class="position-relative row form-group"><label for="tgl" class="col-sm-3 col-form-label">Tanggal Kematian</label>
                                            <div class="col-sm-9 "><input  class="form-control" type="date" id="start" name="tgl"
                                                value=" "
                                                min="1940-01-01" max="2019-12-31" style="" required></div> </div>
                                              <div class="position-relative row form-group"><label for="" class="col-sm-3 col-form-label">Tempat Terjadi</label>
                                                <div class="col-sm-9"><input name="tempat" id="example" placeholder="" type="text" class="form-control" required></div>
									                          	</div>
                                              <div class="position-relative row form-group"><label for="" class="col-sm-3 col-form-label">Penyebab</label>
                                                <div class="col-sm-9"><input name="penyebab" id="example" placeholder="" type="text" class="form-control" required></div>
									                          	</div>
                                              <div class="position-relative row form-group"><label for="" class="col-sm-3 col-form-label">Tempat Makam</label>
                                                <div class="col-sm-9"><input name="makam" id="example" placeholder="" type="text" class="form-control" required></div>
									                          	</div>
                                              <div class="position-relative row form-group"><label for="" class="col-sm-3 col-form-label">Pelapor</label>
                                                <div class="col-sm-9"><input name="pelapor" id="example" placeholder="" type="text" class="form-control" required></div>
									                          	</div>

                                              <div class="position-relative row form-check">								
												                      <button type="submit"   class="btn btn-primary btn-sm  " style="background-color: rgb(41, 73, 128) ,float:right">
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