<?php
    class DashboardController extends AppController {

          var $name = 'Dashboard';
          var $uses = array('War','Clan');

          function index () {
               $this->War->recursive=2;
               $this->set('currentWar', $this->War->find('first', array('order' => array('War.startTime' => 'desc'))));
               $this->set('currentEnemy', $this->Clan->findById(1));
          }
    }
?>