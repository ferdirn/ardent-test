<h1>Dashboard</h1>
<p>
	Email : {{ Auth::user()->email }}
</p>
<p>
	Name : {{ Auth::user()->name }}
</p>
<p>
	Phone : {{ Auth::user()->phone }}
</p>
<p>
	{{ HTML::link('logout', 'Logout') }}
</p>