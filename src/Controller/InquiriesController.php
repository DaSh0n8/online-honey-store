<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Inquiries Controller
 *
 * @property \App\Model\Table\InquiriesTable $Inquiries
 * @method \App\Model\Entity\Inquiry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InquiriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $inquiries = $this->paginate($this->Inquiries);

        $this->set(compact('inquiries'));
    }

    /**
     * View method
     *
     * @param string|null $id Inquiry id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inquiry = $this->Inquiries->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('inquiry'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inquiry = $this->Inquiries->newEmptyEntity();
        if ($this->request->is('post')) {
            $inquiry = $this->Inquiries->patchEntity($inquiry, $this->request->getData());
            if ($this->Inquiries->save($inquiry)) {
                $this->Flash->success(__('The inquiry has been saved.'));

                return $this->redirect(['controller' => 'pages','action'=>'../']);
            }
            $this->Flash->error(__('The inquiry could not be saved. Please, try again.'));
        }
        $this->set(compact('inquiry'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inquiry id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inquiry = $this->Inquiries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inquiry = $this->Inquiries->patchEntity($inquiry, $this->request->getData());
            if ($this->Inquiries->save($inquiry)) {
                $this->Flash->success(__('The inquiry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inquiry could not be saved. Please, try again.'));
        }
        $this->set(compact('inquiry'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inquiry id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inquiry = $this->Inquiries->get($id);
        if ($this->Inquiries->delete($inquiry)) {
            $this->Flash->success(__('The inquiry has been deleted.'));
        } else {
            $this->Flash->error(__('The inquiry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
