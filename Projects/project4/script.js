// console.log("Welcome to tic tac toe");
let music=new Audio("music.mp3");
let turnMusic=new Audio("ting.mp3");
let turn="X";
let gameOver=false;
let boxes=Array.from(document.getElementsByClassName("box"));
let number=0;

// Function to change the turn
const changeTurn=()=>{
    return turn==="X"?"0":"X";
};

// Function to decide who win
const checkWin=()=>{
    let boxtext=document.getElementsByClassName('boxtext');
    let wins=[
        [0,1,2],
        [3,4,5],
        [6,7,8],
        [0,3,6],
        [1,4,7],
        [2,5,8],
        [0,4,8],
        [2,4,6],
    ];
//   let box=Array.from(document.getElementsByClassName('box'));
    wins.forEach(e=>{
        
        if((boxtext[e[0]].innerText === boxtext[e[1]].innerText) && (boxtext[e[2]].innerText === boxtext[e[1]].innerText) && (boxtext[e[0]].innerText !== "")){
           
            document.querySelector('.info').innerText=boxtext[e[0]].innerText+ " Won";
            document.getElementsByTagName('img')[0].style.display="block";
           
            boxes[e[0]].style.backgroundColor="yellow";
            boxes[e[1]].style.backgroundColor="yellow";
            boxes[e[2]].style.backgroundColor="yellow";
            gameOver=true;
        }
        

       
    })
}


boxes.forEach(element=>{
    
    let boxText=element.querySelector('.boxtext');
    element.addEventListener('click',()=>{
        music.play();
       
        if(!gameOver){
        if(boxText.innerText === ''){
            
            boxText.innerText=turn;
            turn=changeTurn();
            turnMusic.play();
            number++;
            checkWin();
            draw();
            if(!gameOver){
                 document.getElementsByClassName('info')[0].innerText="Turn for " + turn;
            }
            
           }
           else{
            alert("This box is already filled try filling in empty boxes!");
           }
      }

    //   if(gameOver){
    //     let decide=confirm("The game is already over, do you want to restart the game?");
    //     if(decide){
    //       reseting();
    //     }

    // }

    })
});

const reseting=()=>{
    let boxtext=Array.from(document.getElementsByClassName('boxtext'));
    boxtext.forEach(e=>{
        e.innerText="";
        document.getElementsByTagName('img')[0].style.display="none";
    });
    boxes.forEach(element=>{
        element.style.backgroundColor="";
    });
    turn="X";
    gameOver=false;
    number=0;
    if(!gameOver){
        document.getElementsByClassName('info')[0].innerText="Turn for " + turn;
   }
}
// working with reset button
document.getElementById('reset').addEventListener('click',reseting);

// checking for draw
const draw=()=>{
// if(boxes[0].innerText===boxes[1].innerText && boxes[1].innerText===boxes[2].innerText && boxes[2].innerText===boxes[3].innerText && boxes[3].innerText===boxes[4].innerText && boxes[4].innerText===boxes[5].innerText
//     && boxes[5].innerText===boxes[6].innerText && boxes[6].innerText===boxes[7].innerText && boxes[7].innerText===boxes[8].innerHTML &&
//     boxes[8].innerText!=""){
    if(number==9 && !gameOver){
    alert("The match is drawn");
    reseting();
}
}