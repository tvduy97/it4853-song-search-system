		<select name="filter">
          <option style="border-radius: 25px;" value="all" {{ isset($filter)? ($filter ==  'all' ? 'selected' : '' ):'' }}>Tất Cả</option>
          <option value="title" {{ isset($filter)? ($filter ==  'title' ? 'selected' : '' ):'' }}>Tên Bài Hát</option>
          <option value="singer" {{ isset($filter)? ($filter ==  'singer' ? 'selected' : '' ):'' }}>Ca Sĩ</option>
          <option value="lyric" {{ isset($filter)? ($filter ==  'lyric' ? 'selected' : '' ):'' }}>Lời Bài Hát</option>
        </select>