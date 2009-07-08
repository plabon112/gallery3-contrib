<?php defined("SYSPATH") or die("No direct script access.") ?>
<table class="gMetadata">
  <tbody>
    <tr>
      <th colspan="2"><?= t("HTML Links:") ?></th>
    </tr>

    <tr>
      <th><?= t("Text:") ?></th>
      <td><textarea rows="2" cols="6" height="5" readonly><a href="<?= url::abs_site("{$item->type}s/{$item->id}") ?>">Click Here</a></textarea></td>
    </tr>

    <tr>
      <th><?= t("Thumbnail:") ?></th>
      <td><textarea rows="2" cols="6" height="5" readonly><a href="<?= url::abs_site("{$item->type}s/{$item->id}") ?>"><img src="<?= $item->thumb_url(true) ?>"></a></textarea></td>
    </tr>
  </tbody>
</table>

<table class="gMetadata">
  <tbody>
    <tr>
      <th colspan="2"><?= t("BBCode Links:") ?></th>
    </tr>

    <tr>
      <th><?= t("Text:") ?></th>
      <td><textarea rows="2" cols="6" height="5" readonly>[url=<?= url::abs_site("{$item->type}s/{$item->id}") ?>]Click Here[/url]</textarea></td>
    </tr>

    <tr>
      <th><?= t("Thumbnail:") ?></th>
      <td><textarea rows="2" cols="6" height="5" readonly>[url=<?= url::abs_site("{$item->type}s/{$item->id}") ?>][img]<?= $item->thumb_url(true) ?>[/img][/url]</textarea></td>
    </tr>
  </tbody>
</table>