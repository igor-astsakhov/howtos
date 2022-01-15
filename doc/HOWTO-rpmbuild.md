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

##### macro file (https://docs.fedoraproject.org/en-US/packaging-guidelines/RPMMacros/)
~/.rpmmacros
%_topdir      %(echo $HOME)/rpmbuild
%_smp_mflags  -j3
%__arch_install_post   /usr/lib/rpm/check-rpaths   /usr/lib/rpm/check-buildroot

```
$ rpmdev-setuptree
$ mkdir ehlo-0.0.1
$ mv ehlo.sh ehlo-0.0.1
$ tar --create --file ehlo-0.0.1.tar.gz ehlo-0.0.1
$ mv ehlo-0.0.1.tar.gz SOURCES
$ rpmdev-newspec ehlo

$ rpm -qi ehlo
$ rpmbuild -bb ~/rpmbuild/SPECS/ehlo.spec

$ sudo dnf install ~/rpmbuild/RPMS/noarch/ehlo-0.0.1-1.el8.noarch.rpm
$ sudo rpm -ivh ~/rpmbuild/RPMS/noarch/ehlo-0.0.1-1.el8.noarch.rpm
$ rpm -qf /bin/ehlo
$ rpm -q ehlo --changelog
$ sudo dnf remove ehlo
$ sudo rpm --verbose --erase ehlo
```

### create a repo in a dir 
[[ -z $(ps auxww|grep genpkgmetadata|grep -v grep) ]] && createrepo --update ~/rpmbuild/RPMS/x86_64/


$ sudo touch /etc/yum.repos.d/myrepo.repo


**[myrepo]**

name=STABLE Repository - x86_64
baseurl=file:///home/igor-astsakhov/rpmbuild/RPMS/x86_64/
enabled=1
gpgcheck=0
sslverify=false


$ yum clean expire-cache && yum install ehlo

