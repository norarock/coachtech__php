<?php
$count = 0;

while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  print $count.'<br />';
  $count++;
}

function addScore($score1, $score2, $score3) {
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo '合計点は' . $total . 'なので合格です';
  }else{
    echo '合計点は' . $total . 'なので不合格です';
  }
}

print(addScore(80, 60 ,90));

//7章の問の自分の解答
function Triangle ($bottom1, $height1) {
  $area1 = $bottom1 * $height1 / 2;
  return $area1;
}
function Square ($bottom2, $height2) {
  $area2 = $bottom2 * $height2;
  return $area2;
}
function Trapezoid ($upperbase, $bottombottom, $height3,) {
  $area3 = ($upperbase + $bottombottom) * $height3 / 2;
  return $area3;
}

print Triangle(5, 10);
print "\n";
print Square(8, 5);
print "\n";
print Trapezoid(4, 2, 5);

//7章の問2の別解
function getSquareArea($base, $height)
{
   return $base * $height;
}
function getTriangleArea($square_area)
{
  return $square_area / 2;
}
echo $square_area =getSquareArea(5, 5);
echo "\n";
echo getTriangleArea($square_area);


$subjects_score = array(

  'english' => 70,

  'math' => 85,

  'japanese' => 50,

  'science' => 45,
);

$subjects_score['history'] = 80;

unset($subjects_score['science']);

var_dump($subjects_score);

<form action="result.php" method="post">
  お名前：<input type="text" name="my_name">
  <br>
  ご希望商品：
    <input type="radio" name="choices" value="Aセット">Aセット
    <input type="radio" name="choices" value="Bセット">Bセット
    <input type="radio" name="choices" value="Cセット">Cセット
  <br>
  注文数：<select name=number>
    <?php
    for ($i = 1; $i <= 10; $i++) { ?>
      <option value= "<?php echo $i; ?>">
        <?php echo $i; ?>
      </option>
    <?php } ?>
  </select>
  <br>
    <input type="submit" value="送信" />
</form>