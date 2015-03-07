 <html>
<head>
<script language="JavaScript" src="../../Users/DELL PC/Desktop/gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
</head>
<script>
<head>
<script>
function validateForm()
{


var finame=document.forms["myform"]["name"].value;
if(finame == "")
{
alert("student empty");
return false;
}
if(!finame.match(/^[a-zA-Z]+$/) && myform.Name.value !="")
 {
                    
               }
 var x=document.forms["myform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
<script>
function AllowAlphabet(){
               if (!myform.Name.value.match(/^[a-zA-Z]+$/) && myform.name.value !="")
              {
			  myform.name.value="";
              myform.name.focus(); 
              alert("Please Enter only alphabets in text");
}      
</script>
</head>
<!--function check(){
// value =document.getElementById("email").value;
 //value2 =document.getElementById("amount").value;
 var x=document.forms["myform"]["email"].value;
// if(value == null || value == ""){
	//return true;
// }
 var atpos=x.indexOf("@");
 var dotpos=x.lastIndexOf(".");
 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
 }
 </script>
 <script>
 function check1(){
 value =document.getElementById("mobile_no").value;
 if(value == null || value == ""){
	return true;
 }
 //var conv_val = Number(value1);
 
}
</script> -->

</script>


<div id="header" style="background-color:black;text-align:center;">
<h1 style="margin-bottom:0; align:center;"><font type="Constantia" size="4" color="white">DEPARTMENT OF MATHEMATICS</h1></font>
<h2 style="margin-bottom:0;"><font type="Constantia" size="4" color="white">MATHRIX 2013</h2></font>
<br>
</div>

<div id="registration">
<body background="C:\Users\divya\Desktop\6.jpg">
<form  name="myform" onSubmit="return check();" method="post" id="myform" action="create.php">
<fieldset>
<legend align="center"> REGISTRATION</legend>
<table align="center" border="2">
<tr>
<td><font type="Constantia" size="4" color="black">Mathrix ID:</td></font></b>
<td><input id="mathrix_id" type="text" name="mathrix_id"><br></td></tr>
<td><font type="Constantia" size="4" color="black">Student Name:</td></font><td><input id="name" type="text" name="name"><br></td></tr>
<td><font type="Constantia" size="4" color="black">College Name:</td></font>
<td><select name="college">
<option selected="Selected"></option>
<option value="Karpagam Institute of technology,Coimbatore">Karpagam Institute of technology,Coimbatore</option>
<option>Vivekananda Institute of technology,salem</option>
<option>Suguna spark Business,coimbatore</option>
<option>Archana institute of technology,krishnagiri.</option>
<option>Shree sathyam college ,Salem</option>
<option>Hosur institute of technology,Krishnagiri</option>
<option>KLN college of IT,Sivaganga</option>
<option>JKK munirajah college,erode</option>
<option>Excel engineering college,Namakkal</option>
<option>Vivekanadha Buisness,Namakkal</option>
<option>Aishwarya college ,erode</option>
<option>JNN institute of technology,tiruvallur</option>
<option>MAR college of engg. Pudukottai</option>
<option>Bhajarang engg college,tiruvallur</option>
<option>Central electochemc csir,sivaganga</option>
<option>SSM institute of engg. Dindigul</option>
<option>SCAD institute of technology,tirupur.</option>
<option>Sasurie ACAD of engg,kariyampalam.</option>
<option>Dhanalakshmi srinivasan college,siruvachu.</option>
<option>Marthandam college of engg, kuttakuzhi.</option>
<option>Sasi creative sch, myleripalayam.</option>
<option>Shivani engg college,poolathupatti.</option>
<option>Akshaya institute management , myleripalayam.</option>
<option>Anand school of Architecture,kazhipattur.</option>
<option>Jayalakshmi institute of technology,thoppur.</option>
<option>Bharath Nikethan engg ,thimmarasanaickanoor.</option>
<option>Univ college of engg, pullangudi.</option>
<option>CR engg college,alagarkovil.</option>
<option>SVS college of engg,arasampalayam.</option>
<option>Ratnavel subramaniam college ,paraipatti.</option>
<option>CARE school of architectute,thayanoor.</option>
<option>JJ college of engg,ammapettai.</option>
<option>Velamal engg college,surapetpuzhal,Chennai</option>
<option>AKT memorial college,neelamamgalam.</option>
<option>Idaya engg college for women,chinnnasalem.</option>
<option>JCT college of engg, pichanur</option>
<option>Green Tech college ,narasingapuram.</option>
<option>Velalar college of engg,thindal.</option>
<option>Sona college of tech,suramagalam.</option>
<option>Excel college of engg,pallakapalayam.</option>
<option>Adhiparaksakthi engg college,Melmaruvanthur.</option>
<option>VI institute of tech,sirunkundram.</option>
<option>KS Rangasamy college, ksr kalvi nagar.</option>
<option>Rajalakshmi institute ,irulapalayam.</option>
<option>Sri Kalaimagal college ,kondanchery.</option>
<option>D R B C C C Hindu college,pattabiram,chennai.</option>
<option>Apollo priyadarshana institute,oragadam.</option>
<option>Dhanalakshmi srinivasan college ,perambalur.</option>
<option>Adhi college of engg,madura sankarapuram.</option>
<option>Christian college of engg,dindigul.</option>
<option>Asan memorial college,jaladampet,Chennai.</option>
<option>Anand institute of higher tech,kazhipattur.</option>
<option>Mepco sclenk engg college,sivakasi</option>
<option>Annai college of engg,kovilacheri.</option>
<option>John Bosco engg college,thiruvallur.</option>
<option>Saranathan college of engg,panjappur.</option>
<option>Government college of engg,Bodiyanayakkanur.</option>
<option>National engg college,kovilpatti.</option>
<option>Erode builder education,tiruppur.</option>
<option>Excel college of technology,namakkal.</option>
<option>Erode sengundar engg,erode.</option>
<option>HR engg college,villupuram.</option>
<option>Oxford engg college,tirchy.</option>
<option>CMS college of engg,coimbatore.</option>
<option>Indra ganesan college ,trichy.</option>
<option>The selvam women Exc,trichy</option>
<option>sapthagiri college ,dharamapuri.</option>
<option>VPV college of engg,theni.</option>
<option>Roever college of engg,elambalur.</option>
<option>Pandian saraswathi yadav college,arasanoor.</option>
<option>JKK natraja college ,namakkal.</option>
<option>KSR college of engg, Namakkal </option>
<option>IRTT, erode</option>
<option>VP Muthaiah meenaks,virudhunagar</option>
<option>Mahendra Institute of technology,Namakkal</option>
<option>Sri Venkateshwara college ,Coimbatore</option>
<option>Adhiyamaan college ,krishnagri</option>
<option>Shri Angala amman college ,trichy</option>
<option>Hallmark Business school ,trichy</option>
<option>  RVS educational trust,Coimbatore</option>
<option>Gnanam school of business ,thanjavu</option>
<option>Shivani school of business,navallurkuttapattu</option>
<option>Skanda school of architecture,vaiyapamalai</option>
<option>Ganapathy chettiar college ,Melakavanur</option>
<option>KV institute of management ,kurubapalayam</option>
<option>PMR engg college ,maduravoyal</option>
<option>National college of engg,maruthakullam</option>
<option>Vivekananda institute ,kovilpalayam</option>
<option>.Hindusthan institute of tech,malumichampatty</option>
<option>.PSM jain college of tech,melur.</option>
<option>Infant jesus college, keelavalanadu.</option>
<option>Rajas international institute ,ozhuginasery.</option>
<option>ST Joseph college of engg,ellupatti.</option>
<option>RVS school of architecture ,kannampalayam.</option>
<option>KKC college of engg,karadekulam.</option>
<option>Thamirabharani engg college,chathirampudukulam.</option>
<option>Maharaja institute of tech ,arasur</option>
<option>KPR institute of engg,kollupalayam</option>
<option>Saraswathi velu college ,melvenkatapuram</option>
<option>Nehru institute of engg,thirumalayampalayam</option>
<option>As-salam college of engg,thirumangalakudi</option>
<option>Tamilnadu school of architecture,karumathampatti</option>
<option>Suguna college of engineering,Coimbatore</option>
<option>Bharathidasan engg. College,kbandarapalli</option>
<option>Dr. NGP institute of technology,Coimbatore</option>
<option>Sree Sowdambika college chettikurichi</option>
<option>RVS college of Comp Appln,kannampalayam</option>
<option>Kathir college of engg,neelambur</option>
<option>Chettinadu college of engg,puliyur cf</option>
<option>PSR rengasamy college,selvapatti</option>
<option>SVS institute of ca jp nagar,arasampalayam</option>
<option>Mahendra engg college,kumaramangalam</option>
<option>Narasus sarathy institute,poosaripatty</option>
<option>SBN college of engg,thamaraipadi</option>
<option>VSA educational ,udhamasollapuram</option>
<option>K ramakrishnan college,samayapuram</option>
<option>VKK Vijayan engg college,irunkattukottai</option>
<option>PPG.Buisness school,saravanampatti</option>
<option>MET engg. College,aralvaimozhi</option>
<option>Sri ramanathan engg college,naduppati</option>
<option>Lord jegannath college,ramanathachanputhur</option>
<option>AR college of engg,therkkumadathur</option>
<option>Arulmuruga tech campus,thennillai</option>
<option>School of architecture,vellimalaipattinam</option>
<option>Info institute of engg,kovilpalayam</option>
<option>United Institute of tech,G kovundampalayam</option>
<option>Tejaa Shakthi institute,karumathampatti</option>
<option>Mahakavi bharathiyar college,naranapuram</option>
<option>Univ college of engg,thirukkuvalai</option>
<option>Immanuel arasar jj college,edavilagam</option>
<option>Pabendar bharathidasan institute,mathur</option>
<option>OAS institute of tech,pulivalam</option>
<option>ARS college of engg,edayarnatham</option>
<option>RVS- KVK school of architecture,inamkulathur</option>
<option>DMI engg college ,aravoimozhi</option>
<option>Joe suresh engg college,ponnakudi</option>
<option>Cape institute of tech,levengipuram</option>
<option>PSN college of engg,Melathediyoor</option>
<option>Chandy college of engg,Mullakkadu</option>
<option>C Abdul hakeem college,melvisharam</option>
<option>P A college of engg,puliyampatti</option>
<option>ER perumal college,Nallaganakothapalli</option>
<option>JP college of engg,ayikudy</option>
<option>Sri ram institute of tech,west thambaram</option>
<option>Jayamatha engg college,thirurajapuram</option>
<option>Francis Xavier engg,vannarpettai</option>
<option>Jayam college of engg,Nallanur</option>
<option>Periyar maniammai college,Vallam</option>
<option>Regel cen of anna university,Coimbatore</option>
<option>Sree sastha institute of Chennai</option>
<option>Sai ram engg college,Chennai</option>
<option>Aalim mohammed saleo college,Chennai</option>
<option>Alpha institute of tech,namakkal</option>
<option>Paavaai group institute ,namakkal</option>
<option>Srinivasan engg college,perambalur</option>
<option>Jeppiar institute of tech,sriperambadur</option>
<option>Ponniyah ramajayam college,thanjavur</option>
<option>Prime college of Architecture,kilvelur</option>
<option>Sri Ramakrishna college of engg,perambalur</option>
<option>Sengunthar engg college,namakkal</option>
<option>Pollachi institute of tech,pollachi</option>
<option>Gnanamani institute of management,namakkal</option>
<option>AVC college of engineering,nagapatinam</option>
<option>Shreenivasa engg college ,dharmapuri</option>
<option>San intl info school,coimbatore</option>
<option>VV college of engg,tuticorin</option>
<option>Gnanamani college ,namakkal</option>
<option>Dr.nallini institute,tirupur</option>
<option>Kalaignar karunanidhi institute,Coimbatore</option>
<option>Sri padmavathy college,kanchipuram	</option>
<option> Jay shriram group ins,tirupur</option>
<option>king college of engg,namakkal</option>
<option>University college of engg,kanchipuram</option>
<option>Kamaraj college of engg,virudhunagar</option>
<option>RVS padmavathy school,gummudipoondi</option>
<option>Tirumalai engg college,kanchipuram</option>
<option>Sri nandhanam college, vellore</option>
<option>Mahalakshmi engg college,trichy</option>
<option>Mookambigai college ,pudukottai</option>
<option> ST.mother therasa engg,tuticorin</option>
<option>PET engg college,tirunelveli</option>
<option>Imayam college of engg, trichy</option>
<option>Universal college,tirunelveli</option>
<option>Sri bharathi engg coll,pudukottai</option>
<option>Nehru institute of tech,Coimbatore</option>
<option>Shanmuganathan engg,pudukottai</option>
<option>Sri sivasubramaniya college,chengalpattu</option>
<option>Mahendra college,Salem</option>
<option>ACT college of engg,kanchipuram</option>
<option>Noorul islam institute ,nagarkovil</option>
<option>Tamilzhan college ,nagarcoil</option>
<option>Sivaji college,Nagarcoil</option>
<option>The new royal college,chengalpattu</option>
<option>Kodaikanal institute of tech,dindigul</option>
<option>M Kumarasamy college,karur</option>
<option>KLN college of engg,sivagangai</option>
<option>Karaikudi institute of tech,karaikudi</option>
<option>Knowledge institute of tech,salem</option>
<option>Arulmigu kalasalinga college,Virudhunagar</option>
<option>MAMB school,trichy</option>
<option>Dr. pauls engg coll,Villupuram</option>
<option>Annai vailankanni college,nagercoil</option>
<option> Annai therasa coll,ulundurpet.</option>
<option>chennai institute of tech,Chennai.</option>
<option>Annai velankanni college,Chennai.</option>
<option>srinivasa institute of tech,Chennai.</option>
<option>G Narayanan EDL trust,thayanoor.</option>
<option>SMR east coast college,thanjavur.</option>
<option>Sri Venkateswara institute, krishnagiri.</option>
<option>RVS institute of management,Coimbatore</option>
<option>K Ramakrishnan college,trichy.</option>
<option>Star lion college,thanjavur.</option>
<option>The Kavery engg college ,salem.</option>
<option>Maria college of engg,nagercoil.</option>
<option>MCGANS ooty school,thanilgris.</option>
<option>Sri REnugambal college,Ettivadi.</option>
<option>Roever institute of management ,perambalur.</option>
<option>AL Ameen engg college,karandevanpalayam.</option>
<option>M P Nachimuthu engg,murugathozhuvu.</option>
<option>Maharaja prithvi engg,tiruppur.</option>
<option>univ college of engg,thelur kavanoor.</option>
<option>Dhanalakshmi college,perambalur.</option>
<option>Arasu engg college,thrivisanallur.</option>
<option>VSB engg college,karur.</option>
<option>Nightingale institute of tech,Madukkarai.</option>
<option>Ganadipathy engg ,kaniyamdadi.</option>
<option>Gem business acad,kolappalur.</option>
<option>Happy valley business school,veerapanur.</option>
<option>Annapoorana engg ,periyaseeragappadi.</option>
<option>Parisutham institute of tech,najikottai.</option>
<option>P R engg college,vallam</option>
<option>M R K institute of tech,natarmagalam.</option>
<option>ST.Michael college kalayarkovil.</option>
<option>Theni kamavarsangam college ,theni.</option>
<option>Pannai college ,sivaganga.</option>
<option>SVS institute, Coimbatore.</option>
<option>Ultra college, Madurai.</option>
<option>sureya college of engg,konalai.</option>
<option>sri vidya college ,virudhunagar.</option>
<option>Sree rajaraajan college,amaravathi.</option>
<option>ASL pauls college of engg,eloor.</option>
<option>SACS mavmm engg ,kidaripatty.</option>
<option>A R J institute of management ,thiruvarur.</option>
<option>DR.G U pope College ,tuticorin.</option>
<option>M kumarasamy ,karur.</option>
<option>Madurai school of Management ,Madurai.</option>
<option>Valliammai engg college ,chengalpattu.</option>
<option>Dr.Navalar nedunche ,cuddalore.</option>
<option>Jansons institute of tech,Coimbatore.</option>
<option>Indus college of engg,Coimbatore.</option>
<option>SNT Global Academy ,Coimbatore.</option>
<option>chendu college of engg,kanchipuram.</option>
<option>Angel collge of engg,tirupur.</option>
<option>Tagore institute of tech,salem</option>
<option>university college TV malai.</option>
<option>Shri sapthagiri institute ,vellore.</option>
<option>Tha rajas engg college ,thirunelvelli.</option>
<option>P G P college of engg,paramathi.</option>
<option>Vandaiyar engg college,pulavarnatham</option>
<option>Muthayammal engg college,kaakaveri.</option>
<option>Dhanalakshmi srivasan institute,samayapuram.</option>
<option>sri Guru institute of tech,kondayampalayam</option>
<option>Vetri vinayaha college ,tholurpatti.</option>
<option>R V S college of engg,kanampalayam.</option>
<option>Syedammal engg college,lanthai.</option>
<option>Swami Vivekananda institute ,valam.</option>
<option>Sri Krishna college of engg,unnai village</option>
<option>T R P engg college,irungalur.</option>
<option>Nehru institute of info tech,thirumalayampalayam.</option>
<option>Annai mathamal sheela engg ,Erumapatty.</option>
<option> S V S school of architecture,arasampalayam.</option>
<option>J K K munirajah school of architecture, T N palayam</option>
<option>K S R institute of engg,thokkavadi.</option>
<option>Park college of engg,kaniyur.</option>
<option>Pallavan college of engg,thimmasamudram.</option>
<option>Sri ramana Maharishi collge,thumbai.</option>
<option>S K P institute of tech,chinnakangiyanaur.</option>
<option>Dhirajlal Gandhi college,sikkanampatty.</option>
<option>Sri ranganatha institute ,athipalayam</option>
<option>Coimbatore institute of engg college,Vellimalaipatiyam.</option>
<option>Vasavi vidhya trust masinaickenpatti.</option>
<option>Sir Issac Newton college,pappakovil.</option>
<option>Udhaya school of engg,Amandivilai.</option>
<option>Adhithiya institute of tech, S S kulam.</option>
<option>MAR Ephraem college ,malankarahills.</option>
<option> James college of engg,jamespuramnavalkadu.</option>
<option>Panimalar institute of tech,varadharajapuram,</option>
<option>Arunachala engg college of women,manavilai.</option>
<option>Vijay institute of management ,dindugal.</option>
<option>P S R engg college,sevalpatti.</option>
<option>Mahabharathi engg college,A vasudevanur.</option>
<option>Dr.Nagarathinam college of engg,alampalayam.</option>
<option>Jayaram  college of engg, karattampatti</option>
<option>Karpagavinaga institute of management ,sivapuram.</option>
<option>Chearan institute of architecture ,Paramathi.</option>
<option>M A M college of engg,siruganur.</option>
<option>Paavai college of engg,pachal</option>
<option>N R school of architecture,kundampatty</option>
<option>R K K R school of management ,Ettimanikkampatti</option>
<option>K S K college of engg,Ammapet.</option>
<option>S R S collge of engg ,kuppanur.</option>
<option>Bharathiyar institute of engg,deviyakurichi.</option>
<option>P S V college of engg,balinayanapalli.</option>
<option>Brahma school of business valayapatti.</option>
<option>S K P engg college ,chinnakangiyanur.</option>
<option>Sri lakshmi ammal engg college,Chennai.</option>
<option>Agni college of tech,chengalpattu.</option>
<option>Dhanalakshmi srinivasan college,nakkarai</option>
<option>Ranipettai engg college,thenkadappanthanagal</option>
<option>Holy angels school of business,siruvachur</option>
<option>Salem college of engg,permapalayam</option>
<option>Shri andal alagar college,mamandur</option>
<option>Muthayammal tech,Kakkaveri</option>
<option>Nadar saraswathi college vadupudupatti</option>
<option>Pannimalar engg college,varadharajapuram</option>
<option>Sri Krishna engg college,panapakkam</option>
<option>Sudharsan engg college,sathyamangalam</option>
<option>Ganesh college of engg,salem</option>
<option>Nandha engg college,erode</option>
<option>Kongu nadu college,trichy</option>
<option>Trichy engg college,trichy</option>
<option>Pavendar bharadidasa college,trichy</option>
<option>College of business man,krishnagiri</option>
</select>
<br></td></tr>
<td><font type="Constantia" size="4" color="black">Email Id:</font></td><td><input type="text" id="email"  name="email" onsubmit="check()"><br></td></tr>
<td><font type="Constantia" size="4" color="black">Mobile No:</font></td>
<td><input type="text" id="mobile_no" name="mobile_no" maxlength="10" onBlur="check1()"></font><br></td></tr>
<td><font type="Constantia" size="4" color="black">Events:</font></td><td>
 <input type="checkbox" name="dumbc" id="dumbc" value="1"  /> <font type="Constantia" size="4" color="black">Dumb C  <br />
 <input type="checkbox" name="mathsketching" id="mathsketching" value="1"  /> <font type="Constantia" size="4" color="black">Math Sketching <br />
 <input type="checkbox" name="paperpresentation" id="paperpresentation" value="1"  /><font type="Constantia" size="4" color="black"> Paper presentation <br />
 <input type="checkbox" name="mathquiz" value="1" id="mathquiz"  /> <font type="Constantia" size="4" color="black">Math Quiz<br />
 </td></tr>
  <tr>
<!--<font type="Constantia" size="4" color="black"><td><td><input type="submit" name="add" value="Insert" />-->
 <font type="Constantia" size="4" color="black"><td><td><input type="submit" onClick="return validateForm();" name="add" value="Insert"  />
  
  <input type="button" name="Search" value="Search" onclick= "location = 'search.php';"/>
  <input type="button" name="Reports" value="Reports" onclick= "location = 'reports.php';"/></td></font></tr><br>
  <tr>
</table>
</fieldset>
</form>
</div>
</body>

<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.addValidation("mathrix_id","req","Please enter your id");
 
 frmvalidator.addValidation("name","req","Please enter your name");
 frmvalidator.addValidation("name","maxlen=50",	"Max length for name is 50");
 
 frmvalidator.addValidation("college","req","Please enter your college");
 frmvalidator.addValidation("college","maxlen=100",	"Max length for name is 100");
  </script>
</html>



