<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Shackman Press | Printer &amp; Publisher</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script language="javascript" type="text/javascript" src="includes/js/jquery-1.4.2.min.js"></script>
<script language="javascript" type="text/javascript" src="includes/js/jsutils.js"></script>
<script language="javascript" type="text/javascript" src="includes/js/jquery.prettyPhoto.js"></script>
<link rel="openid.server" href="http://www.myopenid.com/server" />
<link rel="openid.delegate" href="http://shackman.myopenid.com/" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19664886-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<?php
include 'templates/header.php';
?>
<div id="content-container">
	<!-- right content column -->
	<div id="right">
    <p>Want (very) sporadic emails about what we're up to? Subscribe to our wildly-infrequent mailing list:</p>
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
        <span class="small-dark">T. (310) 795-6302</span></p>
    <p> <span class="small-light">Or the time-tested, classy, slow, and unreliable way.</span><br>
    <span class="small-dark">Shackman Press</span><br><span class="small-light">56 School St. #2<br>Somerville, MA 02143</span></p>
<span style="margin-top:5px;" class="end-rule"></span>
        <p class="small-dark">About Us</p>
        <p>Shackman Press is a smallish outfit and that's unlikely to change. For a year or so, we happily labored in <em>Deutschland</em> (how history twists and turns)&mdash;first at the <em>Druckladen</em> of the <a href="http://www.gutenberg-museum.de/" target="_blank">Gutenberg Museum</a> in Mainz, and then in Berlin, because, well, that's just what you do.</p><p>The real base of operations, though, has always been dear <strike>Cambridge</strike> Somerville, Massachusetts, the cradle of liberty, higher education, and all the rest&mdash;which has been an off-and-on again home for some time now.</p><p>Though this is a largely analog operation, we're at least as familiar with <a href="http://en.wikipedia.org/wiki/Turing_machines" target="_blank">Turing Machines</a> as we are with Vandercooks.</p><p>These days, we're spending most of our time at the <a href="http://media.mit.edu">Media Lab.</a> Surprisingly bookish, in its way.</p> 
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
				if($i == 30) {
					echo '</div>';
					//echo '<a href="#" id="moreNews"><span class="small-bright-blue">more news &raquo;</span></div></a>';
					break;
                }
            }
			?>
        </div>
        <div id="center">
<img style="float:right;" src="imgs/new_book.png"/>
           <em>Delmore Schwartz</em><br />
        <span class="book-title">In Dreams Begin Responsibilities</span><br />
			Afterword by Morris Dickstein<br />
			Drawings by Linn Meyers<br />
    <p>
We're staggeringly delighted to announce the publication of <em>In Dreams Begin Responsibilities</em> by Delmore Schwartz, a classic short story first published in 1937. Hand-printed from metal types and hand-bound in custom pastepapers, this is our homage to this dark-star of American letters. Accompanied by an original afterword by <a href="http://morrisdickstein.com">Morris Dickstein</a> and elaborate drawings by <a href="http://linnmeyers.com">Linn Meyers</a>. <a href="http://sarahcreighton.com">Sarah Creighton</a> bound 60 books, 45 of which are offered for sale in standard and deluxe editions.
</p>
        <div class="payme" >
        
        <table>
            <tr>
            <td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="LPQZHMJ6YP5D8">
<input type="image" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

            </td>
            <td><span class="small-dark">$210 <em>via</em> paypal, standard, edition of 30. USA postpaid.<span></td>
            </tr>
            <tr>
                <td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="CWQED67ZTZ4SS">
<input type="image" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

    </td>
            <td><span class="small-dark">$475, leather-spined deluxe in cloth chemise, edition of 15. USA postpaid.<span></td>
                </td>
            </tr>
        </table>
        </div>
<br />
            <img class="border" src="imgs/full_schwartz/schwartz_title.jpg" alt="In Dreams Begin Responsibilities, title spread."/><br /> <span class="photo-caption small-light"><em>In Dreams Begin Responsibilities</em>, title spread.</span>

        <p>
In 1937, a young writer lead the first issue of the newly-reborn <em>Partisan Review</em>, with a short, powerful story that was to become one of the classic pieces to appear in the magazine. “In Dreams Begin Responsibilities” was an immediate sensation, and Delmore Schwartz, then just 24, was crowned one of America's rising literary stars; critics crowed of the arrival of a major new talent, and Schwartz himself, charismatic and handsome, had the magnetic, breezy confidence of genius. 
        </p>
        <p>"In Dreams Begin Responsibilities"&mdash;and the subsequent story collection organized around it&mdash; was the high-point of his career. Though Schwartz wrote throughout his life, he struggled with alcohol and barbituates. As poet, teacher, and critic&mdash;ricocheting between universities and New York flophouses&mdash;Schwartz played an increasingly-troubled muse to a generation of writers and artists. His early fame and premature death are somber testament to the challenges brought by great talent and great ambition.
</p>
            <img class="border" src="imgs/full_schwartz/meyers_drawing_02.jpg" alt="Detail of Linn Meyers drawing."/><br /> <span class="photo-caption small-light">Detail from Linn Meyer's intricate ink drawings.</span> 
<p id="buy-schwartz">
Hand-printed on Mohawk Superfine paper on a Vandercook Universal IV in Florence, Massachusetts. 

The body text is Monotype Bembo, set by Michael & Winifred Bixler of Skaneatles, New York—the titling is Monotype 20th Century cast by Swamp Press. 
</p>
            <img class="border" src="imgs/full_schwartz/creighton_papers.jpg" alt="Detail from cover pastepapers."/><br /> <span class="photo-caption small-light"><em>Bound in pastepapers over boards.</em></span>
<p>
<a href="">Sarah Creighton</a> bound 60 copies in original paste papers in her Easthampton, Massachusetts studio, of which 45 are made available for sale. Of that edition, 15 deluxe books are bound in distinctive pastepapers with stamped green-leather spines, and come in a cloth chemise with magnetic closure. All copies are hand-numbered, and signed by Morris Dickstein and Linn Meyers. 36 pp. 7&frac14; &times; 10".</p>
        <div class="payme" >
        
        <table>
            <tr>
            <td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="LPQZHMJ6YP5D8">
<input type="image" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


            </td>
            <td><span class="small-dark">$210 <em>via</em> paypal, standard, edition of 30. USA postpaid.<span></td>
            </tr>
            <tr>
                <td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="CWQED67ZTZ4SS">
<input type="image" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
    </td>
            <td><span class="small-dark">$475 <em>via</em> paypal, leather-spined deluxe in cloth chemise. 1 of 15. USA postpaid.<span></td>
                </td>
            </tr>
        </table>
        </div>
<h3>About the Contributors</h3>
<p>
<span class="small-dark" id="dickstein">Morris Dickstein</span><br/>
<a href="http://morrisdickstein.com">Morris Dickstein</a> is Professor of English at the City University of New York. He has written extensively on modern literature, and was a contributing editor at Partisan Review for some thirty years. Among much else, he is the author of <em>Dancing in the Dark: A Cultural History of the Great Depression</em>, Norton, 2010. 
</p>
<p>
<span class="small-dark" id="meyers">Linn Meyers</span><br />
<a href="http://linnmeyers.com">Linn Meyers</a>&mdash;presently a Washington, DC-based artist&mdash;holds a BFA from Cooper Union and an MFA from the California College of the Arts. Her work has been shown at the The Hammer Museum, Los Angeles; Margaret Thatcher Projects, New York City; Morgan Lehman, New York City; The Phillips Collection, Washington, DC; The Tokyo Metropolitan Museum of Art, Japan; The Smithsonian American Art Museum, Washington DC; and Paris Concret, Paris, France, among others. She is well-known for her temporary site-specific large-scale drawings.

</p>


            <span class="end-rule"></span> 
        </div>
        <div id="center">
            <img class="border" src="imgs/full_weiss/weiss-cover.jpg" alt="German Title of Weiss Book"/><br /> <br /> 
			<span class="book-title">A Few Faces of Emil Rudolf Wei&szlig;</span> <em>or</em><br>
			<span class="book-title">Augewählte Schriften von Emil Rudolf Wei&szlig;</span><br>
<p>A small specimen of typefaces designed by Wei&szlig;, bound by <a href="http://www.sarahcreighton.com" target="_blank">Sarah Creighton</a> in dashing pastepapers. The typefaces used all come from the spectacular collection of the <em>Druckladen</em> of the Gutenberg Musuem in Mainz. Wei&szlig;'s designs&mdash;Antiqua Kursiv, Antiqua Fett, Kapitale, Lapidar Halbfett and Kapitale Halbfett&mdash;are reproduced in two colors and printed on mould-made Zerkall paper.</p> 
        <p><img class="border" src="imgs/full_weiss/weiss-cover-top.jpg" alt="German Title of Weiss Book"/></p>
        <p><img class="border" src="imgs/full_weiss/weiss-spread.jpg" alt="German Title of Weiss Book"/></p>
<p>Available in a limited bilingual edition: twenty-five copies in an English edition and 10 in a German. $10 off if you buy them both. Get em' while they're hot! 20 pp. 5&frac12; &times; 3&frac34;"</p>
    <div class="payme">
    <table>
        <tr>
        <td>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
            ">
            <input type="image" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </td><td><span class="small-dark">$60 <em>via</em> paypal for the English edition.</td>
        </tr>
        <tr>
        <td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
        </td><td><span class="small-dark">$60 <em>via</em> paypal for the German edition.</td>
        </tr>
        <tr>
        <td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="http://shackmanpress.com/includes/buy.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
        </td><td><span class="small-dark">$110 <em>via</em> paypal for the English &amp; German edition.</td>
        </tr>
    </table>
    <br>
            <span class="end-rule"></span> 
    </div>
</div>
        <div id="center">
            <a name="chekhov"></a>
           <br>
           <em>Anton Chekhov</em><br />
			<span class="book-title">Easter Week</span><br />
			Translated by Michael Henry Heim<br />
			Engravings by Barry Moser<br />
 <p>We’re thrilled to announce the publication of <em>Easter Week</em>, a collection of new Anton Chekhov translations and engravings.  Two stories, “The Student," Chekhov’s own favorite, and “On Easter Eve,” appear in a superb new translation by <a href="http://www.humnet.ucla.edu/humnet/slavic/faculty/heim_m.html" target="_blank">Michael Henry Heim.</a> Both stories, as well as an accompanying letter, are illustrated with original engravings by <a href="http://www.moser-pennyroyal.com/" target="_blank">Barry Moser.</a></p>
<a rel="prettyPhoto" title="Ieronim, from <em>On Easter Eve</em> and <em>The Student</em>, both by Barry Moser." style="border:none;hover:none;" href="imgs/full_chekhov/ieronim-and-student.moser.chekhov.shackman.gif"><img  style="border:none;" src="imgs/full_chekhov/ieronim.student.chekhov.gif" alt=""></a>
           <span style="margin-bottom:9px; margin-top:0px;" class="small-light">Ieronim, from <em>On Easter Eve</em> and <em>The Student</em> from <em>Easter Week</em>. Engravings by Barry Moser</span>
<p><em>Easter Week</em> was hand-printed on the “Edwina Ellis” make of Zerkall paper from Dante types cast by <a href="http://www.mwbixler.com" target="_blank">Michael & Winifred Bixler. </a><a href="http://www.sarahcreighton.com/" target="_blank">Sarah Creighton</a> is binding 50 books in cloth, of which </span> 40<span style="text-color:red;">*</span> are offered for sale. An additional ten copies, lettered A-J, are bound in full leather and include three signed stand-alone prints. All copies are signed by the translator and artist.</p><p>A downloadable PDF prospectus is available <a target="_blank" href="includes/pdf/chekhov.shackman.prospectus.pdf" >here</a>.<br></p>
<p>Regretfully, this book is out-of-print.</p>

<br>
            <span class="end-rule"></span> 
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
                    The Press is blushingly-pleased to present a classy edition of Mark Twain's chuckle-inducing (and mildly-insulting) essay about his trials and trevails learning the German language. Snappily-designed, with handprinted &amp; handbound covers, this is an unusual stand-alone version of Twain's famous essay. Available to anyone in the same predicament for $28.
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

                    <p> The book's contents were laid-out digitally in Trump Mediaeval and printed with considerably more speed (but no less care) by the fine men &amp; women of <a href="http://www.acmebook.com/" target="_blank">Acme Bookbinding</a>. For those curious about what the essay is about, the book is available for your <em>kostenlos</em> persual <a href="http://www.shackmanpress.com/includes/pdf/mark_twain.the_awful_german_language.shackman_press.pdf">here.</a> The 1906 edition is available on Google Books too, but you'll have to find that yourself.</p>
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
                    <p>Forty numbered copies are available, and are offered for a jaw-dropping $28, for which purpose the handsome red button (paypal) at right may be used. 32 pp. 5 &times; 8&frac14;".</p>
                </div>
                <span class="end-rule"></span> 
            </div>
           
            <div class="book" onClick="toggleDisplay('more_useful')"> <img class="tb-cover" alt="a solid cover, utilitarian for useful words & grammar" src="imgs/tb_usefulwords.jpg">
                <p><em>Useful Words & Grammar</em><br>
                    <span class="book-title">An Eccentric's Guide to the German Language</span><br>
                    Composed with great pains by the staff of the Shackman Press, and printed in preparation of a certain young lady's arrival in the City of Mainz. The wrappers are handbound and letterpress-printed from Walbaum types. The contents were spewed out with gusto by a trusty Korean engineering marvel.
                <div class="toggle-off" id="more_useful">
                    <div class="tb-cover">
			</div>
                    <p>While we fully vouch for the usefulness of this small guide, we cannot guarantee its accuracy: verbs &amp; conjugations have a wily way of escaping us. If you notice anything amiss, please drop us a note, so that subsequent editions can be corrected. One self-addressed <em>errata</em> sheet is included for this purpose. An edition of ten, 24 pp. 4 &times; 6". This vital resource, unfortunately, is out-of-print.</p>
                <span class="end-rule"></span> </div>
            <div class="book" style="cursor:auto"> <img class="tb-cover" alt="what letterspacing on sesquipedality" src="imgs/sesquipedality.jpg">
                <p><em>Sesquipedality</em><br>
                    <span class="book-title">A Primer for the Aspiring Pedant</span><br>
                    A small collection of difficult words culled from a variety of eccentric dictionaries: ioblepharous, violet-lidded, or perhaps totipalmate, web-toed. Letterpress printed on Zerkall paper and handbound in wrappers. Regrettably, this book is out-of-print.</p>
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
