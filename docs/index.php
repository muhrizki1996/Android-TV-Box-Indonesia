<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<style type="text/css">
	html { 
  /* background: url(images/catalina.jpg) no-repeat center center fixed; */
  background: url(https://www.apple.com/v/macos/catalina/a/images/overview/hero/desktop__on4gxlz1xv6u_xlarge.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

h1.main-header {
	text-align: center;
	color: white;
	font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
	font-size: 50pt;
	padding-top: 10%;
	padding-left: 1em;
	padding-right: 1em;
	line-height: 1.125;
	margin:0
}

p.main-text {
	text-align: center;
	color: white;
	font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
	font-size: 18pt;
	padding-left: 1em;
	padding-right: 1em;
	line-height: 1.38105;
	margin: 5;
}

p.version-text {
	text-align: center;
	color: white;
	font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
	font-size: 13pt;
	padding-left: 1em;
	padding-right: 1em;
	line-height: 1.38105;
	margin: 20;
}

div.dl-buttons {
	text-align: center;
	padding: 3em;
}


.animate {
	transition: all 0.1s;
	-webkit-transition: all 0.1s;
}
a.dl-main {
	position: relative;
	padding: 13px 40px;
    margin: 0px 10px 10px 0px;
	border-radius: 3px;
	font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
	font-size: 18px;
 	color: #FFF;
 	background-color: #3498db;
 	text-decoration: none; 
 }


a.dl-main:active {
 	transform: translate(0px,5px);
  	-webkit-transform: translate(0px,5px);
}
a.dl-main:hover {
  	background-color: #52a7e0;
}




div.collapsible-info {
	text-align: center;
	padding-bottom: 1em;
	padding-top: 1em;
}
.collapsible {
	background-color: #eee;
	color: #444;
	cursor: pointer;
	padding: 18px;
	width: 100%;
	border: none;
	text-align: left;
	outline: none;
	font-size: 15px;
	width: 50%;
	border-radius: 3px;
}

.active, .collapsible:hover {
  	background-color: #ccc;
  
}

.active {
	border-bottom-left-radius: 0px;
  	border-bottom-right-radius: 0px;
}

.content {

	max-height: 0;
	overflow: hidden;
	transition: max-height 0.2s ease-out;
	background-color: #f1f1f1;
	width: 50%;
	margin: 0 auto;
	text-align: left;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
}

p.text {
	padding: 0 18px;

}

form.donate {
	text-align: center;
}
li {
	padding: 5px 0px;
}
</style>
<head>

<meta charset="UTF-8">
<title>macOS Catalina Patcher</title>
</head>
<body>
<h1 class="main-header">macOS Catalina Patcher</h1>
<p class="main-text">The easy way to run macOS Catalina on your Unsupported Mac</p>
<div class="dl-buttons">
<a href="https://ipfs.io/ipfs/QmZaFNFeZaHZFmMccHhNr5ptWrwW8XxWDMkyChefbUkQ5z/macOS%20Catalina%20Patcher.dmg" class="dl-main shadow animate">Download Latest Version</a>
<a target="_blank" href="changelog.html" class="dl-main shadow animate">View Changelog</a>
</div>
<br>
<div class="collapsible-info">
<button class="collapsible">Current Version Info</button>
<div class="content">
<p class="text">
<ul>
<li>Current Version: 1.1.7</li>
<li>SHA1: c6243d53d18ac8607aeddcd48d948e346470ee55</li>
<li><a href="https://drive.google.com/open?id=1qMKXi3HADA3cERMdTAFvlsHqJ3x3-mo-">Alternate Download</a></li>
</ul>
</p>
</div>
</div>
<div class="collapsible-info">
<button class="collapsible">Important Info</button>
<div class="content">
<p class="text">
<ul>
<li><span style="font-weight: bold">APFS BootROM Support:</span> If you have a machine that supports High Sierra natively, you MUST ensure you have the latest version of the system's BootROM installed. If you have NOT previously installed High Sierra, you can download and install <a href="https://ipfs.io/ipfs/QmZ5KmpG4SeHF8gWrHmoLcG9a3BNAcWWQoERg4q2J1kuQL/OfficialAPFSFWUpdate.zip">this</a> package to install the latest BootROM version. When installing, ensure your system is plugged in to power, or the update will not be installed.</li>
</ul>
</p>
</div>
</div>
<div class="collapsible-info">
<button class="collapsible">Tutorial Video</button>
<div class="content">
<p class="text">
<center>
<iframe width="560" height="315" src="https://www.youtube.com/embed/wxFzZWqoCng" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="middle"></iframe>
</center>
</p>
</div>
</div>
<div class="collapsible-info">
<button class="collapsible">System Compatibility</button>
<div class="content">
<p class="text">
<ul>
<li>Early-2008 or newer Mac Pro, iMac, or MacBook Pro:</li>
<ul>
<li>MacPro3,1</li>
<li>MacPro4,1</li>
<li>MacPro5,1</li>
<li>iMac8,1</li>
<li>iMac9,1</li>
<li>iMac10,x</li>
<li>iMac11,x (systems with AMD Radeon HD 5xxx and 6xxx series GPUs will be almost unusable when running Catalina.)</li>
<li>iMac12,x (systems with AMD Radeon HD 5xxx and 6xxx series GPUs will be almost unusable when running Catalina.)</li>
<li>MacBookPro4,1</li>
<li>MacBookPro5,x</li>
<li>MacBookPro6,x</li>
<li>MacBookPro7,x</li>
<li>MacBookPro8,x</li>
</ul>
<br>
<li>Late-2008 or newer MacBook Air or Aluminum Unibody MacBook:</li>
<ul>
<li>MacBookAir2,1</li>
<li>MacBookAir3,x</li>
<li>MacBookAir4,x</li>
<li>MacBook5,1</li>
</ul>
<br>
<li>Early-2009 or newer Mac Mini or white MacBook:</li>
<ul>
<li>Macmini3,1</li>
<li>Macmini4,1</li>
<li>Macmini5,x (systems with AMD Radeon HD 6xxx series GPUs will be almost unusable when running Catalina.)</li>
<li>MacBook5,2</li>
<li>MacBook6,1</li>
<li>MacBook7,1</li>
</ul>
<br>
<li>Early-2008 or newer Xserve:</li>
<ul>
<li>Xserve2,1</li>
<li>Xserve3,1</li>
</ul>
</ul>
<br>
<big><span style="font-weight: bold;">Machines that ARE NOT supported:</span></big>
<ul>
<li>2006-2007 Mac Pros, iMacs, MacBook Pros, and Mac Minis:</li>
<ul>
<li>MacPro1,1</li>
<li>MacPro2,1</li>
<li>iMac4,1</li>
<li>iMac5,x</li>
<li>iMac6,1</li>
<li>iMac7,1</li>
<li>MacBookPro1,1</li>
<li>MacBookPro2,1</li>
<li>MacBookPro3,1</li>
<li>Macmini1,1</li>
<li>Macmini2,1</li>
</ul>
<br>
<span style="font-weight:bold">&mdash; The 2007 iMac 7,1 is compatible if the CPU is upgraded to a Penryn-based Core 2 Duo, such as a T9300.</span>
<br>
<br>
<li>2006-2008 MacBooks:</li>
<ul>
<li>MacBook1,1</li>
<li>MacBook2,1</li>
<li>MacBook3,1</li>
<li>MacBook4,1</li>
</ul>
<br>
<li>2008 MacBook Air (MacBookAir 1,1)</li>
</ul>
</p>
</div>
</div>
<div class="collapsible-info">
<button class="collapsible">Known Issues</button>
<div class="content">
<p class="text">
<ul>
<li><span style="font-weight: bold">AMD/ATI Radeon HD 5xxx and 6xxx series graphics acceleration:</span> Currently, it is not possible to achieve full graphics acceleration under Catalina on any machines that use a Radeon HD 5xxx or 6xxx series GPU. If you have a machine with one of these GPUs installed, I'd advise upgrading it if possible (can be done in 2010/2011 iMacs, iMac11,x-12,x), disabling the dedicated GPU if using a 2011 15" or 17" MacBook Pro (MacBookPro8,2/8,3, instructions to do so can be found <a href="/gpudisable">here</a>), or not installing Catalina. Running Catalina without full graphics acceleration will result in extremely poor system performance.</li>
<li><span style="font-weight: bold">2008 Mac Pro 3,1 AMD GPU Support:</span> Currently, newer AMD video cards will NOT work on the Mac Pro 3,1 under Catalina, due to lack of SSE4.2 CPU support. This means that NO newer AMD video card (Radeon HD 7xxx series and later) can be used on the Mac Pro 3,1 when running Catalina.</li>
</ul>
</p>
</div>
</div>
<script>
	var coll = document.getElementsByClassName("collapsible");

	for (var i = 0; i < coll.length; i++) {
  		coll[i].addEventListener("click", function() {
    		this.classList.toggle("active");
    		var content = this.nextElementSibling;
    		if (content.style.maxHeight){
      			content.style.maxHeight = null;
    		} else {
      			content.style.maxHeight = content.scrollHeight + "px";
    	} 
  });
}
</script>
</html>