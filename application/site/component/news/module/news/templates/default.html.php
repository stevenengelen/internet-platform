<?
/**
 * Belgian Police Web Platform - News Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */
?>

<? $site = object('application')->getCfg('site') ?>

<? foreach ($articles as $article) : ?>
    <div class="media<?= !$article->thumbnail ? ' media--imageless' : ''; ?>">
        <? if($article->thumbnail): ?>
            <a tabindex="-1" class="media__object thumbnail" href="<?= '/'.$site.'/nieuws/'.$article->id.'-'.$article->slug ?>">
                <img class="media__object" align="right" width="64" height="50" src="/files/<?= $site ?>/attachments/<?= $article->path; ?>" />
            </a>
        <? endif; ?>
        <div class="media__body">
            <a class="media__heading" href="<?= '/'.$site.'/nieuws/'.$article->id.'-'.$article->slug ?>"><?= $article->title ?></a>

            <div class="muted" style="font-size: 0.85em">
                <?= helper('date.format', array('date'=> $article->ordering_date, 'format' => translate('DATE_FORMAT_LC5'))) ?>
            </div>
        </div>
    </div>
<? endforeach; ?>
