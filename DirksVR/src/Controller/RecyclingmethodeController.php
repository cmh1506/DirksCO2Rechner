<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Recyclingmethode Controller
 *
 * @property \App\Model\Table\RecyclingmethodeTable $Recyclingmethode
 *
 * @method \App\Model\Entity\Recyclingmethode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RecyclingmethodeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $recyclingmethode = $this->paginate($this->Recyclingmethode);

        $this->set(compact('recyclingmethode'));
    }

    /**
     * View method
     *
     * @param string|null $id Recyclingmethode id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recyclingmethode = $this->Recyclingmethode->get($id, [
            'contain' => ['Materialverwendung'],
        ]);

        $this->set('recyclingmethode', $recyclingmethode);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recyclingmethode = $this->Recyclingmethode->newEntity();
        if ($this->request->is('post')) {
            $recyclingmethode = $this->Recyclingmethode->patchEntity($recyclingmethode, $this->request->getData());
            if ($this->Recyclingmethode->save($recyclingmethode)) {
                $this->Flash->success(__('The recyclingmethode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recyclingmethode could not be saved. Please, try again.'));
        }
        $this->set(compact('recyclingmethode'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recyclingmethode id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recyclingmethode = $this->Recyclingmethode->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recyclingmethode = $this->Recyclingmethode->patchEntity($recyclingmethode, $this->request->getData());
            if ($this->Recyclingmethode->save($recyclingmethode)) {
                $this->Flash->success(__('The recyclingmethode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recyclingmethode could not be saved. Please, try again.'));
        }
        $this->set(compact('recyclingmethode'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recyclingmethode id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recyclingmethode = $this->Recyclingmethode->get($id);
        if ($this->Recyclingmethode->delete($recyclingmethode)) {
            $this->Flash->success(__('The recyclingmethode has been deleted.'));
        } else {
            $this->Flash->error(__('The recyclingmethode could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
