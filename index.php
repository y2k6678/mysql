<?
  $text = $_POST[text];
  if (isset($text)) {
    $date = date("Y-m-d H:i");
    $sql = "";
    for ($i = 1; $i <= count($text); $i++) {
      if ($text[$i] != "") $sql .= "INSERT INTO chatlog (date, text) VALUES ('$date', '$text[$i]'); ";
    };
    echo $sql; //ผลลัพท์ sql เอาไป query
  }
?>
<form action="?" method="post">
<input type="text" name="text[1]"><br />
<input type="text" name="text[2]"><br />
<input type="text" name="text[3]"><br />
<input type="text" name="text[4]"><br />
<input type="text" name="text[5]"><br />
<input type="submit" name="submit" value="Send">
</form>
