<section id="anime">
   <div class="container-fluid text-center">
   <h6 class="text-center pt-2" id="sect-title">Chainsaw Man Anime</h6>

  <div class="row">
    <div class="col-md-4">
        <div class="card" style="margin-top: 70px;">
          <div class="card-play"></div>
          <div class="card-video">
         <iframe id="video" src="https://www.youtube.com/embed/j9sSzNmB5po?enablejsapi=1&amp;html5=1&amp;iv_load_policy=3&amp;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="allowfullscreen";></iframe>
    </div>
    </div>

    <div class="container mt-4" id="dropbox">
      <div class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Available Streaming&nbsp;</button> 
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="https://www.hulu.com/series/7b71b5a4-560b-4d8b-98c4-c5dee6004c21">Hulu</a>
          <a class="dropdown-item" href="https://www.crunchyroll.com/series/GVDHX8QNW/chainsaw-man">Crunchyroll</a>
          <a class="dropdown-item" href="https://www.disneyplus.com/en-gb/browse/entity-7b71b5a4-560b-4d8b-98c4-c5dee6004c21">Disney Plus</a>
        </div>
      </div>
    </div>

  </div>

  <div class="col-md-4 mt-5 offset-md-2"> 
    <div class="vstack gap-3 float-md-end">
      <h6 class="mb-0"><u>Summary</u></h6>
      <div class="p-2 small pt-0"><p>"Denji is a teenage boy living with a Chainsaw Devil named Pochita. Due to the debt his father left behind, he has been living a rock-bottom life while repaying his debt by harvesting devil corpses with Pochita. One day, Denji is betrayed and killed. As his consciousness fades, he makes a contract with Pochita and gets revived as "Chainsaw Man" -- a man with a devil's heart."</p>
       </div> 
     </div>
      <h6 class="mb-0"><u>Licensing</u></h6>
      <div class="p-2 small"><p>In North America, the manga is licensed in English by Viz Media, for both print and digital release, and it is also published by Shueisha on the Manga Plus online platform. An anime television series adaptation produced by MAPPA was broadcast from October to December 2022. Currently you are able to watch "<u>Chainsaw Man</u>" streaming on Hulu, Crunchyroll or for free with ads on Crunchyroll. It is also possible to buy "<u>Chainsaw Man</u>" as download on Apple TV, Amazon Prime Video, and on the Microsoft Store. It has been made available streaming on Netflix, but in a limited number of regions only. </p>
      </div>
    </div>
  </div> 

   </div>
</section>

<style>
#anime {
  opacity: 0.8; 
}
 .card {
   width: 70vw;
   height: calc(9/16 * 70vw);
   max-width: calc(16/9 * 40vh);
   max-height: 40vh;
   display: flex;
   position: relative;
   border-radius: 6px;
   box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
   background: url('/images/imgsrc/csm_yt.jpg') center center / cover; 
   overflow: hidden;
   margin-left: 100px;
   margin-top: 100px;
}
 .card-play {
   width: 48px;
   height: 48px;
   position: relative;
   z-index: 1;
   margin: auto;
   opacity: 0; 
   background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1613479/play.svg') center center / cover;
   cursor: pointer;
   transition: opacity 0.3s ease-out;
}
 .card-play:after {
   content: '';
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   border-radius: 50%;
   background: #000;
   transition: all 0.5s ease-out;
}
 .card-video {
   display: none;
   position: absolute;
   top: 0;
   left: 0;
   bottom: 0;
   right: 0;
   z-index: 2;
   background: #000;
}
 .card-video iframe {
   width: 100%;
   height: 100%;
}
 .card:after {
   content: '';
   width: 250%;
   height: 250%;
   position: absolute;
   top: var(--y);
   left: var(--x);
   transform: translate(-50%, -50%);
   opacity: 0; 
   background: radial-gradient(circle closest-side, rgba(255, 255, 255, .3), transparent);
   transition: opacity 0.5s ease-out;
}

 .card:hover:after, .card:hover .card-play {
   opacity: 1; 
}
 .video-is-open:after {
   display: none;
}
 .video-is-open .card-play {
   opacity: 1; 
}
 .video-is-open .card-play:after {
   width: 2vh;
   height: 2vh;
   transform: translate(-50%, -50%) scale(88.8888888889);
   transition: transform 0.5s ease-out;
}

#dropbox {
  margin-right: -100px;
  margin-top: 30px !important;
}

#dropbox .dropdown:hover>.dropdown-menu {
  display: block;
  margin-left: 123px !important; 
  margin-top: 0px; 
  background-color: #FFD580; 
  opacity: 1.5; 
  filter: brightness(110%);
}

.dropdown-item {
  font-weight: 600; 
}
</style>

<script>
var player,
    card  = document.querySelector( '.card' ),
    play  = document.querySelector( '.card-play' ),
    video = document.querySelector( '.card-video' );

card.onmousemove = function (e) {
  const x = e.pageX - card.offsetLeft;
  const y = e.pageY - card.offsetTop;

  card.style.setProperty( '--x', x + 'px' );
  card.style.setProperty( '--y', y + 'px' );
}

function onYouTubePlayerAPIReady() {
  player = new YT.Player('video', {
    events: {
      'onReady': onPlayerReady
    }
  });
}

function onPlayerReady(event) {
  play.addEventListener( 'click', function() {
    card.classList.add( 'video-is-open' );
    setTimeout(function() {
      video.style.display = 'block';
      player.playVideo();
    }, 500);
  });
}

var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var videos = document.getElementsByTagName("iframe"), fraction = 0.8;

function checkScroll() {


  for(var i = 0; i < videos.length; i++) {
    var video = videos[i];

    var x = 0,
        y = 0,
        w = video.width,
        h = video.height,
        r, 
        b, 
        visibleX, visibleY, visible,
        parent;


    parent = video;
    while (parent && parent !== document.body) {
      x += parent.offsetLeft;
      y += parent.offsetTop;
      parent = parent.offsetParent;
    }

    r = x + parseInt(w);
    b = y + parseInt(h);


    visibleX = Math.max(0, Math.min(w, window.pageXOffset + window.innerWidth - x, r - window.pageXOffset));
    visibleY = Math.max(0, Math.min(h, window.pageYOffset + window.innerHeight - y, b - window.pageYOffset));


    visible = visibleX * visibleY / (w * h);


    if (visible > fraction) {
      player.playVideo();
    } else {
      player?.pauseVideo()

    }
  }

};

window.addEventListener('scroll', checkScroll, false);
window.addEventListener('resize', checkScroll, false);

window.addEventListener('load', checkScroll, false);
checkScroll();
</script>
