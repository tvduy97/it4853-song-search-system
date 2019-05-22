@extends('layouts.main')

@section('content')
<div class="s01">
  <form>
    <fieldset>
      <legend>Tìm Kiếm Bài Hát</legend>
    </fieldset>
    <div class="inner-form">
      <div class="input-field first-wrap">
        <input class="form-control" type="text" placeholder="Bạn muốn tìm gì ?">
      </div>
      <div class="input-field second-wrap">
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
@endsection