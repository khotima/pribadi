<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('inc.link')

			
			<div class="container bg-info h">
		    <div class="bg-white flex-wr-sb-c p-rl-20 p-tb-8 ">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
			
                                     <div class="main-card col-md-10 card">
                                    <div class="card-body m-9 ">
                                        <h2 class="card-title">EDIT DATA ANAK</h5>
                                        @foreach($anaks as $an)
                                        <form action="{{ route('ank.update',$an->id)}}" method="post" class="ftb mt-20" style="">
                                        {{ csrf_field() }}
                                        
                                        <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                        <select name="id_diri" id="select" class="form-control">
                                        @foreach($penduduk as $p)                                       
                                       <option value="{{$p->nik}}">-Pilihan-</option>
                                          <option value="{{$p->id}}">{{$p->nik}}</option>
                                          @endforeach
                                        </select>
                                        </div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">No KK</label>
                                        <div class="col-sm-10">
                                            <select name="id_kk" id="select" class="form-control">
                                          <option value="{{$kk->no_kk}}">-Pilihan-</option>
                                          @foreach($kk as $kk)
                                          <option value="{{$kk->id}}">{{$kk->no_kk}}</option>
                                          @endforeach
                                        </select>
                                        </div>
                                        </div>
                                                                           
                                        <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">Status Dalam Keluarga  </label>
                                        <div class="col-sm-10">

                                        <input name="status" id="example" placeholder="" type="text" class="form-control" value="{{$an->status}}" required></div>
										
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
                                        @endforeach
                               </div>
                                </div>
                            </div>
                        </div>
                    </div>