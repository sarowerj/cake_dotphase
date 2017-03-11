<?php

namespace App\Controller\Admin;

use Cake\Event\Event;
use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class DashboardController extends AppController {

    public function beforeFilter(Event $event) {
        
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function initialize() {
        $this->viewBuilder()->setLayout('admin/dashboard');
    }

    public function index() {
        
    }

    public function add() {
        echo "Create New Page";
    }

}
