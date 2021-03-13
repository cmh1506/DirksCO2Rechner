<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Materialverwendung Controller
 *
 * @property \App\Model\Table\MaterialverwendungTable $Materialverwendung
 *
 * @method \App\Model\Entity\Materialverwendung[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MaterialverwendungController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Verpackung', 'Material', 'Recyclingmethode', 'Verarbeitung'],
        ];
        $materialverwendung = $this->paginate($this->Materialverwendung);

        $this->set(compact('materialverwendung'));
    }

    /**
     * View method
     *
     * @param string|null $id Materialverwendung id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialverwendung = $this->Materialverwendung->get($id, [
            'contain' => ['Verpackung', 'Material', 'Recyclingmethode', 'Verarbeitung'],
        ]);

        $this->set('materialverwendung', $materialverwendung);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materialverwendung = $this->Materialverwendung->newEntity();
        if ($this->request->is('post')) {
            $materialverwendung = $this->Materialverwendung->patchEntity($materialverwendung, $this->request->getData());
            if ($this->Materialverwendung->save($materialverwendung)) {
                $this->Flash->success(__('The materialverwendung has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materialverwendung could not be saved. Please, try again.'));
        }
        $verpackung = $this->Materialverwendung->Verpackung->find('list', ['limit' => 200]);
        $material = $this->Materialverwendung->Material->find('list', ['limit' => 200]);
        $recyclingmethode = $this->Materialverwendung->Recyclingmethode->find('list', ['limit' => 200]);
        $verarbeitung = $this->Materialverwendung->Verarbeitung->find('list', ['limit' => 200]);
        $this->set(compact('materialverwendung', 'verpackung', 'material', 'recyclingmethode', 'verarbeitung'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Materialverwendung id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialverwendung = $this->Materialverwendung->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialverwendung = $this->Materialverwendung->patchEntity($materialverwendung, $this->request->getData());
            if ($this->Materialverwendung->save($materialverwendung)) {
                $this->Flash->success(__('The materialverwendung has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materialverwendung could not be saved. Please, try again.'));
        }
        $verpackung = $this->Materialverwendung->Verpackung->find('list', ['limit' => 200]);
        $material = $this->Materialverwendung->Material->find('list', ['limit' => 200]);
        $recyclingmethode = $this->Materialverwendung->Recyclingmethode->find('list', ['limit' => 200]);
        $verarbeitung = $this->Materialverwendung->Verarbeitung->find('list', ['limit' => 200]);
        $this->set(compact('materialverwendung', 'verpackung', 'material', 'recyclingmethode', 'verarbeitung'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Materialverwendung id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialverwendung = $this->Materialverwendung->get($id);
        if ($this->Materialverwendung->delete($materialverwendung)) {
            $this->Flash->success(__('The materialverwendung has been deleted.'));
        } else {
            $this->Flash->error(__('The materialverwendung could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
