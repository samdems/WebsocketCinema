<?php $name = array('sam','terry');?>
<table class="table table-bordered">
  <tr class="info"><td>auto sync</td><td></td><tr>
  <tr class="info2"><td class="hover" onclick="myPlayer.play();">play</td><td></td><tr>
    <tr class="info2"><td class="hover" onclick="myPlayer.pause();">pause</td><td></td><tr>
</table>

<table class="table table-bordered">
  <tr class="info"><td>users</td><td></td></tr>
 <?php for ($i = 0; $i <= count($name)-1; $i++) {echo '<tr><td>'.$name[$i].'</td><td></td></tr>';}?>
</table>


<table class="table table-bordered">
  <tr class="info"><td>log</td><td></td></tr>
    <tr><td><div id=log></div><br>more stuff</td><td></td></tr>
</table>