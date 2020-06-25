<?php
   $ot = 0;
   $not = 0;
   $quest = 10;
      if ($_POST[q1] == a){$ot++;} else {$not++;}
      if ($_POST[q2] == a){$ot++;} else {$not++;}
	  if ($_POST[q3] == b){$ot++;} else {$not++;}
	  if ($_POST[q4] == c){$ot++;} else {$not++;}
	  if ($_POST[q5] == b){$ot++;} else {$not++;}
	  if ($_POST[q6] == c){$ot++;} else {$not++;}
	  if ($_POST[q7] == a){$ot++;} else {$not++;}
	  if ($_POST[q8] == b){$ot++;} else {$not++;}
	  if ($_POST[q9] == a){$ot++;} else {$not++;}
	  if ($_POST[q10] == c){$ot++;} else {$not++;}
	  $proz = $ot/$quest*100;
?>
<!DOCTYPE HTML>
<html>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/rez.css" type = "text/css">
</head>
<body>
 <div class="main">
<p id="zag">Вы ответили правильно на <?php echo round ($proz); ?>% вопросов</p> 
<p id="bar"> <progress  name="bar" max="100" value="<?php echo round ($proz); ?>">  <!-- Прогресс загрузки, без value перемещается из стороны в сторону, round - округляет -->
   </progress> </p>
   <p id="potv">Правильных ответов: <?php echo $ot; ?></p>
<p id="npotv">Неправильных ответов: <?php echo $not; ?></p>
 <div id="answers" >
<?php
     if ($_POST[q1] == a) 
	 { 
 echo '<p style="color:green">Вопрос 1.' . ' ' .  $_POST[vop1] . ' ' . "Вы ответили верно. Ваш ответ: $_POST[q1]</p>"; } else { echo '<p style="color:red">Вопрос 1.' . ' ' .  $_POST[vop1] . ' ' . "Вы ответили неверно. Ваш ответ: $_POST[q1]</p>";
	 }
	 if ($_POST[q2] == a) 
	 { 
 echo '<p style="color:green">Вопрос 2.' . ' ' .  $_POST[vop2] . ' ' . "Вы ответили верно. Ваш ответ: $_POST[q2]</p>"; } else { echo '<p style="color:red">Вопрос 2.' . ' ' .  $_POST[vop2] . ' ' . "Вы ответили неверно. Ваш ответ: $_POST[q2]</p>";
	 }
	 if ($_POST[q3] == b)
	 	 { 
 echo '<p style="color:green">Вопрос 3.' . ' ' .  $_POST[vop3] . ' ' . "Вы ответили верно. Ваш ответ: $_POST[q3]</p>"; } else { echo '<p style="color:red">Вопрос 3.' . ' ' .  $_POST[vop3] . ' ' . "Вы ответили неверно. Ваш ответ: $_POST[q3]</p>";
	 }
	 if ($_POST[q4] == c)
	 	 { 
 echo '<p style="color:green">Вопрос 4.' . ' ' .  $_POST[vop4] . ' ' . "Вы ответили верно. Ваш ответ: $_POST[q4]</p>"; } else { echo '<p style="color:red">Вопрос 4.' . ' ' .  $_POST[vop4] . ' ' . "Вы ответили неверно. Ваш ответ: $_POST[q4]</p>";
	 }
	  if ($_POST[q5] == b)
	 	 { 
 echo '<p style="color:green">Вопрос 5.' . ' ' .  $_POST[vop5] . ' ' . "Вы ответили верно. Ваш ответ: $_POST[q5]</p>"; } else { echo '<p style="color:red">Вопрос 5.' . ' ' .  $_POST[vop5] . ' ' . "Вы ответили неверно. Ваш ответ: $_POST[q5]</p>";
	 }
	  if ($_POST[q6] == c)
	 	 { 
 echo '<p style="color:green">Вопрос 6.' . ' ' .  $_POST[vop6] . ' ' . "Вы ответили верно. Ваш ответ: $_POST[q6]</p>"; } else { echo '<p style="color:red">Вопрос 6.' . ' ' .  $_POST[vop6] . ' ' . "Вы ответили неверно. Ваш ответ: $_POST[q6]</p>";
	 }
	 if ($_POST[q7] == a)
	 	 { 
 echo '<p style="color:green">Вопрос 7.' . ' ' .  $_POST[vop7] . ' ' . "Вы ответили верно. Ваш ответ: $_POST[q7]</p>"; } else { echo '<p style="color:red">Вопрос 7.' . ' ' .  $_POST[vop7] . ' ' . "Вы ответили неверно. Ваш ответ: $_POST[q7]</p>";
	 }
	 if ($_POST[q8] == b)
	 	 { 
 echo '<p style="color:green">Вопрос 8.' . ' ' .  $_POST[vop8] . ' ' . "Вы ответили верно. Ваш ответ: $_POST[q8]</p>"; } else { echo '<p style="color:red">Вопрос 8.' . ' ' .  $_POST[vop8] . ' ' . "Вы ответили неверно. Ваш ответ: $_POST[q8]</p>";
	 }
	 if ($_POST[q9] == a)
	 	 { 
 echo '<p style="color:green">Вопрос 9.' . ' ' .  $_POST[vop9] . ' ' . "Вы ответили верно. Ваш ответ: $_POST[q9]</p>"; } else { echo '<p style="color:red">Вопрос 9.' . ' ' .  $_POST[vop9] . ' ' . "Вы ответили неверно. Ваш ответ: $_POST[q9]</p>";
	 }
	  if ($_POST[q10] == c)
	 	 { 
 echo '<p style="color:green">Вопрос 10.' . ' ' .  $_POST[vop10] . ' ' . "Вы ответили верно. Ваш ответ: $_POST[q10]</p>"; } else { echo '<p style="color:red">Вопрос 10.' . ' ' .  $_POST[vop10] . ' ' . "Вы ответили неверно. Ваш ответ: $_POST[q10]</p>";
	 }
?>
</div>
</div>
</body> 
</html>