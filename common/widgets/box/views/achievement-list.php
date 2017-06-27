<?php
use yii\data\Pagination;
use yii\widgets\LinkPager;
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-7-20
 * Time: 下午4:29
 */
//$this->title = Yii::t('common', 'Achievements');
//$this->params['breadcrumbs'][] = $this->title;

//$count = $ac->getCount();
//$totalCount = $ac->getTotalCount();
//$pages = new Pagination([ 'totalCount' =>$totalCount, 'pageSize' => 10]);
$data = $ac;
//die('ccc');

?>


<div class="box <?=$css['warper']?>">
    <a href="<?= $url ?>" class="uppercase">
        <div class="box-header <?= $css['header'] ?>">
            <i class="<?= $css['icon'] ?>"></i>

            <h3 class="box-title <?= $css['title'] ?> text-blue"><?= $title ?> </h3>
            <div class="list-white-bg"></div>
            <div class="box-tools pull-right"></div>
        </div>
    </a>
    <div class="box-body">
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover table-tab">
                                <tbody><tr >
                                    <th class="tab-th"> </th>
                                    <th class="tab-th">题目</th>
                                    <th class="tab-th">作者</th>
                                    <th class="tab-th">期刊</th>


                                </tr>
                                <?php foreach($data as $v){ ?>
                                    <tr>
                                        <td width="70"><?= $v['year_id'] ?></td>

                                        <td><?= $v['title'] ?></td>
                                        <td><?= $v['author'] ?></td>
                                        <td><?= $v['periodical'] ?>
                                            <br><?= $v['serial_number'] ?>
                                        </td>

                                    </tr>
                                <?php } ?>

                                </tbody>

                            </table>

                        </div>

                        <div class="box-footer clearfix">

                        </div>

                </div>



            </div>
</div>
</div>



