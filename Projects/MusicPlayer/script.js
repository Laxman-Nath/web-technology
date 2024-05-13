// targeting html elements using javascript

let nowPlaying=document.querySelector('.now-playing');
let trackArt=document.querySelector('.track-art')
let trackName=document.querySelector('.track-name');
let trackArtist=document.querySelector('.track-artist');

let prevButton=document.querySelector('.prev-track');
let playpauseButton=document.querySelector('.playpause-track');
let nextButton=document.querySelector('.next-track');

let currentTime=document.querySelector('.current-time');
let seekSlider=document.querySelector('.seek-slider');
let totalDuration=document.querySelector('.total-duration');
let volumeSlider=document.querySelector('.volume-slider');

// Specifying some globally used values
let track_index=0;
let isPlaying=false;
let updateTimer;

// Creating the audio element for the player
let curr_track=document.createElement('Audio');

//Defining the list of tracks that have to be played
let track_list=[
    {
        name:"salam-e-ishq",
        artist:"sonu nigam",
        image:"covers/1.jpg",
        path:"songs/1.mp3"
    },
    {
        name:"dhere-dhere",
        artist:"arjit singh",
        image:"covers/2.jpg",
        path:"songs/2.mp3"
    },
    {
        name:"heeriye",
        artist:"arjit singh",
        image:"covers/3.jpg",
        path:"songs/3.mp3"
    },
    {
        name:"sab tera",
        artist:"arman malik",
        image:"covers/4.jpg",
        path:"songs/4.mp3"
    },
    {
        name:"girl i need you",
        artist:"meet bros",
        image:"covers/5.jpg",
        path:"songs/5.mp3"
    },
    {
        name:"tere naam",
        artist:"udit narayan",
        image:"covers/6.jpg",
        path:"songs/6.mp3"
    },
];

function load_Track(track_index){
    // Clear the previous seek timer
    clearInterval(updateTimer);
    resetValues();

   // Load a new track
   curr_track.src=track_list[track_index].path;
   curr_track.load();

   // Update details of the track
   trackArt.style.backgroundImage="url(" + track_list[track_index].image+ " )";
   trackName.textContent=track_list[track_index].name;
   trackArtist.textContent=track_list[track_index].artist;
   nowPlaying.textContent="PLAYING "+(track_index+1)+" of "+ track_list.length;

   // set an interval of 1000 milliseconds for updating the seekslider
   updateTimer=setInterval(seekUpdate,1000);

   // Move to the next track if the current track finishes using the ended event
   curr_track.addEventListener('ended',nextTrack);

   // Apply a random background color
   random_bg_color();
}

function random_bg_color(){
    // get a random numbers between 64 to 256 to get lighter colors
    let red=Math.floor(Math.random()*256)+64;
    let green=Math.floor(Math.random()*256)+64;
    let blue=Math.floor(Math.random()*256)+64;

    // construct a bg color with the given values
    let bgColor="rgb("+red+","+green+","+blue+")";
    console.log(bgColor);
     document.body.style.background=bgColor;
}

// function to reset all values to their default
function resetValues(){
    currentTime.textContent="00:00";
    totalDuration.textContent="00:00";
    seekSlider.value=0;
}

// function for playing/pausing the song

function playPause(){
    if(track_index==0)
    {
        load_Track(track_index);
    }
    if(!isPlaying){
        playTrack();
    }
    else{
        pauseTrack();
    }
}

function playTrack(){
    curr_track.play();
    isPlaying=true;
    playpauseButton.innerHTML= '<i class="fa fa-pause-circle fa-5x"></i>';
    
}

function pauseTrack(){
    curr_track.pause();
    isPlaying=false;
    playpauseButton.innerHTML='<i class="fa fa-play-circle fa-5x"></i>';
}

// working with previous and next button
function nextTrack(){
    if(track_index>=track_list.length-1)
    {
        track_index=0;
    }
    else{
        track_index+=1;
    }
    // console.log(track_index);
    load_Track(track_index);
    playTrack();
}
function prevTrack(){
    if(track_index<=0)
    {
        track_index=track_list.length-1;
    }
    else{
        track_index-=1;
    }

    load_Track(track_index);
    playTrack();
}

function seekTo(){
    seekTo=curr_track.duration*(seekSlider.value/100);
    curr_track.currentTime=seekTo;
}

function setVolume(){
    curr_track.volume=volumeSlider.value/100;
}

function seekUpdate(){
    let seekPosition=0;

    if(!(isNaN(curr_track.duration))){
        seekPosition=curr_track.currentTime*(100/curr_track.duration);
        seekSlider.value=seekPosition;

        // calculating the time left and total duration
        let currentMinutes=Math.floor(curr_track.currentTime/60);
        let currentSeconds=Math.floor(curr_track.currentTime-currentMinutes *60);
        let durationMinutes=Math.floor(curr_track.duration/60);
        let durationSeconds=Math.floor(curr_track.duration-durationMinutes*60);

        // adding 0 to the single digit values
        if(currentMinutes<10){currentMinutes="0"+currentMinutes};
        if(currentSeconds<10){currentSeconds="0"+currentSeconds};
        if(durationMinutes<10){durationMinutes="0"+durationMinutes};
        if(durationSeconds<10){durationSeconds="0"+durationSeconds};
        currentTime.textContent=currentMinutes+":"+currentSeconds;
        totalDuration.textContent=durationMinutes+":"+durationSeconds;
    }
}

// making mute and unmute
let e= document.getElementById('mute');
e.style.cursor="pointer";
e.muted=false;
e.addEventListener('click',()=>{
  if(!curr_track.muted){
    curr_track.muted=true;
    e.innerHTML='<i class="fa fa-volume-up" ></i>';
   
}
  else{
    curr_track.muted=false;
    e.innerHTML='<i class="fa-solid fa-volume-xmark"></i>';
  }
});