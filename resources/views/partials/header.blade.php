<header>
  <div class="row uno">
      <div class="box80">
        <span>DC POWER
          <span>
            sm
          </span>
          VISA
        </span>
        <span>ADDITIONAL DC SITES </span>
      </div>
  </div>
  <div class="row due">
    <div class="box80">

      <div>
        <img src="{{ asset('img/dc-logo.png') }}" alt="">
      </div>
      <div class="lista">
        <ul>
          <li class="{{(request()->is('Characters')) ? 'active' : ''}}">
            <a  href="{{route('Characters')}}">Characters</a>
          </li>
          <li class="{{(request()->is('Comics')) ? 'active' : ''}}">
            <a href="{{route('Home')}}">Comics</a>
          </li>
          <li class="{{(request()->is('Movies')) ? 'active' : ''}}">
            <a  href="{{route('Movies')}}">Movies</a>
            </li>
          <li class="{{(request()->is('Tv')) ? 'active' : ''}}">
            <a  href="{{route('Tv')}}">Tv</a>
          </li>
          <li class="{{(request()->is('Games')) ? 'active' : ''}}">  
            <a  href="{{route('Games')}}">Games</a>
          </li>
          <li class="{{(request()->is('Collectibles')) ? 'active' : ''}}">
            <a  href="{{route('Collectibles')}}">Collectibles</a>
          </li>
          <li class="{{(request()->is('Videos')) ? 'active' : ''}}">
            <a  href="{{route('Videos')}}">Videos</a>
          </li>
          <li class="{{(request()->is('Fans')) ? 'active' : ''}}">  
            <a  href="{{route('Fans')}}">Fans</a>
          </li>
          <li class="{{(request()->is('News')) ? 'active' : ''}}">
            <a  href="{{route('News')}}">News</a>
          </li>
          <li class="{{(request()->is('Shop')) ? 'active' : ''}}">
            <a  href="{{route('Shop')}}">Shop</a>
          </li>
          <li>
            <span>Search</span>
          </li>
        </ul>
      </div>
    </div>
    
  </div>

</header>