  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('inc.link')
<body class="bg-dark">
  
<div class="bg-dark flex-wr-sb-c p-rl-20 p-tb-8 ">
    <div class=" col-lg-9  " >
            <div class="container main-card mb-5 card float-center ">
    <div><h3 class="text">Detail Keluarga <button type="export" class="btn btn-primary mb-2 btn-sm float-right" style="background-color: rgb(41, 73, 128) ,float:right">
                CETAK
            </button></h3> 
    
      
        </div>
        <hr>
    
     
          <table>
          @foreach($kk as $kak)    
        <tr>
        <th>No KK</th>
            <td>:</td>
            <td>{{$kak->no_kk}}</td>
            <td>{{$kak->nama}}</td>
            
        <!-- <td class="text-center">{$kak->nama->cout()}</td> -->
</tr>
        @endforeach
<script>
function goBack() {
  window.history.back();
}
</script>

     
      </table>
      <hr>
      <button class="btn btn-success mb-2 btn-sm float-right" onclick="goBack()">Kembali</button>

    </div>
  </div>
</div>
</body>
</html>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
    position: fixed;
	top: 40%;
	left: 50%;
	margin-top: -140px;
	margin-left: -240px;
	text-align: none;
	padding:40px;
	display: table;
    width: 35%;
    max-width: 1000px;
  height: 80%;
/*  
  float: none;
 

  padding: 0 10px; */
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 100%) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
.text{
    font-family:verdana;
    font-size:30px;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 10px;
  background-color: #f1f1f1;
  top: 40%;
	left: 50%;
	margin-top: 100px;
	margin-left: -240px;
	text-align: none;
	padding:40px;
	display: table;
    width: 45%;
}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 10px;
  background-color: white;}

.container{ max-width: 100%;
  margin-left:0px;
  background-color: #f1f1f1;
  position: relative;
  
  
}
</style>
