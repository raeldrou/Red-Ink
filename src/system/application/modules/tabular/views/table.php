<div id="module">
<h2>My Transactions</h2>
<table id='tabular'>
<?php 
echo "<thead><tr><td>Created</td><td>$$$</td><td>Memo</td><td>Merchant</td></tr></thead><tbody>\n";
$i=0;
foreach ($transactions AS $t) {
// testing loop
 echo "h3ll0";
 $rowstyle = ($i++%2==0) ? "row1" : "row2";
  $t["amount"] = $t["amount"]/100;
  echo "<tr class='$rowstyle'><td>$t[created]</td><td>\$$t[amount]&nbsp;</td><td>$t[memo]&nbsp;</td><td>$t[merchant]</td></tr>\n";
}
?>
</tbody></table>
</div>
