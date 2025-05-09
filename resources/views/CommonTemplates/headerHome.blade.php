@php
    use App\Models\CommonComponents;
    use App\Models\Pages;
    $headerContent = CommonComponents::where('name', 'headerHome')->value('content') ?? [];
@endphp
@if(!empty($headerContent))
  <div class="header">
            <div class="container">
                <div class="row g-0"> 
                    <div class="col-lg-2 col-md-2">
                      <div class="logo">
                            <a href="{{ url('/')  }}"><img src=" {{ asset('storage/'.$headerContent['logo'] ?? 'images/logo.webp') }}" alt ="logo"></a>
                      </div>
                      </div>
                    <div class="col-lg-10 col-md-10">
                      <div class="menuBar-wrap">
                          <div class="search-container d-block d-lg-none position-relative" id="mobile-searchWrap">
                                  <form action="{{ route('product-lists')}}"  method="GET">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="5 5 14 14"><path fill="currentColor" d="m15.683 14.6 3.265 3.265a.2.2 0 0 1 0 .282l-.8.801a.2.2 0 0 1-.283 0l-3.266-3.265a5.961 5.961 0 1 1 1.084-1.084zm-4.727 1.233a4.877 4.877 0 1 0 0-9.754 4.877 4.877 0 0 0 0 9.754z"></path></svg></span>
                                    <input type="text" placeholder="Search" id="mobile-searchInput" name="query" x-model.debounce.500ms="query" value="{{ request('query') }}">
                                  </form>
                                  <div class="search-dropdown" id="mobile-searchDropdown">
                                        <h3 class="trending-title">Trending Products</h3>
                                        <div class="search-results" id="mobile-search-results">
                                          
                                          
                                        </div>
                                      </div>

                                      <div class="search-results-dropdown" id="mobile-searchResultsDropdown">
                                        <h3 class="trending-title">Products</h3>
                                        <div class="search-results" id="mobile-product-results">
                                         
                                        </div>
                                        <h3 class="trending-title">Blogs</h3>
                                        <div class="search-results" id="mobile-blog-results">
                                          
                                        </div>
                                      </div>
                                  </div>
                          <div id="showLeft" class="">
                              <span></span>
                              <span></span>
                              <span></span>
                          </div>    
                          <div class="nav">
                            <ul class="head-nav">
                              @foreach($headerContent['menu-items'] ?? [] as $menuItem)
                                <li class="">
                                    <a href="{{ $menuItem['has_link'] && !empty($menuItem['slug']) ? url($menuItem['slug']) : '#'  }}">{{ $menuItem['item'] }}</a>
                                      @if(!empty($menuItem['sub_items']))
                                        <ul class="submenu">
                                            @foreach($menuItem['sub_items'] as $subItem)
                                                @php 
                                                  $isSubActive = Request::is(ltrim($subItem['slug'] ?? '', '/'));
                                                @endphp
                                              <li class="{{ $isSubActive ? 'active' : '' }}">
                                                <a href="{{ $subItem['has_link'] && !empty($subItem['slug']) ? url($subItem['slug']) : '#'   }}">{{ $subItem['sub-item'] }}</a>
                                                @if(!empty($subItem['sub_items']))
                                                  <ul class="submenu">
                                                    @foreach($subItem['sub_items'] as $subSubItem)
                                                    @php 
                                                      $isSubSubActive = Request::is(ltrim($subSubItem['slug'] ?? '', '/'));
                                                    @endphp
                                                      <li class="{{ $isSubSubActive ? 'active' : '' }}"><a href="{{ $subSubItem['has_link'] && !empty($subSubItem['slug']) ? url($subSubItem['slug']) : '#'  }}">{{ $subSubItem['sub-item'] }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                @endif
                                              </li>
                                            @endforeach
                                        </ul>
                                      @endif
                                </li>
                              @endforeach
                                <li class="pe-0 position-relative" >
                                  <div class="search-container position-relative " id="searchWrap" data-app-url="{{ config('app.url') }}">
                                    <form action="{{ route('product-lists')}}"  method="GET">
                                      <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="5 5 14 14"><path fill="currentColor" d="m15.683 14.6 3.265 3.265a.2.2 0 0 1 0 .282l-.8.801a.2.2 0 0 1-.283 0l-3.266-3.265a5.961 5.961 0 1 1 1.084-1.084zm-4.727 1.233a4.877 4.877 0 1 0 0-9.754 4.877 4.877 0 0 0 0 9.754z"></path></svg></span>
                                      <input type="text" id="searchInput" placeholder="Search" name="query" x-model.debounce.500ms="query" value="{{ request('query') }}" >
                                    </form>
                                    <div class="search-dropdown" id="searchDropdown">
                                      <h3 class="trending-title">Trending Products</h3>
                                      <div class="search-results" id="search-results">
                                       
                                      </div>
                                    </div>

                                    <div class="search-results-dropdown" id="searchResultsDropdown">
                                      <h3 class="trending-title">Products</h3>
                                      <div class="search-results" id="product-results">
                                       
                                      </div>
                                      <h3 class="trending-title">Blogs</h3>
                                      <div class="search-results" id="blog-results">
                                       
                                      </div>
                                    </div>
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