<?php 
require('includes/top.php');

$dataTable = new DataTable($VolleyStats);
$dataTable->type = 'teams';
$dataTable->context = 'per_game';
$dataTable->length = 30;
$dataTable->query = "
SELECT teams.team_name name, competitions.gender
    ,COUNT(player_stats.player_id) as games_played 

    ,SUM(player_stats.points_total)/COUNT(player_stats.player_id) as points_total
    ,SUM(player_stats.receive_error+player_stats.spike_error+player_stats.serve_error)/COUNT(player_stats.player_id) as error_total
    ,SUM(player_stats.break_points)/COUNT(player_stats.player_id) as break_points 
    ,SUM(player_stats.win_loss)/COUNT(player_stats.player_id) as win_loss

    ,SUM(player_stats.serve_total)/COUNT(player_stats.player_id) as serve_total 
    ,SUM(player_stats.serve_ace)/COUNT(player_stats.player_id) as serve_ace 
    ,SUM(player_stats.serve_error)/COUNT(player_stats.player_id) as serve_error

    ,SUM(player_stats.receive_total)/COUNT(player_stats.player_id) as receive_total 
    ,SUM(player_stats.receive_position)/COUNT(player_stats.player_id) as receive_position 
    ,SUM(player_stats.receive_perfect)/COUNT(player_stats.player_id) as receive_perfect
    ,SUM(player_stats.receive_error)/COUNT(player_stats.player_id) as receive_error
    ,SUM(player_stats.receive_position)/SUM(player_stats.receive_total)*100 as receive_pos_percent
    ,SUM(player_stats.receive_perfect)/SUM(player_stats.receive_total)*100 as receive_perf_percent
    
    ,SUM(player_stats.spike_total)/COUNT(player_stats.player_id) as spike_total 
    ,SUM(player_stats.spike_win)/COUNT(player_stats.player_id) as spike_win 
    ,SUM(player_stats.spike_error)/COUNT(player_stats.player_id) as spike_error 
    ,SUM(player_stats.spike_blocked)/COUNT(player_stats.player_id) as spike_blocked
    ,SUM(player_stats.spike_win)/SUM(player_stats.spike_total)*100 as kill_percent
    ,(SUM(player_stats.spike_win)-SUM(player_stats.spike_error)-SUM(player_stats.spike_blocked))/SUM(player_stats.spike_total) as spike_eff          
    
    ,SUM(player_stats.block_win)/COUNT(player_stats.player_id) as block_win
FROM player_stats 
    INNER JOIN teams ON teams.id = player_stats.team_id 
    INNER JOIN competitions ON competitions.id = teams.competition_id
    LEFT JOIN excluded_games ON player_stats.game_id = excluded_games.game_id
WHERE excluded_games.game_id IS NULL
GROUP BY teams.team_name, competitions.gender HAVING games_played > 100
ORDER BY points_total DESC
";

if ((get('draw'))){
    $dataTable->ajax($_GET);
    exit;
}

$loadElements = array("jQuery","DataTables");
require('includes/header.php');

echo '<p>Hold med mindre end 100 kampe er undtaget fra denne liste.</p>';

$dataTable->print();

require('includes/footer.php');