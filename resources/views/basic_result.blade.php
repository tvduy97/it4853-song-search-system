@extends('layouts.main')
@section('content')
<div class="container">
      <div class="row">
        <div class="s01-result" style="width: 100%;">
          <form>
            <div class="inner-form">
              <div class="input-field first-wrap" style="margin-right: -9%;">
                <input class="form-control" type="text" placeholder="Bạn muốn tìm gì ?">
              </div>
              <div class="input-field second-wrap" style="margin-right: -10%;">
                <select>
                  <option style="border-radius: 25px;">Tất Cả</option>
                  <option>Tên Bài Hát</option>
                  <option>Ca Sĩ</option>
                  <option>Lời Bài Hát</option>
                </select>
              </div>
              <div class="input-field third-wrap">
                <button class="btn-search" type="button">Tìm Kiếm</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="container">
          <h4>Kết Quả Tìm Kiếm: (0.001s)</h4>
          <hr>
          <ul class="list-group">
            <li class="list-group-item">
              <ul class="list-group">
                <h4 class="fix-margin-bottom">Bài Hát:</h4>
                <p class="fix-margin-bottom">Ca Sĩ:</p>
                <p class="fix-margin-bottom">Lời Bài Hát:</p>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group">
                <h4 class="fix-margin-bottom">Bài Hát:</h4>
                <p class="fix-margin-bottom">Ca Sĩ:</p>
                <p class="fix-margin-bottom">Lời Bài Hát:</p>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group">
                <h4 class="fix-margin-bottom">Bài Hát:</h4>
                <p class="fix-margin-bottom">Ca Sĩ:</p>
                <p class="fix-margin-bottom">Lời Bài Hát:</p>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group">
                <h4 class="fix-margin-bottom">Bài Hát:</h4>
                <p class="fix-margin-bottom">Ca Sĩ:</p>
                <p class="fix-margin-bottom">Lời Bài Hát:</p>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group">
                <h4 class="fix-margin-bottom">Bài Hát:</h4>
                <p class="fix-margin-bottom">Ca Sĩ:</p>
                <p class="fix-margin-bottom">Lời Bài Hát:</p>
              </ul>
            </li>
            <li class="list-group-item">
              <ul class="list-group">
                <h4 class="fix-margin-bottom">Bài Hát:</h4>
                <p class="fix-margin-bottom">Ca Sĩ:</p>
                <p class="fix-margin-bottom">Lời Bài Hát:</p>
              </ul>
            </li>
          </ul>
        </div> 
      </div>
      <br>
      <div class="row justify-content-center">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </div>
    </div>
@endsection