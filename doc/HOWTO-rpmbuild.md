### RPM BUILD

$ rpmbuild -bs // source
$ rpmbuild -ba // both
$ rpmbuild -bb // rpm

.Unpack RPM, in the current directory

$ rpm2cpio name.rpm | cpio -idmo

rpmbuild --showrc // shows the variables defined
rpmbuild --eval %{_bindir} // shows the value for variable

##### php vars:
php_version // version
php_inidir // .ini dir
php_extdir // so dir


$ yum install -y rpmdevtools rpmlint

##### macro file
~/.rpmmacros
%_topdir      %(echo $HOME)/rpmbuild
%_smp_mflags  -j3
%__arch_install_post   /usr/lib/rpm/check-rpaths   /usr/lib/rpm/check-buildroot
