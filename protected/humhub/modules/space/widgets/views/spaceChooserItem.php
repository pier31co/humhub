<?php
/* @var $space \humhub\modules\space\models\Space */

use yii\helpers\Html;
use humhub\libs\Helpers;

?>

<li<?= (!$visible) ? ' style="display:none"' : '' ?> data-space-chooser-item <?= $data ?> data-space-guid="<?= $space->guid; ?>">
    <a href="<?php echo $space->getUrl(); ?>">
        
        <div class="media">
            <?= \humhub\modules\space\widgets\Image::widget([
                'space' => $space,
                'width' => 24,
                'htmlOptions' => [
                    'class' => 'pull-left',
                ]]);?>
            <div class="media-body">
                <strong class="space-name"><?php echo Html::encode($space->name); ?></strong>
                <?= $badge ?>
                <?php if ($updateCount > 0): ?>
                    <div class="badge badge-space pull-right tt" title="<?= Yii::t('SpaceModule.widgets_views_spaceChooserItem', 'New entries') ?>">
                        <?= $updateCount; ?>
                    </div>
                <?php endif; ?>
                <br>
                <p><?php echo Html::encode(Helpers::truncateText($space->description, 60)); ?></p>
            </div>
        </div>
    </a>
    
</li>
