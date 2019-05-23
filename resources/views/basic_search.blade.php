@extends('layouts.main')

@section('content')
<div class="s01">
  <form method="get" action="{{ route('basic.search') }}">
    <fieldset>
      <legend style="text-shadow: 5px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;">Tìm Kiếm Bài Hát</legend>
    </fieldset>
    <div class="inner-form">
      <div class="input-field first-wrap">
        @include('components.basic_input')
      </div>
      <div class="input-field second-wrap">
        @include('components.basic_filter')
      </div>
      <div class="input-field third-wrap">
        @include('components.basic_btn_search')
      </div>
    </div>
  </form>
    </div>
@endsection