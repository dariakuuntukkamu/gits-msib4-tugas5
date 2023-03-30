@extends('app')
@section('content')


<form action="{{url('/api/product')}}" method="POST">
  <br><br><br><br>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Product</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name">
      <div id="emailHelp" class="form-text">Nama product tidak boleh lebih dari 200</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="product_description">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kategori ID</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="category_id">
        <div id="emailHelp" class="form-text">Untuk ID Makanan 1 dan Minuman 2</div>
      </div>
    <button type="submit" class="btn btn-primary">Pesan</button>
    
  </form>
@endsection