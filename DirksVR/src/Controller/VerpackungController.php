<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Verpackung Controller
 *
 * @property \App\Model\Table\VerpackungTable $Verpackung
 *
 * @method \App\Model\Entity\Verpackung[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VerpackungController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $verpackung = $this->paginate($this->Verpackung);

        $this->set(compact('verpackung'));
    }

    /**
     * View method
     *
     * @param string|null $id Verpackung id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $verpackung = $this->Verpackung->get($id, [
            'contain' => ['Users', 'Materialverwendung'],
        ]);
        $this->set("huhu", "1000");
        $this->set('verpackung', $verpackung);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $verpackung = $this->Verpackung->newEntity();
        if ($this->request->is('post')) {
            $verpackung = $this->Verpackung->patchEntity($verpackung, $this->request->getData());
            if ($this->Verpackung->save($verpackung)) {
                $this->Flash->success(__('The verpackung has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The verpackung could not be saved. Please, try again.'));
        }
        $users = $this->Verpackung->Users->find('list', ['limit' => 200]);
        $this->set(compact('verpackung', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Verpackung id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $verpackung = $this->Verpackung->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $verpackung = $this->Verpackung->patchEntity($verpackung, $this->request->getData());
            if ($this->Verpackung->save($verpackung)) {
                $this->Flash->success(__('The verpackung has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The verpackung could not be saved. Please, try again.'));
        }
        $users = $this->Verpackung->Users->find('list', ['limit' => 200]);
        $this->set(compact('verpackung', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Verpackung id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $verpackung = $this->Verpackung->get($id);
        if ($this->Verpackung->delete($verpackung)) {
            $this->Flash->success(__('The verpackung has been deleted.'));
        } else {
            $this->Flash->error(__('The verpackung could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
