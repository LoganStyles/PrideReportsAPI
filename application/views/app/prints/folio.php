<?php ?>

<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="">
                <div>
                    <div class="" style="text-align: center;font-weight: 700;">
                        <?php if (count($collection) > 0) { ?>
                            <?php
                            $content = $client_name = $room_number = $reservation_id = "";
                            $count = 1;
                            foreach ($collection as $row):
                                $folio_id = $row["ID"];
                                $reservation_id = $row["reservation_id"];
                                $description = $row["description"];
                                $client_name = strtoupper($row["client_name"]);
                                $room_number = $row["folio_room_number"];
                                $debit = number_format($row["debit"], 2);
                                $credit = number_format($row["credit"], 2);
                                $date = (strtotime($row["date_modified"]) > strtotime($row["date_created"])) ? (date('d/m/Y', strtotime($row["date_modified"]))) : (date('d/m/Y', strtotime($row["date_created"])));

                                $signature = $row["signature_created"];
                                if (!empty($row["signature_modified"])) {
                                    $signature = $row["signature_modified"];
                                }

                                $content.="<tr class=\"booking_radio\">";
                                $content.="<td><input class=\"booking_hidden_id\" type=\"hidden\" value=\"$folio_id\">"
                                        . "$date</td>";
                                $content.="<td>$description</td>";
                                $content.="<td>$debit</td>";
                                $content.="<td>$credit</td>";
                                $content.="</tr>";

                                $count++;
                            endforeach;
                            
                            echo $client_name . ' (ROOM ' . $room_number . ', RESERVATION ' . $reservation_id . ') ('.$bill_type.')';
                            ?>
                        <?php } ?>
                        
                    </div>
                    <div class="clearfix"></div>

                </div>
                
            </header>

            <div class="panel-body"><p style="font-weight: 700;color: #f00;"> </p>
                <table class="table  table-hover general-table table-bordered table-condensed">
                    <thead>
                        <tr>                   
                            <th>Date</th>
                            <th>Description</th>
                            <th>Debit</th>
                            <th>Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($collection) > 0) { ?>
                            <?php echo $content; ?>
                        <?php } ?>
                    </tbody>
                </table>

                <?php
                if (strlen($pagination)) {
                    echo $pagination;
                }
                ?>

            </div>
        </section>
    </div>

</div>
<div class="row" >
    <div style="margin-left: 30px;color: #000;font-weight: 700">
        <div>TOTAL SALES: &nbsp;&nbsp;N<?php echo $sale_total; ?></div>
        <div>AMOUNT RECEIVED: &nbsp;&nbsp;N<?php echo $payment_total; ?></div>
        <div>BALANCE DUE: &nbsp;&nbsp;N<?php echo $balance_left; ?></div>
    </div>
</div>

<div class="row">
    <div class="pull-right" id="print_box">
        <div class="col-sm-12">
            <?php
            $buttons = "<a onclick=\"printAction('print','".$this->session->folio_back_uri."');\" type=\"button\" class=\"btn btn-primary \"><i class=\"fa fa-print\"></i>&nbsp;Print</a>&nbsp;";
            $buttons.="<a href=\"" . $this->session->folio_back_uri . "\" type=\"button\" class=\"btn btn-danger \"><i class=\"fa fa-times\"></i>&nbsp;Close</a>&nbsp;";

            echo $buttons;
            ?>
        </div>
    </div>
</div>
</div>

<!--body wrapper end-->


