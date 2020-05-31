@extends('layouts.main')

@section('title','Thông tin tài khoản')
@section('style')
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
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
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
}
.info-acc div{
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
        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Tài khoản của bạn
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Đổi mật khẩu</button>
        @if(Session::has('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {!!Session::get('success')!!}
            </div>
          @endif
           @if(Session::has('error'))
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {!!Session::get('error')!!}
            </div>
          @endif
      </div>
          
      <div id="London" class="tabcontent">
        <form action="{{route('updateinfo')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="info-acc">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" readonly="" aria-describedby="emailHelp" value="{{Auth::user()->email}}" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->address}}" placeholder="Address">
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->phone}}" placeholder="Phone">
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->full_name}}" placeholder="Name">
            </div>
            <div align="center">
              <input type="submit" class="btn btn-danger" value="Lưu">
            </div>
      </div>
        </form>
      </div>

      <div id="Tokyo" class="tabcontent">
        <div class="info-acc">
          <form action="{{route('changpassword')}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu cũ</label>
                <input type="password" name="oldpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Mật khẩu cũ">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu mới</label>
                <input type="password" name="newpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Mật khẩu mới">
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Nhập lại mật khẩu mới</label>
                <input type="password" name="re-newpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập lại mật khẩu mới">
            </div>
            <div align="center">
              <input type="submit" class="btn btn-danger" value="Thay đổi">
            </div>
            </form>
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
