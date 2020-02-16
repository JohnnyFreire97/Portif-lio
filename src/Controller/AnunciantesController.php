<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Anunciantes Controller
 *
 * @property \App\Model\Table\AnunciantesTable $Anunciantes
 *
 * @method \App\Model\Entity\Anunciante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnunciantesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $anunciantes = $this->paginate($this->Anunciantes);

        $this->set(compact('anunciantes'));
    }

    /**
     * View method
     *
     * @param string|null $id Anunciante id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $anunciante = $this->Anunciantes->get($id, [
            'contain' => [],
        ]);

        $this->set('anunciante', $anunciante);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $anunciante = $this->Anunciantes->newEntity();
        if ($this->request->is('post')) {
            $anunciante = $this->Anunciantes->patchEntity($anunciante, $this->request->getData());
            if ($this->Anunciantes->save($anunciante)) {
                $this->Flash->success(__('The anunciante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The anunciante could not be saved. Please, try again.'));
        }
        $this->set(compact('anunciante'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Anunciante id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $anunciante = $this->Anunciantes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $anunciante = $this->Anunciantes->patchEntity($anunciante, $this->request->getData());
            if ($this->Anunciantes->save($anunciante)) {
                $this->Flash->success(__('The anunciante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The anunciante could not be saved. Please, try again.'));
        }
        $this->set(compact('anunciante'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Anunciante id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $anunciante = $this->Anunciantes->get($id);
        if ($this->Anunciantes->delete($anunciante)) {
            $this->Flash->success(__('The anunciante has been deleted.'));
        } else {
            $this->Flash->error(__('The anunciante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
