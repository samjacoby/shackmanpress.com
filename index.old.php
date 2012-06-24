<?php 
if($_SERVER['SERVER_NAME'] != 'localhost') {
	session_start();
	include realpath('includes/php/mysql.authentication.php');
	$date = gmdate("'Y-m-d'");
	$db = db_connect();
	$user = new User($db);
	
	if(isset($_GET['logout'])) {
		$user->removeCookie();
		session_destroy();
		header("Location: index.php");
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Shackman Press | Printer & Publisher</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script language="javascript" type="text/javascript" src="includes/js/jquery-1.4.2.min.js"></script>
<script language="javascript" type="text/javascript" src="includes/js/jsutils.js"></script>
<script language="javascript" type="text/javascript" src="includes/js/jquery.prettyPhoto.js"></script>
<link rel="openid.server" href="http://www.myopenid.com/server" />
<link rel="openid.delegate" href="http://shackman.myopenid.com/" />
</head>
<body>
<?php
include 'templates/header.php';
?>
<div id="content-container">
	<!-- right content column -->
	<div id="right">
    <p>Want sporadic, charming emails about what we're up to? Subscribe to our wildly-infrequent mailing list:</p>
    <form action="." method="post" id="sendEmail">
    	<ol>
        	<li><input type="text" name="email" id="email" value="" /></li>
            <li class="buttons">
            <button type="submit" id="submit1">Submit &raquo;</button>
            <input type="hidden" name="submitted" id="submitted" value="true"/>
            </li>
       </ol>
    </form>
    <span style="margin-top:5px;" class="end-rule"></span>
    Questions? Concerns? Haiku? We delight in prompt correspondence.<br><br>
	<span class="small-dark">Get in touch:</span><br>
    <p> <span class="small-light">You can do it the fast way.</span><span class="small-dark">
				<script type="text/javascript" language="javascript">
					shackmanEmail();
       			</script>
            </span>
    </p>
	<p> <span class="small-light">The personable (but brave!) way.</span><br>
        <span class="small-dark">T. (310) 929-7127</span></p>
    <p> <span class="small-light">Or the time-tested, classy, slow, and unreliable way.</span><br>
    
    <span class="small-dark">Shackman Press</span><br><span class="small-light">84 Prescott St. #1<br>Cambridge, MA 02138</span></p>
<span style="margin-top:5px;" class="end-rule"></span>
        <p>Shackman Press is a smallish outfit, at present, a bit lost in the world. For the last year, we happily labored in <em>Deutschland</em> (how history twists and turns) &mdash; first at the Druckladen of the Gutenberg Museum in Mainz, and then in Berlin, because, well, that's just what you do.</p><p>At present, we've re-camped to the New World (though some would say the <em>Old</em> New World &mdash; sorry <a href="http://books.google.com/books?id=vSCra8jUI2EC&printsec=frontcover&dq=1491&source=bl&ots=p_Ez7_xnmB&sig=hU9ugm7oOpmkmCZ2CKDcGNQTYno&hl=en&ei=uV5QTPSbHsXflgfStoC8CQ&sa=X&oi=book_result&ct=result&resnum=2&ved=0CCkQ6AEwAQ#v=onepage&q&f=false" target="_blank">Charles C. Mann</a>), but what that means is (like so much else) unclear.</p>
    </div>
        <!-- left content column -->
        <div id="left">
            <?php
			// read and display news Items
			include("includes/php/filereader.php");
			$file = realpath("content/newsFeed.txt");
			$i = 0;
			fileRead($file);
			echo '<div id="newsSideBar">';
			while($txt =  fileFeed()) {
				echo '<p><span class="small-dark">'.$txt.'</span>&nbsp;';
				$txt = fileFeed();
				echo "$txt</p>";
				$i++;
				if($i == 20) {
					echo '</div>';
					//echo '<a href="#" id="moreNews"><span class="small-bright-blue">more news &raquo;</span></div></a>';
					break;
                }
            }
			?>
        </div>
        <div id="center"><a rel="prettyPhoto" title="Ieronim, from <em>On Easter Eve</em> and <em>The Student</em>, both by Barry Moser." style="border:none;hover:none;" href="imgs/full_chekhov/ieronim-and-student.moser.chekhov.shackman.gif"><img  style="border:none;" src="imgs/full_chekhov/ieronim.student.chekhov.gif" alt=""></a>
           <span style="margin-bottom:9px; margin-top:0px;" class="small-light">Ieronim, from <em>On Easter Eve</em> and <em>The Student</em> from <em>Easter Week</em>. Engravings by Barry Moser</span>
           <br>
           <em>Anton Chekhov</em><br>
			<span class="book-title">Easter Week</span><br>
			Translated by Michael Henry Heim<br>
			Engravings by Barry Moser<br>
 <p>We’re thrilled to announce the publication of <em>Easter Week</em>, a collection of new Anton Chekhov translations and engravings.  Two stories, “The Student," Chekhov’s own favorite, and “On Easter Eve,” appear in a superb new translation by <a href="http://www.humnet.ucla.edu/humnet/slavic/faculty/heim_m.html" target="_blank">Michael Henry Heim.</a> Both stories, as well as an accompanying letter, are illustrated with original engravings by <a href="http://www.moser-pennyroyal.com/" target="_blank">Barry Moser.</a></p>
<p><em>Easter Week</em> was hand-printed on the “Edwina Ellis” make of Zerkall paper from Dante types cast by <a href="http://www.mwbixler.com" target="_blank">Michael & Winifred Bixler. </a><a href="http://www.sarahcreighton.com/" target="_blank">Sarah Creighton</a> is binding 110 books in cloth, of which 95 are offered for sale at $200. An additional ten copies, lettered A-J, are bound in full leather and include three signed stand-alone prints. They are <span class="strike-through">offered at $650</span> no longer available. All copies are signed by the translator and artist.</p><p>A downloadable PDF prospectus is available <a target="_blank" href="includes/pdf/chekhov.shackman.prospectus.pdf" >here</a>.<br></p>
<div class="payme">
<table>
<tr>
<td>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td><td><span class="small-dark">$200 <em>via</em> paypal, for the cloth edition.</td>
</table>
<br>
            <span class="end-rule"></span> 
            </div>
             <div class="book" onClick="toggleDisplay('more_celan')">
                <p><em>Paul Celan</em><br>
                    <span class="book-title">A Reading for Group 47</span><br>
                    Our first <em>proper</em> publication &mdash; that is, the first we really sweated over &mdash; came off of the press in the spring of 2009. <em>A Reading for Group 47</em> reprints four of Celan's earliest poems in his original German, and <a href="http://english.stanford.edu/bio.php?name_id=49" target="_blank">John Felstiner's</a> powerful English translations. An original portrait of Celan by <a href="http://www.dirkhagner.com/">Dirk Hagner</a> appears as frontispiece. Fifty copies were letterpress printed from Monotype originals, and handsewn.</p>
                <div>
                <a rel="prettyPhoto" title="Title Spread from <em>A Reading for Group 47</em>. Portrait by Dirk Hagner." style="border:none;hover:none;" href="imgs/full_celan/title.spread.celan.hagner.shackman-full.jpg"><img  style="border:none;padding-bottom:8px;" src="imgs/full_celan/title.spread.celan.hagner.shackman.jpg" alt=""></a><br />
           <span style="margin-bottom:9px;" class="small-light">Title spread. Portrait by Dirk Hagner, adapted by the artist from a large-scale woodcut.</span>                   
                </div>
                <div class="toggle-off" id="more_celan">
                    <p>Celan read the four poems printed here &mdash; "In Egypt," "A Song in the Wilderness," "Deathfugue," and "Count up the Almonds &mdash; at a meeting of the German literary club, Group 47. After their publication later that year, Celan catapulted to prominence. Written when he was in his early twenties and grieving the death of his parents, "Deathfugue" is a transformative elegy to the horrors of the Holocaust. The curious can listen to Celan reading the poem on <a target="_blank" href="http://www.yes2art.com/DACH/todes_dead.html">this technicolor website.</a></p>
                    <p><em>A Reading for Group 47</em> is hand-printed on mouldmade Zerkall paper. The type&mdash;Eric Gill's Joanna&mdash;was cast and set by <a href="http://www.mwbixler.com" target="_blank">Michael & Winifred Bixler</a>. Take a look at the Kat Ran Press's classy <a target="_blank" href="http://katranpress.com/resources.html">video collection</a> of the Bixlers' Monotype machine's in action, to get an idea how that works. An unusual typeface &mdash; especially in German &mdash; Joanna was a privately-distributed until Monotype's reissue in 1958.</p>
<!--                    <div onclick="cancelAction(event)" class="payme tb-cover">
                        <!-- REGULAR BUTTON -->
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
                            <input type="image" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                        <!-- END REGULAR BUTTON -->
                        <span class="small-dark">$45 <em>via</em> paypal</span> </div> -->
                    <p> Fifty numbered copies were signed by both the translator and the artist, and made available for sale. An additional 15 copies are withheld for the artist, translator, and publisher. This book was made possible by the generous support of the Katherine Russem Memorial Residency for Young Printers at <a href="http://www.katranpress.com" target="_blank">Kat Ran Press</a>.16 pp. 7 &times; 10&frac12;".</p>
                    <p>Regretfully, this book is out-of-print.</p>
                </div>
                
            </div>
            <!-- TWAIN -->
           <div class="book" onClick="toggleDisplay('more_twain')"> 
            <div class="menu-bg" style="width:93%">
                                <img title="Ephemera" alt="Ephemera" src="includes/ephemera_btn_wht.jpg">
				</div>
          <a class="picture" href="imgs/full_twain/twain.side-full.jpg" rel="prettyPhoto"  title="Comes in a few colors."><img src="imgs/full_twain/twain.side.jpg" class="tb-cover picture" title="Mark Twain - Awful German Language - Cover"></a>
                <p><em>Mark Twain</em><br>
                   <span class="book-title">The Awful German Language</span><br>
                    The Press is blushingly-pleased to present our (second-to) latest: a fine edition of Mark Twain's chuckle-inducing (and mildly-insulting) essay about his trials and trevails learning the German language. Snappily-designed, with handprinted &amp; handbound covers, this is an unusual stand-alone version of Twain's famous essay. Available to anyone in the same predicament for $28.
                    <!--<div class="smaller-no-color info-box">
						<strong>Typefaces Used:</strong><br>
						<em>Wallau,</em>1921<br>
						d. Rudolf Koch<br>
						Klingspor Foundry<br>
						<em>Colonia,</em>1932<br>
						d. Fried Kemper<br>
						Ludwig & Mayer F.<br>
						<em>Wei&szlig;,</em> 1925<br>
						d. Emil Wei&szlig;<br>
                        Bauer Foundry<br>
                    </div>                
                   -->
<div class="toggle-off" id="more_twain">
                    <p><em>The Awful German Language</em> is handbound in Hahnem&uuml;hle wrappers printed on a Korrex cylinder-press &mdash; the continental analogue of the American Vandercooks. The types used are foundry originals <em>(see photo)</em> from the spectacular collection of the Druckladen des Gutenberg-Museum in Mainz, Germany. Mainz, of course, is where printing all began. It's also not so far from where Samuel Clemens was wandering about in Heidelberg, complaining about seperable verbs and such. If that doesn't grab you, I don't know what will. This is history!</p>

<a href="imgs/full_twain/twain.form-full.jpg" rel="prettyPhoto" class="picture" title="That's 72pt Wallau. It weighs 12 kilos."><img class="picture" title="Mark Twain - Awful German Language - Metal Layout" alt="Lead-layout of Mark Twain cover" src="imgs/full_twain/twain.form.jpg"></a><br><span style="margin-bottom:9px; margin-top:0px;" class="small-light">Tied-up form, Rudolf Koch's Wallau &amp; Jessen, with authentic flash highlight.</span>

                    <p> The books contents were laid-out digitally in ITC Bitstream's version of Wei&szlig;-Antiqua, and printed with considerably more speed (but no less care) using the latest in personal publishing technologies. For those curious about what the essay is about, the book is available for your <em>kostenlos</em> persual <a href="http://www.shackmanpress.com/includes/pdf/mark_twain.the_awful_german_language.shackman_press.pdf">here.</a> The 1906 edition is available on Google Books too, but you'll have to find that yourself.</p>
                    <div onclick="cancelAction(event)" class="payme tb-cover">
                        <!-- REGULAR BUTTON -->
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
                            <input type="image" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        </form>
                        <!-- END REGULAR BUTTON -->
                        <span class="small-dark">$28 <em>via</em> paypal</span> </div>
                    <p>Forty numbered copies are available, and are offered for the affordable (but not <em>too</em> affordable) price of $28, for which purpose the handsome red button (paypal) at right may be used. These are coming aus Deutschland, so shipping is not included. 32 pp. 5 &times; 8&frac14;".</p>
                </div>
                <span class="end-rule"></span> 
            </div>
           
            <div class="book" onClick="toggleDisplay('more_useful')"> <img class="tb-cover" alt="a solid cover, utilitarian for useful words & grammar" src="imgs/tb_usefulwords.jpg">
                <p><em>Useful Words & Grammar</em><br>
                    <span class="book-title">An Eccentric's Guide to the German Language</span><br>
                    Composed with great pains by the staff of the Shackman Press, and printed in preparation of a certain young lady's arrival in the City of Mainz. The wrappers are handbound and letterpress-printed from Walbaum types. The contents were spewed out with gusto by a trusty Korean engineering marvel. In keeping with the great American Everything-Is-For-Sale ethos (one we love dearly), one of these treasured keepsakes can be yours for a meager $14.
                <div class="toggle-off" id="more_useful">
                    <div class="tb-cover">
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
                            <input type="image" onclick="cancelAction(event)" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        </form>
                        <span class="small-dark">$14 <em>via</em> paypal</span> </div>
                    <p>The pleasant red button at right will ferry you to a reputable e-commerce site. While we fully vouch for the usefulness of this small guide, we cannot guarantee its accuracy: verbs &amp; conjugations have a wily way of escaping us. If you notice anything amiss, please drop us a note, so that subsequent editions can be corrected. One self-addressed <em>errata</em> sheet is included for this purpose. An edition of ten, 24 pp. 4 &times; 6".</p>
                </div>
                <span class="end-rule"></span> </div>
            <div class="book" style="cursor:auto"> <img class="tb-cover" alt="what letterspacing on sesquipedality" src="imgs/sesquipedality.jpg">
                <p><em>Sesquipedality</em><br>
                    <span class="book-title">A Primer for the Aspiring Pedant</span><br>
                    A small collection of difficult words culled from a variety of eccentric dictionaries: ioblepharous, violet-lidded, or perhaps totipalmate, web-toed. Letterpress printed on Zerkall paper and handbound in wrappers. Regrettably, this book is out-of-print, which somewhat paradoxically (I'm told), only increases its desirability. So be it. Make me an offer! </p>
            </div>
        </div>
	<div id="footer"> <span class="small-dark"><span style="float:left">
    <script type="text/javascript" language="javascript">
	shackmanEmail();
	</script>
    &emsp;
    <?php
	if(isset($_SESSION['logged']) && ($_SESSION['logged'] == true)) {
		echo '<span class="small-dark"><a href="index.php?logout=1">logout '.$_SESSION["username"].'</a></span>';
	}
	?>
    </span><span style="float:right">last updated <?php echo date("j F Y", getlastmod()) ?></span></span> 
    </div>
</div>
    </div>
</body>
</html>
