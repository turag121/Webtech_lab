<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Calculator</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f2f2f2;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.calculator{
    background:white;
    padding:20px;
    border-radius:10px;
}

#display{
    width:100%;
    height:50px;
    font-size:20px;
    text-align:right;
    margin-bottom:10px;
    padding-right:10px;
}

.buttons{
    display:grid;
    grid-template-columns: repeat(4,60px);
    grid-gap:10px;
}

button{
    height:50px;
    font-size:18px;
    border:none;
    background:#e0e0e0;
    cursor:pointer;
    border-radius:5px;
}
/* 
button:hover{
    background:#cfcfcf;
} */

.operator{
    background:#f9a825;
    color:white;
}

.equal{
    background:#4caf50;
    color:white;
}

.clear{
    background:#e53935;
    color:white;
}
</style>
</head>

<body>

<div class="calculator">

<input type="text" id="display" disabled>

<div class="buttons">

<button onclick="clearDisplay()" class="clear">C</button>
<button onclick="appendValue('/') " class="operator">/</button>
<button onclick="appendValue('*')" class="operator">*</button>
<button onclick="appendValue('-')" class="operator">-</button>

<button onclick="appendValue('7')">7</button>
<button onclick="appendValue('8')">8</button>
<button onclick="appendValue('9')">9</button>
<button onclick="appendValue('+')" class="operator">+</button>

<button onclick="appendValue('4')">4</button>
<button onclick="appendValue('5')">5</button>
<button onclick="appendValue('6')">6</button>
<button onclick="calculate()" class="equal">=</button>

<button onclick="appendValue('1')">1</button>
<button onclick="appendValue('2')">2</button>
<button onclick="appendValue('3')">3</button>

<button onclick="appendValue('0')" style="grid-column: span 2;">0</button>

</div>

</div>

<script>

function appendValue(value){
    document.getElementById("display").value += value;
}

function clearDisplay(){
    document.getElementById("display").value = "";
}

function calculate(){
    let expression = document.getElementById("display").value;
    try{
        document.getElementById("display").value = eval(expression);
    }catch{
        document.getElementById("display").value = "Error";
    }
}

</script>

</body>
</html>