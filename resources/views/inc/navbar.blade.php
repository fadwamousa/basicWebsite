<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<a class="navbar-brand" href="{{url('/')}}">Basic-Website</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav mr-auto">
  <li class="{{Request::is('/') ? 'active' : ''}}">

    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/about')}}">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{url('/contact')}}" tabindex="-1">Contact</a>
  </li>

</ul>

</div>
</nav>
