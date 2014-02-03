Vagrant.configure("2") do |config|
  config.vm.box = "police"
  config.vm.box_url = 'http://4b79b5d29bda1ea3808e-c0244351096da2f99013ff9619ea0386.r14.cf2.rackcdn.com/police.box'
  config.vm.hostname = "police.dev"

  config.vm.network :private_network, ip: "192.168.52.10"
    config.ssh.forward_agent = true

  nfs_setting = RUBY_PLATFORM =~ /darwin/ || RUBY_PLATFORM =~ /linux/
  config.vm.synced_folder ".", "/var/www/police.dev", id: "vagrant-root" , :nfs => nfs_setting

  config.vm.provision :shell, :inline => '/home/vagrant/scripts/police install'
  config.vm.provision :shell, :inline => 'if [ -f /etc/php5/conf.d/xdebug.ini ]; then sed -i "s/^/;/" /etc/php5/conf.d/xdebug.ini && service php5-fpm restart; fi'

end
