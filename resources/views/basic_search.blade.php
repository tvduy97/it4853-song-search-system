@extends('layouts.main')

@section('content')
<div class="s01">
  <form method="get" action="{{ route('basic.search') }}">
    <fieldset>
      <legend>Tìm Kiếm Bài Hát</legend>
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