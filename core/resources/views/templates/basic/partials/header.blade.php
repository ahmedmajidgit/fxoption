<header class="header-section">
	<div class="container-xl">
		<div class="header-wrapper">
			<div class="logo">
				<a href="{{route('home')}}"><img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="@lang('logo')"></a>
			</div>
		<div class="header-top">
        <div class="container">
            <ul class="header-top-area">
			
			
                <li class="me-auto">
                    <div class="select-bar">
                        <select class="langSel">
                            @foreach($language as $item)
                                <option value="{{$item->code}}" @if(session('lang') == $item->code) selected  @endif>{{ __($item->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </li>
				
			  <li class="links">
                        <a href="{{route('home')}}">@lang('Home')</a>
                    </li>
					
					<!--
						@foreach($pages as $k => $data)
							 <li class="links"><a href="{{route('pages',[$data->slug])}}">{{__($data->name)}}</a></li>
						@endforeach
					-->
              
            </ul>
        </div>
    </div>
	
	
                <ul class="menu">
                    
					
					
					  @guest
                    <li class="links">
                        <a href="{{route('user.login')}}">@lang('Sign in')</a>
                    </li>
                    <li class="links">
                        <a href="{{route('user.register')}}">@lang('Sign Up')</a>
                    </li>
                @endguest
                @auth
                    <li class="links">
                        <a href="{{route('user.home')}}">@lang('Dashboard')</a>
                    </li>
                @endauth

                </ul>
                <div class="header-bar m-0">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

</header>
