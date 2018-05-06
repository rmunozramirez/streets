    <div class="container general-container top-80">
   	
	   	<!-- Navigation -->
		
		<header class="content-header">
			<div class="row">
				<div class="col-md-9">
					<ul class="nav navbar-nav visible-md visible-lg site_menu built" data-component="menu">
						<li><a href="{{route('user', Auth::user()->slug )}}">
							@foreach(Auth::user()->profile->images as $image)
							@if($image->imageable_type === 'profiles')
							<img height="50" class="img-circle pull-left" src="{{URL::to('/images/' . $image->slug)}}" alt="{{ Auth::user()->name }}" name="{{ Auth::user()->name }}" />
							@endif
							@endforeach
						Home</a></li>

					    <li><a href="{{route('profile', Auth::user()->profile->slug )}}">Profile</a></li>
						@if(Auth::user()->profile->channel)
					    <li><a href="{{route('channel', Auth::user()->profile->slug )}}">Chanel</a></li>
					    @else
					    <li><a href="{{route('channel.create', Auth::user()->profile->slug) }}">Chanel</a></li>
						@endif
					    <li><a href="{{route('forum.index')}}">Discussions</a></li>

					    <li><a href="{{route('image', Auth::user()->profile->slug )}}">Photos</a></li>

					    <li><a href="event/">Events</a></li>

					    <li><a href="marketplace/">Marketplace</a></li>

					</ul>
				</div>
			    <div class="col-md-3">
			        <div class=" pull-right pt-3">					
			            <form action="#">					
			                <div class="input">
			                    <input type="text" placeholder="Search">
			                    <button class="right search-user-area btn btn-secondary" type="submit">Go</button>
			                </div>					
			            </form>
			        </div>
			    </div>
			</div>
		</header>
	</div>