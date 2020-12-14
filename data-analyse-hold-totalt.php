<?php 
require('includes/top.php');
$loadElements = array("jQuery","DataTables");
require('includes/header.php'); 

$dataTable = new DataTable();
$dataTable->setHeaders(
    array(
        array(
            array(
                'title' => 'Generelt',
                'colspan' => 4,
                'rowspan' => null,
                'category' => null,
            ),
            array(
                'title' => 'Point',
                'colspan' => 4,
                'rowspan' => null,
                'category' => null,
            ),
            array(
                'title' => 'Serv',
                'colspan' => 3,
                'rowspan' => null,
                'category' => null,
            ),
            array(
                'title' => 'Modtagning',
                'colspan' => 4,
                'rowspan' => null,
                'category' => null,
            ),
            array(
                'title' => 'Angreb',
                'colspan' => 4,
                'rowspan' => null,
                'category' => null,
            ),
            array(
                'title' => 'Blok',
                'colspan' => null,
                'rowspan' => null,
                'category' => null,
            )
        ),
        array(
            array(
                'title' => '#',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Generelt',
            ),
            array(
                'title' => 'Klubnavn',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Generelt',
            ),
            array(
                'title' => 'Køn',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Generelt',
            ),
            array(
                'title' => 'Kampe spillet',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Generelt',
            ),
            array(
                'title' => 'Total',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Point',
            ),
            array(
                'title' => 'Fejl',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Point',
            ),
            array(
                'title' => 'BP',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Point',
            ),
            array(
                'title' => 'VT',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Point',
            ),
            array(
                'title' => 'Total',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Serv',
            ),
            array(
                'title' => 'Fejl',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Serv',
            ),
            array(
                'title' => 'Es',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Serv',
            ),
            array(
                'title' => 'Total',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Modtagning',
            ),
            array(
                'title' => 'Fejl',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Modtagning',
            ),
            array(
                'title' => 'Pos',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Modtagning',
            ),
            array(
                'title' => 'Perf',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Modtagning',
            ),
            array(
                'title' => 'Total',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Angreb',
            ),
            array(
                'title' => 'Fejl',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Angreb',
            ),
            array(
                'title' => 'Blok',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Angreb',
            ),
            array(
                'title' => 'Perf',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Angreb',
            ),
            array(
                'title' => 'Point',
                'colspan' => null,
                'rowspan' => null,
                'filter_button' => false,
                'category' => 'Blok',
            )
        )
    )
);

$dataTable->setColumnDefs(
    array(
        array(
            // 'title' => '#',
            'visible' => 'true',
            'className' => '"noColVis colvisGroupGenerelt"',
            'orderable' => 'false',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Klubnavn',
            'visible' => 'true',
            'className' => '"noColVis colvisGroupGenerelt"',
            'orderable' => 'true',
            'searchable' => 'true',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Køn',
            'visible' => 'true',
            'className' => '"colvisGroupGenerelt"',
            'orderable' => 'false',
            'searchable' => 'true',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Kampe spillet',
            'visible' => 'true',
            'className' => '"colvisGroupGenerelt"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Total',
            'visible' => 'true',
            'className' => '"colvisGroupPoint"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => '"desc"'
        ),
        array(
            // 'title' => 'Fejl',
            'visible' => 'false',
            'className' => '"colvisGroupPoint"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'BP',
            'visible' => 'false',
            'className' => '"colvisGroupPoint"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'VT',
            'visible' => 'false',
            'className' => '"colvisGroupPoint"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Total',
            'visible' => 'false',
            'className' => '"colvisGroupServ"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Fejl',
            'visible' => 'false',
            'className' => '"colvisGroupServ"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Es',
            'visible' => 'true',
            'className' => '"colvisGroupServ"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Total',
            'visible' => 'false',
            'className' => '"colvisGroupModtagning"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Fejl',
            'visible' => 'false',
            'className' => '"colvisGroupModtagning"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Pos',
            'visible' => 'false',
            'className' => '"colvisGroupModtagning"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Perf',
            'visible' => 'false',
            'className' => '"colvisGroupModtagning"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Total',
            'visible' => 'false',
            'className' => '"colvisGroupAngreb"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Fejl',
            'visible' => 'false',
            'className' => '"colvisGroupAngreb"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Blok',
            'visible' => 'false',
            'className' => '"colvisGroupAngreb"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Perf',
            'visible' => 'true',
            'className' => '"colvisGroupAngreb"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        ),
        array(
            // 'title' => 'Point',
            'visible' => 'true',
            'className' => '"colvisGroupBlok"',
            'orderable' => 'true',
            'searchable' => 'false',
            'orderSequence' => '[ "desc","asc" ]',
            'order' => null,
        )
    )
);

$data = array();
$query = "
SELECT teams.team_name, competitions.gender
    ,COUNT(player_stats.player_id) as games_played 

    ,SUM(player_stats.points_total) as points_total
    ,SUM(player_stats.receive_error+player_stats.spike_error+player_stats.serve_error) as error_total
    ,SUM(player_stats.break_points) as break_points 
    ,SUM(player_stats.win_loss) as win_loss

    ,SUM(player_stats.serve_total) as serve_total 
    ,SUM(player_stats.serve_ace) as serve_ace 
    ,SUM(player_stats.serve_error) as serve_error

    ,SUM(player_stats.receive_total) as receive_total 
    ,SUM(player_stats.receive_position) as receive_position 
    ,SUM(player_stats.receive_perfect) as receive_perfect
    ,SUM(player_stats.receive_error) as receive_error 
    
    ,SUM(player_stats.spike_total) as spike_total 
    ,SUM(player_stats.spike_win) as spike_win 
    ,SUM(player_stats.spike_error) as spike_error 
    ,SUM(player_stats.spike_blocked) as spike_blocked             
    
    ,SUM(player_stats.block_win) as block_win 
FROM player_stats 
    INNER JOIN teams ON teams.id = player_stats.team_id 
    INNER JOIN competitions ON competitions.id = teams.competition_id
    LEFT JOIN excluded_games ON player_stats.game_id = excluded_games.game_id
WHERE excluded_games.game_id IS NULL
GROUP BY teams.team_name, competitions.gender
";
if ($result = $VolleyStats->db->query($query)) {
    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()) {
            $data[] = array(
                '',
                $row['team_name'],
                array($row['gender'],ucfirst($VolleyStats->translateText($row['gender']))),
                $VolleyStats->formatNumber($row['games_played']),
                $VolleyStats->formatNumber($row['points_total']),
                $VolleyStats->formatNumber($row['error_total']),
                $VolleyStats->formatNumber($row['break_points']),
                $VolleyStats->formatNumber($row['win_loss']),
                $VolleyStats->formatNumber($row['serve_total']),
                $VolleyStats->formatNumber($row['serve_error']),
                $VolleyStats->formatNumber($row['serve_ace']),
                $VolleyStats->formatNumber($row['receive_total']),
                $VolleyStats->formatNumber($row['receive_error']),
                $VolleyStats->formatNumber($row['receive_position']),
                $VolleyStats->formatNumber($row['receive_perfect']),
                $VolleyStats->formatNumber($row['spike_total']),
                $VolleyStats->formatNumber($row['spike_error']),
                $VolleyStats->formatNumber($row['spike_blocked']),
                $VolleyStats->formatNumber($row['spike_win']),
                $VolleyStats->formatNumber($row['block_win'])
            );
        }
    }
}
$dataTable->setData($data);

$dataTable->drawTable();

require('includes/footer.php'); ?>