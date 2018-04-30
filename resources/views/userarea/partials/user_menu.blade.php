    <div class="container general-container top-80">
   	
	   	<!-- Navigation -->
		
		<header class="content-header">
			<div class="row">
				<div class="col-md-9">

					<ul class="nav navbar-nav visible-md visible-lg site_menu built" data-component="menu">
					<span>
						<img height="50" class="img-circle pull-left" src="{{URL::to('/images/' . Auth::user()->profile->image)}}" alt="{{ Auth::user()->name }}" name="{{ Auth::user()->name }}" /></span>

					    <li><a href="{{route('user', Auth::user()->slug )}}">Home</a></li>

					    <li><a href="{{route('profile.user_show', Auth::user()->slug )}}">Profile</a></li>

					    <li><a href="">Chanel</a></li>

					    <li><a href="">Discussions</a></li>

					    <li><a href="photo/">Photos</a></li>

					    <li><a href="event/">Events</a></li>

					    <li><a href="marketplace/">Marketplace</a></li>

					    <li><a href="groups/">Groups</a></li>

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