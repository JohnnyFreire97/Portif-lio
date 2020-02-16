<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Anuncios Controller
 *
 * @property \App\Model\Table\AnunciosTable $Anuncios
 *
 * @method \App\Model\Entity\Anuncio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnunciosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Anunciantes', 'Categorias'],
        ];
        $anuncios = $this->paginate($this->Anuncios);

        $this->set(compact('anuncios'));
    }

    /**
     * View method
     *
     * @param string|null $id Anuncio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $anuncio = $this->Anuncios->get($id, [
            'contain' => ['Anunciantes', 'Categorias'],
        ]);

        $this->set('anuncio', $anuncio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $anuncio = $this->Anuncios->newEntity();
        if ($this->request->is('post')) {
            $anuncio = $this->Anuncios->patchEntity($anuncio, $this->request->getData());
            if ($this->Anuncios->save($anuncio)) {
                $this->Flash->success(__('The anuncio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The anuncio could not be saved. Please, try again.'));
        }
        $anunciantes = $this->Anuncios->Anunciantes->find('list', ['limit' => 200]);
        $categorias = $this->Anuncios->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('anuncio', 'anunciantes', 'categorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Anuncio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $anuncio = $this->Anuncios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $anuncio = $this->Anuncios->patchEntity($anuncio, $this->request->getData());
            if ($this->Anuncios->save($anuncio)) {
                $this->Flash->success(__('The anuncio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The anuncio could not be saved. Please, try again.'));
        }
        $anunciantes = $this->Anuncios->Anunciantes->find('list', ['limit' => 200]);
        $categorias = $this->Anuncios->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('anuncio', 'anunciantes', 'categorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Anuncio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $anuncio = $this->Anuncios->get($id);
        if ($this->Anuncios->delete($anuncio)) {
            $this->Flash->success(__('The anuncio has been deleted.'));
        } else {
            $this->Flash->error(__('The anuncio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
