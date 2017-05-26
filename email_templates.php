<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */
include "include/top.php";
?>

<div class="container">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item active">Email templates</li>
	</ol>
	<div class="row">
		<div class="col">
	<?php
	if (isset($_GET["modify"]) && !isset($_POST["id"]) && !isset($_GET["lang"]) && !isset($_GET["tmp_name"]))
	{
		$element = $email_tmp->findOne( array( '_id' => new MongoID( $_GET["modify"] ) ) );
	?>
		<a href="email_templates.php" class="btn btn-primary">Back to template list</a>
		<form method="get">
			Template name:<input type="text" name="tmp_name" class="form-control" placeholder="Template name." value="<?php echo $element["name"];?>">
			<div class="form-group">
				<label for="formGroupExampleInput3">Language of the template:</label>
				<select class="form-control" name="lang">
<option value="om">Afaan Oromoo</option><option value="aa">Afaraf</option><option value="af">Afrikaans</option><option value="ak">Akan</option><option value="an">Aragonés</option><option value="ig">Asụsụ Igbo</option><option value="gn">Avañe'ẽ</option><option value="ae">Avesta</option><option value="ay">Aymar Aru</option><option value="az">Azərbaycan Dili</option><option value="id">Bahasa Indonesia</option><option value="ms">Bahasa Melayu</option><option value="bm">Bamanankan</option><option value="jv">Basa Jawa</option><option value="su">Basa Sunda</option><option value="bi">Bislama</option><option value="bs">Bosanski Jezik</option><option value="br">Brezhoneg</option><option value="ca">Català</option><option value="ch">Chamoru</option><option value="ny">Chicheŵa</option><option value="sn">Chishona</option><option value="co">Corsu</option><option value="cy">Cymraeg</option><option value="da">Dansk</option><option value="se">Davvisámegiella</option><option value="de">Deutsch</option><option value="nv">Diné Bizaad</option><option value="et">Eesti</option><option value="na">Ekakairũ Naoero</option><option value="en">English</option><option value="es">Español</option><option value="eo">Esperanto</option><option value="eu">Euskara</option><option value="ee">Eʋegbe</option><option value="to">Faka Tonga</option><option value="mg">Fiteny Malagasy</option><option value="fr">Français</option><option value="fy">Frysk</option><option value="ff">Fulfulde</option><option value="fo">Føroyskt</option><option value="ga">Gaeilge</option><option value="gv">Gaelg</option><option value="sm">Gagana Fa'a Samoa</option><option value="gl">Galego</option><option value="sq">Gjuha Shqipe</option><option value="gd">Gàidhlig</option><option value="ki">Gĩkũyũ</option><option value="ha">Hausa</option><option value="ho">Hiri Motu</option><option value="hr">Hrvatski Jezik</option><option value="io">Ido</option><option value="rw">Ikinyarwanda</option><option value="rn">Ikirundi</option><option value="ia">Interlingua</option><option value="nd">Isindebele</option><option value="nr">Isindebele</option><option value="xh">Isixhosa</option><option value="zu">Isizulu</option><option value="it">Italiano</option><option value="ik">Iñupiaq</option><option value="pl">Polski</option><option value="mh">Kajin M̧ajeļ</option><option value="kl">Kalaallisut</option><option value="kr">Kanuri</option><option value="kw">Kernewek</option><option value="kg">Kikongo</option><option value="sw">Kiswahili</option><option value="ht">Kreyòl Ayisyen</option><option value="kj">Kuanyama</option><option value="ku">Kurdî</option><option value="la">Latine</option><option value="lv">Latviešu Valoda</option><option value="lt">Lietuvių Kalba</option><option value="ro">Limba Română</option><option value="li">Limburgs</option><option value="ln">Lingála</option><option value="lg">Luganda</option><option value="lb">Lëtzebuergesch</option><option value="hu">Magyar</option><option value="mt">Malti</option><option value="nl">Nederlands</option><option value="no">Norsk</option><option value="nb">Norsk Bokmål</option><option value="nn">Norsk Nynorsk</option><option value="uz">O'zbek</option><option value="oc">Occitan</option><option value="ie">Interlingue</option><option value="hz">Otjiherero</option><option value="ng">Owambo</option><option value="pt">Português</option><option value="ty">Reo Tahiti</option><option value="rm">Rumantsch Grischun</option><option value="qu">Runa Simi</option><option value="sc">Sardu</option><option value="za">Saɯ Cueŋƅ</option><option value="st">Sesotho</option><option value="tn">Setswana</option><option value="ss">Siswati</option><option value="sl">Slovenski Jezik</option><option value="sk">Slovenčina</option><option value="so">Soomaaliga</option><option value="fi">Suomi</option><option value="sv">Svenska</option><option value="mi">Te Reo Māori</option><option value="vi">Tiếng Việt</option><option value="lu">Tshiluba</option><option value="ve">Tshivenḓa</option><option value="tw">Twi</option><option value="tk">Türkmen</option><option value="tr">Türkçe</option><option value="ug">Uyƣurqə</option><option value="vo">Volapük</option><option value="fj">Vosa Vakaviti</option><option value="wa">Walon</option><option value="tl">Wikang Tagalog</option><option value="wo">Wollof</option><option value="ts">Xitsonga</option><option value="yo">Yorùbá</option><option value="sg">Yângâ Tî Sängö</option><option value="is">ÍSlenska</option><option value="cs">čEština</option><option value="el">ελληνικά</option><option value="av">авар мацӀ</option><option value="ab">аҧсуа бызшәа</option><option value="ba">башҡорт теле</option><option value="be">беларуская мова</option><option value="bg">български език</option><option value="os">ирон æвзаг</option><option value="kv">коми кыв</option><option value="ky">Кыргызча</option><option value="mk">македонски јазик</option><option value="mn">монгол</option><option value="ce">нохчийн мотт</option><option value="ru">русский язык</option><option value="sr">српски језик</option><option value="tt">татар теле</option><option value="tg">тоҷикӣ</option><option value="uk">українська мова</option><option value="cv">чӑваш чӗлхи</option><option value="cu">ѩзыкъ словѣньскъ</option><option value="kk">қазақ тілі</option><option value="hy">Հայերեն</option><option value="yi">ייִדיש</option><option value="he">עברית</option><option value="ur">اردو</option><option value="ar">العربية</option><option value="fa">فارسی</option><option value="ps">پښتو</option><option value="ks">कश्मीरी</option><option value="ne">नेपाली</option><option value="pi">पाऴि</option><option value="bh">भोजपुरी</option><option value="mr">मराठी</option><option value="sa">संस्कृतम्</option><option value="sd">सिन्धी</option><option value="hi">हिन्दी</option><option value="as">অসমীয়া</option><option value="bn">বাংলা</option><option value="pa">ਪੰਜਾਬੀ</option><option value="gu">ગુજરાતી</option><option value="or">ଓଡ଼ିଆ</option><option value="ta">தமிழ்</option><option value="te">తెలుగు</option><option value="kn">ಕನ್ನಡ</option><option value="ml">മലയാളം</option><option value="si">සිංහල</option><option value="th">ไทย</option><option value="lo">ພາສາລາວ</option><option value="bo">བོད་ཡིག</option><option value="dz">རྫོང་ཁ</option><option value="my">ဗမာစာ</option><option value="ka">ქართული</option><option value="ti">ትግርኛ</option><option value="am">አማርኛ</option><option value="iu">ᐃᓄᒃᑎᑐᑦ</option><option value="oj">ᐊᓂᔑᓈᐯᒧᐎᓐ</option><option value="cr">ᓀᐦᐃᔭᐍᐏᐣ</option><option value="km">ខ្មែរ</option><option value="zh">中文&nbsp;(Zhōngwén)</option><option value="ja">日本語&nbsp;(にほんご)</option><option value="ii">ꆈꌠ꒿ Nuosuhxop</option><option value="ko">한국어&nbsp;(韓國語)</option>
				</select>
			</div>
			<input type="hidden" name="modify" value="<?php echo $_GET["modify"]; ?>">
	        <button type="submit" class="btn btn-primary">Continue</button>
	    </form>
	<?php
	}
	elseif (isset($_GET["modify"]) && !isset($_POST["id"]) && isset($_GET["lang"]) && isset($_GET["tmp_name"]))
	{
		$element = $email_tmp->findOne( array( '_id' => new MongoID( $_GET["modify"] ) ) );
	?>
		<a href="email_templates.php?modify=<?php echo $_GET["modify"]; ?>" class="btn btn-primary">Back to select language</a>
		<form method="post">
			Language: <strong><?php echo $_GET["lang"];?></strong><br>
			Title:<input type="text" name="name" class="form-control" placeholder="Title of your email." value="<?php echo $element["name_".$_GET["lang"]];?>">
	        Content:<textarea name="editor" id="editor1" rows="10" cols="80" style="width: 100%;height: 500px">
				<?php echo $element["content_".$_GET["lang"]];?>
	        </textarea>
	        <input type="hidden" name="id" value="<?php echo $_GET["modify"];?>">
	        <input type="hidden" name="tmp_name" value="<?php echo $_GET["tmp_name"];?>">
	        <button type="submit" class="btn btn-primary">Save</button>
	        <small>(The footer of the email template is automaticly generated)</small>
	    </form>
	<?php
	}
	elseif (isset($_POST["editor"]) && isset($_POST["name"]) && isset($_POST["id"]) && isset($_GET["lang"]) && isset($_GET["tmp_name"]))
	{
		if ($_POST["name"]=="") {$title="not title";}else{$title=$_POST["name"];}
		if ($_POST["tmp_name"]=="") {$tmptitle="not title";}else{$tmptitle=$_POST["tmp_name"];}
		$newdata = array('$set' => array("content_".$_GET["lang"] => htmlentities($_POST["editor"]),"name_".$_GET["lang"]=>$title,"name"=>$tmptitle));
		$email_tmp->update(array("_id" => new MongoID( $_POST["id"]) ), $newdata);
		?>
		<a href="email_templates.php" class="btn btn-primary">Back to template list</a>
		<a href="email_templates.php?modify=<?php echo $_POST["id"]; ?>" class="btn btn-primary">Back to select language</a>
		<a href="email_templates.php?modify=<?php echo $_POST["id"]; ?>&lang=<?php echo $_GET["lang"]; ?>&tmp_name=<?php echo $_GET["tmp_name"]; ?>" class="btn btn-primary">Modify again</a>
		<div class="alert alert-success" role="alert">
		Saved.
		</div>
		<h1><u>Preview:</u></h1>
		<h2>Title:<?php echo $title; ?></h2>
		<h2>Content:</h2>
		<div style="background-color: #f6f6f6;width: 100%;height: 100%">
		<?php echo html_entity_decode($_POST["editor"]).$footer_mail;?>
		</div>
		<?php
	}
	elseif (isset($_POST["editor"]) && isset($_POST["name"]) && !isset($_POST["id"]) && isset($_POST["tmp_name"]))
	{
		if ($_POST["editor"]!="" && $_POST["name"]!="" && $_POST["tmp_name"]!="") {
			$myid = new MongoID();
			$document = array( "_id"=>$myid, "name_en" => $_POST["name"], "content_en" => htmlentities($_POST["editor"]),"enable"=>true, "name"=>$_POST["tmp_name"]);
			$email_tmp->insert($document);
			$theid = $myid->{'$id'};
		?>
			<a href="email_templates.php" class="btn btn-primary">Back to template list</a>
			<div class="alert alert-success" role="alert">
			Saved.
			</div>
		<form method="get">
			Template name:<input type="text" name="tmp_name" class="form-control" placeholder="Template name." value="<?php echo $_POST["tmp_name"];?>">
			<div class="form-group">
				<label for="formGroupExampleInput3">Language of the template:</label>
				<select class="form-control" name="lang">
<option value="om">Afaan Oromoo</option><option value="aa">Afaraf</option><option value="af">Afrikaans</option><option value="ak">Akan</option><option value="an">Aragonés</option><option value="ig">Asụsụ Igbo</option><option value="gn">Avañe'ẽ</option><option value="ae">Avesta</option><option value="ay">Aymar Aru</option><option value="az">Azərbaycan Dili</option><option value="id">Bahasa Indonesia</option><option value="ms">Bahasa Melayu</option><option value="bm">Bamanankan</option><option value="jv">Basa Jawa</option><option value="su">Basa Sunda</option><option value="bi">Bislama</option><option value="bs">Bosanski Jezik</option><option value="br">Brezhoneg</option><option value="ca">Català</option><option value="ch">Chamoru</option><option value="ny">Chicheŵa</option><option value="sn">Chishona</option><option value="co">Corsu</option><option value="cy">Cymraeg</option><option value="da">Dansk</option><option value="se">Davvisámegiella</option><option value="de">Deutsch</option><option value="nv">Diné Bizaad</option><option value="et">Eesti</option><option value="na">Ekakairũ Naoero</option><option value="en">English</option><option value="es">Español</option><option value="eo">Esperanto</option><option value="eu">Euskara</option><option value="ee">Eʋegbe</option><option value="to">Faka Tonga</option><option value="mg">Fiteny Malagasy</option><option value="fr">Français</option><option value="fy">Frysk</option><option value="ff">Fulfulde</option><option value="fo">Føroyskt</option><option value="ga">Gaeilge</option><option value="gv">Gaelg</option><option value="sm">Gagana Fa'a Samoa</option><option value="gl">Galego</option><option value="sq">Gjuha Shqipe</option><option value="gd">Gàidhlig</option><option value="ki">Gĩkũyũ</option><option value="ha">Hausa</option><option value="ho">Hiri Motu</option><option value="hr">Hrvatski Jezik</option><option value="io">Ido</option><option value="rw">Ikinyarwanda</option><option value="rn">Ikirundi</option><option value="ia">Interlingua</option><option value="nd">Isindebele</option><option value="nr">Isindebele</option><option value="xh">Isixhosa</option><option value="zu">Isizulu</option><option value="it">Italiano</option><option value="ik">Iñupiaq</option><option value="pl">Polski</option><option value="mh">Kajin M̧ajeļ</option><option value="kl">Kalaallisut</option><option value="kr">Kanuri</option><option value="kw">Kernewek</option><option value="kg">Kikongo</option><option value="sw">Kiswahili</option><option value="ht">Kreyòl Ayisyen</option><option value="kj">Kuanyama</option><option value="ku">Kurdî</option><option value="la">Latine</option><option value="lv">Latviešu Valoda</option><option value="lt">Lietuvių Kalba</option><option value="ro">Limba Română</option><option value="li">Limburgs</option><option value="ln">Lingála</option><option value="lg">Luganda</option><option value="lb">Lëtzebuergesch</option><option value="hu">Magyar</option><option value="mt">Malti</option><option value="nl">Nederlands</option><option value="no">Norsk</option><option value="nb">Norsk Bokmål</option><option value="nn">Norsk Nynorsk</option><option value="uz">O'zbek</option><option value="oc">Occitan</option><option value="ie">Interlingue</option><option value="hz">Otjiherero</option><option value="ng">Owambo</option><option value="pt">Português</option><option value="ty">Reo Tahiti</option><option value="rm">Rumantsch Grischun</option><option value="qu">Runa Simi</option><option value="sc">Sardu</option><option value="za">Saɯ Cueŋƅ</option><option value="st">Sesotho</option><option value="tn">Setswana</option><option value="ss">Siswati</option><option value="sl">Slovenski Jezik</option><option value="sk">Slovenčina</option><option value="so">Soomaaliga</option><option value="fi">Suomi</option><option value="sv">Svenska</option><option value="mi">Te Reo Māori</option><option value="vi">Tiếng Việt</option><option value="lu">Tshiluba</option><option value="ve">Tshivenḓa</option><option value="tw">Twi</option><option value="tk">Türkmen</option><option value="tr">Türkçe</option><option value="ug">Uyƣurqə</option><option value="vo">Volapük</option><option value="fj">Vosa Vakaviti</option><option value="wa">Walon</option><option value="tl">Wikang Tagalog</option><option value="wo">Wollof</option><option value="ts">Xitsonga</option><option value="yo">Yorùbá</option><option value="sg">Yângâ Tî Sängö</option><option value="is">ÍSlenska</option><option value="cs">čEština</option><option value="el">ελληνικά</option><option value="av">авар мацӀ</option><option value="ab">аҧсуа бызшәа</option><option value="ba">башҡорт теле</option><option value="be">беларуская мова</option><option value="bg">български език</option><option value="os">ирон æвзаг</option><option value="kv">коми кыв</option><option value="ky">Кыргызча</option><option value="mk">македонски јазик</option><option value="mn">монгол</option><option value="ce">нохчийн мотт</option><option value="ru">русский язык</option><option value="sr">српски језик</option><option value="tt">татар теле</option><option value="tg">тоҷикӣ</option><option value="uk">українська мова</option><option value="cv">чӑваш чӗлхи</option><option value="cu">ѩзыкъ словѣньскъ</option><option value="kk">қазақ тілі</option><option value="hy">Հայերեն</option><option value="yi">ייִדיש</option><option value="he">עברית</option><option value="ur">اردو</option><option value="ar">العربية</option><option value="fa">فارسی</option><option value="ps">پښتو</option><option value="ks">कश्मीरी</option><option value="ne">नेपाली</option><option value="pi">पाऴि</option><option value="bh">भोजपुरी</option><option value="mr">मराठी</option><option value="sa">संस्कृतम्</option><option value="sd">सिन्धी</option><option value="hi">हिन्दी</option><option value="as">অসমীয়া</option><option value="bn">বাংলা</option><option value="pa">ਪੰਜਾਬੀ</option><option value="gu">ગુજરાતી</option><option value="or">ଓଡ଼ିଆ</option><option value="ta">தமிழ்</option><option value="te">తెలుగు</option><option value="kn">ಕನ್ನಡ</option><option value="ml">മലയാളം</option><option value="si">සිංහල</option><option value="th">ไทย</option><option value="lo">ພາສາລາວ</option><option value="bo">བོད་ཡིག</option><option value="dz">རྫོང་ཁ</option><option value="my">ဗမာစာ</option><option value="ka">ქართული</option><option value="ti">ትግርኛ</option><option value="am">አማርኛ</option><option value="iu">ᐃᓄᒃᑎᑐᑦ</option><option value="oj">ᐊᓂᔑᓈᐯᒧᐎᓐ</option><option value="cr">ᓀᐦᐃᔭᐍᐏᐣ</option><option value="km">ខ្មែរ</option><option value="zh">中文&nbsp;(Zhōngwén)</option><option value="ja">日本語&nbsp;(にほんご)</option><option value="ii">ꆈꌠ꒿ Nuosuhxop</option><option value="ko">한국어&nbsp;(韓國語)</option>
				</select>
			</div>
			<input type="hidden" name="modify" value="<?php echo $theid; ?>">
	        <button type="submit" class="btn btn-primary">Continue</button>
	    </form>
		<?php
		}
		else
		{
?>
		<div class="alert alert-danger" role="alert">
		  <strong>Oh snap!</strong> Fill all inputs please.
		</div>
		<form method="post">
			Template name:<input type="text" name="tmp_name" class="form-control" placeholder="Template name." value="<?php echo $_POST["tmp_name"];?>">
			Language: <strong>en</strong><br>
			Title:<input type="text" name="name" class="form-control" placeholder="Title of your email." value="<?php echo $_POST["name"];?>">
	        Content:<textarea name="editor" id="editor1" rows="10" cols="80" style="width: 100%;height: 500px">
	            <?php echo $_POST["editor"];?>
	        </textarea>
	        <button type="submit" class="btn btn-primary">Save</button>
	        <small>(The footer of the email template is automaticly generated)</small>
	    </form>
<?php
		}
	}
	elseif (isset($_GET["delete"]))
	{
		//$email_tmp->remove( array( '_id' => new MongoID( $_GET["delete"] ) ) );
		$newdata = array('$set' => array("enable" => false));
		$email_tmp->update(array( '_id' => new MongoID( $_GET["delete"] ) ),$newdata );
	?>
		<a href="email_templates.php?new=1" class="btn btn-primary">Create New template</a>
		<table id="templates-table" class="display" width="100%" cellspacing="0">
	        <thead>
	            <tr>
	                <th>Template name</th>
	                <th></th>
	                <th></th>
	            </tr>
	        </thead>
	        <tfoot>
	            <tr>
	                <th>Template name</th>
	                <th></th>
	                <th></th>
	            </tr>
	        </tfoot>
	    </table>
	    <small>If you delete an template by accident, recover is possible :).</small>
	<?php
	}
	elseif (isset($_GET["new"]))
	{
	?>
		<a href="email_templates.php" class="btn btn-primary">Back</a>
		<h2>Start by making the english template:</h2><small>(English is the default email language, if the email language for a contact, english is used.)</small>
		<form method="post">
			Template name:<input type="text" name="tmp_name" class="form-control" placeholder="Template name." value="">
			Language: <strong>en</strong><br>
			Title:<input type="text" name="name" class="form-control" placeholder="Title of your email.">
	        Content:<textarea name="editor" id="editor1" rows="10" cols="80" style="width: 100%;height: 500px">
	        <?php include "include/email_tmp.php"; ?>
	        </textarea>
	        <button type="submit" class="btn btn-primary">Save</button>
	        <small>(The footer of the email template is automaticly generated)</small>
	    </form>
	<?php
	}
	else
	{
	?>
		<a href="email_templates.php?new=1" class="btn btn-primary">Create New template</a>
		<table id="templates-table" class="display" width="100%" cellspacing="0">
	        <thead>
	            <tr>
	                <th>Template name</th>
	                <th></th>
	                <th></th>
	            </tr>
	        </thead>
	        <tfoot>
	            <tr>
	                <th>Template name</th>
	                <th></th>
	                <th></th>
	            </tr>
	        </tfoot>
	    </table>
	    <small>If you delete an template by accident, recover is possible :).</small>
	<?php
	}
	?>
		</div>
	</div>
</div>

<?php
include "include/bottom.php";
?>