<?php // p($total_revenue,0); p($notes); ?>
<div class="revenue-main-wrapper mt-5">
    <div class="container">

            <div class="col-12 revenue-col">
              <h2 class="main-head-wrapper">
                <span>TOTAL REVENUE GENERATED</span>
                <span>$ {{ numberformat($total_amount['total']) }}</span>
              </h2>
              <h4>SONG WRITING & COMPOSING REVENUE</h4>
              @foreach($notes as $key=>$row)
              <?php  $total_amount = isset($row['total'])?$row['total']:0; ?>
              <div class="single-row-revenue">
                <h5>
                  <span>{{ $row['title'] }} </span>
                  <span>${{numberformat($total_amount) }}</span>
                </h5>
                <p>{{ $row['desc'] }}</p>
              </div>
              <?php //} ?>
              @endforeach

            </div>

    </div>
</div>
