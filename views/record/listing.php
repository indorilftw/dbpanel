<?php
    // TODO: paginate
?>
<div class='dataview'><div class='tablewrap'>
    <table>
        <thead>
            <tr>
            <?php
            // TODO: empty tables should not be sortable
            $vars = $_GET;
            foreach ( $columns as $column ) {
                ?><th><a <?php
                if ( $column == $sort ) {
                    ?>class='sortkey'<?php
                    $vars[ 'order' ] = $order == 'DESC'? 'ASC': 'DESC';
                }
                ?> href='?<?php
                $vars[ 'sort' ] = $column;
                echo html( URL_replaceFragment( $vars ) );
                ?>'><?php
                echo html( $column );
                ?></a></th><?php
            }
            ?>
            </tr>
        </thead>
        <tbody><?php
            foreach ( $records as $record ) {
                ?><tr><?php
                foreach ( $record as $value ) {
                    ?><td><?php
                    // TODO: truncate large data fields
                    echo html( $value );
                    ?></td><?php
                }
                ?></tr><?php
            }
        ?></tbody>
    </table>
    <?php
        if ( empty( $records ) ) {
            ?>
            <p class='emptytable'>
                This table is empty.<br />
                <a href=''>Add a row</a> or <a href=''>drop it</a>.
            </div>
            <?php
        }
    ?>
</div></div>
