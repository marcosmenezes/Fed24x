<?php

echo 'Bem vindo ao fconfigx:';
echo 'Oque você quer fazer? ';
echo '(1) Instalar ou (2) Remover? ';
$escolha = readline();

if ($escolha == '1') {
	echo instalar();
}

if ($escolha == '2'){
	echo remover();
}

function remover(){

$remove = 'dnf remove ';
$yes = ' -y';
$a = 'cheese';
$b = 'contacts';
$c = 'evolution';
$d = 'totem';
$e = 'empathy';

echo system($remove.$a.$yes);
echo system($remove.$b.$yes);
echo system($remove.$c.$yes);
echo system($remove.$d.$yes);
echo system($remove.$e.$yes);
echo system('dnf autoremove'.$yes);
}

function instalar(){
	$ins = 'dnf install ';
	$yes = ' -y';
	$install_rpm = 'rpm -ivh';
	$fusionfree = 'wget http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-23.noarch.rpm';
	$fusionnonfree = 'wget http://download1.rpmfusion.org/nonfree/fedora/rpmfusion-nonfree-release-23.noarch.rpm';
	$a = 'dnf update';
	$b = 'filezilla';
	$c = 'thunderbird';
	$d = 'gnome-Tweak-Tool';
	$e = 'eclipse';
	$f = 'dropbox';
	$g = 'gimp';
	$h = 'amarok';
	$i = 'samba';
	$j = 'wget http://linuxdownload.adobe.com/adobe-release/adobe-release-x86_64-1.0-1.noarch.rpm';
	$k = 'wget https://gist.githubusercontent.com/dkd903/8ba3f51313c1781cc571/raw/f37b1c18547d086cd45e8b484efc518260106ea9/Install_Sublime_Text_3_64.sh -O install-sublime-text.sh';
	$l = 'chmod +x install-sublime-text.sh';
	$m = 'su -c "sh install-sublime-text.sh"';
	$php_devel = 'php-devel';
	$php_mysql = 'php-mysql';
	$php_mysqlnd = 'php-mysqlnd';
	$php_opcache = 'php-opcache';

	echo system($fusionfree);
	echo system($install_rpm.'rpmfusion-free-release-23.noarch.rpm');
	echo system('rm rpmfusion-free-release-23.noarch.rpm'.$yes);
	echo system($fusionnonfree);
	echo system($install_rpm.'rpmfusion-nonfree-release-23.noarch.rpm');
	echo system('rm rpmfusion-nonfree-release-23.noarch.rpm'.$yes);
	echo system($a.$yes);
	echo system($ins.$b.$yes);
	echo system($ins.$c.$yes);
	echo system($ins.$d.$yes);
	echo system($ins.$e.$yes);
	echo system($ins.$f.$yes);
	echo system($ins.$g.$yes);
	echo system($ins.$h.$yes);
	echo system($ins.$i.$yes);
	echo system($j);
	echo system($install_rpm.$j);
	echo system('rm adobe-release-x86_64-1.0-1.noarch.rpm'.$yes);
	echo system($k);
	echo system($l);
	echo system($m);

	/* MODULOS PHP */
	echo system($ins.$php_devel.$yes);
	echo system($ins.$php_mysql.$yes);
	echo system($ins.$php_mysqlnd.$yes);
	echo system($ins.$php_opcache.$yes);
	}
?>