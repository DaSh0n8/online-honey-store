<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $products = $this->Products->find();

        $this->set(compact('products'));
    }

    public function index2()
    {
        $products = $this->Products->find();

        $this->set(compact('products'));
    }
    public function index3()
    {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewproduct($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['OrderLines']
        ]);

        $this->set(compact('product'));
    }

    public function addproduct() {

        $formData = array($this->request->getData());
        //[$id, $qty] = $formData;
        $cartSession=$this->request->getSession();
        $cartSession->read('Cart.info');
        //$this->request->getSession()->write('Cart.info', $formData);
        if($cartSession->check('Cart')==null){
            $cartSession->write('Cart', $formData);
        }
        else{
            $data= $this->request->getSession()->read('Cart');
            $cartSession->write('Cart', array_merge($data, $formData));
        }
        $this->Flash->success('Your cart has been updated.');
        return $this->redirect($this->referer());
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['OrderLines'],
        ]);

        $this->set(compact('product'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if(!$product->getErrors){
                $image = $this->request->getData('image_file');

                $name = $image->getClientFilename();

                $targetPath = WWW_ROOT.'img'.DS.$name;
                if($name)
                    $image->moveTo($targetPath);

                $product->image=$name;
            }


            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
        $article = $this->Products->newEntity($this->request->getData());

// Prior to 3.4 use $article->errors()
        if ($article->getErrors()) {
            // Entity failed validation.
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function test(){
        $this->viewBuilder()->setLayout('backend_default');
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)

    {

        parent::beforeFilter($event);

        // for all controllers in our application, make index and view

        // actions public, skipping the authentication check

        $this->Authentication->addUnauthenticatedActions(['index3','viewproduct','addproduct']);

    }


}
