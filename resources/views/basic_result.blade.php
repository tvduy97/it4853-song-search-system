@extends('layouts.main')
@section('content')
<div class="container">
      <div class="row">
        <div class="s01-result" style="width: 100%;">
          <form method="get" action="{{ route('basic.search') }}">
            <div class="inner-form">
              <div class="input-field first-wrap" style="margin-right: -9%;">
                @include('components.basic_input')
              </div>
              <div class="input-field second-wrap" style="margin-right: -10%;">
                @include('components.basic_filter')
              </div>
              <div class="input-field third-wrap">
                @include('components.basic_btn_search')
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
