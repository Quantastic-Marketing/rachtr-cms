@php
    use App\Models\CommonComponents;
    use App\Models\Pages;
    $header = CommonComponents::where('name', 'headerHome')->first();
    $headerContent = $header->content ?? [];
    
    function getFullSlugUrl($slug, $hasLink) {
        if ($hasLink && !empty($slug)) {
            $page = Pages::where('slug', $slug)->first();
            return $page ? url($page->full_slug) : '#';
        }
        return '#';
    }
@endphp
@if(!empty($headerContent))
  <div class="header">
            <div class="container">
                <div class="row g-0"> 
                    <div class="col-lg-2 col-md-2">
                      <div class="logo">
                            <a href="#"><img src=" {{ asset('storage/'.$headerContent['logo'] ?? 'images/logo.png') }}" alt ="logo"></a>
                      </div>
                      </div>
                    <div class="col-lg-10 col-md-10">
                      <div class="menuBar-wrap">
                      <div id="showLeft" class="">
                              <span></span>
                              <span></span>
                              <span></span>
                          </div>    
                          <div class="nav">
                          <ul class="head-nav">
                          @foreach($headerContent['menu-items'] ?? [] as $menuItem)
                              <li class="">
                                  <a href="{{ getFullSlugUrl($menuItem['slug'] ?? '', $menuItem['has_link'] ?? false)  }}">{{ $menuItem['item'] }}</a>
                                    @if(!empty($menuItem['sub_items']))
                                      <ul class="submenu">
                                          @foreach($menuItem['sub_items'] as $subItem)

                                            <li><a href="{{ getFullSlugUrl($subItem['slug'] ?? '', $subItem['has_link'] ?? false)  }}">{{ $subItem['sub-item'] }}</a>
                                              @if(!empty($subItem['sub_items']))
                                                <ul class="submenu">
                                                  @foreach($subItem['sub_items'] as $subSubItem)
                                                    <li><a href="{{ getFullSlugUrl($subSubItem['slug'] ?? '', $subSubItem['has_link'] ?? false)  }}">{{ $subSubItem['sub-item'] }}</a></li>
                                                  @endforeach
                                                </ul>
                                              @endif
                                            </li>
                                          @endforeach
                                      </ul>
                                    @endif
                              </li>
                            @endforeach
                            <li class="pe-0"><div class="search-container">
                                  <form action="/action_page.php">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="5 5 14 14"><path fill="currentColor" d="m15.683 14.6 3.265 3.265a.2.2 0 0 1 0 .282l-.8.801a.2.2 0 0 1-.283 0l-3.266-3.265a5.961 5.961 0 1 1 1.084-1.084zm-4.727 1.233a4.877 4.877 0 1 0 0-9.754 4.877 4.877 0 0 0 0 9.754z"></path></svg></span>       
                                    <input type="text" placeholder="Search" name="search">
                                  </form>
                                </div>
                              </li> 
                          </ul>
                          <i class="clear"></i>
                        </div>
                  </div>
                </div>
            </div>
            </div>
  </div>
@endif