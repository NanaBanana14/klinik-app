<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * Behaviors to implement access control
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'login'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'], // only guests can access the login page
                    ],
                ],
            ],
        ];
    }

    /**
     * Displays login page.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
    
        $model = new LoginForm();
    
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goHome();
        }
    
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }    

    /**
     * Logs the user out and redirects to the home page.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['site/index']);
    }    

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->mailer->compose()
                ->setTo(Yii::$app->params['adminEmail'])
                ->setSubject('Contact Form Submission')
                ->setTextBody($model->body)
                ->send();
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $user = Yii::$app->user->identity;
        $role = $user ? $user->role : 'guest';
    
        switch ($role) {
            case 'admin':
                return $this->render('dashboard/admin');
            case 'dokter':
                return $this->render('dashboard/dokter');
            case 'pendaftaran':
                return $this->render('dashboard/pendaftaran');
            case 'kasir':
                return $this->render('dashboard/kasir');
            default:
                return $this->render('index');
        }
    }
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
