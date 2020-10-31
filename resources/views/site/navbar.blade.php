<nav class="primary-menu sub-title">
	<ul class="menu-container">
		<li class="menu-item">
			<a class="menu-link" href="{{ route('home') }}">
				<div>Home</div>
			</a>
		</li>
		<li class="menu-item">
			<a class="menu-link" href="{{ route('service') }}">
				<div>Services</div>
			</a>
		</li>
		<li class="menu-item mega-menu">
			<a class="menu-link" href="{{ route('portfolio') }}">
				<div>Portfolio</div>
			</a>
		</li>

		<li class="menu-item mega-menu">
			<a class="menu-link" href="#">
				<div>How We Work</div>
			</a>
		</li>
		<li class="menu-item mega-menu">
			<a class="menu-link" href="{{ route('site_faqs') }}">
				<div>Faqs</div>
			</a>
		</li>
		<li class="menu-item mega-menu">
			<a class="menu-link" href="/#contact_us">
				<div>Contact Us</div>
			</a>
        </li>
        @auth
        <li class="menu-item sub-menu">
			<a class="menu-link" >
				<div>Portal</div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <ul class="sub-menu-container">
                <li class="menu-item">
                    <a  class="menu-link" href="admin/home">Dashboard</a>
                </li>
                <li class="menu-item">
                    <a  class="menu-link" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                </li>
            </ul>
		</li>
        @endauth
	</ul>
</nav>
