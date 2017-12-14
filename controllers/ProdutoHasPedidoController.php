<?php

namespace app\controllers;

use Yii;
use app\models\ProdutoHasPedido;
use app\models\ProdutoHasPedidoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProdutoHasPedidoController implements the CRUD actions for ProdutoHasPedido model.
 */
class ProdutoHasPedidoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ProdutoHasPedido models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProdutoHasPedidoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProdutoHasPedido model.
     * @param integer $produto_idproduto
     * @param integer $pedido_idpedido
     * @return mixed
     */
    public function actionView($produto_idproduto, $pedido_idpedido)
    {
        return $this->render('view', [
            'model' => $this->findModel($produto_idproduto, $pedido_idpedido),
        ]);
    }

    /**
     * Creates a new ProdutoHasPedido model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProdutoHasPedido();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'produto_idproduto' => $model->produto_idproduto, 'pedido_idpedido' => $model->pedido_idpedido]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProdutoHasPedido model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $produto_idproduto
     * @param integer $pedido_idpedido
     * @return mixed
     */
    public function actionUpdate($produto_idproduto, $pedido_idpedido)
    {
        $model = $this->findModel($produto_idproduto, $pedido_idpedido);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'produto_idproduto' => $model->produto_idproduto, 'pedido_idpedido' => $model->pedido_idpedido]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProdutoHasPedido model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $produto_idproduto
     * @param integer $pedido_idpedido
     * @return mixed
     */
    public function actionDelete($produto_idproduto, $pedido_idpedido)
    {
        $this->findModel($produto_idproduto, $pedido_idpedido)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProdutoHasPedido model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $produto_idproduto
     * @param integer $pedido_idpedido
     * @return ProdutoHasPedido the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($produto_idproduto, $pedido_idpedido)
    {
        if (($model = ProdutoHasPedido::findOne(['produto_idproduto' => $produto_idproduto, 'pedido_idpedido' => $pedido_idpedido])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
