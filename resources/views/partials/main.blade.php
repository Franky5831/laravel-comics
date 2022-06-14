<main>
    <div id="teenTitansHeroBanner">
        <span>current series</span>
    </div>

    <div id="cardsContainer">
      <ul>
        @foreach ($comic as $comics)
        <li class="card-box">
          <img class="card" src="{{$comics['thumb']}}" alt="{{$comics['type']}}">
          <span class="text">{{$comics['series']}}</span>
        </li>
        @endforeach
      </ul>
    </div>
</main>
