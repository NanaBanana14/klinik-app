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
            return $this->goHome(); // If already logged in, redirect to the homepage
        }

        $model = new LoginForm();
        
        // Process the login form
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // Redirect based on the user's role after login
            $role = Yii::$app->user->identity->role;
            switch ($role) {
                case 'admin':
                    return $this->redirect(['admin/index']); // Redirect to admin page
                case 'dokter':
                    return $this->redirect(['dokter/index']); // Redirect to dokter page
                case 'pendaftaran':
                    return $this->redirect(['pendaftaran/index']); // Redirect to pendaftaran page
                case 'kasir':
                    return $this->redirect(['kasir/index']); // Redirect to kasir page
                default:
                    return $this->goHome(); // Redirect to the homepage if no specific role
            }
        }

        // Render the login page if no POST request or invalid login attempt
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
        return $this->goHome();
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
        return $this->render('index');
    }
}
