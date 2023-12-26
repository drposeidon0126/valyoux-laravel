<?php if(!empty($investors_list)){
    if($totalnumber>10){
        unset($investors_list[$totalnumber-1]);
    } 
?>
    <?php foreach($investors_list as $row) {
        $your_share = ($row->qty/($row->total_supply+$row->circulating_supply))*100;
        ?>
        <tr>
            <td>
                <div class="team">
                    <a href="artist/stock-price/<?= $row->artist_id?>" class="team-member d-inline-block"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="<?= $row->brand ?>">
                        <img src="<?= asset($row->photo) ?>" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                alt="">
                    </a>
                    <span style="margin-left: 20px;"><?= $row->brand ?></span>
                </div>
            </td>
            <td>
                <div class="text-muted">
                    <h5 class="font-size-14 mb-1"><?= $row->qty ?></h5>
                </div>
            </td>
            <td>
                <div class="text-muted">
                    <h5 class="font-size-14 mb-1">$<?= $row->stock_value ?></h5>
                </div>
            </td>
            <td>
                <h5 class="font-size-14 mb-1">$<?= $row->total_cost ?></h5>
                
            </td>
            <td>
            <h5 class="font-size-14 mb-1">$<?= $row->stock_value * $row->quantity;?></h5> 
            </td>
            <td>
                <h5 class="font-size-14 mb-1"><?= rtrim(rtrim(sprintf('%.8F', ($row->dividend_payments )), '0'), ".")?>%</h5>
                
            </td>
            <td><h5 class="font-size-14 mb-1"><?= sprintf('%f', $your_share); ?>%</h5></td>
            
            <td>
                <a href="artist/stock-price/<?= $row->artist_id?>"  class="btn btn-black btn-sm w-xs mb-1">View</a>
            </td>
        </tr>
    <?php } ?>

<?php   }else{ ?>
            <tr class="text-center"><td colspan="8">You haven’t yet Invested or purchased stocks in any music artist brands listed on Valyou X. Please visit the market page to begin.</td></tr>
<?php   } ?>

<?php   if($totalnumber>10){ ?>
            <tr class="pagination-loadmore " style="text-align: center;">
            <td colspan="6"><a href="javascript:void(0);"  data-id="<?php echo $last_id ?>" class="text-success loadbtn2">
            Load more </a></td>
            </tr>

<?php   } ?>
                            
                            
                            