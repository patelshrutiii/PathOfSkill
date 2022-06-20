<?php
require_once "header.php";
require_once "script.php"
?>
<style>
p{
  font-size:60px;
  text-align:center;
}
</style>
<p>color of text will keep changing on each click</p>

 <button onClick="getRandomColor()">Click on me</button>
<script>
function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
   $('p').css('color',color);
} 



</script>
