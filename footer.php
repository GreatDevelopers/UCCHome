</div>
<div class="newFooter">
<?php

$PathImage="ukieri_logo/";
//$border="";
$FooterWidth="60px";
//mysql_select_db("django", $con);

$result = mysql_query("SELECT * FROM ukieri_participants order by `weight`");
echo "<div class=\"footerLogo\"><h2>Host Organizations</h2>";
while($row = mysql_fetch_array($result))  //To excute result query 
  {
echo "<a href='http://".$row['website']."' target='_blank' style='margin:10px'><img src=\"" . $PathImage . $row['logo'] .  "\" height = $FooterWidth  alt=\"logo\" ></a>";
  }
echo "</div>";
mysql_close($con);
?>
<div class="footer"><div class='GapLarge'>
Host Organisations: <a class="footerLinks" href="?refNo=11&amp;fileRef=TradeFair">Dr B R Ambedkar National Institute of Technology,</a> <a class="footerLinks" href="?refNo=10&amp;fileRef=TradeFair">Jalandhar</a> 
and <a class="footerLinks" href="?refNo=12&amp;fileRef=TradeFair">Guru Nanak Dev Engineering College, Ludhiana</a> <a class="footerLinks" href="?refNo=3&amp;fileRef=TradeFair">(Punjab)</a> 
<a class="footerLinks" href="?refNo=13&amp;fileRef=TradeFair">India</a> 
<br><p>
    <a href="http://validator.w3.org/check?uri=referer"><img
          src="https://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Transitional" height="31" width="88"></a>

<a href="https://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="https://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!">
    </a>

    </p> </div></div>
</div>

</table>
</div>


<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://ukiericoncretecongress.com/piwik/" : "http://ukiericoncretecongress.com/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 2);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://ukiericoncretecongress.com/piwik/piwik.php?idsite=2" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</div>
</body>
</html>
