<?php
$series = str_replace('series=', '', $id);
$seriesid = urldecode($series);

$items = $collection->where(array(
    'series' => $seriesid
))->order('volume', 'asc')->page(1, 10000);
?>



<h2>
	<i class="fa fa-clone" aria-hidden="true"></i><?php echo $lang['DISPLAY_SERIES_TITLE'].$seriesid.$lang['DISPLAY_SERIES_TITLE_SUFFIX']; ?></h2>

<div id="item-list">
  <ul id="genre-list">

<?php
  foreach ($items as $item) {
  /*  $sortable[] = array(
      'volume' => $item->volume(),
      'title' => $item->title(),
      'id' => $item->id()
    );
  }
  var_dump($sortable); */
  echo '<li class="genre"><i class="fa fa-list-ol" aria-hidden="true"></i> '.$lang['VOLUME_PREFIX'].$item->volume().$lang['VOLUME_SUFFIX'].': <a href="display?id='.$item ->id().'">'.$item ->title().'</a></li>';
}
?>
</ul>

</div>
