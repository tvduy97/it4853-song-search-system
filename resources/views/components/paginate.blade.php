      <div class="row justify-content-center">
      @if ($totalPage > 1)
        <ul class="pagination">
          @if ($currentPage == 1)
          @else
            <li class="page-item {{ ($currentPage == 1) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $link.'0' }}">First</a>
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
                    <li class="page-item {{ ($currentPage == $i) ? ' active' : '' }}">
                        <a class="page-link" href="{{ $link.(($i-1)*10) }}">{{ $i }}</a>
                    </li>
                @endif
            @endfor
            @if ($currentPage == $totalPage)
            @else
              <li class="page-item {{ ($currentPage == $totalPage) ? ' disabled' : '' }}">
                  <a class="page-link" href="{{ $link.(($totalPage-1)*10) }}">Last</a>
              </li>
            @endif
        </ul>
      @endif
      </div>