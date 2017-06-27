<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 17-6-26
 * Time: 下午8:31
 */
use yii\helpers\Url;
?>
<div class="block_tabs_type_4">
    <div class="tabs">
        <ul>
            <li><a href="#1" class="current"><?= $title ?></a></li><!-- tab link -->
            <li><a href="#2" class="">Recent</a></li><!-- tab link -->
        </ul>
    </div>

    <div class="tab_content" style="display: block;">
        <!-- tab content goes here -->
        <?php foreach ($ac as $m): ?>
            <div class="block_home_news_post">
                <div class="info">
                    <div class="date"><p><?= Yii::$app->formatter->asDate($m->created_at, 'Y-M-dd') ?></p></div>
                    <div class="r_part">
                        <a href="#" class="views"><i class="fa fa-eye"></i> <?= $m->trueView?>浏览</a>
                    </div>
                </div>
                <p class="title">
                    <a href="<?= Url::to(['/article/view', 'id' => $m->id]) ?>"><?= $m->title ?></a>
                </p>
            </div>

        <?php endforeach; ?>


        <a href="#" class="lnk_all_news fl">全部<?= $title ?></a>
        <div class="clearboth"></div>
    </div>

    <div class="tab_content" style="display: none;">
        <!-- tab content goes here -->
        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>06.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class=""><i class="fa  fa-eye"></i> 33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Search will uncover many variations of passages of available.</a></p>
        </div>

        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>11.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Many desktop publishing packages and web page editors.</a></p>
        </div>

        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>08.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Web page editors now use. Model text, and a search for will.</a></p>
        </div>

        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>10.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Publishing packages and web page editors now useas their default.</a></p>
        </div>

        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>10.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Web page editors now use. Model text, and a search for will.</a></p>
        </div>

        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>09.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Search will uncover many variations of passages available.</a></p>
        </div>

        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>09.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Publishing packages and web page editors now useas their.</a></p>
        </div>

        <div class="separator" style="height:7px;"></div>

        <a href="#" class="lnk_all_news fl">All Recent News</a>

        <div class="clearboth"></div>
    </div>

    <div class="tab_content" style="display: none;">
        <!-- tab content goes here -->
        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>11.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Many desktop publishing packages and web page editors.</a></p>
        </div>

        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>10.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Publishing packages and web page editors now useas their default.</a></p>
        </div>

        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>10.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Web page editors now use. Model text, and a search for will.</a></p>
        </div>

        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>09.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Search will uncover many variations of passages available.</a></p>
        </div>

        <div class="block_home_news_post">
            <div class="info">
                <div class="date"><p>09.06.2012</p></div>
                <div class="r_part">
                    <a href="#" class="views">33</a>
                    <a href="#" class="comments">22</a>
                </div>
            </div>
            <p class="title"><a href="news_post.html">Publishing packages and web page editors now useas their.</a></p>
        </div>

        <div class="separator" style="height:7px;"></div>

        <a href="#" class="lnk_all_news fl">All Comments</a>

        <div class="clearboth"></div>
    </div>

    <script type="text/javascript">
        $('.block_tabs_type_4 .tabs').tabs('.block_tabs_type_4 .tab_content', {
            initialIndex : 0
        });
    </script>
</div>
