@extends('layouts.main')
@section('content')
<div class="container-fluid">
      <div class="s01">
        <form>
          <fieldset>
            <legend>Tìm Kiếm Bài Hát</legend>
          </fieldset>
          <div class="inner-form" style="padding-bottom: 24px;">
            <div class="container">
              <div class="row">
                <div class="input-field first-wrap col-sm-8" style="margin-right: 0px;">
                  <input class="form-control" type="text" placeholder="Bạn muốn tìm gì ?" style="width: 100%;">
                </div>
                <div class="col-sm-4" style="margin-top: 7px;">
                  <div class="checkbox">
                    <label style="font-size: 2em; color: white;">
                        <input type="checkbox" value="">
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
                      <label style="font-size: 2em; color: white;">
                        <input type="checkbox" value="">
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
                      <label style="font-size: 2em; color: white;">
                        <input type="checkbox" value="">
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
@endsection