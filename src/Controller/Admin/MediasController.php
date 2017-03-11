<?php

namespace App\Controller\Admin;

use Cake\Routing\Router;
use App\Controller\AppController;

/**
 * Medias Controller
 *
 * @property \App\Model\Table\MediasTable $Medias
 */
class MediasController extends AppController {

    public function initialize() {
        $this->loadComponent('Flash');
        $this->viewBuilder()->setLayout('admin/dashboard');
    }

    public $components = array('Auth');
    public $paginate = [
        'maxLimit' => 10,
        'order' => ['Medias.id' => 'DESC']
    ];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $medias = $this->paginate($this->Medias);
        $this->set(compact('medias'));
        $this->set('_serialize', ['medias']);
    }

    /**
     * View method
     *
     * @param string|null $id Media id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $media = $this->Medias->get($id, [
            'contain' => []
        ]);

        $this->set('media', $media);
        $this->set('_serialize', ['media']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {

        $image = WWW_ROOT . 'uploads/4cdc89182a78850fddcb32d9907e3f80.jpg';

        $size = getimagesize($image);
        echo "<pre>";
        print_r($size);
//        $fp = fopen($filename, "rb");
//        if ($size && $fp) {
//            header("Content-type: {$size['mime']}");
//            fpassthru($fp);
//            exit;
//        } else {
//            // error
//        }
//
//        $image_width = $this->Imageresize->getWidth();
//        $resized = $this->Imageresize->resize(450, 450);
//
//        $this->Imageresize->save(WWW_ROOT . 'uploads/resized/4cdc89182a78850fddcb32d9907e3f80.jpg');
        die();

        //

        $medias = $this->paginate($this->Medias);
        $this->set(compact('medias'));
        $this->set('_serialize', ['medias']);

        $media = $this->Medias->newEntity();
        if ($this->request->is('post')) {
            $media = $this->Medias->patchEntity($media, $this->request->getData());
            if ($this->Medias->save($media)) {
                $this->Flash->success(__('The media has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The media could not be saved. Please, try again.'));
        }
        $this->set(compact('media'));
        $this->set('_serialize', ['media']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Media id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $media = $this->Medias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $media = $this->Medias->patchEntity($media, $this->request->getData());
            if ($this->Medias->save($media)) {
                $this->Flash->success(__('The media has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The media could not be saved. Please, try again.'));
        }
        $this->set(compact('media'));
        $this->set('_serialize', ['media']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Media id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $media = $this->Medias->get($id);
        if ($this->Medias->delete($media)) {
            $this->Flash->success(__('The media has been deleted.'));
        } else {
            $this->Flash->error(__('The media could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * This method will upload any file to uploads directory.
     * @return type boolian
     */
    public function upload_media() {
        $media = $this->Medias->newEntity();
        if ($this->request->is('post')) {
            $media = $this->Medias->patchEntity($media, $this->request->getData());

            $url = WWW_ROOT . 'uploads';
            $ajax_file = $this->request['data']['file'];
            $ajax_file_name = $this->request['data']['file']['name'];
            $path_info = pathinfo($ajax_file_name);
            $file_ext = $path_info['extension'];
            $new_name = md5($ajax_file_name . date("Y/m/d h:i:sa")) . "." . $file_ext;
            move_uploaded_file($ajax_file['tmp_name'], "$url/$new_name");

            $media['name'] = $ajax_file_name;
            $media['new_name'] = $new_name;
            $media['new_name'] = $new_name;
            $media['type'] = $this->request['data']['file']['type'];
            $media['size'] = $this->request['data']['file']['size'];
            $media['directory'] = "directory";
            $media['status'] = 1;

            $result = $this->Medias->save($media);
            echo $record_id = $result->id;
            die();
        }

        $this->set(compact('media'));
        $this->set('_serialize', ['media']);
    }

}
