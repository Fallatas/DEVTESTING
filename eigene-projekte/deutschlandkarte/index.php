<html>
<head>
    <title>Deutschlandkarte</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="style.js"></script>
	<link type="text/css" href="style.css" rel="stylesheet"/>
</head>

<body>
<img style="z-index:0; position:absolute; top: 0px; left: 0px;" src="deutschlandkarte.png" width="480" height="640" border="0" />
<img style="z-index:1; position:absolute; top: 0px; left: 0px;" id="bundesland" src="bundesland.png" usemap="#map" />

<map name="map">
	<area shape="poly" coords="168,107,179,108,187,117,192,124,197,132,205,136,209,145,218,146,219,143,226,148,234,145,243,151,252,151,259,156,265,153,273,165,280,170,286,177,292,175,298,179,294,182,293,186,286,192,275,190,268,189,264,194,256,195,255,200,264,215,267,223,265,225,265,229,271,235,267,238,271,247,269,250,269,254,266,261,250,262,246,265,248,274,246,282,252,293,250,298,249,300,243,302,236,299,232,306,227,309,222,312,217,313,214,316,209,314,202,317,204,323,194,320,193,318,198,313,197,305,197,301,200,300,197,296,186,295,185,285,188,283,188,277,182,277,183,273,180,269,175,267,173,254,167,253,168,245,165,243,166,236,168,237,173,230,171,228,173,225,168,223,163,231,159,233,151,233,151,223,147,222,139,224,136,228,131,228,130,232,138,236,138,247,141,251,134,256,129,255,122,260,116,260,113,262,109,258,115,255,115,250,111,250,111,240,113,240,110,233,103,234,100,231,99,227,95,226,92,229,93,234,89,236,79,242,78,244,71,243,40,222,46,127,118,107,119,106" href="niedersachsen.html" onMouseOver="changeImage('bundesland','niedersachsen.png');" onMouseOut="changeImage('bundesland','bundesland.png');" />
	<area shape="poly" coords="262,102,256,108,256,116,259,121,265,124,263,133,259,133,257,139,252,143,249,143,248,151,244,151,234,145,232,143,228,138,226,138,225,136,224,133,228,130,227,126,225,123,226,119,222,120,220,121,219,124,213,127,208,131,204,129,203,133,196,131,192,128,191,121,187,118,185,114,182,108,176,107,168,107,151,98,117,2,222,27,288,54" href="schleswig-holstein.html" onMouseOver="changeImage('bundesland','schleswig-holstein.png');" onMouseOver="changeImage('bundesland','bundesland.png');"/>
	<area shape="poly" coords="391,34,333,58,317,80,297,83,284,97,269,94,263,100,262,103,257,106,256,108,256,118,261,122,265,123,263,134,259,133,258,138,252,142,248,145,248,150,259,156,263,153,268,154,271,161,281,172,292,170,295,172,297,163,303,161,309,163,319,155,322,150,337,155,342,160,357,162,358,166,368,166,370,166,378,160,381,162,385,158,389,159,390,161,397,152,404,141,410,140,410,135,414,139,416,145,423,145,430,145,434,145,433,150,425,159,434,160,437,155,442,155,432,97,397,30" href="mecklenburg-vorpommern.html" onMouseOver="changeImage('bundesland','mecklenburg-vorpommern.png');" onMouseOut="changeImage('bundesland','bundesland.png');" />
	<area shape="poly" coords="441,155,436,156,433,160,427,159,433,150,433,144,427,144,424,146,419,145,415,145,415,140,410,135,410,140,403,143,390,160,385,158,381,162,377,160,370,168,361,165,357,166,356,162,343,159,341,160,337,153,331,154,329,151,321,151,319,157,305,163,299,161,296,164,295,170,284,173,281,173,284,177,295,177,310,187,313,191,324,191,332,195,330,203,330,213,327,214,328,222,335,225,332,244,332,248,329,250,338,263,344,264,348,267,354,266,377,276,378,288,373,294,379,301,379,308,380,314,383,316,387,312,391,311,398,316,410,317,417,315,422,315,424,308,429,302,438,305,446,301,450,300,456,303,460,298,459,291,452,280,462,256,450,230,455,221,429,190,442,172" href="brandenbrug.html" onMouseOver="changeImage('bundesland','brandenburg.png');" onMouseOut="changeImage('bundesland','bundesland.png');"  />
	<area shape="poly" coords="408,227,407,232,403,236,398,232,395,233,392,231,390,234,385,232,380,231,376,232,374,230,377,223,375,221,377,215,380,216,382,212,385,209,385,212,389,212,395,209,396,212,396,216,403,221,401,226" href="berlin.html" onMouseOver="changeImage('bundesland','berlin.png');" onMouseOut="changeImage('bundesland','bundesland.png');" />
	<area shape="poly" coords="297,179,296,182,292,182,293,187,288,190,282,192,275,190,268,189,265,194,256,195,255,200,263,215,266,213,265,218,268,223,264,225,264,228,271,234,271,236,267,237,271,247,268,249,270,251,270,255,265,257,266,260,261,261,250,262,248,265,245,265,248,269,250,275,245,280,251,290,251,295,260,296,264,298,263,302,267,312,272,313,277,314,285,314,288,318,291,323,289,327,286,329,292,332,292,335,291,339,298,338,303,338,304,343,313,343,317,345,319,349,327,350,330,352,333,346,331,339,328,333,329,327,326,322,328,318,328,313,326,310,329,306,330,301,334,301,340,299,351,296,355,293,358,294,362,292,367,295,369,292,373,295,377,290,378,280,376,275,372,276,369,272,366,270,362,270,358,267,353,264,350,266,347,266,343,263,338,266,340,263,333,256,330,251,333,246,331,243,334,237,334,228,335,224,332,223,328,223,327,220,328,213,331,212,331,208,329,205,330,200,332,197,330,194,329,192,326,194,323,191,317,192,311,189,310,186,306,183,303,183,300,181,299,178,298,179" href="sachsen-anhalt.html" onMouseOver="changeImage('bundesland','sachsen-anhalt.png');" onMouseOut="changeImage('bundesland','bundesland.png');" />
	<area shape="poly" coords="322,401,318,399,317,396,314,393,314,391,317,388,315,386,312,386,312,383,314,382,317,378,319,377,321,383,324,381,326,381,328,376,332,376,335,373,332,371,332,368,330,366,332,364,332,361,336,361,338,359,341,359,344,355,351,354,352,353,351,350,350,347,347,348,345,344,344,341,338,341,336,339,333,339,330,337,329,332,329,327,327,323,327,320,328,319,328,312,326,310,329,307,329,302,334,301,339,299,345,297,353,295,356,293,362,292,366,295,368,292,378,297,378,300,380,304,379,312,382,315,387,312,393,312,399,317,410,317,420,316,423,313,426,306,429,303,438,305,441,302,449,301,454,303,474,310,474,326,464,356,461,362,449,359,448,346,438,345,441,356,392,379,366,396,349,396,339,405,334,415" href="sachseln.html" onMouseOver="changeImage('bundesland','sachsen.png');" onMouseOut="changeImage('bundesland','bundesland.png');"  />
	<area shape="poly" coords="213,316,214,323,216,325,219,325,221,329,226,331,229,332,227,338,223,339,227,345,225,348,222,347,218,346,219,351,215,353,219,356,218,360,214,362,213,368,210,375,214,377,216,373,220,373,220,377,219,383,222,383,227,383,230,386,235,391,237,395,247,400,247,408,253,411,254,407,259,407,261,405,255,403,253,399,261,396,269,398,270,399,274,398,275,400,276,404,281,405,282,397,280,389,287,386,290,386,289,392,295,397,299,395,309,394,314,395,314,391,316,388,315,386,313,385,314,383,317,378,320,377,321,382,326,381,328,376,333,377,335,373,332,371,331,367,332,361,336,361,341,358,345,354,351,355,352,354,350,348,347,347,344,345,343,341,339,340,335,339,332,339,333,343,330,351,324,349,319,349,316,345,311,342,306,342,301,338,296,338,292,339,292,332,287,330,287,327,289,326,291,322,289,319,288,316,280,314,275,314,272,312,268,312,266,310,266,307,264,305,264,302,262,299,263,297,254,294,251,295,249,297,250,300,244,302,240,299,236,300,233,306,227,308,224,312,217,312,218,313" href="thueringen.html" onMouseOver="changeImage('bundesland','thueringen.png');" onMouseOut="changeImage('bundesland','bundesland.png');"  />
	<area shape="poly" coords="196,615,198,611,203,612,208,607,211,607,214,608,218,605,220,608,223,606,222,600,220,597,223,596,221,592,222,588,221,584,223,582,224,575,221,568,220,566,220,561,218,557,215,554,219,548,222,546,224,547,231,542,232,541,233,536,230,531,230,529,236,531,241,530,241,528,238,525,239,520,239,511,235,503,230,501,229,495,228,492,223,489,224,483,223,476,224,473,224,471,222,469,223,464,220,462,219,465,217,467,213,467,212,462,212,459,209,462,207,462,210,456,209,454,208,450,205,448,204,451,201,449,198,450,198,443,194,445,185,445,182,445,182,448,187,450,187,454,180,455,178,460,174,460,170,460,170,456,171,451,173,448,172,443,170,442,170,439,167,438,167,429,167,423,164,421,168,417,171,417,175,418,176,415,185,416,187,421,192,419,192,414,191,408,196,409,199,408,199,406,203,403,204,395,205,393,211,395,217,391,220,386,219,384,228,383,231,387,237,393,237,396,244,399,247,401,248,407,248,409,253,410,255,407,260,407,260,405,255,403,254,400,254,399,257,396,263,396,269,399,275,399,276,404,280,404,282,400,282,394,280,389,283,387,288,385,290,390,291,393,295,396,303,395,309,394,314,395,318,397,327,405,349,435,342,447,354,465,355,470,361,477,371,478,381,495,390,498,393,507,402,506,405,512,415,523,409,546,399,541,394,541,389,559,371,565,359,574,369,588,369,596,366,602,375,606,372,624,361,619,356,613,358,609,350,608,344,613,339,608,334,607,330,607,329,613,312,613,299,617,291,623,281,628,267,629,257,620,242,618,236,634,228,638,224,635,226,631,219,632,216,628,220,626,212,619" href="bayern.html" onMouseOver="changeImage('bundesland','bayern.png');" onMouseOut="changeImage('bundesland','bundesland.png');"  />
	<area shape="poly" coords="196,614,200,612,203,612,207,608,210,606,213,608,215,608,218,606,221,608,223,604,223,600,220,598,223,596,221,592,222,587,220,585,224,580,224,574,220,567,220,560,215,553,221,545,224,547,231,542,233,540,233,535,230,531,230,528,237,531,239,531,241,528,240,526,238,524,239,521,240,518,239,508,230,502,228,496,229,493,223,490,224,482,223,475,225,472,223,469,223,464,220,462,217,467,213,467,212,462,212,459,209,462,207,461,210,457,209,454,208,450,205,448,204,451,201,449,199,450,197,449,198,444,194,444,194,446,189,444,183,446,182,448,186,450,186,454,180,455,179,460,171,460,171,465,167,465,164,465,163,470,161,472,159,474,156,474,156,472,157,470,159,467,157,465,152,464,150,462,149,456,146,457,145,462,144,465,139,460,136,459,138,470,140,471,139,477,138,480,138,483,135,487,133,493,133,498,130,501,129,506,122,512,118,521,106,533,102,537,100,556,94,569,92,581,94,584,89,609,96,614,98,619,108,615,118,617,125,613,136,615,145,615,150,609,156,607,161,610,168,606,184,612,190,616,195,616" href="baden-wuerttenberg.html" onMouseOver="changeImage('bundesland','baden-wuerttemberg.png');" onMouseOut="changeImage('bundesland','bundesland.png');" />
	<area shape="poly" coords="82,492,78,489,79,486,83,484,83,481,83,476,81,475,79,475,78,473,76,471,78,469,78,465,77,459,74,460,68,458,65,455,57,458,45,463,43,465,39,464,33,462,30,465,32,469,38,471,50,493,57,493,57,490,65,491,65,497,81,496,82,493" href="saarland.html" onMouseOver="changeImage('bundesland','saarland.png');" onMouseOut="changeImage('bundesland','bundesland.png');" />
	<area shape="poly" coords="33,396,37,400,42,396,45,399,48,398,49,400,53,398,52,394,51,392,51,389,53,387,56,391,59,389,58,385,62,382,68,379,76,376,81,376,83,369,89,369,94,367,98,365,98,361,102,359,102,353,105,351,108,355,109,358,114,360,113,365,118,370,121,372,122,384,117,383,113,387,115,391,113,394,117,397,121,404,120,406,116,405,117,410,113,409,109,413,111,416,111,419,108,417,106,421,103,421,109,429,114,429,118,426,125,424,131,428,133,437,135,444,139,447,134,451,134,455,136,460,139,472,140,471,138,482,139,483,135,488,133,494,132,501,130,502,128,507,120,507,110,502,95,502,93,499,89,498,88,493,84,492,81,492,79,490,78,487,81,485,83,482,83,476,79,475,76,471,78,469,78,464,77,459,74,461,68,458,65,455,41,465,33,462,32,458,39,446,38,442,31,441,18,428,21,408,34,396" href="rheinland-pfalz.html" onMouseOver="changeImage('bundesland','rheinland-pfalz.png');" onMouseOut="changeImage('bundesland','bundesland.png');" />
	<area shape="poly" coords="186,295,197,296,199,299,197,302,197,306,198,309,197,315,194,315,194,319,204,323,204,321,202,318,209,314,213,316,215,323,218,324,221,329,228,332,227,337,224,337,224,343,227,345,226,347,224,347,219,346,219,351,215,353,219,356,218,360,213,363,213,367,211,375,214,376,217,373,220,374,220,377,218,390,211,396,205,393,203,398,203,403,199,406,198,409,192,408,191,419,189,421,186,420,184,416,175,415,175,418,174,419,172,417,167,417,164,421,167,425,167,434,168,439,171,444,172,446,172,449,170,452,170,456,170,458,171,462,171,465,169,464,167,467,164,465,163,466,163,470,159,474,156,474,159,467,152,465,149,457,145,457,145,464,143,465,137,458,136,460,133,454,135,451,139,446,135,442,134,438,132,434,131,427,124,424,113,429,109,429,103,422,108,418,112,418,109,413,114,408,117,410,117,405,120,406,121,403,117,396,113,395,114,391,113,387,117,382,121,384,122,382,121,373,123,368,121,364,129,356,131,359,138,352,142,346,142,339,150,339,153,332,152,325,145,326,143,324,145,321,150,316,156,316,161,315,163,314,161,308,167,305,170,307,171,311,173,311,180,306,183,301,183,296" href="hessen.html" onMouseOver="changeImage('bundesland','hessen.png');" onMouseOut="changeImage('bundesland','bundesland.png');" />
	<area shape="poly" coords="70,243,79,243,93,234,94,231,93,228,96,226,99,227,101,232,105,234,110,234,114,239,112,241,110,250,115,252,115,256,109,258,113,262,117,259,124,259,129,254,135,256,139,252,139,250,137,247,138,245,138,236,130,231,130,227,133,228,137,227,140,223,144,223,149,221,150,222,151,231,153,233,161,232,162,232,165,229,168,225,170,223,172,226,171,230,170,234,169,236,165,238,165,243,168,245,166,252,173,255,175,259,175,265,175,267,180,268,182,273,184,276,188,276,188,284,186,285,185,292,184,296,184,300,182,303,180,306,175,309,172,311,169,307,166,306,161,307,162,314,159,317,156,316,149,317,144,323,145,327,151,325,153,330,150,339,142,339,141,347,138,352,135,356,132,359,129,357,124,361,121,364,123,369,122,372,119,371,115,368,113,365,113,360,109,359,107,356,107,352,105,351,102,353,102,358,98,361,98,364,92,368,85,370,83,370,82,375,75,377,74,375,72,379,69,379,66,380,60,384,58,386,58,391,56,391,53,389,50,390,53,394,53,399,49,400,45,399,42,397,37,399,34,397,27,388,20,384,24,379,18,371,13,369,13,359,17,357,10,349,3,348,8,340,13,340,17,335,15,327,22,317,22,306,20,303,16,299,16,295,7,280,21,272,30,276,43,272,53,268,44,260,52,254" href="nordrhein-festfalen.html" onMouseOver="changeImage('bundesland','nordrhein-westfalen.png');" onMouseOut="changeImage('bundesland','bundesland.png');" />
</map>

</body>

</html>