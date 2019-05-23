@extends('layouts.main')
@section('content')
<div class="container">
      <div class="row">
        <div class="s01-result" style="width: 100%;">
          <form method="get" action="{{ route('advance.search') }}">
            <div class="inner-form" style="padding-bottom: 24px;">
              <div class="container">
                <div class="row">
                  <div class="input-field first-wrap col-sm-8" style="margin-right: 0px;">
                    <input name="title" value="{{ isset($title)?$title:'' }}" class="form-control" type="text" placeholder="Bạn muốn tìm gì ?" style="width: 100%;">
                  </div>
                  <div class="col-sm-4" style="margin-top: 7px;">
                    <div class="checkbox">
                      <label class="song-field">
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
                        <label class="song-field">
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
                        <label class="song-field">
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
      <div class="row">
        <div class="container">
          @if (count($resultset) > 0)
          <h4>Tìm thấy {{ $numFound}} kết quả trong {{ $queryTime }} s</h4>
            @if ($totalPage > 1)
              <h3>Trang {{ $currentPage }}</h3>
            @endif
          <hr>
          <ul class="list-group">
            @foreach ($resultset as $data)
              <li class="list-group-item">
                <ul class="list-group">
                  <a href="{{ $data->id[0] }}" target="blank" tool>
                    <h4 class="fix-margin-bottom">Bài Hát: {{ $data->title[0] }}</h4>
                  </a>
                  <p class="fix-margin-bottom">Ca Sĩ: {{ $data->singer[0] }}</p>
                  <p class="fix-margin-bottom">Lời Bài Hát:
                    @if (isset($data->lyric))
                      {{$data->lyric[0]}}
                    @else
                      Chưa có lời bài hát
                    @endif
                  </p>
                </ul>
              </li>
            @endforeach
          </ul>
          @else
            Không tìm thấy bài hát nào.
          @endif
        </div> 
      </div>
      <br>
      @include('components.paginate')
    </div>
@endsection