<?php
    class DashboardController extends AppController {

          var $name = 'Dashboard';
          var $uses = array();

          function index () {
               $this->set('currentWar', ClassRegistry::init('War')->find('first', array('order' => array('War.id' => 'desc'))));
               $this->set('currentEnemy', ClassRegistry::init('Clan')->findById(1));
               // $this->set('currentScore', ClassRegistry::init('Employee')->getTopPerformers());
               // $this->set('topAttackers', ClassRegistry::init('Product')->getTopSellers());
               // $this->set('topDefenders', ClassRegistry::init('Product')->getTopSellers());
          }
    }
?>