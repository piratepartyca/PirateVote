<?php
global $user;
global $node;
$uid = $user->uid;
$mysql_user = $_SERVER['SQL_USER'];
$mysql_pass = $_SERVER['SQL_PASS'];

?>

<!-- REMEMBER TO CHANGE THE VID BELOW! --><?php


$vid = 'xxxx';
$vote1 = 'xxxxx';
$vote2 = 'xxxxx';
$vote3 = 'xxxxx';
$vote4 = 'xxxxx';
$vote5 = 'xxxxx';
$vote6 = 'xxxxx';
$vote7 = 'xxxxx';
$vote8 = 'xxxxx';
$vote9 = 'xxxxx';
$vote10 = 'xxxxx';
$vote11 = 'xxxxx';
$vote12 = 'xxxxx';

$token = md5(uniqid(rand(), TRUE));
$_SESSION['token'] = $token;
$_SESSION['token_time'] = time();

if (!isset($_SESSION['token']))
{
    $_SESSION['token'] = md5(uniqid(rand(), TRUE));
}
mysql_connect("localhost", $mysql_user, $mysql_pass) or die(mysql_error());
mysql_select_db("ppca2") or die(mysql_error());
$result = mysql_query("select voted from ppca2.approval_voters where voter = '$uid' AND vid = '$vid'") or die(mysql_error());
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

Please vote for your candidates below by selecting either a Yes, No, or Abstain option. Abstain is marked by default.
<br><br>
Visit the forums <a href="https://www.pirateparty.ca/xxxxxxxxxxxxxxx">here</a> to look over each candidate's nomination/campaign posts before making your decision.
<br><br>
Thank you for participating.<br><br><br>

<form name="submitvote" action="/validate_approval" method="post">
<input type="hidden" name="token" value="<?php echo $token; ?>" />
<div class="vote">
  <label for="vote"><strong class="vote-label"><?php echo $vote1;?></strong></label>
<input type="radio" name="vote1" value="yes"> Yes<br>
<input type="radio" name="vote1" value="no" checked=""> No<br>
<input type="radio" name="vote1" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote2;?></strong></label>
<input type="radio" name="vote2" value="Yes"> Yes<br>
<input type="radio" name="vote2" value="No"> No<br>
<input type="radio" name="vote2" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote3;?></strong></label>
<input type="radio" name="vote3" value="Yes"> Yes<br>
<input type="radio" name="vote3" value="No" checked=""> No<br>
<input type="radio" name="vote3" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote4;?></strong></label>
<input type="radio" name="vote4" value="Yes"> Yes<br>
<input type="radio" name="vote4" value="No"> No<br>
<input type="radio" name="vote4" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote5;?></strong></label>
<input type="radio" name="vote5" value="Yes"> Yes<br>
<input type="radio" name="vote5" value="No" checked=""> No<br>
<input type="radio" name="vote5" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote6;?></strong></label>
<input type="radio" name="vote6" value="Yes"> Yes<br>
<input type="radio" name="vote6" value="No"> No<br>
<input type="radio" name="vote6" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote7;?></strong></label>
<input type="radio" name="vote7" value="Yes"> Yes<br>
<input type="radio" name="vote7" value="No" checked=""> No<br>
<input type="radio" name="vote7" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote8;?></strong></label>
<input type="radio" name="vote8" value="Yes"> Yes<br>
<input type="radio" name="vote8" value="No"> No<br>
<input type="radio" name="vote8" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote9;?></strong></label>
<input type="radio" name="vote9" value="Yes"> Yes<br>
<input type="radio" name="vote9" value="No" checked=""> No<br>
<input type="radio" name="vote9" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote10;?></strong></label>
<input type="radio" name="vote10" value="Yes"> Yes<br>
<input type="radio" name="vote10" value="No"> No<br>
<input type="radio" name="vote10" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote11;?></strong></label>
<input type="radio" name="vote11" value="Yes"> Yes<br>
<input type="radio" name="vote11" value="No"> No<br>
<input type="radio" name="vote11" value="Abstain" checked=""> Abstain<br>
  <label for="vote"><strong class="vote-label"><?php echo $vote12;?></strong></label>
<input type="radio" name="vote12" value="Yes"> Yes<br>
<input type="radio" name="vote12" value="No"> No<br>
<input type="radio" name="vote12" value="Abstain" checked=""> Abstain<br>
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
