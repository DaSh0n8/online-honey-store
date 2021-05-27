<?php
declare(strict_types=1);

namespace App\Controller;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ShippingAddress;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
/**
 * OrderLines Controller
 *
 * @property \App\Model\Table\OrderLinesTable $OrderLines
 * @method \App\Model\Entity\OrderLine[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderLinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */



    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Products'],
        ];
        $orderLines = $this->paginate($this->OrderLines);

        $this->set(compact('orderLines'));
    }
    /**item['quantity'
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function cart()
    {
        $this->loadModel('Products');
        $items = $this->Products->find('all');
        $products = $this->request->getSession()->read('Cart');
        $this->set(compact('products'));
        $this->set(compact('items'));

    }

    public function checkout(){


    }

    public function paypal(){

        // 下面为申请app获得的clientId和clientSecret，必填项，否则无法生成token。
        $clientId = 'ATnuSLiYPPpNovryQJ4ZsiD1FfR2Jelv5GBkSGNjd59Ef8SW8XEH48fFwOf7L9wcyZARGx3LanesBuvb';
        $clientSecret = 'EAadzJ40KVcpBanjhdAR13N2mxPBi2O7uQYMs8h-wMga5scKmwHEyCIOLLgQk2FLEcEOc2xS5ORwyQSo';
        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                $clientId,
                $clientSecret
            )
        );

        $apiContext->setConfig(
            array(
                'mode' => 'sandbox',
                'log.LogEnabled' => true,
                'log.FileName' => '../PayPal.log',
                'log.LogLevel' => 'DEBUG',
                'cache.enabled' => true
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

//设置商品详情
        /**
         * 详情信息：单价、收货地址等请结合自己的业务去数据库或者其他存储数据的地方查询
         * 这里只是演示支付流程，不结合实际业务
         */



        $item1 = new Item();
        $item1->setName('test pro 1')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setSku("testpro1_01")
            ->setPrice(2.3);
        $item2 = new Item();
        $item2->setName('test pro 2')
            ->setCurrency('USD')
            ->setQuantity(5)
            ->setSku("testpro2_01")
            ->setPrice(1.1);
        $itemList = new ItemList();
        $itemList->setItems(array($item1, $item2));
// 自定义用户收货地址，如果这里不定义，在支付页面能够修改，可能会误操作，与用户想等地质不一致
        $address = new ShippingAddress();

        $address->setRecipientName("张三")
            ->setLine1("小区名")
            ->setLine2("楼号")
            ->setCity("城市")
            ->setState("省份")
            ->setPhone(15211111111) //收货电话
            ->setPostalCode(000000) //邮编
            ->setCountryCode('CN');

        $itemList->setShippingAddress($address);

//设置总价，运费等金额。注意：setSubtotal的金额必须与详情里计算出的总金额相等，否则会失败
        $details = new Details();
        $details->setShipping(1)
            ->setTax(2)
            ->setSubtotal(7.8);

// 同上，金额要相等
        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(10.8)
            ->setDetails($details);


        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        /**
         * 回调
         * 当支付成功或者取消支付的时候调用的地址
         * success=true   支付成功
         * success=false  取消支付
         */
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("http://localhost/paypal/payment/exec.php?success=true")
            ->setCancelUrl("http://localhost/paypal/payment/cancel.php?success=false");


        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
//创建支付
        $payment->create($apiContext);
//生成地址
        $approvalUrl = $payment->getApprovalLink();


//跳转
        header("location:" . $approvalUrl);
        exit;

    }

    /**
     * View method
     *
     * @param string|null $id Order Line id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderLine = $this->OrderLines->get($id, [
            'contain' => ['Orders', 'Products'],
        ]);

        $this->set(compact('orderLine'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderLine = $this->OrderLines->newEmptyEntity();
        if ($this->request->is('post')) {
            $orderLine = $this->OrderLines->patchEntity($orderLine, $this->request->getData());
            if ($this->OrderLines->save($orderLine)) {
                $this->Flash->success(__('The order line has been saved.'));
                return $this->redirect(['action' => 'cart']);
            }
            $this->Flash->error(__('The order line could not be saved. Please, try again.'));
        }
        $orders = $this->OrderLines->Orders->find('list', ['limit' => 200]);
        $products = $this->OrderLines->Products->find('list', ['limit' => 200]);
        $this->set(compact('orderLine', 'orders', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Line id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderLine = $this->OrderLines->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderLine = $this->OrderLines->patchEntity($orderLine, $this->request->getData());
            if ($this->OrderLines->save($orderLine)) {
                $this->Flash->success(__('The order line has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order line could not be saved. Please, try again.'));
        }
        $orders = $this->OrderLines->Orders->find('list', ['limit' => 200]);
        $products = $this->OrderLines->Products->find('list', ['limit' => 200]);
        $this->set(compact('orderLine', 'orders', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Line id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderLine = $this->OrderLines->get($id);
        if ($this->OrderLines->delete($orderLine)) {
            $this->Flash->success(__('The order line has been deleted.'));
        } else {
            $this->Flash->error(__('The order line could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)

    {
        parent::beforeFilter($event);

        // for all controllers in our application, make index and view

        // actions public, skipping the authentication check
        $this->Authentication->addUnauthenticatedActions(['cart','checkout']);
        $this->Authentication->addUnauthenticatedActions(['checkout']);


    }
    public function confirmation(){

    }
}
