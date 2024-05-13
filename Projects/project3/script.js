// Initilize the variable
let songIndex=0;
let audioElement=new Audio('songs/1.mp3');
// setDuration();
let masterPlay=document.getElementById('masterPlay');
let progressBar=document.getElementById("myProgressBar");
let songItem=Array.from(document.getElementsByClassName('songItem'));
let masterSongName=document.getElementById('masterSongName');
let elements=Array.from(document.getElementsByClassName('songItemPlay'))
// list of songs
let songs=[
{songName:"Salam-e -ishq",songPath:"songs/1.mp3",coverPath:"covers/1.jpg"},
{songName:"Dhere-dhere",songPath:"songs/2.mp3",coverPath:"covers/2.jpg"},
{songName:"Heeriye heeriye",songPath:"songs/3.mp3",coverPath:"covers/3.jpg"},
{songName:"Sab-tera",songPath:"songs/4.mp3",coverPath:"covers/4.jpg"},
{songName:"Girl i need you",songPath:"songs/5.mp3",coverPath:"covers/5.jpg"},
{songName:"Tere nam",songPath:"songs/6.mp3",coverPath:"covers/6.jpg"},

];

progressBar.addEventListener('ended',()=>{
    audioElement.pause();
    audioElement.src=`songs/${songIndex+1}.mp3`;
    masterSongName.innerText=songs[songIndex].songName;
    gif.style.opacity=1;
    audioElement.currentTime=0;
    audioElement.play();
   
    selectActiveMusic();
    
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
})

// const setDuration=()=>{
//     Array.from(document.getElementsByClassName('timestamp')).forEach((elem,i)=>{
//       audioElement.src=`songs/${i+1}.mp3`;
//       console.log(audioElement.src);
//        elem.innerText=(parseInt(audioElement.duration)/60).toFixed(2);
//      } )
// }

const selectActiveMusic=()=>{
    // http://127.0.0.1:5501/songs/1.mp3
    elements.forEach(elem=>{
    
        // console.log(`songs/${parseInt(elem.id)+1}.mp3`);
        // console.log(`http://127.0.0.1:5501/songs/${elem.id+1}.mp3`);
        if(audioElement.src==`http://127.0.0.1:5501/songs/${parseInt(elem.id)+1}.mp3`){
            makeAllPlay();
            elem.classList.remove('fa-play-music');
            elem.classList.add('fa-pause-circle');
           }
    });
}

// const setDuration=()=>{
//     songItem.forEach((elem,i)=>{
    
//         // console.log(elem.id);
//         // console.log(audioElement.src==`http://127.0.0.1:5501/songs/${parseInt(elem.id)+1}.mp3`);
//         if(audioElement.src==`http://127.0.0.1:5501/songs/${parseInt(elem.id)}.mp3`){
//             elem.getElementsByClassName('timestamp')[0].innerText=(parseInt(audioElement.duration)/60).toFixed(2);
//             // console.log(audioElement.duration);
//            }
//     });
// }

// Working on  pause and play button
masterPlay.addEventListener('click',()=>{
    if(audioElement.paused || audioElement.currentTime<=0){
        
        audioElement.play();
        selectActiveMusic();
        
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
        gif.style.opacity=1;
    }
    else{
        makeAllPlay();
        audioElement.pause();
        masterPlay.classList.remove('fa-pause-circle');
        masterPlay.classList.add('fa-play-circle');
        gif.style.opacity=0;
    }
});

// updating the progressbar with music timeupdate
audioElement.addEventListener('timeupdate',()=>{
    progress=parseInt((audioElement.currentTime/audioElement.duration)*100);
    progressBar.value=progress;
})

// calculating the current time of music when we change the progresbar
progressBar.addEventListener('change',()=>{
    audioElement.currentTime=progressBar.value*audioElement.duration/100;
})

// Updating the names,covers  of songs
songItem.forEach((element,i)=>{
    // console.log(songs[i].duration);
    // console.log(parseInt(audioElement.duration)*100);
    element.getElementsByTagName('img')[0].src=songs[i].coverPath;
    element.getElementsByClassName('songName')[0].innerText=songs[i].songName;
    
});  



const makeAllPlay= ()=>{
    Array.from(document.getElementsByClassName('songItemPlay')).forEach(element=>{
        element.classList.remove('fa-pause-circle');
        element.classList.add('fa-play-circle');
        
    });
};

Array.from(document.getElementsByClassName('songItemPlay')).forEach(element =>{
    element.addEventListener('click',(e)=>{
        
         songIndex=parseInt(e.target.id);
         makeAllPlay();
        // console.log(index);
        if(audioElement.paused || audioElement.currentTime<=0  ){
        e.target.classList.remove('fa-play-circle');
        e.target.classList.add('fa-pause-circle');
        audioElement.src=`songs/${songIndex+1}.mp3`;
       
        masterSongName.innerText=songs[songIndex].songName;
        audioElement.currentTime=0;
        audioElement.play();
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
        gif.style.opacity=1;
        }
       
        else if(audioElement.src==`http://127.0.0.1:5501/songs/${songIndex+1}.mp3`)
        {
            
            audioElement.pause();
            e.target.classList.remove('fa-pause-circle');
            e.target.classList.add('fa-play-circle');
            masterPlay.classList.remove('fa-pause-circle');
            masterPlay.classList.add('fa-play-circle');
            gif.style.opacity=0;
        }
        else {
            e.target.classList.remove('fa-play-circle');
            e.target.classList.add('fa-pause-circle');
            audioElement.src=`songs/${songIndex+1}.mp3`;
            
            masterSongName.innerText=songs[songIndex].songName;
            audioElement.currentTime=0;
            audioElement.play();
            masterPlay.classList.remove('fa-play-circle');
            masterPlay.classList.add('fa-pause-circle');
            gif.style.opacity=1;
            }
    });
});

// Working with previous and next

document.getElementById('next').addEventListener('click',()=>{
    if(songIndex>=5){
        songIndex=0;
    }
    else{
        songIndex+=1;
    }
    audioElement.src=`songs/${songIndex+1}.mp3`;
    masterSongName.innerText=songs[songIndex].songName;
    gif.style.opacity=1;
    audioElement.currentTime=0;
    audioElement.play();
   
    selectActiveMusic();
    
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
});

document.getElementById('previous').addEventListener('click',()=>{
    if(songIndex<=0){
        songIndex=5;
    }
    else{
        songIndex-=1;
    }
    audioElement.src=`songs/${songIndex+1}.mp3`;
    masterSongName.innerText=songs[songIndex].songName;
    gif.style.opacity=1;
    audioElement.currentTime=0;
    audioElement.play();
    selectActiveMusic();
   masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
});
        