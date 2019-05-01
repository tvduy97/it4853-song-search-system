<!DOCTYPE html>
<html>
<head>
	<title>Find Song</title>
</head>
<body>
	@if ($errors->has('somethng_went_wrong'))
	    <div class="alert alert-danger" role="alert">
	        <strong>{{ $errors->first('somethng_went_wrong') }}</strong>
	    </div>
	@endif
	<form method="get" action="{{ route('search') }}">
		<input type="text" name="q" value="{{ isset($input)?$input:'' }}">
		<input type="submit" value="Search">
	</form>
	@if ($resultset == null)
	@elseif (count($resultset) > 0)
		<div>
			<h2>Tìm thấy {{ $numFound}} kết quả trong {{ $queryTime }} s</h2>
			@if ($totalPage > 1)
				<h3>Trang {{ $currentPage }}</h3>
			@endif
		</div>
	    @foreach ($resultset as $data)
		    <div>
		    	<a href="{{ $data->link[0] }}" target="blank" tool>
		    		<h3>Bài hát: {{ $data->title[0] }}</h3>
		    	</a>
		    	<span><b>Score:</b> {{ $data->score }}</span><br>
		    	<span><b>Ca sĩ:</b> {{ $data->singer[0] }}</span><br>
		    	<span><b>Lời bài hát:</b>
		    		@if (isset($data->lyric))
		    			{{$data->lyric[0]}}
		    		@else
		    			Chưa có lời bài hát
		    		@endif
		    	</span><br>
		    	<hr>
		    </div>
	    @endforeach
	    <div>
	    	@if ($totalPage > 1)
		    <ul class="pagination">
		    	@if ($currentPage == 1)
		    	@else
			    	<li class="{{ ($currentPage == 1) ? ' disabled' : '' }}">
				            <a href="{{ $link.'0' }}">First</a>
			        </li>
		    	@endif
		        @for ($i = 1; $i <= $totalPage; $i++)
		            <?php
		            $link_limit = 7;
		            $half_total_links = floor($link_limit / 2);
		            $from = $currentPage - $half_total_links;
		            $to = $currentPage + $half_total_links;
		            if ($currentPage < $half_total_links) {
		               $to += $half_total_links - $currentPage;
		            }
		            if ($totalPage - $currentPage < $half_total_links) {
		                $from -= $half_total_links - ($totalPage - $currentPage) - 1;
		            }
		            ?>
		            @if ($from < $i && $i < $to)
		                <li class="{{ ($currentPage == $i) ? ' active' : '' }}">
		                    <a href="{{ $link.(($i-1)*10) }}">{{ $i }}</a>
		                </li>
		            @endif
		        @endfor
		        @if ($currentPage == $totalPage)
		        @else
		        	<li class="{{ ($currentPage == $totalPage) ? ' disabled' : '' }}">
			            <a href="{{ $link.(($totalPage-1)*10) }}">Last</a>
			        </li>
		        @endif
		    </ul>
			@endif
	    </div>
	@else
	    Data Not Found.
	@endif
</body>
</html>