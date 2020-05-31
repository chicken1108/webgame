@extends('layouts.main')

@section('title','Lịch sử giao dịch')
@section('style')
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 20%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  overflow-y: auto;
  overflow-x: auto;
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 80%;
  border-left: none;
}
.info-acc div{
  overflow-y: auto;
  margin-top: 10px;
  margin-left: 100px;
  padding: 5px;
  width: 500px;
}
.err{
  margin-top: 5px;
  margin-left: 450px;
  width: 500px;
}
</style>
@section('link')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
@section('main')
<div id="main-content-wp" class="checkout-page">
    <div class="err" align="center">
    </div>
    <div id="wrapper" class="wp-inner clearfix" style="margin-bottom: 100px; background-color: white;">
      <div class="tab">
        <button><i class="fas fa-user"></i> {{Auth::user()->username}}</button>
        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Lịch sử nạp tiền
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Lịch sử mua hàng</button>
      </div>

      <div id="London" class="tabcontent">
        <form action="{{route('updateinfo')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="info-acc">
           <table class="table list-table-wp">
          <thead>
            <tr>
              <td><span class="thead-text"><b>Mã giao dịch</b></span></td>
               <td><span class="thead-text"><b>Nội dung</b></span></td>
              <td><span class="thead-text"><b>Số tiền</b></span></td>
             
              <td><span class="thead-text"><b>Hình thức</b></span></td>
              <td><span class="thead-text"><b>Ngày giao dịch</b></span></td>
            </tr>
          </thead>
          <tbody>
            @foreach($transactions as $value)
            <tr>
                <td><span class="tbody-text">{{$value->transaction_code}}</h3></span></td>
                <td><span class="tbody-text">{{$value->desc}}</h3></span></td>
                <td><span class="tbody-text">{{number_format($value->amount,0,'','.')}} vnđ</h3></span></td>
                <td><span class="tbody-text">{{$value->condition}}</h3></span></td>
                <td><span class="tbody-text">{{$value->created_at}}</h3></span></td>
            </tr>
            @endforeach
              </tbody>
              </table>
            </div>
      </div>

      <div id="Tokyo" class="tabcontent">
        <div class="info-acc">
          <table class="table list-table-wp">
            <thead>
              <tr>
                <td><span class="thead-text"><b>ID</b></span></td>
                <td><span class="thead-text"><b>Tên SP</b></span></td>            
                <td><span class="thead-text"><b>Số lượng</b></span></td>
                <td><span class="thead-text"><b>Tổng giá</b></span></td>
                <td><span class="thead-text"><b>Mã code</b></span></td>
                <td><span class="thead-text"><b>Ngày giao dịch</b></span></td>
              </tr>
            </thead>
            <tbody>
              @foreach($product_bought as $pb)
              <tr>
                <td><span class="tbody-text">{{$pb->id}}</h3></span></td>

                <td>
                  <?php $product = json_decode($pb->product); ?>
                  @foreach($product as $item)           
                      <span class="tbody-text">{{$item}}</h3></span>
                       <hr>       
                  @endforeach
                </td>

                 <td>
                  <?php $quantity = json_decode($pb->quantity); 
                    ?>
                  @foreach($quantity as $item)           
                      <span class="tbody-text">{{$item}}</h3></span>
                       <hr>       
                  @endforeach
                </td>
                <td><span class="tbody-text">{{number_format($pb->total,0,'','.')}} vnđ</h3></span></td>

                 <td>
              <?php $code = json_decode($pb->code); ?>
                  @foreach($code as $key => $value)
                    @foreach($value as $item)
                    <span class="tbody-text">{{$item->code}}</h3></span>
                    <br>
                    @endforeach
                      <hr>
                  @endforeach
                </td>
                  
                   <td><span class="tbody-text">{{$pb->created_at}}</h3></span></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
@section('script')
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
@endsection
