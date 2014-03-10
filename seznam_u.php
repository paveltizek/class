<?php

if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit;
}
?>

<div class="prispevek">
<table border="1%" cellspacing="0" class="uc">
	<tbody><tr><th> Jméno</th><th>Zkr.</th><th>Konz. hodiny</th><th>č. kabinetu</th><th>e-mail</th></tr>

	<tr><th><a href="index.php?id=studentum/ucitele/blazej">Blažej Lumír, Ing.</a></th><td>BLA</td><td>st 10.50–11.30</td><td>A702</td>
  <th><a href="mailto:l.blazej@spseiostrava.cz">l.blazej@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/blazik">Blažík Jan, Mgr.</a></th><td>BLZ</td><td>po 12:35–13.20</td><td>B611</td>
  <th><a href="mailto:j.blazik@spseiostrava.cz">j.blazik@spseiostrava.cz</a></th></tr>

  <tr><th><a href="index.php?id=studentum/ucitele/calon">Caloň Tomáš, PhDr.</a></th><td>CAL</td><td>po 11.45–12.30</td><td>B511</td>
  <th><a href="mailto:t.calon@spseiostrava.cz">t.calon@spseiostrava.cz</a></th></tr>

  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/csaladiova">Családiová Irena, Mgr.</a></th><td>CSA</td><td>po, út 14.00–14.45</td><td>B307</td>
  <th><a href="mailto:i.csaladiova@spseiostrava.cz">i.csaladiova@spseiostrava.cz</a></th></tr>

  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/drahosova">Drahošová Lenka, Mgr.</a></th><td>POP</td><td>mateřská</td><td>&nbsp;</td>
  <th>&nbsp;</th></tr>

  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/gibalova">Gibalová Helena, Mgr.</a></th><td>GIB</td><td>út 13.30–14.30</td><td>B511</td>
  <th><a href="mailto:h.gibalova@spseiostrava.cz">h.gibalova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/gogolka">Gogolka Karel, Ing.</a></th><td>GOG</td><td>út 13.35–14.00, čt 12.35–13.10</td><td>B504</td>
  <th><a href="mailto:k.gogolka@spseiostrava.cz">k.gogolka@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/golembiovska">Golembiovská Anna, Ing.</a></th><td>GOL</td><td>út 14.20–15.00</td><td>B611</td>
	<th><a href="mailto:a.golembiovska@spseiostrava.cz">a.golembiovska@spseiostrava.cz</a></th></tr>

  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/grusova">Grůšová Jarmila, Mgr.</a></th><td>GRU</td><td>út 7.15</td><td>B307</td>
	<th><a href="mailto:j.grusova@spseiostrava.cz">j.grusova@spseiostrava.cz</a></th></tr>
	
	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/halskova">Halšková Jarmila, Mgr.</a></th><td>HAL</td><td>&nbsp;</td><td>A603</td>
	<th><a href="mailto:j.halskova@spseiostrava.cz">j.halskova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/hercikova">Hercíková Miroslava, Mgr.</a></th><td>HEC</td><td>út 7.00–7.45</td><td>C312</td>
  <th><a href="mailto:m.hercikova@spseiostrava.cz">m.hercikova@spseiostrava.cz</a></th></tr>
 
  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/hola">Holá Silvie, Mgr.</a></th><td>HOL</td><td>út 7.10–7.55</td><td>A412</td>
  <th><a href="mailto:s.hola@spseiostrava.cz">s.hola@spseiostrava.cz</a></th></tr>
  
  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/horakova">Horáková Iveta, Mgr.</a></th><td>HOA</td><td>čt 14.00–15.00</td><td>A408</td>
  <th><a href="mailto:i.horakova@spseiostrava.cz">i.horakova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/hudecova">Hudecová Lenka, Mgr.</a></th><td>HUD</td><td>čt 12.35</td>
  <td>C311;</td><th><a href="mailto:l.hudecova@spseiostrava.cz">l.hudecova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/hvizdak">Hvizdák Ladislav, Ing.</a></th><td>HVI</td><td>út 12.30–13.30</td><td>A703</td>
  <th><a href="mailto:l.hvizdak@spseiostrava.cz">l.hvizdak@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/charvatkova">Charvátková Jana, Ing.</a></th><td>CHA</td><td>mateřská</td><td>&nbsp;</td>
  <th><a href="mailto:j.charvatkova@spseiostrava.cz">j.charvatkova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/chudejova">Chudějová Denisa, Mgr.</a></th><td>CHU</td><td>po 14.30–15.15</td><td>A401</td>
  <th><a href="mailto:d.chudejova@spseiostrava.cz">d.chudejova@spseiostrava.cz</a></th></tr>
 
 	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/kacerovsky">Kačerovský Antonín, Mgr.</a></th><td>KAC</td><td>po 7.00–7.45, út 13.20–14.00</td><td>A407</td>
  <th><a href="mailto:a.kacerovsky@spseiostrava.cz">a.kacerovsky@spseiostrava.cz</a></th></tr>

 	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/kacmarik">Kačmařík Jiří, Ing.</a></th><td>KAR</td><td>po 9.45–10.30</td><td>A407</td>
  <th><a href="mailto:j.kacmarik@spseiostrava.cz">j.kacmarik@spseiostrava.cz</a></th></tr>
   
  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/konarski">Konarski Břetislav, Ing.</a></th><td>KON</td><td><!-- út 12.25&ndash;12.45, pá 8.25&ndash;8.45 --></td><td>B503</td>
  <th><a href="mailto:b.konarski@spseiostrava.cz">b.konarski@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/kozakova">Kozáková Daniela, Mgr.</a></th><td>KOA</td><td>út 9.00, čt 9.00</td><td>A605</td>
  <th><a href="mailto:d.kozakova@spseiostrava.cz">d.kozakova@spseiostrava.cz</a></th></tr>
 
  

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/kozelsky">Kozelský Michael, Ing.</a></th><td>KOZ</td><td>čt 11.40–13,35</td><td>A703</td>
  <th><a href="mailto:m.kozelsky@spseiostrava.cz">m.kozelsky@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/kral">Král Jaroslav, Ing.</a></th><td>KRA</td><td> &nbsp;</td><td>A611</td>
		<th><a href="mailto:j.kral@spseiostrava.cz">j.kral@spseiostrava.cz</a></th></tr>

        <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/krusberska">Krusberská Ivana, Ing.</a></th><td>KRB</td><td>st 14.3–15.15</td><td>B407</td>
  <th><a href="mailto:i.krusberska@spseiostrava.cz">i.krusberska@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/kubickova">Kubíčková Marie, Mgr.</a></th><td>KUB</td><td>po 13.30, st 14.20</td><td>C211</td>
  <th><a href="mailto:m.kubickova@spseiostrava.cz">m.kubickova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/kubinova">Kubinová Vlasta, Mgr.</a></th><td>KUI</td><td>po 11.40–12.25</td><td>A404</td>
  <th><a href="mailto:v.kubinova@spseiostrava.cz">v.kubinova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/lackova">Lacková Martina, Ing.</a></th><td>LAC</td><td>čt 10.20–10.50, čt 12.45–14.00</td><td>B608</td>
  <th><a href="mailto:m.lackova@spseiostrava.cz">m.lackova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/lukasova">Lukášová Hana, Ing.</a></th><td>LUK</td><td>pá 7.10–7.55</td><td>B512</td>
  <th><a href="mailto:h.lukasova@spseiostrava.cz">h.lukasova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/lukosz">Lukosz Josef, Ing.</a></th><td>LUO</td><td>&nbsp;</td><td>A602</td>
	<th><a href="mailto:j.lukosz@spseiostrava.cz">j.lukosz@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/madova">Mandovská Hana, Ing.</a></th><td>MAD</td><td>st 14.30–15.00</td><td>C112</td>
  <th><a href="mailto:h.mandovska@spseiostrava.cz">h.mandovska@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/martinakova">Martináková Renáta, Ing.</a></th><td>MAR</td><td>po 14.30–15.15</td><td>C112</td>
  <th><a href="mailto:r.martinakova@spseiostrava.cz">r.martinakova@spseiostrava.cz</a></th></tr>

  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/martinik">Martiník Boleslav, Ing.</a></th><td>MAK</td><td>po 13.45–14.30</td><td>A408</td>
  <th><a href="mailto:b.martinik@spseiostrava.cz">b.martinik@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/mlejnecka">Mlejnecká Lucie, Mgr.</a></th><td>MLE</td><td>po 13.35, út, čt 14.30</td><td>B307</td>
  <th><a href="mailto:l.mlejnecka@spseiostrava.cz">l.mlejnecka@spseiostrava.cz</a></th></tr>

  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/mrazek">Mrázek Zdeněk, Ing.</a></th><td>MRZ</td><td>út 9.20–9.40</td><td>B605</td>
  <th><a href="mailto:z.mrazek@spseiostrava.cz">z.mrazek@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/mrazkova">Mrázková Jitka, RNDr.</a></th><td>MRA</td><td>út 14.30–15.15</td><td>B512</td>
  <th><a href="mailto:j.mrazkova@spseiostrava.cz">j.mrazkova@spseiostrava.cz</a></th></tr>

  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/muller">Müller Petr</a></th><td>MUL</td><td>út 14.00–15.00 </td><td>B104</td>
	<th><a href="mailto:p.muller@spseiostrava.cz">p.muller@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/nalevka">Nálevka Zdeněk, Ing.</a></th><td>NAL</td><td>čt 13.00</td><td>A709</td>
  <th><a href="mailto:z.nalevka@spseiostrava.cz">z.nalevka@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/nowak">Nowak Radek, Mgr.</a></th><td>NOW</td><td>po 14.15–14.50, čt 7.15–8.00</td><td>C312</td>
  <th><a href="mailto:r.nowak@spseiostrava.cz">r.nowak@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/ogoralkova">Ogořálková&nbsp;Vladimíra,&nbsp;Mgr.</a></th><td>OGO</td><td>po 7.15, 14.20</td><td>B307</td>
  <th><a href="mailto:v.ogoralkova@spseiostrava.cz">v.ogoralkova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/papafoti">Papafoti Despina, Mgr.</a></th><td>PAP</td><td>st 7.10–7.55</td><td>C212</td>
  <th><a href="mailto:d.papafoti@spseiostrava.cz">d.papafoti@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/patschka">Patschka Jan, Ing.</a></th><td>PAS</td><td>st 13.30–15.15</td><td>ŠIC</td>
  <th><a href="mailto:j.patschka@spseiostrava.cz">j.patschka@spseiostrava.cz</a></th></tr>
	
  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/patzelt">Patzelt Jan</a></th><td>PAT</td><td>po 16.00–16.45</td><td>B605</td>
  <th><a href="mailto:j.patzelt@spseiostrava.cz">j.patzelt@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/pavlova">Pavlová Pavlína, Ing.</a></th><td>PAV</td><td>st 14.30</td><td>B407</td>
  <th><a href="mailto:p.pavlova@spseiostrava.cz">p.pavlova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/pectova">Pečtová Alena, Mgr.</a></th><td>PEC</td><td>pá 7.10–7.55&gt;</td><td>B512</td>
  <th><a href="mailto:a.pectova@spseiostrava.cz">a.pectova@spseiostrava.cz</a></th></tr>
  
  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/pinkasova">Pinkasová Monika, Mgr.</a></th><td>PIN</td><td>st 14.20–15.00</td><td>C211</td>
  <th><a href="mailto:m.pinkasova@spseiostrava.cz">m.pinkasova@spseiostrava.cz</a></th></tr>

  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/pohludka">Pohludka Jiří, Mgr.</a></th><td>POH</td><td>po 14.30–15.15</td><td>A709</td>
  <th><a href="mailto:j.pohludka@spseiostrava.cz">j.pohludka@spseiostrava.cz</a></th></tr>
  
  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/polak">Polák Eduard, Ing.</a></th><td>POA</td><td>st 12.20–13.00, čt 13.30–14:20</td><td>A403</td>
  <th><a href="mailto:e.polak@spseiostrava.cz">e.polak@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/revendova">Revendová Renáta, Ing.</a></th><td>REV</td><td>út 14.30–15.00, pá 7.30–8.30</td><td>A412</td>
  <th><a href="mailto:r.revendova@spseiostrava.cz">r.revendova@spseiostrava.cz</a></th></tr>

  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/slezak">Slezák Jan, Ing.</a></th><td>SLE</td><td>st 8.00–8.45</td><td>B407</td>
	<th><a href="mailto:j.slezak@spseiostrava.cz">j.slezak@spseiostrava.cz</a></th></tr>
  
	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/smyckova">Smyčková Renáta, Ing.</a></th><td>SMY</td><td>út 12.35–13.20</td><td>B503</td>
  <th><a href="mailto:r.smyckova@spseiostrava.cz">r.smyckova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/sousedik">Sousedík Miroslav, Bc.</a></th><td>SOU</td><td>pá 8.50–9.35</td><td>B104</td>
  <th><a href="mailto:m.sousedik@spseiostrava.cz">m.sousedik@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/stanke">Stanke Drahomír, Ing.</a></th><td>SKE</td><td>po 14.00–14.40, út 13.35–14.20 </td><td>A404</td>
  <th><a href="mailto:d.stanke@spseiostrava.cz">d.stanke@spseiostrava.cz</a></th></tr>

 	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/striz">Stříž Jaromír, Ing.</a></th><td>STR</td><td>po 7.10–7.55</td><td>B407</td>
  <th><a href="mailto:j.striz@spseiostrava.cz">j.striz@spseiostrava.cz</a></th></tr>
  
  <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/stuchlikova">Stuchlíková Lenka, Ing.</a></th><td>STU</td><td>po 13.20–14.00</td><td>A401</td>
  <th><a href="mailto:l.stuchlikova@spseiostrava.cz">l.stuchlikova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/svoboda">Svoboda Miroslav, Ing.</a></th><td>SVO</td><td>út 10.50–12.30</td><td>B605</td>
  <th><a href="mailto:m.svoboda@spseiostrava.cz">m.svoboda@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/sebestova">Šebestová Jana, Ing.</a></th><td>SEB</td><td>út 14.30–15.30</td><td>B608</td>
  <th><a href="mailto:j.sebestova@spseiostrava.cz">j.sebestova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/seligova">Šeligová Darja, Mgr.</a></th><td>SEL</td><td>út 14.30–15.30</td><td>C212</td>
  <th><a href="mailto:d.seligova@spseiostrava.cz">d.seligova@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/skapa">Škapa Ladislav, Ing.</a></th><td>SKA</td><td> po 12.35–13.20</td><td>A702</td>
		<th><a href="mailto:l.skapa@spseiostrava.cz">l.skapa@spseiostrava.cz</a></th></tr>

        <tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/tesar">Tesař Radek, Mgr.</a></th><td>TES</td><td>út, st 13.35</td><td>C311</td>
  <th><a href="mailto:r.tesar@spseiostrava.cz">r.tesar@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/zapletal">Zapletal Ivo, Ing.</a></th><td>ZAP</td><td>po 13.30–14.20</td><td>B407</td>
		<th><a href="mailto:i.zapletal@spseiostrava.cz">i.zapletal@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/zavadska">Závadská Anna, Ing.</a></th><td>ZAV</td><td>út 14.30</td><td>B608</td>
		<th><a href="mailto:a.zavadska@spseiostrava.cz">a.zavadska@spseiostrava.cz</a></th></tr>

	<tr><th><a href="http://spseiostrava.cz/index.php?id=studentum/ucitele/zavodna">Závodná Lenka, Ing.</a></th><td>ZAD</td><td>út 11.40–12.00, pá 12.40–13.00</td><td>A407</td>
		<th><a href="mailto:l.zavodna@spseiostrava.cz">l.zavodna@spseiostrava.cz</a></th></tr>
      </tbody>
      </table>
    
    </div>
      
     