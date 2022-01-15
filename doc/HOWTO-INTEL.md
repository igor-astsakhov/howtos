- [HOME](../../../)
 stream %> [~]# intel-linux-graphics-installer
 diagnostics-view.c/new_diagnostic: Adding diagnostic for Checking if Intel graphics card available...
 diagnostics-view.c/new_diagnostic: Adding diagnostic for Retrieving information from 01.org...
 diagnostics-view.c/new_diagnostic: Adding diagnostic for Checking distribution...
 diagnostics-view.c/new_diagnostic: Adding diagnostic for Checking kernel version...
 diagnostics-view.c/new_diagnostic: Adding diagnostic for Checking available repositories...
 diagnostics-view.c/new_diagnostic: Adding diagnostic for Checking package manager status...
 polkit: Fetching org.01.linuxgraphics.installer permissions...

 (intel-linux-graphics-installer:9897): GLib-GObject-WARNING **: The property GtkButton:use-stock is deprecated and shouldn't be used anymore. It will be removed in a future version.

 (intel-linux-graphics-installer:9897): GLib-GObject-WARNING **: The property GtkSettings:gtk-button-images is deprecated and shouldn't be used anymore. It will be removed in a future version.
 Gtk-Message: GtkDialog mapped without a transient parent. This is discouraged.
 diagnostics-view.c/diagnostics_view_start: Running diagnostic Checking if Intel graphics card available...
 diagnostics-view.c/diagnostics_view_start: Running diagnostic Retrieving information from 01.org...
 {
   errors: (nil)
     sources: [https://download.01.org/gfx/fedora/22/noarch/intellinuxgraphics-repo-1.2.0-22.intel20152.noarch.rpm intellinuxgraphics-repo]
       keys: []
         docs: []
           INSTALL: []
             install: [libva libva-utils libva-intel-driver intel-gpu-tools]
               upgrade: [xorg-x11-drv-intel]
               }
               diagnostics-view.c/diagnostics_view_start: Running diagnostic Checking distribution...
               🕛 package_manager_is_distro_supported
               🕛 Configuration : Loading …  [   0 % ] ⏲
               {
                 errors: (nil)
                   sources: [https://download.01.org/gfx/fedora/22/noarch/intellinuxgraphics-repo-1.2.0-22.intel20152.noarch.rpm intellinuxgraphics-repo]
                     keys: []
                       docs: []
                         INSTALL: []
                           install: [libva libva-utils libva-intel-driver intel-gpu-tools]
                             upgrade: [xorg-x11-drv-intel]
                             }
                             🕛 package_manager_is_distro_supported
                             🕛 Configuration : Loaded  [  80 % ] ⏲
                             🕛 package_manager_is_distro_supported
                             🕛 Configuration : Testing …  [  80 % ] ⏲
                             reading /system/proxy/http/host
                             reading /system/proxy/http/port
                             proxy http setting: -none-
                             reading /system/proxy/autoconfig-url
                             looking up https://download.01.org/gfx/fedora/22/noarch/intellinuxgraphics-repo-1.2.0-22.intel20152.noarch.rpm proxy via libproxy1: direct://
                             libproxy https setting: direct://
                             reading /system/proxy/ftp/host
                             reading /system/proxy/ftp/port
                             proxy ftp setting: -none-
                             reading /system/proxy/socks/host
                             reading /system/proxy/socks/port
                             proxy socks setting: -none-
                             reading /system/proxy/ignore-hosts
                             proxy no setting: -none-
                             reading /system/proxy/autoconfig-url
                             proxy PAC setting: -none-
                             Packagekit setup: No proxies to set
                             🕛 package_manager_is_distro_supported
                             🕛 Configuration : Complete  [  ] ◦
                             diagnostics-view.c/diagnostics_view_start: Running diagnostic Checking kernel version...
                             diagnostics-view.c/diagnostics_view_start: Running diagnostic Checking available repositories...
                             diagnostics-view.c/diagnostics_view_start: Running diagnostic Checking package manager status...
                             main-window.c/on_diagnostics_finished: Diagnostics finished successfully
                             🕛 transaction_view_start
                             🕛 Ensuring consistent system... : …  [   0 % ] ⏲
                             transaction-view.c/transaction_view_start: Running transaction Ensuring consistent system...
                             🕛 pre_install_transaction
                             🕛 Pre-install :   [   0 % ] ◦
                             🕛 package_manager_pre_install
                             🕛 Pre-install : Ensuring consistent repositories …  [   0 % ] ⏲
                             pkexec --user root /usr/share/intel-linux-graphics-installer/scripts/remove-fedora-repo.shtransaction-view.c/on_pm_op_finished: Package manager operation finished
                             🕛 on_pm_op_finished
                             🕛 Pre-install : Complete  [  ] ◦
                             🕛 package_manager_pre_install
                             🕛 Pre-install : Complete  [  ] ◦
                             🕛 transaction_view_start
                             🕛 Ensuring consistent system... : Complete  [  ] ◦
                             🕛 transaction_view_start
                             🕛 Listing packages... : …  [   0 % ] ⏲
                             transaction-view.c/transaction_view_start: Running transaction Listing packages...
                             🕛 list_transaction
                             🕛 List packages :   [  ] ⏲
                             transaction-view.c/on_pm_op_finished: Package manager operation finished
                             🕛 on_pm_op_finished
                             🕛 List packages : Complete  [  ] ◦
                             🕛 transaction_view_start
                             🕛 Listing packages... : Complete  [  ] ◦
                             🕛 transaction_view_start
                             🕛 Setting up repositories... : …  [   0 % ] ⏲
                             transaction-view.c/transaction_view_start: Running transaction Setting up repositories...
                             🕛 setup_repo_transaction
                             🕛 Setup :   [   0 % ] ◦
                             🕛 package_manager_setup
                             🕛 Setup : Configuring Repositories …  [   0 % ] ⏲
                             🕛 package_manager_fedora_is_setup
                             🕛 Setup : Configuring Repositories …  [  ] ⏲
                             🕛 package_manager_fedora_is_setup
                             🕛 Setup : Configuring Repositories …  [ 100 % ] ◦
                             polkit: Fetching org.freedesktop.packagekit.package-install permissions...
                             pkexec --user root rpm -i /home/igor.astakhov/intellinuxgraphics-repo.noarch.rpmtransaction-view.c/on_pm_op_finished: Package manager operation finished
                             🕛 on_pm_op_finished
                             🕛 Setup : Complete  [  ] ◦
                             🕛 package_manager_setup
                             🕛 Setup : Complete  [  ] ◦
                             🕛 transaction_view_start
                             🕛 Setting up repositories... : Complete  [  ] ◦
                             🕛 transaction_view_start
                             🕛 Installing packages... : …  [   0 % ] ⏲
                             transaction-view.c/transaction_view_start: Running transaction Installing packages...
                             🕛 install_transaction
                             🕛 Install :   [   0 % ] ◦
                             transaction-view.c/on_pm_progress: Package manager operation progress: Installing files...
                             transaction-view.c/on_pm_progress: Package manager operation progress: Installing packages...
                             pkexec --user root dnf --refresh -y install xorg-x11-drv-intel🕛 install_package
                             🕛 Installing : Running yum install command  [  20 % ] ⏲
                             pkexec --user root dnf --refresh -y install libva🕛 install_package
                             🕛 Installing : Running yum install command  [  40 % ] ⏲
                             pkexec --user root dnf --refresh -y install libva-utils🕛 install_package
                             🕛 Installing : Running yum install command  [  60 % ] ⏲
                             pkexec --user root dnf --refresh -y install libva-intel-driver🕛 install_package
                             🕛 Installing : Running yum install command  [  80 % ] ⏲
                             pkexec --user root dnf --refresh -y install intel-gpu-tools🕛 install_package
                             🕛 Installing : Running yum install command  [ 100 % ] ⏲
                             transaction-view.c/on_pm_op_finished: Package manager operation finished
                             🕛 on_pm_op_finished
                             🕛 Installing : Complete  [  ] ◦
                             🕛 transaction_view_start
                             🕛 Installing packages... : Complete  [  ] ◦
                             🕛 transaction_view_start
                             🕛 Cleaning up... : …  [   0 % ] ⏲
                             transaction-view.c/transaction_view_start: Running transaction Cleaning up...
                             🕛 cleanup_transaction
                             🕛 Cleaning up... : …  [ 100 % ] ◦
                             🕛 transaction_view_start
                             🕛 Cleaning up... : Complete  [  ] ◦
                             🕛 transaction_view_start
                             🕛 Listing packages... : …  [   0 % ] ⏲
                             transaction-view.c/transaction_view_start: Running transaction Listing packages...
                             🕛 list_transaction
                             🕛 List packages :   [  ] ⏲
                             transaction-view.c/on_pm_op_finished: Package manager operation finished
                             🕛 on_pm_op_finished
                             🕛 List packages : Complete  [  ] ◦
                             🕛 transaction_view_start
                             🕛 Listing packages... : Complete  [  ] ◦
                             main-window.c/on_transaction_finished: Package transaction finished successfully
                             ^[[A^[[A^[[A^[[A

                             WEBSITE:
                             https://01.org/linuxgraphics/downloads/intel-graphics-installer-linux-1.2.0

                             PACKAGE:
                             Downloads/intel-linux-graphics-installer-1.2.0-22.intel20152.x86_64.rpm

