    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table project-list-table table-nowrap table-centered table-borderless">
                <?php if(count($records) > 0){ ?>
                        <thead>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Singer</th>
                                <th>Audio</th>
                                <th></th>
                        </thead>
                    <tbody>
                       <?php foreach($records as $key=>$row){ ?>
                        <tr>

                            <td>
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b><?php echo e($key+1); ?>. <?php echo e($row->audio_title); ?> </b></a></h3>
                            </td>
                            <td style="width: 150px; max-width:150px; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?php echo e($row->description); ?></td>
                            <td><?php echo e($row->singer); ?></td>

                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <audio controlsList="nodownload" controls><source src="<?php echo e(asset($row->name)); ?>" type="audio/mpeg"></audio>

                                </div>
                            </td>
                            <td>
                                <a href="<?php echo e(route('promote-music')); ?>">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>
               <?php }else{
                            echo '<div class="col-12 videos-div"><p class="no-videos"> This artist has not yet uploaded any audio tracks!</p></div>';
                        } ?>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->
<?php /**PATH /var/www/testvps-main/resources/views/artist/trash/artist_part/_songs.blade.php ENDPATH**/ ?>