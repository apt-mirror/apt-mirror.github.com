<html>
<head>
  <title>apt-mirror - "apt sources" mirroring tool</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <?php $version = "0.4.8"; ?>
  <script>
    window.clk = function(url) {
      // window.location = '/click.php/' + url;
      if(document.images) {
        (new Image).src = "http://www.googleadservices.com/pagead/conversion/1053623094/?label=4I4iCKjZRxC2hrT2Aw&amp;script=0";
      }
      return true;
    }
  </script>
</head>
<body bgcolor="white" text="black" link="black" alink="gray" vlink="gray" style="margin-left: 130px;">

<h1>apt-mirror - apt sources mirroring tool</h1>

<h3>A small tool that provides ability to mirror any parts (or
even all) of Debian and Ubuntu GNU/Linux distributions and/or any other
apt sources which typically provided by open source developers.</h3>

<h2>Main features:</h2>
<ul>
  <li>Configuration as simple as apt's "sources.list"
  <li>Supports multithreaded downloading
  <li>Supports multiple architectures at the same time
  <li>Works on all POSIX compliant systems with perl, gunzip, and wget
  <li>Works extremely well on overloaded internet channel
  <li>Never produces an inconsistent mirror including while mirroring
  <li>Automatically removes unneeded files
  <li>Fully pool comply
</ul>

<h2>Documentation</h2>
There is no easier way to create Debian or Ubuntu mirror than make it using apt-mirror!
Well, to start mirroring with apt-mirror you should do three main tasks:

<ol>
  <li>Install apt-mirror</li>
  <li>Configure sources</li>
  <li>Running apt-mirror</li>
</ol>

<h3>1. Installation</h3>
Debian ( Stable "Etch" or Newer ) and Ubuntu ( any Version ) users just need to:
<pre># apt-get update
# apt-get install apt-mirror</pre>
<br>
Rest users need to download sources and install it by hand:
<ul>
  <li>download apt-mirror_xxx.orig.tar.gz
  <li>extract it and put <u>apt-mirror</u> script to /usr/local/bin or somewhere similar
  <li>put <u>mirror.list</u> config file to /etc/apt/ (or any other place such as /usr/local/etc,
	but in this case do not forget to always specify full path to it in command line)
</ul>

<h3>2. Configuring sources</h3>
Open 'mirror.list' (from /etc/apt/ or whatever you installed it to) and add needed sources
like in /etc/apt/sources.list.  Finally your mirror.list may looks like this:
<pre>
# apt-mirror configuration file
##
## The default configuration options (uncomment and change to override)
##
#
# set base_path    /var/spool/apt-mirror
# set mirror_path  $base_path/mirror
# set skel_path    $base_path/skel
# set var_path     $base_path/var
#
# set defaultarch  &lt;running host architecture&gt;
# set nthreads     20
#


##
## Example sources
##

# sarge's section
deb http://ftp.us.debian.org/debian sarge main contrib non-free
deb-src http://ftp.us.debian.org/debian sarge main contrib non-free

# this source required for network installation ability (udebs)
deb http://ftp.us.debian.org/debian sarge main/debian-installer

# security updates is always good thing to install
deb http://security.debian.org/debian-security sarge/updates main contrib non-free
deb-src http://security.debian.org/debian-security sarge/updates main contrib non-free

# sarge-proposed-updates's section
deb http://ftp.us.debian.org/debian sarge-proposed-updates main contrib non-free
deb-src http://ftp.us.debian.org/debian sarge-proposed-updates main contrib non-free


##
## Cleaner configuration example
##
#
# set cleanscript $var_path/clean.sh
#

# What directories should we clean up
# (i.e. remove files missing in up-to-date indexes)
clean http://security.debian.org/
clean http://ftp.us.debian.org/

# But exclude this directories
# (which is not managed by apt and apt-mirror)
skip-clean http://ftp.us.debian.org/debian-cd/
skip-clean http://ftp.us.debian.org/debian/dists/sarge/main/installer-i386/
skip-clean http://ftp.us.debian.org/debian/doc/
skip-clean http://ftp.us.debian.org/debian/tools/
skip-clean http://ftp.us.debian.org/debian/project/
</pre>

<h3>3. Running apt-mirror</h3>
Ok. Now we may run 'apt-mirror' by the following :<br>
Switch to the "apt-mirror" user
<pre># sudo su - apt-mirror</pre>
Run apt-mirror
<pre>$ apt-mirror</pre>
or (for non-debian users)
<pre>$ apt-mirror /usr/local/etc/mirror.list</pre>
<br>
You also can run apt-mirror from cron. Uncomment line in /etc/cron.d/apt-mirror for this purpose.

<h2>Download</h2>
Current version of apt-mirror is <?=$version?>. You can download it...
<ul>
  <li><a href="http://sourceforge.net/project/showfiles.php?group_id=58626" onmousedown="return clk(this.href)">via sf.net web-interface &gt;&gt;&gt;</a></li>
  <li><a href="apt-mirror/" onmousedown="return clk(this.href)">directly &gt;&gt;&gt;</a></li>
</ul>

<h2>Links</h2>
<ul>
  <li><a href="http://sourceforge.net/projects/apt-mirror/" onmousedown="return clk(this.href)">apt-mirror project on sf.net &gt;&gt;&gt;</a></li>
  <li><a href="http://sourceforge.net/forum/forum.php?forum_id=197335" onmousedown="return clk(this.href)">apt-mirror Forums &gt;&gt;&gt;</a></li>
  <li><a href="http://www.debian.org/" onmousedown="return clk(this.href)">Debian official site &gt;&gt;&gt;</a></li>
  <li><a href="http://www.ubuntu.com/" onmousedown="return clk(this.href)">Ubuntu official site &gt;&gt;&gt;</a></li>
</ul>

<h2>About</h2>
apt-mirror was originaly written by <a href="http://www.highdn.com/" onmousedown="return clk(this.href)">Dmitriy Khramtsov</a> to create his university's debian mirror.<br>
It is Currently Developed and Maintained by <a href="http://www.brandonholtsclaw.com" onmousedown="return clk(this.href)">Brandon Holtsclaw</a>.<br>

<div style="position: absolute; bottom: 0px; left: 4px;">
  <?php include('ad.inc'); ?>
</div>

<div style="position: absolute; top: 0px; left: 4px; text-align: center;">
  <a href="http://www.debian.org/"><img border="0" align="center" src="apt.png"></a>
  <div class="border" style="background: white;">
  <h5 style="margin-top: 3px; margin-bottom: 0px;">current version:</h5>
  <h1 style="margin-top: 0px; margin-bottom: 0px;"><?=$version?></h1>  <h5 style="margin-top: 0px; margin-bottom: 3px;"><a href="apt-mirror/"
 onmousedown="return clk(this.href)">download &gt;&gt;&gt;</a></h5>
  </div>
</div>

</body>
</html>
