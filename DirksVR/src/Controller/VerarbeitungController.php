<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Verarbeitung Controller
 *
 * @property \App\Model\Table\VerarbeitungTable $Verarbeitung
 *
 * @method \App\Model\Entity\Verarbeitung[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VerarbeitungController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $verarbeitung = $this->paginate($this->Verarbeitung);

        $this->set(compact('verarbeitung'));
    }

    /**
     * View method
     *
     * @param string|null $id Verarbeitung id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $verarbeitung = $this->Verarbeitung->get($id, [
            'contain' => ['Materialverwendung'],
        ]);

        $this->set('verarbeitung', $verarbeitung);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $verarbeitung = $this->Verarbeitung->newEntity();
        if ($this->request->is('post')) {
            $verarbeitung = $this->Verarbeitung->patchEntity($verarbeitung, $this->request->getData());
            if ($this->Verarbeitung->save($verarbeitung)) {
                $this->Flash->success(__('The verarbeitung has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The verarbeitung could not be saved. Please, try again.'));
        }
        $this->set(compact('verarbeitung'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Verarbeitung id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $verarbeitung = $this->Verarbeitung->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $verarbeitung = $this->Verarbeitung->patchEntity($verarbeitung, $this->request->getData());
            if ($this->Verarbeitung->save($verarbeitung)) {
                $this->Flash->success(__('The verarbeitung has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The verarbeitung could not be saved. Please, try again.'));
        }
        $this->set(compact('verarbeitung'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Verarbeitung id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $verarbeitung = $this->Verarbeitung->get($id);
        if ($this->Verarbeitung->delete($verarbeitung)) {
            $this->Flash->success(__('The verarbeitung has been deleted.'));
        } else {
            $this->Flash->error(__('The verarbeitung could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
