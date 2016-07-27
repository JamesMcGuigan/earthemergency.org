// original source http://www.wcrl.ars.usda.gov/cec/java/lat-long.htm
// JavaScript (c) 1997 by John A. Byers
// A few ugly hacks by James McGuigan (to make it work within a nested form)

var version = 3
var count = 0
var i = 0
// function getPath(URL) {
// result = URL.substring(0,(URL.lastIndexOf("/")+1))
// return result
// }
// baseref = getPath(window.location.href)

var choice = 1
var flag = 0

function ow1(){
pop=",0,0,0,scrollbars,resizable,height=450, width=660, top=0, left=0"
window.open("deg-dec.htm","",pop)
}

function makeArray(n) {
this.length = n
for (var i=0; i <= n; i++)
this[i] = ""
return this
}

function makeArray2(n) {
this.length = n
for (var i=0; i <= n; i++)
this[i] = 0
return this
}

var ct=326
var td = new makeArray2(ct)
var tm = new makeArray2(ct)
var ts = new makeArray2(ct)
var tr = new makeArray(ct)

var gd = new makeArray2(ct)
var gm = new makeArray2(ct)
var gs = new makeArray2(ct)
var gr = new makeArray(ct)
var nm = new makeArray(ct)

nm[1]="Abidjan, Ivory Coast"; td[1]=5; tm[1]=19; tr[1]="N"; gd[1]=4; gm[1]=2; gr[1]="W";
nm[2]="Abu Dhabi, United Arab Emirates"; td[2]=24; tm[2]=28; tr[2]="N"; gd[2]=54; gm[2]=22; gr[2]="E";
nm[3]="Abuja, Nigeria"; td[3]=9; tm[3]=12; tr[3]="N"; gd[3]=7; gm[3]=11; gr[3]="E";
nm[4]="Accra, Ghana"; td[4]=5; tm[4]=33; tr[4]="N"; gm[4]=13; gr[4]="E";
nm[5]="Addis Ababa, Ethiopia"; td[5]=9; tm[5]=2; tr[5]="N"; gd[5]=38; gm[5]=42; gr[5]="E";
nm[6]="Adelaide, Australia"; td[6]=34; tm[6]=56; tr[6]="S"; gd[6]=138; gm[6]=36; gr[6]="E"
nm[7]="Agana, Guam Island"; td[7]=13; tm[7]=28; tr[7]="N"; gd[7]=144; gm[7]=45; gr[7]="E";
nm[8]="Albuquerque, New Mexico"; td[8]=35; tm[8]=5; tr[8]="N"; gd[8]=106; gm[8]=39; gr[8]="W"
nm[9]="Algiers, Algeria"; td[9]=36; tm[9]=50; tr[9]="N"; gd[9]=3;  gr[9]="E";
nm[10]="Alice Springs, Australia"; td[10]=23; tm[10]=42; tr[10]="S"; gd[10]=133; gm[10]=53; gr[10]="E"
nm[11]="Alofi, Niue"; td[11]=19; tm[11]=1; tr[11]="S"; gd[11]=169; gm[11]=55; gr[11]="W";
nm[12]="Amarillo, Texas"; td[12]=35; tm[12]=12; ts[12]=27; tr[12]="N"; gd[12]=101; gm[12]=50; gs[12]=4; gr[12]="W"
nm[13]="Amman, Jordan"; td[13]=31; tm[13]=57; tr[13]="N"; gd[13]=35; gm[13]=56; gr[13]="E";
nm[14]="Amsterdam, Netherlands"; td[14]=52; tm[14]=21; tr[14]="N"; gd[14]=4; gm[14]=54; gr[14]="E";
nm[15]="Anchorage, Alaska"; td[15]=61; tm[15]=10; tr[15]="N"; gd[15]=149; gm[15]=59; gr[15]="W"
nm[16]="Andorra la Vella, Andorra"; td[16]=42; tm[16]=30; tr[16]="N"; gd[16]=1; gm[16]=31; gr[16]="E";
nm[17]="Anguilla, Anguilla Island"; td[17]=18; tm[17]=12; tr[17]="N"; gd[17]=63; gm[17]=4; gr[17]="W";
nm[18]="Ankara, Turkey"; td[18]=39; tm[18]=56; tr[18]="N"; gd[18]=32; gm[18]=52; gr[18]="E";
nm[19]="Antananarivo, Madagascar"; td[19]=18; tm[19]=55; tr[19]="S"; gd[19]=47; gm[19]=31; gr[19]="E";
nm[20]="Apia, Samoa"; td[20]=13; tm[20]=48; tr[20]="S"; gd[20]=171; gm[20]=45; gr[20]="W";
nm[21]="Armidale, Australia"; td[21]=30; tm[21]=31; tr[21]="S"; gd[21]=151; gm[21]=39; gr[21]="E"
nm[22]="Ashgabat, Turkmenistan"; td[22]=37; tm[22]=58; tr[22]="N"; gd[22]=58; gm[22]=24; gr[22]="E";
nm[23]="Asmara, Eritrea"; td[23]=15; tm[23]=20; tr[23]="N"; gd[23]=38; gm[23]=53; gr[23]="E";
nm[24]="Astana, Kazakhstan"; td[24]=41; tm[24]=55; tr[24]="N"; gd[24]=8; gm[24]=44; gr[24]="E";
nm[25]="Asunci�n, Paraguay"; td[25]=25; tm[25]=16; tr[25]="S"; gd[25]=57; gm[25]=40; gr[25]="W";
nm[26]="Athens, Greece"; td[26]=37; tm[26]=58; tr[26]="N"; gd[26]=23; gm[26]=43; gr[26]="E";
nm[27]="Atlanta, Georgia"; td[27]=33; tm[27]=45; ts[27]=10; tr[27]="N"; gd[27]=84; gm[27]=23; gs[27]=37; gr[27]="W"
nm[28]="Auckland, New Zealand"; td[28]=36; tm[28]=55; tr[28]="S"; gd[28]=174; gm[28]=47; gr[28]="E"
nm[29]="Avarua, Cook Islands"; td[29]=21; tm[29]=12; tr[29]="S"; gd[29]=159; gm[29]=46; gr[29]="W";
nm[30]="Baghdad, Iraq"; td[30]=33; tm[30]=20; tr[30]="N"; gd[30]=44; gm[30]=26; gr[30]="E";
nm[31]="Baku, Azerbaijan"; td[31]=40; tm[31]=22; tr[31]="N"; gd[31]=49; gm[31]=53; gr[31]="E";
nm[32]="Baltimore, Maryland"; td[32]=39; tm[32]=18; tr[32]="N"; gd[32]=76; gm[32]=38; gr[32]="W"
nm[33]="Bamako, Mali"; td[33]=12; tm[33]=39; tr[33]="N"; gd[33]=8;  gr[33]="W";
nm[34]="Bandar Seri Begawan, Brunei"; td[34]=4; tm[34]=56; tr[34]="N"; gd[34]=114; gm[34]=55; gr[34]="E";
nm[35]="Bangkok, Thailand"; td[35]=13; tm[35]=44; tr[35]="N"; gd[35]=100; gm[35]=30; gr[35]="E";
nm[36]="Bangor, Maine"; td[36]=44; tm[36]=48; ts[36]=13; tr[36]="N"; gd[36]=68; gm[36]=46; gs[36]=18; gr[36]="W"
nm[37]="Bangui, Central African Republic"; td[37]=4; tm[37]=22; tr[37]="N"; gd[37]=18; gm[37]=35; gr[37]="E";
nm[38]="Banjul, The Gambia"; td[38]=13; tm[38]=28; tr[38]="N"; gd[38]=16; gm[38]=39; gr[38]="W";
nm[39]="Barcelona, Spain"; td[39]=41; tm[39]=23; tr[39]="N"; gd[39]=2; gm[39]=9; gr[39]="E"
nm[40]="Basseterre, Saint Kitts and Nevis"; td[40]=17; tm[40]=18; tr[40]="N"; gd[40]=62; gm[40]=43; gr[40]="W";
nm[41]="Beijing, China"; td[41]=39; tm[41]=55; tr[41]="N"; gd[41]=116; gm[41]=26; gr[41]="E";
nm[42]="Beirut, Lebanon"; td[42]=33; tm[42]=53; tr[42]="N"; gd[42]=35; gm[42]=30; gr[42]="E";
nm[43]="Belem, Brazil"; td[43]=1; tm[43]=27; tr[43]="S"; gd[43]=48; gm[43]=29; gr[43]="W"
nm[44]="Belgrade, Yugoslavia (Serbia/Montenegro)"; td[44]=44; tm[44]=50; tr[44]="N"; gd[44]=20; gm[44]=30; gr[44]="E";
nm[45]="Belmopan, Belize"; td[45]=17; tm[45]=15; tr[45]="N"; gd[45]=88; gm[45]=46; gr[45]="W";
nm[46]="Berkeley, California"; td[46]=37; tm[46]=52; ts[46]=10; tr[46]="N"; gd[46]=122; gm[46]=16; gs[46]=17; gr[46]="W"
nm[47]="Berlin, Germany"; td[47]=52; tm[47]=32; tr[47]="N"; gd[47]=13; gm[47]=25; gr[47]="E";
nm[48]="Bern, Switzerland"; td[48]=46; tm[48]=57; tr[48]="N"; gd[48]=7; gm[48]=26; gr[48]="E";
nm[49]="Bishkek, Kyrgyzstan"; td[49]=42; tm[49]=54; tr[49]="N"; gd[49]=74; gm[49]=46; gr[49]="E";
nm[50]="Bissau, Guinea-Bissau"; td[50]=11; tm[50]=51; tr[50]="N"; gd[50]=15; gm[50]=35; gr[50]="W";
nm[51]="Bogot�, Colombia"; td[51]=4; tm[51]=36; tr[51]="N"; gd[51]=74; gm[51]=5; gr[51]="W";
nm[52]="Boise, Idaho"; td[52]=43; tm[52]=37; ts[52]=7; tr[52]="N"; gd[52]=116; gm[52]=11; gs[52]=58; gr[52]="W"
nm[53]="Bombay, India"; td[53]=19; tr[53]="N"; gd[53]=72; gm[53]=48; gr[53]="E"
nm[54]="Boston, Massachusetts"; td[54]=42; tm[54]=21; ts[54]=24; tr[54]="N"; gd[54]=71; gm[54]=3; gs[54]=25; gr[54]="W"
nm[55]="Brasilia, Brazil"; td[55]=15; tm[55]=47; tr[55]="S"; gd[55]=47; gm[55]=55; gr[55]="W";
nm[56]="Bratislava, Slovakia"; td[56]=48; tm[56]=9; tr[56]="N"; gd[56]=17; gm[56]=7; gr[56]="E";
nm[57]="Brazzaville, Congo (Brazzaville)"; td[57]=4; tm[57]=16; tr[57]="S"; gd[57]=15; gm[57]=17; gr[57]="E";
nm[58]="Bridgetown, Barbados"; td[58]=13; tm[58]=6; tr[58]="N"; gd[58]=59; gm[58]=37; gr[58]="W";
nm[59]="Brisbane, Australia"; td[59]=27; tm[59]=30; tr[59]="S"; gd[59]=153; gm[59]=1;  gr[59]="E"
nm[60]="Brussels, Belgium"; td[60]=50; tm[60]=50; tr[60]="N"; gd[60]=4; gm[60]=20; gr[60]="E";
nm[61]="Bucharest, Romania"; td[61]=44; tm[61]=26; tr[61]="N"; gd[61]=26; gm[61]=6; gr[61]="E";
nm[62]="Budapest, Hungary"; td[62]=47; tm[62]=30; tr[62]="N"; gd[62]=19; gm[62]=5; gr[62]="E";
nm[63]="Buenos Aires, Argentina"; td[63]=34; tm[63]=36; tr[63]="S"; gd[63]=58; gm[63]=27; gr[63]="W";
nm[64]="Buffalo, N.Y."; td[64]=42; tm[64]=52; ts[64]=52; tr[64]="N"; gd[64]=78; gm[64]=52; gs[64]=21; gr[64]="W"
nm[65]="Bujumbura, Burundi"; td[65]=3; tm[65]=23; tr[65]="S"; gd[65]=29; gm[65]=22; gr[65]="E";
nm[66]="Butte, Montana"; td[66]=46; tm[66]=1; ts[66]=6; tr[66]="N"; gd[66]=112; gm[66]=32; gs[66]=11; gr[66]="W"
nm[67]="Cairo, Egypt"; td[67]=30; tm[67]=3; tr[67]="N"; gd[67]=31; gm[67]=15; gr[67]="E";
nm[68]="Calcutta, India"; td[68]=22; tm[68]=34; tr[68]="N"; gd[68]=88; gm[68]=24; gr[68]="E"
nm[69]="Calgary, Alberta"; td[69]=51; tm[69]=2; ts[69]=46; tr[69]="N"; gd[69]=114; gm[69]=3; gs[69]=24; gr[69]="W"
nm[70]="Canberra, Australia"; td[70]=35; tm[70]=17; tr[70]="S"; gd[70]=149; gm[70]=8; gr[70]="E";
nm[71]="Canton, China"; td[71]=23; tm[71]=7; tr[71]="N"; gd[71]=113; gm[71]=15; gr[71]="E"
nm[72]="Capetown, South Africa"; td[72]=35; tm[72]=55; tr[72]="S"; gd[72]=18; gm[72]=22; gr[72]="E"
nm[73]="Caracas, Venezuela"; td[73]=10; tm[73]=30; tr[73]="N"; gd[73]=66; gm[73]=56; gr[73]="W";
nm[74]="Carlsbad, New Mexico"; td[74]=32; tm[74]=26; tr[74]="N"; gd[74]=104; gm[74]=15; gr[74]="W"
nm[75]="Castries, Saint Lucia"; td[75]=14; tm[75]=1; tr[75]="N"; gd[75]=61; gr[75]="W";
nm[76]="Charlotte Amalie, US Virgin Islands"; td[76]=18; tm[76]=21; tr[76]="N"; gd[76]=64; gm[76]=56; gr[76]="W";
nm[77]="Cheyenne, Wyoming"; td[77]=41; tm[77]=8; ts[77]=9; tr[77]="N"; gd[77]=104; gm[77]=49; gs[77]=7; gr[77]="W"
nm[78]="Chicago, Illinois"; td[78]=41; tm[78]=52; ts[78]=28; tr[78]="N"; gd[78]=87; gm[78]=38; gs[78]=22; gr[78]="W"
nm[79]="Chihuahua, Mexico"; td[79]=28; tm[79]=40; tr[79]="N"; gd[79]=106; gm[79]=6; gr[79]="W"
nm[80]="Chisinau, Moldova"; td[80]=47; tr[80]="N"; gd[80]=28; gm[80]=50; gr[80]="E";
nm[81]="Cincinnati, Ohio"; td[81]=39; tm[81]=8; tr[81]="N"; gd[81]=84; gm[81]=30; gr[81]="W"
nm[82]="Cleveland, Ohio"; td[82]=41; tm[82]=28; tr[82]="N"; gd[82]=81; gm[82]=37; gr[82]="W"
nm[83]="Cockburn Town, Turks & Caicos Islands"; td[83]=21; tm[83]=24; tr[83]="N"; gd[83]=71; gm[83]=7; gr[83]="W";
nm[84]="Colombo, Sri Lanka"; td[84]=6; tm[84]=55; tr[84]="N"; gd[84]=79; gm[84]=52; gr[84]="E";
nm[85]="Conakry, Guinea"; td[85]=9; tm[85]=31; tr[85]="N"; gd[85]=13; gm[85]=43; gr[85]="W";
nm[86]="Copenhagen, Denmark"; td[86]=55; tm[86]=40; tr[86]="N"; gd[86]=12; gm[86]=35; gr[86]="E";
nm[87]="Dakar, Senegal"; td[87]=14; tm[87]=40; tr[87]="N"; gd[87]=17; gm[87]=26; gr[87]="W";
nm[88]="Dallas, Texas"; td[88]=32; tm[88]=47; ts[88]=9; tr[88]="N"; gd[88]=96; gm[88]=47; gs[88]=37; gr[88]="W"
nm[89]="Damascus, Syria"; td[89]=33; tm[89]=30; tr[89]="N"; gd[89]=36; gm[89]=18; gr[89]="E";
nm[90]="Dar es Salaam, Tanzania"; td[90]=6; tm[90]=48; tr[90]="S"; gd[90]=39; gm[90]=17; gr[90]="E";
nm[91]="Darwin, Australia"; td[91]=12; tm[91]=28; tr[91]="S"; gd[91]=130; gm[91]=50; gr[91]="E"
nm[92]="Denver, Colorado"; td[92]=39; tm[92]=44; ts[92]=58; tr[92]="N"; gd[92]=104; gm[92]=59; gs[92]=22; gr[92]="W"
nm[93]="Detroit, Michigan"; td[93]=42; tm[93]=19; ts[93]=48; tr[93]="N"; gd[93]=83; gm[93]=2; gs[93]=57; gr[93]="W"
nm[94]="Dhaka, Bangladesh"; td[94]=23; tm[94]=43; tr[94]="N"; gd[94]=90; gm[94]=25; gr[94]="E";
nm[95]="Dili, East Timor"; td[95]=8; tm[95]=57; tr[95]="S"; gd[95]=125; gm[95]=58; gr[95]="E";
nm[96]="Djibouti, Djibouti"; td[96]=11; tm[96]=36; tr[96]="N"; gd[96]=43; gm[96]=9; gr[96]="E";
nm[97]="Doha (Al-Dawhah), Qatar"; td[97]=25; tm[97]=17; tr[97]="N"; gd[97]=51; gm[97]=32; gr[97]="E";
nm[98]="Douglas, Isle of Man"; td[98]=54; tm[98]=9; tr[98]="N"; gd[98]=4; gm[98]=28; gr[98]="W";
nm[99]="Dublin (City), Ireland"; td[99]=53; tm[99]=20; tr[99]="N"; gd[99]=6; gm[99]=15; gr[99]="W";
nm[100]="Dushanbe, Tajikistan"; td[100]=38; tm[100]=35; tr[100]="N"; gd[100]=68; gm[100]=48; gr[100]="E";
nm[101]="Edmonton, Alberta"; td[101]=53; tm[101]=32; ts[101]=43; tr[101]="N"; gd[101]=113; gm[101]=29; gs[101]=21; gr[101]="W"
nm[102]="Fairbanks, Alaska"; td[102]=64; tm[102]=48; tr[102]="N"; gd[102]=147; gm[102]=51; gr[102]="W"
nm[103]="Flagstaff, Arizona"; td[103]=35; tm[103]=11; ts[103]=36; tr[103]="N"; gd[103]=111; gm[103]=39; gs[103]=6; gr[103]="W"
nm[104]="Flying Fish Cove, Christmas Island"; td[104]=10; tm[104]=25; tr[104]="S"; gd[104]=105; gm[104]=43; gr[104]="E";
nm[105]="Fort-de-France, Martinique Island"; td[105]=14; tm[105]=36; tr[105]="N"; gd[105]=61; gm[105]=5; gr[105]="W";
nm[106]="Frankfurt, Germany"; td[106]=50; tm[106]=7; tr[106]="N"; gd[106]=8; gm[106]=41; gr[106]="E"
nm[107]="Freetown, Sierra Leone"; td[107]=8; tm[107]=30; tr[107]="N"; gd[107]=13; gm[107]=15; gr[107]="W";
nm[108]="Fresno, California"; td[108]=36; tm[108]=44; ts[108]=12; tr[108]="N"; gd[108]=119; gm[108]=47; gs[108]=11; gr[108]="W"
nm[109]="Funafuti, Tuvalu"; td[109]=8; tm[109]=31; tr[109]="S"; gd[109]=179; gm[109]=13; gr[109]="E";
nm[110]="Funchal, Madeira Islands"; td[110]=32; tm[110]=38; tr[110]="N"; gd[110]=16; gm[110]=54; gr[110]="W";
nm[111]="Gaborone, Botswana"; td[111]=24; tm[111]=45; tr[111]="S"; gd[111]=25; gm[111]=55; gr[111]="E";
nm[112]="George Town, Cayman Islands"; td[112]=19; tm[112]=18; tr[112]="N"; gd[112]=81; gm[112]=23; gr[112]="W";
nm[113]="Georgetown, Guyana"; td[113]=6; tm[113]=48; tr[113]="N"; gd[113]=58; gm[113]=10; gr[113]="W";
nm[114]="Gibraltar, Gibraltar"; td[114]=36; tm[114]=8; tr[114]="N"; gd[114]=5; gm[114]=21; gr[114]="W";
nm[115]="Glasgow, Scotland"; td[115]=55; tm[115]=50; tr[115]="N"; gd[115]=4; gm[115]=15; gr[115]="W"
nm[116]="Gothenburg, Sweden"; td[116]=57; tm[116]=40; ts[116]=29; tr[116]="N"; gd[116]=11; gm[116]=58; gr[116]="E"
nm[117]="Grand Junction, Colorado"; td[117]=39; tm[117]=4; ts[117]=6; tr[117]="N"; gd[117]=108; gm[117]=33; gs[117]=54; gr[117]="W"
nm[118]="Guatemala (City), Guatemala"; td[118]=14; tm[118]=38; tr[118]="N"; gd[118]=90; gm[118]=31; gr[118]="W";
nm[119]="Hamburg, Germany"; td[119]=53; tm[119]=33; tr[119]="N"; gd[119]=10; gm[119]=2; gr[119]="E"
nm[120]="Hamilton, Bermuda"; td[120]=32; tm[120]=17; tr[120]="N"; gd[120]=64; gm[120]=46; gr[120]="W";
nm[121]="Hammerfest, Norway"; td[121]=70; tm[121]=38; tr[121]="N"; gd[121]=23; gm[121]=38; gr[121]="E"
nm[122]="Hanoi, Vietnam"; td[122]=21; tm[122]=1; tr[122]="N"; gd[122]=105; gm[122]=52; gr[122]="E";
nm[123]="Harare, Zimbabwe"; td[123]=17; tm[123]=50; tr[123]="S"; gd[123]=31; gm[123]=30; gr[123]="E";
nm[124]="Havana, Cuba"; td[124]=23; tm[124]=8; tr[124]="N"; gd[124]=82; gm[124]=22; gr[124]="W";
nm[125]="Helsinki, Finland"; td[125]=60; tm[125]=10; tr[125]="N"; gd[125]=24; gm[125]=58; gr[125]="E";
nm[126]="Hong Kong, Hong Kong"; td[126]=22; tm[126]=15; tr[126]="N"; gd[126]=114; gm[126]=10; gr[126]="E";
nm[127]="Honiara, Solomon Islands"; td[127]=9; tm[127]=28; tr[127]="S"; gd[127]=159; gm[127]=57; gr[127]="E";
nm[128]="Honolulu, Hawaii"; td[128]=21; tm[128]=18; ts[128]=22; tr[128]="N"; gd[128]=157; gm[128]=51; gs[128]=35; gr[128]="W"
nm[129]="Houston, Texas"; td[129]=29; tm[129]=45; ts[129]=26; tr[129]="N"; gd[129]=95; gm[129]=21; gs[129]=37; gr[129]="W"
nm[130]="Islamabad, Pakistan"; td[130]=33; tm[130]=40; tr[130]="N"; gd[130]=73; gm[130]=8; gr[130]="E";
nm[131]="Istanbul, Turkey"; td[131]=41; tm[131]=1; tr[131]="N"; gd[131]=28; gm[131]=58; gr[131]="E"
nm[132]="Jakarta, Indonesia"; td[132]=6; tm[132]=8; tr[132]="S"; gd[132]=106; gm[132]=45; gr[132]="E";
nm[133]="Jerusalem, Israel"; td[133]=31; tm[133]=47; tr[133]="N"; gd[133]=35; gm[133]=13; gr[133]="E";
nm[134]="Johannesburg, South Africa"; td[134]=26; tm[134]=10; tr[134]="S"; gd[134]=28; gm[134]=2; gr[134]="E"
nm[135]="Kabul, Afghanistan"; td[135]=34; tm[135]=31; tr[135]="N"; gd[135]=69; gm[135]=12; gr[135]="E";
nm[136]="Kampala, Uganda"; tm[136]=19; tr[136]="N"; gd[136]=32; gm[136]=25; gr[136]="E";
nm[137]="Kansas City, Missouri"; td[137]=39; tm[137]=4; ts[137]=56; tr[137]="N"; gd[137]=94; gm[137]=35; gs[137]=20; gr[137]="W"
nm[138]="Karachi, Pakistan"; td[138]=24; tm[138]=51; tr[138]="N"; gd[138]=67; gm[138]=2; gr[138]="E"
nm[139]="Kathmandu, Nepal"; td[139]=27; tm[139]=42; tr[139]="N"; gd[139]=85; gm[139]=19; gr[139]="E";
nm[140]="Khartoum, Sudan"; td[140]=15; tm[140]=36; tr[140]="N"; gd[140]=32; gm[140]=32; gr[140]="E";
nm[141]="Kiev, Ukraine"; td[141]=50; tm[141]=25; tr[141]="N"; gd[141]=30; gm[141]=43; gr[141]="E";
nm[142]="Kigali, Rwanda"; td[142]=1; tm[142]=57; tr[142]="S"; gd[142]=30; gm[142]=4; gr[142]="E";
nm[143]="Kingston, Jamaica"; td[143]=18; tr[143]="N"; gd[143]=76; gm[143]=48; gr[143]="W";
nm[144]="Kingstown, St. Vincent & the Grenadines"; td[144]=13; tm[144]=9; tr[144]="N"; gd[144]=61; gm[144]=14; gr[144]="W";
nm[145]="Kinshasa, Congo (Kinshasa)"; td[145]=4; tm[145]=18; tr[145]="S"; gd[145]=15; gm[145]=18; gr[145]="E";
nm[146]="Koror, Palau"; td[146]=7; tm[146]=20; tr[146]="N"; gd[146]=134; gm[146]=29; gr[146]="E";
nm[147]="Kuala Lumpur, Malaysia"; td[147]=3; tm[147]=8; tr[147]="N"; gd[147]=101; gm[147]=42; gr[147]="E";
nm[148]="Kunming, China"; td[148]=25; tm[148]=4; tr[148]="N"; gd[148]=102; gm[148]=41; gr[148]="E"
nm[149]="Kuwait (City), Kuwait"; td[149]=29; tm[149]=20; tr[149]="N"; gd[149]=48; gr[149]="E";
nm[150]="La Paz, Bolivia"; td[150]=16; tm[150]=30; tr[150]="S"; gd[150]=68; gm[150]=9; gr[150]="W";
nm[151]="Lagos, Nigeria"; td[151]=6; tm[151]=27; tr[151]="N"; gd[151]=3; gm[151]=24; gr[151]="E"
nm[152]="Las Palmas de Gran Canaria, Canary Island"; td[152]=28; tr[152]="N"; gd[152]=15; gm[152]=30; gr[152]="W";
nm[153]="Las Vegas, Nevada"; td[153]=36; tm[153]=10; tr[153]="N"; gd[153]=115; gm[153]=12; gr[153]="W"
nm[154]="Lhasa, Tibet"; td[154]=29; tm[154]=40; tr[154]="N"; gd[154]=91; gm[154]=9; gr[154]="E";
nm[155]="Libreville, Gabon"; tm[155]=23; tr[155]="N"; gd[155]=9; gm[155]=27; gr[155]="E";
nm[156]="Lilongwe, Malawi"; td[156]=13; tm[156]=59; tr[156]="S"; gd[156]=33; gm[156]=44; gr[156]="E";
nm[157]="Lima, Peru"; td[157]=12; tm[157]=3; tr[157]="S"; gd[157]=77; gm[157]=3; gr[157]="W";
nm[158]="Lincoln, Nebraska"; td[158]=40; tm[158]=48; ts[158]=59; tr[158]="N"; gd[158]=96; gm[158]=42; gs[158]=15; gr[158]="W"
nm[159]="Lisbon, Portugal"; td[159]=38; tm[159]=43; tr[159]="N"; gd[159]=9; gm[159]=8; gr[159]="W";
nm[160]="Liverpool, England"; td[160]=53; tm[160]=25; tr[160]="N"; gd[160]=3; gr[160]="W"
nm[161]="Ljubljana, Slovenia"; td[161]=46; tm[161]=3; tr[161]="N"; gd[161]=14; gm[161]=31; gr[161]="E";
nm[162]="Lom�, Togo"; td[162]=6; tm[162]=8; tr[162]="N"; gd[162]=1; gm[162]=13; gr[162]="E";
nm[163]="London, United Kingdom"; td[163]=51; tm[163]=30; tr[163]="N"; gm[163]=10; gr[163]="W";
nm[164]="Los Angeles, California"; td[164]=34; tm[164]=3; ts[164]=15; tr[164]="N"; gd[164]=118; gm[164]=14; gs[164]=28; gr[164]="W"
nm[165]="Luanda, Angola"; td[165]=8; tm[165]=48; tr[165]="S"; gd[165]=13; gm[165]=14; gr[165]="E";
nm[166]="Lund, Sweden"; td[166]=55; tm[166]=43; ts[166]=33; tr[166]="N"; gd[166]=13; gm[166]=13; gr[166]="E"
nm[167]="Lusaka, Zambia"; td[167]=15; tm[167]=25; tr[167]="S"; gd[167]=28; gm[167]=17; gr[167]="E";
nm[168]="Luxembourg, Luxembourg"; td[168]=49; tm[168]=36; tr[168]="N"; gd[168]=6; gm[168]=9; gr[168]="E";
nm[169]="Macau City, Macau (Macao)"; td[169]=22; tm[169]=14; tr[169]="N"; gd[169]=113; gm[169]=35; gr[169]="E";
nm[170]="Madrid, Spain"; td[170]=40; tm[170]=24; tr[170]="N"; gd[170]=3; gm[170]=41; gr[170]="W";
nm[171]="Majuro, Marshall Islands"; td[171]=7; tm[171]=9; tr[171]="N"; gd[171]=171; gm[171]=12; gr[171]="E";
nm[172]="Malabo, Equatorial Guinea"; td[172]=3; tm[172]=45; tr[172]="N"; gd[172]=8; gm[172]=47; gr[172]="E";
nm[173]="Male, Maldives"; td[173]=4; tm[173]=10; tr[173]="N"; gd[173]=73; gm[173]=30; gr[173]="E";
nm[174]="Malmo, Sweden"; td[174]=55; tm[174]=32; ts[174]=54; tr[174]="N"; gd[174]=13; gm[174]=5; gr[174]="E"
nm[175]="Managua, Nicaragua"; td[175]=12; tm[175]=6; tr[175]="N"; gd[175]=86; gm[175]=18; gr[175]="W";
nm[176]="Manama, Bahrain"; td[176]=26; tm[176]=13; tr[176]="N"; gd[176]=50; gm[176]=35; gr[176]="E";
nm[177]="Manila, Philippines"; td[177]=14; tm[177]=35; tr[177]="N"; gd[177]=120; gm[177]=59; gr[177]="E";
nm[178]="Maputo, Mozambique"; td[178]=25; tm[178]=58; tr[178]="S"; gd[178]=32; gm[178]=35; gr[178]="E";
nm[179]="Mariana, Northern Mariana Islands"; td[179]=16; tr[179]="N"; gd[179]=145; gm[179]=30; gr[179]="E";
nm[180]="Maseru, Lesotho"; td[180]=29; tm[180]=19; tr[180]="S"; gd[180]=27; gm[180]=29; gr[180]="E";
nm[181]="Mbabane, Swaziland"; td[181]=26; tm[181]=18; tr[181]="S"; gd[181]=31; gm[181]=6; gr[181]="E";
nm[182]="Mecca, Saudi Arabia"; td[182]=21; tm[182]=29; tr[182]="N"; gd[182]=39; gm[182]=45; gr[182]="E"
nm[183]="Melbourne, Australia"; td[183]=37; tm[183]=47; tr[183]="S"; gd[183]=144; gm[183]=58; gr[183]="E"
nm[184]="Mexico City, Mexico"; td[184]=19; tm[184]=24; tr[184]="N"; gd[184]=99; gm[184]=9; gr[184]="W";
nm[185]="Miami, Florida"; td[185]=25; tm[185]=46; tr[185]="N"; gd[185]=80; gm[185]=12; gr[185]="W"
nm[186]="Milan, Italy"; td[186]=45; tm[186]=27; tr[186]="N"; gd[186]=9; gm[186]=10; gr[186]="E"
nm[187]="Minneapolis, Minnesota"; td[187]=44; tm[187]=58; ts[187]=57; tr[187]="N"; gd[187]=93; gm[187]=15; gs[187]=43; gr[187]="W"
nm[188]="Minsk, Belarus"; td[188]=53; tm[188]=54; tr[188]="N"; gd[188]=27; gm[188]=34; gr[188]="E";
nm[189]="Mogadishu, Somalia"; td[189]=2; tm[189]=2; tr[189]="N"; gd[189]=45; gm[189]=21; gr[189]="E";
nm[190]="Monaco, Monaco"; td[190]=43; tm[190]=42; tr[190]="N"; gd[190]=7; gm[190]=23; gr[190]="E";
nm[191]="Monrovia, Liberia"; td[191]=6; tm[191]=18; tr[191]="N"; gd[191]=10; gm[191]=47; gr[191]="W";
nm[192]="Montevideo, Uruguay"; td[192]=34; tm[192]=53; tr[192]="S"; gd[192]=56; gm[192]=11; gr[192]="W";
nm[193]="Montreal, Quebec"; td[193]=45; tm[193]=30; ts[193]=33; tr[193]="N"; gd[193]=73; gm[193]=33; gs[193]=14; gr[193]="W"
nm[194]="Moroni, Comoros"; td[194]=11; tm[194]=41; tr[194]="S"; gd[194]=43; gm[194]=16; gr[194]="E";
nm[195]="Moscow, Russia"; td[195]=55; tm[195]=45; tr[195]="N"; gd[195]=37; gm[195]=42; gr[195]="E";
nm[196]="Munich, Germany"; td[196]=48; tm[196]=8; tr[196]="N"; gd[196]=11; gm[196]=35; gr[196]="E"
nm[197]="Muscat, Oman"; td[197]=23; tm[197]=37; tr[197]="N"; gd[197]=58; gm[197]=35; gr[197]="E";
nm[198]="N'Djamena, Chad"; td[198]=12; tm[198]=7; tr[198]="N"; gd[198]=15; gm[198]=3; gr[198]="E";
nm[199]="Nairobi, Kenya"; td[199]=1; tm[199]=17; tr[199]="S"; gd[199]=36; gm[199]=49; gr[199]="E";
nm[200]="Naples, Italy"; td[200]=40; tm[200]=50; tr[200]="N"; gd[200]=14; gm[200]=15; gr[200]="E"
nm[201]="Nashville, Tennessee"; td[201]=36; tm[201]=10; tr[201]="N"; gd[201]=86; gm[201]=47; gr[201]="W"
nm[202]="Nassau, The Bahamas"; td[202]=25; tm[202]=5; tr[202]="N"; gd[202]=77; gm[202]=21; gr[202]="W";
nm[203]="New Delhi, India"; td[203]=28; tm[203]=40; tr[203]="N"; gd[203]=77; gm[203]=14; gr[203]="E";
nm[204]="New Orleans, Louisiana"; td[204]=29; tm[204]=57; tr[204]="N"; gd[204]=90; gm[204]=4; gr[204]="W"
nm[205]="New York, N.Y."; td[205]=40; tm[205]=45; ts[205]=6; tr[205]="N"; gd[205]=73; gm[205]=59; gs[205]=39; gr[205]="W"
nm[206]="Niamey, Niger"; td[206]=13; tm[206]=31; tr[206]="N"; gd[206]=2; gm[206]=7; gr[206]="E";
nm[207]="Nicosia (Lefkosia), Cyprus"; td[207]=35; tm[207]=10; tr[207]="N"; gd[207]=33; gm[207]=22; gr[207]="E";
nm[208]="Nouakchott, Mauritania"; td[208]=18; tm[208]=9; tr[208]="N"; gd[208]=15; gm[208]=58; gr[208]="W";
nm[209]="Noumea, New Caledonia Island"; td[209]=22; tm[209]=16; tr[209]="S"; gd[209]=166; gm[209]=27; gr[209]="E";
nm[210]="Nuku'alofa, Tonga"; td[210]=21; tm[210]=8; tr[210]="S"; gd[210]=175; gm[210]=12; gr[210]="W";
nm[211]="Odessa, Ukraine"; td[211]=46; tm[211]=27; tr[211]="N"; gd[211]=30; gm[211]=48; gr[211]="E"
nm[212]="Oklahoma City, Oklahoma"; td[212]=35; tm[212]=26; tr[212]="N"; gd[212]=97; gm[212]=28; gr[212]="W"
nm[213]="Omaha, Nebraska"; td[213]=41; tm[213]=15; ts[213]=42; tr[213]="N"; gd[213]=95; gm[213]=56; gs[213]=14; gr[213]="W"
nm[214]="Oranjestad, Aruba Island"; td[214]=12; tm[214]=30; tr[214]="N"; gd[214]=68; gm[214]=58; gr[214]="W";
nm[215]="Osaka, Japan"; td[215]=34; tm[215]=32; tr[215]="N"; gd[215]=135; gm[215]=30; gr[215]="E"
nm[216]="Oslo, Norway"; td[216]=59; tm[216]=55; tr[216]="N"; gd[216]=10; gm[216]=45; gr[216]="E";
nm[217]="Ottawa, Canada"; td[217]=45; tm[217]=26; tr[217]="N"; gd[217]=75; gm[217]=41; gr[217]="W";
nm[218]="Ouagadougou, Burkina Faso"; td[218]=12; tm[218]=22; tr[218]="N"; gd[218]=1; gm[218]=31; gr[218]="W";
nm[219]="P'yongyang, Korea (North)"; td[219]=39; tm[219]=2; tr[219]="N"; gd[219]=125; gm[219]=41; gr[219]="E";
nm[220]="Palikir, Micronesia"; td[220]=6; tm[220]=57; tr[220]="N"; gd[220]=158; gm[220]=12; gr[220]="E";
nm[221]="Panama (City), Panama"; td[221]=8; tm[221]=58; tr[221]="N"; gd[221]=79; gm[221]=32; gr[221]="W";
nm[222]="Papeete, French Polynesia"; td[222]=17; tm[222]=32; tr[222]="S"; gd[222]=149; gm[222]=34; gr[222]="W";
nm[223]="Paramaribo, Suriname"; td[223]=5; tm[223]=49; tr[223]="N"; gd[223]=55; gm[223]=9; gr[223]="W";
nm[224]="Paris, France"; td[224]=48; tm[224]=52; tr[224]="N"; gd[224]=2; gm[224]=20; gr[224]="E";
nm[225]="Perth, Australia"; td[225]=31; tm[225]=57; tr[225]="S"; gd[225]=115; gm[225]=52; gr[225]="E"
nm[226]="Philadelphia, Pennsylvania"; td[226]=39; tm[226]=56; ts[226]=58; tr[226]="N"; gd[226]=75; gm[226]=9; gs[226]=21; gr[226]="W"
nm[227]="Phnom Penh, Cambodia"; td[227]=11; tm[227]=33; tr[227]="N"; gd[227]=104; gm[227]=51; gr[227]="E";
nm[228]="Phoenix, Arizona"; td[228]=33; tm[228]=29; tr[228]="N"; gd[228]=112; gm[228]=4; gr[228]="W"
nm[229]="Port Louis, Mauritius"; td[229]=20; tm[229]=10; tr[229]="S"; gd[229]=57; gm[229]=30; gr[229]="E";
nm[230]="Port Moresby, Papua New Guinea"; td[230]=9; tm[230]=30; tr[230]="S"; gd[230]=147; gm[230]=7; gr[230]="E";
nm[231]="Port-Vila, Vanuatu"; td[231]=17; tm[231]=44; tr[231]="S"; gd[231]=168; gm[231]=19; gr[231]="E";
nm[232]="Port-au-Prince, Haiti"; td[232]=18; tm[232]=33; tr[232]="N"; gd[232]=72; gm[232]=20; gr[232]="W";
nm[233]="Port-of-Spain, Trinidad and Tobago"; td[233]=10; tm[233]=40; tr[233]="N"; gd[233]=61; gm[233]=31; gr[233]="W";
nm[234]="Portland, Oregon"; td[234]=45; tm[234]=31; ts[234]=6; tr[234]="N"; gd[234]=122; gm[234]=40; gs[234]=35; gr[234]="W"
nm[235]="Porto-Novo, Benin"; td[235]=6; tm[235]=29; tr[235]="N"; gd[235]=2; gm[235]=37; gr[235]="E";
nm[236]="Prague, Czech Republic"; td[236]=50; tm[236]=5; tr[236]="N"; gd[236]=14; gm[236]=26; gr[236]="E";
nm[237]="Praia, Cape Verde"; td[237]=14; tm[237]=55; tr[237]="N"; gd[237]=23; gm[237]=31; gr[237]="W";
nm[238]="Pretoria, South Africa"; td[238]=25; tm[238]=45; tr[238]="S"; gd[238]=28; gm[238]=10; gr[238]="E";
nm[239]="Pueblo, Colorado"; td[239]=38; tm[239]=16; ts[239]=17; tr[239]="N"; gd[239]=104; gm[239]=36; gs[239]=33; gr[239]="W"
nm[240]="Quebec City, Quebec"; td[240]=46; tm[240]=48; ts[240]=51; tr[240]="N"; gd[240]=71; gm[240]=12; gs[240]=30; gr[240]="W"
nm[241]="Quito, Ecuador"; tm[241]=13; tr[241]="S"; gd[241]=78; gm[241]=32; gr[241]="W";
nm[242]="Rabat, Morocco"; td[242]=34; tm[242]=2; tr[242]="N"; gd[242]=6; gm[242]=51; gr[242]="W";
nm[243]="Reno, Nevada"; td[243]=39; tm[243]=31; ts[243]=27; tr[243]="N"; gd[243]=119; gm[243]=48; gs[243]=40; gr[243]="W"
nm[244]="Reykjavik, Iceland"; td[244]=64; tm[244]=9; tr[244]="N"; gd[244]=21; gm[244]=51; gr[244]="W";
nm[245]="Riga, Latvia"; td[245]=56; tm[245]=40; tr[245]="N"; gd[245]=23; gm[245]=30; gr[245]="E";
nm[246]="Rio de Janeiro, Brazil"; td[246]=22; tm[246]=53; ts[246]=43; tr[246]="S"; gd[246]=43; gm[246]=13; gs[246]=22; gr[246]="W"
nm[247]="Riyadh, Saudi Arabia"; td[247]=24; tm[247]=39; tr[247]="N"; gd[247]=46; gm[247]=46; gr[247]="E";
nm[248]="Road Town, British Virgin Islands"; td[248]=18; tm[248]=27; tr[248]="N"; gd[248]=64; gm[248]=37; gr[248]="W";
nm[249]="Rome, Italy"; td[249]=41; tm[249]=48; tr[249]="N"; gd[249]=12; gm[249]=36; gr[249]="E";
nm[250]="Roseau, Dominica"; td[250]=15; tm[250]=18; tr[250]="N"; gd[250]=61; gm[250]=24; gr[250]="W";
nm[251]="Sacramento, California"; td[251]=38; tm[251]=35; tr[251]="N"; gd[251]=121; gm[251]=30; gr[251]="W"
nm[252]="Saint George's, Grenada"; td[252]=12; tm[252]=3; tr[252]="N"; gd[252]=61; gm[252]=45; gr[252]="W";
nm[253]="Saint John's, Antigua and Barbuda"; td[253]=17; tm[253]=7; tr[253]="N"; gd[253]=61; gm[253]=52; gr[253]="W";
nm[254]="Salt Lake City, Utah"; td[254]=40; tm[254]=45; ts[254]=23; tr[254]="N"; gd[254]=111; gm[254]=53; gs[254]=26; gr[254]="W"
nm[255]="San Antonio, Texas"; td[255]=29; tm[255]=23; tr[255]="N"; gd[255]=98; gm[255]=33; gr[255]="W"
nm[256]="San Diego, California"; td[256]=32; tm[256]=42; ts[256]=53; tr[256]="N"; gd[256]=117; gm[256]=9; gs[256]=21; gr[256]="W"
nm[257]="San Francisco, California"; td[257]=37; tm[257]=46; ts[257]=39; tr[257]="N"; gd[257]=122; gm[257]=24; gs[257]=40; gr[257]="W"
nm[258]="San Jos�, Costa Rica"; td[258]=9; tm[258]=56; tr[258]="N"; gd[258]=84; gm[258]=5; gr[258]="W";
nm[259]="San Juan, Puerto Rico"; td[259]=18; tm[259]=28; tr[259]="N"; gd[259]=66; gm[259]=7; gr[259]="W";
nm[260]="San Marino, San Marino"; td[260]=43; tm[260]=55; tr[260]="N"; gd[260]=12; gm[260]=28; gr[260]="E";
nm[261]="San Salvador, El Salvador"; td[261]=13; tm[261]=42; tr[261]="N"; gd[261]=89; gm[261]=13; gr[261]="W";
nm[262]="Sanaa, Yemen"; td[262]=15; tm[262]=24; tr[262]="N"; gd[262]=44; gm[262]=14; gr[262]="E";
nm[263]="Santa Fe, New Mexico"; td[263]=35; tm[263]=41; tr[263]="N"; gd[263]=105; gm[263]=57; gr[263]="W"
nm[264]="Santiago, Chile"; td[264]=33; tm[264]=27; tr[264]="S"; gd[264]=70; gm[264]=42; gr[264]="W";
nm[265]="Santo Domingo, Dominican Republic"; td[265]=18; tm[265]=29; tr[265]="N"; gd[265]=69; gm[265]=54; gr[265]="W";
nm[266]="Sao Paulo, Brazil"; td[266]=23; tm[266]=31; tr[266]="S"; gd[266]=46; gm[266]=31; gr[266]="W"
nm[267]="Sarajevo, Bosnia and Herzegowina"; td[267]=43; tm[267]=52; tr[267]="N"; gd[267]=18; gm[267]=25; gr[267]="E";
nm[268]="Seattle, Washington"; td[268]=47; tm[268]=36; ts[268]=32; tr[268]="N"; gd[268]=122; gm[268]=20; gs[268]=12; gr[268]="W"
nm[269]="Seoul, Korea (South)"; td[269]=37; tm[269]=30; tr[269]="N"; gd[269]=127; gr[269]="E";
nm[270]="Shanghai, China"; td[270]=31; tm[270]=10; tr[270]="N"; gd[270]=121; gm[270]=28; gr[270]="E"
nm[271]="Singapore, Singapore"; td[271]=1; tm[271]=18; tr[271]="N"; gd[271]=103; gm[271]=50; gr[271]="E";
nm[272]="Skopje, Macedonia"; td[272]=41; tm[272]=59; tr[272]="N"; gd[272]=21; gm[272]=26; gr[272]="E";
nm[273]="Sofia, Bulgaria"; td[273]=42; tm[273]=42; tr[273]="N"; gd[273]=23; gm[273]=20; gr[273]="E";
nm[274]="Springfield, Illinois"; td[274]=39; tm[274]=47; ts[274]=58; tr[274]="N"; gd[274]=89; gm[274]=38; gs[274]=51; gr[274]="W"
nm[275]="St. George's, Grenada/Grenadine Islands"; td[275]=12; tm[275]=3; tr[275]="N"; gd[275]=61; gm[275]=45; gr[275]="W";
nm[276]="St. Helier, Jersey Island (Channel Is.)"; td[276]=49; tm[276]=12; tr[276]="N"; gd[276]=2; gm[276]=37; gr[276]="W";
nm[277]="St. Louis, Missouri"; td[277]=38; tm[277]=37; ts[277]=45; tr[277]="N"; gd[277]=90; gm[277]=12; gs[277]=22; gr[277]="W"
nm[278]="St. Peter Port, Guernsey Island (Channel Is.)"; td[278]=49; tm[278]=27; tr[278]="N"; gd[278]=2; gm[278]=32; gr[278]="W";
nm[279]="St. Petersburg, Russia"; td[279]=59; tm[279]=56; tr[279]="N"; gd[279]=30; gm[279]=18; gr[279]="E"
nm[280]="Stockholm, Sweden"; td[280]=59; tm[280]=20; tr[280]="N"; gd[280]=18; gm[280]=3; gr[280]="E";
nm[281]="Suva, Fiji"; td[281]=18; tm[281]=8; tr[281]="S"; gd[281]=178; gm[281]=25; gr[281]="E";
nm[282]="Sydney, Australia"; td[282]=33; tm[282]=52; tr[282]="S"; gd[282]=151; gm[282]=12; gr[282]="E"
nm[283]="Syracuse, New York"; td[283]=43; tm[283]=3; ts[283]=4; tr[283]="N"; gd[283]=76; gm[283]=9; gs[283]=14; gr[283]="W"
nm[284]="S�o Tom�, Sao Tome and Principe"; tm[284]=20; tr[284]="N"; gd[284]=6; gm[284]=44; gr[284]="E";
nm[285]="T'bilisi, Georgia"; td[285]=41; tm[285]=43; tr[285]="N"; gd[285]=44; gm[285]=49; gr[285]="E";
nm[286]="Taipei, Taiwan"; td[286]=25; tm[286]=5; tr[286]="N"; gd[286]=121; gm[286]=32; gr[286]="E";
nm[287]="Tallinn, Estonia"; td[287]=59; tm[287]=25; tr[287]="N"; gd[287]=24; gm[287]=45; gr[287]="E";
nm[288]="Tarawa, Kiribati"; td[288]=1; tm[288]=25; tr[288]="N"; gd[288]=173; gr[288]="E";
nm[289]="Tashkent, Uzbekistan"; td[289]=41; tm[289]=16; tr[289]="N"; gd[289]=69; gm[289]=13; gr[289]="E";
nm[290]="Tegucigalpa, Honduras"; td[290]=14; tm[290]=6; tr[290]="N"; gd[290]=87; gm[290]=13; gr[290]="W";
nm[291]="Tehran, Iran"; td[291]=35; tm[291]=40; tr[291]="N"; gd[291]=51; gm[291]=26; gr[291]="E";
nm[292]="Thimphu, Bhutan"; td[292]=27; tm[292]=28; tr[292]="N"; gd[292]=89; gm[292]=39; gr[292]="E";
nm[293]="Tirana, Albania"; td[293]=41; tm[293]=20; tr[293]="N"; gd[293]=19; gm[293]=50; gr[293]="E";
nm[294]="Tokyo, Japan"; td[294]=35; tm[294]=40; tr[294]="N"; gd[294]=139; gm[294]=45; gr[294]="E";
nm[295]="Torshavn, Faroe Islands"; td[295]=62; tm[295]=1; tr[295]="N"; gd[295]=6; gm[295]=46; gr[295]="W";
nm[296]="Trinidad, Colorado"; td[296]=37; tm[296]=10; tr[296]="N"; gd[296]=104; gm[296]=30; gr[296]="W"
nm[297]="Tripoli, Libya"; td[297]=32; tm[297]=54; tr[297]="N"; gd[297]=13; gm[297]=11; gr[297]="E";
nm[298]="Tucson, Arizona"; td[298]=32; tm[298]=13; ts[298]=15; tr[298]="N"; gd[298]=110; gm[298]=58; gs[298]=8; gr[298]="W"
nm[299]="Tunis, Tunisia"; td[299]=36; tm[299]=48; tr[299]="N"; gd[299]=10; gm[299]=11; gr[299]="E";
nm[300]="Ulaanbaatar, Mongolia"; td[300]=47; tm[300]=55; tr[300]="N"; gd[300]=106; gm[300]=53; gr[300]="E";
nm[301]="Urbana, Illinois"; td[301]=40; tm[301]=6; ts[301]=42; tr[301]="N"; gd[301]=88; gm[301]=12; gs[301]=6; gr[301]="W"
nm[302]="Vaduz, Liechtenstein"; td[302]=47; tm[302]=9; tr[302]="N"; gd[302]=9; gm[302]=31; gr[302]="E";
nm[303]="Valletta, Malta"; td[303]=35; tm[303]=54; tr[303]="N"; gd[303]=14; gm[303]=31; gr[303]="E";
nm[304]="Vancouver, Canada"; td[304]=49; tm[304]=18; ts[304]=56; tr[304]="N"; gd[304]=123; gm[304]=4; gs[304]=44; gr[304]="W"
nm[305]="Venice, Italy"; td[305]=45; tm[305]=26; tr[305]="N"; gd[305]=12; gm[305]=20; gr[305]="E"
nm[306]="Veracruz, Mexico"; td[306]=19; tm[306]=10; tr[306]="N"; gd[306]=96; gm[306]=10; gr[306]="W"
nm[307]="Victoria, Seychelles"; td[307]=4; tm[307]=38; tr[307]="S"; gd[307]=55; gm[307]=27; gr[307]="E";
nm[308]="Vienna, Austria"; td[308]=48; tm[308]=15; tr[308]="N"; gd[308]=16; gm[308]=22; gr[308]="E";
nm[309]="Vientiane, Laos"; td[309]=17; tm[309]=58; tr[309]="N"; gd[309]=102; gm[309]=36; gr[309]="E";
nm[310]="Vilnius, Lithuania"; td[310]=54; tm[310]=41; tr[310]="N"; gd[310]=25; gm[310]=19; gr[310]="E";
nm[311]="Vladivostok, Russia"; td[311]=43; tm[311]=10; tr[311]="N"; gd[311]=132; gr[311]="E"
nm[312]="Warsaw, Poland"; td[312]=52; tm[312]=15; tr[312]="N"; gd[312]=21; gr[312]="E";
nm[313]="Washington D.C., United States"; td[313]=38; tm[313]=49; tr[313]="N"; gd[313]=76; gm[313]=59; gr[313]="W";
nm[314]="Wellington, New Zealand"; td[314]=41; tm[314]=17; tr[314]="S"; gd[314]=174; gm[314]=46; gr[314]="E";
nm[315]="Willemstad, Netherlands Antilles"; td[315]=12; tm[315]=12; tr[315]="N"; gd[315]=68; gm[315]=56; gr[315]="W";
nm[316]="Windhoek, Namibia"; td[316]=22; tm[316]=34; tr[316]="S"; gd[316]=17; gm[316]=6; gr[316]="E";
nm[317]="Winnipeg, Manitoba"; td[317]=49; tm[317]=54; tr[317]="N"; gd[317]=97; gm[317]=7; gr[317]="W"
nm[318]="Yakutzk, Russia"; td[318]=62; tm[318]=10; tr[318]="N"; gd[318]=129; gm[318]=50; gr[318]="E"
nm[319]="Yamoussoukro, Cote d'Ivoire"; td[319]=6; tm[319]=49; tr[319]="N"; gd[319]=5; gm[319]=17; gr[319]="W";
nm[320]="Yangon (Rangoon), Burma (Myanmar)"; td[320]=16; tm[320]=47; tr[320]="N"; gd[320]=96; gm[320]=10; gr[320]="E";
nm[321]="Yaound�, Cameroon"; td[321]=3; tm[321]=52; tr[321]="N"; gd[321]=11; gm[321]=31; gr[321]="E";
nm[322]="Yaren District, Nauru"; tm[322]=32; tr[322]="S"; gd[322]=166; gm[322]=55; gr[322]="E";
nm[323]="Yerevan, Armenia"; td[323]=40; tm[323]=11; tr[323]="N"; gd[323]=44; gm[323]=30; gr[323]="E";
nm[324]="Zagreb, Croatia (Hrvatska)"; td[324]=45; tm[324]=48; tr[324]="N"; gd[324]=15; gm[324]=58; gr[324]="E";
nm[325]="Zanzibar, Tanzania"; td[325]=6; tm[325]=10; tr[325]="S"; gd[325]=39; gm[325]=20; gr[325]="E"
nm[326]="Zurich, Switzerland"; td[326]=47; tm[326]=21; tr[326]="N"; gd[326]=8; gm[326]=31; gr[326]="E"

var nq=0
var nj=0
var latitude1 = '';
var latitude2 = '';
var longitude1 = '';
var longitude2 = '';


// function fillin1(form) {
// //get selected option number
// nq = document.getElementById("city1").selectedIndex+1
//  latitude1.value= td[nq]+"� :"+tm[nq]+" m:"+ts[nq]+" s "+tr[nq]
// longitude1.value= gd[nq]+"� :"+gm[nq]+" m:"+gs[nq]+" s "+gr[nq]
// if (nq>0 && nj>0) { caldist(form) }
// }
// function fillin2(form) {
// //get selected option number
// nj = document.getElementById("city2").selectedIndex+1
//  latitude2.value= td[nj]+"� :"+tm[nj]+" m:"+ts[nj]+" s "+tr[nj]
// longitude2.value= gd[nj]+"� :"+gm[nj]+" m:"+gs[nj]+" s "+gr[nj]
// if (nq>0 && nj>0) {caldist(form)}
// }

function positiveint(inputVal) {
inputStr = "" + inputVal
for (var i = 0; i < inputStr.length; i++) {
var oneChar = inputStr.charAt(i)
if (oneChar < "0" || oneChar > "9") {
return false
}
}
return true
}

function numberok(inputVal) {
oneDecimal = false
inputStr = "" + inputVal
if (inputStr=="") {
return false
}
for (var i = 0; i < inputStr.length; i++) {
var oneChar = inputStr.charAt(i)
if (i == "0" && oneChar == "-") {
//if (negno == 1) {
//alert ("neg")
return false
//} else {
//continue
//}
}
if (oneChar == "." && !oneDecimal) {
oneDecimal = true
continue
}
if (oneChar < "0" || oneChar > "9") {
return false
}
}
return true
}

//pico[0] = baseref+"c_i16.gif' ALIGN=LEFT><BR>"

//to go somewhere
function gonow(form) {
window.location = "comb.htm"
}

function caldist() {

if (nq<0 || nj<0) { return false }

nq = document.getElementById("city1").selectedIndex+1
nj = document.getElementById("city2").selectedIndex+1

var er = 6366.707
//ave. radius = 6371.315 (someone said more accurate is 6366.707)
//equatorial radius = 6378.388
//nautical mile = 1.15078
var radlat1 = Math.PI * (td[nq] + tm[nq]/60 + ts[nq]/3600)/180
var radlat2 = Math.PI * (td[nj] + tm[nj]/60 + ts[nj]/3600)/180

//now long.
var radlong1 = Math.PI * (gd[nq] + gm[nq]/60 + gs[nq]/3600)/180
var radlong2 = Math.PI * (gd[nj] + gm[nj]/60 + gs[nj]/3600)/180
//spherical coordinates x=r*cos(ag)sin(at), y=r*sin(ag)*sin(at), z=r*cos(at)
//zero ag is up so reverse lat
if (tr[nq]=="N") {radlat1=Math.PI/2-radlat1}
if (tr[nq]=="S") {radlat1=Math.PI/2+radlat1}
if (gr[nq]=="W") {radlong1=Math.PI*2-radlong1}

if (tr[nj]=="N") {radlat2=Math.PI/2-radlat2}
if (tr[nj]=="S") {radlat2=Math.PI/2+radlat2}
if (gr[nj]=="W") {radlong2=Math.PI*2-radlong2}

var x1 = er * Math.cos(radlong1)*Math.sin(radlat1)
var y1 = er * Math.sin(radlong1)*Math.sin(radlat1)
var z1 = er * Math.cos(radlat1)

var x2 = er * Math.cos(radlong2)*Math.sin(radlat2)
var y2 = er * Math.sin(radlong2)*Math.sin(radlat2)
var z2 = er * Math.cos(radlat2)

var d = Math.sqrt((x1-x2)*(x1-x2)+(y1-y2)*(y1-y2)+(z1-z2)*(z1-z2))

//side, side, side, law of cosines and arccos
var theta = Math.acos((er*er+er*er-d*d)/(2*er*er))
var distance = Math.round(theta*er)
document.getElementById("distance-oneway").value = distance
document.getElementById("distance-return").value = distance*2
//form.elements[30].value = distance
//form.elements[31].value = distance/1.609344
//form.elements[32].value = distance/1.852

return distance
}


function calcmiles() {
  var distance = Math.round(document.getElementById("distance-km").value / 1.6093)
  document.getElementById("distance-miles").value = distance
}

function calckm() {
  var distance = Math.round(document.getElementById("distance-miles").value * 1.6093)
  document.getElementById("distance-km").value = distance
}



var ns = 0
function calcgsd(form) {
ns = form.latd1.value

var dlat1=ns
ns = form.longd1.value
var dlong2=ns

//rest of not error check

var dm1 = parseFloat("0"+form.latm1.value)
var ds1 = parseFloat("0"+form.lats1.value)
if (dm1>=60) {alert("Enter minutes <60"); document.forms[0].elements[1].focus(); return}
if (ds1>=60) {alert("Enter seconds <60"); document.forms[0].elements[2].focus(); return}
var er = 6366.707
//used to be 6371.315 but changed to more accurate estimate of 6366.707
var radlat1 = Math.PI * (dlat1 + dm1/60 + ds1/3600)/180
var dm2 = parseFloat("0"+form.latm2.value)
var ds2 = parseFloat("0"+form.lats2.value)
if (dm2>=60) {alert("Enter minutes <60"); document.forms[0].elements[11].focus(); return}
if (ds2>=60) {alert("Enter seconds <60"); document.forms[0].elements[12].focus(); return}
var radlat2 = Math.PI * (dlat2 + dm2/60 + ds2/3600)/180

//now long.
var dm3 = parseFloat("0"+form.longm1.value)
var ds3 = parseFloat("0"+form.longs1.value)
if (dm3>=60) {alert("Enter minutes <60"); document.forms[0].elements[6].focus(); return}
if (ds3>=60) {alert("Enter seconds <60"); document.forms[0].elements[7].focus(); return}
var radlong1 = Math.PI * (dlong1 + dm3/60 + ds3/3600)/180

var dm4 = parseFloat("0"+form.longm2.value)
var ds4 = parseFloat("0"+form.longs2.value)
if (dm4>=60) {alert("Enter minutes <60"); document.forms[0].elements[16].focus(); return}
if (ds4>=60) {alert("Enter seconds <60"); document.forms[0].elements[17].focus(); return}
var radlong2 = Math.PI * (dlong2 + dm4/60 + ds4/3600)/180

//spherical coordinates x=r*cos(ag)sin(at), y=r*sin(ag)*cos(at), z=r*cos(at)
//zero ag is up so reverse lat
if (nst1==1) {radlat1=Math.PI/2-radlat1}
if (nst1==2) {radlat1=Math.PI/2+radlat1}
if (nsg2==1) {radlong1=Math.PI*2-radlong1}

if (nst3==1) {radlat2=Math.PI/2-radlat2}
if (nst3==2) {radlat2=Math.PI/2+radlat2}
if (nsg4==1) {radlong2=Math.PI*2-radlong2}

var x1 = er * Math.cos(radlong1)*Math.sin(radlat1)
var y1 = er * Math.sin(radlong1)*Math.sin(radlat1)
var z1 = er * Math.cos(radlat1)

var x2 = er * Math.cos(radlong2)*Math.sin(radlat2)
var y2 = er * Math.sin(radlong2)*Math.sin(radlat2)
var z2 = er * Math.cos(radlat2)

var d = Math.sqrt((x1-x2)*(x1-x2)+(y1-y2)*(y1-y2)+(z1-z2)*(z1-z2))

//side, side, side, law of cosines and arccos
var theta = Math.acos((er*er+er*er-d*d)/(2*er*er))
var distance = theta*er
// form.elements[21].value = distance
// form.elements[22].value = distance/1.609344
// form.elements[23].value = distance/1.852
}
