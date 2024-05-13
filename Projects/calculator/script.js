// console.log("Welcome to my calculator");
let screen=document.getElementById("screen");
let buttons=Array.from(document.querySelectorAll('button'));
let oper=["+","-","/","X"]
let output="";
function calculation(btnvalue){
    screen.focus();
    if(btnvalue ==='=' && output !==""){
       output=eval(output);
    }
    else if(btnvalue==='AC'){
        output="";
    }
    else if(btnvalue === "DEL"){
        output=output.slice(0,-1);
    }
    else{
        if(oper.includes(btnvalue) && output === "") return;
        output += btnvalue;
    }
    screen.value=output;
}

buttons.forEach((elem)=>{
    elem.addEventListener('click',(e)=>{
        // console.log("entered");
        calculation(e.target.dataset.value);
    })
});