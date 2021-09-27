<? 
	require_once 'header.php';
	$word = new TWords(); 
	$tops= $word->GetWords($_POST['from_date'], $_POST['to_date']);


?>
    <div class="wrapper">
    <div class="center">
        <table class="table_words">
            <tr class="title_word">
                <th>Word</th>
                <th>Count</th>
                <th>Date</th>
            </tr>
            <?
            foreach ($tops as $row) { ?>
                <tr>
                    <td><?=$row['b_word']?></td>
                    <td><?=$row['b_count']?></td>
                    <td><?=$row['b_date']?></td>
                </tr>
            <? } ?>
        </table>
    </div>

    </div>

<?php
require_once 'footer.php';