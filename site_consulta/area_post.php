    <?php
    include("conexao.php");
    $id_grandearea = $_REQUEST['id_grandearea'];
    $res_area = "SELECT * FROM area WHERE area_id = $id_grandearea ORDER BY area";
    $resultado_area = mysqli_query($link, $res_area);

    while ($row_area = mysqli_fetch_assoc($resultado_area)){
        $areas_post[] = array(
                'id' => $row_area['id'],
            'area' => utf8_encode($row_area['area']),
        );
    }

    echo (json_encode($areas_post));

    ?>
