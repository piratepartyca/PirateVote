<?php
global $user;
global $node;
$uid = $user->uid;
$mysql_user = $_SERVER['SQL_USER'];
$mysql_pass = $_SERVER['SQL_PASS'];

?>

<!-- REMEMBER TO CHANGE THE VID BELOW! --><?php


$vid = 'XXXXXXXXXXX';





$token = md5(uniqid(rand(), TRUE));
$_SESSION['token'] = $token;
$_SESSION['token_time'] = time();

if (!isset($_SESSION['token']))
{
    $_SESSION['token'] = md5(uniqid(rand(), TRUE));
}
mysql_connect("localhost", $mysql_user, $mysql_pass) or die(mysql_error());
mysql_select_db("ppca2") or die(mysql_error());
$result = mysql_query("select voted from ppca2.voted where uid = '$uid' AND vid = '$vid'") or die(mysql_error());
               $row = mysql_fetch_array($result);

                                $voted = $row['voted'];
if ($uid!="0")
  {

  // Check to see if $user has the administrator role.
  if (in_array('Member', array_values($user->roles))) {
    // Do something.



if ($voted != '0'){                               
 if ($voted != '1'){
                                	?>


<form name="submitvote" action="/validate" method="post">
<input type="hidden" name="token" value="<?php echo $token; ?>" />
<div class="vote">
  <label for="vote"><strong class="vote-label">Your Vote:</strong></label>
  <input type="text" spellcheck="false" name="result" id="result" value="">
  <input type="hidden" spellcheck="false" name="vid" id="vid" value="<?php echo $vid; ?>">
</div><br>
<input type="submit" name="submit" id="submit" value="submit">
  </form>
  <?php
                                }
                                else if ($voted == '1'){
echo ("You have already voted!");
                                }
}  }
  }
else
  {
  echo "Sign-in to vote!";
  }

                                

  ?>
