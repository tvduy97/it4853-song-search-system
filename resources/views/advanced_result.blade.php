@extends('layouts.main')
@section('content')
<div class="container">
      <div class="row">
        <div class="s01-result" style="width: 100%;">
          <form>
            <div class="inner-form" style="padding-bottom: 24px;">
              <div class="container">
                <div class="row">
                  <div class="input-field first-wrap col-sm-8" style="margin-right: 0px;">
                    <input class="form-control" type="text" placeholder="Bạn muốn tìm gì ?" style="width: 100%;">
                  </div>
                  <div class="col-sm-4" style="margin-top: 7px;">
                    <div class="checkbox">
                      <label class="song-field">
                          <input type="checkbox" value="" checked>
                          <span class="cr" style="color: white;"><i class="cr-icon fa fa-check"></i></span>
                          Tên Bài Hát
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field first-wrap col-sm-8" style="margin-right: 0px;">
                    <input class="form-control" type="text" placeholder="Bạn muốn tìm gì ?" style="width: 100%;">
                  </div>
                  <div class="col-sm-4" style="margin-top: 7px;">
                    <div class="checkbox">
                        <label class="song-field">
                          <input type="checkbox" value="" checked>
                          <span class="cr" style="color: white;"><i class="cr-icon fa fa-check"></i></span>
                          Ca Sĩ
                        </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field first-wrap col-sm-8" style="margin-right: 0px;">
                    <input class="form-control" type="text" placeholder="Bạn muốn tìm gì ?" style="width: 100%;">
                  </div>
                  <div class="col-sm-4" style="margin-top: 7px;">
                    <div class="checkbox">
                        <label class="song-field">
                          <input type="checkbox" value="" checked>
                          <span class="cr" style="color: white;"><i class="cr-icon fa fa-check"></i></span>
                          Lời Bài Hát
                        </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field third-wrap" style="margin-left: 16px;">
                    <button class="btn-search" type="button">Tìm Kiếm</button>
                  </div>
                </div>
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