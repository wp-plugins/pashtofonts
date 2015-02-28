	<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
    <td valign="top" style="width:40%">
	<form method="post" name="options" target="_self">
		<fieldset class="fd">
			<h3 style="margin:0px 0px 10px 0px;">Theme detection:</h3>
			I am using 
			<select id="theme_detect" name="theme_detect">
				<option value="eng_theme" <?php if($theme_detect=="eng_theme"){ echo 'selected'; } ?>>LTR</option>
				<option value="pashto_theme" <?php if($theme_detect=="pashto_theme"){ echo 'selected'; } ?>>RTL</option>
			</select> theme
		</fieldset>
		<br />
		<fieldset class="fd" style="line-height:25px;">
			<h3 style="margin:0px;">Typography:</h3>
			
			Select Font for title:<br/>
<select id="h1_info" name="h1_info" style="font-family:Tahoma;">
<option value="AfghaniRegular"<?php if($h1_info=="AfghaniRegular"){ echo 'selected'; } ?>>Afghani - افغاني</option>
<option value="AfghaniOutlineRegular"<?php if($h1_info=="AfghaniOutlineRegular"){ echo 'selected'; } ?>>Afghani Outline - افغاني اوټلائن</option>
<option value="AfridiRegular"<?php if($h1_info=="AfridiRegular"){ echo 'selected'; } ?>>Afridi - آفريدي</option>
<option value="AhmadzaiRegular"<?php if($h1_info=="AhmadzaiRegular"){ echo 'selected'; } ?>>Ahmadzai - احمدزئی</option>
<option value="AndalusRegular"<?php if($h1_info=="AndalusRegular"){ echo 'selected'; } ?>>Andalus - اندلس</option>
<option value="DuraniRegular"<?php if($h1_info=="DuraniRegular"){ echo 'selected'; } ?>>Durani - درانی</option>
<option value="AGhazniRegular"<?php if($h1_info=="AGhazniRegular"){ echo 'selected'; } ?>>Ghazni - غزني</option>
<option value="HotakiRegular"<?php if($h1_info=="HotakiRegular"){ echo 'selected'; } ?>>Hotaki - هوتکي</option>
<option value="PashtoIbrahimkhilRegular"<?php if($h1_info=="PashtoIbrahimkhilRegular"){ echo 'selected'; } ?>>Ibrahimkhil - ابراهيم خيل</option>
<option value="Jameel"<?php if($font_info_PashtoFonts=="Jameel"){ echo 'selected'; } ?>>Jameel - جمیل</option>
<option value="JameelUnicodeRegular"<?php if($font_info_PashtoFonts=="JameelUnicodeRegular"){ echo 'selected'; } ?>>Jameel Unicode - جمیل یونیکوڈ</option>
<option value="AKabulRegular"<?php if($h1_info=="AKabulRegular"){ echo 'selected'; } ?>>Kabul - کابل</option>
<option value="KaounRegular"<?php if($h1_info=="KaounRegular"){ echo 'selected'; } ?>>Kaoun - کاون</option>
<option value="AKapisaRegular"<?php if($h1_info=="AKapisaRegular"){ echo 'selected'; } ?>>Kapisa - کپيسه</option>
<option value="KhaistaOutlineRegular"<?php if($h1_info=="KhaistaOutlineRegular"){ echo 'selected'; } ?>>Khaista Outline - ښائسته</option>
<option value="KhaldareRegular"<?php if($h1_info=="KhaldareRegular"){ echo 'selected'; } ?>>Khaldare - خلداری</option>
<option value="AKhattakRegular"<?php if($h1_info=="AKhattakRegular"){ echo 'selected'; } ?>>Khattak - خټک</option>
<option value="AKhostRegular"<?php if($h1_info=="AKhostRegular"){ echo 'selected'; } ?>>Khost - خوست</option>
<option value="KhushalRegular"<?php if($h1_info=="KhushalRegular"){ echo 'selected'; } ?>>Khushal - خوشحال</option>
<option value="KhyberRegular"<?php if($h1_info=="KhyberRegular"){ echo 'selected'; } ?>>Khyber - خيبر</option>
<option value="AKunarRegular"<?php if($h1_info=="AKunarRegular"){ echo 'selected'; } ?>>Kunar - کنړ</option>
<option value="AKunduzRegular"<?php if($h1_info=="AKunduzRegular"){ echo 'selected'; } ?>>Kunduz - کندوز</option>
<option value="LaghmaniRegular"<?php if($h1_info=="LaghmaniRegular"){ echo 'selected'; } ?>>Laghmani - لغمانی</option>
<option value="ALogarRegular"<?php if($h1_info=="ALogarRegular"){ echo 'selected'; } ?>>Logar - لوګر</option>
<option value="BLudinRegular"<?php if($h1_info=="BLudinRegular"){ echo 'selected'; } ?>>Ludin - لودين</option>
<option value="MohamadZaiRegular"<?php if($h1_info=="MohamadZaiRegular"){ echo 'selected'; } ?>>Mohamadzai - محمدزئی</option>
<option value="ANangarharRegular"<?php if($h1_info=="ANangarharRegular"){ echo 'selected'; } ?>>Nagarhar - ننګرهار</option>
<option value="NakhshiRegular"<?php if($h1_info=="NakhshiRegular"){ echo 'selected'; } ?>>Nakhshi - نخشی</option>
<option value="Nafees"<?php if($h1_info=="Nafees"){ echo 'selected'; } ?>>Nafees - نفیس</option>
<option value="PaktiaRegular"<?php if($h1_info=="PaktiaRegular"){ echo 'selected'; } ?>>Paktia - پکتيا</option>
<option value="PamirRegular"<?php if($h1_info=="PamirRegular"){ echo 'selected'; } ?>>Pamir - پامير</option>
<option value="AParwanRegular"<?php if($h1_info=="AParwanRegular"){ echo 'selected'; } ?>>Parwan - پروان</option>
<option value="PashtoArialRegular"<?php if($h1_info=="PashtoArialRegular"){ echo 'selected'; } ?>>Pashto Arial - پشتو</option>
<option value="PashtoOutlineRegular"<?php if($h1_info=="PashtoOutlineRegular"){ echo 'selected'; } ?>>Pashto Outline - پشتوآوټلائن</option>
<option value="PokhtoRegular"<?php if($h1_info=="PokhtoRegular"){ echo 'selected'; } ?>>Pukhto - پښتو</option>
<option value="QandahariRegular"<?php if($h1_info=="QandahariRegular"){ echo 'selected'; } ?>>Qadahari - قندهاري</option>
<option value="RahmanRegular"<?php if($h1_info=="RahmanRegular"){ echo 'selected'; } ?>>Rahman - رحمان</option>
<option value="SabawoonRegular"<?php if($h1_info=="SabawoonRegular"){ echo 'selected'; } ?>>Sabawoon - سباون</option>
<option value="ShinwariRegular"<?php if($h1_info=="ShinwariRegular"){ echo 'selected'; } ?>>Shinwari - شنواری</option>
<option value="ASwatRegular"<?php if($h1_info=="ASwatRegular"){ echo 'selected'; } ?>>Swat - سوات</option>
<option value="UlfatRegular"<?php if($h1_info=="UlfatRegular"){ echo 'selected'; } ?>>Ulfat - الفت</option>
<option value="AWardakRegular"<?php if($h1_info=="AWardakRegular"){ echo 'selected'; } ?>>Wardag - وردک</option>
<option value="YusufzaiRegular"<?php if($h1_info=="YusufzaiRegular"){ echo 'selected'; } ?>>Yousafzai - يوسفزئي</option>
<option value="ZadranRegular"<?php if($h1_info=="ZadranRegular"){ echo 'selected'; } ?>>Zadran - زدران</option>
<option value="ZazaiRegular"<?php if($h1_info=="ZazaiRegular"){ echo 'selected'; } ?>>Zazai - زازئی</option>

			</select><br/>
			Select Font for body:<br/>
<select id="font_info_PashtoFonts" name="font_info_PashtoFonts" style="font-family:Tahoma;">
<option value="AfghaniRegular"<?php if($font_info_PashtoFonts=="AfghaniRegular"){ echo 'selected'; } ?>>Afghani - افغاني</option>
<option value="AfghaniOutlineRegular"<?php if($font_info_PashtoFonts=="AfghaniOutlineRegular"){ echo 'selected'; } ?>>Afghani Outline - افغاني اوټلائن</option>
<option value="AfridiRegular"<?php if($font_info_PashtoFonts=="AfridiRegular"){ echo 'selected'; } ?>>Afridi - آفريدي</option>
<option value="AhmadzaiRegular"<?php if($font_info_PashtoFonts=="AhmadzaiRegular"){ echo 'selected'; } ?>>Ahmadzai - احمدزئی</option>
<option value="AndalusRegular"<?php if($font_info_PashtoFonts=="AndalusRegular"){ echo 'selected'; } ?>>Andalus - اندلس</option>
<option value="DuraniRegular"<?php if($font_info_PashtoFonts=="DuraniRegular"){ echo 'selected'; } ?>>Durani - درانی</option>
<option value="AGhazniRegular"<?php if($font_info_PashtoFonts=="AGhazniRegular"){ echo 'selected'; } ?>>Ghazni - غزني</option>
<option value="HotakiRegular"<?php if($font_info_PashtoFonts=="HotakiRegular"){ echo 'selected'; } ?>>Hotaki - هوتکي</option>
<option value="PashtoIbrahimkhilRegular"<?php if($font_info_PashtoFonts=="PashtoIbrahimkhilRegular"){ echo 'selected'; } ?>>Ibrahimkhil - ابراهيم خيل</option>
<option value="Jameel"<?php if($font_info_PashtoFonts=="Jameel"){ echo 'selected'; } ?>>Jameel - جمیل</option>
<option value="JameelUnicodeRegular"<?php if($font_info_PashtoFonts=="JameelUnicodeRegular"){ echo 'selected'; } ?>>Jameel Unicode - جمیل یونیکوڈ</option>
<option value="AKabulRegular"<?php if($font_info_PashtoFonts=="AKabulRegular"){ echo 'selected'; } ?>>Kabul - کابل</option>
<option value="KaounRegular"<?php if($font_info_PashtoFonts=="KaounRegular"){ echo 'selected'; } ?>>Kaoun - کاون</option>
<option value="AKapisaRegular"<?php if($font_info_PashtoFonts=="AKapisaRegular"){ echo 'selected'; } ?>>Kapisa - کپيسه</option>
<option value="KhaistaOutlineRegular"<?php if($font_info_PashtoFonts=="KhaistaOutlineRegular"){ echo 'selected'; } ?>>Khaista Outline - ښائسته</option>
<option value="KhaldareRegular"<?php if($font_info_PashtoFonts=="KhaldareRegular"){ echo 'selected'; } ?>>Khaldare - خلداری</option>
<option value="AKhattakRegular"<?php if($font_info_PashtoFonts=="AKhattakRegular"){ echo 'selected'; } ?>>Khattak - خټک</option>
<option value="AKhostRegular"<?php if($font_info_PashtoFonts=="AKhostRegular"){ echo 'selected'; } ?>>Khost - خوست</option>
<option value="KhushalRegular"<?php if($font_info_PashtoFonts=="KhushalRegular"){ echo 'selected'; } ?>>Khushal - خوشحال</option>
<option value="KhyberRegular"<?php if($font_info_PashtoFonts=="KhyberRegular"){ echo 'selected'; } ?>>Khyber - خيبر</option>
<option value="AKunarRegular"<?php if($font_info_PashtoFonts=="AKunarRegular"){ echo 'selected'; } ?>>Kunar - کنړ</option>
<option value="AKunduzRegular"<?php if($font_info_PashtoFonts=="AKunduzRegular"){ echo 'selected'; } ?>>Kunduz - کندوز</option>
<option value="LaghmaniRegular"<?php if($font_info_PashtoFonts=="LaghmaniRegular"){ echo 'selected'; } ?>>Laghmani - لغمانی</option>
<option value="ALogarRegular"<?php if($font_info_PashtoFonts=="ALogarRegular"){ echo 'selected'; } ?>>Logar - لوګر</option>
<option value="BLudinRegular"<?php if($font_info_PashtoFonts=="BLudinRegular"){ echo 'selected'; } ?>>Ludin - لودين</option>
<option value="MohamadZaiRegular"<?php if($font_info_PashtoFonts=="MohamadZaiRegular"){ echo 'selected'; } ?>>Mohamadzai - محمدزئی</option>
<option value="ANangarharRegular"<?php if($font_info_PashtoFonts=="ANangarharRegular"){ echo 'selected'; } ?>>Nagarhar - ننګرهار</option>
<option value="NakhshiRegular"<?php if($font_info_PashtoFonts=="NakhshiRegular"){ echo 'selected'; } ?>>Nakhshi - نخشی</option>
<option value="Nafees"<?php if($font_info_PashtoFonts=="Nafees"){ echo 'selected'; } ?>>Nafees - نفیس</option>
<option value="PaktiaRegular"<?php if($font_info_PashtoFonts=="PaktiaRegular"){ echo 'selected'; } ?>>Paktia - پکتيا</option>
<option value="PamirRegular"<?php if($font_info_PashtoFonts=="PamirRegular"){ echo 'selected'; } ?>>Pamir - پامير</option>
<option value="AParwanRegular"<?php if($font_info_PashtoFonts=="AParwanRegular"){ echo 'selected'; } ?>>Parwan - پروان</option>
<option value="PashtoArialRegular"<?php if($font_info_PashtoFonts=="PashtoArialRegular"){ echo 'selected'; } ?>>Pashto Arial - پشتو</option>
<option value="PashtoOutlineRegular"<?php if($font_info_PashtoFonts=="PashtoOutlineRegular"){ echo 'selected'; } ?>>Pashto Outline - پشتوآوټلائن</option>
<option value="PokhtoRegular"<?php if($font_info_PashtoFonts=="PokhtoRegular"){ echo 'selected'; } ?>>Pukhto - پښتو</option>
<option value="QandahariRegular"<?php if($font_info_PashtoFonts=="QandahariRegular"){ echo 'selected'; } ?>>Qadahari - قندهاري</option>
<option value="RahmanRegular"<?php if($font_info_PashtoFonts=="RahmanRegular"){ echo 'selected'; } ?>>Rahman - رحمان</option>
<option value="SabawoonRegular"<?php if($font_info_PashtoFonts=="SabawoonRegular"){ echo 'selected'; } ?>>Sabawoon - سباون</option>
<option value="ShinwariRegular"<?php if($font_info_PashtoFonts=="ShinwariRegular"){ echo 'selected'; } ?>>Shinwari - شنواری</option>
<option value="ASwatRegular"<?php if($font_info_PashtoFonts=="ASwatRegular"){ echo 'selected'; } ?>>Swat - سوات</option>
<option value="UlfatRegular"<?php if($font_info_PashtoFonts=="UlfatRegular"){ echo 'selected'; } ?>>Ulfat - الفت</option>
<option value="AWardakRegular"<?php if($font_info_PashtoFonts=="AWardakRegular"){ echo 'selected'; } ?>>Wardag - وردک</option>
<option value="YusufzaiRegular"<?php if($font_info_PashtoFonts=="YusufzaiRegular"){ echo 'selected'; } ?>>Yousafzai - يوسفزئي</option>
<option value="ZadranRegular"<?php if($font_info_PashtoFonts=="ZadranRegular"){ echo 'selected'; } ?>>Zadran - زدران</option>
<option value="ZazaiRegular"<?php if($font_info_PashtoFonts=="ZazaiRegular"){ echo 'selected'; } ?>>Zazai - زازئی</option>

			</select><br/>
			<a href="http://pashtofonts.com/how-to-use/" target="_blank">List of Pashto Fonts</a>
		</fieldset>
		<br />
		<fieldset class="fd">
			<h3 style="margin:0px 0px 10px 0px;">Auto Formatting On</h3>
			<input name="auto_post_PashtoFonts" type="checkbox" id="auto_post_PashtoFonts" value="auto_post" <?php if($auto_post_PashtoFonts) echo 'checked' ?> />
			Posts &nbsp;&nbsp;
			<input name="auto_comment_PashtoFonts" type="checkbox" id="auto_comment_PashtoFonts" value="auto_comment" <?php if($auto_comment_PashtoFonts) echo 'checked' ?> />
			Comments &nbsp;&nbsp;
			<input name="auto_excerpt_PashtoFonts" type="checkbox" id="auto_excerpt_PashtoFonts" value="auto_excerpt" <?php if($auto_excerpt_PashtoFonts) echo 'checked' ?> />
			Excerpt of Posts
		</fieldset>
		<p class="submit">
			<input name="submitted" type="hidden" value="yes" />
			<input type="submit" name="Submit" value="Update Plugin's Options &raquo;" class="button button-primary button-hero load-customize hide-if-no-customize" />
		</p>
	</form>
	<br />
	</td>
    <td valign="top" style="background: rgb(248, 248, 248);padding: 12px;border-radius: 10px;"><h3 style="margin:0px;">Instructions:</h3>
    <p>PashtoFonts plugin for Pashto is working to make live your Pashto blog by integrating Unicode fonts with decent and stylish fonts. Following are some instruction in order to use it more effectively.
<ol>
<li>If you are using plugin with English theme select (LTR) while for Pashto/Urduselect RTL.</li>
<li>First combo box indicates font style for your posts, comments & Excerpts. Check font styles from link.</li>
<li>Change font for your post title using 2nd combo box. All fonts are available here as well.</li>
<li>Switch On/Off auto formatting for comments, posts & excerpt. </li>
</ol>
<h3 style="0px;">Short Codes</h3>
You can use shortcodes for Pashto plugin in order you have posting with English/Pashto text.<br/><br/>
<b>Pashto</b><br/>
Pashto text inside English Post <b>[pukhto]Pashto Text here[/pukhto]</b><br/>
Pashto Paragraph inside English Post <b>[pukhto_lek]Pashto paragraph[/pukhto_lek]</b><br/><br/>
<b>English</b><br/>
English text inside Pashto Post <b>[english]English text here[/english]</b><br/>
English Paragraph inside Pashto Post <b>[english_text]English Paragraph here[/english_text]</b><br/>
</p>
<b>Developed by Moxet Khan (Pukhtoogle.com)</b><br/><br/>
<a href="http://fb.com/pukhtooglers"><img src="<?php echo plugins_url( 'facebook.png' , __FILE__ ) ?>" /></a>
<a href="http://twitter.com/pukhtoogle"><img src="<?php echo plugins_url( 'twitter.png' , __FILE__ ) ?>" /></a>
<a href="http://youtube.com/user/pukhtoogle"><img src="<?php echo plugins_url( 'youtube.png' , __FILE__ ) ?>" /></a>
    </td>
  </tr>
</table>