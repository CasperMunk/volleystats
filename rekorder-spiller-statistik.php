<?php 
require('includes/top.php');
$loadElements = array("jQuery","records.js");
require('includes/header.php');

$VolleyStats->setRecordType('player');
$tabs = $VolleyStats->getRecordTabs();
?>
<div class="row">
	<div class="col-md">
		<nav class="nav nav-pills btn-group record-tabs mb-2 mb-md-0">
			<?php 
			foreach ($tabs as $key => $tab){
				echo '<a class="btn btn-outline-primary text-nowrap'.(($tab === reset($tabs)) ? ' active' : '').'" id="nav-'.$key.'-tab" data-bs-toggle="tab" href="#nav-'.$key.'" role="tab">'.$tab.'</a>';
			}
			?>
		</nav>
	</div>
	<div class="col-md text-md-end">
		<?php include("includes/gender_picker.php") ?>
	</div>
</div>

<div class="tab-content" id="nav-tabContent">
	<?php 
	foreach ($tabs AS $key => $tab){
		echo '<div class="tab-pane fade show'.(($tab === reset($tabs)) ? ' active' : '').'" id="nav-'.$key.'" role="tabpanel">';
		
		foreach ($VolleyStats->getRecordGroups($key) as $group){
			echo '<h5 class="mt-2">'.$group['title'].'</h5>
			<ol class="records">';
				
				    foreach ($VolleyStats->getRecords($group['id']) as $record){
				        echo '
				        <li class="'.$record['gender'].' '.($record['current'] ? ' current' : '').'">';
				            echo '<a href="https://dvbf-web.dataproject.com/MatchStatistics.aspx?mID='.$record['game_id'].'" target="_blank">';
				                echo '
				                <span class="player_name">'.$record['player_name'].'</span>
				                <span class="description">('.$record['record_value'].')</span>
								';
							echo '</a>';
				        echo '</li>
				        ';
				    }
			echo '</ol>';
		}

		echo '</div>';
	}	
	?>
</div>

<?php require('includes/footer.php');