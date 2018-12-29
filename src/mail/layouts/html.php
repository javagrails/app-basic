<?php

use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */

?>

<?php $this->beginPage() ?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	<?= Html::beginTag('html', ['xmlns' => 'http://www.w3.org/1999/xhtml']) ?>

		<?= Html::beginTag('head') ?>
			<?= Html::tag('meta', '', ['http-equiv' => 'Content-Type',
				'content' => 'text/html;charset=\Yii::$app->charset', ]) ?>
			<?= Html::tag('title', Html::encode($this->title)) ?>
			<?php $this->head() ?>
		<?= Html::endTag('head') ?>

		<?php $this->beginBody() ?>
			<?= Html::beginTag('body') ?>

				<?= $content ?>
		
			<?= Html::endTag('body') ?>
		<?php $this->endBody() ?>	

	<?= Html::endTag('html') ?>

<?php $this->endPage() ?>
