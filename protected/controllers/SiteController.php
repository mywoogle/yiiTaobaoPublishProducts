<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
	
		$targetResults = Target::model()->findAll('0<target_title_search<=:target_title_search',array(':target_title_search'=>4));
		foreach($targetResults as $targetResult)
		{
			//get all match TaobaoSource
			$TaobaoSources = TaobaoSource::model()->findAll(
				'
					xuetongneilicaizhi=:xuetongneilicaizhi and
					xuetongcaizhi=:xuetongcaizhi and
					shangshinianfenjijie=:shangshinianfenjijie and
					fengge=:fengge and
					bangmiancaizhi=:bangmiancaizhi and
					xuemianneilicaizhi=:xuemianneilicaizhi and
					pizhitezhi=:pizhitezhi and
					xiedicaizhi=:xiedicaizhi and
					xuekuanpingming=:xuekuanpingming and
					tonggao=:tonggao
				',
				array(
					':xuetongneilicaizhi'=>$targetResult['xuetongneilicaizhi'],
					':xuetongcaizhi'=>$targetResult['xuetongcaizhi'],
					':shangshinianfenjijie'=>$targetResult['shangshinianfenjijie'],
					':fengge'=>$targetResult['fengge'],
					':bangmiancaizhi'=>$targetResult['bangmiancaizhi'],
					':xuemianneilicaizhi'=>$targetResult['xuemianneilicaizhi'],
					':pizhitezhi'=>$targetResult['pizhitezhi'],
					':xiedicaizhi'=>$targetResult['xiedicaizhi'],
					':xuekuanpingming'=>$targetResult['xuekuanpingming'],
					':tonggao'=>$targetResult['tonggao'],
				)
			);
			//modify the Target and TaobaoSource
			
			$count = count($TaobaoSources);
			if($count > 0)
			{
				print_r($TaobaoSources[0]->taobao_source_taobao_id);
				foreach($TaobaoSources as $key=>$TaobaoSource)
				{
					echo $key;
					print_r($TaobaoSource->taobao_source_taobao_id);
					//exit;
				}
			}
		}
	
	
	
	
		$reportsName = 'publish/reports/MatchTitle/MatchTitle('.date('y-m-d H-i-s',time()).').txt';
		$targetResults = Target::model()->findAll('0<target_title_search<=:target_title_search',array(':target_title_search'=>4));
		foreach($targetResults as $targetResult)
		{
			//get all match TaobaoSource
			$TaobaoSources = TaobaoSource::model()->findAll(
				'
					xuetongneilicaizhi=:xuetongneilicaizhi and
					xuetongcaizhi=:xuetongcaizhi and
					shangshinianfenjijie=:shangshinianfenjijie and
					fengge=:fengge and
					bangmiancaizhi=:bangmiancaizhi and
					xuemianneilicaizhi=:xuemianneilicaizhi and
					pizhitezhi=:pizhitezhi and
					xiedicaizhi=:xiedicaizhi and
					xuekuanpingming=:xuekuanpingming and
					tonggao=:tonggao
				',
				array(
					':xuetongneilicaizhi'=>$targetResult['xuetongneilicaizhi'],
					':xuetongcaizhi'=>$targetResult['xuetongcaizhi'],
					':shangshinianfenjijie'=>$targetResult['shangshinianfenjijie'],
					':fengge'=>$targetResult['fengge'],
					':bangmiancaizhi'=>$targetResult['bangmiancaizhi'],
					':xuemianneilicaizhi'=>$targetResult['xuemianneilicaizhi'],
					':pizhitezhi'=>$targetResult['pizhitezhi'],
					':xiedicaizhi'=>$targetResult['xiedicaizhi'],
					':xuekuanpingming'=>$targetResult['xuekuanpingming'],
					':tonggao'=>$targetResult['tonggao'],

				)
			);
			//modify the Target and TaobaoSource
			$count = count($TaobaoSources);
			if($count >= 3)
			{
				//modify the Target
				$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$targetResult['target_taobao_id']));
				$temResult->target_title_search = 4;
				echo $temResult->target_taobao_title1 = $TaobaoSources[0]->taobao_source_taobao_title;
				echo '<br>';
				echo $temResult->target_taobao_title2 = $TaobaoSources[1]->taobao_source_taobao_title;
				echo '<br>';
				$temResult->target_taobao_title3 = $TaobaoSources[2]->taobao_source_taobao_title;
				$temResult->source_taobao_id1 = $TaobaoSources[0]->taobao_source_taobao_id;
				$temResult->source_taobao_id2 = $TaobaoSources[1]->taobao_source_taobao_id;
				$temResult->source_taobao_id3 = $TaobaoSources[2]->taobao_source_taobao_id;
				$temResult->source_taobao_keyword1 = $TaobaoSources[0]->key;
				$temResult->source_taobao_keyword2 = $TaobaoSources[1]->key;
				$temResult->source_taobao_keyword3 = $TaobaoSources[2]->key;
				$temResult->save();
			}elseif($count == 2)
			{
				//modify the Target
				$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$targetResult['target_taobao_id']));
				$temResult->target_title_search = 3;
				echo $temResult->target_taobao_title1 = $TaobaoSources[0]->taobao_source_taobao_title;
				echo '<br>';
				echo $temResult->target_taobao_title2 = $TaobaoSources[1]->taobao_source_taobao_title;
				echo '<br>';
				$temResult->source_taobao_id1 = $TaobaoSources[0]->taobao_source_taobao_id;
				$temResult->source_taobao_id2 = $TaobaoSources[1]->taobao_source_taobao_id;
				$temResult->source_taobao_keyword1 = $TaobaoSources[0]->key;
				$temResult->source_taobao_keyword2 = $TaobaoSources[1]->key;
				$temResult->save();
			}
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	public function actionTest()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		print 'It is working!<br>';
		echo time().'<br>';
		$salt = 1414197831;
		$password = 'woogle';
		echo md5($salt.$password);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}