<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>flyp.</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/style_test_player.css" type="text/css"/>
	<link rel="icon" href="favicon.png" type="image/png"/>

	<link rel="stylesheet" href="css/style_pass_word.css" type="text/css"/>
<!----->

  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@475&display=swap" rel="stylesheet">


<!---->
	<script type="text/javascript" src="java/monscript.js"></script>
	<meta meta name="viewport" content="width=device-width, user-scalable=0.3" />


</HEAD>

<BODY>

<div id="entrez" class="entrez">
  <div class="img_intro" style="background-image: url('image/louisa.png')" loding="lazy"></div>

	<div class="container1">
    <span class="text1">flyp.</span>
  </div>

  <div class="go">
    <!--<button class="go1" onclick="openNavig()">Click.</button>-->
  </div>

</div>



<div id="myNavig" class="overlay">


  <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNavig()">&times;</a>-->

  <div class="overlay-content">

<div class="viewCompter" style="display: flex; margin-top: 2vh; justify-content: space-around; padding: 4vw">
  <p class="views" style=" font-size: 4vw; margin-left: -4vw;">Views :</p>
  <p class="compte" style="font-size: 3vw; margin-left: -20vw; font-family: Arial;">100401 v</p>
  <div class="popup" onclick="myFunction()" style="height: 2vh; width: 6vw; margin-left: 10vw; border-radius: 2px; background-color: chocolate; box-shadow: 6px 8px 8px 0 rgba(0, 0, 0, 0.22); transform: rotate(-12deg);">
    <span class="popuptext" id="myPopup">Bronze card 10K
    </span>
  </div>
</div>

<script>
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

<div id="image1" class="image1">
	<div class="image1_intro" style="background-image: url('image/COVER-HYENES-3000x3000.jpg');" loading="lazy"></div>
</div>


<!---- Album ---->
<div class="container">
        <audio id="audio" preload="none" tabindex="0" controlsList="nodownload">
          <source src="musiques/MASTERED-track 1-VOID_HD.mp3" data-track-number="1" />
          <source src="musiques/MASTERED track 2-DAYS_HD.mp3" data-track-number="2" />
          <source src="musiques/MASTERED-track 3_-BEAUTIFUL LIES-HD .mp3" data-track-number="3" />
          <source src="musiques/MASTERED track 4 -PEACE And LOVE_HD bonne version.mp3" data-track-number="4" />
          <source src="musiques/MASTERED- track 5-BATB_HD 1.mp3" data-track-number="5" />  
          Your browser does not support HTML5 audio.
        </audio>


<div class="player">

<div class="player_control">

    <div class="large-toggle-btn">
      <i class="large-play-btn"><span class="screen-reader-text"></span></i>
    </div>
    <!-- /.play-box -->

    <div class="info-box">
      <div class="track-info-box">
        <div class="track-title-text"></div>
        <div class="audio-time">
          <span class="current-time">00:00</span> /
          <span class="duration">00:00</span>
        </div>
      </div>
      <!-- /.info-box -->

      <div class="progress-box">
        <div class="progress-cell">
          <div class="progress">
            <div class="progress-buffer"></div>
            <div class="progress-indicator"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.progress-box -->

    <div class="controls-box">
      <i class="previous-track-btn disabled"><span class="screen-reader-text">&#x25C5;</span></i>
      <i class="next-track-btn"><span class="screen-reader-text">&#x25BB;</span></i>
    </div>
    <!-- /.controls-box -->
</div>

</div>
  <!-- /.player -->

  <div class="play-list">


    <div class="play-list-row" data-track-row="1">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">play</span></i>
      </div>
      <div class="track-number">
        1.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="1" style="font-family: 'Fraunces', serif;">VOID</a>
      </div>


    </div>
    <div class="play-list-row" data-track-row="2">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">play</span></i>
      </div>
      <div class="track-number">
        2.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="2" style="font-family: 'Fraunces', serif;">DAYS</a>
      </div>


    </div>
    <div class="play-list-row" data-track-row="3">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">play</span></i>
      </div>
      <div class="track-number">
        3.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="3" style="font-family: 'Fraunces', serif;">BEAUTIFUL LIES</a>
      </div>


    </div>
    <div class="play-list-row" data-track-row="4">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">play</span></i>
      </div>
      <div class="track-number">
        4.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="4" style="font-family: 'Fraunces', serif;">PEACE AND LOVE</a>
      </div>


    </div>
    <div class="play-list-row" data-track-row="5">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">play</span></i>
      </div>
      <div class="track-number">
        5.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="5" style="font-family: 'Fraunces', serif;">BATB</a>
      </div>
      
    </div>

    
    </div>

 </div>


<!---- Fin Album ---->

<div class="ligneSepa" style=""></div>


<p class="intro_bonus" style="margin-bottom: 40vw;">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

<iframe width="560" height="315" src="https://www.youtube.com/embed/p7HYQAQego4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<div class="fly">


	<div id="myNav" class="overlay1">


        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div class="overlay-content">

            <h1>L'Article</h1>
            <p class="text_overlay1">Lorem Ipsum<br> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

            <div class="boutique1">
            <a class="titre_boutique" href="https://www.fly-prod.fr"><h2 class="Suite_disponible">Suite disponible sur le flyp</h2><a>
            <div class="image_boutique" style="background-image: url('image/1633607426348.png');" loading="lazy"></div>
            </div>

        </div>
	</div>

	<div class="bonus">
		<p class="intro_bonus">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
		<h1 class="bonus1" onclick="openNav()">plus</h1>
	</div>

<div class="ligneSepa" style="margin-bottom: 20vw;"></div>

<div class="intro_galerie" style="background-image: url('image/LS4.jpg');" loading="lazy"></div>

<!---- Interview ---->

<!---- Fin Interview ---->



	<div id="myNav1" class="overlay1">


        <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>

        <div class="overlay-content">

        	<h1>Le Question / Réponse</h1>
          <p class="text_overlay1">Lorem Ipsum1<br> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

          <div class="boutique1">
          <a class="titre_boutique" href="https://www.fly-prod.fr"><h2 class="Suite_disponible">Suite disponible sur le flyp</h2><a>
          <div class="image_boutique" style="background-image: url('image/1633607426348.png');" loading="lazy"></div>
          </div>

        </div>
    </div>

	<div class="bonus">
		<p class="intro_bonus">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
		<h1 class="bonus1" onclick="openNav1()">plus</h1>
	</div>


	<div id="myNav2" class="overlay1">


        <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>

        <div class="overlay-content">

        	<h1>La Galerie</h1>

          <div class="boutique1">
          <a class="titre_boutique" href="https://www.fly-prod.fr"><h2 class="Suite_disponible">Suite disponible sur le flyp</h2><a>
          <div class="image_boutique" style="background-image: url('image/1633607426348.png');" loading="lazy"></div>
          </div>

        </div>
    </div>

	<div class="bonus">
		<div class="intro_galerie" style="background-image: url('image/LS7.jpg');" loading="lazy"></div>
		<h1 class="bonus1" onclick="openNav2()">plus</h1>
	</div>

	<div class="couleur">
		<h1 class="couleur1">Couleur.</h1>
		<p class="intro_couleur">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
	</div>

</div>

<div class="ligneSepa"></div>

<div class="Reso">
  <div class="Reso1">
    <p>Spotify</p>
  </div>
  <div class="Reso1">
    <p>Deezer</p>
  </div>
  <div class="Reso1">
    <p>SoundCloud</p>
  </div>
</div>

<div class="partie3">

  <h1 class="titre_credit">Crédit</h1>

  <div class="credit">
    <p class="text_credit">Équipe de l'artiste<br><br>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

    <p class="text_credit">Équipe de Fly<br><br>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
  </div>

  <h1 class="titre_credit">Remerciement</h1>

  <p class="fin_credit">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

</div>





	<footer class="footer">
		<p class="byfly">by fly.</p>
		<p class="contact">contact</p>
	</footer>

    	</div>

</div>




<div class='immersion'>

  <button href="#" onClick="requestFullScreen();"> Go Fullscrenn </button>


  <!--<button onclick="openFullscreen();">Go Fullscrenn</button>-->
  <button onclick="closeFullscreen();">End Fullscrenn</button>
</div>

</BODY>
    <script type="text/javascript">
      
  var audioPlayer = function() {
  "use strict";

  // Private variables
  var _currentTrack = null;
  var _elements = {
    audio: document.getElementById("audio"),
    playerButtons: {
      largeToggleBtn: document.querySelector(".large-toggle-btn"),
      nextTrackBtn: document.querySelector(".next-track-btn"),
      previousTrackBtn: document.querySelector(".previous-track-btn"),
      smallToggleBtn: document.getElementsByClassName("small-toggle-btn")
    },
    progressBar: document.querySelector(".progress-box"),
    playListRows: document.getElementsByClassName("play-list-row"),
    trackInfoBox: document.querySelector(".track-info-box")
  };
  var _playAHead = false;
  var _progressCounter = 0;
  var _progressBarIndicator = _elements.progressBar.children[0].children[0].children[1];
  var _trackLoaded = false;

  var _bufferProgress = function(audio) {
    var bufferedTime = (audio.buffered.end(0) * 100) / audio.duration;
    var progressBuffer = _elements.progressBar.children[0].children[0].children[0];

    progressBuffer.style.width = bufferedTime + "%";
  };

  var _getXY = function(e) {
    var containerX = _elements.progressBar.offsetLeft;
    var containerY = _elements.progressBar.offsetTop;

    var coords = {
      x: null,
      y: null
    };

    var isTouchSuopported = "ontouchstart" in window;

    if (isTouchSuopported) { //For touch devices
      coords.x = e.clientX - containerX;
      coords.y = e.clientY - containerY;

      return coords;
    } else if (e.offsetX || e.offsetX === 0) { // For webkit browsers
      coords.x = e.offsetX;
      coords.y = e.offsetY;

      return coords;
    } else if (e.layerX || e.layerX === 0) { // For Mozilla firefox
      coords.x = e.layerX;
      coords.y = e.layerY;

      return coords;
    }
  };

  var _handleProgressIndicatorClick = function(e) {
    var progressBar = document.querySelector(".progress-box");
    var xCoords = _getXY(e).x;

    return (xCoords - progressBar.offsetLeft) / progressBar.children[0].offsetWidth;
  };

  var initPlayer = function() {

    if (_currentTrack === 1 || _currentTrack === null) {
      _elements.playerButtons.previousTrackBtn.disabled = true;
    }

    //Adding event listeners to playlist clickable elements.
    for (var i = 0; i < _elements.playListRows.length; i++) {
      var smallToggleBtn = _elements.playerButtons.smallToggleBtn[i];
      var playListLink = _elements.playListRows[i].children[2].children[0];

      //Playlist link clicked.
      playListLink.addEventListener("click", function(e) {
        e.preventDefault();
        var selectedTrack = parseInt(this.parentNode.parentNode.getAttribute("data-track-row"));

        if (selectedTrack !== _currentTrack) {
          _resetPlayStatus();
          _currentTrack = null;
          _trackLoaded = false;
        }

        if (_trackLoaded === false) {
          _currentTrack = parseInt(selectedTrack);
          _setTrack();
        } else {
          _playBack(this);
        }
      }, false);

      //Small toggle button clicked.
      smallToggleBtn.addEventListener("click", function(e) {
        e.preventDefault();
        var selectedTrack = parseInt(this.parentNode.getAttribute("data-track-row"));

        if (selectedTrack !== _currentTrack) {
          _resetPlayStatus();
          _currentTrack = null;
          _trackLoaded = false;
        }

        if (_trackLoaded === false) {
          _currentTrack = parseInt(selectedTrack);
          _setTrack();
        } else {
          _playBack(this);
        }

      }, false);
    }

    //Audio time has changed so update it.
    _elements.audio.addEventListener("timeupdate", _trackTimeChanged, false);

    //Audio track has ended playing.
    _elements.audio.addEventListener("ended", function(e) {
      _trackHasEnded();
    }, false);

    //Audio error. 
    _elements.audio.addEventListener("error", function(e) {
      switch (e.target.error.code) {
        case e.target.error.MEDIA_ERR_ABORTED:
          alert('You aborted the video playback.');
          break;
        case e.target.error.MEDIA_ERR_NETWORK:
          alert('A network error caused the audio download to fail.');
          break;
        case e.target.error.MEDIA_ERR_DECODE:
          alert('The audio playback was aborted due to a corruption problem or because the video used features your browser did not support.');
          break;
        case e.target.error.MEDIA_ERR_SRC_NOT_SUPPORTED:
          alert('The video audio not be loaded, either because the server or network failed or because the format is not supported.');
          break;
        default:
          alert('An unknown error occurred.');
          break;
      }
      trackLoaded = false;
      _resetPlayStatus();
    }, false);

    //Large toggle button clicked.
    _elements.playerButtons.largeToggleBtn.addEventListener("click", function(e) {
      if (_trackLoaded === false) {
        _currentTrack = parseInt(1);
        _setTrack()
      } else {
        _playBack();
      }
    }, false);

    //Next track button clicked.
    _elements.playerButtons.nextTrackBtn.addEventListener("click", function(e) {
      if (this.disabled !== true) {
        _currentTrack++;
        _trackLoaded = false;
        _resetPlayStatus();
        _setTrack();
      }
    }, false);

    //Previous track button clicked.
    _elements.playerButtons.previousTrackBtn.addEventListener("click", function(e) {
      if (this.disabled !== true) {
        _currentTrack--;
        _trackLoaded = false;
        _resetPlayStatus();
        _setTrack();
      }
    }, false);

    //User is moving progress indicator.
    _progressBarIndicator.addEventListener("mousedown", _mouseDown, false);

    //User stops moving progress indicator.
    window.addEventListener("mouseup", _mouseUp, false);
  };

  var _mouseDown = function(e) {
    window.addEventListener("mousemove", _moveProgressIndicator, true);
    audio.removeEventListener("timeupdate", _trackTimeChanged, false);

    _playAHead = true;
  };


  var _mouseUp = function(e) {
    if (_playAHead === true) {
      var duration = parseFloat(audio.duration);
      var progressIndicatorClick = parseFloat(_handleProgressIndicatorClick(e));
      window.removeEventListener("mousemove", _moveProgressIndicator, true);

      audio.currentTime = duration * progressIndicatorClick;
      audio.addEventListener("timeupdate", _trackTimeChanged, false);
      _playAHead = false;
    }
  };


  var _moveProgressIndicator = function(e) {
    var newPosition = 0;
    var progressBarOffsetLeft = _elements.progressBar.offsetLeft;
    var progressBarWidth = 0;
    var progressBarIndicator = _elements.progressBar.children[0].children[0].children[1];
    var progressBarIndicatorWidth = _progressBarIndicator.offsetWidth;
    var xCoords = _getXY(e).x;

    progressBarWidth = _elements.progressBar.children[0].offsetWidth - progressBarIndicatorWidth;
    newPosition = xCoords - progressBarOffsetLeft;

    if ((newPosition >= 1) && (newPosition <= progressBarWidth)) {
      progressBarIndicator.style.left = newPosition + ".px";
    }
    if (newPosition < 0) {
      progressBarIndicator.style.left = "0";
    }
    if (newPosition > progressBarWidth) {
      progressBarIndicator.style.left = progressBarWidth + "px";
    }
  };

  var _playBack = function() {
    if (_elements.audio.paused) {
      _elements.audio.play();
      _updatePlayStatus(true);
      document.title = "\u25B6 " + document.title;
    } else {
      _elements.audio.pause();
      _updatePlayStatus(false);
      document.title = document.title.substr(2);
    }
  };

  var _setTrack = function() {
    var songURL = _elements.audio.children[_currentTrack - 1].src;

    _elements.audio.setAttribute("src", songURL);
    _elements.audio.load();

    _trackLoaded = true;

    _setTrackTitle(_currentTrack, _elements.playListRows);

    _setActiveItem(_currentTrack, _elements.playListRows);

    _elements.trackInfoBox.style.visibility = "visible";

    _playBack();
  };


  var _setActiveItem = function(currentTrack, playListRows) {
    for (var i = 0; i < playListRows.length; i++) {
      playListRows[i].children[2].className = "track-title";
    }

    playListRows[currentTrack - 1].children[2].className = "track-title active-track";
  };


  var _setTrackTitle = function(currentTrack, playListRows) {
    var trackTitleBox = document.querySelector(".player .info-box .track-info-box .track-title-text");
    var trackTitle = playListRows[currentTrack - 1].children[2].outerText;

    trackTitleBox.innerHTML = null;

    trackTitleBox.innerHTML = trackTitle;

    document.title = trackTitle;
  };


  var _trackHasEnded = function() {
    parseInt(_currentTrack);
    _currentTrack = (_currentTrack === _elements.playListRows.length) ? 1 : _currentTrack + 1;
    _trackLoaded = false;

    _resetPlayStatus();

    _setTrack();
  };


  var _trackTimeChanged = function() {
    var currentTimeBox = document.querySelector(".player .info-box .track-info-box .audio-time .current-time");
    var currentTime = audio.currentTime;
    var duration = audio.duration;
    var durationBox = document.querySelector(".player .info-box .track-info-box .audio-time .duration");
    var trackCurrentTime = _trackTime(currentTime);
    var trackDuration = _trackTime(duration);

    currentTimeBox.innerHTML = null;
    currentTimeBox.innerHTML = trackCurrentTime;

    durationBox.innerHTML = null;
    durationBox.innerHTML = trackDuration;

    _updateProgressIndicator(audio);
    _bufferProgress(audio);
  };


  var _trackTime = function(seconds) {
    var min = 0;
    var sec = Math.floor(seconds);
    var time = 0;

    min = Math.floor(sec / 60);

    min = min >= 10 ? min : '0' + min;

    sec = Math.floor(sec % 60);

    sec = sec >= 10 ? sec : '0' + sec;

    time = min + ':' + sec;

    return time;
  };


  var _updatePlayStatus = function(audioPlaying) {
    if (audioPlaying) {
      _elements.playerButtons.largeToggleBtn.children[0].className = "large-pause-btn";

      _elements.playerButtons.smallToggleBtn[_currentTrack - 1].children[0].className = "small-pause-btn";
    } else {
      _elements.playerButtons.largeToggleBtn.children[0].className = "large-play-btn";

      _elements.playerButtons.smallToggleBtn[_currentTrack - 1].children[0].className = "small-play-btn";
    }

    //Update next and previous buttons accordingly
    if (_currentTrack === 1) {
      _elements.playerButtons.previousTrackBtn.disabled = true;
      _elements.playerButtons.previousTrackBtn.className = "previous-track-btn disabled";
    } else if (_currentTrack > 1 && _currentTrack !== _elements.playListRows.length) {
      _elements.playerButtons.previousTrackBtn.disabled = false;
      _elements.playerButtons.previousTrackBtn.className = "previous-track-btn";
      _elements.playerButtons.nextTrackBtn.disabled = false;
      _elements.playerButtons.nextTrackBtn.className = "next-track-btn";
    } else if (_currentTrack === _elements.playListRows.length) {
      _elements.playerButtons.nextTrackBtn.disabled = true;
      _elements.playerButtons.nextTrackBtn.className = "next-track-btn disabled";
    }
  };


  var _updateProgressIndicator = function() {
    var currentTime = parseFloat(_elements.audio.currentTime);
    var duration = parseFloat(_elements.audio.duration);
    var indicatorLocation = 0;
    var progressBarWidth = parseFloat(_elements.progressBar.offsetWidth);
    var progressIndicatorWidth = parseFloat(_progressBarIndicator.offsetWidth);
    var progressBarIndicatorWidth = progressBarWidth - progressIndicatorWidth;

    indicatorLocation = progressBarIndicatorWidth * (currentTime / duration);

    _progressBarIndicator.style.left = indicatorLocation + "px";
  };


  var _resetPlayStatus = function() {
    var smallToggleBtn = _elements.playerButtons.smallToggleBtn;

    _elements.playerButtons.largeToggleBtn.children[0].className = "large-play-btn";

    for (var i = 0; i < smallToggleBtn.length; i++) {
      if (smallToggleBtn[i].children[0].className === "small-pause-btn") {
        smallToggleBtn[i].children[0].className = "small-play-btn";
      }
    }
  };

  return {
    initPlayer: initPlayer
  };
};

(function() {
  var player = new audioPlayer();

  player.initPlayer();
})();
    </script>
</body>

</html> 