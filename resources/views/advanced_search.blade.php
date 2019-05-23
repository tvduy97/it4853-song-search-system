@extends('layouts.main')
@section('content')
<div class="container-fluid">
      <div class="s01">
        <form method="get" action="{{ route('advance.search') }}">
          <fieldset>
            <legend style="text-shadow: 5px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;">Tìm Kiếm Bài Hát</legend>
          </fieldset>
          <div class="inner-form" style="padding-bottom: 24px;">
            <div class="container">
              <div class="row">
                <div class="input-field first-wrap col-sm-8" style="margin-right: 0px;">
                  <input name="title" value="{{ isset($title)?$title:'' }}" class="form-control" type="text" placeholder="Bạn muốn tìm gì ?" style="width: 100%;">
                </div>
                <div class="col-sm-4" style="margin-top: 7px;">
                  <div class="checkbox">
                    <label style="font-size: 2em; color: white;">
                        <input name="checkTitle" type="checkbox" value="check" {{ (isset($checkTitle) && $checkTitle) ? 'checked':'' }}>
                        <span class="cr" style="color: white;"><i class="cr-icon fa fa-check"></i></span>
                        Tên Bài Hát
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="input-field first-wrap col-sm-8" style="margin-right: 0px;">
                  <input name="singer" value="{{ isset($singer)?$singer:'' }}" class="form-control" type="text" placeholder="Bạn muốn tìm gì ?" style="width: 100%;">
                </div>
                <div class="col-sm-4" style="margin-top: 7px;">
                  <div class="checkbox">
                      <label style="font-size: 2em; color: white;">
                        <input name="checkSinger" type="checkbox" value="check" {{ isset($checkSinger) && $checkSinger ? 'checked':'' }}>
                        <span class="cr" style="color: white;"><i class="cr-icon fa fa-check"></i></span>
                        Ca Sĩ
                      </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="input-field first-wrap col-sm-8" style="margin-right: 0px;">
                  <input name="lyric" value="{{ isset($lyric)?$lyric:'' }}" class="form-control" type="text" placeholder="Bạn muốn tìm gì ?" style="width: 100%;">
                </div>
                <div class="col-sm-4" style="margin-top: 7px;">
                  <div class="checkbox">
                      <label style="font-size: 2em; color: white;">
                        <input name="checkLyric" type="checkbox" value="check" {{ isset($checkLyric) && $checkLyric ? 'checked':'' }}>
                        <span class="cr" style="color: white;"><i class="cr-icon fa fa-check"></i></span>
                        Lời Bài Hát
                      </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="input-field third-wrap" style="margin-left: 16px;">
                  <button class="btn-search" type="submit">Tìm Kiếm</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection